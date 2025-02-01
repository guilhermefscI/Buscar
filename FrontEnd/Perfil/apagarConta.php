<?php
session_start();

$con = mysqli_connect("localhost", "root", "projetec", "projetec");
$email = $_SESSION['email'];
$delete = "DELETE FROM usuario WHERE email LIKE '$email'";

mysqli_query($con, $delete);

header('Location: http://localhost/ProjetecT/FrontEnd/Perfil/sair.php');
