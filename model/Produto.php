<?php 

class Produto {

    private $id_produto;
    private $nome;
    private $quantidade; 
    
    

    function getId_produto()
    {
        return $this->id_produto;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getQuantidade()
    {
        return $this->quantidade;
    }

    

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

  

}
