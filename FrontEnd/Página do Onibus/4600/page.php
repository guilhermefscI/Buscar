<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page.css">
    <title>Página do Onibus</title>
    <link rel="stylesheet" href="../../navbar/navbar.css">
</head>

<body>

    <nav class="geral" style="height: 100px;">
        <a href="../../Home/home.php" class="logo"> <img src="../../img/Logo_nome.png" alt="home"></a>
        <ul class="opcoes">
            <div id="divBusca">

                <label for="txtBusca">
                    <img src="search3.png" alt="Buscar..." />
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
            <li class="item"><a href="../../Contato/Contato.php" class="link">Contatos</a></li>
            <div class="dropdown">
                <button class="dropbtn">Sobre
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../../Sobre/Sobre.php">Sobre</a>
                    <a href="../../TermoDeUso/Termo.php">Termos de uso</a>
                    <a href="../../Duvida/Duvidas.php">Central de ajuda</a>
                </div>
            </div>
            <li class="item"><a href="../Perfil/Perfil.php" class="link">Perfil</a></li>
        </ul>
    </nav>
    <a href="https://www.iubenda.com/privacy-policy/17080766/cookie-policy"
        class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Política de Cookies ">Política de
        Cookies</a>
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


    <div class="box">
        <div class="bus-desc">
            <div style="cursor:pointer;" onclick="window.open('../../chat/index.php', 'newwin', 'height=500px,width=920px,')"><img src="../../img/chat_Logo.png" alt="" class="image"></div>
            <div class="info">
                <h1> 4600 - Sabará </h1>
                <h2>
                    N.S de Fátima <br>
                    Belo Horizonte
                    <hr>
                </h2>
            </div>
        </div>

        <div class="quadro">
            <h1 class="titulo">Quadro de Horários</h1>

            <h2 class="subtitulo">4600 - Dia útil</h2>
            <table class="quadro_horario">
                <tbody>
                    <tr class="primeiro_tr">
                        <td><b>00</b></td>
                        <td><b>01</b></td>
                        <td><b>02</b></td>
                        <td><b>03</b></td>
                        <td><b>04</b></td>
                        <td><b>05</b></td>
                        <td><b>06</b></td>
                        <td><b>07</b></td>
                        <td><b>08</b></td>
                        <td><b>09</b></td>
                        <td><b>10</b></td>
                        <td><b>11</b></td>
                        <td><b>12</b></td>
                        <td><b>13</b></td>
                        <td><b>14</b></td>
                        <td><b>15</b></td>
                        <td><b>16</b></td>
                        <td><b>17</b></td>
                        <td><b>18</b></td>
                        <td><b>19</b></td>
                        <td><b>20</b></td>
                        <td><b>21</b></td>
                        <td><b>22</b></td>
                        <td><b>23</b></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>33</td>
                        <td>05</td>
                        <td>01</td>
                        <td>01</td>
                        <td>25</td>
                        <td>36</td>
                        <td>02</td>
                        <td>00</td>
                        <td>10</td>
                        <td>20</td>
                        <td>00</td>
                        <td>03</td>
                        <td>02</td>
                        <td>01</td>
                        <td>21</td>
                        <td>15</td>
                        <td>37</td>
                        <td>10</td>
                        <td>35</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>13</td>
                        <td>10</td>
                        <td>09</td>
                        <td>34</td>
                        <td> </td>
                        <td>40</td>
                        <td> </td>
                        <td>30</td>
                        <td> </td>
                        <td>21</td>
                        <td>20</td>
                        <td>15</td>
                        <td>25</td>
                        <td>40</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>25</td>
                        <td>24</td>
                        <td>15</td>
                        <td>48</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>40</td>
                        <td>40</td>
                        <td>36</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>30</td>
                        <td>30</td>
                        <td>32</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>40</td>
                        <td>45</td>
                        <td>55</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>35</td>
                        <td>38</td>
                        <td>46</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>50</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>45</td>
                        <td>46</td>
                        <td>59</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>48</td>
                        <td>55</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>

            <h2 class="subtitulo">4600 - Sábado</h2>
            <table class="quadro_horario">
                <tbody>
                    <tr class="primeiro_tr">
                        <td><b>00</b></td>
                        <td><b>01</b></td>
                        <td><b>02</b></td>
                        <td><b>03</b></td>
                        <td><b>04</b></td>
                        <td><b>05</b></td>
                        <td><b>06</b></td>
                        <td><b>07</b></td>
                        <td><b>08</b></td>
                        <td><b>09</b></td>
                        <td><b>10</b></td>
                        <td><b>11</b></td>
                        <td><b>12</b></td>
                        <td><b>13</b></td>
                        <td><b>14</b></td>
                        <td><b>15</b></td>
                        <td><b>16</b></td>
                        <td><b>17</b></td>
                        <td><b>18</b></td>
                        <td><b>19</b></td>
                        <td><b>20</b></td>
                        <td><b>21</b></td>
                        <td><b>22</b></td>
                        <td><b>23</b></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>30</td>
                        <td>28</td>
                        <td>05</td>
                        <td>18</td>
                        <td>28</td>
                        <td>25</td>
                        <td>50</td>
                        <td>45</td>
                        <td>50</td>
                        <td> </td>
                        <td>05</td>
                        <td>02</td>
                        <td>05</td>
                        <td>00</td>
                        <td>05</td>
                        <td>04</td>
                        <td>29</td>
                        <td>50</td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>43</td>
                        <td>25</td>
                        <td>28</td>
                        <td>45</td>
                        <td>33</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>15</td>
                        <td> </td>
                        <td>15</td>
                        <td> </td>
                        <td>15</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>51</td>
                        <td>43</td>
                        <td>40</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>53</td>
                        <td>55</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>

            <h2 class="subtitulo">4600 - Domingo/Feriado</h2>
            <table class="quadro_horario">
                <tbody>
                    <tr class="primeiro_tr">
                        <td><b>00</b></td>
                        <td><b>01</b></td>
                        <td><b>02</b></td>
                        <td><b>03</b></td>
                        <td><b>04</b></td>
                        <td><b>05</b></td>
                        <td><b>06</b></td>
                        <td><b>07</b></td>
                        <td><b>08</b></td>
                        <td><b>09</b></td>
                        <td><b>10</b></td>
                        <td><b>11</b></td>
                        <td><b>12</b></td>
                        <td><b>13</b></td>
                        <td><b>14</b></td>
                        <td><b>15</b></td>
                        <td><b>16</b></td>
                        <td><b>17</b></td>
                        <td><b>18</b></td>
                        <td><b>19</b></td>
                        <td><b>20</b></td>
                        <td><b>21</b></td>
                        <td><b>22</b></td>
                        <td><b>23</b></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>00</td>
                        <td>30</td>
                        <td>00</td>
                        <td>18</td>
                        <td>00</td>
                        <td>20</td>
                        <td>00</td>
                        <td>35</td>
                        <td> </td>
                        <td>22</td>
                        <td>20</td>
                        <td>10</td>
                        <td>05</td>
                        <td>00</td>
                        <td>00</td>
                        <td>04</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h1 class="titulo">Itinerário</h1>
        <ul>
            <li class="lista">RUA CAMPINA VERDE (PC ESQUINA COM RUA PARACATU)</li>
            <li class="lista">RUA IBIÁ</li>
            <li class="lista">RUA CAMPO FLORIDO</li>
            <li class="lista">RUA MONTE CARMELO</li>
            <li class="lista">RUA SANTA LUZIA</li>
            <li class="lista">RUA MINAS NOVAS</li>
            <li class="lista">AV. JOÃO PINHEIRO</li>
            <li class="lista">RUA MINAS NOVAS</li>
            <li class="lista">RUA SANTO ANTÔNIO DO AMPARO</li>
            <li class="lista">RUA GRÃO MOGOL</li>
            <li class="lista">RUA PITANGUI</li>
            <li class="lista">RUA RAUL SOARES</li>
            <li class="lista">RUA CLÁUDIO</li>
            <li class="lista">RUA FRANCISCO SÁ</li>
            <li class="lista">RUA BORDA DA MATA</li>
            <li class="lista">ESTRADA DE ACESSO A RODOVIA BR-262</li>
            <li class="lista">RODOVIA MG-05</li>
            <li class="lista">AV. JOSÉ CÂNDIDO DA SILVEIRA</li>
            <li class="lista">RUA GUSTAVO DA SILVEIRA</li>
            <li class="lista">RUA CONSELHEIRO ROCHA</li>
            <li class="lista">AV. SILVIANO BRANDÃO</li>
            <li class="lista">RUA FLÁVIO DOS SANTOS</li>
            <li class="lista">RUA POUSO ALEGRE</li>
            <li class="lista">RUA IPIRANGA</li>
            <li class="lista">RUA FLORESTA</li>
            <li class="lista">AV. DO CONTORNO</li>
            <li class="lista">VIADUTO DA FLORESTA</li>
            <li class="lista">AV. DOS ANDRADAS</li>
            <li class="lista">RUA GUAICURUS</li>
            <li class="lista">PRAÇA RUI BARBOSA</li>
            <li class="lista">RUA DA BAHIA</li>
            <li class="lista">AV. AMAZONAS</li>
            <li class="lista">RUA TAMÓIOS</li>
            <li class="lista">RUA CURITIBA</li>
            <li class="lista">AV. AUGUSTO DE LIMA</li>
            <li class="lista">RUA GOIÁS</li>
            <li class="lista">RUA SERGIPE</li>
            <li class="lista">RUA DOS TIMBIRAS</li>
            <li class="lista">RUA PERNAMBUCO</li>
            <li class="lista">AV. ALFREDO BALENA</li>
            <li class="lista">AV. BERNARDO MONTEIRO</li>
            <li class="lista">AV FRANCISCO SALES</li>
            <li class="lista">AV DOS ANDRADAS</li>
            <li class="lista">RETORNO</li>
            <li class="lista">AV. DOS ANDRADAS</li>
            <li class="lista">AV. DO CONTORNO</li>
            <li class="lista">RUA RAUL MENDES</li>
            <li class="lista">RUA AZURITA</li>
            <li class="lista">AV. FLÁVIO DOS SANTOS</li>
            <li class="lista">AV. SILVIANO BRANDÃO</li>
            <li class="lista">RUA CONSELHEIRO ROCHA</li>
            <li class="lista">RUA GUSTAVO DA SILVEIRA</li>
            <li class="lista">RUA CONTAGEM</li>
            <li class="lista">AV. CONCEICAO DO PARÁ</li>
            <li class="lista">AV. JOSÉ CÂNDIDO DA SILVEIRA</li>
            <li class="lista">RODOVIA MG-05</li>
            <li class="lista">RODOVIA BR-262</li>
            <li class="lista">ESTRADA DE ACESSO A BORDA DA MATA</li>
            <li class="lista">RUA BORDA DA MATA</li>
            <li class="lista">RUA FRANCISCO SÁ</li>
            <li class="lista">RUA CLÁUDIO</li>
            <li class="lista">AV RAUL SOARES</li>
            <li class="lista">AV RAUL SOARES</li>
            <li class="lista">RUA GRÃO MOGOL </li>
            <li class="lista">RUA SANTO ANTONIO DO AMPARO</li>
            <li class="lista">RUA MINAS NOVAS</li>
            <li class="lista">AV. JOÃO PINHEIRO</li>
            <li class="lista">RUA SANTA LUZIAf</li>
            <li class="lista">RUA MONTE CARMELO</li>
            <li class="lista">RUA CAMPO FLORIDO</li>
            <li class="lista">RUA IBIÁ</li>
            <li class="lista">RUA CAMPINA VERDE (PC ESQUINA COM RUA PARACATU).</li>
        </ul>
    </div>

    <script src="../../navbar/navbar.js"></script>
</body>

</html>