<?php

//Essa pagina aqui é o Controle para Minhas Doações
session_start();

$id_usuario = $_SESSION["id_usuario"];
require_once("../dao/produtoDAO.php");
require_once("../model/Produto.php");


$produtoDAO = new produtoDAO();
//echo $nome;
if (empty($id_usuario)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Faça Login!');
	echo json_encode($retorno);
	exit();
}

$resultado = $produtoDAO->listarPedidosUsuario($id_usuario);


if (empty($resultado)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Você ainda não realizou nenhuma pedido!');
	echo json_encode($retorno);
	exit();
}else {
	$retorno = $resultado;
	echo json_encode($retorno); //Aqui retorno um json_encode
	exit();
}

?>

