<?php

include("Conexao.php");
require_once("../model/Produto.php");


class produtoDAO
{
  private $conexao;


  public function __construct()
  {
    $this->conexao = new Conexao();
  }


  public function cadastro(Produto $produto)
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


    if ($query->rowCount()){
      return 1;
    }
  }


  public function verificar(Usuario $usuario)
  {

    $email = $usuario->getEmail();

    $query = $this->conexao->conectar()->prepare("SELECT * FROM usuario WHERE email = :email");
    $query->bindValue(":email", $email);
    $query->execute();
    $resultado = $query->fetch(PDO::FETCH_ASSOC);

    $retorno = true;

    if(!empty($resultado)){
      return $retorno;
    } else {
      return $retorno = false;
    }

  }
}
?>