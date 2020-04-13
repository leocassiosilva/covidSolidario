<?php

include("Conexao.php");
require_once("../model/Produto.php");
require_once("../model/Categoria.php");
require_once("../model/Usuario.php");


class produtoDAO
{
  private $conexao;


  public function __construct()
  {
    $this->conexao = new Conexao();
  }


  public function verificar(Produto $produto)
  {
    $nome = $produto->getNome();
    $query = $this->conexao->conectar()->prepare("SELECT * FROM produto WHERE nome LIKE :nome");
    $query->bindValue(":nome", "%".$nome."%", PDO::PARAM_STR);
    $query->execute();
    $resultado = $query->fetch(PDO::FETCH_ASSOC);

    if (!empty($resultado)) {
      return $resultado['id_produto'];
    }else {
      return $resultado;
    }
    
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

  public function listar($value)
  {
    $cep = $value;
    $query = $this->conexao->conectar()->prepare('SELECT usuario.nome as nome_usuario, usuario.celular as celular, usuario.cep as cep, usuario.cidade as cidade, usuario.uf as uf, produto.nome as nome_produto, usuario_produto.quantidade as quantidade FROM usuario
      INNER JOIN usuario_produto
      ON(usuario.id_usuario = usuario_produto.id_usuario)
      INNER JOIN produto
      ON(produto.id_produto = usuario_produto.id_produto)
      WHERE cep = :cep');
    $query->bindValue(":cep", $cep);
    $query->execute();
    $resultado = $query->fetch(PDO::FETCH_ASSOC);

    return $resultado;
  }

}
?>