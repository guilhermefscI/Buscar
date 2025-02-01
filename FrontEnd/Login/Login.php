<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Página de Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
</head>

<body class="background">
    <div class="image"><img src="../img/Logo.png" alt=""></div>
    <div class="box">
        <div class="box-text">Acesse sua conta</div>
        <div class="box-elements">
            <form method="post" action="../../BackEnd/login_BD.php">
                <input type="email" value="" name="email" placeholder="Email" required>
                <input type="password" value="" name="senha" placeholder="Senha" required>
                <div class="cadastro">
                    <button type="submit" value="ENTRAR">Entrar</button>
                </div>
            </form>
        </div>
        <div class="log">
            <p>Ainda não possui um cadastro? Clique em <a href="../cadastro/cadastro.php">CADASTRAR</a>
            </p>
        </div>
    </div>
    </div>

    <div class="pl">
        <a href="https://www.iubenda.com/privacy-policy/17080766/cookie-policy"
            class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Política de Cookies ">Política
            de Cookies</a>
        <script
            type="text/javascript">(function (w, d) { var loader = function () { var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s, tag); }; if (w.addEventListener) { w.addEventListener("load", loader, false); } else if (w.attachEvent) { w.attachEvent("onload", loader); } else { w.onload = loader; } })(window, document);</script>
    </div>
</body>

</html>