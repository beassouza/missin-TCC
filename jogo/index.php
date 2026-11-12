<?php
// 1. Configurações de erro e sessão
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

$mostrar_modal = false;

require_once '../html/includes/functions.php';

// Bloqueia se o visitante não estiver logado
exigirAutenticacao();

$usuario_id = $_SESSION['usuario_id'];

// 2. Busca de dados do banco com fallback seguro
$unidades = [];
$mensagem_erro = null;
$caminho_db = '../html/includes/db.php';

if (file_exists($caminho_db)) {
    require_once $caminho_db;
    try {
        $stmt = $conn->query("SELECT * FROM unidade ORDER BY id ASC");
        $unidades = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        $mensagem_erro = "Erro no banco de dados: " . $e->getMessage();
    }
} else {
    $mensagem_erro = "Erro Crítico: O arquivo de conexão não foi encontrado em: <b>" . realpath('../') . "/html/includes/db.php</b>";
}

// 3. Verificação do Modal de Vitória
if (isset($_GET['caso_concluido']) && isset($_SESSION['modal_caso_concluido'])) {
    $dados_modal = $_SESSION['modal_caso_concluido'];
    $mostrar_modal = true;
    // Limpa a variável para o modal não reabrir ao atualizar a página (F5)
    unset($_SESSION['modal_caso_concluido']);
}
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MISSIN - Menu de Casos</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo-dark.png" />
  <link rel="stylesheet" href="../assets/css/styles.css" />
  <style>
    /* Trava o tamanho do logótipo para impedir que o SVG expanda */
    .logo-img {
      max-height: 40px !important;
      width: auto !important;
      display: block;
    }
    /* Garante visibilidade imediata sem depender do script AOS */
    .portfolio, .portfolio-img, [data-aos] {
      opacity: 1 !important;
      transform: none !important;
      visibility: visible !important;
    }
    .portfolio:hover {
      transform: translateY(-4px) !important;
      transition: transform 0.3s ease;
    }
  </style>
</head>

<body class="bg-dark text-white">

  <!-- Header Principal Único da Plataforma -->
  <?php include '../html/includes/header.php'; ?>

  <div class="container py-5 mt-4">

    <!-- FEEDBACK DE MENSAGENS DE ERRO OU DE QUIZ -->
    <?php if (isset($_SESSION['feedback_quiz'])): ?>
      <div class="alert alert-<?php echo $_SESSION['feedback_quiz']['tipo']; ?> alert-dismissible fade show text-center shadow-lg mb-4 fw-bold" role="alert">
        <?php 
          echo $_SESSION['feedback_quiz']['mensagem']; 
          unset($_SESSION['feedback_quiz']); 
        ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <?php if ($mensagem_erro): ?>
      <div class="alert alert-danger text-center shadow-lg d-block w-100 py-4 my-5">
        <?php echo $mensagem_erro; ?>
      </div>
    <?php else: ?>

      <!-- 1. BLOCO DA VIDEOAULA INTRODUTÓRIA -->
      <div class="portfolio bg-secondary p-4 p-lg-5 rounded-3 shadow mb-5 border border-secondary">
        <div class="row align-items-center g-4">
          <div class="col-lg-7">
            <div class="ratio ratio-16x9 rounded overflow-hidden shadow-lg bg-black">
              <iframe 
                src="https://drive.google.com/file/d/1B0zd5eushdWXh1nSRmmDDGOIzrkarQ1m/preview" 
                title="Videoaula Introdutória de LIBRAS"
                allow="autoplay" 
                allowfullscreen>
              </iframe>
            </div>
          </div>
          <div class="col-lg-5">
            <span class="text-primary fw-bold text-uppercase fs-6 d-block mb-2">Treinamento Opcional</span>
            <h2 class="fw-bold text-white mb-3">Videoaula Introdutória de LIBRAS</h2>
            <p class="text-white-50 fs-6 lh-base mb-0">
              Antes de jogar, que tal assistir uma aulinha introdutória para ter menos dificuldade na hora de resolver as missões - a não ser, é claro, que você já saiba LIBRAS -?
            </p>
          </div>
        </div>
      </div>

      <!-- 2. GRID DE CASOS DO BANCO DE DADOS + CASO 02 FALSO -->
      <?php if (empty($unidades)): ?>
        <div class="alert alert-info text-center shadow-lg d-block w-100 py-4 my-5">
          <h4 class="fw-bold mb-2">Nenhum caso cadastrado no banco de dados!</h4>
          <p class="mb-0">Acesse o banco de dados e insira registros na tabela <b>unidade</b>.</p>
        </div>
      <?php else: ?>
        <div class="row g-4">
          
          <!-- CASOS DINÂMICOS VINDOS DO MYSQL (EX: CASO 01) -->
          <?php foreach ($unidades as $u): ?>
            <div class="col-lg-6 mb-4">
              <div class="portfolio d-flex flex-column gap-3 p-3 bg-secondary rounded-3 shadow">
                <div class="portfolio-img position-relative overflow-hidden rounded-3" style="height: 240px; background-color: #000;">
                  <img src="../assets/images/services/missin_ana.jpg" alt="Cena do Caso" class="img-fluid w-100 h-100" style="object-fit: cover; opacity: 0.6;">
                  <div class="portfolio-overlay">
                    <a href="missao.php?unidade_id=<?php echo htmlspecialchars($u['id']); ?>" class="position-absolute top-50 start-50 translate-middle bg-primary round-64 rounded-circle hstack justify-content-center shadow text-decoration-none">
                      <span class="fs-4 text-dark fw-bold">→</span>
                    </a>
                  </div>
                </div>
                <div class="portfolio-details d-flex flex-column gap-1">
                  <span class="text-primary fw-bold text-uppercase fs-6">Unidade Operacional <?php echo sprintf('%02d', $u['id']); ?></span>
                  <h3 class="mb-0 text-white fw-bold"><?php echo htmlspecialchars($u['titulo']); ?></h3>
                  <p class="text-white-50 small mb-0">Clique no botão para aceder às missões e depoimentos deste caso.</p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

          <!-- CASO 02 FALSO: ONDE ESTÁ FELIPE? (APONTA PARA 404.PHP) -->
          <div class="col-lg-6 mb-4">
            <div class="portfolio d-flex flex-column gap-3 p-3 bg-secondary rounded-3 shadow opacity-85">
              <div class="portfolio-img position-relative overflow-hidden rounded-3" style="height: 240px; background-color: #000;">
                <img src="../assets/images/services/missin_kid.jpg" alt="Caso 02 - Felipe" class="img-fluid w-100 h-100" style="object-fit: cover; opacity: 0.5;">
                <div class="portfolio-overlay">
                  <a href="../html/404.php" class="position-absolute top-50 start-50 translate-middle bg-outline-light border border-2 border-white round-64 rounded-circle hstack justify-content-center shadow text-decoration-none bg-dark">
                    <span class="fs-5 text-white fw-bold">🔒</span>
                  </a>
                </div>
              </div>
              <div class="portfolio-details d-flex flex-column gap-1">
                <span class="text-white-50 fw-bold text-uppercase fs-6">Unidade Operacional 02</span>
                <h3 class="mb-0 text-white fw-bold">Caso 02: Onde está Felipe?</h3>
                <p class="text-white-50 small mb-0">Novo caso em breve. Clique no cadeado para consultar o relatório de arquivo.</p>
              </div>
            </div>
          </div>

        </div>
      <?php endif; ?>

    <?php endif; ?>

  </div>
  
  <!-- MODAL DE VITÓRIA DO CASO 01 -->
  <?php if ($mostrar_modal): ?>
  <div class="modal fade" id="modalCasoConcluido" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered text-center">
      <div class="modal-content border-warning border-3 shadow-lg bg-dark text-white">
        
        <div class="modal-header border-0 justify-content-center pb-0">
          <h3 class="modal-title fw-bold text-white" id="modalLabel">
            <?= htmlspecialchars($dados_modal['titulo']) ?>
          </h3>
        </div>

        <div class="modal-body py-4">
          <div class="mb-3">
            <img src="../assets/images/resources/celebrating.png" 
                alt="Caso Concluído" 
                class="img-fluid mx-auto d-block" 
                style="max-height: 140px; width: auto;">
          </div>

          <h5 class="fw-bold mb-3 text-white"><?= htmlspecialchars($dados_modal['subtitulo']) ?></h5>
          
          <p class="fs-6 text-white-50 px-3">
            Parabéns, Investigador! Você analisou os 3 depoimentos, conectou as pistas em Libras e concluiu o inquérito com sucesso.
          </p>

          <div class="card bg-dark border border-secondary text-white mx-auto my-3 p-3" style="max-width: 300px;">
            <p class="mb-1 text-white-50"><strong>Desempenho no Veredito:</strong></p>
            <p class="mb-1">Acertos: <strong><?= $dados_modal['acertos'] ?> de <?= $dados_modal['total'] ?></strong></p>
            <p class="mb-0 fs-5 text-white">Nota Final: <strong><?= $dados_modal['pontos'] ?> / 12,0</strong></p>
          </div>
        </div>

        <div class="modal-footer border-0 justify-content-center pt-0">
          <button type="button" class="btn btn-warning btn-lg fw-bold px-4" data-bs-dismiss="modal">
            Continuar Investigação
          </button>
        </div>

      </div>
    </div>
  </div>
  <?php endif; ?>

  <!-- ARQUIVOS JS DA APLICAÇÃO -->
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

  <!-- SCRIPT DISPARADOR DO MODAL-->
  <?php if ($mostrar_modal): ?>
  <script>
  document.addEventListener("DOMContentLoaded", function() {
      var modalElement = document.getElementById('modalCasoConcluido');
      if (modalElement) {
          var myModal = new bootstrap.Modal(modalElement);
          myModal.show();
      }
  });
  </script>
  <?php endif; ?>

</body>
</html>