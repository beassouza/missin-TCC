<?php
require_once __DIR__ . '/../../config.php';
?>
<!-- Meet our team Section -->
<section class="meet-our-team py-5 py-lg-11 py-xl-12">
    <div class="container">
        <div class="d-flex flex-column gap-5 gap-xl-11">
            <!-- Cabeçalho da Seção -->
            <div class="row gap-7 gap-xl-0">
                <div class="col-xl-4 col-xxl-4">
                    <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                        data-aos-duration="1000">
                        <span
                            class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">03</span>
                        <hr class="border-line bg-white" />
                        <span class="badge text-bg-dark">Nosso time</span>
                    </div>
                </div>
                <div class="col-xl-8 col-xxl-7">
                    <div class="row">
                        <div class="col-xxl-8">
                            <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                data-aos-duration="1000">
                                <h2 class="mb-0">Conheça o nosso time</h2>
                                <p class="fs-5 mb-0 text-opacity-70">
                                    Somos jovens que amam a comunidade surda e
                                    querem ajudar outros ouvintes a se conectar com os
                                    surdos do mesmo jeito que nós já estamos conectadas!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grid Estático das Integrantes (Sem Owl Carousel) -->
            <div class="row g-4">
                <!-- Beatriz Souza -->
                <div class="col-md-6 col-xl-3">
                    <div class="meet-team d-flex flex-column gap-4">
                        <div class="meet-team-img position-relative overflow-hidden">
                            <img src="../assets/images/team/bia.jpg" alt="Beatriz Souza" class="img-fluid w-100" />
                            <div class="meet-team-overlay p-7 d-flex flex-column justify-content-end">
                                <ul class="social list-unstyled mb-0 hstack gap-2 justify-content-end">
                                    <li>
                                        <a href="<?php echo defined('LINKEDIN_B') ? LINKEDIN_B : '#'; ?>"
                                            class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"
                                            target="_blank">
                                            <iconify-icon icon="lucide:linkedin" class="fs-7 text-dark"></iconify-icon>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=""
                                            class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center">
                                            <iconify-icon icon="lucide:linkedin" class="fs-7 text-dark">
                                            </iconify-icon>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="meet-team-details">
                            <h4 class="mb-0">Beatriz Souza</h4>
                            <p class="mb-0">Criação & Execução</p>
                        </div>
                    </div>
                </div>

                <!-- Stella Souza -->
                <div class="col-md-6 col-xl-3">
                    <div class="meet-team d-flex flex-column gap-4">
                        <div class="meet-team-img position-relative overflow-hidden">
                            <img src="../assets/images/team/stella.jpg" alt="Stella Souza" class="img-fluid w-100" />
                            <div class="meet-team-overlay p-7 d-flex flex-column justify-content-end">
                                <ul class="social list-unstyled mb-0 hstack gap-2 justify-content-end">
                                    <li>
                                        <a href="<?php echo defined('INSTAGRAM_S') ? INSTAGRAM_S : '#'; ?>"
                                            class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"
                                            target="_blank">
                                            <iconify-icon icon="lucide:instagram" class="fs-7 text-dark"></iconify-icon>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo defined('LINKEDIN_S') ? LINKEDIN_S : '#'; ?>"
                                            class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"
                                            target="_blank">
                                            <iconify-icon icon="lucide:linkedin" class="fs-7 text-dark"></iconify-icon>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="meet-team-details">
                            <h4 class="mb-0">Stella Souza</h4>
                            <p class="mb-0">Tradução & Revisão</p>
                        </div>
                    </div>
                </div>

                <!-- Paloma -->
                <div class="col-md-6 col-xl-3">
                    <div class="meet-team d-flex flex-column gap-4">
                        <div class="meet-team-img position-relative overflow-hidden">
                            <img src="../assets/images/team/paloma.jpg" alt="Paloma" class="img-fluid w-100" />
                            <div class="meet-team-overlay p-7 d-flex flex-column justify-content-end">
                                <ul class="social list-unstyled mb-0 hstack gap-2 justify-content-end">
                                    <li>
                                        <a href="<?php echo defined('INSTAGRAM_P') ? INSTAGRAM_P : '#'; ?>"
                                            class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"
                                            target="_blank">
                                            <iconify-icon icon="lucide:instagram" class="fs-7 text-dark"></iconify-icon>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="meet-team-details">
                            <h4 class="mb-0">Paloma</h4>
                            <p class="mb-0">Intérprete</p>
                        </div>
                    </div>
                </div>

                <!-- Isadora -->
                <div class="col-md-6 col-xl-3">
                    <div class="meet-team d-flex flex-column gap-4">
                        <div class="meet-team-img position-relative overflow-hidden">
                            <img src="../assets/images/team/isa.jpg" alt="Isadora" class="img-fluid w-100" />
                            <div class="meet-team-overlay p-7 d-flex flex-column justify-content-end">
                                <ul class="social list-unstyled mb-0 hstack gap-2 justify-content-end">
                                    <li>
                                        <a href="<?php echo defined('INSTAGRAM_I') ? INSTAGRAM_I : '#'; ?>"
                                            class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"
                                            target="_blank">
                                            <iconify-icon icon="lucide:instagram" class="fs-7 text-dark"></iconify-icon>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="meet-team-details">
                            <h4 class="mb-0">Isadora</h4>
                            <p class="mb-0">Intérprete</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fim da <div class="row g-4"> -->
        </div>
    </div>
</section>