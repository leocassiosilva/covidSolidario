<?php 

class Produto {

    private $id_produto;
    private $nome;    
    

    function getId_produto()
    {
        return $this->id_produto;
    }

    function getNome()
    {
        return $this->nome;
    }
    

    function setNome($nome)
    {
        $this->nome = $nome;
    } 

    function setId_produto($id_produto)
    {
        $this->id_produto = $id_produto;
    }   
}
