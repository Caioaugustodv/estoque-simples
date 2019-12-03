<?php

require 'controle.php';

if (isset($_GET['id']) && empty($_GET['id']) == false) {
	
	$id = addslashes($_GET['id']);
	$sql = "DELETE FROM produtos WHERE id = '$id'";
	$pdo->query($sql);
	header('Location:cad_produto.php');



}else {
	header('Location:cad_produto.php');
}











?>