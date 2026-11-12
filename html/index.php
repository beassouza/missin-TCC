<?php
require_once '../html/includes/functions.php';
iniciarSessao();

require_once '../html/includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MISSIN</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo-dark.png" />
    <link rel="stylesheet" href="../assets/libs/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="../assets/libs/aos-master/dist/aos.css" />
    <link rel="stylesheet" href="../assets/css/styles.css" />
</head>

<body>

    <!-- Header -->
    <?php include 'includes/header.php'; ?>


    <!--  Page Wrapper -->
    <div class="page-wrapper overflow-hidden">
        <!--  Banner Section -->
        <section class="banner-section position-relative d-flex align-items-end min-vh-100">
            <video class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" autoplay muted loop playsinline>
                <source src="../assets/images/backgrounds/hello-banner.mp4" type="video/mp4" />
            </video>
            <div class="container">
                <div class="d-flex flex-column gap-4 pb-8 position-relative z-1">
                    <div class="row align-items-center">
                        <div class="col-xl-4">
                            <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                                data-aos-duration="1000">
                                <img src="../assets/images/svgs/primary-leaf.svg" alt=""
                                    class="img-fluid animate-spin" />
                                <p class="mb-0 text-white fs-5 text-opacity-70">
                                    Com a gente, você aprende
                                    <span class="text-primary">LIBRAS</span> mais perto da
                                    língua falada pelos surdos e de forma gamificada.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1000">
                        <h1 class="mb-0 fs-16 text-white lh-1">MISSIN</h1>
                        <a href="javascript:void(0)" class="p-1 ps-7 bg-primary rounded-pill">
                            <span
                                class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--  Nosso Objetivo Section -->
        <section class="stats-facts py-5 py-lg-11 py-xl-12 position-relative overflow-hidden">
            <div class="container">
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4 col-xxl-4">
                        <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000">
                            <span
                                class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">01</span>
                            <hr class="border-line" />
                            <span class="badge text-bg-dark">Nosso Objetivo</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-xxl-7">
                        <div class="d-flex flex-column gap-9">
                            <div class="row">
                                <div class="col-xxl-8">
                                    <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                        data-aos-duration="1000">
                                        <h2 class="mb-0">
                                            Como você pode ser amigo de alguém sem saber seu idioma?
                                        </h2>
                                        <p class="fs-5 mb-0">
                                            Os surdos só se sentirão incluídos quando os seus
                                            familiares e amigos souberem se comunicar na língua
                                            natural a eles.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-4 mb-7 mb-lg-0">
                                    <div class="d-flex flex-column gap-6 pt-9 border-top" data-aos="fade-up"
                                        data-aos-delay="200" data-aos-duration="1000">
                                        <h2 class="mb-0 fs-14">
                                            <span class="count" data-target="40">2</span>M
                                        </h2>
                                        <p class="mb-0">
                                            De pessoas no Brasil tem algum grau de surdez
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 mb-7 mb-lg-0">
                                    <div class="d-flex flex-column gap-6 pt-9 border-top" data-aos="fade-up"
                                        data-aos-delay="300" data-aos-duration="1000">
                                        <h2 class="mb-0 fs-14">
                                            <span class="count" data-target="238">22</span>%
                                        </h2>
                                        <p class="mb-0">Dentre os surdos sabem Libras</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 mb-7 mb-lg-0">
                                    <div class="d-flex flex-column gap-6 pt-9 border-top" data-aos="fade-up"
                                        data-aos-delay="400" data-aos-duration="1000">
                                        <h2 class="mb-0 fs-12">Seja a diferença</h2>
                                        <p class="mb-0">E nos ajude a mudar esse número!</p>
                                    </div>
                                </div>
                            </div>
                            <a href="about-us.php" class="btn" data-aos="fade-up" data-aos-delay="500"
                                data-aos-duration="1000">
                                <span class="btn-text">Saiba como</span>
                                <iconify-icon icon="lucide:arrow-up-right"
                                    class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm">
                                </iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute bottom-0 start-0" data-aos="zoom-in" data-aos-delay="100"
                data-aos-duration="1000">
                <img src="../assets/images/backgrounds/stats-facts-bg.svg" alt="" class="img-fluid" />
            </div>
        </section>

        <!--  Services Section -->
        <section class="services py-5 py-lg-11 py-xl-12 bg-dark" id="services">
            <div class="container">
                <div class="d-flex flex-column gap-5 gap-xl-10">
                    <div class="row gap-7 gap-xl-0">
                        <div class="col-xl-4 col-xxl-4">
                            <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                                data-aos-duration="1000">
                                <span
                                    class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">02</span>
                                <hr class="border-line bg-white" />
                                <span class="badge text-dark bg-white">Jogos & Diversão</span>
                            </div>
                        </div>
                        <div class="col-xl-8 col-xxl-7">
                            <div class="row">
                                <div class="col-xxl-8">
                                    <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                        data-aos-duration="1000">
                                        <h2 class="mb-0 text-white">
                                            Qual é a nossa metodologia
                                        </h2>
                                        <p class="fs-5 mb-0 text-white text-opacity-70">
                                            Nós nos apoiamos no uso de dramatização e da ficção para
                                            o ensino gamificado de um idioma viso-espacial,
                                            confiando que narrativas próximas a aplicações reais da
                                            língua auxiliará os estudantes a aprender de fato a
                                            Libras.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services-tab">
                        <div class="row gap-5 gap-xl-0">
                            <div class="col-xl-4">
                                <div class="tab-content" data-aos="zoom-in" data-aos-delay="100"
                                    data-aos-duration="1000">
                                    <div class="tab-pane active" id="one" role="tabpanel" aria-labelledby="one-tab"
                                        tabindex="0">
                                        <img src="../assets/images/services/unidade.png" alt="services"
                                            class="img-fluid" />
                                    </div>
                                    <div class="tab-pane" id="two" role="tabpanel" aria-labelledby="two-tab"
                                        tabindex="0">
                                        <img src="../assets/images/services/missao.png" alt="services"
                                            class="img-fluid" />
                                    </div>
                                    <div class="tab-pane" id="three" role="tabpanel" aria-labelledby="three-tab"
                                        tabindex="0">
                                        <img src="../assets/images/services/sinais.png" alt="services"
                                            class="img-fluid" />
                                    </div>
                                    <div class="tab-pane" id="four" role="tabpanel" aria-labelledby="four-tab"
                                        tabindex="0">
                                        <img src="../assets/images/services/quiz.png" alt="services"
                                            class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="d-flex flex-column gap-5">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="fade-up"
                                        data-aos-delay="200" data-aos-duration="1000">
                                        <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                                            role="presentation">
                                            <div class="row w-100 align-items-center gx-3">
                                                <div class="col-lg-6 col-xxl-5">
                                                    <button
                                                        class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0 active"
                                                        id="one-tab" data-bs-toggle="tab" data-bs-target="#one"
                                                        type="button" role="tab" aria-controls="one"
                                                        aria-selected="true">
                                                        Unidades
                                                    </button>
                                                </div>
                                                <div class="col-lg-6 col-xxl-7">
                                                    <p class="text-white text-opacity-70 mb-0">
                                                        Cada unidade tem o propósito de resolver um caso
                                                        criminal em que os principais envolvidos são
                                                        membros da comunidade surda.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                                            role="presentation">
                                            <div class="row w-100 align-items-center gx-3">
                                                <div class="col-lg-6 col-xxl-5">
                                                    <button
                                                        class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0"
                                                        id="two-tab" data-bs-toggle="tab" data-bs-target="#two"
                                                        type="button" role="tab" aria-controls="two"
                                                        aria-selected="false">
                                                        Missões
                                                    </button>
                                                </div>
                                                <div class="col-lg-6 col-xxl-7">
                                                    <p class="text-white text-opacity-70 mb-0">
                                                        Cada unidade tem um número X de missões, que
                                                        são as gravações de depoentes, sejam estes
                                                        suspeitos ou testemunhas, que nos ajudam a
                                                        encontrar e desvendar pistas essenciais para
                                                        resolução do caso.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                                            role="presentation">
                                            <div class="row w-100 align-items-center gx-3">
                                                <div class="col-lg-6 col-xxl-5">
                                                    <button
                                                        class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0"
                                                        id="three-tab" data-bs-toggle="tab" data-bs-target="#three"
                                                        type="button" role="tab" aria-controls="three"
                                                        aria-selected="false">
                                                        Dicionários
                                                    </button>
                                                </div>
                                                <div class="col-lg-6 col-xxl-7">
                                                    <p class="text-white text-opacity-70 mb-0">
                                                        Antes de cada missão, os sinais que aparecerão no depoimento
                                                        em questão são apresentados, tornando possível que o usuário
                                                        primeiro aprenda o sinal, o repita em casa e depois assista a um
                                                        vídeo em que ele possa por a prova tal conhecimento recém-adquirido por
                                                        tentar entender uma simulação próxima a língua de sinais falada pelas
                                                        pessoas da comunidade surda. 
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                                            role="presentation">
                                            <div class="row w-100 align-items-center gx-3">
                                                <div class="col-lg-6 col-xxl-5">
                                                    <button
                                                        class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0"
                                                        id="four-tab" data-bs-toggle="tab" data-bs-target="#four"
                                                        type="button" role="tab" aria-controls="four"
                                                        aria-selected="false">
                                                        Quiz
                                                    </button>
                                                </div>
                                                <div class="col-lg-6 col-xxl-7">
                                                    <p class="text-white text-opacity-70 mb-0">
                                                        Depois de uma fração de depoimento, um quiz é apresentado
                                                        para confirmar se o usuário realmente entendeu o que foi relatado
                                                        por depoentes a investigadora.  
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="../jogo/index.php" class="btn border border-white border-opacity-25"
                                        data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                                        <span class="btn-text">Quero Jogar</span>
                                        <iconify-icon icon="lucide:arrow-up-right"
                                            class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm">
                                        </iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Meet our team Section -->
        <?php include 'includes/team.php'; ?>

        <!--  FAQ Section -->
        <section class="faq py-5 py-lg-11 py-xl-12">
            <div class="container">
                <div class="d-flex flex-column gap-5 gap-xl-11">
                    <div class="row gap-7 gap-xl-0">
                        <div class="col-xl-4 col-xxl-4">
                            <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                                data-aos-duration="1000">
                                <span
                                    class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">04</span>
                                <hr class="border-line bg-white" />
                                <span class="badge text-bg-dark">FAQs</span>
                            </div>
                        </div>
                        <div class="col-xl-8 col-xxl-7">
                            <div class="row">
                                <div class="col-xxl-9">
                                    <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                        data-aos-duration="1000">
                                        <h2 class="mb-0">Perguntas Frequentes</h2>
                                        <p class="fs-5 mb-0 text-opacity-70">
                                            Entenda melhor o que é o nosso projeto e o que você pode
                                            ganhar ou fazer com ele.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-xl-8">
                            <div class="accordion accordion-flush" id="accordionFlushExample" data-aos="fade-up"
                                data-aos-delay="200" data-aos-duration="1000">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fs-8 fw-bold" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            Vocês geram certificado reconhecido pelo MEC?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body pt-0 fs-5 text-dark">
                                            Não. O projeto se caracteriza como voluntário e existe
                                            para fins acadêmicos. Nenhum dos indivíduos é um
                                            profissional na área. Mas isso não desvalida a sua
                                            participação no projeto, pois o MISSIN é uma opção
                                            gratuita para aprender, praticar e/ou de compreender o
                                            seu nível de proeficiência na língua.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fs-8 fw-bold" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            O MISSIN realmente é gratuito? Se sim, de onde se obtêm
                                            recursos para o projeto?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body pt-0 fs-5 text-dark">
                                            Sim, o MISSIN é gratuito, pois faz parte de um trabalho
                                            de conclusão de curso de uma aluna de Sistemas de
                                            Informação do Instituto Federal do Norte de Minas Gerais
                                            - campus Pirapora. Nenhuma das pessoas participantes no
                                            desenvolvimento do projeto foram pagas, pois todas são
                                            voluntárias, como também todos os recursos utilizados
                                            para execução do projeto foram cedidos pelas pessoas
                                            e/ou entidades envolvidas de forma voluntária, sem
                                            remuneração.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fs-8 fw-bold" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Posso confiar no método de aprendizagem e nos conteúdos
                                            disponibilizados nessa plataforma?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body pt-0 fs-5 text-dark">
                                            Sim. Apesar de sermos pessoas sem capacidade técnica na
                                            área da Libras, não tendo certificações no nível
                                            necessário para sermos reconhecidas pelo MEC como
                                            docentes, aprendemos Libras de forma informal com
                                            intérpretes, tradutores e professores atuantes no
                                            mercado. Também nos comunicamos regularmente com membros
                                            da comunidade surda e estamos sempre nos aperfeiçoando
                                            de forma autoditada.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fs-8 fw-bold" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                            aria-expanded="false" aria-controls="flush-collapseFour">
                                            O MISSIN me tornará fluente em Libras?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body pt-0 fs-5 text-dark">
                                            Não. O nosso objetivo é prover mais uma ferramenta
                                            didática, tanto a interessados autodidatas quanto a
                                            profissionais na área que queiram tornar a experiência
                                            de aprendizado ou de ensino mais atrativa, divertida e
                                            funcional, que possa servir como um adicional a uma
                                            rotina de estudos mais rica e recomendada por
                                            especialistas.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border-bottom">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fs-8 fw-bold" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                            aria-expanded="false" aria-controls="flush-collapseFive">
                                            Quero contribuir de alguma forma com o projeto. O que
                                            posso fazer para ajudar o MISSIN?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body pt-0 fs-5 text-dark">
                                            Como esse projeto faz parte de um Trabalho de Conclusão
                                            de Curso, sua participação como um dos voluntários no
                                            preenchimento do questionário de validação do projeto
                                            seria muito bem-vinda. No final dessa página, haverá uma
                                            sessão com o tema: "Como você pode nos ajudar", onde se
                                            encontra uma explicação mais detalhada de como poderá
                                            auxiliar os desenvolvedores do MISSIN.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  Recent news Section -->
        <section class="Recent-news bg-light-gray py-5 py-lg-11 py-xl-12">
            <div class="container">
                <div class="d-flex flex-column gap-5 gap-xl-11">
                    <div class="row gap-7 gap-xl-0">
                        <div class="col-xl-4 col-xxl-4">
                            <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                                data-aos-duration="1000">
                                <span
                                    class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">05</span>
                                <hr class="border-line bg-white" />
                                <span class="badge text-bg-dark">Blog</span>
                            </div>
                        </div>
                        <div class="col-xl-8 col-xxl-7">
                            <div class="row">
                                <div class="col-xxl-8">
                                    <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                        data-aos-duration="1000">
                                        <h2 class="mb-0">Nossos Artigos</h2>
                                        <p class="fs-5 mb-0 text-opacity-70">
                                            Nossas matérias exploram temas que podem ajudá-lo a
                                            entender melhor a Libras e outras línguas de sinais, a
                                            história dos surdos e a cultura da comunidade surda.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 mb-7 mb-xl-0">
                            <div class="resources d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                data-aos-duration="1000">
                                <a href="libras-o_que_eh.php"
                                    class="resources-img resources-img-first position-relative overflow-hidden d-block">
                                    <img src="../assets/images/backgrounds/lbs_oqueeh.jpg" alt="resources"
                                        class="img-fluid" />
                                </a>
                                <div class="resources-details">
                                    <p class="mb-0">Abr 23, 2026</p>
                                    <h4 class="mb-0">
                                        O que é Libras? Entenda a importância da Língua Brasileira
                                        de Sinais
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-7 mb-xl-0">
                            <div class="resources d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <a href="blog-mitos_e_verdades.php"
                                    class="resources-img position-relative overflow-hidden d-block">
                                    <img src="../assets/images/backgrounds/cultura_surdos.jpg" alt="resources"
                                        class="img-fluid" />
                                </a>
                                <div class="resources-details">
                                    <p class="mb-0">Abr 23, 2026</p>
                                    <h4 class="mb-0">
                                        Mitos e Verdades sobre a Comunidade Surda Brasileira
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-7 mb-xl-0">
                            <div class="resources d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="300"
                                data-aos-duration="1000">
                                <a href="blog-historia_libras.php"
                                    class="resources-img position-relative overflow-hidden d-block">
                                    <img src="../assets/images/backgrounds/predio-ines.png" alt="resources"
                                        class="img-fluid" />
                                </a>
                                <div class="resources-details">
                                    <p class="mb-0">Abr 24, 2026</p>
                                    <h4 class="mb-0">
                                        A História da Libras: Do INES aos dias atuais
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  Get in touch Section -->
        <section class="get-in-touch py-5 py-lg-11 py-xl-12">
            <div class="container">
                <div class="d-flex flex-column gap-5 gap-xl-10">
                    <div class="row gap-7 gap-xl-0">
                        <div class="col-xl-4 col-xxl-4">
                            <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                                data-aos-duration="1000">
                                <span
                                    class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">06</span>
                                <hr class="border-line bg-white" />
                                <span class="badge text-bg-dark">Nos contate</span>
                            </div>
                        </div>
                        <div class="col-xl-8 col-xxl-7">
                            <div class="row">
                                <div class="col-xxl-8">
                                    <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                        data-aos-duration="1000">
                                        <h2 class="mb-0">Como você pode nos ajudar</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between gap-7 gap-xl-0">
                        <div class="col-xl-3">
                            <p class="mb-0 fs-5" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                                Responda a um questionário de menos de dez minutos, caso já
                                tenha conferido todos os mistérios escondidos em nossa
                                plataforma.
                            </p>
                        </div>
                        <div class="col-xl-8">
                            <form>
                                <a href="https://forms.gle/c2iAoyyfjsj83wzP7" target="_blank" rel="noopener noreferrer" 
                                   class="p-2 ps-4 pe-2 bg-primary text-dark rounded-pill d-inline-flex align-items-center gap-2 text-decoration-none fw-bold shadow-sm flex-shrink-0 align-self-start align-self-sm-center">
                                    <span>Acessar Formulário</span>
                                    <span class="bg-white round-36 rounded-circle d-flex align-items-center justify-content-center">
                                        <iconify-icon icon="lucide:arrow-up-right" class="fs-5 text-dark"></iconify-icon>
                                    </span>
                                </a>
                            </form>
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