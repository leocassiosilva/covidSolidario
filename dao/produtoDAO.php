<?php

require_once("Conexao.php");
require_once("../model/Produto.php");
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

    //var_dump($nome);

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

  public function cadastro(Produto $produto)
  {
    $nome = $produto->getNome();

    $sql =  "INSERT INTO produto(nome) VALUES (:nome)";
    $query = $this->conexao->conectar()->prepare($sql);
    $query->bindValue(":nome", $nome);
    $query->execute();

    if ($query->rowCount()){
      return $this->conexao->conectar()->lastInsertId();
    }
  }


  public function cadastroPedido(Usuario $usuario)
  {
    $id_usuario = $usuario->getId_usuario();


    $sql =  "INSERT INTO pedido(id_usuario) VALUES (:id_usuario)";
    $query = $this->conexao->conectar()->prepare($sql);
    $query->bindValue(":id_usuario", $id_usuario);
    $query->execute();

    if ($query->rowCount()){
      return $this->conexao->conectar()->lastInsertId();
    }

  }

  public function cadastroDetalhePedido(Produto $produto, $id_pedido, $qtd)
  {
    $id_produto = $produto->getId_produto();

    $sql =  "INSERT INTO pedido_detalhe(id_pedido, id_produto, quantidade) VALUES (:id_pedido, :id_produto, :quantidade)";
    $query = $this->conexao->conectar()->prepare($sql);
    $query->bindValue(":id_pedido", $id_pedido);
    $query->bindValue(":id_produto", $id_produto);
    $query->bindValue(":quantidade", $qtd);
    $query->execute();


    $row = $query->rowCount(); 

    if($row != 0){
      return $row;
    }else {
      return $row;
    }

  }
}
?>