<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Atualizar endereço</title>
</head>
<body>
	 <?php 
            //Recebe os dados a serem editados
            $ID = $_POST['id'];
            $CPF = $_POST['cpf'];
            $PLACA = $_POST['placa'];
     ?>
     <h2>Alteração de endereço</h2>
	<form method="post" action="salvar.php" id="formlogin" name="formlogin" >
		<fieldset id="fie">
			<legend>ATUALIZAR ENDEREÇO</legend><br />
			<table>
				<tr>
					<td>
						<label>ENDEREÇO : </label>
					</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $ID; ?>">
						<input type="hidden" name="cpf" value="<?php echo $CPF; ?>">
						<input type="hidden" name="placa" value="<?php echo $PLACA; ?>">
						<input type="text" name="endereco" id="endereco" maxlength="30" /><br />
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="ATUALIZAR ENDEREÇO  "  />
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>

<html>