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
        $descricaoMitosVerdades = 'A desinformação é uma das maiores
                                    barreiras para a inclusão.
                                    Muitas pessoas têm ideias equivocadas sobre como os surdos se comunicam ou como
                                    vivem sua cidadania.
                                    Para ajudar a desmistificar esse universo, preparamos uma lista com os principais
                                    mitos e verdades sobre a comunidade surda no Brasil.';
        renderPageBanner(
          'Comunidade Surda Brasileira',
          $descricaoMitosVerdades, 
          '../assets/images/backgrounds/cultura_surdos.jpg', true);
        ?>

        <!--  Blog Detail Section -->
        <section class="blog-detail py-5 py-lg-11 py-xl-12">
            <div class="container">
                <div class="d-flex flex-column gap-7 gap-xl-11">
                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                                Mitos e Verdades
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                <h4>"Todo surdo é mudo."</h4>
                                <p class="fs-5 mb-0">
                                    <span class="text-primary">MITO.</span> A surdez é a perda da audição, enquanto a
                                    mudez é uma deficiência nas cordas vocais (aparelho fonador), que são condições
                                    distintas.
                                    Muitos surdos não falam porque não aprenderam a oralizar, já que não ouvem a própria
                                    voz, mas suas cordas vocais funcionam perfeitamente.
                                    O termo correto é <span class="text-primary">surdo</span>, e nunca "surdo-mudo".

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-detail-img" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <img src="../assets/images/backgrounds/Cultura-surda_2.jpg" alt="blog-detail" class="img-fluid">
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-8">
                            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                                <h4>"A Libras é apenas uma mímica ou gestos soltos."</h4>
                                <p class="fs-5 mb-0">
                                    <span class="text-primary">MITO.</span> Como tratado em posts recentes, a Libras é
                                    uma <span class="text-primary">língua complexa</span>.
                                    Ela possui regras gramaticais, níveis de abstração e permite expressar qualquer
                                    conceito, desde sentimentos profundos até termos científicos técnicos.
                                    Não são apenas gestos; são sinais com significados precisos.
                                </p>
                                <h4>"Aparelhos auditivos 'curam' a surdez."</h4>
                                <p class="fs-5 mb-6">
                                    <span class="text-primary">MITO.</span> O aparelho auditivo (ou o implante coclear)
                                    é uma ferramenta de auxílio que amplifica o som ou estimula o nervo auditivo, mas
                                    não restaura a audição 100%
                                    como a de um ouvinte. Além disso, muitos surdos optam por não usar aparelhos,
                                    sentindo-se plenamente satisfeitos com sua identidade visual e a comunicação por
                                    sinais.
                                </p>
                                <h4>"O surdo pode dirigir veículos automotores."</h4>
                                <p class="fs-5 mb-6">
                                    <span class="text-primary">VERDADE.</span> No Brasil, surdos podem tirar a Carteira
                                    Nacional de Habilitação (CNH) nas categorias A e B.
                                    A visão é o sentido mais exigido no trânsito, e o motorista surdo utiliza espelhos
                                    retrovisores maiores e sinalização visual para compensar a falta de audição.
                                    É um direito garantido por lei!
                                </p>
                                <h4>"Existem diferentes culturas dentro da comunidade surda."</h4>
                                <p class="fs-5 mb-6">
                                    <span class="text-primary">VERDADE.</span> A Comunidade Surda possui uma <span
                                        class="text-primary">identidade cultural própria</span>.
                                    Isso inclui o jeito de ver o mundo, as artes (como o teatro e a poesia em Libras),
                                    as associações de surdos e a valorização da experiência visual.
                                    Ser surdo, para muitos, não é uma "falta", mas uma forma diferente de ser e estar no
                                    mundo.
                                </p>
                                <h4>"Todo surdo sabe ler lábios (leitura labial)."</h4>
                                <p class="fs-5 mb-0">
                                    <span class="text-primary">MITO.</span> Embora alguns surdos desenvolvam a técnica
                                    da leitura labial, ela é extremamente cansativa e nem sempre precisa.
                                    Muitos fatores podem atrapalhar, como o uso de bigodes, a iluminação do ambiente ou
                                    a dicção de quem fala.
                                    A comunicação por Libras é sempre muito mais eficaz e confortável para o surdo.
                                </p>
                                <h4>"A Libras varia de região para região no Brasil."</h4>
                                <p class="fs-5 mb-0">
                                    <span class="text-primary">VERDADE.</span> Assim como o Português tem sotaques e
                                    gírias diferentes entre o Rio de Janeiro e o Rio Grande do Sul, a Libras também
                                    possui
                                    <span class="text-primary">regionalismos.</span>
                                    Um sinal para "mandioca" em São Paulo pode ser diferente do sinal usado no Nordeste,
                                    mas a base da língua permanece a mesma.
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