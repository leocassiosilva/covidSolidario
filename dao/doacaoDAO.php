<?php

include("Conexao.php");
require_once("../model/Doacao.php");


class doacaoDAO
{
	private $conexao;


	public function __construct()
	{
		$this->conexao = new Conexao();
	}


	public function cadastrar(Usuario $usuario, Doacao $doacao){

		$id_usuario = $usuario->getId_usuario();
		$descricao = $doacao->getDescricao();
		$id_status = 1;

		$sql =  "INSERT INTO doacao (descricao, id_usuario, id_status, data_doacao) VALUES (:descricao, :id_usuario, :id_status , NOW())";
		$query = $this->conexao->conectar()->prepare($sql);
		$query->bindValue(":descricao", $descricao);
		$query->bindValue(":id_usuario", $id_usuario);
		$query->bindValue(":id_status", $id_status);
		$query->execute();
		
		return true;
	}


	public function listar($value)
	{
		$cep = $value;
		$query = $this->conexao->conectar()->prepare('SELECT usuario.nome as nome_usuario, usuario.celular as celular, usuario.cep as cep, usuario.cidade as cidade, usuario.uf as uf, doacao.descricao as descricao FROM usuario 
			INNER JOIN doacao 
			ON (usuario.id_usuario = doacao.id_usuario)
			WHERE cep = :cep');
		$query->bindValue(":cep", $cep);
		$query->execute();
		$resultado = $query->fetchAll(PDO::FETCH_ASSOC);

		return $resultado;
	}

}
?>