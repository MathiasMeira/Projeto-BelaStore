<?php
require("conexao.php");

$nome = $_POST['txtNome'];
$preco = $_POST['txtPreco'];
$descricao = $_POST['txtDescricao'];
$categoria = $_POST['txtCategoria'];
$estoqueMinimo = $_POST['txtMinimo'];
$estoqueMaximo = $_POST['txtMaximo'];

	$comando2 = "INSERT INTO categoria (idcategoria, descricao) VALUES ('$categoria', '$descricao')";
	$rodou2 = mysqli_query($conexao, $comando2);
?>
	<a href="administrador.php"> Sessão administrador </a>
<?php
	if( ! $rodou2){
		echo mysqli_error($conexao);
	}
	else{
		echo "categoria inserido!";
	}
	$comando = "INSERT INTO produto (nomeproduto, preco, descricao, idcategoria, estoque_minimo, estoque_maximo) VALUES ('$nome', '$preco', '$descricao', '$categoria', '$estoqueMinimo', '$estoqueMaximo')";

	$rodou = mysqli_query($conexao, $comando);

	if( ! $rodou){
		echo mysqli_error($conexao);
	}
	else{
		echo "Produto inserido!";
	}

?>
