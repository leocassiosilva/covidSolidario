<?php

session_start();
require_once("../dao/doacaoDAO.php");
require_once("../model/Doacao.php");

$id_doacao = $_POST["id_doacao"];;

$doacaoDAO = new doacaoDAO();

$doacao = new Doacao(); 

$retorno = false;


/*doacao*/
$doacao->setId_doacao($id_doacao);

$resultado = $doacaoDAO->modificarStatus($doacao);

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

