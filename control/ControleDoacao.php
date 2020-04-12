<?php

session_start();

$id_usuario = $_SESSION["id_usuario"];

require_once("../dao/produtoDAO.php");
require_once("../model/Produto.php");
require_once("../model/Categoria.php");


$nomeProduto = $_POST["nome"];
$id_categoria = $_POST["categoria"];
$quantidade = $_POST["quantidade"];

$produtoDAO = new produtoDAO();

$produto = new Produto();
$categoria = new Categoria();


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

if (empty($categoria)) {
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

/*Recebe o retorno da verificação de existencia do protudo no banco de dados*/
$verificar = $produtoDAO->verificar($produto);
/**/
$resultProduto = 0;
if (!($verificar == 1)) {
	$resultProduto = $produtoDAO->cadastro($produto, $categoria);
}
if ($verificar == 1 || $resultProduto == 1) {
	echo "doação cadastrada";
}

?>