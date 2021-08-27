<?php

?>
<section id="eleven" class="bgc-preto section p-0 fp-auto-height">
    <div class="bg-insta">
        <div class="container">
            <div class="row align-content-center justify-content-center">
                <div class="col-12 d-flex align-content-center justify-content-center p-0">
                    <div class="insta">
                        <h2 class="c-preto m-0">
                            <a href="https://www.instagram.com/laybackbeer/" target="_blank" rel="noopener noreferrer">@laybackbeer</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="footer" class="section">

        <div class="container-fluid bgc-amarelo py-5 py-lg-0">
            <div class="container">

                <div class="row pb-0">
                    <div class="col-sm-8 offset-sm-3 col-lg-7 offset-lg-3 col-xl-6 offset-xl-3 d-flex">
                        <h2 class="mr-auto c-preto">
                        RIDE WITH US
                        </h2>
                        <h2 class="ml-auto c-preto">
                        LIVE WITH US
                        </h2>
                    </div>
                </div>

                <div class="row pt-0 justify-content-center align-content-center">
                    <div class="tnp tnp-subscription col-sm-7 offset-sm-1 col-lg-6 offset-lg-0 bgc-amarelo" id="newsletter">
                        <form method="post" action="http://localhost/2021/?na=s">
                            <input type="hidden" name="nlang" value="">
                            <div class="tnp-field tnp-field-email">
                                <input class="tnp-email" type="email" name="ne" value="" required>
                            </div>
                            <div class="tnp-field tnp-field-button">
                                <input class="tnp-submit" type="submit" value="Qual é o seu email?" >
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid bgc-preto">
            <div class="container">
                <div class="row align-items-center bgc-preto">
                    <div class="col-12 col-lg-4 mb-5 mb-lg-0">
                        <img class="img-fluid" src="<?= $directory ?>/src/img/icons/logofooter.svg" alt="Layback Logo">
                    </div>
                    <div class="col-12 col-lg-3 offset-lg-1 mb-5 mb-lg-0 d-flex flex-column align-items-center">
                        <h2 class="c-amarelo">
                            Contato
                        </h2>
                        <p class="c-amarelo mt-3">
                            contato@laybackbeer.com.br
                        </p>
                        <h2 class="c-amarelo mt-5">
                            redes sociais
                        </h2>
                        <p class="c-amarelo mt-3">
                            <a href="https://www.instagram.com/laybackpark/" target="_blank">
                                <img src="<?php bloginfo('template_directory') ?>/src/img/icons/icon_instagram2.svg" alt="">
                            </a>

                            <a href="https://www.facebook.com/laybackbeer" target="_blank">
                                <img src="<?php bloginfo('template_directory') ?>/src/img/icons/icon_facebook.svg" alt="">
                            </a>
                        </p>
                    </div>
                    <div class="col-12 col-lg-3 offset-lg-1">
                        <div class="container">
                            <div class="row min-vh-auto p-0">
                                <div class="col-12 pl-0 pr-0 mb-3">
                                    <h2 class="c-amarelo">
                                        menu
                                    </h2>
                                </div>
                                <div class="col-4 col-lg-12 pl-0 pr-0">
                                    <li>
                                        <a href="<?= home_url('/#fullpage'); ?>">Home</a>
                                    </li>
                                    <li>
                                        <a href="<?= home_url('/#one'); ?>">Sobre</a>
                                    </li>
                                    <li>
                                        <a href="<?= home_url('/#onebeer'); ?>">beer</a>
                                    </li>

                                </div>
                                <div class="col-4 col-lg-12 pl-0 pr-0">
                                    <li>
                                        <a href="<?= home_url('/#seven'); ?>">park</a>
                                    </li>
                                    <li>
                                        <a href="<?= home_url('/#eight'); ?>">Família</a>
                                    </li>
                                    <li>
                                        <a href="<?= home_url('#nine'); ?>">associados</a>
                                    </li>

                                </div>
                                <div class="col-4 col-lg-12 pl-0 pr-0">

                                    <li>
                                        <a href="<?= home_url('/#curtimos'); ?>">Loja</a>
                                    </li>
                                    <li>
                                        <a href="<?= home_url('/#ten'); ?>">notícias</a>
                                    </li>
                                    <li>
                                        <a href="<?= home_url('/blog'); ?>">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#footer">contato</a>
                                    </li>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </section>
    </div>

<?php wp_footer(); ?>
</body>
</html>