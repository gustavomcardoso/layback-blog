<?php get_header();
?>

    <div id="error-404" class="bgc-preto">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center align-self-start">
                    <a href="<?= home_url(); ?>">
                        <img src="<?php bloginfo('template_directory') ?>/src/img/logo.svg" alt="" class="mt-3">
                    </a>
                </div>
                <div class="col-12 col-lg-8 text-center align-self-start">
                    <img src="<?php bloginfo('template_directory') ?>/src/img/404/404.svg" alt="" class="mt-5">

                    <p class="c-amarelo text-center mt-5">
                        A página que você está procurando não existe.

                        <br> <br> Você pode voltar para a <u><a href="<?= home_url(); ?>" class="c-amarelo">página incial</a></u>
                    </p>
                </div>
            </div>
        </div>
    </div>

    
<?php
get_footer();
?>

