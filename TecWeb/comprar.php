
<?php include('abrir_conexao.php'); 
session_start();
$sql = "select quantidade from celular where id = " . $_GET['id'];

$resultado = $connection->query($sql);
$quantidade = mysqli_fetch_array($resultado)['quantidade'];

$sql = "insert into carrinho(id, nome, quantidade, preco, tipoPagamento) value(?,?,?,?,?)";

var_dump($_POST);
if (!($statement = $connection->prepare($sql))) {
    echo "Prepare failed: (" . $connection->errno . ") " . $connection->error;
}

if(!$statement->bind_param('isiss', $_POST['id'], $_POST['nome'], $_POST['quantidade'], 
	$_POST['preco'], $_POST['tipoPagamento'])){
	echo "Binding parameters failed: (" . $statement->errno . ") " . $statement->error;
}

if($quantidade > 0){

	$sql = "update celular set quantidade = (quantidade-1) where id = " . $_GET['id'];


	if (!($statement = $connection->prepare($sql))) {
	    echo "Prepare failed: (" . $connection->errno . ") " . $connection->error;
	}

	if (!$statement->execute()) {
	   	echo "Execute failed: (" . $statement->errno . ") " . $statement->error;
	}

	$sql = "insert into compras(produto_id, usuario_id, data) values (" . $_GET['id'] . "," . $_SESSION['id_usuario'] . ", now())";

	if (!($statement = $connection->prepare($sql))) {
	    echo "Prepare failed: (" . $connection->errno . ") " . $connection->error;
	}

	if (!$statement->execute()) {
	   	echo "Execute failed: (" . $statement->errno . ") " . $statement->error;
	}

	$_SESSION['mensagem'] = "Compra feita com sucesso";
}else{
 	$_SESSION['mensagem'] = "Nao ha produtos disponiveis no estoque";
}



include ('fecha-conexao.php');

header('Location: carrinho.php?id='. $_GET['id']);

?>