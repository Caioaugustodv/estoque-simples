<?php



try {

$pdo = new PDO("mysql:dbname=estoque2;host=localhost","root","");
 

	
} catch (PDOException $e) {
	echo "ERRO".$e->getMessage();
	exit;
}










?>