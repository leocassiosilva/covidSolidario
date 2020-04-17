<?php

session_start();
require_once("../model/Usuario.php");
require_once("../dao/usuariosDAO.php");
//require_once("../dao/emailDAO.php");

$usuariosDAO = new usuariosDAO();

$usuario = new Usuario(); 

$nome = $_POST["nome"];
$celular = $_POST["celular"];
$email = $_POST["email"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$senha = $_POST["senha"];
$confirmar_senha = $_POST["senha2"];
//var_dump($confirmar_senha);

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
    $retorno = array('codigo' => 0, 'mensagem' => 'Preencha o campo senha!');
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

/*Usuario*/
$usuario->setNome($nome);
$usuario->setCelular($celular);
$usuario->setEmail($email);
$usuario->setCep($cep);
$usuario->setCidade($cidade);
$usuario->setUf($uf);
$usuario->setSenha($senha);

//echo $nome;


//$usuariosDAO = new usuariosDAO();
$resultado = $usuariosDAO->cadastrar($usuario);

if ($resultado) {
  $retorno = array('codigo' => 1, 'mensagem' => 'Cadastrado com sucesso!');
    echo json_encode($retorno);
    exit();
}else {
     $retorno = array('codigo' => 0, 'mensagem' => 'Já existe um usuario cadastrado com esse email!');
    echo json_encode($retorno);
    exit();
}

?>

