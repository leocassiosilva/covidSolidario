<?php
session_start();
require_once("../dao/Conexao.php");
require_once("../dao/produtoDAO.php");
require_once("../model/Produto.php");
require_once("../model/Usuario.php");

$id_usuario = $_SESSION["id_usuario"];
//echo $id_usuario;
$produtoDAO = new produtoDAO();
$produto = new Produto();
$usuario = new Usuario(); 
$usuario->setId_usuario($id_usuario);

$verificarProduto = 0;

$qtd = 0;

$data = json_decode(stripslashes($_POST['data']));


foreach($data as $registro):
	if (empty($registro->nome)) {
		$retorno = array('codigo' => 0, 'mensagem' => 'Preencha o nome do produto!');
		echo json_encode($retorno);
		exit();
	}

	if (!(preg_match('/^[a-zA-Z]+/', $registro->nome))) {
		$retorno = array('codigo' => 0, 'mensagem' => 'Digite um nome sem números e caractererses especiais.');
		echo json_encode($retorno);
		exit();
	}


	if (empty($registro->qtd)) {
		$retorno = array('codigo' => 0, 'mensagem' => 'Preencha a quantidade do produto!');
		echo json_encode($retorno);
		exit();
	}
endforeach;

$retornoPedido = $produtoDAO->cadastroPedido($usuario);
$retornoPedido = (int) $retornoPedido;


foreach($data as $registro):

	$qtd = (int)$registro->qtd;
	$nome = $registro->nome;

	$produto->setNome($nome);

	$verificarProduto = $produtoDAO->verificar($produto);

	if (empty($verificarProduto)) {
		$resultProduto = $produtoDAO->cadastro($produto);
		$produto->setId_produto($resultProduto);
		$retornoDoacao = $produtoDAO->cadastroDetalhePedido($produto, $retornoPedido, $qtd);
	}else {
		$produto->setId_produto($verificarProduto);
		$retornoDoacao = $produtoDAO->cadastroDetalhePedido($produto,$retornoPedido, $qtd);
	}

endforeach;


if (!empty($retornoDoacao)) {
	$retorno = array('codigo' => 1, 'mensagem' => 'Solicitação cadastrada!');
	echo json_encode($retorno);
	exit();
}
