<?php 
session_start();

if($_SESSION["logado"]){
	$nome = $_SESSION["nome"];
	$email = $_SESSION["email"];
	$id_usuario = $_SESSION["id_usuario"];
}else{
	header("location: login.php"); 
}
?>