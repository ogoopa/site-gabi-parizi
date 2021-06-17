<?php

if (isset($_POST['email']) && !empty($_POST['email']))

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to = "gusparizi@gmail.com";
$subject = "Contato - Programador Br";
$body = "Nome: ".$nome. "\n".
        "Email: ".$email. "\n".
        "Message: ".$mensagem. "\n";
$header = "From:gusparizi@gmail.com"."\r\n"
            ."Reply-To:".$email."\r\n"
            ."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");
}else{
    echo("O Email não pôde ser enviado.");
}

?>
