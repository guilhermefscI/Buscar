<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="../navbar/navbar.css">
</head>

<body>
    <header>
        <nav class="geral" style="height: 100px;">
            <a href="" class="logo"> <img src="../img/Logo_nome.png" alt=""></a>
            <ul class="opcoes">
                <div id="divBusca">

                    <label for="txtBusca">
                        <img src="../img/search3.png" alt="Buscar..." />
                        <input type="text" id="txtBusca" placeholder="Pesquisar..." />
                    </label>
                    <div class="searchResults">
                        <a href="../Página do Onibus/4600/page.html" id="4600" class="searchItem">
                            Linha: 4600 <br>
                            Origem:N.S. Fátima - Sabará <br>
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
        </nav>
        <a href="https://www.iubenda.com/privacy-policy/17080766/cookie-policy"
            class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Política de Cookies ">
            Política de Cookies
        </a>


        <div class="info">
            <h1>Bem vindo ao site Buscar</h1>
            <h2>Pelos bairros e avenidas, sem se atrasar</h2>
            <h3>Ônibus recentes</h3>
            <div id="onibus">
                <div class="onibus-grid" style="display: grid;grid-template-columns: repeat(2, 1fr);gap: 40px 120px">
                <?php
                    $host = "localhost";
                    $dbname = "projetec";
                    $username = "root"; 
                    $password = "projetec"; 

                    $conn = new mysqli($host, $username, $password, $dbname);
                    $query = "SELECT linha, Origem, Destino, preço FROM onibus";
                    $result = $conn->query($query);

                    if ($result && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $precoFormatado = number_format($row['preço'], 2, ',', '.');

                            echo '<a href="../Página do onibus/' . htmlspecialchars($row['linha']) . '/page.html" style="border-radius:7px;height: 155px;width: 600px;background-color: #0054a3;color: #fff">';
                            echo <<<HTML
                            <div style="display: flex; justify-content:space-between;align-items: center;box-sizing: border-box;font-color: #000000;height: 100%; gap: 30px; padding:0 30px;">
                                <div>
                                    <img src="../img/icone_Onibus.png" alt="Onibus" style="height:120px;">
                                </div>
                                <div style="flex-grow:3;">
                                    <h4 style="font-size: 40px">Linha: {$row['linha']}</h4>
                                    <p><strong>Origem:</strong> {$row['Origem']}</p>
                                    <p><strong>Destino:</strong> {$row['Destino']}</p>
                                    <p><strong>Preço:</strong> R$ {$precoFormatado}</p>
                                </div>
                            </div>
                            HTML;
                            echo '</a>';
                        }
                    }

                    $conn->close();
                ?>
                </div>
            </div>
        </div>
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
    </script>
    <script src="Home.js"></script>
    <script src="../navbar/navbar.js"></script>
</body>

</html>