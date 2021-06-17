<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, "gusparizi@gmail.com");
        $subject = "Confirmar email";
        $to = new SendGrid\Email(null, "gusparizi@gmail.com");
        $content = new SendGrid\Content("text/html", "Olá, <br><br>Nova mensagem de contato<br><br>Nome: $nome<br>Email: $email <br>Mensagem: $mensagem");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey); 

        try {
            $response = $sg->send($mail);
            echo "<script language='javascript'> window.location = 'index-test-mail.html'</script>";

        } catch (\Exception $e) {
            echo 'Caught exception: '. $e->getMessage(). "\n";
        }

        ?>
    </body>
</html>
