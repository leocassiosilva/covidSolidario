<?php

session_start();

$cep = $_POST["cep"];
require_once("../dao/produtoDAO.php");
require_once("../model/Produto.php");
$produtoDAO = new produtoDAO();

if (empty($cep)) {
    $retorno = array('codigo' => 0, 'mensagem' => 'Preencha o CEP!');
    echo json_encode($retorno);
    exit();
}
$resultado = $produtoDAO->listar($cep);
//$resultado = $produtoDAO->listar();


echo json_encode($resultado);
    //var_dump($resultado);
?>