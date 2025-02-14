<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$con = mysqli_connect('localhost', 'root', 'projetec', 'projetec');

$pegarEmail = "SELECT email FROM usuario WHERE email = ?";
$pegarSenha = "SELECT senha FROM usuario WHERE senha = ?";
$pegarInfo = "SELECT email, nome, senha, dataN, telefone FROM usuario WHERE email = ? AND senha = ?";
$stmtEmail = mysqli_prepare($con, $pegarEmail);
$stmtInfo = mysqli_prepare($con, $pegarInfo);
$stmtSenha = mysqli_prepare($con, $pegarSenha);

mysqli_stmt_bind_param($stmtEmail, 's', $email);

mysqli_stmt_execute($stmtEmail);

$resultEmail = mysqli_stmt_get_result($stmtEmail);

$sqlEmail = mysqli_fetch_assoc($resultEmail);

if (mysqli_num_rows($resultEmail) > 0) {

    mysqli_stmt_bind_param($stmtSenha, 's', $senha);

    mysqli_stmt_execute($stmtSenha);

    $resultSenha = mysqli_stmt_get_result($stmtSenha);

    $sqlSenha = mysqli_fetch_assoc($resultSenha);

    if (mysqli_num_rows($resultSenha) > 0) {

        mysqli_stmt_bind_param($stmtInfo, 'ss', $email, $senha);

        mysqli_stmt_execute($stmtInfo);

        $resultInfo = mysqli_stmt_get_result($stmtInfo);

        $sqlInfo = mysqli_fetch_assoc($resultInfo);

        
        $_SESSION["email"] = $sqlInfo["email"];
        $_SESSION['nome'] = $sqlInfo['nome'];
        $_SESSION["senha"] = $sqlInfo["senha"];
        $_SESSION["dtnasc"] = $sqlInfo["dataN"];
        $_SESSION["telefone"] = $sqlInfo["telefone"];
        
        echo "<script>window.location.href = '../FrontEnd/home/home.php';</script>";


    } else {
        echo "<script>alert('Senha incorreta \\nTente Novamente');</script>";
        echo "<script>window.location.href = '../FrontEnd/Login/Login.php';</script>";
    }
} else {
    echo "<script>alert('Email inserido não foi encontrado\\nTente Novamente');</script>";
    echo "<script>window.location.href = '../FrontEnd/Login/Login.php';</script>";
}
