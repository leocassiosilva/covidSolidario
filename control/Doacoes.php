<?php

session_start();


$id_usuario = $_SESSION["id_usuario"];
$cep = $_POST["cep"];
$nome = $_POST["nome"];
require_once("../dao/produtoDAO.php");
require_once("../model/Produto.php");


$produtoDAO = new produtoDAO();
//echo $nome;
if (empty($cep)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Preencha o cep!');
	echo json_encode($retorno);
	exit();
}

$resultado = $produtoDAO->listarPedido($nome, $cep, $id_usuario);


if (empty($resultado)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Não existe pedidos de doação para o cep e/ou nome do produto informado!');
	echo json_encode($retorno);
	exit();
}else {
	$retorno = $resultado;
	echo json_encode($retorno);
	exit();
}

?>