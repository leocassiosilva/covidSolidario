<?php

session_start();
require_once("../model/Usuario.php");
require_once("../dao/usuarioDAO.php");

$usuarioDAO = new usuarioDAO();

$usuario = new Usuario(); 

$nome = $_POST["nome"];
$celular = $_POST["celular"];
$email = $_POST["email"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$senha = $_POST["senha"];
$confirmar_senha = $_POST["confirmar_senha"];



$retorno = false;

//Verificar o nome
if (empty($nome)) {
    $retorno = array('codigo' => 0, 'mensagem' => 'Preencha seu nome!');
    echo json_encode($retorno);
    exit();
}
if (empty($celular)) {
    $retorno = array('codigo' => 0, 'mensagem' => 'Preencha seu celular!');
    echo json_encode($retorno);
    exit();
}

if (empty($email)) {
    $retorno = array('codigo' => 0, 'mensagem' => 'Preencha seu email!');
    echo json_encode($retorno);
    exit();
}

/*Usado para validar e-mail*/
if (!preg_match("/^([[:alnum:]_.-]){3,}@([[:lower:][:digit:]_.-]{3,})(.[[:lower:]]{2,3})(.[[:lower:]]{2})?$/", $email)) {
    $retorno = array('codigo' => 0, 'mensagem' => 'Formato de email inválido!');
    echo json_encode($retorno);
    exit();
}


if (empty($cep)) {
    $retorno = array('codigo' => 0, 'mensagem' => 'Preencha seu CEP!');
    echo json_encode($retorno);
    exit();
}

if (empty($cidade)) {
    $retorno = array('codigo' => 0, 'mensagem' => 'Preencha seu cidade!');
    echo json_encode($retorno);
    exit();
}

if (empty($uf)) {
    $retorno = array('codigo' => 0, 'mensagem' => 'Preencha seu UF!');
    echo json_encode($retorno);
    exit();
}

if (empty($senha)) {
    $retorno = array('codigo' => 0, 'mensagem' => 'Preencha seu senha!');
    echo json_encode($retorno);
    exit();
}

if (empty($confirmar_senha)) {
    $retorno = array('codigo' => 0, 'mensagem' => 'Preencha o campo confrimar senha!');
    echo json_encode($retorno);
    exit();
}

if ($senha != $confirmar_senha) {
    $retorno = array('codigo' => 0, 'mensagem' => 'O Campo confirmar senha deve ser igual ao campo de senha!');
    echo json_encode($retorno);
    exit();
}


$nome = $_POST["nome"];
$celular = $_POST["celular"];
$email = $_POST["email"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$senha = $_POST["senha"];

/*Usuario*/
$usuario->setNome($nome);
$usuario->setCelular($celular);
$usuario->setEmail($email);
$usuario->setCep($cep);
$usuario->setCidade($cidade);
$usuario->setUf($uf);
$usuario->setSenha($senha);


$verificarEmail = $usuarioDAO->verificar($usuario);

$verificarEmail = $usuarioDAO->verificar($usuario); 

if (!empty($verificarEmail)) {
    $retorno = array('codigo' => 0, 'mensagem' => ' E-mail já existe!');
    echo json_encode($retorno);
    exit();
}

$resultado = $usuarioDAO->cadastro($usuario);

if (!empty($resultado)) {
    $retorno = array('codigo' => 1, 'mensagem' => 'Cadastrado!');
    echo json_encode($retorno);
    exit();
}