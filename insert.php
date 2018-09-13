<?php
	include ('conexao.php');
	$NOME = $_POST['nome'];
	$CPF = $_POST['cpf'];
	$PLACA = $_POST['placa'];
	$ENDERECO = $_POST['endereco'];
	$TELEFONE = $_POST['telefone'];


	$sql = "INSERT INTO CLIENTE (NOME, CPF, PLACA, ENDERECO, TELEFONE) VALUES ('".$NOME."','".$CPF."','".$PLACA."','".$ENDERECO."','".$TELEFONE."')";


	if(!mysqli_query($con, $sql))
	{
		echo "Erro ao inserir os dados do cliente";
	}
	else
	{
		echo "Dados inseridos com sucesso você será redirecionado para a tela de login";
	}

	header("refresh:5; url=index.html");
?>