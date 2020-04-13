<?php

include("Conexao.php");
require_once("../model/Produto.php");
require_once("../model/Categoria.php");
require_once("../control/Funcoes.php");
require_once("../model/Usuario.php");


class produtoDAO
{
  private $conexao;


  public function __construct()
  {
    $this->conexao = new Conexao();
  }


  public function cadastro(Produto $produto, Categoria $categoria)
  {
    $nome = $produto->getNome();
    $id_categoria = $categoria->getId_categoria();

    $sql =  "INSERT INTO produto(nome, id_categoria) VALUES (:nome, :id_categoria)";
    $query = $this->conexao->conectar()->prepare($sql);
    $query->bindValue(":nome", $nome);
    $query->bindValue(":id_categoria", $id_categoria);
    $query->execute();

    if ($query->rowCount()){
      return $this->conexao->conectar()->lastInsertId();
    }


  }

  public function cadastroDoacao(Produto $produto, Usuario $usuario, $quantidade)
  {
    $id_produto = $produto->getId_produto();
    $id_usuario = $usuario->getId_usuario();

    $sql =  "INSERT INTO usuario_produto(quantidade, id_produto, id_usuario) VALUES (:quantidade, :id_produto, :id_usuario)";
    $query = $this->conexao->conectar()->prepare($sql);
    $query->bindValue(":quantidade", $quantidade);
    $query->bindValue(":id_produto", $id_produto);
    $query->bindValue(":id_usuario", $id_usuario);
    $query->execute();

    if ($query->rowCount()){
      return 1;
    }

  }

  public function listar($cep)
  {


   $query = $this->conexao->conectar()->prepare("SELECT * FROM usuario WHERE cep = :cep");
   $query->bindValue(":cep", $cep);
   $query->execute();
   $resultado = $query->fetch(PDO::FETCH_ASSOC);

   var_dump($resultado);
 }

}
?>