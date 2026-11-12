<?php
// 1. Inclui o arquivo de conexão que estará na pasta 'includes'

// Se o usuário já estiver logado, redireciona diretamente para o jogo sem permitir novo login
if (isset($_SESSION['usuario_id'])) {
    header("Location: ../jogo/index.php");
    exit;
}

require_once 'includes/db.php';

$mensagem = ""; // Variável para mostrar alertas de sucesso ou erro na tela

// 2. Verifica se o formulário foi enviado via método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pega os dados enviados e remove espaços em branco extras
    $apelido = trim($_POST['apelido'] ?? '');
    $senha = $_POST['senha'] ?? '';

    // Validação básica se os campos não estão vazios
    if (!empty($apelido) && !empty($senha)) {
        try {
            // Verifica se o apelido já existe no banco (já que ele é UNIQUE)
            $stmtCheck = $conn->prepare("SELECT id FROM usuario WHERE apelido = ?");
            $stmtCheck->execute([$apelido]);
            
            if ($stmtCheck->rowCount() > 0) {
                $mensagem = "<div class='alert alert-danger'>Este apelido já está em uso. Escolha outro!</div>";
            } else {
                // Se não existir, criptografa a senha por segurança
                $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

                // Insere o novo usuário no banco de dados
                $stmtInsert = $conn->prepare("INSERT INTO usuario (apelido, senha) VALUES (?, ?)");
                $stmtInsert->execute([$apelido, $senhaHash]);

                $mensagem = "<div class='alert alert-success'>Cadastro realizado! Redirecionando para o login...</div>";
                // Redireciona para a página de login após 2 segundos
                header("Refresh: 2; url=sign-in.php");
            }
        } catch (PDOException $e) {
            $mensagem = "<div class='alert alert-danger'>Erro ao cadastrar. Tente novamente mais tarde.</div>";
        }
    } else {
        $mensagem = "<div class='alert alert-warning'>Por favor, preencha todos os campos.</div>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MISSIN - Cadastro</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo-dark.png" />
  <link rel="stylesheet" href="../assets/libs/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/libs/aos-master/dist/aos.css">
  <link rel="stylesheet" href="../assets/css/styles.css" />
</head>

<body>

  <div class="page-wrapper overflow-hidden">

    <section class="bg-light-gray border-top border-primary border-4 d-flex align-items-center justify-content-center min-vh-100">
      <div class="container py-3">
        <div class="sign-in card mx-auto shadow-lg">
          <div class="card-body py-8 px-lg-5">
            <a href="index.html" class="mb-8 hstack justify-content-center">
              <img src="../assets/images/logos/logo-dark.png" alt="MISSIN" class="img-fluid logo-auth" style="max-height: 200px; width: auto; display: block; margin: 0 auto;">
            </a>
            
            <?php echo $mensagem; ?>

            <form method="POST" action="sign-up.php" class="d-flex flex-column gap-3">
              <div>
                <input type="text" name="apelido" id="apelidoInput" class="form-control border-bottom" placeholder="Apelido" required>
              </div>
              <div>
                <input type="password" name="senha" class="form-control border-bottom" id="inputPassword" placeholder="Senha" required>
              </div>
              
              <button type="submit" class="btn btn-dark w-100 justify-content-center py-2 fw-medium my-7 fs-4 lh-lg">
                Me Cadastrar
              </button>
            </form>

            <p class="text-center mb-1 d-block fw-medium">Ao criar uma conta nesta plataforma, você concorda com a nossa <a class="text-dark" href="privacy-policy.php">Política de Privacidade</a></p>
            <p class="mb-0 fw-medium text-center">Você já tem uma conta? <a class="text-dark" href="sign-in.php">Fazer Login</a></p>
          </div>
        </div>
      </div>
    </section>

  </div>

  <div class="get-template hstack gap-2">
    <button class="btn bg-primary p-2 round-52 rounded-circle hstack justify-content-center flex-shrink-0" id="scrollToTopBtn">
      <iconify-icon icon="lucide:arrow-up" class="fs-7 text-dark"></iconify-icon>
    </button>
  </div>

  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="../assets/libs/aos-master/dist/aos.js"></script>
  <script src="../assets/js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>