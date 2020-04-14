<?php

session_start();

$id_usuario = $_SESSION["id_usuario"];
$cep = $_POST["cep"];
require_once("../dao/produtoDAO.php");
require_once("../model/Produto.php");
require_once("../model/Categoria.php");
require_once("../model/Usuario.php");
$produtoDAO = new produtoDAO();

$resultado = $produtoDAO->listar($cep);
//$resultado = $produtoDAO->listar();


echo json_encode($resultado);

    //var_dump($resultado);
?>