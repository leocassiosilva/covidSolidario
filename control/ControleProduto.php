<?php

session_start();

$id_usuario = $_SESSION["id_usuario"];

require_once("../dao/produtoDAO.php");
require_once("../model/Produto.php");
require_once("../model/Categoria.php");
require_once("../model/Usuario.php");


$nomeProduto = $_POST["nome"];
$id_categoria = $_POST["categoria"];
$quantidade = $_POST["quantidade"];

$produtoDAO = new produtoDAO();
$produto = new Produto();
$categoria = new Categoria();
$usuario = new Usuario();

$produto->setNome($nomeProduto);
$categoria->setId_categoria($id_categoria);
$usuario->setId_usuario($id_usuario);



$resultProduto = $produtoDAO->cadastro($produto, $categoria);
$produto->setId_produto($resultProduto);

if (!empty($resultProduto)) {
	$produtoDAO->cadastroDoacao($produto, $usuario, $quantidade);
}

?>