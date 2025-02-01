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
    <header>
        <nav class="geral" style="height: 100px;">
            <a href="../Home/home.php" class="logo"> <img src="/ProjetecT/FrontEnd/img/Logo_nome.png" alt=""></a>
            <ul class="opcoes">
                <div id="divBusca">

                    <label for="txtBusca">
                        <img src="/ProjetecT/FrontEnd/img/search3.png" alt="Buscar..." />
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
                <li class="item"><a href="../Contato/form.html" class="link">Contatos</a></li>
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
    </header>

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
                    session_start();
                    if (isset($_SESSION['email']) == ''){echo "<div class='form-group'><label for='email'>E-mail:</label><input type='email' id='email' name='email' placeholder='Seu e-mail' required></div>";}
                ?>
                <div class="form-group">
                    <label for="message">Mensagem:</label>
                    <textarea id="message" name="message" rows="5" placeholder="Sua mensagem" required></textarea>
                </div>
                <button type="submit">Enviar Mensagem</button>
            </form>
            
        </section>

        <section class="team">
            <h2>Equipe</h2>
            <div class="team-content">
                <img src="../img/Algm me salva socorro.jpg" alt="Equipe da Buscar" class="team-photo">
                <div class="team-info">
                    <div class="texto_time">
                    <p>Conheça a Equipe por Trás do <strong>Buscar</strong>! Por trás do nosso site, existe uma equipe dedicada e apaixonada pelo que faz.  Estamos aqui para garantir que você tenha a melhor experiência possível ao encontrar ônibus.
                        Nossa equipe de desenvolvedores é responsável por transformar ideias em realidade. Eles criam e mantêm o site, garantindo que todas as funcionalidades estejam operando perfeitamente. Graças a eles, você pode encontrar informações sobre ônibus de forma rápida e fácil.</p>
                        <div id="redeSocial" > 
                            <a style="display: flex; justify-content:center; align-items: center; color: black;" target="_blank" href="https://www.instagram.com/buscar_projetec/">
                                    <p>Siga-nos no Instagram</p>
                                    <img src="../img/instagram.png" style="margin-left: 10px; height: 35px; border-radius:10px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="../navbar/navbar.js"></script>
</body>
</html>
