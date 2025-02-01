<?php
session_start();
$nome = htmlspecialchars($_POST['name']);
if (isset($_SESSION['email']) != '') {
    $email = filter_var($_SESSION['email'], FILTER_SANITIZE_EMAIL);
} else {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
}
$mensagem = htmlspecialchars($_POST['message']);

$corpo = "Nome: $nome\n";
$corpo .= "E-mail: $email\n";
$corpo .= "Mensagem:\n$mensagem\n";

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'buscarprojetec@gmail.com';
    $mail->Password = 'olcl retv bxeq jmcm'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('buscarprojetec@gmail.com', $nome); 
    $mail->addAddress('buscarprojetec@gmail.com'); 
    $mail->Subject = 'Site Buscar';
    $mail->Body = $corpo;
    $mail->isHTML(false);+

    $mail->send();

    echo "<script>alert('Email enviado com Sucesso!');</script>";
    echo "<script>window.location.href = 'http://localhost/ProjetecT/FrontEnd/Contato/Contato.php';</script>";
} catch (Exception $e) {
    echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
}
