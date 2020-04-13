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


//Verificar o nome produto
if (empty($nomeProduto)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Preencha o nome do produto!');
	echo json_encode($retorno);
	exit();
}
//Verificar se o numero contem caractere invalidos como numeros e 
if (!(preg_match('/^[a-zA-Z]+/', $nomeProduto))) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Digite um nome sem caracterer especiaais como numeros e [#@$%]');
	echo json_encode($retorno);
	exit();
}

if (empty($id_categoria)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Escolha a categoria!');
	echo json_encode($retorno);
	exit();
}
if (empty($quantidade)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Preencha o quantidade!');
	echo json_encode($retorno);
	exit();
}

$produto->setNome($nomeProduto);
$categoria->setId_categoria($id_categoria);
$usuario->setId_usuario($id_usuario);

$verificarProduto = $produtoDAO->verificar($produto);

//var_dump($verificarProduto);

if (empty($verificarProduto)) {
	$resultProduto = $produtoDAO->cadastro($produto, $categoria);
	$produto->setId_produto($resultProduto);
	if (!empty($resultProduto)) {
		$retornoDoacao = $produtoDAO->cadastroDoacao($produto, $usuario, $quantidade);
	}
}else {
	$produto->setId_produto($verificarProduto);
	$retornoDoacao = $produtoDAO->cadastroDoacao($produto, $usuario, $quantidade);
	//echo $produto->getId_produto();
}

if (!empty($retornoDoacao)) {
	$retorno = array('codigo' => 1, 'mensagem' => 'Doação Realizada com Sucesso!');
    echo json_encode($retorno);
    exit();
}
/*
$resultProduto = $produtoDAO->cadastro($produto, $categoria);
$produto->setId_produto($resultProduto);

if (!empty($resultProduto)) {
	$retornoDoacao = $produtoDAO->cadastroDoacao($produto, $usuario, $quantidade);
}
if (!empty($retornoDoacao)) {
	$retorno = array('codigo' => 1, 'mensagem' => 'Doação Realizada com Sucesso!');
    echo json_encode($retorno);
    exit();
}*/
?>