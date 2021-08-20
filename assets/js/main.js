var $ = jQuery;
/*$(document).ready(function () {
    if (window.location.protocol != "https:") {
        window.location.protocol = "https";
     }
});*/
$('.carousel-header').flickity({
    // options
    cellAlign: 'left',
    contain: true,
    prevNextButtons: false,
    pageDots: true,
    autoPlay: 4000,
    pauseAutoPlayOnHover: false,
    wrapAround: true

});





$('#carousel-mobile-onebeer, #carousel-mobile-twobeer, #carousel-mobile-threebeer,#carousel-mobile-fourbeer,#carousel-mobile-fivebeer,#carousel-mobile-sixbeer,#carousel-mobile-lager').flickity({

    cellAlign: 'left',
    contain: true,
    prevNextButtons: false,
    pageDots: true,

});


$('.nav-item').click(function () {
    $('.effect-menu').addClass('off');
    $('.effect-menu').removeClass('on');
    $('body').css('overflow', 'auto');
    $('.navbar-collapse').removeClass('show');
    $("nav").removeClass('navbar_expand');
    $("nav").removeClass('navbar_expand');
    $('.navbar-toggler').addClass('off').addClass('collapsed').removeClass('on');
});



$(document).ready(function () {
    if ($(window).width() > 992) {



    } else {
        $('#carousel-noticias').flickity({
            // options
            watchCSS: false,
            cellAlign: 'left',
            contain: true,
            prevNextButtons: true,
            pageDots: true,

        });

        $('#carousel-cards').flickity({
            // options
            cellAlign: 'left',
            contain: true,
            prevNextButtons: false,
            pageDots: true,

        });
        $('#carousel-parks').flickity({
            // options
            cellAlign: 'left',
            contain: true,
            prevNextButtons: false,
            pageDots: true,

        });
    }

    //menu
    $(document).on('click', '.effect-menu .off', function (e) {
        e.preventDefault();
        //QUANDO ABRE
        $(this).removeClass('off');
        $(this).addClass('on');
        $('body').css('overflow', 'hidden');
        $("nav").addClass('navbar_expand');
        $(".menu-span").removeClass('d-inline-block');
        $(".menu-span").addClass('d-none');
    });

    $(document).on('click', '.effect-menu .on', function (e) {
        e.preventDefault();
        //QUANDO FECHA
        $(this).addClass('off');
        $(this).removeClass('on');
        $('body').css('overflow', 'auto');
        $("nav").removeClass('navbar_expand');
        $(".menu-span").addClass('d-inline-block');


    });

});

$(window).scroll(function () {

    var beginTop = 50;
    var scroll = $(window).scrollTop();

    if (scroll >= beginTop) {
        $("#nav").addClass("nav-shadow");
        $("#navblog").addClass("nav-white");

    } else {
        $("#nav").removeClass("nav-shadow");
        $("#navblog").removeClass("nav-white");
    }
});





$(document).ready(function () {
    var validatorModal = $("#formModal").validate({
        rules: {
            nome: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            telefone: {
                required: true,
                minlength: 10,
                number: true
            },

        },
        messages: {
            nome: {
                required: 'Este campo está vazio',
                minlength: 'Ops, esse campo precisa ter mais de 3 caracteres'
            },
            email: {
                required: 'Este campo está vazio',
                email: 'Insira um e-mail válido'
            },
            telefone: {
                required: 'Este campo está vazio',
                minlength: 'Ops, insira um telefone válido',
                number: 'Ops, insira um telefone válido'
            },
        }
    });

    var validatorContato = $("#contato-form").validate({
        rules: {
            nome: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            assunto: {
                required: true,
            },
            mensagem: {
                required: true,
                minlength: 3,
            },

        },
        messages: {
            nome: {
                required: 'Este campo está vazio',
                minlength: 'Ops, esse campo precisa ter mais de 3 caracteres'
            },
            email: {
                required: 'Este campo está vazio',
                email: 'Insira um e-mail válido'
            },
            assunto: {
                required: 'Este campo está vazio',
                minlength: 'Escolha um assunto'
            },
            mensagem: {
                required: 'Insira uma mensagem válida',
                minlength: 'Insira uma mensagem válida',
            },
        }
    });
});

$('a[href*="#"]')
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 500, function () {
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) {
                        return false;
                    } else {
                        $target.attr('tabindex', '-1');
                        $target.focus();
                    };
                });
            }
        }
    });

