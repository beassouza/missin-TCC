<?php
// 1. Inclui o banco de dados
require_once '../html/includes/db.php';

require_once '../html/includes/functions.php';

iniciarSessao();

try {
    // 2. Busca todos os sinais do banco ordenados por categoria/letra e depois pelo nome do sinal
    $stmt = $conn->query("SELECT * FROM dicionario ORDER BY categoria ASC, sinal ASC");
    $sinais = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $sinais = []; // Mantém a lista vazia se houver erro para não quebrar o HTML
}

// Lógica para agrupar os sinais pela letra da categoria no PHP
$sinaisAgrupados = [];
foreach ($sinais as $sinal) {
    $sinaisAgrupados[$sinal['categoria']][] = $sinal;
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MISSIN - Dicionário</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo-dark.png" />
  <link rel="stylesheet" href="../assets/libs/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/libs/aos-master/dist/aos.css">
  <link rel="stylesheet" href="../assets/css/styles.css" />
</head>

<body>

  
    <?php 
    // 1. Inclusão dos headers e funções principais
    include 'includes/header.php'; 
    require_once 'includes/functions.php'; 
    ?>

    <!-- Page Wrapper -->
    <div class="page-wrapper overflow-hidden">
        
    <!-- Banner Section -->
      <?php
        $descricaoDicionario = 'Consulte os <span class="text-primary">sinais em Libras</span> estruturados de A a Z para ajudar na sua investigação.';
        renderPageBanner('Dicionário', $descricaoDicionario, '../assets/images/backgrounds/library.jpg');
      ?>

    <section class="project py-5 py-lg-11 py-xl-12">
      <div class="container">

        <?php if (empty($sinaisAgrupados)): ?>
            <div class="alert alert-info text-center shadow-sm">Nenhum sinal cadastrado no dicionário ainda.</div>
        <?php endif; ?>

        <?php foreach ($sinaisAgrupados as $letraCategoria => $listaDeSinais): ?>
          
          <div class="row mb-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-12">
              <h2 class="display-5 fw-bold text-primary mb-0"><?php echo htmlspecialchars($letraCategoria); ?></h2>
              <div class="border-top border-secondary border-1 mt-2 opacity-25"></div>
            </div>
          </div>

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mb-10">
            
            <?php foreach ($listaDeSinais as $s): ?>
              <?php $modalId = "modalSinal_" . $s['id']; ?>
              
              <div class="col" data-aos="fade-up" data-aos-duration="1000">
                <div class="card h-100 border border-secondary shadow-lg rounded-3 overflow-hidden bg-dark text-white">
                  
                  <div class="bg-black d-flex align-items-center justify-content-center border-bottom border-secondary" style="height: 180px; position: relative;">
                    
                    <button type="button" 
                            class="btn d-flex align-items-center justify-content-center shadow border-0" 
                            data-bs-toggle="modal" 
                            data-bs-target="#<?php echo $modalId; ?>" 
                            style="
                              width: 60px; height: 60px; 
                              max-width: 60px; max-height: 60px;
                              min-width: 60px; min-height: 60px;
                              background-color: #ccff66; 
                              border-radius: 50% !important;
                              padding: 0; position: absolute;
                              top: 50%; left: 50%;
                              transform: translate(-50%, -50%);
                            ">
                      <span style="
                        display: inline-block; width: 0; height: 0; 
                        border-top: 8px solid transparent;
                        border-bottom: 8px solid transparent;
                        border-left: 14px solid #1a1a1a;
                        margin-left: 4px;
                      "></span>
                    </button>
                    
                  </div>

                  <div class="card-body text-center py-4 bg-white text-dark">
                    <h4 class="card-title fw-bold mb-2">
                        <?php echo htmlspecialchars($s['sinal']); ?>
                    </h4>
                    <?php if(!empty($s['definicao'])): ?>
                        <p class="text-muted small mb-0 px-2"><?php echo htmlspecialchars($s['definicao']); ?></p>
                    <?php endif; ?>
                  </div>

                </div>
              </div>

              <div class="modal fade" id="<?php echo $modalId; ?>" tabindex="-1" aria-labelledby="label_<?php echo $modalId; ?>" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                  <div class="modal-content bg-dark text-white border border-secondary shadow-lg">
                    
                    <div class="modal-header border-bottom border-secondary">
                      <h5 class="modal-title fw-bold" id="label_<?php echo $modalId; ?>">Sinal: <?php echo htmlspecialchars($s['sinal']); ?></h5>
                      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="modal-body text-center p-0 bg-black d-flex align-items-center justify-content-center" style="min-height: 400px;">
                        <!-- Utiliza a tag <video> com reprodução automática em loop -->
                        <video src="<?php echo htmlspecialchars($s['midia_link']); ?>" controls autoplay loop muted playsinline class="img-fluid w-100" style="object-fit: contain; max-height: 500px;">
                            Seu navegador não suporta a reprodução de vídeos.
                        </video>
                    </div>
                    
                    <div class="modal-footer border-top border-secondary bg-dark">
                      <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Fechar</button>
                    </div>

                  </div>
                </div>
              </div>

            <?php endforeach; ?>

          </div>
        <?php endforeach; ?>

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