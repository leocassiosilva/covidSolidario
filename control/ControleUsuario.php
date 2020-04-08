<?php
session_start();
require_once("../model/Usuario.php");

$nome = $_POST["nome"];
$celular = $_POST["celular"];
$email = $_POST["email"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$senha = $_POST["senha"];

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
