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
        $descricaoAlfabeto = 'Para ser fluente, você precisa entender a
        diferença entre <span class="text-primary">Datilologia</span> e <span class="text-primary">Sinalização</span>.';
        renderPageBanner(
          'Alfabeto Manual vs. Sinais',
          $descricaoAlfabeto, 
          '../assets/images/backgrounds/datilologia.jpg', true);
        ?>

        <!--  Blog Detail Section -->
        <section class="blog-detail py-5 py-lg-11 py-xl-12">
            <div class="container">
                <div class="d-flex flex-column gap-7 gap-xl-11">
                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                                Quando usar cada um?
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                <p class="fs-5 mb-0">
                                    Quem está começando a aprender Libras geralmente inicia pelo alfabeto manual. É
                                    natural: é o nosso primeiro contato com a representação das letras através das mãos.
                                    No entanto, existe uma dúvida muito comum: <span class="text-primary">eu devo
                                        soletrar as frases ou usar sinais?</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-detail-img" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <img src="../assets/images/resources/sinais.png" alt="blog-detail" class="img-fluid">
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-8">
                            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                                <h4>O que é a Datilologia (Alfabeto Manual)?</h4>
                                <p></p>
                                <p class="fs-5 mb-0">
                                    A datilologia é o uso das mãos para representar as letras do alfabeto da língua
                                    escrita (no nosso caso, o Português).
                                    É uma ferramenta de empréstimo linguístico.
                                </p>
                                <p class="fs-5 mb-6">
                                    <span class="text-primary">Quando usar a datilologia:</span>
                                </p>
                                <p class="fs-5 mb-0">
                                    <span class="text-primary">Nomes Próprios:</span> Nomes de pessoas, ruas, cidades ou
                                    empresas que ainda não possuem um sinal específico.
                                </p>
                                <p class="fs-5 mb-0">
                                    <span class="text-primary">Palavras sem sinal:</span> Termos técnicos, científicos
                                    ou gírias muito novas que ainda não têm um sinal correspondente na Libras.
                                </p>
                                <p class="fs-5 mb-0">
                                    <span class="text-primary">Enfâse ou Esclarecimento:</span> Quando você quer
                                    enfatizar uma palavra específica ou quando o interlocutor não entendeu o sinal e
                                    você precisa soletrar para conferir.
                                </p>
                                <p></p>
                                <h4>O que são os Sinais?</h4>
                                <p class="fs-5 mb-0">
                                    Os sinais são as "palavras" da Libras. Cada sinal possui um conceito próprio e não
                                    depende das letras do português para existir.
                                    Por exemplo, o sinal de "CASA" não usa as letras C-A-S-A; ele é um movimento
                                    específico que representa o conceito de moradia.
                                </p>
                                <p class="fs-5 mb-6">
                                    Quando usar os sinais:
                                </p>
                                <p class="fs-5 mb-0">
                                    <span class="text-primary">Em 99% da conversa:</span> A Libras é composta por
                                    sinais.
                                    Frases, sentimentos, ações e objetos devem ser expressos através de seus sinais
                                    específicos.
                                </p>
                                <p></p>
                                <h4>O Grande Erro: Soletrar frases inteiras</h4>
                                <p class="fs-5 mb-0">
                                    Muitos iniciantes tentam "falar" soletrando cada palavra da frase.
                                </p>
                                <p class="fs-5 mb-0">
                                <ul>
                                    <li>Exemplo do que NÃO fazer: Soletrar letra por letra "V-O-C-E-S-T-A-B-E-M-?".</li>
                                </ul>
                                </p>
                                <p class="fs-5 mb-0">
                                    Soletrar frases inteiras torna a comunicação extremamente lenta, cansativa e, muitas
                                    vezes, incompreensível para o surdo.
                                    É como se você tentasse falar português soletrando em voz alta: "V-O-C-E...
                                    E-S-T-A...". Ninguém conversa assim!
                                </p>
                                <p></p>
                                <h4>O "Sinal" Pessoal</h4>
                                <p class="fs-5 mb-0">
                                    Uma curiosidade importante para o seu aprendizado: na comunidade surda, as pessoas
                                    não costumam soletrar seus nomes toda vez que se encontram.
                                    Elas recebem um Sinal Pessoal (geralmente dado por um surdo), que funciona como um
                                    "nome em Libras". Assim, em vez de soletrar "R-O-D-R-I-G-O",
                                    utiliza-se apenas um sinal que represente aquela pessoa.
                                </p>
                                <p></p>
                                <h4>Resumo para o seu estudo:</h4>
                                <p class="fs-5 mb-0">
                                    <span class="text-primary">Alfabeto Manual</span>: Use para nomes e termos
                                    específicos (é uma exceção).
                                </p>
                                <p class="fs-5 mb-0">
                                    <span class="text-primary">Sinais</span>: Use para a comunicação geral (é a regra).
                                </p>
                                <p class="fs-5 mb-0">
                                    Aprender Libras é aprender a pensar em conceitos e imagens, e não apenas em letras!
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