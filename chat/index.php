<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="chat.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>
    <?php
    session_start();

    ?>
    <section class="container">

        <?php if (empty($_SESSION['logado'])) {
            echo '
                <section class="login">
                    <div style=" font-size:25px;">É necessário estar cadastrado para acessar o chat</div>
                    <div style=" font-size:20px;">Clique <a target="_blank" href="../cadastro/cadastro.php" style="color:rgb(42, 42, 42); text-decoration:underline; font-size:20px;">aqui</a> para se cadastrar</div>
                    <div style="font-size:15px;">Caso já esteja cadastrado, basta recarregar a página</div>
                </section>
            ';
        } else {
            echo '
                
                <section class="login">
                    <h2><div style="font-size: 25px; text-decoration:underline;" > <b>Bem vindo ao chat do Buscar</b></div> <br> Este é um espaço em que usuários ajudam outros usuários. <br> Não espalhe informações falsas, contamos com a ajuda de todos</h2>
                    <form class="login__form" id="form_login" method="$_POST">
                        <input type=" text" class="login__input" id="NomeLogin" placeholder="Seu nome" value="' . $_SESSION["nome"] . '" required style="display:none;">
                        
                        <label for="local">
                            <div>Em qual rua do intinerário você se encontra?</div>
                            <div>
                                <select name="local" id="localizacaoUsuario">
                                    <option value="RuaDoGaiaIndoParaBH">RUA DO GAIA (Indo para BH)</option>
                                    <option value="RuaDaPonteIndoParaBH">RUA DA PONTE (Indo para BH)</option>
                                    <option value="AvPrefeitoVitorFantiniIndoParaBH">AV. PREFEITO VITOR FANTINI (Indo para BH)</option>
                                    <option value="RuaMarietaMachadoIndoParaBH">RUA MARIETA MACHADO (Indo para BH)</option>
                                    <option value="RodoviaMG05IndoParaBH">RODOVIA MG-05 (Indo para BH)</option>
                                    <option value="AvJoseCandidoDaSilveiraIndoParaBH">AV. JOSE CANDIDO DA SILVEIRA (Indo para BH)</option>
                                    <option value="AvCristianoMachadoIndoParaBH">AV. CRISTIANO MACHADO (Indo para BH)</option>
                                    <option value="TunelIndoParaBH">TUNEL (Indo para BH)</option>
                                    <option value="ViadutoLesteIndoParaBH">VIADUTO LESTE (Indo para BH)</option>
                                    <option value="RuaRioDeJaneiroIndoParaBH">RUA RIO DE JANEIRO (Indo para BH)</option>
                                    <option value="RuaGuaicurusIndoParaBH">RUA GUAICURUS (Indo para BH)</option>
                                    <option value="RuaSaoPauloIndoParaBH">RUA SAO PAULO (Indo para BH)</option>
                                    <option value="RuaCaetesIndoParaBH">RUA CAETES (Indo para BH)</option>
                                    <option value="RuaEspiritoSantoIndoParaBH">RUA ESPIRITO SANTO (Indo para BH)</option>
                                    <option value="AvDoContornoIndoParaBH">AV. DO CONTORNO (Indo para BH)</option>
                                    <option value="ViadutoLesteVoltandoParaSabara">VIADUTO LESTE (Voltando para Sabará)</option>
                                    <option value="TunelVoltandoParaSabara">TUNEL (Voltando para Sabará)</option>
                                    <option value="AvCristianoMachadoVoltandoParaSabara">AV. CRISTIANO MACHADO (Voltando para Sabará)</option>
                                    <option value="AvJoseCandidoDaSilveiraVoltandoParaSabara">AV. JOSE CANDIDO DA SILVEIRA (Voltando para Sabará)</option>
                                    <option value="RodoviaMG05VoltandoParaSabara">RODOVIA MG-05 (Voltando para Sabará)</option>
                                    <option value="AvPrefeitoVitorFantiniVoltandoParaSabara">AV. PREFEITO VITOR FANTINI (Voltando para Sabará)</option>
                                    <option value="RuaJKVoltandoParaSabara">RUA J. K. (Voltando para Sabará)</option>
                                    <option value="RuaDaPonteVoltandoParaSabara">RUA DA PONTE (Voltando para Sabará)</option>
                                    <option value="RuaDoGaiaVoltandoParaSabara">RUA DO GAIA (Voltando para Sabará)</option>
                                </select>
                            </div>
                            <div>
                                <div  onclick="confirmarLocalizacao()" id="localizacaoAtual"><button type="button" class="login__button">Essa é minha localização atual</button></div>
                                <div id="btnSubmit"><button type="submit" class="login__button" id="confirmarLocalizacao" name="btnSubmit">Entrar no chat</button></div>
                            </div>
                        </label>
                    </form>
                </section>
                
                ';
        }
        ?>

        <section class="chat">
            <div id="header">Chat - 4988 / Sabará - B. Horizonte</div>
            <div id="sair" style="background-color: white;">
                <div onclick="window.close()" style="cursor: pointer; color: black; ">
                    <span class="material-symbols-outlined">
                        close
                    </span>
                </div>
            </div>

            <section class="chat__messages">
            </section>

            <div class="fundo">
                <form class="chat__form">
                    <button class="transito" onclick="tranVdd()">Transito</button>
                    <button class="lotado" onclick="lotVdd()">Ônibus lotado</button>
                    <button class="vazio" onclick="vazioVdd()">Ônibus vazio</button>
                    <button class="rota" onclick="rotaVdd()">Mudança de rota</button>
                    <button class="acidente" onclick="acidVdd()">Acidente</button>
                    <button class="problMec" onclick="problMecVdd()">Problemas mecânicos</button>
                    <button class="obras" onclick="obraVdd()">Obras na pista</button>
                    <button class="adiantado" onclick="onibusAdiantadoVdd()">Ônibus adiantado</button>
                    <button class="adiantado" onclick="onibusAtrasadoVdd()">Ônibus atrasado</button>
                </form>
            </div>

        </section>

    </section>

    <script src="script.js"></script>
</body>

</html>