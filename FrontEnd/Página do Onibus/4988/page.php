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
            <div style="cursor:pointer;"
                onclick="window.open('../../chat/index.php', 'newwin', 'height=500px,width=920px,')"><img
                    src="../../img/chat_Logo.png" alt="" class="image"></div>
            <div class="info">
                <h1> 4988 - Sabará </h1>
                <h2>
                    Siderúrgica <br>
                    Belo Horizonte
                    <hr>
                </h2>
            </div>
        </div>

        <div class="quadro">
            <h1 class="titulo">Quadro de Horários</h1>

            <h2 class="subtitulo">4988 - Dia útil</h2>
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
                        <td> 10 </td>
                        <td> </td>
                        <td> </td>
                        <td> 30 </td>
                        <td> 10 </td>
                        <td> 00 </td>
                        <td> 00 </td>
                        <td> 02 </td>
                        <td> 01 </td>
                        <td> 06 </td>
                        <td> 00 </td>
                        <td> 00 </td>
                        <td> 04 </td>
                        <td> 04 </td>
                        <td> 04 </td>
                        <td> 04 </td>
                        <td> 00 </td>
                        <td> 00 </td>
                        <td> 02 </td>
                        <td> 02 </td>
                        <td> 00 </td>
                        <td> 00 </td>
                        <td> 00 </td>
                        <td> 10 </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> 30 </td>
                        <td> 06 </td>
                        <td> 05 </td>
                        <td> 08 </td>
                        <td> 11 </td>
                        <td> 17 </td>
                        <td> 10 </td>
                        <td> 11 </td>
                        <td> 14 </td>
                        <td> 14 </td>
                        <td> 14 </td>
                        <td> 14 </td>
                        <td> 06 </td>
                        <td> 05 </td>
                        <td> 10 </td>
                        <td> 12 </td>
                        <td> 15 </td>
                        <td> 15 </td>
                        <td> 20 </td>
                        <td> 40 </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> 50 </td>
                        <td> 12 </td>
                        <td> 10 </td>
                        <td> 14 </td>
                        <td> 22 </td>
                        <td> 28 </td>
                        <td> 20 </td>
                        <td> 22 </td>
                        <td> 24 </td>
                        <td> 24 </td>
                        <td> 24 </td>
                        <td> 24 </td>
                        <td> 12 </td>
                        <td> 10 </td>
                        <td> 18 </td>
                        <td> 23 </td>
                        <td> 30 </td>
                        <td> 30 </td>
                        <td> 40 </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> 18 </td>
                        <td> 15 </td>
                        <td> 19 </td>
                        <td> 33 </td>
                        <td> 39 </td>
                        <td> 30 </td>
                        <td> 33 </td>
                        <td> 34 </td>
                        <td> 34 </td>
                        <td> 34 </td>
                        <td> 34 </td>
                        <td> 18 </td>
                        <td> 15 </td>
                        <td> 26 </td>
                        <td> 33 </td>
                        <td> 45 </td>
                        <td> 45 </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> 24 </td>
                        <td> 20 </td>
                        <td> 25 </td>
                        <td> 44 </td>
                        <td> 50 </td>
                        <td> 40 </td>
                        <td> 44 </td>
                        <td> 44 </td>
                        <td> 44 </td>
                        <td> 44 </td>
                        <td> 44 </td>
                        <td> 24 </td>
                        <td> 20 </td>
                        <td> 34 </td>
                        <td> 45 </td>
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
                        <td> 30 </td>
                        <td> 25 </td>
                        <td> 32 </td>
                        <td> 55 </td>
                        <td> </td>
                        <td> 50 </td>
                        <td> 54 </td>
                        <td> 54 </td>
                        <td> 54 </td>
                        <td> 54 </td>
                        <td> 54 </td>
                        <td> 30 </td>
                        <td> 25 </td>
                        <td> 42 </td>
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
                        <td> 35 </td>
                        <td> 30 </td>
                        <td> 39 </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> 35 </td>
                        <td> 30 </td>
                        <td> 52</td>
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
                        <td> 40 </td>
                        <td> 35 </td>
                        <td> 46 </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> 40 </td>
                        <td> 35 </td>
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
                        <td> 45 </td>
                        <td> 40 </td>
                        <td> 53 </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> 45 </td>
                        <td> 40 </td>
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
                        <td> 50 </td>
                        <td> 45 </td>
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
                        <td> 45 </td>
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
                        <td> 55 </td>
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
                        <td> 55 </td>
                        <td> 52 </td>
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
                        <td> 55 </td>
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
                        <td> 57 </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>

            <h2 class="subtitulo">4988 - Sábado</h2>
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
                        <td> 10 </td>
                        <td> </td>
                        <td> </td>
                        <td> 30 </td>
                        <td> 20 </td>
                        <td> 00 </td>
                        <td> 06 </td>
                        <td> 03 </td>
                        <td> 08 </td>
                        <td> 05</td>
                        <td> 05 </td>
                        <td> 01 </td>
                        <td> 06 </td>
                        <td> 11 </td>
                        <td> 03 </td>
                        <td> 08 </td>
                        <td> 05 </td>
                        <td> 12 </td>
                        <td> 04 </td>
                        <td> 09 </td>
                        <td> 15 </td>
                        <td> 00 </td>
                        <td> 07 </td>
                        <td> 15 </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> 50 </td>
                        <td> 11 </td>
                        <td> 17 </td>
                        <td> 11 </td>
                        <td> 20 </td>
                        <td> 20 </td>
                        <td> 20 </td>
                        <td> 14 </td>
                        <td> 19 </td>
                        <td> 24 </td>
                        <td> 16 </td>
                        <td> 21 </td>
                        <td> 20 </td>
                        <td> 25 </td>
                        <td> 17 </td>
                        <td> 23 </td>
                        <td> 35 </td>
                        <td> 23 </td>
                        <td> 37 </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> 22 </td>
                        <td> 28 </td>
                        <td> 20 </td>
                        <td> 35 </td>
                        <td> 35 </td>
                        <td> 35 </td>
                        <td> 27 </td>
                        <td> 32 </td>
                        <td> 37 </td>
                        <td> 29 </td>
                        <td> 35 </td>
                        <td> 33 </td>
                        <td> 38 </td>
                        <td> 30 </td>
                        <td> 40 </td>
                        <td> </td>
                        <td> 46 </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> 33 </td>
                        <td> 39 </td>
                        <td> 32 </td>
                        <td> 50 </td>
                        <td> 50 </td>
                        <td> 48 </td>
                        <td> 40 </td>
                        <td> 45 </td>
                        <td> 50 </td>
                        <td> 42 </td>
                        <td> 50 </td>
                        <td> 46 </td>
                        <td> 51 </td>
                        <td> 43 </td>
                        <td> 55 </td>
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
                        <td> 44 </td>
                        <td> 47 </td>
                        <td> 44 </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> 53 </td>
                        <td> 58 </td>
                        <td> </td>
                        <td> 55 </td>
                        <td> </td>
                        <td> 59 </td>
                        <td> </td>
                        <td> 56 </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> 55 </td>
                        <td> 55 </td>
                        <td> 56 </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>

            <h2 class="subtitulo">4988 - Domingo/Feriado</h2>
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
                        <td> 10 </td>
                        <td> 40 </td>
                        <td> </td>
                        <td> 30 </td>
                        <td> 30 </td>
                        <td> 00 </td>
                        <td> 00 </td>
                        <td> 00 </td>
                        <td> 00 </td>
                        <td> 00 </td>
                        <td> 00 </td>
                        <td> 00 </td>
                        <td> 00 </td>
                        <td> 00 </td>
                        <td> 00 </td>
                        <td> 00 </td>
                        <td> 10 </td>
                        <td> 10 </td>
                        <td> 20 </td>
                        <td> 00 </td>
                        <td> 05 </td>
                        <td> 20 </td>
                        <td> 10 </td>
                        <td> 10 </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> 20 </td>
                        <td> 20 </td>
                        <td> 20 </td>
                        <td> 20 </td>
                        <td> 20 </td>
                        <td> 20 </td>
                        <td> 20 </td>
                        <td> 20 </td>
                        <td> 20 </td>
                        <td> 20 </td>
                        <td> 30 </td>
                        <td> 30 </td>
                        <td> 30 </td>
                        <td> 40 </td>
                        <td> 30 </td>
                        <td> 40 </td>
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
                        <td> 40 </td>
                        <td> 40 </td>
                        <td> 40 </td>
                        <td> 40 </td>
                        <td> 40 </td>
                        <td> 40 </td>
                        <td> 40 </td>
                        <td> 40 </td>
                        <td> 40 </td>
                        <td> 40 </td>
                        <td> 50 </td>
                        <td> 50 </td>
                        <td> 55 </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>

        </div>

        <h1 class="titulo">Itinerário</h1>
        <ul>
            <li class="lista">RUA DO GAIA (PC EM FRENTE AO NUMERO 81-A)</li>
            <li class="lista">RUA DA PONTE</li>
            <li class="lista">AV. PREFEITO VITOR FANTINI</li>
            <li class="lista">RUA MARIETA MACHADO</li>
            <li class="lista">AV. PREFEITO VITOR FANTINI</li>
            <li class="lista">RODOVIA MG-05</li>
            <li class="lista">AV. JOSE CANDIDO DA SILVEIRA</li>
            <li class="lista">AV. CRISTIANO MACHADO</li>
            <li class="lista">TUNEL</li>
            <li class="lista">VIADUTO LESTE</li>
            <li class="lista">RUA RIO DE JANEIRO</li>
            <li class="lista">RUA GUAICURUS</li>
            <li class="lista">RUA SAO PAULO</li>
            <li class="lista">RUA CAETES</li>
            <li class="lista">RUA ESPIRITO SANTO</li>
            <li class="lista">AV. DO CONTORNO</li>
            <li class="lista">VIADUTO LESTE</li>
            <li class="lista">TUNEL</li>
            <li class="lista">AV. CRISTIANO MACHADO</li>
            <li class="lista">AV. JOSE CANDIDO DA SILVEIRA</li>
            <li class="lista">MG-05</li>
            <li class="lista">AV. PREFEITO VITOR FANTINI</li>
            <li class="lista">RUA J. K.</li>
            <li class="lista">RUA DA PONTE</li>
            <li class="lista">RUA DO GAIA (PC EM FRENTE AO NUMERO 81-A).</li>
        </ul>
    </div>

    <script src="../../navbar/navbar.js"></script>
</body>

</html>