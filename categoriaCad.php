
<?php 

require 'controle.php';


	$preco = $_POST['preco'];
	$quantidade = $_POST['quantidade'];
	$fabricante = $_POST['fabricante'];
	$descricao = $_POST['descricao'];
	$categoria  = $_POST['categoria'];

	$sql = $pdo->prepare("INSERT INTO produtos ( fabricante, preco, descricao, quantidade , categoria) VALUES (:fabricante ,  :preco , :descricao , :quantidade , :categoria)");
	$sql->bindValue(":fabricante",$fabricante);
	$sql->bindValue(":preco",$preco);
	$sql->bindValue(":descricao",$descricao);
	$sql->bindValue(":quantidade",$quantidade);
	$sql->bindValue(":categoria",$categoria);
	$sql->execute();

	header('Location: cad_produto.php');

	



?>
