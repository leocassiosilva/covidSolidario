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
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Logado</h1>
	<?php 
	echo $email;
	?> 
	<a href="../control/logoff.php">Sair</a>
</body>
</html>