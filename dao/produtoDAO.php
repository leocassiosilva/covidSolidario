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
    $id_status = 1;

    $sql =  "INSERT INTO pedido_detalhe(id_pedido, id_produto, quantidade, id_status) VALUES (:id_pedido, :id_produto, :quantidade, :id_status)";
    $query = $this->conexao->conectar()->prepare($sql);
    $query->bindValue(":id_pedido", $id_pedido);
    $query->bindValue(":id_produto", $id_produto);
    $query->bindValue(":quantidade", $qtd);
    $query->bindValue(":id_status", $id_status);
    $query->execute();


    $row = $query->rowCount(); 

    if($row != 0){
      return $row;
    }else {
      return $row;
    }
  }

  public function listar($value1, $value2)
  {
   $nome = $value1;
   $cep = $value2;

   if (empty($nome)) {
    $query = $this->conexao->conectar()->prepare('SELECT  usuario.nome as nome_usuario, usuario.cidade as nome_cidade, usuario.uf as uf, produto.nome as nome_produto, pedido_detalhe.quantidade as quantidade, usuario.celular as celular FROM usuario
      INNER JOIN pedido
      ON (pedido.id_usuario = usuario.id_usuario)
      INNER JOIN pedido_detalhe
      ON (pedido_detalhe.id_pedido = pedido.id_pedido)
      INNER JOIN produto
      ON(produto.id_produto = pedido_detalhe.id_produto)
      INNER JOIN status_doacao
      ON(status_doacao.id_status = pedido_detalhe.id_status) 
      WHERE usuario.cep = :cep and status_doacao.id_status = 1');
    $query->bindValue(":cep", $cep);
    $query->execute();
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
  }else {

    $query = $this->conexao->conectar()->prepare('SELECT  usuario.nome as nome_usuario, usuario.cidade as nome_cidade, usuario.uf as uf, produto.nome as nome_produto, pedido_detalhe.quantidade as quantidade, usuario.celular as celular FROM usuario
      INNER JOIN pedido
      ON (pedido.id_usuario = usuario.id_usuario)
      INNER JOIN pedido_detalhe
      ON (pedido_detalhe.id_pedido = pedido.id_pedido)
      INNER JOIN produto
      ON(produto.id_produto = pedido_detalhe.id_produto)
      INNER JOIN status_doacao
      ON(status_doacao.id_status = pedido_detalhe.id_status) 
      WHERE usuario.cep = :cep and produto.nome LIKE :nome and status_doacao.id_status = 1');
    $query->bindValue(":cep", $cep);
    $query->bindValue(":nome", "%".$nome."%", PDO::PARAM_STR);
    $query->execute();
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
  }
  return $resultado;
}


public function listarPedidosUsuario($value)
{
  $id_usuario = $value;
  $query = $this->conexao->conectar()->prepare('SELECT  usuario.nome as nome_usuario,  produto.nome as nome_produto, pedido_detalhe.id_pedido_detalhe as id_pedido_detalhe,pedido_detalhe.quantidade as quantidade, status_doacao.nome as nome_status FROM usuario
    INNER JOIN pedido
    ON (pedido.id_usuario = usuario.id_usuario)
    INNER JOIN pedido_detalhe
    ON (pedido_detalhe.id_pedido = pedido.id_pedido)
    INNER JOIN produto
    ON(produto.id_produto = pedido_detalhe.id_produto)
    INNER JOIN status_doacao
    ON(status_doacao.id_status = pedido_detalhe.id_status) 
    WHERE usuario.id_usuario = :id_usuario');
  $query->bindValue(":id_usuario", $id_usuario);
  $query->execute();
  $resultado = $query->fetchAll(PDO::FETCH_ASSOC);

  return $resultado;
}

public function modificarStatus($id_pedido_detalhe)
{


  $query = $this->conexao->conectar()->prepare('UPDATE pedido_detalhe SET id_status = 2 
    WHERE id_pedido_detalhe = :id_pedido_detalhe');
  $query->bindValue(":id_pedido_detalhe", $id_pedido_detalhe);
  $query->execute();

  $row = $query->rowCount(); 

  if($row != 0){
    return true;
  }else {
    return false;
  }
}

public function listarPedido($value1, $value2, $value3)
{ 
  $nome = $value1;
  $cep = $value2;
  $id_usuario = $value3;

  if (empty($nome)) {
    $query = $this->conexao->conectar()->prepare('SELECT usuario.nome as nome_usuario, usuario.cidade as nome_cidade, usuario.uf as uf, produto.nome as nome_produto, pedido_detalhe.quantidade as quantidade, usuario.celular as celular FROM usuario
      INNER JOIN pedido
      ON (pedido.id_usuario = usuario.id_usuario)
      INNER JOIN pedido_detalhe
      ON (pedido_detalhe.id_pedido = pedido.id_pedido)
      INNER JOIN produto
      ON(produto.id_produto = pedido_detalhe.id_produto)
      INNER JOIN status_doacao
      ON(status_doacao.id_status = pedido_detalhe.id_status) 
      WHERE usuario.cep = :cep and status_doacao.id_status = 1 and usuario.id_usuario <> :id_usuario');
    $query->bindValue(":cep", $cep);
    $query->bindValue(":id_usuario", $id_usuario);
    $query->execute();
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
  }else {

    $query = $this->conexao->conectar()->prepare('SELECT  usuario.nome as nome_usuario, usuario.cidade as nome_cidade, usuario.uf as uf, produto.nome as nome_produto, pedido_detalhe.quantidade as quantidade, usuario.celular as celular FROM usuario
      INNER JOIN pedido
      ON (pedido.id_usuario = usuario.id_usuario)
      INNER JOIN pedido_detalhe
      ON (pedido_detalhe.id_pedido = pedido.id_pedido)
      INNER JOIN produto
      ON(produto.id_produto = pedido_detalhe.id_produto)
      INNER JOIN status_doacao
      ON(status_doacao.id_status = pedido_detalhe.id_status) 
      WHERE usuario.cep = :cep and produto.nome LIKE :nome and status_doacao.id_status = 1 and usuario.id_usuario <> :id_usuario');
    $query->bindValue(":cep", $cep);
    $query->bindValue(":nome", "%".$nome."%", PDO::PARAM_STR);
    $query->bindValue(":id_usuario", $id_usuario);
    $query->execute();
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
  }
  return $resultado;
}

}
?>