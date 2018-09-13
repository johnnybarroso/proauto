<?php 
    include ('conexao.php');
    //Recebe os dados com as alterações feitas
    $ID = $_POST['id'];
    $CPF = $_POST['cpf'];
    $PLACA = $_POST['placa'];
    $ENDERECO = $_POST['endereco'];

    //Executa a atualização no banco de dados
    $sql = "UPDATE cliente SET endereco='" . $ENDERECO . "' WHERE id='" .$ID. "'";
    $update = $con->query($sql);

    //Se não deu certo, redireciona pra exibe.php com alteracao igual a false
    if( !$update ){
        echo "Falha em atualizar o cadastro";
    }
    echo "
    <fieldset id='cadastro'>
    <legend>ALTERAÇÃO REALIZADA</legend><br />
    <form method='post' action='listagem.php'>
    <input type='hidden' name='cpf' value='".$CPF."'/>
    <input type='hidden' name='placa' value='".$PLACA."'/>
    <input type='submit' value='VOLTAR PARA TELA DE CADASTRO'/>
    </form>
    </<fieldset>
    ";
?>