<html>
<head>
        <title>Alterar Usuário</title>
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
                        <div id="icones"><div class="icons1e2"><a href="login.html"><i class="material-icons">person_pin</i></a></div>
                            <div class="icons1e2"><a href="sacola.html"><i class="material-icons">shopping_basket</i></a></div></div></li>
                </ul>
            </div>
            <div id="borda2"></div>
            <div id="borda3"></div>
            
        <div class="titulos"><h1>Alterar Produto</h1></div>

<div id="tabela2">
<?php 
	require_once('conexao.php');
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$estoque_minimo = $_POST['estoque_minimo'];
	$estoque_maximo = $_POST['estoque_maximo'];
	$idcategoria = $_POST['hdidcategoria'];
	$comando = "UPDATE produto SET nomeproduto = '$nome', preco = '$preco', estoque_minimo = '$estoque_minimo', estoque_maximo = '$estoque_maximo' WHERE idcategoria=$idcategoria";
	$rodou = mysqli_query($conexao, $comando);
?>
	<a href="administrador.php?"> Voltar para a sessão administrador </a>
<?php
	if($rodou){
		echo "Produto alterado!";
	}
	else{
		echo "Erro ao alterar!";
	}

    $descricao = $_POST['descricao'];
    $comando2 = "UPDATE categoria SET descricao = '$descricao' WHERE idcategoria=$idcategoria";
    $rodou2 = mysqli_query($conexao, $comando2);

    if($rodou2){
        echo "categoria alterado!";
    }
    else{
        echo "Erro ao alterar!";
    }
?>
</div>

<div id="rodape">
        <footer>
            <nav>
                <div id="rodapecima">
                    <div id="h1rodape"><h1>Mapa do Site:</h1></div>
                    <div id="menurodape">
                        <a class="linksrodape" href="index.html">Voltar á Página Inicial</a>
                        <a class="linksrodape" href="blackfriday.html">Black Friday</a>
                        <a class="linksrodape" href="administrador.html">Conta Administradora</a>
                        <a class="linksrodape" href="sacola.html">Sacola de Compras</a>
                        <a class="linksrodape" href="sobrealoja.html">Sobre a Bela Store</a>
                        <a class="linksrodape" href="login.html">Login do Usuário</a></div>
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