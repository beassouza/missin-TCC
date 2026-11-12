<?php 
/**
 * Renderiza o Banner das Páginas e Artigos
 * @param string $titulo Título principal (ex: "Blog" ou título do artigo)
 * @param string $descricao Descrição ou subtítulo
 * @param string $bgImage Caminho da imagem de fundo
 * @param bool $exibirBreadcrumb Se true, mostra '← Voltar ao Blog / Artigo'. Padrão: false
 */
function renderPageBanner(string $titulo, string $descricao, string $bgImage, bool $exibirBreadcrumb = false): void {
    $bgEscapado = htmlspecialchars($bgImage);
    $tituloEscapado = htmlspecialchars($titulo);
    
    echo "
    <section class=\"banner-section position-relative d-flex align-items-end min-vh-100 overflow-hidden\" 
             style=\"background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url('{$bgEscapado}') no-repeat center center / cover;\">
        
        <div class=\"container\">
            <div class=\"d-flex flex-column gap-4 pb-8 position-relative z-1\">";

    // Exibe a barra de navegação APENAS se $exibirBreadcrumb for true (nos artigos)
    if ($exibirBreadcrumb) {
        echo "
                <nav aria-label=\"breadcrumb\" data-aos=\"fade-up\" data-aos-delay=\"50\" data-aos-duration=\"1000\">
                    <ol class=\"breadcrumb mb-2\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"blog.php\" class=\"text-white-50 text-decoration-none hover-primary d-inline-flex align-items-center gap-1 fs-6\">
                                <iconify-icon icon=\"lucide:arrow-left\" class=\"fs-5\"></iconify-icon> Voltar ao Blog
                            </a>
                        </li>
                        <li class=\"breadcrumb-item active text-primary fs-6 fw-bold\" aria-current=\"page\">Artigo</li>
                    </ol>
                </nav>";
    }

    echo "
                <!-- Subtítulo sem escape de HTML para permitir spans coloridos -->
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-8 col-lg-10\">
                        <div class=\"d-flex align-items-start gap-3\" data-aos=\"fade-up\" data-aos-delay=\"100\" data-aos-duration=\"1000\">
                            <img src=\"../assets/images/svgs/primary-leaf.svg\" alt=\"\" class=\"img-fluid flex-shrink-0 animate-spin mt-1\" width=\"24\" height=\"24\" />
                            <p class=\"mb-0 text-white fs-5 text-opacity-85 fw-medium lh-base\">
                                {$descricao}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Título Principal -->
                <div class=\"d-flex align-items-end gap-3\" data-aos=\"fade-up\" data-aos-delay=\"200\" data-aos-duration=\"1000\">
                    <h1 class=\"mb-0 fs-14 fs-md-16 text-white lh-sm fw-bold\">
                        {$tituloEscapado}
                    </h1>
                </div>

            </div>
        </div>
    </section>";
}

/**
 * Renderiza a lista de posts do blog em uma grid responsiva
 * @param array $posts Lista contendo os dados dos artigos
 */
function renderBlogPosts(array $posts): void {
    $delay = 100;
    foreach ($posts as $post) {
        $link   = htmlspecialchars($post['link']);
        $imagem = htmlspecialchars($post['imagem']);
        $titulo = htmlspecialchars($post['titulo']);
        $data   = htmlspecialchars($post['data']);

        echo "
        <div class=\"col-lg-6 mb-7\">
            <div class=\"resources d-flex flex-column gap-6\"
                 data-aos=\"fade-up\" 
                 data-aos-delay=\"{$delay}\" 
                 data-aos-duration=\"1000\">
                <a href=\"{$link}\" class=\"resources-img resources-img-blog position-relative overflow-hidden d-block\">
                    <img src=\"{$imagem}\" alt=\"{$titulo}\" class=\"img-fluid\">
                </a>
                <div class=\"resources-details\">
                    <p class=\"mb-0\">{$data}</p>
                    <h4 class=\"mb-0\">
                        <a href=\"{$link}\" class=\"text-decoration-none text-dark\">{$titulo}</a>
                    </h4>
                </div>
            </div>
        </div>";
        
        $delay += 100; // Incrementa o delay do AOS para animação em cascata
    }
}

/**
 * Inicializa a sessão caso ainda não esteja ativa
 */
function iniciarSessao(): void {
    if (session_status() === PHP_SESSION_NONE) {
        ini_set('session.cookie_httponly', 1);
        ini_set('session.use_only_cookies', 1);
        session_start();
    }
}

/**
 * Bloqueia o acesso a páginas restritas (como as de jogo) para usuários não logados.
 * Redireciona para o login com uma mensagem de alerta.
 */
function exigirAutenticacao(): void {
    iniciarSessao();
    
    if (!isset($_SESSION['usuario_id']) || empty($_SESSION['usuario_id'])) {
        $_SESSION['feedback_auth'] = [
            'tipo' => 'warning',
            'mensagem' => '🔒 Você precisa criar uma conta ou fazer login para acessar os nossos mistérios!'
        ];
        header("Location: ../html/sign-in.php");
        exit;
    }
}

?> 
