<?php
// 1. Inicializa a sessão e inclui as funções auxiliares
require_once 'includes/functions.php';
iniciarSessao();

// Se o utilizador já estiver logado, redireciona diretamente para o jogo
if (isset($_SESSION['usuario_id']) && !empty($_SESSION['usuario_id'])) {
    header("Location: ../jogo/index.php");
    exit;
}

// 2. Inclui a conexão com o banco de dados
require_once 'includes/db.php';
$mensagem = ""; // Mensagem de feedback (sucesso/erro)

// 3. Processa o envio do formulário de login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $apelido = trim($_POST['apelido'] ?? '');
    $senha   = $_POST['senha'] ?? '';

    if (!empty($apelido) && !empty($senha)) {
        try {
            // Busca o utilizador pelo apelido
            $stmt = $conn->prepare("SELECT id, apelido, senha FROM usuario WHERE apelido = ?");
            $stmt->execute([$apelido]);
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verifica se o utilizador existe e se a senha bate com o hash
            if ($usuario && password_verify($senha, $usuario['senha'])) {
                // Guarda os dados na sessão
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario_apelido'] = $usuario['apelido'];
                
                $mensagem = "<div class='alert alert-success text-center fw-bold shadow-sm mb-4'>Login realizado com sucesso! Entrando...</div>";
                header("Refresh: 1.5; url=../jogo/index.php");
            } else {
                $mensagem = "<div class='alert alert-danger text-center fw-bold shadow-sm mb-4'>Apelido ou senha incorretos.</div>";
            }
        } catch (PDOException $e) {
            $mensagem = "<div class='alert alert-danger text-center fw-bold shadow-sm mb-4'>Erro no servidor. Tente novamente mais tarde.</div>";
        }
    } else {
        $mensagem = "<div class='alert alert-warning text-center fw-bold shadow-sm mb-4'>Preencha todos os campos.</div>";
    }
}
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MISSIN - Login</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo-dark.png" />
  <link rel="stylesheet" href="../assets/libs/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/libs/aos-master/dist/aos.css">
  <link rel="stylesheet" href="../assets/css/styles.css" />
  <style>
    /* Trava de tamanho para a logo no formulário de login */
    .logo-auth {
      max-height: 175px !important;
      width: auto !important;
      display: block;
      margin: 0 auto;
    }
  </style>
</head>

<body>

  <div class="page-wrapper overflow-hidden">
    <section class="bg-light-gray border-top border-primary border-4 d-flex align-items-center justify-content-center min-vh-100">
      <div class="container py-3">
        <div class="sign-in card mx-auto shadow-lg style="max-width: 420px;">
          <div class="card-body py-5 px-4 px-lg-5">
            
            <!-- ALERTA DE BLOQUEIO DE ACESSO AO JOGO -->
            <?php if (isset($_SESSION['feedback_auth'])): ?>
              <div class="alert alert-<?php echo $_SESSION['feedback_auth']['tipo']; ?> alert-dismissible fade show text-center shadow-sm mb-4 fw-bold" role="alert">
                <?php 
                  echo $_SESSION['feedback_auth']['mensagem']; 
                  unset($_SESSION['feedback_auth']); 
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif; ?>

            <!-- MENSAGEM DE ERRO OU SUCESSO DO FORMULÁRIO -->
            <?php echo $mensagem; ?>

            <!-- LOGO CENTRALIZADA E COM TAMANHO AJUSTADO -->
            <a href="index.php" class="mb-4 hstack justify-content-center text-decoration-none">
              <img src="../assets/images/logos/logo-dark.png" alt="MISSIN" class="img-fluid logo-auth">
            </a>

            <form method="POST" action="sign-in.php" class="d-flex flex-column gap-3">
              <div>
                <label for="apelidoInput" class="form-label text-dark fw-bold small">Apelido</label>
                <input type="text" name="apelido" id="apelidoInput" class="form-control" placeholder="Digite seu apelido" required>
              </div>
              <div>
                <label for="inputPassword" class="form-label text-dark fw-bold small">Senha</label>
                <input type="password" name="senha" class="form-control" id="inputPassword" placeholder="Digite sua senha" required>
              </div>
              <button type="submit" class="btn btn-dark w-100 justify-content-center py-2 fw-medium mt-3 fs-4">
                Entrar
              </button>
            </form>

            <p class="mb-0 fw-medium text-center mt-4">
              Ainda não tem uma conta? <a class="text-primary fw-bold text-decoration-none" href="sign-up.php">Cadastre-se aqui</a>
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/custom.js"></script>
</body>

</html>