<?php

session_start();

$cep = $_POST["cep"];
require_once("../dao/doacaoDAO.php");

$doacaoDAO = new doacaoDAO();

if (empty($cep)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Preencha o CEP!');
	echo json_encode($retorno);
	exit();
}
//listarTodasDoacoes($cep)
$resultado = $doacaoDAO->listarTodasDoacoes($cep);
//$resultado = $produtoDAO->listar();

if (empty($resultado)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Não existe doações para o CEP informado!');
	echo json_encode($retorno);
	exit();
}else {
	$retorno = $resultado;
	echo json_encode($retorno);
	exit();
}

    //var_dump($resultado);
?>