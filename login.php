<!DOCTYPE html>
<html>
    <head>
        <title>Login do Cliente</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="forms.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body>
        <div id="pginicial">
            <div id="volta">
                <ul class="navbar">
                    <li class="item-nav"><img id="logoloja" src="logo.png" alt="Logo"></li>
                    <li class="item-nav">
                        <div id="search"><input id="inputcabecalho" type="text" name="pesquisa" placeholder="O que você deseja, lindeza?">
                            <button><i class="material-icons">search</i></button></div>
                     </li>
                    <li class="item-nav">
                        <div id="icones"><div class="icons1e2"><a href="login.php"><i class="material-icons">person_pin</i></a></div>
                            <div class="icons1e2"><a href="sacola.html"><i class="material-icons">shopping_basket</i></a></div></div></li>
                </ul>
            </div>
            <div id="borda2"></div>
            <div id="borda3"></div>
         
        <div class="titulos"><h1>Login do Cliente</h1></div>    
        <div id="pai">    
        <div id="lado1"><form action="index.html" method="POST">
                <div class="subtitulos"><p>Já é cadastrado?</p></div>
        <b>Conecte seus dados de login e senha.</b>
        
        <div class="centro">
        <p>Email:</p>
        <input class="form" type="email"
               name="email">
        <p>Senha:</p>
        <input class="form" type="password" name="senha"><br>
        <button class="botoes" type="submit">Entrar</button></div></form></div>
        
      
        <div id="lado2"><form action="cadastrar_usuario.php" method="POST">
                <div class="subtitulos"><p>Ainda não é cadastrado ?</p></div>
        <b>Faça agora, é simples e rápido!</b>

        <div class="centro">
        <p>Nome:</p>
        <input class="form" type="text" name="Nome">
        <br>
        
        <p>Email:</p>
        <input class="form" type="text" name="Email">
        <br>
        
        <p>Senha:</p>
        <input class="form" type="password" name="Senha">
        <br>
        
        <p>CPF:</p>
        <input class="form" type="text" name="CPF">
        <br>
        
        <p>Data de Nascimento:</p>
        <input class="form" type="date" name="DataNascimento">
        <br>

        <p>Sexo:</p>
        <input class="form" type="radio" value="F" name="Sexo">Feminino
        <input class="form" type="radio" value="M" name="Sexo">Masculino<br>
        <br>
        
        <div class="subtitulos"><p>Endereço</p></div>

        <p>Cidade:</p>
        <input class="form" type="text" name="Cidade">
        <br>
        
        <p>Bairro:</p>
        <input class="form" type="text" name="Bairro">
        <br>
        
        <p>Logradouro:</p>
        <input class="form" type="text" name="Logradouro">
        <br>
        
        <p>CEP:</p>
        <input class="form" type="text" name="CEP">
        <br>

        <p>Número:</p>
        <input class="form" type="text" name="Numero">
        <br>

        <p>Complemento:</p>
        <input class="form" type="text" name="Complemento">
        <br>
        
        <button class="botoes" type="submit">Cadastrar</button></div></form></div>
        </div>
        </div>
            
        <div id="rodape">
        <footer>
            <nav>
                <div id="rodapecima"> 
                    <div id="h1rodape"><h1>Mapa do Site:</h1></div>
                    <div id="menurodape">
                        <a class="linksrodape" href="index.php">Voltar á Página Inicial</a>
                        <a class="linksrodape" href="blackfriday.html">Black Friday</a>
                        <a class="linksrodape" href="administrador.php">Conta Administradora</a>
                        <a class="linksrodape" href="sacola.html">Sacola de Compras</a>
                        <a class="linksrodape" href="sobrealoja.html">Sobre a Bela Store</a>
                        <a class="linksrodape" href="login.php">Login do Usuário</a></div>
                </div>
                <div id="rodapebaixo">
                    <div id="endereço"><p>Av. João Olímpio de Oliveira, 1561 | Vila Asem | Itapetininga/SP</p>
                        <p>CEP 18202-000 | Telefone: (15) 997435806</p>
                        <p>Web Design: Ana Laura Teodoro de Andrade e Mathias Meira</p></div>
                    <div id="logosrodape">
                        <div id="plogo"><p>Siga-nos:</p></div>
                        <div id="redesocial">
                        <img class="logosrodape" src="icone1.jpg" alt="Ícone">
                        <img class="logosrodape" src="icone2.png" alt="Ícone">
                        <img class="logosrodape" src="icone3.png" alt="Ícone">
                        <img class="logosrodape" src="icone4.png" alt="Ícone">
                        </div></div>
                    <div id="bannerdorodape"><img id="bannerrodape" src="logo.png" alt="Logo"></div>
                </div>
            </nav>
        </footer>
        </div>
        
    </body>
</html>
