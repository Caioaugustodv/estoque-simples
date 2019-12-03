<?php

require 'controle.php';

if (isset($_POST['id']) && empty($_POST['id']) == false ) {
	
	$idproduto = addslashes($_POST['id']);
	$qtd_vendidas = addslashes($_POST['qtd']);




	$sql = $pdo->prepare("SELECT quantidade FROM produtos WHERE id = $idproduto");
	$sql->execute();


	if ($sql->rowCount() > 0) {
		$dados = $sql->fetch();
		if ($qtd_vendidas >  $dados['quantidade']) {

			echo "Quantidade pedida não contém em estoque";



		}else {

			$sql = $pdo->prepare("INSERT INTO vendas (qtd_vendas,id_produto) VALUES ('$qtd_vendidas','$idproduto')");
			$sql->execute();

			$sql = $pdo->prepare("UPDATE produtos SET  quantidade = quantidade - $qtd_vendidas WHERE id = $idproduto");
			$sql->execute();

			header('Location:vendas_prod.php');



		}

	}


}




?>