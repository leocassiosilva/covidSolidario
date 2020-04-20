<?php 

class Doacao {

    private $id_doacao;
    private $descricao; 
    private $status;   
    

    function getId_doacao()
    {
        return $this->id_doacao;
    }

    function getDescricao()
    {
        return $this->descricao;
    }

    function getStatus()
    {
        return $this->status;
    }
    

    function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }   

    function setId_doacao($id_doacao)
    {
        $this->id_doacao = $id_doacao;
    } 

    function setStatus($status)
    {
        $this->status = $status;
    } 
}
