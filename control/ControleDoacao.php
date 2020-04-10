<?php
session_start();
require_once("../model/Usuario.php");
require_once("../dao/categoriaDAO.php");

$categoriaDAO = new categoriaDAO();
if($_GET['acao'] == 'categoria'){
$retorno = $categoriaDAO->cat(); 
echo json_encode($retorno);
}
?>