<?php
// 1. Carrega as funções primeiro (no topo do arquivo)
require_once 'includes/functions.php';
iniciarSessao();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Missin</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo-dark.png" />
    <link rel="stylesheet" href="../assets/libs/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="../assets/libs/aos-master/dist/aos.css" />
    <link rel="stylesheet" href="../assets/css/styles.css" />
</head>

<body>
    <!-- Header -->
    <?php include 'includes/header.php'; ?>

    <?php require_once 'includes/functions.php'; ?>

    <!--  Page Wrapper -->
    <div class="page-wrapper overflow-hidden">

        <!--  Banner Section -->
        <?php
        $descricaoPoliticaPrivacidade = 'Entenda a nossa <span class="text-primary">Política de Privacidade </span>
        antes de usar os nossos serviços.';
        renderPageBanner(
          'Política de Privacidade',
          $descricaoPoliticaPrivacidade, 
          '../assets/images/backgrounds/privacy-policy-banner.jpg');
        ?>


        <!-- Seção da Política de Privacidade -->
        <section class="privacy-policy py-5 py-lg-11">
            <div class="container">
                <p class="fs-5 text-dark fw-medium">
                    Esta Declaração de Privacidade explica como as informações dos
                    nossos usuários são coletadas, usadas e armazenadas por MISSIN
                    ("nós", "nosso"). Este documento descreve nossas práticas de
                    privacidade em relação ao uso de nosso site
                    <a class="fw-bold" href="https://missin.com/" target="_blank">(https://missin.com/)</a>
                    e serviços relacionados.
                </p>

                <p class="fs-5 text-dark fw-medium">
                    Ao cadastrar-se em nossos Serviços e concordar com nossos Termos e
                    Condições Gerais, você concorda com a coleta e armazenamento das
                    suas informações conforme descrito nesta Declaração de Privacidade.
                </p>

                <p class="fs-5 text-dark fw-medium">
                    Nossos Serviços podem conter links para sites ou serviços externos.
                    As práticas de privacidade de tais sites serão regidas por suas
                    próprias políticas. Podemos atualizar esta Declaração de Privacidade
                    periodicamente. Se houver alterações, notificaremos você atualizando
                    a data no topo deste documento ou através de avisos em nossa
                    plataforma. Recomendamos que você revise esta política regularmente.
                </p>

                <h4 class="my-4">Coleta de Informações</h4>
                <p class="fs-5 text-dark fw-medium">
                    <strong>Nós não coletamos dados pessoais reais dos nossos
                        usuários</strong>
                    (como nome completo, CPF, e-mail ou telefone). Para a criação de
                    conta e uso dos nossos Serviços, solicitamos apenas:
                </p>
                <ul class="fs-5 text-dark fw-medium">
                    <li>
                        <strong>Apelido (Username):</strong> Que pode ser o seu nome real
                        ou um pseudônimo de sua escolha.
                    </li>
                    <li>
                        <strong>Senha:</strong> Utilizada exclusivamente para a sua
                        autenticação e acesso seguro à plataforma.
                    </li>
                </ul>

                <h4 class="my-4">Informações Fornecidas por Você</h4>
                <p class="fs-5 text-dark fw-medium">
                    As únicas informações que você nos fornece são o seu apelido e a sua
                    senha no momento da criação da conta ou ao fazer login na
                    plataforma. Preservamos sua privacidade ao não exigir dados de
                    identificação pessoal.
                </p>

                <p class="fs-5 text-dark fw-medium mb-0">
                    Como destacado, não solicitamos nem armazenamos dados sensíveis ou
                    financeiros. Para mais detalhes sobre links de terceiros, acesse:
                    <a class="fw-bold" href="https://missin.com/" target="_blank">https://missin.com/</a>.
                </p>
            </div>
        </section>
    </div>

    <!--- Footer -->
    <?php include 'includes/footer.php'; ?>

    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../assets/libs/aos-master/dist/aos.js"></script>
    <script src="../assets/js/custom.js"></script>
    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>