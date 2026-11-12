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
        $descricaoAliado = 'Em um mundo onde os surdos são ignorados,
        precisamos repensar a <span class="text-primary">nossa forma de vê-los</span>.';
        renderPageBanner(
          'Como ser um aliado',
          $descricaoAliado, 
          '../assets/images/resources/aliado_1.jpeg', true);
        ?>

        <!--  Blog Detail Section -->
        <section class="blog-detail py-5 py-lg-11 py-xl-12">
            <div class="container">
                <div class="d-flex flex-column gap-7 gap-xl-11">
                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                                Cultura Surda
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                <p class="fs-5 mb-0">
                                    Ser um aliado da comunidade surda vai muito além de aprender sinais; envolve
                                    entender que a surdez não é apenas uma condição médica,
                                    mas uma <span class="text-primary">identidade cultural</span>.
                                    A Cultura Surda possui valores, tradições e formas de interagir que todo ouvinte
                                    deveria conhecer.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-detail-img" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <img src="../assets/images/resources/aliado_2.jpg" alt="blog-detail" class="img-fluid">
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-8">
                            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                                <h4>Identidade Surda: Ver para Existir</h4>
                                <p class="fs-5 mb-0">
                                    Para muitos, ser surdo é uma característica identitária, assim como a nacionalidade
                                    ou a etnia.
                                    A comunidade surda compartilha uma <span class="text-primary">experiência
                                        visual</span> do mundo.
                                </p>
                                <p class="fs-5 mb-0"><span class="text-primary">Identidade Política</span>: Muitos
                                    surdos se orgulham de sua condição e não a veem como uma "deficiência a ser curada",
                                    mas como uma forma diferente de processar informações e se comunicar.
                                </p>
                                <p class="fs-5 mb-0">
                                    <span class="text-primary">O Valor da Língua</span>: A Libras é o maior símbolo
                                    dessa identidade.
                                    É através dela que a cultura é transmitida de geração em geração.
                                </p>
                                <p></p>
                                <h4>Terminologia Correta: Por que nunca dizer "Surdo-Mudo"?</h4>
                                <p class="fs-5 mb-6">
                                    Este é o erro mais comum cometido por ouvintes, e corrigi-lo é o primeiro passo para
                                    ser um aliado.
                                </p>
                                <p class="fs-5 mb-0"><span class="text-primary">O Mito do Mudo</span>: Como já vimos, a
                                    maioria dos surdos possui cordas vocais saudáveis.
                                    Eles não falam porque não ouvem, ou simplesmente porque preferem a Libras como sua
                                    língua principal.
                                </p>
                                <p class="fs-5 mb-0">
                                    <span class="text-primary">Termo Correto</span>: Use apenas "Surdo" ou "Pessoa
                                    Surda".
                                </p>
                                <p class="fs-5 mb-0">
                                    <span class="text-primary">Deficiente Auditivo vs. Surdo</span>: Embora na lei sejam
                                    termos próximos, na cultura, "deficiente auditivo" é um termo clínico.
                                    Muitos membros da comunidade preferem ser chamados de "Surdo" para reforçar sua
                                    identidade cultural e linguística.
                                </p>
                                <p></p>
                                <h4>Etiqueta Social e Interação</h4>
                                <p class="fs-5 mb-6">
                                    Se você encontrar um surdo e quiser ser educado e eficiente na comunicação, siga
                                    estas dicas de "etiqueta":
                                </p>
                                <p class="fs-5 mb-6">
                                    <span class="text-primary">Chamar a atenção</span>: Não grite (não adianta). O
                                    correto é acenar levemente com a mão ou dar um toque suave no ombro.
                                    Em ambientes fechados, acender e apagar a luz rapidamente também é um sinal comum de
                                    chamada.
                                </p>
                                <p class="fs-5 mb-6">
                                    <span class="text-primary">Contato Visual</span>: Na cultura surda, desviar o olhar
                                    enquanto alguém sinaliza é o equivalente a "tapar os ouvidos" para um
                                    ouvinte. Mantenha sempre o contato visual.
                                </p>
                                <p class="fs-5 mb-6">
                                    <span class="text-primary">Fale com o Surdo, não com o Intérprete</span>: Se houver
                                    um intérprete presente, olhe e direcione sua fala diretamente para o surdo.
                                    O intérprete é apenas a ponte, não o interlocutor.
                                </p>
                                <p class="fs-5 mb-6">
                                    <span class="text-primary">Não obstrua a boca</span>: Mesmo que a Libras seja a
                                    base, muitos surdos usam pistas labiais. Evite colocar a mão na frente da boca ou
                                    falar enquanto come.
                                </p>
                                <p class="fs-5 mb-6">
                                    <span class="text-primary">Posicionamento</span>: Em uma conversa em grupo, tente
                                    organizar as cadeiras em círculo.
                                    Isso garante que todos os surdos consigam ver quem está sinalizando.
                                </p>
                                <p></p>
                                <h4>Como ser um Aliado no Dia a Dia</h4>
                                <p class="fs-5 mb-0">
                                    Ser um aliado é agir para que os espaços sejam acessíveis:
                                </p>
                                <p>
                                <ul>
                                    <li>
                                        Sempre que postar um vídeo, coloque legendas.
                                    </li>
                                    <li>
                                        Se for organizar um evento, contrate intérpretes de Libras.
                                    </li>
                                    <li>
                                        Nunca impeça um surdo de usar sua língua natural.
                                    </li>
                                </ul>
                                </p>
                                <p class="fs-5 mb-0">
                                    Conhecer a cultura é respeitar o espaço do outro. A inclusão começa com o fim do
                                    preconceito e o início da curiosidade respeitosa.
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