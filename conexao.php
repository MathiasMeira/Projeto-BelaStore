
<?php
	$conexao = mysqli_connect("localhost", "root", "", "belastore");
	if( ! $conexao){
		echo "Erro - Conexão falhou!". mysqli_connect_error();
	}
?>