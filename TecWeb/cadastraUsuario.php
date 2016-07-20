<?php 

session_start();

include('abrir_conexao.php');

$sql = "insert into usuarios(nome, sobrenome, sexo,  cpf, email, senha, endereco, bairro, complemento, cidade, estado, permissaoAdmin) value(?,?,?,?,?,?,?,?,?,?,?,?)";

var_dump($_POST);
if (!($statement = $connection->prepare($sql))) {
    echo "Prepare failed: (" . $connection->errno . ") " . $connection->error;
}

if(!$statement->bind_param('ssssssssssss', $_POST['nome'], $_POST['sobrenome'], $_POST['sexo'],  $_POST['cpf'], $_POST['email'], $_POST['senha'], $_POST['endereco'], 
	$_POST['bairro'], $_POST['complemento'], $_POST['cidade'], $_POST['estado'], $_POST['permissaoAdmin'])){
	echo "Binding parameters failed: (" . $statement->errno . ") " . $statement->error;
}

if (!$statement->execute()) {
	echo "nao funcionou!";
   	echo "Execute failed: (" . $statement->errno . ") " . $statement->error;
}

include ('fecha_conexao.php');

$_SESSION['mensagem'] = "Usuário cadastrado com sucesso!";

header('Location: cadastroConta.php');

?>