<?php
session_start();
require_once("../model/Usuario.php");


$usuarioDAO = new UsuarioDAO();
$nome = $_POST["nome"];
$celular = $_POST["celular"];
$email = $_POST["email"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$senha = $_POST["senha"];



$usuario = new Usuario();
$usuario->setNome($nome);
$usuario->setCelular($celular);
$usuario->setEmail($email);
$usuario->setCep($cep);
$usuario->setCidade($cidade);
$usuario->setUf($uf);
$usuario->setSenha($senha);



echo $usuario->getNome();

