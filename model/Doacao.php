<?php 

class Doacao {

    private $id_doacao;
    private $descricao;    
    

    function getId_doacao()
    {
        return $this->id_produto;
    }

    function getDescricao()
    {
        return $this->descricao;
    }
    

    function setDescricao($descricao)
    {
        $this->descricao= $descricao;
    }   

    function setId_doacao($id_doacao)
    {
        $this->id_doacao= $id_doacao;
    } 
}
