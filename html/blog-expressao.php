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
        $descricaoExpressao = 'Nenhum discurso sobrevive sem entonação. É por isso que quando se comunica com as mãos, precisa-se entender a importância da...';
        renderPageBanner(
          'Expressão Facial e Corporal na Libras',
          $descricaoExpressao, 
          '../assets/images/backgrounds/expressao_facial01.jpg', true);
        ?>

        <!--  Blog Detail Section -->
        <section class="blog-detail py-5 py-lg-11 py-xl-12">
            <div class="container">
                <div class="d-flex flex-column gap-7 gap-xl-11">
                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                                Por que é importante
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                <p class="fs-5 mb-0">
                                    Se você acredita que aprender Libras é apenas decorar sinais feitos com as mãos,
                                    este artigo vai mudar sua percepção.
                                    Na Língua Brasileira de Sinais, o rosto e o corpo não são apenas "acompanhamentos";
                                    eles são <span class="text-primary">componentes gramaticais obrigatórios</span>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-detail-img" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <img src="../assets/images/backgrounds/expressoeserik.jpg" alt="blog-detail" class="img-fluid">
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-8">
                            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                                <h4>O Rosto é a "Voz" do Sinal</h4>
                                <p class="fs-5 mb-0">
                                    Imagine ouvir alguém falando em uma linha reta, sem nenhuma entonação, como um robô.
                                    Estranho, não é?
                                    Nas línguas orais, usamos a entonação da voz para indicar se estamos fazendo uma
                                    pergunta, se estamos bravos ou felizes.
                                </p>
                                <p class="fs-5 mb-6">
                                    Na Libras, essa função pertence às <span class="text-primary">Expressões Não Manuais
                                        (ENM)</span>. A expressão facial funciona como a "melodia" e a "entonação" da
                                    frase.
                                    Sem elas, o sinal pode perder o sentido ou soar incompleto.
                                </p>
                                <h4>Gramática no Olhar e nas Sobrancelhas</h4>
                                <p class="fs-5 mb-6">
                                    As expressões faciais em Libras vão muito além de demonstrar emoções simples. Elas
                                    possuem funções gramaticais específicas:
                                </p>
                                <p class="fs-5 mb-6">
                                <ul>
                                    <li><span class="text-primary">Interrogação:</span> Para fazer uma pergunta, as
                                        sobrancelhas geralmente se franzem ou se levantam, e o corpo pode se inclinar
                                        levemente para frente.</li>
                                    <li><span class="text-primary">Negação:</span> Muitas vezes, um sinal afirmativo
                                        torna-se negativo apenas com um leve balançar de cabeça e uma expressão
                                        específica, sem a necessidade de um sinal de "não".</li>
                                    <li><span class="text-primary">Intensidade:</span> Para dizer que algo é "muito
                                        grande" ou "muito longe", a abertura dos olhos e o movimento da boca (inflar as
                                        bochechas, por exemplo) determinam o grau de intensidade.</li>
                                </ul>
                                </p>
                                <h4>O Papel da Expressão Corporal</h4>
                                <p class="fs-5 mb-6">
                                    O corpo também atua como um recurso sintático. O movimento do tronco pode indicar:
                                </p>
                                <p class="fs-5 mb-6">
                                <ul>
                                    <li><span class="text-primary">Mudança de Personagem:</span>Em uma narrativa,
                                        inclinar o corpo para a direita ou esquerda pode representar o diálogo entre
                                        duas pessoas diferentes.</li>
                                    <li><span class="text-primary">Referência Espacial:</span>Mostrar onde um objeto
                                        está localizado ou a direção de um movimento.</li>
                                </ul>
                                </p>
                                <h4>O Perigo da "Face Neutra"</h4>
                                <p class="fs-5 mb-0">
                                    Para um surdo, conversar com alguém que não utiliza expressões faciais é como ler um
                                    texto sem pontuação, sem acentos e sem interrogações. Torna-se cansativo e difícil
                                    de interpretar. Por isso, no aprendizado de Libras,
                                    "perder a vergonha" de movimentar o rosto é o primeiro passo para a fluência.
                                </p>
                                <h4>Conclusão</h4>
                                <p class="fs-5 mb-0">
                                    A Libras é uma língua <span class="text-primary">visual-espacial</span>. Portanto,
                                    ao sinalizar, lembre-se: suas mãos dizem as palavras, mas seu rosto e seu corpo
                                    dizem o que você sente e como você organiza o seu pensamento. Pratique na frente do
                                    espelho e deixe a sua expressão fluir!
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