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
    <?php 
            include 'includes/header.php'; 
            require_once 'includes/functions.php'; 

            // Array centralizado com todos os artigos do blog
            $artigos = [
                [
                    'link'   => 'libras-o_que_eh.php',
                    'imagem' => '../assets/images/backgrounds/lbs_oqueeh.jpg',
                    'data'   => 'Abr 23, 2026',
                    'titulo' => 'O que é Libras? Entenda a importância da Língua Brasileira de Sinais'
                ],
                [
                    'link'   => 'blog-mitos_e_verdades.php',
                    'imagem' => '../assets/images/backgrounds/cultura_surdos.jpg',
                    'data'   => 'Abr 23, 2026',
                    'titulo' => 'Mitos e Verdades sobre a Comunidade Surda Brasileira'
                ],
                [
                    'link'   => 'blog-historia_libras.php',
                    'imagem' => '../assets/images/backgrounds/predio-ines.png',
                    'data'   => 'Abr 24, 2026',
                    'titulo' => 'A História da Libras: Do INES aos dias atuais'
                ],
                [
                    'link'   => 'blog-expressao.php',
                    'imagem' => '../assets/images/backgrounds/expressao_facial01.jpg',
                    'data'   => 'Abr 24, 2026',
                    'titulo' => 'A Importância da Expressão Facial e Corporal na Libras'
                ],
                [
                    'link'   => 'blog-5motivos.php',
                    'imagem' => '../assets/images/backgrounds/5motivos1.jpg',
                    'data'   => 'Abr 25, 2026',
                    'titulo' => '5 Motivos para Aprender Libras Hoje Mesmo'
                ],
                [
                    'link'   => 'blog-alfabeto.php',
                    'imagem' => '../assets/images/backgrounds/datilologia.jpg',
                    'data'   => 'Abr 25, 2026',
                    'titulo' => 'Datilologia - "Soletrar" em Libras'
                ]
            ];
            ?>

            <!-- Page Wrapper -->
            <div class="page-wrapper overflow-hidden">
            <!-- Banner Section -->
             <?php
             $descricaoBlog = 'Confira as nossas <span class="text-primary">postagens</span> mais recentes!';
             renderPageBanner('Blog', $descricaoBlog, '../assets/images/backgrounds/blog.jpg');
             ?>

            <!-- Blog Section -->
            <section class="blog-section py-5 py-lg-11 py-xl-12">
                <div class="container">
                <div class="row">
                    <?php renderBlogPosts($artigos); ?>
                </div>
                </div>
            </section>
            </div>

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