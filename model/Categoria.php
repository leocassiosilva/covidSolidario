<?php 

class Categoria {
    private $id_categoria;
    private $nome;
   
    function getId_categoria()
    {
        return $this->id_categoria;
    }

    function getNome()
    {
        return $this->nome;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function setId_categoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;
    }
}
