<?php


$fabricante = $_POST['fabricante'];

//inserindo no banco de dados
include("controle.php");

$sql = $pdo->prepare("INSERT INTO fabricante (nome) VALUES (:fabricante)");
$sql->bindValue(":fabricante",$fabricante);
$sql->execute();






















?>