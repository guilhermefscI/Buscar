<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav class="geral" style="height: 100px;">
        <a href="../Home/home.php" class="logo"> <img src="../img/Logo_nome.png" alt="home"></a>
        <ul class="opcoes">
            <div id="divBusca">

                <label for="txtBusca">
                    <img src="../img/search3.png" alt="Buscar..." />
                    <input type="text" id="txtBusca" placeholder="Pesquisar..." />
                </label>
                <div class="searchResults">
                    <a href="../Página do Onibus/4600/page.php" id="4600" class="searchItem">
                        Linha: 4600 <br>
                        Origem:N.S. Fátima - Sabará <br>
                        Destino: B. Horizonte <br>
                        Preço: R$7,30 <br>
                        Empresa: Ótimo
                    </a>
                    <a href="../Página do Onibus/4665/page.php" id="4665" class="searchItem">
                        Linha: 4665 <br>
                        Origem: Gen. Carneiro <br>
                        Destino: B. Horizonte <br>
                        Preço: R$7,25 <br>
                        Empresa: Ótimo
                    </a>
                    <a href="../Página do Onibus/4810/page.php" id="4810" class="searchItem">
                        Linha: 4810 <br>
                        Origem: Caeté <br>
                        Destino: Term. São Gabriel - B. Horizonte <br>
                        Preço: R$14,30 <br>
                        Empresa: Ótimo
                    </a>
                    <a href="../Página do Onibus/4988/page.php" id="4988" class="searchItem">
                        Linha: 4988 <br>
                        Origem: Siderúrgica - Sabará <br>
                        Destino: B. Horizonte <br>
                        Preço: R$7,60 <br>
                        Empresa: Ótimo
                    </a>
                </div>
            </div>
            <li class="item"><a href="../Contato/Contato.php" class="link">Contatos</a></li>
            <div class="dropdown">
                <button class="dropbtn">Sobre
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <div style="background-color: white; border-radius:10px; padding: 1px;">
                        <a href="../Sobre/Sobre.php">Sobre</a>
                        <a href="../TermoDeUso/Termo.php">Termos de uso</a>
                        <a href="../Duvida/Duvidas.php">Central de ajuda</a>
                    </div>
                </div>
            </div>
            <li class="item"><a href="../Perfil/Perfil.php" class="link">Perfil</a></li>
        </ul>
    </nav>
</body>

</html>