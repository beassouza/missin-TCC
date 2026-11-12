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
        $descricao5_motivos = 'Você já parou para pensar em como se sentiria se estivesse em um lugar onde ninguém fala a sua língua?';
        renderPageBanner(
          'Por que você deve aprender Libras?',
          $descricao5_motivos, 
          '../assets/images/backgrounds/5motivos1.jpg', true);
        ?>

        <!--  Blog Detail Section -->
        <section class="blog-detail py-5 py-lg-11 py-xl-12">
            <div class="container">
                <div class="d-flex flex-column gap-7 gap-xl-11">
                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">5
                                motivos
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                <p class="fs-5 mb-0">
                                    Para milhares de surdos no Brasil, essa é uma realidade cotidiana. Aprender a Língua
                                    Brasileira de Sinais
                                    (Libras) é a chave para abrir as portas dessa comunicação, mas os benefícios vão
                                    muito além do que você imagina.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-detail-img" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <img src="../assets/images/resources/5motivos2.jpg" alt="blog-detail" class="img-fluid">
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-8">
                            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                                <p class="fs-5 mb-6">
                                    Aqui estão cinco motivos convincentes para você começar a aprender Libras hoje
                                    mesmo:
                                </p>
                                <h4> Promover a Inclusão Real</h4>
                                <p class="fs-5 mb-0">
                                    Não basta dizer que somos a favor da inclusão; é preciso praticá-la. Quando você
                                    aprende Libras, você deixa de ser um
                                    espectador e se torna um agente de mudança. Você permite que uma pessoa surda tenha
                                    autonomia para conversar em um café,
                                    em uma loja ou no ambiente de trabalho sem depender de intermediários.
                                </p>
                                <p></p>
                                <h4>Diferencial Profissional</h4>
                                <p class="fs-5 mb-6">
                                    O mercado de trabalho valoriza profissionais que possuem habilidades de comunicação
                                    inclusiva. Seja na área da saúde, educação,
                                    atendimento ao cliente ou tecnologia, saber Libras é um diferencial competitivo
                                    enorme. Muitas empresas buscam funcionários que
                                    possam atender o público surdo com dignidade e eficiência.
                                </p>
                                <p></p>
                                <h4>Desenvolvimento Cognitivo e Agilidade Mental</h4>
                                <p class="fs-5 mb-6">
                                    Estudar uma língua visual-espacial exercita o cérebro de uma forma diferente das
                                    línguas faladas. Aprender Libras melhora:
                                </p>
                                <p class="fs-5 mb-0">
                                    <span class="text-primary">Percepção Visual</span>: Você se torna mais atento a
                                    detalhes e movimentos.
                                </p>
                                <p class="fs-5 mb-0">
                                    <span class="text-primary">Coordenação Motora</span>: O uso preciso das mãos e a
                                    expressão corporal refinam suas habilidades motoras.
                                </p>
                                <p class="fs-5 mb-0">
                                    <span class="text-primary">Memória</span>: Memorizar sinais e suas estruturas
                                    gramaticais mantém o cérebro ativo e saudável.
                                </p>
                                <p></p>
                                <h4>Conexão com uma Nova Cultura</h4>
                                <p class="fs-5 mb-6">
                                    Aprender uma língua é aprender sobre o povo que a fala. Ao estudar Libras, você
                                    entra em contato com a Cultura Surda,
                                    descobre uma nova forma de ver o mundo, conhece artes, poesias e histórias de
                                    resistência que raramente são ensinadas
                                    nas escolas tradicionais. É uma expansão de horizonte cultural sem igual.
                                </p>
                                <p></p>
                                <h4>Uma Comunicação Mais Expressiva</h4>
                                <p class="fs-5 mb-6">
                                    Como a Libras exige o uso de expressões faciais e corporais, você acaba
                                    desenvolvendo uma inteligência emocional e uma
                                    capacidade de se expressar muito maior. Você aprende a "ler" melhor as pessoas e a
                                    transmitir suas próprias emoções de
                                    forma mais clara e direta.
                                </p>
                                <p></p>
                                <h4>Conclusão</h4>
                                <p class="fs-5 mb-6">
                                    Aprender Libras é um ato de empatia, um investimento na carreira e um exercício para
                                    a mente. É derrubar muros e
                                    construir pontes. O melhor momento para começar foi ontem; o segundo melhor momento
                                    é <span class="text-primary">agora</span>.
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