<?php

//include("Conexao.php");
require_once("../model/Usuario.php");
require_once("../dao/usuarioDAO.php");

$usuarioDAO = new usuarioDAO();

$usuario = new Usuario(); 

$nome = $_POST["nome"];
$email = $_POST["email"];
$matricula = $_POST["matricula"];
$senha = $_POST["senha"];
$tipo = $_POST["tipo"];

$retorno = false;

//Verificar o nome
if (empty($nome)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Preencha seu nome!');
	echo json_encode($retorno);
	exit();
}

?>