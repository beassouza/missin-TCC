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
        $descricaoClassificadores = 'Para quem está começando, a Libras pode
        parecer uma lista de sinais fixos para cada palavra.';
        renderPageBanner(
          'Sinais vs. Classificadores',
          $descricaoClassificadores, 
          '../assets/images/backgrounds/blog-detail-banner.jpg', true);
        ?>

        <!--  Blog Detail Section -->
        <section class="blog-detail py-5 py-lg-11 py-xl-12">
            <div class="container">
                <div class="d-flex flex-column gap-7 gap-xl-11">
                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                                Entenda a diferença
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                <p class="fs-5 mb-0">
                                    No entanto, conforme você avança, percebe que a língua é muito mais descritiva e
                                    visual.
                                    É aqui que entram os <span class="text-primary">Classificadores (CL)</span>.
                                    Mas afinal, qual a diferença entre um sinal comum e um classificador?

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-detail-img" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <img src="../assets/images/backgrounds/blog-detail-img.jpg" alt="blog-detail" class="img-fluid">
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-8">
                            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                                <h4>O que são Sinais?</h4>
                                <p class="fs-5 mb-6">
                                    Os sinais são as unidades lexicais da língua, ou seja, as "palavras".
                                    Eles possuem uma forma fixa e um significado específico que você encontra nos
                                    dicionários de Libras.
                                </p>
                                <p class="fs-5 mb-0">
                                    <span class="text-primary">Exemplo</span>: O sinal de "CARRO" é feito com as duas
                                    mãos fechadas simulando segurar um volante, movendo-as levemente.
                                    Esse sinal representa o conceito geral de um automóvel.
                                </p>
                                <p></p>
                                <h4>O que são Classificadores (CL)?</h4>
                                <p class="fs-5 mb-6">
                                    Os classificadores não são sinais fixos, mas sim formas manuais que descrevem como
                                    algo é, onde algo está ou como algo
                                    se move. Eles funcionam como uma espécie de "desenho no ar" que utiliza propriedades
                                    físicas do objeto.
                                </p>
                                <p class="fs-5 mb-10">
                                    A principal diferença na prática:
                                </p>
                                <p></p>
                                <h4>2. Identify Relevant Bloggers:</h4>
                                <p class="fs-5 mb-6">
                                    Se você usa o sinal de CARRO, você está apenas dizendo que há um carro. Se você usa
                                    um CLASSIFICADOR para carro
                                    (geralmente a mão em "B" deitada ou em "3"), você pode mostrar:
                                </p>
                                <ul>
                                    <li>O carro subindo uma ladeira íngreme.</li>
                                    <li>O carro batendo em um poste.</li>
                                    <li>Dois carros estacionados lado a lado.</li>
                                    <li>O carro fazendo um ziguezague.</li>
                                </ul>
                                <p></p>
                                <h4>Tipos comuns de Classificadores</h4>
                                <p class="fs-5 mb-6">
                                    Os classificadores podem descrever diversas características:
                                </p>
                                <p class="fs-5 mb-0">
                                    <span class="text-primary">Pessoa/Animal</span>: Usar o dedo indicador para cima
                                    para representar uma pessoa caminhando, caindo ou encontrando outra.
                                </p>
                                <p class="fs-5 mb-0">
                                    <span class="text-primary">Objetos Planos</span>: Usar a palma da mão para
                                    representar uma folha de papel, uma mesa ou um livro caindo da prateleira.
                                </p>
                                <p class="fs-5 mb-0">
                                    <span class="text-primary">Forma e Tamanho</span>: Usar as mãos para descrever a
                                    espessura de um tronco de árvore ou o formato de um copo.
                                </p>
                                <p class="fs-5 mb-0">
                                    <span class="text-primary">Instrumentais</span>: Mostrar como você segura e usa uma
                                    ferramenta, como uma tesoura, um martelo ou uma escova de dentes.
                                </p>
                                <p></p>
                                <h4>Por que os Classificadores são importantes?</h4>
                                <p class="fs-5 mb-6">
                                    Sem os classificadores, a Libras seria uma língua rígida e pobre em detalhes. Eles
                                    permitem que o sinalizante seja extremamente específico sem precisar de mil
                                    palavras. Em vez de dizer "o homem caminhou devagar, tropeçou em uma pedra e caiu
                                    para o lado",
                                    o surdo utiliza um classificador de pessoa e, em um único movimento fluido, descreve
                                    toda a cena.
                                </p>
                                <p></p>
                                <h4>Conclusão</h4>
                                <p class="fs-5 mb-6">
                                    Enquanto os <span class="text-primary">sinais</span> nomeiam as coisas, os <span
                                        class="text-primary">classificadores</span> as descrevem em ação e forma.
                                    Dominar os classificadores é o que separa um sinalizante básico de um comunicador
                                    fluente e expressivo.
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