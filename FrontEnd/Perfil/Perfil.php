<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="Perfil.css">
    <link rel="stylesheet" href="../navbar/navbar.css">
</head>

<body>

    <header>
        <nav class="geral" style="height: 100px;">
            <a href="../Home/home.php" class="logo"> <img src="../img/Logo_nome.png" alt=""></a>
            <ul class="opcoes">
                <div id="divBusca">

                    <label for="txtBusca">
                        <img src="../img/search3.png" alt="Buscar..." />
                        <input type="text" id="txtBusca" placeholder="Pesquisar..." />
                    </label>
                    <div class="searchResults">
                        <a href="../Página do Onibus/4600/page.html" id="4600" class="searchItem">
                            Linha: 4600 <br>
                            Origem:N.S. Fátima - Sabará
                            Destino: B. Horizonte <br>
                            Preço: R$7,30
                        </a>
                        <a href="../Página do Onibus/4665/page.html" id="4665" class="searchItem">
                            Linha: 4665 <br>
                            Origem: Gen. Carneiro <br>
                            Destino: B. Horizonte <br>
                            Preço: R$7,25
                        </a>
                        <a href="../Página do Onibus/4810/page.html" id="4810" class="searchItem">
                            Linha: 4810 <br>
                            Origem: Caeté <br>
                            Destino: Term. São Gabriel - B. Horizonte <br>
                            Preço: R$14,30
                        </a>
                        <a href="../Página do Onibus/4988/page.html" id="4988" class="searchItem">
                            Linha: 4988 <br>
                            Origem: Siderúrgica - Sabará <br>
                            Destino: B. Horizonte <br>
                            Preço: R$7,60
                        </a>
                    </div>
                </div>
                <li class="item"><a href="../Contato/Contato.php" class="link">Contatos</a></li>
                <div class="dropdown">
                    <button class="dropbtn">Sobre
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="../Sobre/Sobre.html">Sobre</a>
                        <a href="../Termo de uso/Termo.html">Termos de uso</a>
                        <a href="../Duvida/Duvidas.html">Central de ajuda</a>
                    </div>
                </div>
                <li class="item"><a href="../Perfil/Perfil.php" class="link">Perfil</a></li>
            </ul>
            <div class="icone">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
        <a href="https://www.iubenda.com/privacy-policy/17080766/cookie-policy"
            class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Política de Cookies ">Política de
            Cookies</a>

        <?php if (isset($_SESSION["nome"]) == "") {
            echo "<div id='linkCadastro' style='display:flex; justify-content:center;align-items: center; '>
                    <div style='color: black; background-color:white; padding:20px; margin:30px; font-size: 20px;'>Faça o cadastro clicando <a href='../cadastro/cadastro.php' style='color: black; text-decoration:underline;'>aqui</a> para conseguir acessar a pagina completa do seu perfil</div>
                    </div>";
        } else {
            echo '<div style="display:flex; justify-content:center;">
                    <div id="Perfil">
                        <div class="ft">
                            <div id="circulo"><img src="../img/perfil.png" style="height:190px;"></div>
                        </div>
                        <div class="dadosUser" id="dadosUser">

                            <h1> Dados Pessoais</h1>
                            <div class="Dados" id="dados">
                                Nome:
                                <div class="CaixaNome">';

            echo $_SESSION['nome'] .

                '</div><br>
                                
                                Email:
                                <div class="CaixaEmail">';

            echo $_SESSION['email'] .

                '</div><br>
                                Telefone:
                                <div class="CaixaTel">';

            echo $_SESSION['telefone'] .

                '</div><br>
                                Data de Nascimento:
                                <div class="CaixaNasc">';

            $dtNasc = $_SESSION['dtnasc'];
            $dtNasc = implode('-', array_reverse(explode('-', $dtNasc)));
            echo $dtNasc .

                '</div><br>
                            </div>
                        </div>
                        <div id="form_editar">
                        <h1>Editar Dados</h1>
            <form method="POST" action="editar.php">
                <label style="  font-size: 1.2rem;" for="nome">Nome:</label><br>
                <input class="CaixaNome"type="text" id="nome" name="nome" value=';
            echo htmlspecialchars($_SESSION["nome"]);
            echo ' required>
                <br><br>

                <label style="  font-size: 1.2rem;" for="email">Email:</label><br>
                <input class="CaixaEmail"type="email" id="email" name="email" value=';
            echo htmlspecialchars($_SESSION["email"]);
            echo ' required>
                <br><br>

                <label style="  font-size: 1.2rem;" for="telefone">Telefone:</label><br>
                <input class="CaixaTel"type="text" name="telefone" onkeyup="formatarTel(this)" maxlength="11" value=';
            echo htmlspecialchars($_SESSION["telefone"]);
            echo ' placeholder="(XX) XXXX-XXXX" required>
                <br><br>

                <label style="  font-size: 1.2rem;" for="data_nascimento">Data de Nascimento:</label><br>
                <input class="CaixaNasc"type="date" min="1945-01-01" max="2026-01-01" name="dtnasc" value=';
            echo htmlspecialchars($_SESSION["dtnasc"]);
            echo 'required>
                <br><br>

                <button type="submit" name="editar" style="border:none;cursor:pointer;color:white; border-radius: 10px; background-color:#539ad1; padding: 10px; margin-top: 20px; font-size: 25px; width:fit-content; display: flex; justify-self:center;"><b>Salvar Alterações?</b></button>
                <div style="display: flex; justify-self:center;color: white;border-radius: 10px;background-color: #539ad1;padding: 10px;margin: 20px;font-size: 25px;font-weight: bold;width: fit-content;cursor: pointer;"onclick="cancelar()">Voltar</div>
            </form>
        </div>
                        <div id="opcoes">
                                <div onclick="showForm()" id="editarConta" style="cursor:pointer;color:white; border-radius: 10px; background-color:#539ad1; padding: 10px; margin-top: 20px; font-size: 25px;"><b>Editar</b></div>
                                <div onclick="confirma()" id="confirmacao" style="cursor:pointer;color:white; border-radius: 10px; background-color:#539ad1; padding: 10px; margin-top: 20px; font-size: 25px;"><b>Sair</b></div>
                                
                        </div>
                        <div id="apagarConta">
                            <div id="deletConfirmacao" onclick="deletaConta()"><b>Apagar conta</b></div>
                        </div>
                        <div class="cancelar" id="cancelar" onclick="cancelar()"><b>Não</b></div>
                    </div>';
        }
        ?>

    </header>

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


        function formatarTel(input) {
            var telefone = input.value.replace(/\D/g, ''); //Vai remover tudo que não seja número
            telefone = telefone.replace(/(\d{2})(\d{5})(\d{4})/, '($1)$2-$3'); //Insere a formatação, parenteses, espaços e etc
            input.value = telefone; //Vai atualizar os dados com a formatação
        }
    </script>
    <script src="Perfil.js"></script>
    <script src="../navbar/navbar.js"></script>
</body>

</html>