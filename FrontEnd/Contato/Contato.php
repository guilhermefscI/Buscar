<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar - Informações de Ônibus</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="../navbar/navbar.css">
</head>

<body>
    <?php 
        include_once('../navbar/navbar.php');
        session_start();
    ?>
    <a href="https://www.iubenda.com/privacy-policy/17080766/cookie-policy" class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Política de Cookies ">
        Política de Cookies
    </a>
    <main class="container">
        <section class="contact-form">
            <h2>Entre em Contato</h2>
            <p>Gostaríamos de ouvir você! Deixe suas dúvidas, sugestões ou mensagens para que possamos ajudar.</p>
            <form action="EnviarEmail.php" method="post">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" placeholder="Seu nome" required>
                </div>
                <?php

                    if (isset($_SESSION['email']) == '') {
                        echo "<div class='form-group'><label for='email'>E-mail:</label><input type='email' id='email' name='email' placeholder='Seu e-mail' required></div>";
                    }
                ?>
                <div class="form-group">
                    <label for="message">Mensagem:</label>
                    <textarea id="message" name="message" rows="5" placeholder="Sua mensagem" required></textarea>
                </div>
                <button type="submit">Enviar Mensagem</button>
            </form>

        </section>
    </main>
    <script
        type="text/javascript">
        (function(w, d) {
            var loader = function() {
                var s = d.createElement("script"),
                    tag = d.getElementsByTagName("script")[0];
                s.src = "https://cdn.iubenda.com/iubenda.js";
                tag.parentNode.insertBefore(s, tag);
            };
            if (w.addEventListener) {
                w.addEventListener("load", loader, false);
            } else if (w.attachEvent) {
                w.attachEvent("onload", loader);
            } else {
                w.onload = loader;
            }
        })(window, document);
    </script>
    <script src="../navbar/navbar.js"></script>
</body>

</html>