<?php

include("Conexao.php");
require_once("../model/Usuario.php");


class usuarioDAO
{
	private $conexao;


	public function __construct()
	{
		$this->conexao = new Conexao();
	}



	function cadastro(Usuario $usuario)
	{
		$nome = $usuario->getNome();
		$celular = $usuario->getCelular();
		$email = $usuario->getEmail();
		$cep = $usuario->getCep();
		$cidade = $usuario->getCidade();
		$uf = $usuario->getUf();
		$senha = $usuario->getSenha();

		$sql =  "INSERT INTO usuario (nome, celular, email, cep, cidade, uf, senha, data_cadastro) VALUES (:nome, :celular ,:email, :cep, :cidade, :uf, :senha, NOW())";
		$query = $this->conexao->conectar()->prepare($sql);
		$query->bindValue(":nome", $nome);
		$query->bindValue(":celular", $celular);
		$query->bindValue(":email", $email);
		$query->bindValue(":cep", $cep);
		$query->bindValue(":cidade", $cidade);
		$query->bindValue(":uf", $uf);
		$query->bindValue(":senha", $senha);
		$query->execute();

	}

	function buscarUsuario($email)
	{	
		$verificar = $this->conexao->conectar()->prepare("SELECT * FROM usuario WHERE email = :email");
		$verificar->bindValue(":email", $email);
		$verificar->execute();
		$resultado = $verificar->fetchAll(PDO::FETCH_ASSOC);

		$rows = $verificar->rowCount();

		//var_dump($resultado);

		return $rows;
	}
}
?>