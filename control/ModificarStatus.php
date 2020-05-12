<?php

session_start();
require_once("../dao/produtoDAO.php");
require_once("../model/Produto.php");

$id_pedido_detalhe = $_POST["id_pedido_detalhe"];;

$produtoDAO = new produtoDAO();

$retorno = false;


$resultado = $produtoDAO->modificarStatus($id_pedido_detalhe);

if (empty($resultado)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Não foi possivel modificar o status!');
	echo json_encode($retorno);
	exit();
}else {
	$retorno = $resultado;
	echo json_encode($retorno); //Aqui retorno um json_encode
	exit();
}

?>

