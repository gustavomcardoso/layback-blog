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

        <div class="container-fluid bgc-amarelo">
            <div id="listra">
                <div class="row pt-lg-0 pb-0 justify-content-center">
                    <div class="col-sm-8 col-lg-6 d-flex justify-content-center">
                        <h2 class="mx-auto c-preto d-none d-lg-inline mb-lg-0 octin">
                        RIDE WITH US
                        </h2>
                        <h2 class="mx-auto c-preto mb-lg-0 octin">
                        LIVE WITH US
                        </h2>
                    </div>
                </div>

                <div class="row pt-0 pt-lg-0 justify-content-center align-content-center">
                    <div class="col-8 pr-lg-3 pl-lg-1" id="newsletter">
                        <?php echo do_shortcode( '[newsletter_form form="1"]' ) ?>
                    </div>
                </div>
                </div>
        </div>
        <div class="container-fluid bgc-preto">
            <div class="container">
                <div class="row align-items-center bgc-preto">
                    <div class="col-12 col-lg-4 mb-5 mb-lg-0 d-flex justify-content-center pt-lg-0 pt-5">
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
                            <a href="https://www.instagram.com/laybackbeer/" target="_blank">
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

<!-- <form method="post" action="http://localhost/2021/?na=s" class="pl-lg-4 d-flex flex-column flex-lg-row justify-content-lg-center">
    <input type="hidden" name="nlang" value="">
    <input class="tnp-email octin mx-auto mx-lg-0" type="email" name="ne" value="" required placeholder="Qual é o seu Email?">
    <input class="tnp-submit mx-auto mx-lg-0 mt-lg-0" type="submit" value="INSCREVA-SE" >
</form> -->