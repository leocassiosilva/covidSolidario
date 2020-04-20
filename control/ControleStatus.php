<?php

session_start();
require_once("../model/Doacao.php");
require_once("../dao/doacaoDAO.php");


$doacaoDAO = new doacaoDAO();
$doacao = new Doacao(); 


$id_doacao = $_GET["id_doacao"];


$retorno = false;

//Verificar se a descrição foi preenchida
if (empty($id_doacao)) {
    $retorno = array('codigo' => 0, 'mensagem' => 'Clique no botão de status!');
    echo json_encode($retorno);
    exit();
}


/*Usuario*/
$doacao->setId_doacao($id_doacao);


/*Chamando a função para cadastrar doação*/
$resultado = $doacaoDAO->modificarStatus($doacao);

echo $resultado; 

?>

