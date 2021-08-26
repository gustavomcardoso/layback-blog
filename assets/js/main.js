var $ = jQuery;


	$(document).on('click', '#open', function(e) {
		e.preventDefault();

		$('#s').show().animate({
			width: "45%",
			height: "99%",
			opacity: 1
		}, 400);
		$('#searchsubmit').show().animate({opacity:1}, 600,);
		$('#open').prop('id', 'close')
	});
	$(document).on('click', '#close', function(e) {
		e.preventDefault();

		$('#s').hide().animate({
			width: "0%",
			height: "0%",
			opacity: 0
		}, 400);
		$('#searchsubmit').hide().animate({opacity: 0}, 400);
		$('#close').prop('id', 'open')
	});

$( '.carousel-header' ).flickity({
	cellAlign: 'left',
	contain: true,
	prevNextButtons: false,
	pageDots: true,
	autoPlay: 4000,
	pauseAutoPlayOnHover: false,
	wrapAround: true
});

$( '.carousel-blog' ).flickity({
	cellAlign: 'left',
	contain: true,
	prevNextButtons: false,
	pageDots: true,
	freeScroll: true,
	groupCells: 3,
	autoPlay: true,
	wrapAround: true
});

$( '.nav-item' ).click( function() {
	$( '.effect-menu' ).addClass( 'off' );
	$( '.effect-menu' ).removeClass( 'on' );
	$( 'body' ).css( 'overflow', 'auto' );
	$( '.navbar-collapse' ).removeClass( 'show' );
	$( 'nav' ).removeClass( 'navbar_expand' );
	$( 'nav' ).removeClass( 'navbar_expand' );
	$( '.navbar-toggler' ).addClass( 'off' ).addClass( 'collapsed' ).removeClass( 'on' );
});

$( document ).ready( function() {
	if ( 992 < $( window ).width() ) {
		$(
			'#carousel-mobile-onebeer, #carousel-mobile-twobeer, #carousel-mobile-threebeer,#carousel-mobile-fourbeer,#carousel-mobile-fivebeer,#carousel-mobile-sixbeer,#carousel-mobile-lager'
		).flickity({
			cellAlign: 'left',
			contain: true,
			prevNextButtons: false,
			pageDots: true
		});
	} else {
		$( '#carousel-noticias' ).flickity({
			watchCSS: false,
			cellAlign: 'left',
			contain: true,
			prevNextButtons: true,
			pageDots: true
		});

		$( '#carousel-cards' ).flickity({
			cellAlign: 'left',
			contain: true,
			prevNextButtons: false,
			pageDots: true
		});
		$( '#carousel-parks' ).flickity({
			cellAlign: 'left',
			contain: true,
			prevNextButtons: false,
			pageDots: true
		});
	}

	$( document ).on( 'click', '.effect-menu .off', function( e ) {
		e.preventDefault();

		//QUANDO ABRE
		$( this ).removeClass( 'off' );
		$( this ).addClass( 'on' );
		$( 'body' ).css( 'overflow', 'hidden' );
		$( 'nav' ).addClass( 'navbar_expand' );
		$( '.menu-span' ).removeClass( 'd-inline-block' );
		$( '.menu-span' ).addClass( 'd-none' );
	});

	$( document ).on( 'click', '.effect-menu .on', function( e ) {
		e.preventDefault();

		$( this ).addClass( 'off' );
		$( this ).removeClass( 'on' );
		$( 'body' ).css( 'overflow', 'auto' );
		$( 'nav' ).removeClass( 'navbar_expand' );
		$( '.menu-span' ).addClass( 'd-inline-block' );
	});
});

$( window ).scroll( function() {
	const beginTop = 50;
	let scroll = $( window ).scrollTop();

	if ( scroll >= beginTop ) {
		$( '#nav' ).addClass( 'nav-shadow' );
		$( '#navblog' ).addClass( 'nav-white' );
	} else {
		$( '#nav' ).removeClass( 'nav-shadow' );
		$( '#navblog' ).removeClass( 'nav-white' );
	}
});

$( document ).ready( function() {
	$( '#formModal' ).validate({
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

	$( '#contato-form' ).validate({
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

$( 'a[href*="#"]' )
	.not( '[href="#"]' )
	.not( '[href="#0"]' )
	.click( function( event ) {
		if (
			location.pathname.replace( /^\//, '' ) ==
				this.pathname.replace( /^\//, '' ) &&
			location.hostname == this.hostname
		) {
			let target = $( this.hash );
			target = target.length ? target : $( '[name=' + this.hash.slice( 1 ) + ']' );
			if ( target.length ) {
				event.preventDefault();
				$( 'html, body' ).animate(
					{
						scrollTop: target.offset().top
					},
					500,
					function() {
						let $target = $( target );
						$target.focus();
						if ( $target.is( ':focus' ) ) {
							return false;
						} else {
							$target.attr( 'tabindex', '-1' );
							$target.focus();
						}
					}
				);
			}
		}
	});

const fullpage = document.getElementById( 'fullpage' );
const menu = document.getElementById( 'nav' );
const footer = document.getElementById( 'footer' );
const intro = document.getElementById( 'intro' );
const maiormenor = document.getElementById( 'maiormenor' );
const maiormenorContent = document.getElementById( 'content' );

maiormenorContent.innerHTML =
	'<h1 class="c-amarelo mb-5"> Você é maior de 18 anos? </h1> <a id="content-full"> <button type="button" class="btn btn-outline-primary bdc-amarelo c-amarelo bold upper">SIM</button> </a> <a id="content-smart"> <button type="button" class="btn btn-outline-primary bdc-amarelo c-amarelo bold upper mr-0">NÃO</button> </a>';

fullpage.style.display = 'none';
menu.style.display = 'none';
footer.style.display = 'none';

const buttonFull = document.getElementById( 'content-full' );
const buttonSmart = document.getElementById( 'content-smart' );

buttonFull.addEventListener( 'click', modifyToFull, false );
buttonSmart.addEventListener( 'click', modifyToSmart, false );

function modifyToFull() {
	intro.style.display = 'none';
	fullpage.style.display = 'block';
	menu.style.display = 'block';
	footer.style.display = 'block';
};

function modifyToSmart() {
	maiormenor.classList.add( 'menor' );
	maiormenorContent.innerHTML =
		'<h1 class="c-amarelo mb-3 upper text-center"> valeu pela sinceridade </h1> <p class="c-amarelo text-center"> Infelizmente voce ainda não pode acessar nosso site.</p>';
};


