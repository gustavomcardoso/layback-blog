<?php
/**
 * Header template
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */
$directory =  get_template_directory_uri();
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<!doctype html>
<html lang="en">

<head>
    <title>LayBack - Ride With Us</title>
    <meta name="description" content="Celebre o espírito LayBack com a gente. Aqui você encontra um lugar para todos com beer, park, vila gastronômica, cultura, família e muito skate." />

    <meta property="og:title" content="LayBack - Ride With Us" />
    <meta property="og:type" content="restaurant" />
    <meta property="og:description" content="Celebre o espírito LayBack com a gente. Aqui você encontra um lugar para
        todos com beer, park, vila gastronômica, cultura, família e muito" />
    <meta property="og:site_name" content="Layback" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="LayBack - Ride With Us" />
    <meta name="twitter:description" content="Celebre o espírito LayBack com a gente. Aqui você encontra um lugar para
        todos com beer, park, vila gastronômica, cultura, família e muito skate." />

        
        <?php wp_head(); ?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5D5XH9D');
    </script>
    <!-- End Google Tag Manager -->
</head>

<nav class="navbar navbar-expand-lg navbar-dark">
        <div id="#menu" class="container effect-menu">
            <li class="d-block">
                <a href="#fullpage">
                    <img src="<?php echo $directory ?>/assets/imgs/logo.svg" alt="" srcset=""></a>
            </li>
            <button class="navbar-toggler d-lg-none off collapsed" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="hambuguer">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>

                </span>
                <span class="menu-span pl-3"> MENU </span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav mt-3 mt-lg-0">
                    <li class="nav-item mb-3 mb-lg-0">
                        <a class="nav-link" href="#fullpage">Home</a>
                    </li>
                    <li class="nav-item mb-3 mb-lg-0">
                        <a class="nav-link" href="#one">Sobre</a>
                    </li>
                    <li class="nav-item mb-3 mb-lg-0">
                        <a class="nav-link" href="#fourbeer">beer</a>
                    </li>
                    <li class="nav-item mb-3 mb-lg-0">
                        <a class="nav-link" href="#seven">park</a>
                    </li>
                    <li class="nav-item mb-3 mb-lg-0">
                        <a class="nav-link" href="#eight">Família</a>
                    </li>
                    <li class="nav-item mb-3 mb-lg-0">
                        <a class="nav-link" href="#nine">associados</a>
                    </li>
                    <!-- <li class="nav-item mb-3 mb-lg-0">
                        <a class="nav-link" href="#curtimos">loja</a>
                    </li> -->
                    <li class="nav-item mb-3 mb-lg-0">
                        <a class="nav-link" href="#ten">notícias</a>
                    </li>

                    <li class="nav-item mb-3 mb-lg-0">
                        <a class="nav-link" href="#footer">contato</a>
                    </li>
                    <li class="nav-item mb-3 mb-lg-0 d-block d-lg-none">
                        <p class="c-amarelo mt-3 redes">
                            <a href="https://www.instagram.com/laybackbeer/" target="_blank">
                                <img src="<?php echo $directory ?>/assets/imgs/icons/icon_instagram2.svg" alt="">
                            </a>

                            <a href="https://www.facebook.com/laybackbeer" target="_blank">
                                <img src="<?php echo $directory ?>/assets/imgs/icons/icon_facebook.svg" alt="">
                            </a>
                            <a href="https://www.youtube.com/channel/UCu6EsJZlthx5s3DclAwNcSg" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo $directory ?>/assets/imgs/icons/icon_youtube.svg" alt="">
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
