
<nav class="navbar navbar-expand-lg navbar-dark" id="navblog">
        <div id="#menu" class="container effect-menu">
            <li class="d-block">
                <a href="#fullpage">
                    <img src="<?= $directory ?>/src/img/icons/logo.svg" alt="" srcset="">
                    <span class="d-sm-none d-lg-inline-flex">|</span>
                    <span class="graduate d-sm-none d-lg-inline-flex">Blog</span>
                </a>
            </li>
            <button class="navbar-toggler d-lg-none off collapsed" type="button" data-toggle="collapse" data-target="#collapseblog" aria-controls="collapseblog" aria-expanded="false" aria-label="Toggle navigation">
                <span class="hambuguer">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>

                </span>
                <span class="menu-span pl-3"> MENU </span>
            </button>
            <div class="collapse navbar-collapse" id="collapseblog">
                <ul class="navbar-nav mt-3 mt-lg-0 ml-auto">
                    <li class="nav-item mb-3 mb-lg-0">
                        <a class="nav-link c-preto" href="#fullpage">categoria1</a>
                    </li>
                    <li class="nav-item mb-3 mb-lg-0">
                        <a class="nav-link c-preto" href="#one">categoria2</a>
                    </li>
                    <li class="nav-item mb-3 mb-lg-0">
                        <a class="nav-link c-preto" href="#fourbeer">categoria3</a>
                    </li>

                    <li class="nav-item mb-3 mb-lg-0 d-block d-lg-none">
                        <p class="c-amarelo mt-3 redes">
                            <a href="https://www.instagram.com/laybackbeer/" target="_blank">
                                <img src="<?= $directory ?>/src/img/icons/icon_instagram2.svg" alt="">
                            </a>

                            <a href="https://www.facebook.com/laybackbeer" target="_blank">
                                <img src="<?= $directory ?>/src/img/icons/icon_facebook.svg" alt="">
                            </a>
                            <a href="https://www.youtube.com/channel/UCu6EsJZlthx5s3DclAwNcSg" target="_blank" rel="noopener noreferrer">
                                <img src="<?= $directory ?>/src/img/icons/icon_youtube.svg" alt="">
                            </a>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<body <?php body_class(); ?>>
<header class="header"></header>
<nav class="navigation"></nav>
<main class="main">