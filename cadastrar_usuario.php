
<?php
	require('conexao.php');
	$nome = $_POST['Nome'];
	$email = $_POST['Email'];
	$cpf = $_POST['CPF'];
	$data = $_POST['DataNascimento'];
	$sexo = $_POST['Sexo'];

	$comando = "INSERT INTO usuario(cpf, nomeusuario, email, datanascimento, sexo, tipousuario) VALUES ('$cpf','$nome','$email','$data','$sexo', '')";
	$retorno = mysqli_query($conexao, $comando);
?>
	<a href="login.php"> Retornar </a><br>
<?php
	if( ! $retorno){
		echo "Erro ao cadastrar usuário!";
	}
	else{
		echo "Cadastro realizado!";
	}

	$cpf = $_POST['CPF'];
	$cidade = $_POST['Cidade'];
	$bairro = $_POST['Bairro'];
	$logradouro = $_POST['Logradouro'];
	$cep = $_POST['CEP'];
	$numero = $_POST['Numero'];
	$complemento = $_POST['Complemento'];

	$comando2 = "INSERT INTO endereco(cpf, logradouro, numero, complemento, bairro, cidade, cep) VALUES ('$cpf','$logradouro','$numero','$complemento','$bairro','$cidade', '$cep')";
	$retorno2 = mysqli_query($conexao, $comando2);
?>