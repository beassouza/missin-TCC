<?php
// 1. Carrega as funções primeiro (no topo do arquivo)
require_once 'includes/functions.php';
iniciarSessao();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Missin</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo-dark.png" />
    <link rel="stylesheet" href="../assets/libs/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/libs/aos-master/dist/aos.css">
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
        $descricaoQuemSomos = 'Somos <span class="text-primary">voluntárias</span> que acreditam no poder da transformação 
        e conexão na sociedade por meio da inclusão linguística';
        renderPageBanner(
          'Quem Somos',
          $descricaoQuemSomos, 
          '../assets/images/about/girls.jpeg');
        ?>

        <!--  About Content Section -->
        <section class="about-content py-5 py-lg-11 py-xl-12">
            <div class="container">
                <div class="d-flex flex-column gap-5 gap-xl-11 gap-xxl-12">
                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                MISSIN.</h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <p class="mb-0 fs-5 text-dark">
                                    Este projeto nasce da necessidade da criadora e principal diretora do projeto, a
                                    aluna Beatriz Souza, do curso superior
                                    bacharelado em Sistemas de Informação do IFNMG - Campus Pirapora, desenvolver um
                                    Trabalho de Conclusão de Curso que focaria
                                    em tecnologia e a sua relação com a sociedade. O MISSIN atende a esses critérios,
                                    sendo uma plataforma que vem para executar
                                    de forma simples, mas eficiente, uma opção diferente para o ensino da Libras, a
                                    Língua Brasileira de Sinais, a principal língua
                                    falada pelas pessoas surdas.
                                </p>
                                <p class="mb-0 fs-5 text-dark">
                                    A realizadora e as suas ajudantes voluntárias aprenderam de graça a língua falada
                                    por uma parte considerável de surdos no Brasil,
                                    e, por isso, desejam repassar seus conhecimentos sem custo. A propósito, esse é o
                                    maior intuito do projeto: ajudar muitos a,
                                    de forma gratuita, aprender um idioma tão importante para uma comunidade subestimada
                                    e marginalizada, transformando essa experiência
                                    em um momento descontraído e divertido. No entanto, é importante frisar que esse
                                    projeto serve como complemento de uma rotina
                                    acadêmica mais rica e profissional ou como ponto de partida do que a opção principal
                                    para aprendizado da Libras.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-xl-5">
                        <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
                            <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="100"
                                data-aos-duration="1000">
                                <h2 class="mb-0 fs-13 pb-7 border-bottom"><span class="count" data-target="3">3</span>+
                                </h2>
                                <div class="d-flex flex-column gap-3">
                                    <h4 class="mb-0">Colaboradores</h4>
                                    <p class="mb-0">Contamos com uma rede de apoio de mais de três colaboradores que
                                        garantem um ensino gratuito e básico de qualidade.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
                            <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <h2 class="mb-0 fs-13 pb-7 border-bottom"><span class="count" data-target="3">5</span>+
                                </h2>
                                <div class="d-flex flex-column gap-3">
                                    <h4 class="mb-0">Surdos e Intérpretes</h4>
                                    <p class="mb-0">Que atuam como consultores do projeto, auxiliando em uma entrega que
                                        condiz com a realidade do uso da Libras em aplicações reais.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
                            <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="300"
                                data-aos-duration="1000">
                                <h2 class="mb-0 fs-13 pb-7 border-bottom"><span class="count"
                                        data-target="20">20</span>+</h2>
                                <div class="d-flex flex-column gap-3">
                                    <h4 class="mb-0">Apoiadores</h4>
                                    <p class="mb-0">Que contribuem com insights e outros recursos essenciais para o
                                        andamento do projeto.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
// 1. Array com os tópicos únicos (edite ou adicione novos itens aqui facilmente)
    $topics = [
    "Melhoria Contínua",
    "Ensino Gamificado",
    "Conexão Inclusiva",
    "Conteúdos Gratuitos",
    "Metodologias Inovadoras",
    "Updates Constantes",
    "Contextos Reais"
];

// 2. Define quantas vezes a lista vai se repetir para garantir que o Marquee cubra a tela toda
    $repetitions = 6; 
    ?>

        <!-- About Img Section -->
        <section class="about-img">
            <img src="../assets/images/backgrounds/missin.png" alt="Sobre o Projeto" class="w-100 object-fit-cover">

            <div class="marquee w-100 d-flex align-items-center overflow-hidden bg-primary py-4">
                <div class="marquee-content d-flex align-items-center gap-8">

                    <?php for ($i = 0; $i < $repetitions; $i++): ?>
                    <?php foreach ($topics as $topic): ?>
                    <div class="hstack gap-4 flex-shrink-0">
                        <h4 class="mb-0"><?php echo htmlspecialchars($topic); ?></h4>
                        <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                    </div>
                    <?php endforeach; ?>
                    <?php endfor; ?>

                </div>
            </div>
        </section>

        <!-- Meet our team Section -->
        <?php include 'includes/team.php'; ?>

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