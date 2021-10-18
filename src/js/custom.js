"use strict";
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
        width: "257px",
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
        width: "0px",
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
} else if (maior18) {
  $('#intro').css('display', 'none');
}

;
var FCInstagram = window.FCInstagram || {};
FCInstagram.name = "FC Instagram";
FCInstagram.version = "2.0.0"; // Info

console.info("%c " + FCInstagram.name + " %c v" + FCInstagram.version + " %c", "margin-left: 5px; padding: 1px; color: #FEFEFE; font-size: 12px; line-height: 15px; background: #F79433; border-radius: 3px 0 0 3px;", "padding: 1px; color: #FEFEFE; font-size: 12px; line-height: 15px; background: #FF5722; border-radius: 0 3px 3px 0;", "background: transparent;"); // Utility for older browsers

if (typeof Object.create !== "function") {
  Object.create = function (obj) {
    function F() {}

    F.prototype = obj;
    return new F();
  };
}

(function ($, window, document, undefined) {
  var Instagram = {
    API_URL: "https://graph.instagram.com/me/media?fields=",
    API_FIELDS: "caption,media_url,media_type,permalink,timestamp,username",

    /**
     * Initializes the plugin.
     * @param {object} options
     * @param {jQuery Object} elem
     */
    initialize: function initialize(options, elem) {
      this.elem = elem;
      this.$elem = $(elem);
      this.accessToken = $.fn.FCInstagram.accessData.accessToken, this.options = $.extend({}, $.fn.FCInstagram.options, options);
      this.messages = {
        defaultImageAltText: "Instagram Photo",
        notFound: "This user account is private or doesn't have any photos."
      };
      this.getPhotos();
    },

    /**
     * Calls the fetch function and work with the response.
     */
    getPhotos: function getPhotos() {
      var self = this; //   messages = null;

      self.fetch().done(function (results) {
        if (results.data) {
          self.displayPhotos(results);
        } else if (results.error.message) {
          $.error("FCInstagram.js - Error: " + results.error.message);
        } else {
          $.error("FCInstagram.js - Error: user does not have photos.");
        }
      });
    },

    /**
     * Makes the ajax call and returns the result.
     */
    fetch: function fetch() {
      var getUrl = this.API_URL + this.API_FIELDS + "&access_token=" + this.accessToken;
      return $.ajax({
        type: "GET",
        dataType: "jsonp",
        cache: false,
        url: getUrl
      });
    },

    /**
     * Appends the markup to the DOM with the images.
     * @param {object} results
     */
    displayPhotos: function displayPhotos(results) {
      var $element,
          $video,
          hasCaption,
          imageGroup = [],
          imageCaption,
          autoplay,
          max;
      max = this.options.max >= results.data.length ? results.data.length : this.options.max;

      if (results.data === undefined || results.data.length === 0) {
        this.$elem.append(this.messages.notFound);
        return;
      }

      for (var i = 0; i < max; i++) {
        if (results.data[i].media_type === "IMAGE" || results.data[i].media_type === "CAROUSEL_ALBUM") {
          hasCaption = results.data[i].caption !== null || results.data[i].caption !== undefined;
          imageCaption = hasCaption ? $("<span>").text(results.data[i].caption).html() : this.messages.defaultImageAltText;
          $element = $("<a>", {
            href: results.data[i].permalink,
            target: "_blank",
            title: imageCaption,
            style: "background:url(" + results.data[i].media_url + ") no-repeat center / cover;",
            rel: "nofollow"
          }); // Add item

          imageGroup.push($element);
        } else if (results.data[i].media_type === "VIDEO") {
          autoplay = this.options.autoplay == true ? "autoplay muted loop playsinline" : "";
          $source = $("<source>", {
            src: results.data[i].media_url,
            type: "video/mp4"
          });
          $video = $("<video " + autoplay + ">").append($source);
          $element = $("<a>", {
            href: results.data[i].permalink,
            target: "_blank",
            title: imageCaption,
            rel: "nofollow"
          }).append($video); // Add item

          imageGroup.push($element);
        }
      }

      this.$elem.append(imageGroup);

      if (typeof this.options.complete === "function") {
        this.options.complete.call(this);
      }
    }
  };
  /**
   * FCInstagram Plugin Definition.
   */

  jQuery.fn.FCInstagram = function (options) {
    if (jQuery.fn.FCInstagram.accessData.accessToken) {
      this.each(function () {
        var instagram = Object.create(Instagram);
        instagram.initialize(options, this);
      });
    } else {
      $.error("You must define an accessToken on jQuery.FCInstagram");
    }
  }; // Plugin Default Options.


  jQuery.fn.FCInstagram.options = {
    complete: null,
    max: 9,
    autoplay: false
  }; // Instagram Access Data.

  jQuery.fn.FCInstagram.accessData = {
    accessToken: null
  };
})(jQuery, window, document);

jQuery.fn.FCInstagram.accessData = {
  accessToken: 'IGQVJYZADdlQjd0R3VqbXcxa2RIQVFtZAkcwVG1nWXJyd05hRGptbkVJeGZAyNXIzSHpwb3FNSnl0Ql9hajFjUHBDTVl1RmxsQlVSUVpUNVpMM0pvUkFOZAGRhQ0NpZA0RtcUFmREgxbWltbTRZAQVNRUHRXdAZDZD' // Token

};
$('#instafeed').FCInstagram({
  max: 4,
  // A number between 1 and 25 of photos to show. Default: 9
  autoplay: false,
  // Set autoplay video: true/false. Default: false
  complete: function complete() {
    // A callback function to execute after the display of the photos.
    console.log('completed');
  }
});
var buttonFull = document.getElementById('content-full');
var buttonSmart = document.getElementById('content-smart');
buttonFull.addEventListener('click', modifyToFull, false);
buttonSmart.addEventListener('click', modifyToSmart, false);

function modifyToFull() {
  $('#intro').css('display', 'none');
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