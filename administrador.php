<!DOCTYPE html>
<html>
    <head>
        <title>Seção Administrador</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="tabela.css">
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
            
        <div class="titulos"><h1>Seção Administradora</h1></div>
        
        <div id="mae">   
        
        <div id="ladotexto">
        <form action="processa_cad_produto.php" method="post">
        <div class="subtitulos"><p>Cadastro do Produto</p></div>
        <p>Nome:</p>
        <input type="text" name="txtNome">
        <p>Preço:</p>
        <input type="text" name="txtPreco">
        <p>Descrição:</p>
        <input type="text" name="txtDescricao">
        <p>Categoria:</p>
        <input class="form" type="radio" name="txtCategoria" value="1">Adulto
        <input class="form" type="radio" name="txtCategoria" value="2">Criança
        <p>Estoque mínimo:</p>
        <input type="text" name="txtMinimo">
        <p>Estoque máximo:</p>
        <input type="text" name="txtMaximo">
        <p>Upload de imagem do produto:</p>
        <input type="text" name="txtUpload"><br>
        <button id="botao" type="submit">Cadastrar</button></form></div>
        
        
        <div id="tabela2">
            <div class="subtitulos"><p>Produtos Cadastrados</p></div>
            <div id="menu">
                <div class="itensmenu"><p>Nome</p></div>
                <div class="itensmenu"><p>Preço</p></div>
                <div class="itensmenu"><p>Detalhar<p></div>
                <div class="itensmenu"><p>Editar</p></div>  
                <div class="itensmenu"><p>Deletar</p></div> 
            </div>       
        
            <?php
                require_once "conexao.php";
                $comando = "SELECT * FROM produto";
                $resultado = mysqli_query($conexao, $comando);

                while($linha = mysqli_fetch_assoc($resultado)){
            ?>
            <div id="a">
                <div class="produtos"><p><?=$linha['nomeproduto']?></p></div>
                <div class="itensad"><p><?=$linha['preco']?></p></div>
                <div class="itensad"><button class="botaocadastro" type="submit"><a href="detalhar_produto.php?idcategoria= <?=$linha['idcategoria']?>"> Detalhes </a></button></div>
                <div class="itensad"><button class="botaocadastro" type="submit"><a href="form_alterar_produto.php?idcategoria= <?=$linha['idcategoria']?>"> Editar </a></button></div>
                <div class="itensad"><button class="botaocadastro" type="submit"><a href="deletar_produto.php?idcategoria= <?=$linha['idcategoria']?>"> Excluir </a></button></div>
            </div>   
            <?php
                }
            ?>

        </div>
        </div>
        </div>

        <div id="tabela2">
            <div class="subtitulos"><p>Usuários Cadastrados</p></div>
            <?php
                require_once "conexao.php";
                $comando = "SELECT * FROM usuario";
                $resultado = mysqli_query($conexao, $comando);
            ?>
            <a href="login.php?">  Login de cadastro </a>
            <?php
                while($linha = mysqli_fetch_assoc($resultado)){
            ?>
                <h3>Nome: <?=$linha['nomeusuario']?></h3>
                <button><a href="detalhar_usuario.php?cpf= <?=$linha['cpf']?>"> Ver detalhes </a></button>
                <button><a href="deletar_usuario.php?cpf= <?=$linha['cpf']?>"> Remover usuário </a></button>
                <button><a href="form_alterar_usuario.php?cpf= <?=$linha['cpf']?>"> Alterar usuário </a></button>
            <?php
                }
            ?>
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
