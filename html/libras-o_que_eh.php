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
        $descricaolibras_o_que_eh = 'Ao contrário do que muitos pensam, a comunicação entre pessoas surdas não se resume a gestos ou mímicas.
        Existe uma estrutura complexa, gramatical e cultural por trás de cada movimento.';
        renderPageBanner(
          'O que é Libras?',
          $descricaolibras_o_que_eh, 
          '../assets/images/backgrounds/lbs_oqueeh.jpg', true);
        ?>

        <!--  Blog Detail Section -->
        <section class="blog-detail py-5 py-lg-11 py-xl-12">
            <div class="container">
                <div class="d-flex flex-column gap-7 gap-xl-11">
                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                                Entenda a importância
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                <p class="fs-5 mb-0">
                                    Libras é a sigla para <span class="text-primary">Língua Brasileira de Sinais.</span>
                                    Ela é a língua natural das comunidades surdas do Brasil.
                                    É importante destacar que ela é uma <span class="text-primary">língua</span> e não
                                    uma "linguagem".
                                    Essa distinção é fundamental porque a Libras possui todos os elementos que compõem
                                    um idioma: gramática própria, sintaxe, morfologia e até regionalismos.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-detail-img" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <img src="../assets/images/backgrounds/lbs_oqueeh02.jpg" alt="blog-detail" class="img-fluid">
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-8">
                            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                                <p class="fs-5 mb-0">
                                <h4>É uma língua universal?</h4>
                                Este é um dos maiores mitos sobre o tema.
                                Não, a língua de sinais não é universal.
                                Assim como o Português é falado no Brasil e o Japonês no Japão, cada país desenvolveu
                                sua própria língua de sinais.
                                Por exemplo, a ASL (American Sign Language) utilizada nos Estados Unidos é completamente
                                diferente da Libras.
                                </p>
                                <h4>O reconhecimento legal</h4>
                                <p class="fs-5 mb-6">
                                    No Brasil, um marco histórico foi a Lei nº 10.436/2002, que reconheceu a Libras como
                                    meio legal de comunicação e expressão.
                                    Isso garantiu que o poder público e as empresas concessionárias de serviços públicos
                                    apoiassem o uso e a difusão da língua,
                                    além de garantir o sistema educacional bilíngue para surdos.
                                </p>
                                <h4>Como a Libras se estrutura?</h4>
                                <p class="fs-5 mb-6">
                                    Diferente das línguas orais-auditivas (como o Português), a Libras é uma língua
                                    visual-espacial. Ela se baseia em cinco parâmetros principais:
                                <ol>
                                    <li><span class="text-primary">Configuração de mão:</span> O formato que a mão
                                        assume para fazer o sinal.</li>
                                    <li><span class="text-primary">Ponto de articulação:</span> O local no corpo (ou no
                                        espaço) onde o sinal é feito.</li>
                                    <li><span class="text-primary">Movimento:</span> Se o sinal é estático ou se
                                        desloca.</li>
                                    <li><span class="text-primary">Orientação:</span> A direção para onde a palma da mão
                                        está voltada.</li>
                                    <li><span class="text-primary">Expressões faciais e corporais:</span> Que ajudam a
                                        transmitir a emoção e a entonação da frase (ex: uma pergunta ou uma exclamação).
                                    </li>
                                </ol>
                                </p>
                                <h4>Por que aprender Libras?</h4>
                                <p class="fs-5 mb-0">
                                    Aprender Libras vai muito além de adquirir um novo conhecimento. É um ato de empatia
                                    e inclusão. Ao aprender a língua de sinais,
                                    você ajuda a quebrar as barreiras de comunicação que isolam milhares de cidadãos,
                                    permitindo que eles ocupem seus espaços na sociedade, no mercado de trabalho e na
                                    educação com autonomia.
                                </p>
                                <p class="fs-5 mb-0">
                                    Seja para fins profissionais ou para se tornar um aliado na causa da acessibilidade,
                                    começar a estudar Libras é o primeiro passo para um mundo mais inclusivo.
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