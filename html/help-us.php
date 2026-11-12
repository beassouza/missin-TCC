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
  <title>Studiova</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo-dark.png" />
  <link rel="stylesheet" href="../assets/libs/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/libs/aos-master/dist/aos.css">
  <link rel="stylesheet" href="../assets/css/styles.css" />
</head>

<body>

  <!-- Header -->
  <?php include 'includes/header.php'; ?>


  <!--  Page Wrapper -->
  <div class="page-wrapper overflow-hidden">

    <!--  Banner Section -->
    <?php
        $descricaoNosAjude = 'Preencha um questionário ou se disponibilize para uma entrevista e nos ajude a descobrir
        se realmente estamos ajudando as pessoas ouvintes a aprender LIBRAS.';
        renderPageBanner('Nos Ajude', $descricaoNosAjude, '../assets/images/backgrounds/help_us.jpg');
      ?>

    <!-- Seção Nos Contate / Contribuição -->
<section class="contact-section py-5 py-lg-11 py-xl-12 bg-light-gray">
    <div class="container py-4">
        
        <!-- Identificador da Seção -->
        <div class="d-flex align-items-center gap-3 mb-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <span class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">10</span>
            <span class="border-end border-2 border-secondary h-100 py-2"></span>
            <span class="badge bg-dark text-white px-3 py-2 rounded-pill fs-6 fw-medium">Nos Contate</span>
        </div>

        <div class="row g-5 align-items-start">
            
            <!-- Texto Descritivo Esquerdo -->
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <h1 class="display-5 fw-bold text-dark mb-4 lh-sm">Como prefere contribuir?</h1>
                <p class="fs-5 text-muted lh-base mb-0">
                    Se ofereça para nos auxiliar a melhorar o nosso conteúdo e fornecer educação gratuita e de qualidade para mais pessoas!
                </p>
            </div>

            <!-- Opções de Contribuição (Lado Direito em 2 Cards) -->
            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <div class="row g-4">
                    
                    <!-- OPÇÃO 1: QUESTIONÁRIO GOOGLE FORMS -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm p-4 rounded-4 bg-white hover-shadow transition-all">
                            <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3">
                                <div>
                                    <span class="badge bg-primary-subtle text-primary fw-bold mb-2 px-3 py-1 rounded-pill">Opção 01</span>
                                    <h4 class="fw-bold text-dark mb-1">Preencher Questionário</h4>
                                    <p class="text-muted small mb-0">Responda ao formulário online rápido do Google Forms.</p>
                                </div>
                                <a href="https://forms.gle/c2iAoyyfjsj83wzP7" target="_blank" rel="noopener noreferrer" 
                                   class="p-2 ps-4 pe-2 bg-primary text-dark rounded-pill d-inline-flex align-items-center gap-2 text-decoration-none fw-bold shadow-sm flex-shrink-0 align-self-start align-self-sm-center">
                                    <span>Acessar Form</span>
                                    <span class="bg-white round-36 rounded-circle d-flex align-items-center justify-content-center">
                                        <iconify-icon icon="lucide:arrow-up-right" class="fs-5 text-dark"></iconify-icon>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- OPÇÃO 2: CONTATO VIA E-MAIL COM COPIAR -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm p-4 rounded-4 bg-white hover-shadow transition-all">
                            <div class="d-flex flex-column gap-3">
                                <div>
                                    <!-- Mantida a cor roxa (bg-primary) com texto escuro visível -->
                                    <span class="badge bg-primary text-dark fw-bold mb-2 px-3 py-1 rounded-pill">Opção 02</span>
                                    <h4 class="fw-bold text-dark mb-1">Enviar um E-mail</h4>
                                    <p class="text-muted small mb-2">Copie o nosso endereço ou clique para abrir no seu app de e-mail favorito:</p>
                                </div>
                                
                                <div class="d-flex flex-column flex-sm-row align-items-stretch align-items-sm-center gap-2 bg-light p-2 rounded-3 border">
                                    <!-- Forçada a cor escura do texto sem alterar as cores dos botões ao redor -->
                                    <input type="text" id="emailInput" value="bdss2@aluno.ifnmg.edu.br" class="form-control border-0 bg-transparent fw-bold" readonly style="color: #ffffff !important;">
                                    
                                    <div class="d-flex gap-2">
                                        <button type="button" onclick="copiarEmail()" class="btn btn-outline-dark btn-sm px-3 rounded-2 fw-medium text-nowrap d-flex align-items-center gap-1">
                                            <iconify-icon icon="lucide:copy" id="copyIcon"></iconify-icon>
                                            <span id="copyText">Copiar</span>
                                        </button>
                                        <!-- Mantida a cor roxa (bg-primary) original do botão de e-mail -->
                                        <a href="mailto:bdss2@aluno.ifnmg.edu.br" class="btn btn-outline-dark btn-sm px-3 rounded-2 fw-bold text-nowrap d-flex align-items-center gap-1">
                                            <iconify-icon icon="lucide:mail"></iconify-icon>
                                            <span>Abrir App</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SCRIPT PARA A FUNÇÃO DE COPIAR E-MAIL -->
<script>
function copiarEmail() {
    const emailInput = document.getElementById('emailInput');
    navigator.clipboard.writeText(emailInput.value).then(() => {
        const copyText = document.getElementById('copyText');
        const copyIcon = document.getElementById('copyIcon');
        
        copyText.innerText = 'Copiado!';
        copyIcon.setAttribute('icon', 'lucide:check');
        
        setTimeout(() => {
            copyText.innerText = 'Copiar';
            copyIcon.setAttribute('icon', 'lucide:copy');
        }, 2500);
    });
}
</script>

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