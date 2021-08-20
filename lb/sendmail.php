<?php
require "phpmailer/PHPMailerAutoload.php";
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host       = "ssl://smtp.googlemail.com";
$mail->SMTPAuth   = true;
$mail->Username   = "desenvolvimento@martinluz.com.br";
$mail->Password   = "client-martinluz";
$mail->SMTPSecure = "tls";
$mail->Port       = 465;
$mail->CharSet    = "UTF-8";

$mail->AddAddress("layback@laybackbeer.com.br");
$mail->AddAddress("contato@laybackbeer.com.br");


$mail->isHTML(true);


if(isset($_POST['telefone'])){
    $mail->Subject = "Formulário tenho interesse";
    $which_form    = "Formulário tenho interesse";
    $mail->FromName = "Formulário tenho interesse";
    $mail_Body  = '
        <b>Tenho interesse</b> <br>
        Nome: '.$_POST['nome'].' <br>
        Email: '.$_POST['email'].' <br>
        Telefone: '.$_POST['telefone'].' <br>
    '; 
}
else{
    $mail->Subject = "Formulário Contato";
    $which_form    = "Formulário Contato";
    $mail->FromName = "Formulário Contato";
    $mail_Body  = '
    <b>Contato</b> <br>
    Nome: '.$_POST['nome'].' <br>
    Email: '.$_POST['email'].' <br>
    Assunto: '.$_POST['assunto'].' <br>
    Mensagem '.$_POST['mensagem'].' <br>
    '; 
}

//CORPO DO EMAIL

$mail->Body = $mail_Body;
//ENVIANDO O MEIAL
function sendErs($mail)
{
    try {
        $mail->send();
        //MENSAGEM ENVIADA
        return true;
    }
    catch (Exception $e) {
        //MENSAGEM NAO ENVIADA
        return false;
    }
}
sendErs($mail);