<?php

//Essa pagina aqui é o Controle para Minhas Doações
session_start();
require_once("../model/Usuario.php");
require_once("../dao/doacaoDAO.php");

$id_usuario = $_SESSION["id_usuario"];

$doacaoDAO = new doacaoDAO();

$usuario = new Usuario(); 


$retorno = false;


/*Usuario*/
$usuario->setId_usuario($id_usuario);

//Aqui é a função listarMinhas doações na qual passo a Id do usuario
$resultado = $doacaoDAO->listarDoacaoUsuario($usuario);

if (empty($resultado)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Você ainda não realizou nenhuma doação!');
	echo json_encode($retorno);
	exit();
}else {
	$retorno = $resultado;
	echo json_encode($retorno); //Aqui retorno um json_encode
	exit();
}

?>

