<?php 

session_start();

include('abrir_conexao.php');

$sql = "insert into celular(nome, preco, dataCriacao, descricao, caminhoImagem, categoria_id, quantidade) value(?,?,?,?,?,?,?)";

var_dump($_POST);
if (!($statement = $connection->prepare($sql))) {
    echo "Prepare failed: (" . $connection->errno . ") " . $connection->error;
}

if(!$statement->bind_param('sdsssii', $_POST['nome'], $_POST['preco'], $_POST['dataCriacao'], 
	$_POST['descricao'], $_POST['caminhoImagem'], $_POST['categoria_id'], $_POST['quantidade'])){
	echo "Binding parameters failed: (" . $statement->errno . ") " . $statement->error;
}

if (!$statement->execute()) {
	echo "nao funcionou!";
   	echo "Execute failed: (" . $statement->errno . ") " . $statement->error;
}

include ('fecha-conexao.php');

$_SESSION['mensagem'] = "Produto cadastrado com sucesso!";

header('Location: cadastroProduto.php');

?>