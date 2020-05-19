<?php


session_start();




require("../model/Usuario.php");


require("../dao/loginDAO.php");



$loginDAO = new loginDAO();


$email = $_POST["email"];
$senha = $_POST["senha"];



//Criando um usuario 
$usuario = new Usuario(); 

//Verificar o email
if (empty($email)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Preencha seu e-mail!');
	echo json_encode($retorno);
	exit();
}


if (empty($senha)) {
	$retorno = array('codigo' => 0, 'mensagem' => 'Preencha sua senha!');
	echo json_encode($retorno);
	exit();
}

/*Usuario*/
$usuario->setEmail($email);
$usuario->setSenha($senha);


$resultado = $loginDAO->login($usuario);


/*Serve para verificar se o usuario foi logado ou não.*/
if(!empty($resultado)){
	$retorno = array('codigo' => 1, 'mensagem' => 'Logado com sucesso!');
	echo json_encode($retorno);
}else {
	$retorno = array('codigo' => 0, 'mensagem' => 'E-mail e/ou senha incorreto(s)!');
	echo json_encode($retorno);
}
?>