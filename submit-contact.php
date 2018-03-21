<?php

//IMPLEMENTAR
session_start();
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

require_once("PHPMailer.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "php.store.elias@gmail.com";
$mail->Password = "~~~~~~";

$mail->setFrom("php.store.elias@gmail.com", "Cliente loja php");
$mail->addAddress("php.store.elias@gmail.com");
$mail->msgHTML("
    <html>
        De: {$name} <br/>
        Email: {$email} <br/>
        Mensagem: {$message} 
    </html>
");
$mail->AltBody = "
    De: {$name}\n
    Email: {$email}\n
    Mensagem: {$mensagem}
";

if($mail->send()) {
    $_SESSION["success"] = "Mensagem enviada com sucesso!";
    header("Location: index.php");
}else {
    $_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
    header("Location: contact.php");
}
die();