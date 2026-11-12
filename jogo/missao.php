<?php
// 1. Configuração de erros e sessão
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

// 2. Proteção de acesso
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../html/sign-in.php");
    exit;
}

require_once '../html/includes/db.php';

$usuario_id  = $_SESSION['usuario_id'];
$unidade_id  = filter_input(INPUT_GET, 'unidade_id', FILTER_VALIDATE_INT) ?: 1;
$missao_id   = filter_input(INPUT_GET, 'missao_id', FILTER_VALIDATE_INT) ?: 1;
$parte_ativa = filter_input(INPUT_GET, 'parte', FILTER_VALIDATE_INT) ?: 1;

// 1. Verifica se completou os 3 depoimentos com nota >= 6.0 para liberar a Missão 4 (Quiz Final)
$stmt_check = $conn->prepare("
    SELECT COUNT(DISTINCT missao_id) 
    FROM progresso 
    WHERE usuario_id = ? AND missao_id IN (1, 2, 3) AND pontuacaoGeral >= 6.00
");
$stmt_check->execute([$usuario_id]);
$missoes_concluidas = $stmt_check->fetchColumn();

if ($missoes_concluidas >= 3) {
    $_SESSION['desbloqueadas'][4] = true;
    
    $stmt_unlock = $conn->prepare("
        INSERT INTO progresso (usuario_id, missao_id, pontuacaoGeral, desbloqueada)
        VALUES (?, 4, 0.00, 1)
        ON DUPLICATE KEY UPDATE desbloqueada = 1
    ");
    $stmt_unlock->execute([$usuario_id]);
}

// 2. Carrega todas as missões desbloqueadas do usuário no MySQL
$stmt_desb = $conn->prepare("SELECT missao_id FROM progresso WHERE usuario_id = ? AND desbloqueada = 1");
$stmt_desb->execute([$usuario_id]);
$missoes_liberadas = $stmt_desb->fetchAll(PDO::FETCH_COLUMN);

if (empty($missoes_liberadas)) {
    $missoes_liberadas = [1];
}

$_SESSION['desbloqueadas'] = array_fill_keys($missoes_liberadas, true);

// 3. Valida a trava de acesso via URL
if (!isset($_SESSION['desbloqueadas'][$missao_id]) || !$_SESSION['desbloqueadas'][$missao_id]) {
    $_SESSION['feedback_quiz'] = [
        'tipo' => 'warning',
        'mensagem' => '🔒 Acesso bloqueado: você precisa obter no mínimo 6,0 pontos nos depoimentos anteriores!'
    ];
    header("Location: missao.php?unidade_id={$unidade_id}&missao_id=1&parte=1");
    exit;
}

try {
    // Busca os detalhes da Unidade / Caso Atual
    $stmt = $conn->prepare("SELECT * FROM unidade WHERE id = ?");
    $stmt->execute([$unidade_id]);
    $caso = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$caso) {
        die("Caso criminal não encontrado no sistema.");
    }

    // Busca todas as missões pertencentes a esta unidade
    $stmt = $conn->prepare("SELECT * FROM missao WHERE unidade_id = ? ORDER BY ordem ASC");
    $stmt->execute([$unidade_id]);
    $missoes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Se a tabela missao estiver vazia, define fallback
    if (empty($missoes)) {
        $missoes = [
            ['id' => 1, 'ordem' => 1, 'titulo' => 'Depoimento 001 - Talita'],
            ['id' => 2, 'ordem' => 2, 'titulo' => 'Depoimento 002 - Lídia'],
            ['id' => 3, 'ordem' => 3, 'titulo' => 'Depoimento 003 - Marina'],
            ['id' => 4, 'ordem' => 4, 'titulo' => 'Veredito Final']
        ];
    }

    // Busca o vídeo específico da missão e parte selecionadas
    $stmt = $conn->prepare("SELECT * FROM video WHERE missao_id = ? AND parte = ? LIMIT 1");
    $stmt->execute([$missao_id, $parte_ativa]);
    $video_atual = $stmt->fetch(PDO::FETCH_ASSOC);

    // Busca os sinais do Dicionário cadastrados na introducao para a parte ativa
    $stmt = $conn->prepare("
        SELECT d.sinal, d.definicao, d.midia_link 
        FROM introducao qi
        INNER JOIN dicionario d ON qi.dicionario_id = d.id
        WHERE qi.missao_id = ? AND qi.num_parte = ?
    ");
    $stmt->execute([$missao_id, $parte_ativa]);
    $sinais_introducao = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Busca as perguntas e alternativas da quiz_historia
    $stmt = $conn->prepare("
        SELECT p.id AS pergunta_id, p.texto_pergunta
        FROM pergunta p
        INNER JOIN quiz_historia qh ON p.quiz_historia_id = qh.id
        WHERE qh.missao_id = ? AND qh.num_parte = ?
    ");
    $stmt->execute([$missao_id, $parte_ativa]);
    $perguntas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($perguntas as $key => $p) {
        $stmt_alt = $conn->prepare("SELECT * FROM alternativa_historia WHERE pergunta_id = ? ORDER BY letra ASC");
        $stmt_alt->execute([$p['pergunta_id']]);
        $perguntas[$key]['alternativas'] = $stmt_alt->fetchAll(PDO::FETCH_ASSOC);
    }

} catch (PDOException $e) {
    die("Erro ao carregar a missão: " . $e->getMessage());
}
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MISSIN - Investigação</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo-dark.png" />
  <link rel="stylesheet" href="../assets/css/styles.css" />
  <style>
    .nav-tabs .nav-link {
      color: rgba(255, 255, 255, 0.6) !important;
      background: transparent !important;
      border: none !important;
      transition: all 0.3s ease;
    }
    .nav-tabs .nav-link:hover {
      color: #fff !important;
    }
    .nav-tabs .nav-link.active {
      color: #1a1a1a !important;
      background-color: #ccff66 !important;
      border-radius: 4px 4px 0 0 !important;
      font-weight: bold !important;
    }
    .card-header {
      background-color: #1a1a1a !important;
    }
  </style>
</head>

<body class="bg-dark text-white">

  <!-- Header Principal Único da Plataforma -->
  <?php include '../html/includes/header.php'; ?>

  <div class="container py-5 mt-4">
    
    <!-- ALERTA DE FEEDBACK DA RESPOSTA DO QUIZ -->
    <?php if (isset($_SESSION['feedback_quiz'])): ?>
      <div class="alert alert-<?php echo $_SESSION['feedback_quiz']['tipo']; ?> alert-dismissible fade show text-center shadow fw-bold mb-4" role="alert">
        <?php 
          echo $_SESSION['feedback_quiz']['mensagem']; 
          unset($_SESSION['feedback_quiz']); 
        ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <!-- Título do Caso e Navegação de Depoimentos/Partes -->
    <div class="text-center mb-4">
        <span class="badge bg-primary text-dark text-uppercase px-3 py-2 mb-2">Unidade Operacional <?php echo sprintf('%02d', $caso['id']); ?></span>
        <h1 class="display-5 fw-bold text-white mb-3"><?php echo htmlspecialchars($caso['titulo']); ?></h1>
        
        <!-- Botões Seletores de Depoimento / Missão -->
        <div class="d-flex justify-content-center align-items-center gap-2 mb-3 flex-wrap">
          <?php foreach ($missoes as $m): ?>
            <?php 
              $m_id = $m['id'];
              $m_ordem = isset($m['ordem']) ? $m['ordem'] : $m_id;
              $liberada = isset($_SESSION['desbloqueadas'][$m_id]) && $_SESSION['desbloqueadas'][$m_id];
              $e_final = ($m_id == 4);
            ?>
            
            <?php if ($liberada): ?>
              <a href="missao.php?unidade_id=<?php echo $unidade_id; ?>&missao_id=<?php echo $m_id; ?>&parte=1" 
                 class="btn btn-sm <?php echo ($missao_id == $m_id) ? ($e_final ? 'btn-danger' : 'btn-primary') . ' fw-bold shadow' : 'btn-outline-light'; ?> px-3 py-2">
                <?php echo $e_final ? '🏆 Veredito Final' : 'Depoimento 0' . $m_ordem; ?>
              </a>
            <?php else: ?>
              <button class="btn btn-sm btn-dark text-white-50 border border-secondary px-3 py-2 opacity-75" disabled title="Conclua todas as missões anteriores para desbloquear">
                🔒 <?php echo $e_final ? 'Veredito Final' : 'Depoimento 0' . $m_ordem; ?>
              </button>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>

        <!-- Botões Seletores de Partes (Exibe apenas para depoimentos normais) -->
        <?php if ($missao_id != 4): ?>
          <div class="d-flex justify-content-center gap-2 mt-2">
            <?php for ($i = 1; $i <= 4; $i++): ?>
              <a href="missao.php?unidade_id=<?php echo $unidade_id; ?>&missao_id=<?php echo $missao_id; ?>&parte=<?php echo $i; ?>" 
                 class="btn btn-sm <?php echo ($parte_ativa == $i) ? 'btn-primary fw-bold' : 'btn-outline-light'; ?> px-3">
                PARTE 0<?php echo $i; ?>
              </a>
            <?php endfor; ?>
          </div>
        <?php endif; ?>
    </div>

    <!-- NAVEGAÇÃO E CONTEÚDO DA MISSÃO / QUIZ FINAL -->
<div class="card bg-dark border border-secondary shadow-lg rounded-3 overflow-hidden">
  
  <?php if ($missao_id == 4): ?>
    <!-- ======================================================= -->
    <!-- INTERFACE EXCLUSIVA DO VEREDITO FINAL (TEXTO CORRIDO)  -->
    <!-- ======================================================= -->
    <div class="card-header bg-black text-white p-3 border-bottom border-secondary text-center">
      <h4 class="fw-bold mb-0 text-primary">🏆 Veredito Final da Investigação</h4>
      <small class="text-white-50">Responda a todas as questões com base nos depoimentos e evidências acumuladas.</small>
    </div>

    <div class="card-body p-4 bg-white text-dark">
      <?php if (empty($perguntas)): ?>
        <div class="alert alert-info text-center">Não há perguntas cadastráveis no banco para o Quiz Final.</div>
      <?php else: ?>
        <form action="processa_quiz.php" method="POST">
          <input type="hidden" name="unidade_id" value="<?php echo $unidade_id; ?>">
          <input type="hidden" name="missao_id" value="4">
          <input type="hidden" name="parte" value="1">

          <?php 
          // Mapeamento dos vídeos dos enunciados
          $videos_enunciado = [
              27 => '../assets/videos/quiz_final/v01.mp4',
              28 => '../assets/videos/quiz_final/v02.mp4',
              29 => '../assets/videos/quiz_final/v03.mp4'
          ];
          ?>

          <?php foreach ($perguntas as $index => $q): ?>
            <div class="card mb-5 border-secondary bg-dark text-white shadow-sm overflow-hidden">
              <div class="card-header bg-black py-3">
                <h5 class="fw-bold text-white mb-0">
                  <span class="badge bg-primary text-dark me-2">Questão 0<?php echo ($index + 1); ?></span>
                  <?php echo nl2br(htmlspecialchars($q['texto_pergunta'])); ?>
                </h5>
              </div>

              <div class="card-body p-4">
                <!-- VÍDEO DO ENUNCIADO DA QUESTÃO -->
                <?php if (isset($videos_enunciado[$q['pergunta_id']])): ?>
                  <div class="ratio ratio-16x9 mb-4 bg-black rounded overflow-hidden shadow mx-auto" style="max-width: 600px;">
                    <video controls class="w-100 h-100">
                      <source src="<?php echo $videos_enunciado[$q['pergunta_id']]; ?>" type="video/mp4">
                      Seu navegador não suporta vídeos.
                    </video>
                  </div>
                <?php endif; ?>

                <!-- ALTERNATIVAS DE RESPOSTA -->
                <div class="d-flex flex-column gap-3">
                  <?php foreach ($q['alternativas'] as $alt): ?>
                    <label class="form-check-label border border-secondary rounded p-3 bg-white text-dark d-flex align-items-start gap-3 cursor-pointer shadow-sm">
                      <input class="form-check-input flex-shrink-0 mt-1" type="radio" 
                             name="questao_<?php echo $q['pergunta_id']; ?>" 
                             value="<?php echo $alt['id']; ?>" required>
                      
                      <div class="w-100">
                        <strong class="text-primary me-1"><?php echo $alt['letra']; ?>.</strong>
                        <span class="fw-medium"><?php echo htmlspecialchars($alt['texto']); ?></span>

                        <!-- VÍDEO DA ALTERNATIVA (EX: Q3 - v03a.mp4 / v03b.mp4) -->
                        <?php if (!empty($alt['midia_link'])): ?>
                          <div class="ratio ratio-16x9 mt-3 bg-black rounded overflow-hidden shadow-sm" style="max-width: 360px;">
                            <video controls loop muted playsinline class="w-100 h-100">
                              <source src="<?php echo htmlspecialchars($alt['midia_link']); ?>" type="video/mp4">
                            </video>
                          </div>
                        <?php endif; ?>
                      </div>
                    </label>
                  <?php endforeach; ?>
                </div>

              </div>
            </div>
          <?php endforeach; ?>

          <div class="text-center mt-4">
            <button type="submit" class="btn btn-success btn-lg px-5 py-3 fw-bold shadow">
              Enviar Veredito Final (12,0 Pontos) →
            </button>
          </div>
        </form>
      <?php endif; ?>
    </div>

  <?php else: ?>
    <!-- ======================================================= -->
    <!-- INTERFACE PADRÃO COM ABAS PARA AS MISSÕES 1, 2 E 3      -->
    <!-- ======================================================= -->
    <div class="card-header p-0 border-bottom border-secondary">
      <ul class="nav nav-tabs border-0" id="gameTabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active text-white border-0 px-4 py-3 fw-bold" id="quiz1-tab" data-bs-toggle="tab" data-bs-target="#quiz1-content" type="button" role="tab">
              1. Introdução & Sinais (Parte <?php echo $parte_ativa; ?>)
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link text-white border-0 px-4 py-3 fw-bold" id="video-tab" data-bs-toggle="tab" data-bs-target="#video-content" type="button" role="tab">
              2. Depoimento em Libras
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link text-white border-0 px-4 py-3 fw-bold" id="quiz2-tab" data-bs-toggle="tab" data-bs-target="#quiz2-content" type="button" role="tab">
              3. Resolução do Mistério
          </button>
        </li>
      </ul>
    </div>

    <div class="card-body p-4 bg-white text-dark">
      <div class="tab-content" id="gameTabsContent">
        
        <!-- ABA 1: VOCABULÁRIO PRÉVIO -->
        <div class="tab-pane fade show active" id="quiz1-content" role="tabpanel">
          <h3 class="fw-bold text-dark mb-2">Preparação do Investigador</h3>
          <p class="text-muted mb-4">Estude os sinais em Libras apresentados abaixo antes de analisar esta etapa do depoimento.</p>
          
          <?php if (empty($sinais_introducao)): ?>
            <div class="alert alert-info">Nenhum sinal específico cadastrado para a Parte <?php echo $parte_ativa; ?>. Assista ao vídeo diretamente na Aba 2.</div>
          <?php else: ?>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
              <?php foreach ($sinais_introducao as $sinal): ?>
                <div class="col">
                  <div class="card h-100 border shadow-sm text-center">
                    <div class="card-img-top bg-black p-2 d-flex align-items-center justify-content-center" style="height: 180px;">
                      <video src="<?php echo htmlspecialchars($sinal['midia_link']); ?>" controls loop muted playsinline class="mw-100 mh-100 rounded"></video>
                    </div>
                    <div class="card-body py-2">
                      <h5 class="fw-bold text-dark mb-1"><?php echo htmlspecialchars($sinal['sinal']); ?></h5>
                      <p class="text-muted small mb-0"><?php echo htmlspecialchars($sinal['definicao']); ?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>

        <!-- ABA 2: VÍDEO DO DEPOIMENTO -->
        <div class="tab-pane fade" id="video-content" role="tabpanel">
          <h3 class="fw-bold text-dark mb-2">Análise do Depoimento - Parte 0<?php echo $parte_ativa; ?></h3>
          <p class="text-muted">Assista ao depoimento com atenção para extrair pistas sobre o paradeiro de Ana.</p>
          
          <?php if ($video_atual): ?>
            <div class="ratio ratio-16x9 my-4 bg-black rounded overflow-hidden shadow">
              <video controls autoplay class="w-100 h-100">
                <source src="<?php echo htmlspecialchars($video_atual['video_link']); ?>" type="video/mp4">
                Seu navegador não suporta a reprodução deste vídeo.
              </video>
            </div>
            <h5 class="fw-bold text-dark"><?php echo htmlspecialchars($video_atual['titulo']); ?></h5>
          <?php else: ?>
            <div class="alert alert-warning py-4 text-center my-4">
              Vídeo não encontrado para a Parte <?php echo $parte_ativa; ?> no banco de dados.
            </div>
          <?php endif; ?>
        </div>

        <!-- ABA 3: RESOLUÇÃO DO MISTÉRIO DAS MISSÕES NORMAIS -->
        <div class="tab-pane fade" id="quiz2-content" role="tabpanel">
          <h3 class="fw-bold text-dark mb-2">Veredito da Investigação - Parte 0<?php echo $parte_ativa; ?></h3>
          <p class="text-muted mb-4">Responda às questões com base no depoimento em Libras analisado.</p>
          
          <?php if (empty($perguntas)): ?>
            <div class="alert alert-info">Não há perguntas cadastradas para a Parte <?php echo $parte_ativa; ?>.</div>
          <?php else: ?>
            <form action="processa_quiz.php" method="POST">
              <input type="hidden" name="unidade_id" value="<?php echo $unidade_id; ?>">
              <input type="hidden" name="missao_id" value="<?php echo $missao_id; ?>">
              <input type="hidden" name="parte" value="<?php echo $parte_ativa; ?>">

              <?php foreach ($perguntas as $index => $q): ?>
                <div class="card mb-4 border-secondary bg-dark text-white shadow-sm">
                  <div class="card-body">
                    <h5 class="fw-bold text-white mb-3">
                      <span class="badge bg-primary text-dark me-2">Q<?php echo ($index + 1); ?></span>
                      <?php echo htmlspecialchars($q['texto_pergunta']); ?>
                    </h5>
                    
                    <div class="d-flex flex-column gap-2 ms-2">
                      <?php foreach ($q['alternativas'] as $alt): ?>
                        <label class="form-check-label border border-secondary rounded p-3 bg-white text-dark d-flex align-items-center gap-3 cursor-pointer">
                          <input class="form-check-input flex-shrink-0" type="radio" 
                                 name="questao_<?php echo $q['pergunta_id']; ?>" 
                                 value="<?php echo $alt['id']; ?>" required>
                          <div>
                            <strong class="text-primary me-1"><?php echo $alt['letra']; ?>.</strong>
                            <?php echo htmlspecialchars($alt['texto']); ?>
                          </div>
                        </label>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>

              <button type="submit" class="btn btn-success btn-lg px-5 fw-bold shadow">
                Enviar Respostas da Parte <?php echo $parte_ativa; ?> →
              </button>
            </form>
          <?php endif; ?>
        </div>

      </div>
    </div>
  <?php endif; ?>

</div>

  </div>

  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- SCRIPT ESSENCIAL PARA AS LINHAS DO MENU HAMBÚRGUER -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>