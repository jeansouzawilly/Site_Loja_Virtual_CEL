<?php 

include('abrir_conexao.php');

$sql = "insert into contato(nome, email, assunto, mensagem) value(?,?,?,?)";

if (!($statement = $connection->prepare($sql))) {
    echo "Prepare failed: (" . $connection->errno . ") " . $connection->error;
}

if(!$statement->bind_param('ssss', $_POST['nome'], $_POST['email'], $_POST['assunto'], 
	$_POST['mensagem'])){
	echo "Binding parameters failed: (" . $statement->errno . ") " . $statement->error;
}

if (!$statement->execute()) {
   	echo "Execute failed: (" . $statement->errno . ") " . $statement->error;
}

include ('fecha-conexao.php');

$_SESSION['mensagem'] = "Mensagem enviada com sucesso!";

header('Location: contato.php');

?>