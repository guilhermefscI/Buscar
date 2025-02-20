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
            <li class="item"><a href="../../Perfil/Perfil.php" class="link">Perfil</a></li>
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
            <div style="cursor:pointer;" onclick="window.open('../../chat/index.php', 'newwin', 'height=500px,width=920px,')"><img
                    src="../../img/chat_Logo.png" alt="" class="image"></div>
            <div class="info">
                <h1> 4810 - Caeté </h1>
                <h2>
                    Caeté <br>
                    Term. São Gabriel
                    <hr>
                </h2>
            </div>
        </div>

        <div class="quadro">
            <h1 class="titulo">Quadro de Horários</h1>

            <h2 class="subtitulo">4810 - Dia útil PC1</h2>
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
                        <td>00</td>
                        <td>40</td>
                        <td>20</td>
                        <td>40</td>
                        <td>10</td>
                        <td>40</td>
                        <td>40</td>
                        <td>10</td>
                        <td>40</td>
                        <td>40</td>
                        <td></td>
                        <td>40</td>
                        <td>20</td>
                        <td>00</td>
                        <td>20</td>
                        <td>20</td>
                        <td>20</td>
                        <td>30</td>
                        <td>30</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>40</td>
                        <td></td>
                        <td>40</td>
                        <td></td>
                        <td></td>
                        <td> </td>
                        <td></td>
                        <td> </td>
                        <td></td>
                        <td> </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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
                        <td>55</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>

            <h2 class="subtitulo">4810 - Dia útil PC2</h2>
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
                        <td> 30 </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> 05 </td>
                        <td> 40 </td>
                        <td> 30 </td>
                        <td> </td>
                        <td> 00 </td>
                        <td> </td>
                        <td> 00 </td>
                        <td> 00 </td>
                        <td> </td>
                        <td> 00 </td>
                        <td> 00 </td>
                        <td> 30 </td>
                        <td> 30 </td>
                        <td> 50 </td>
                        <td> 40 </td>
                        <td> 30 </td>
                        <td> 30 </td>
                        <td> </td>
                        <td> 00 </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> 50 </td>
                        <td> </td>
                        <td> 30 </td>
                        <td> </td>
                        <td> </td>
                        <td> 30 </td>
                        <td> </td>
                        <td> </td>
                        <td> 45 </td>
                        <td> </td>
                        <td> 50 </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>


            <h2 class="subtitulo">4810 - Sábado PC1</h2>
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
                        <td> 00 </td>
                        <td> 00 </td>
                        <td> 40 </td>
                        <td> </td>
                        <td> 20 </td>
                        <td> 50 </td>
                        <td> </td>
                        <td> 00 </td>
                        <td> 00 </td>
                        <td> 00 </td>
                        <td> 20 </td>
                        <td> 40 </td>
                        <td> 40 </td>
                        <td> </td>
                        <td> 40 </td>
                        <td> </td>
                        <td> 00 </td>
                        <td> </td>
                        <td> 30 </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> 40 </td>
                        <td> 40 </td>
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
                        <td> </td>
                    </tr>
                </tbody>
            </table>

            <h2 class="subtitulo">4810 - Sábado PC2</h2>
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
                        <td> 30 </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> 05 </td>
                        <td> 50 </td>
                        <td> 30 </td>
                        <td> </td>
                        <td> </td>
                        <td> 20 </td>
                        <td> 20 </td>
                        <td> 20 </td>
                        <td> 20 </td>
                        <td> 20 </td>
                        <td> 30 </td>
                        <td> 30 </td>
                        <td> 30 </td>
                        <td> </td>
                        <td> 00 </td>
                        <td> </td>
                        <td> 10 </td>
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
                        <td> </td>
                        <td> 50 </td>
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
                        <td> 50 </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>

            <h2 class="subtitulo">4810 - Domingo/Feriado PC1</h2>
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
                        <td> 40 </td>
                        <td> 40 </td>
                        <td> 40 </td>
                        <td> </td>
                        <td> </td>
                        <td> 40 </td>
                        <td> </td>
                        <td> 40 </td>
                        <td> </td>
                        <td> 40 </td>
                        <td> </td>
                        <td> 40 </td>
                        <td> 40 </td>
                        <td> 40 </td>
                        <td> 40 </td>
                        <td> </td>
                        <td> 00 </td>
                        <td> </td>
                        <td> 00 </td>
                        <td> 00 </td>
                    </tr>
                </tbody>
            </table>

            <h2 class="subtitulo">4810 - Domingo/Feriado PC2</h2>
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
                        <td> 00 </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> 50 </td>
                        <td> 50 </td>
                        <td> 50 </td>
                        <td> </td>
                        <td> </td>
                        <td> 40 </td>
                        <td> </td>
                        <td> 40 </td>
                        <td> </td>
                        <td> 40 </td>
                        <td> </td>
                        <td> 50 </td>
                        <td> 50 </td>
                        <td> 50 </td>
                        <td> 50 </td>
                        <td> </td>
                        <td> 10 </td>
                        <td> </td>
                        <td> 20 </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h1 class="titulo">Itinerário</h1>
        <h4>Legenda</h4>
        <h4> PC - Ponto de controle</h4>
        <br>
        <ul id="espaco">
            <h2>PC 1</h2>
            <li class="lista">TERMINAL RODOVIÁRIO DE CAETÉ (PC1)</li>
            <li class="lista">RUA PRESIDENTE GETÚLIO VARGAS</li>
            <li class="lista">PRAÇA DR. JOÃO PINHEIRO</li>
            <li class="lista">PRAÇA JOAQUIM FRANCO</li>
            <li class="lista">RUA JOSÉ COSTA FONSECA</li>
            <li class="lista">RUA RAUL FRANCO</li>
            <li class="lista">PRAÇA DR. IVES MATHIEU</li>
            <li class="lista">AV. DR. JOÃO PINHEIRO</li>
            <li class="lista">RODOVIA MG-435</li>
            <li class="lista">RODOVIA BR-381</li>
            <li class="lista">ANEL RODOVIÁRIO</li>
            <li class="lista">RUA SÃO GREGÓRIO</li>
            <li class="lista">AV. NOVECENTOS E VINTE E NOVE</li>
            <li class="lista">COMPLEXO VIÁRIO DA ESTAÇÃO SÃO GABRIEL</li>
            <li class="lista">ESTAÇÃO SÃO GABRIEL (PC2).</li>
        </ul>
        <br>

        <ul id="espaco">
            <h2>PC 2</h2>
            <li class="lista">ESTAÇÃO SÃO GABRIEL (PC2)</li>
            <li class="lista">COMPLEXO VIÁRIO DA ESTAÇÃO SÃO GABRIEL</li>
            <li class="lista">AV. NOVECENTOS E VINTE E NOVE</li>
            <li class="lista">RUA JACUÍ</li>
            <li class="lista">MARGINAL DO ANEL RODOVIÁRIO</li>
            <li class="lista">ANEL RODOVIÁRIO</li>
            <li class="lista">RODOVIA BR-381</li>
            <li class="lista">RODOVIA MG-435</li>
            <li class="lista">AV. DR. JOÃO PINHEIRO</li>
            <li class="lista">AV. CARLOS CRUZ</li>
            <li class="lista">RUA DO ROSÁRIO</li>
            <li class="lista">RUA BONFIM</li>
            <li class="lista">RUA PRESIDENTE GETÚLIO VARGAS</li>
            <li class="lista">TRAVESSA DA MATRIZ</li>
            <li class="lista">RUA GOVERNADOR VALADARES</li>
            <li class="lista">RUA DR. ISRAEL PINHEIRO</li>
            <li class="lista">TERMINAL RODOVIÁRIO DE CAETÉ (PC1).</li>
        </ul>
    </div>

    <script src="../../navbar/navbar.js"></script>
</body>

</html>