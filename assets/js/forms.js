var $ = jQuery;

$(document).ready(function() {

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
                minlength: 10,
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
                minlength: 'Ops, insira um telefone válido'
            },
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

    $('#formModal').submit(function(e) {
        // console.log(modalForm);
        e.preventDefault();
        if (modalForm.errorList.length <= 0) {
            var serializeForm = $('#formModal').serialize();
            //  console.log(serializeForm)
            $.ajax({
                type: "POST",
                url: "sendmail.php",
                data: serializeForm,
                success: function(response) {

                    $('.sucesso-modal').fadeIn(300);
                    $('.form-inputs').fadeOut();

                }
            });
        }


    });
    $('#contato-form').submit(function(e) {
        e.preventDefault();
        if (contatoForm.errorList.length <= 0) {
            var serializeForm = $('#contato-form').serialize();
            $('#contato-form .bgc-amarelo').css('opacity', '0.3').attr('disabled', true);
            // console.log(serializeForm)
            $.ajax({
                type: "POST",
                url: "sendmail.php",
                data: serializeForm,
                success: function(response) {
                    $('#contato-form .form-control').val('');
                    $('#contato-form .bgc-amarelo').html('ENVIADO!');
                    $('#contato-form .sucessContato').html('Formulário enviado com sucesso!');
                    setTimeout(function() {
                        $('#contato-form .bgc-amarelo').css('opacity', '1').attr('disabled', false).html('ENVIAR');
                    }, 2000);
                },
                error: function(response) {
                    $('#contato-form .bgc-amarelo').html('TENTE NOVAMENTE');
                    setTimeout(function() {
                        $('#contato-form .bgc-amarelo').css('opacity', '1').attr('disabled', false).html('ENVIAR');
                    }, 2000);

                }
            });
        }


    });
});