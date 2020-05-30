<?php

session_start();

$nome = $_POST["nome"];
$cep = $_POST["cep"];
require_once("../dao/produtoDAO.php");
require_once("../model/Produto.php");


$produtoDAO = new produtoDAO();
//echo $nome;
if (empty($cep)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Preencha o cep!');
	echo json_encode($retorno);
	exit();
}
//$cep = "59980-000";
$resultado = $produtoDAO->listar($nome, $cep);


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