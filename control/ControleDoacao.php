<?php

session_start();
require_once("../model/Doacao.php");
require_once("../model/Usuario.php");
require_once("../dao/doacaoDAO.php");

$id_usuario = $_SESSION["id_usuario"];

$doacaoDAO = new doacaoDAO();

$usuario = new Usuario(); 
$doacao = new Doacao(); 


$descricao = $_POST["descricao"];


$retorno = false;

//Verificar se a descrição foi preenchida
if (empty($descricao)) {
    $retorno = array('codigo' => 0, 'mensagem' => 'Preencha a descricao!');
    echo json_encode($retorno);
    exit();
}


/*Usuario*/
$doacao->setDescricao($descricao);
$usuario->setId_usuario($id_usuario);


/*Chamando a função para cadastrar doação*/
$resultado = $doacaoDAO->cadastrar($usuario, $doacao);

if ($resultado == 1) {
  $retorno = array('codigo' => 1, 'mensagem' => 'Cadastrado com sucesso!');
    echo json_encode($retorno);
    exit();
}else {
     $retorno = array('codigo' => 0, 'mensagem' => 'Não foi possivel realizar cadastro tente novamente!');
    echo json_encode($retorno);
    exit();
}

?>

