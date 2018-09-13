<?php
	//Conexão com o banco de dados
include ('conexao.php');

	//Variaveis recebendo POST da Página de login especificamente. INDEX.HTML

	$CPF = $_POST['cpf'];
	$PLACA = $_POST['placa'];

	//Uma variavel SQL que recebe uma query de select verificando se o usuário e a placa batem para o usuário entrar
$sql = "SELECT ID, NOME, CPF, PLACA, ENDERECO, TELEFONE FROM cliente where CPF = '".$CPF."' AND PLACA = '".$PLACA."'";
$result = $con->query($sql);

	//Um if para verificar se o resultado da query trouxe algum dado.
if ($result->num_rows > 0) {
	//Um echo para geração de tabelas para organização dos dados.
	echo "<fieldset id='cadastro'>
	<legend>SEU CADASTRO</legend>
	<table border='1'>
	<caption>Seus Dados - PROAUTO</caption>
	<thead>
	<tr>
	<th colspan='6'>Clientes</th>
	</tr>
	</thead>
	<tbody>
	<tr>
	<td>NOME</td>
	<td>CPF</td>
	<td>PLACA</td>
	<td>ENDEREÇO</td>
	<td>TELEFONE</td>
	<td></td>
	</tr>
	";
	//Este while ira pegar os resultados do banco de Dados e irá levantar para o usuário este mesmo serve para pegar todos os dados de uma tabela e organizar dentro do table.
	while($row = $result->fetch_assoc()) {
		echo "<tr>
				<td>".$row["NOME"]."</td>
				<td>".$row['CPF']."</td>
				<td>".$row["PLACA"]."</td>
				<td>".$row["ENDERECO"]."</td>
				<td>".$row["TELEFONE"]."</td>
				<td>
					<form action='editar.php' method='post'>
						<input name='id' type='hidden' value='".$row["ID"]."'>
				        <input name='cpf' type='hidden' value='".$CPF."'>
				        <input name='placa' type='hidden' value='".$PLACA."'>
			        	<button style='width: 150px; height: 50px'>Atualizar endereço</button>
		            </form>
		         </td>
				</tr>";
	}
	//Fechamento do table
	echo "</table></fieldset>";
	//Este else valida caso o usuário tenha digitado o CPF ou a Placa incorretamente.
} else {
	echo "O CPF ou a Placa do veiculo está incorreto.
	<input type='button' value='Voltar' onClick='history.go(-1)'>";
}
//fechamento da conexão com o banco de dados.
$con->close();
?>