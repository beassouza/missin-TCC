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
        $descricaoHistoria = 'Entender a história da Libras ajuda a entender a história e a condição atual do povo surdo';
        renderPageBanner(
          'A História da Libras',
          $descricaoHistoria, 
          '../assets/images/backgrounds/predio-ines.png', true);
        ?>

        <!--  Blog Detail Section -->
        <section class="blog-detail py-5 py-lg-11 py-xl-12">
            <div class="container">
                <div class="d-flex flex-column gap-7 gap-xl-11">
                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                                Do INES aos dias atuais
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                <p class="fs-5 mb-0">
                                    A trajetória da Língua Brasileira de Sinais é marcada por resistência, conquistas e
                                    a busca incessante por identidade.
                                    Conhecer essa história é entender como o Brasil se tornou uma referência na educação
                                    de surdos na América Latina.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-detail-img" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <img src="../assets/images/backgrounds/Ernest-Huet_1.jpg" alt="blog-detail" class="img-fluid">
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-8">
                            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                                <h4>O Início: A Chegada de Ernest Huet</h4>
                                <p class="fs-5 mb-0">
                                    A história formal da Libras começa em <span class="text-primary">1855</span>, quando
                                    o professor francês <span class="text-primary">Ernest Huet</span> chegou ao Brasil.
                                    Huet era surdo e trouxe consigo a Língua de Sinais Francesa (LSF). A convite de Dom
                                    Pedro II, ele veio com a ]
                                    missão de fundar a primeira escola para surdos no país.
                                </p>
                                <h4>A Fundação do INES</h4>
                                <p class="fs-5 mb-6">
                                    Em <span class="text-primary">26 de setembro de 1857</span>, foi fundado no Rio de
                                    Janeiro o Imperial Instituto de Surdos-Mudos
                                    (hoje conhecido como <span class="text-primary">INES – Instituto Nacional de
                                        Educação de Surdos</span>).
                                    A mistura da Língua de Sinais Francesa com os sinais já utilizados informalmente
                                    pelos surdos brasileiros
                                    da época deu origem à <span class="text-primary">Libras</span> que conhecemos hoje.
                                    É por isso que muitas línguas de sinais ao redor do mundo
                                    (incluindo a americana) possuem raízes na língua francesa.
                                </p>
                                <h4>O Retrocesso: O Congresso de Milão (1880)</h4>
                                <p class="fs-5 mb-6">
                                    Nem tudo foi avanço. Em 1880, um congresso internacional em Milão determinou que o
                                    <span class="text-primary">Oralismo</span> (focar apenas na fala e
                                    leitura labial) deveria ser o método oficial de ensino, proibindo o uso das línguas
                                    de sinais em sala de aula.
                                    Esse período foi obscuro para a comunidade surda global, forçando muitos a
                                    sinalizarem apenas "escondidos".
                                </p>
                                <h4>A Retomada e o Reconhecimento</h4>
                                <p class="fs-5 mb-6">
                                    A partir da década de 1970, o conceito de <span class="text-primary">Comunicação
                                        Total</span> começou a ganhar força, trazendo de volta o uso de sinais
                                    junto com a fala. Mas foi apenas com o movimento da <span
                                        class="text-primary">Filosofia Bilíngue</span> que a Libras foi verdadeiramente
                                    valorizada como
                                    a primeira língua do surdo.
                                    Datas Marcantes:
                                <ul>
                                    <li><span class="text-primary">1991:</span> A FENEIS (Federação Nacional de Educação
                                        e Integração de Surdos) intensifica a luta pelo reconhecimento da língua.</li>
                                    <li><span class="text-primary">2002:</span> Ocorre a grande vitória com a <span
                                            class="text-primary">Lei 10.436</span>, que reconhece a Libras como meio
                                        legal de comunicação e expressão no Brasil.</li>
                                    <li><span class="text-primary">2005:</span> O <span class="text-primary">Decreto
                                            5.626</span> regulamenta a lei, incluindo a Libras como disciplina
                                        obrigatória em cursos de Licenciatura e Fonoaudiologia.</li>
                                </ul>
                                </p>
                                <h4>Dias Atuais e o Futuro</h4>
                                <p class="fs-5 mb-0">
                                    Hoje, vivemos a era da tecnologia e da acessibilidade digital. O ensino de Libras
                                    está presente em universidades, sites
                                    (como este projeto!) e aplicativos. Embora ainda existam desafios — como a plena
                                    inclusão no mercado de trabalho e o acesso a
                                    intérpretes em todos os serviços públicos — a Libras nunca esteve tão viva e
                                    respeitada.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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