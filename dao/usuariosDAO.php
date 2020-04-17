<?php

include("Conexao.php");
require_once("../model/Usuario.php");


class usuariosDAO
{
	private $conexao;


	public function __construct()
	{
		$this->conexao = new Conexao();
	}


	public function cadastrar(Usuario $usuario){


		$nome = $usuario->getNome();
		$celular = $usuario->getCelular();
		$email = $usuario->getEmail();
		$cep = $usuario->getCep();
		$cidade = $usuario->getCidade();
		$uf = $usuario->getUf();
		$senha = $usuario->getSenha();

		$sql = $this->conexao->conectar()->prepare("SELECT * FROM usuario WHERE email = :email");
		$sql->bindValue(":email", $email);
		$sql->execute();


		if($sql->rowCount() > 0){
			return false;
		}else{
                // não existe, cadastrar
			$sql1 =  "INSERT INTO usuario (nome, celular, email, cep, cidade, uf, senha, data_cadastro) VALUES (:nome, :celular ,:email, :cep, :cidade, :uf, :senha, NOW())";
			$query = $this->conexao->conectar()->prepare($sql1);
			$query->bindValue(":nome", $nome);
			$query->bindValue(":celular", $celular);
			$query->bindValue(":email", $email);
			$query->bindValue(":cep", $cep);
			$query->bindValue(":cidade", $cidade);
			$query->bindValue(":uf", $uf);
			$query->bindValue(":senha", $senha);
			$query->execute();
			return true;
		}

	}
}
?>