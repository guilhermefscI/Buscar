<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Página de Cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
</head>

<body class="background">
    <div class="image"><img src="../img/Logo.png" alt=""></div>
    <div class="box">
        <div class="box-text">Cadastro</div>
        <form method="post" action="/ProjetecT/BackEnd/cadastro_BD.php">
            <div class="box-elements">
                <input type="text" value="" name="nome" placeholder="Nome" required>
                <input type="email" value="" name="email" placeholder="Email" required>
                <input type="password" value="" name="senha" placeholder="Senha" required>
                <input type="date" min="1945-01-01" max="2026-01-01" value="" name="dtnasc" required>
                <input type="text" name="telefone" onkeyup="formatarTel(this)" maxlength="11" placeholder="Telefone" required>
            </div>
            <div class="cadastro">
                <button type="submit" value="CADASTRAR">Cadastrar</button>
            </div>
        </form>
        <div class="log">
            <p>Já possui um cadastro? Clique em <a href="../Login/Login.php">ENTRAR</a></p>
        </div>
    </div>
    </div>

<script>
    function formatarTel(input){
        var telefone = input.value.replace(/\D/g, '');          //Vai remover tudo que não seja número
        telefone = telefone.replace(/(\d{2})(\d{5})(\d{4})/, '($1)$2-$3');   //Insere a formatação, parenteses, espaços e etc
        input.value = telefone;     //Vai atualizar os dados com a formatação
    }
</script>

    <div class="pl">
        <a href="https://www.iubenda.com/privacy-policy/17080766/cookie-policy"
            class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Política de Cookies ">Política
            de Cookies</a>
        <script
            type="text/javascript">(function (w, d) { var loader = function () { var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s, tag); }; if (w.addEventListener) { w.addEventListener("load", loader, false); } else if (w.attachEvent) { w.attachEvent("onload", loader); } else { w.onload = loader; } })(window, document);</script>
    </div>
</body>

</html>