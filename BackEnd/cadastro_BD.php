<?php
session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$dtnasc = $_POST['dtnasc'];
$telefone = $_POST['telefone'];

$con = mysqli_connect('localhost', "root", "projetec", "projetec");
$query = "INSERT INTO usuario (nome, email, senha, dataN, telefone) values ('$nome', '$email', '$senha', '$dtnasc', '$telefone')";

$sql = "SELECT email FROM usuario WHERE email = ?";
$stmt = mysqli_prepare($con, $sql);

if ($stmt) {

    mysqli_stmt_bind_param($stmt, 's', $email);

    mysqli_stmt_execute($stmt);

    $resultado = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($resultado) == 0) {
        $row = mysqli_fetch_assoc($resultado);

        $_SESSION["nome"] = $_POST["nome"];
        $_SESSION["senha"] = $_POST["senha"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["telefone"] = $_POST["telefone"];
        $_SESSION["dtnasc"] = $_POST["dtnasc"];

        mysqli_query($con, $query);

        header('Location: ../FrontEnd/Home/home.php');
    } else {
        echo "<script>alert('Email inserido já esta cadastrado');</script>";
        echo "<script>window.location.href = '../FrontEnd/cadastro/cadastro.php';</script>";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "<script>alert('Erro');</script>";
    echo "<script>window.location.href = '../FrontEnd/cadastro/cadastro.php';</script>";
}

mysqli_close($con);