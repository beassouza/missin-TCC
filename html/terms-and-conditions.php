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
        $descricaoTermosCondicoes = 'Entenda os nossos <span class="text-primary">Termos & Condições</span>
        antes de usar os nossos serviços.';
        renderPageBanner(
          'Termos & Condições',
          $descricaoTermosCondicoes, 
          '../assets/images/backgrounds/privacy-policy-banner.jpg');
        ?>

        <!-- Seção de Termos e Condições -->
        <section class="terms-conditions py-5 py-lg-11">
            <div class="container">
                <p class="fs-5 text-dark fw-medium">
                    Estes Termos e Condições de Uso <span class="fw-bold">(“Termos”)</span> regem a relação entre o
                    projeto
                    <span class="fw-bold">MISSIN</span> e qualquer pessoa que acesse ou utilize a plataforma <span
                        class="fw-bold">(“Usuário”)</span>.
                    Nossa plataforma é <span class="fw-bold">100% gratuita</span> e tem fins estritamente educacionais e
                    informativos.
                    O acesso e o uso continuado da plataforma indicam a aceitação integral destes Termos.
                </p>

                <p class="fs-5 text-dark fw-medium">
                    Os termos definidos abaixo aplicam-se a todo o material e interações realizadas em nosso site.
                </p>

                <h4 class="my-4">1. Definições</h4>
                <p class="fs-5 text-dark fw-medium">
                    <span class="fw-bold">1.1 “Plataforma”</span> refere-se ao site, sistemas e conteúdos hospedados sob
                    o domínio
                    <a class="fw-bold" href="https://missin.com/" target="_blank">https://missin.com/</a>.
                </p>

                <p class="fs-5 text-dark fw-medium">
                    <span class="fw-bold">1.2 “Conteúdo do Site”</span> abrange todos os materiais disponibilizados na
                    plataforma, incluindo aulas, jogos, questionários,
                    testes, artigos, textos, marcas, logotipos e as imagens/fotos das realizadoras do projeto.
                </p>

                <p class="fs-5 text-dark fw-medium">
                    <span class="fw-bold">1.3 “Realizadoras”</span> refere-se à equipe, autoras e profissionais
                    responsáveis pela criação, manutenção e gestão dos
                    conteúdos da plataforma.
                </p>

                <p class="fs-5 text-dark fw-medium">
                    <span class="fw-bold">1.4 “Usuário”</span> qualquer pessoa que acesse, navegue ou utilize os
                    recursos gratuitos oferecidos em nosso site.
                </p>

                <h4 class="my-4">2. Direitos de Uso e Restrições de Conteúdo</h4>
                <p class="fs-5 text-dark fw-medium">
                    <span class="fw-bold">2.1 Propriedade Intelectual e Gratuidade:</span> O site é inteiramente
                    gratuito para consulta e aprendizado.
                    Todos os direitos sobre o Conteúdo do Site pertencem exclusivamente às Realizadoras.
                </p>

                <p class="fs-5 text-dark fw-medium">
                    <span class="fw-bold">2.2 Proibição de Uso Comercial e Veiculação na Mídia:</span> <strong
                        class="text-danger">
                        Não damos permissão</strong> para que qualquer Conteúdo do Site (aulas, jogos, questionários,
                    artigos ou imagens das realizadoras) seja vinculado,
                    reproduzido ou exibido em meios de comunicação/mídia sem autorização prévia por escrito.
                    Também é <strong class="text-danger">estritamente proibido</strong> o uso de qualquer parte deste
                    site para fins comerciais ou em negócios privados.
                </p>

                <p class="fs-5 text-dark fw-medium">
                    <span class="fw-bold">2.3 Dados Pessoais das Realizadoras:</span> As informações pessoais e
                    profissionais das realizadoras disponibilizadas
                    no site destinam-se <strong class="fw-bold">exclusivamente</strong> a pessoas interessadas em
                    conhecer o projeto ou contratar/avaliar
                    a capacidade profissional de cada uma delas. É vedada a coleta ou uso desses dados para SPAM,
                    listas de transmissão não solicitadas ou fins comerciais/publicitários terceirizados.
                </p>
            </div>
        </section>

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