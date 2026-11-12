<?php
require_once __DIR__ . '/functions.php';
iniciarSessao();
?>

<!-- Header Fragment -->
<header class="header border-4 border-primary border-top position-fixed start-0 top-0 w-100">
    <div class="container">
        <div class="header-wrapper d-flex align-items-center justify-content-between">
            <div class="logo">
                <a href="index.php" class="logo-white">
                    <img src="../assets/images/logos/logo-white.png" alt="MISSIN" style="max-height: 100px; height: auto; display: block;">
                </a>
                <a href="index.php" class="logo-dark">
                     <img src="../assets/images/logos/logo-dark.png" alt="MISSIN" style="max-height: 100px; height: auto; display: block;">
                </a>
            </div>
            <div class="d-flex align-items-center gap-4">
                <div class="btn-group">
                    <button
                        class="btn btn-secondary toggle-menu round-45 p-2 d-flex align-items-center justify-content-center bg-white rounded-circle"
                        type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        <iconify-icon icon="solar:hamburger-menu-line-duotone" class="menu-icon fs-8 text-dark">
                        </iconify-icon>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end p-4">
                        <div class="d-flex flex-column gap-6">
                            <div class="hstack justify-content-between border-bottom pb-6">
                                <p class="mb-0 fs-5 text-dark">Menu</p>
                                <button type="button" class="btn-close opacity-75" aria-label="Close"></button>
                            </div>
                            <div class="d-flex flex-column gap-3">
                                <ul class="header-menu list-unstyled mb-0 d-flex flex-column gap-2">
                                    <li class="header-item">
                                        <a href="../html/index.php" aria-current="true"
                                            class="header-link active hstack gap-2 fs-7 fw-bold text-dark">
                                            <img src="../assets/images/svgs/secondary-leaf.svg" alt="" width="20"
                                                height="20" class="img-fluid animate-spin" />Início
                                        </a>
                                    </li>
                                    <li class="header-item">
                                        <a href="../html/about-us.php" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                            <img src="../assets/images/svgs/secondary-leaf.svg" alt="" width="20"
                                                height="20" class="img-fluid animate-spin" />Quem Somos
                                        </a>
                                    </li>
                                    <li class="header-item">
                                        <a href="../html/dicionario.php" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                            <img src="../assets/images/svgs/secondary-leaf.svg" alt="" width="20"
                                                height="20" class="img-fluid animate-spin" />Dicionário
                                        </a>
                                    </li>
                                    <li class="header-item">
                                        <a href="../html/blog.php" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                            <img src="../assets/images/svgs/secondary-leaf.svg" alt="" width="20"
                                                height="20" class="img-fluid animate-spin" />Blog
                                        </a>
                                    </li>
                                    <li class="header-item">
                                        <a href="../jogo/index.php" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                            <img src="../assets/images/svgs/secondary-leaf.svg" alt="" width="20"
                                                height="20" class="img-fluid animate-spin" />Mistérios
                                        </a>
                                    </li>
                                    <li class="header-item">
                                        <a href="../html/help-us.php" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                            <img src="../assets/images/svgs/secondary-leaf.svg" alt="" width="20"
                                                height="20" class="img-fluid animate-spin" />Nos Ajude
                                        </a>
                                    </li>
                                    <li class="header-item">
                                </ul>
                              <div class="hstack gap-3">
                                    <?php if (isset($_SESSION['usuario_id'])): ?>
                                        <span class="text-white-50 me-2">Olá, <strong class="text-primary"><?php echo htmlspecialchars($_SESSION['usuario_apelido']); ?></strong></span>
                                        <a href="../html/logout.php" class="btn btn-danger fs-6 px-3 py-2 hstack justify-content-center">Sair da Conta</a>
                                    <?php else: ?>
                                        <a href="../html/sign-in.php" class="btn btn-outline-light fs-6 bg-white px-3 py-2 text-dark w-50 hstack justify-content-center">Fazer Login</a>
                                        <a href="../html/sign-up.php" class="btn btn-dark text-white fs-6 bg-dark px-3 py-2 w-50 hstack justify-content-center">Criar Conta</a>
                                    <?php endif; ?>
                                    </div>
                            </div>
                            <div>
                                <a class="fs-8 text-dark fw-bold"
                                    href="mailto:bdss2@aluno.ifnmg.edu.br">bdss2@aluno.ifnmg.edu.br</a>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>