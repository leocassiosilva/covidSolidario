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
    $linha = $query->fetchAll(PDO::FETCH_ASSOC);

    $array = array();

    foreach($linha as $item)
    {
     $array[] = $item["nome"];
   }

   /*Retirando todos os acentos dos nomes do protudo que contem no banco e deixando as lebras em maiusculas*/
   $palavra = retirarAcento($array);
   $palavra = maiuscula1($palavra);

   $retorno = pesquisarComparar($palavra, $nomeMaiusculo);

   echo $retorno;



}

}
?>