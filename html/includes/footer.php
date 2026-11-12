<?php
require_once __DIR__ . '/../../config.php';
?>

<!--- Footer fragment -->

<footer class="footer bg-dark py-5 py-lg-11 py-xl-12">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 mb-8 mb-xl-0">
                <div class="d-flex flex-column gap-8 pe-xl-5">
                    <h2 class="mb-0 text-white">
                        Quer contribuir de forma profissional?
                    </h2>
                    <div class="d-flex flex-column gap-2">
                        <a href="mailto:bdss2@aluno.ifnmg.edu.br" target="_blank"
                            class="link-hover hstack gap-3 text-white fs-5">
                            <iconify-icon icon="lucide:arrow-up-right" class="fs-7 text-primary"></iconify-icon>
                            bdss2@aluno.ifnmg.edu.br
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xl-2 mb-8 mb-xl-0">
                <ul class="footer-menu list-unstyled mb-0 d-flex flex-column gap-2">
                    <li>
                        <a class="link-hover fs-5 text-white" href="../html/index.php">Início</a>
                    </li>
                    <li>
                        <a class="link-hover fs-5 text-white" href="../html/about-us.php">Quem Somos</a>
                    </li>
                    <li>
                        <a class="link-hover fs-5 text-white" id="services" href="../html/dicionario.php">Dicionário</a>
                    </li>
                    <li>
                        <a class="link-hover fs-5 text-white" href="../html/blog.php">Blog</a>
                    </li>
                    <li>
                        <a class="link-hover fs-5 text-white" href="../jogo/index.php">Mistérios</a>
                    </li>
                    <li>
                        <a class="link-hover fs-5 text-white" href="../html/help-us.php">Nos Ajude</a>
                    </li>
                    <li>
                        <a class="link-hover fs-5 text-white" href="../html/terms-and-conditions.php">Termos e Condições</a>
                    </li>
                    <li>
                        <a class="link-hover fs-5 text-white" href="../html/privacy-policy.php">Política de Privacidade</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-xl-2 mb-8 mb-xl-0">
                <ul class="footer-menu list-unstyled mb-0 d-flex flex-column gap-2">
                    <li>
                        <a class="link-hover fs-5 text-white" href="<?= INSTAGRAM_BAH ?>">Instagram</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-xl-3 mb-8 mb-xl-0">
                <p class="mb-0 text-white text-opacity-70 text-md-end">
                    © BEAcreations copyright 2026
                </p>
            </div>
        </div>
    </div>
    <p class="mb-0 text-white text-opacity-70 text-md-center mt-10">
        Distributed by
        <a class="text-white" href="https://www.themewagon.com" target="_blank">ThemeWagon</a>
    </p>
</footer>

<div class="get-template hstack gap-2">
    <button class="btn bg-primary p-2 round-52 rounded-circle hstack justify-content-center flex-shrink-0"
        id="scrollToTopBtn">
        <iconify-icon icon="lucide:arrow-up" class="fs-7 text-dark"></iconify-icon>
    </button>
</div>