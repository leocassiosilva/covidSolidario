<?php

session_start();


require_once("../dao/produtoDAO.php");
require_once("../model/Produto.php");


$nomeProduto = $_POST["nome"];
$categoria = $_POST["categoria"];
$quantidade = $_POST["quantidade"];

$produto = new Produto();


//Verificar o nome produto
if (empty($nomeProduto)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Preencha o nome do produto!');
	echo json_encode($retorno);
	exit();
}
if (empty($categoria)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Escolha a categoria!');
	echo json_encode($retorno);
	exit();
}
if (empty($quantidade)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Preencha o quantidade!');
	echo json_encode($retorno);
	exit();
}

?>