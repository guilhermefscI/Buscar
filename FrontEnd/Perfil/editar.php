<?php
session_start();
$con = mysqli_connect("localhost", "root", "projetec", "projetec");

if (!$con) {
    die("Erro ao conectar ao banco de dados.");
}

$emailAntigo = $_SESSION["email"];

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$dtnasc = $_POST['dtnasc'];

$upd = "UPDATE usuario SET nome = '$nome' , email = '$email' , telefone = '$telefone' , dataN = '$dtnasc' WHERE email like '$emailAntigo'";

$select = "SELECT email FROM usuario WHERE email like '$email'";
$querySelect = mysqli_query($con, $select);
$resultSelect = mysqli_fetch_assoc($querySelect);

if (mysqli_num_rows($querySelect) == 0 ) {
    if ($dtnasc != '') {
        if (mysqli_query($con, $upd)) {
            $_SESSION["email"] = $email;
            $_SESSION["nome"] = $nome;
            $_SESSION["dtnasc"] = $dtnasc;
            $_SESSION["telefone"] = $telefone;

            echo "<script>window.location.href = 'http://localhost/ProjetecT/FrontEnd/Perfil/perfil.php';</script>";
        } else {
            echo "<script>alert('Não foi possível editar os dados\\nTente Novamente');</script>";
            echo "<script>window.location.href = 'http://localhost/ProjetecT/FrontEnd/Perfil/perfil.php';</script>";
        }
    } else {
        echo "<script>alert('Insira uma data de nascimento válida\\nTente Novamente');</script>";
        echo "<script>window.location.href = 'http://localhost/ProjetecT/FrontEnd/Perfil/perfil.php';</script>";
    }
} else {
    echo "<script>alert('Email inserido já está em uso\\nTente Novamente');</script>";
    echo "<script>window.location.href = 'http://localhost/ProjetecT/FrontEnd/Perfil/perfil.php';</script>";
}
