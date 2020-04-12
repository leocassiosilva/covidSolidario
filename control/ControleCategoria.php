<?php

session_start();


require_once("../dao/categoriaDAO.php");
require_once("../model/Produto.php");

$categoriaDAO = new categoriaDAO();
if($_GET['acao'] == 'categoria'){
$retorno = $categoriaDAO->cat(); 
echo json_encode($retorno);
}





?>