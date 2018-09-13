<?php
	$host = "127.0.0.1";
	$user = "root";
	$pass = "";
	$db = "proauto";

	$con = mysqli_connect($host, $user, $pass, $db);

	if(!$con)
	{
		echo "<br/>";
		echo "O servidor não está conectado com a aplicação.";
	}
	elseif (!mysqli_select_db($con,'proauto')) {
		echo "<br/>";
		echo "O banco de dados não esta selecionado";
	}
	//else para verificar se o banco de dados foi conectado com sucesso.
	/*else
	{
		echo "<br/>";
		echo "Banco de dados esta conectado.";
	}*/
?>