<?php

include("Conexao.php");
require_once("../model/Produto.php");
require_once("../model/Categoria.php");
require_once("../control/Funcoes.php");


class produtoDAO
{
  private $conexao;


  public function __construct()
  {
    $this->conexao = new Conexao();
  }


  public function verificar(Produto $produto, Categoria $categoria)
  {

    $nome = $produto->getNome();
    $id_categoria = $categoria->getId_categoria();


    $nomeSemAcento = retirarAcento($nome);
    $nomeMaiusculo = maiuscula($nomeSemAcento);

    $query = $this->conexao->conectar()->prepare("SELECT * FROM produto");
    $query->execute();
    $linha = $query->fetch(PDO::FETCH_ASSOC);

    /*Essas variaveis pegao armazenado no banco*/
    $palavra = retirarAcento($linha['nome']);
    $palavraMaiuscula = maiuscula($palavra);  

    /*Essa pega a id_categoria*/
    $cat = $linha['id_categoria'];

    $retorno = pesquisarComparar($palavraMaiuscula, $nomeMaiusculo);

    return  $palavraMaiuscula;
  }

}
?>