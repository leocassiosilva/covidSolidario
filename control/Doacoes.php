<?php

session_start();

$nome = $_POST["nomeProduto"];
require_once("../dao/produtoDAO.php");
require_once("../model/Produto.php");


$produtoDAO = new produtoDAO();
//echo $nome;
if (empty($nome)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Preencha o nome!');
	echo json_encode($retorno);
	exit();
}

$resultado = $produtoDAO->listarPedido($nome);


if (empty($resultado)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Não existe pedidos de doações com o nome do produto informado!');
	echo json_encode($retorno);
	exit();
}else {
	$retorno = $resultado;
	echo json_encode($retorno);
	exit();
}

?>