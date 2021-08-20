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



