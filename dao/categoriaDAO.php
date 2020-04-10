<?php

include("Conexao.php");
require_once("../model/Categoria.php");

class categoriaDAO
{

  private $conexao;


  public function __construct()
  {
    $this->conexao = new Conexao();
  }


  public function cat()
  {

    $query = $this->conexao->conectar()->prepare("SELECT * FROM categoria");
    $query->execute();
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
  }
}

?>
