<?php

session_start();

$cep = $_POST["cep"];
require_once("../dao/produtoDAO.php");
require_once("../model/Produto.php");


$produtoDAO = new produtoDAO();
//echo $cep;
if (empty($cep)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Preencha o cep!');
	echo json_encode($retorno);
	exit();
}

$resultado = $produtoDAO->listar($cep);


if (empty($resultado)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Não existe pedidos de doações com o cep informado!');
	echo json_encode($retorno);
	exit();
}else {
	$retorno = $resultado;
	echo json_encode($retorno);
	exit();
}

?>