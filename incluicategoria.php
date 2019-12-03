<?php


$categoria = $_POST['categoria'];

//inserindo no banco de dados
include("controle.php");

$sql = $pdo->prepare("INSERT INTO categoria (nome_cat) VALUES (:categoria)");
$sql->bindValue(":categoria",$categoria);
$sql->execute();

header('Location: criacategoria.php');




















?>