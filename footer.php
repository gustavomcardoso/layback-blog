<?php

?>
<section id="footer" class="bgc-preto section">
            <div class="container">
                <div class="row align-content-center">
                    <div class="col-12 col-lg-4 mb-5 mb-lg-0">
                        <h2 class="c-amarelo">
                            fale com a gente
                        </h2>
                        <form action="" method="POST" id="contato-form" class="mt-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nome" id="nome" aria-describedby="helpId" placeholder="Nome completo">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <select class="form-control" name="assunto" id="assunto">
                                        <option>Assunto</option>
                                        <option value="Quero comprar">Quero comprar</option>
                                        <option value="Quero revender no meu estabelecimento">Quero revender no meu
                                            estabelecimento</option>
                                        <option value="Quero distribuir na minha região">Quero distribuir na minha
                                            região</option>
                                        <option value="Quero fazer um evento com Lay Back">Quero fazer um evento com Lay
                                            Back</option>
                                        <option value="Quero falar com alguém do Marketing">Quero falar com alguém do
                                            Marketing</option>
                                        <option value="Críticas e sugestões">Críticas e sugestões</option>
                                        <option value="Outros assuntos">Outros assuntos</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="mensagem" id="mensagem" rows="3" placeholder="Mensagem"></textarea>
                            </div>
                            <div class="form-check c-amarelo mb-4">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="checkbox" id="checkbox"
                                        value="checkedValue" checked>
                                    Sim, eu desejo receber a newsletter
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary bgc-amarelo">ENVIAR</button>
                        </form>
                    </div>
                    <div class="col-12 col-lg-3 offset-lg-1 mb-5 mb-lg-0">
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
                                <img src="<?php bloginfo('template_directory') ?>/assets/imgs/icons/icon_instagram2.svg" alt="">
                            </a>

                            <a href="https://www.facebook.com/laybackbeer" target="_blank">
                                <img src="<?php bloginfo('template_directory') ?>/assets/imgs/icons/icon_facebook.svg" alt="">
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
                                        <a href="#fullpage">Home</a>
                                    </li>
                                    <li>
                                        <a href="#one">Sobre</a>
                                    </li>
                                    <li>
                                        <a href="#onebeer">beer</a>
                                    </li>

                                </div>
                                <div class="col-4 col-lg-12 pl-0 pr-0">
                                    <li>
                                        <a href="#seven">park</a>
                                    </li>
                                    <li>
                                        <a href="#eight">Família</a>
                                    </li>
                                    <li>
                                        <a href="#nine">associados</a>
                                    </li>

                                </div>
                                <div class="col-4 col-lg-12 pl-0 pr-0">

                                    <li>
                                        <a href="#curtimos">Loja</a>
                                    </li>
                                    <li>
                                        <a href="#ten">notícias</a>
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
        </section>
    </div>

    <!-- Modal -->
    <div class=" modal fade" id="interesse" tabindex="-1" role="dialog" aria-labelledby="interesse" aria-hidden="true">

        <div class="modal-dialog d-flex justify-self-center align-self-center" role="document">
            <div class="modal-content bgc-branco sucesso-modal">
                <button type="button" class="close mt-2" data-dismiss="modal" aria-label="Close">
                    <img src="<?php bloginfo('template_directory') ?>/assets/imgs/icons/icon_close.svg" alt="">
                </button>
                <div class="modal-body p-5 text-center">
                    <h1 class="c-preto">
                        mensagem enviada!
                    </h1>
                    <p class="preto text-center">
                        Obrigado! Em breve entraremos em <br>contato com você.
                    </p>
                </div>
            </div>
        </div>
        <div class="modal-dialog d-flex justify-self-center align-self-center" role="document">
            <div class="modal-content form-inputs">
                <button type="button" class="close mt-2" data-dismiss="modal" aria-label="Close">
                    <img src="<?php bloginfo('template_directory') ?>/assets/imgs/icons/icon_close.svg" alt="">
                </button>
                <div class="modal-header">
                    <h3 class="modal-title c-amarelo bold">tenho interesse</h3>

                </div>
                <div class="modal-body">
                    <form method="post" id="formModal">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nome" id="nome" aria-describedby="helpId" placeholder="Nome completo">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="telefone" id="telefone" aria-describedby="helpId" placeholder="Telefone">
                        </div>


                </div>
                <div class="modal-footer text-left justify-content-start">
                    <button type="submit" class="btn btn-primary bgc-amarelo upper">enviar</button>
                </div>
                </form>
            </div>
        </div>
    </div>

<?php wp_footer(); ?>
</body>
</html>
