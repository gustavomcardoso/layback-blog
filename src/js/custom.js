"use strict";

var $ = jQuery;
$(document).ready(function () {
  $('#telefone').mask('(00) 00000-0000');
  var modalForm = $("#formModal").validate({
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
        minlength: 10
      }
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
        minlength: 'Ops, insira um telefone válido'
      }
    }
  });
  var contatoForm = $("#contato-form").validate({
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
        required: true
      },
      mensagem: {
        required: true,
        minlength: 3
      }
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
        minlength: 'Insira uma mensagem válida'
      }
    }
  });
  $('#formModal').submit(function (e) {
    // console.log(modalForm);
    e.preventDefault();

    if (modalForm.errorList.length <= 0) {
      var serializeForm = $('#formModal').serialize(); //  console.log(serializeForm)

      $.ajax({
        type: "POST",
        url: "sendmail.php",
        data: serializeForm,
        success: function success(response) {
          $('.sucesso-modal').fadeIn(300);
          $('.form-inputs').fadeOut();
        }
      });
    }
  });
  $('#contato-form').submit(function (e) {
    e.preventDefault();

    if (contatoForm.errorList.length <= 0) {
      var serializeForm = $('#contato-form').serialize();
      $('#contato-form .bgc-amarelo').css('opacity', '0.3').attr('disabled', true); // console.log(serializeForm)

      $.ajax({
        type: "POST",
        url: "sendmail.php",
        data: serializeForm,
        success: function success(response) {
          $('#contato-form .form-control').val('');
          $('#contato-form .bgc-amarelo').html('ENVIADO!');
          $('#contato-form .sucessContato').html('Formulário enviado com sucesso!');
          setTimeout(function () {
            $('#contato-form .bgc-amarelo').css('opacity', '1').attr('disabled', false).html('ENVIAR');
          }, 2000);
        },
        error: function error(response) {
          $('#contato-form .bgc-amarelo').html('TENTE NOVAMENTE');
          setTimeout(function () {
            $('#contato-form .bgc-amarelo').css('opacity', '1').attr('disabled', false).html('ENVIAR');
          }, 2000);
        }
      });
    }
  });
});
"use strict";

var $ = jQuery;
$(document).ready(function () {
  if (992 < $(window).width()) {
    $(document).on('click', '#open', function (e) {
      e.preventDefault();
      $('#s').show().animate({
        width: "45%",
        opacity: 1
      }, 500);
      $('#searchsubmit').show().animate({
        opacity: 1
      }, 600);
      $('#open').prop('id', 'close');
    });
    $(document).on('click', '#close', function (e) {
      e.preventDefault();
      $('#s').hide().animate({
        width: "0%",
        opacity: 0
      }, 500);
      $('#searchsubmit').hide().animate({
        opacity: 0
      }, 500);
      $('#close').prop('id', 'open');
    });
  }
});
$('.carousel-header').flickity({
  cellAlign: 'left',
  contain: true,
  prevNextButtons: false,
  pageDots: true,
  autoPlay: 4000,
  pauseAutoPlayOnHover: false,
  wrapAround: true
});
$('.carousel-blog').flickity({
  cellAlign: 'left',
  contain: true,
  prevNextButtons: false,
  pageDots: true,
  freeScroll: true,
  groupCells: 3,
  autoPlay: true,
  wrapAround: true
});
$('.nav-item').click(function () {
  $('.effect-menu').addClass('off');
  $('.effect-menu').removeClass('on');
  $('body').css('overflow', 'auto');
  $('.navbar-collapse').removeClass('show');
  $('nav').removeClass('navbar_expand');
  $('nav').removeClass('navbar_expand');
  $('.navbar-toggler').addClass('off').addClass('collapsed').removeClass('on');
});
$(document).ready(function () {
  if (992 < $(window).width()) {
    $('#carousel-mobile-onebeer, #carousel-mobile-twobeer, #carousel-mobile-threebeer,#carousel-mobile-fourbeer,#carousel-mobile-fivebeer,#carousel-mobile-sixbeer,#carousel-mobile-lager').flickity({
      cellAlign: 'left',
      contain: true,
      prevNextButtons: false,
      pageDots: true
    });
  } else {
    $('#carousel-noticias').flickity({
      watchCSS: false,
      cellAlign: 'left',
      contain: true,
      prevNextButtons: true,
      pageDots: true
    });
    $('#carousel-cards').flickity({
      cellAlign: 'left',
      contain: true,
      prevNextButtons: false,
      pageDots: true
    });
    $('#carousel-parks').flickity({
      cellAlign: 'left',
      contain: true,
      prevNextButtons: false,
      pageDots: true
    });
  }

  $(document).on('click', '.effect-menu .off', function (e) {
    e.preventDefault(); //QUANDO ABRE

    $(this).removeClass('off');
    $(this).addClass('on');
    $('body').css('overflow', 'hidden');
    $('nav').addClass('navbar_expand');
    $('.menu-span').removeClass('d-inline-block');
    $('.menu-span').addClass('d-none');
  });
  $(document).on('click', '.effect-menu .on', function (e) {
    e.preventDefault();
    $(this).addClass('off');
    $(this).removeClass('on');
    $('body').css('overflow', 'auto');
    $('nav').removeClass('navbar_expand');
    $('.menu-span').addClass('d-inline-block');
  });
});
$(window).scroll(function () {
  var beginTop = 50;
  var scroll = $(window).scrollTop();

  if (scroll >= beginTop) {
    $('#nav').addClass('nav-shadow');
    $('#navblog').addClass('nav-white');
  } else {
    $('#nav').removeClass('nav-shadow');
    $('#navblog').removeClass('nav-white');
  }
});
$(document).ready(function () {
  $('#formModal').validate({
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
      }
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
      }
    }
  });
  $('#contato-form').validate({
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
        required: true
      },
      mensagem: {
        required: true,
        minlength: 3
      }
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
        minlength: 'Insira uma mensagem válida'
      }
    }
  });
});
$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function (event) {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

    if (target.length) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 500, function () {
        var $target = $(target);
        $target.focus();

        if ($target.is(':focus')) {
          return false;
        } else {
          $target.attr('tabindex', '-1');
          $target.focus();
        }
      });
    }
  }
});
var fullpage = document.getElementById('fullpage');
var menu = document.getElementById('nav');
var footer = document.getElementById('footer');
var intro = document.getElementById('intro');
var maiormenor = document.getElementById('maiormenor');
var maiormenorContent = document.getElementById('content');
var maior18 = localStorage.getItem('maior18');

if (!maior18) {
  maiormenorContent.innerHTML = '<h1 class="c-amarelo mb-5"> Você é maior de 18 anos? </h1> <a id="content-full"> <button type="button" class="btn btn-outline-primary bdc-amarelo c-amarelo bold upper">SIM</button> </a> <a id="content-smart"> <button type="button" class="btn btn-outline-primary bdc-amarelo c-amarelo bold upper mr-0">NÃO</button> </a>';
  fullpage.style.display = 'none';
  menu.style.display = 'none';
  footer.style.display = 'none';
}

var buttonFull = document.getElementById('content-full');
var buttonSmart = document.getElementById('content-smart');
buttonFull.addEventListener('click', modifyToFull, false);
buttonSmart.addEventListener('click', modifyToSmart, false);

function modifyToFull() {
  intro.style.display = 'none';
  fullpage.style.display = 'block';
  menu.style.display = 'block';
  footer.style.display = 'block';
  localStorage.setItem('maior18', true);
}

;

function modifyToSmart() {
  maiormenor.classList.add('menor');
  maiormenorContent.innerHTML = '<h1 class="c-amarelo mb-3 upper text-center"> valeu pela sinceridade </h1> <p class="c-amarelo text-center"> Infelizmente voce ainda não pode acessar nosso site.</p>';
}

;