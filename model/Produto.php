<?php 

class Produto {
    private $id_produto;
    private $nome;
    private $quantidade; 
    private $id_categoria; 
    private $id_usuario;
    

    function getId_produto()
    {
        return $this->id_usuario;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getQuantidade()
    {
        return $this->quantidade;
    }

    function getId_usuario()
    {
        return $this->id_usuario;
    }

 

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    function setId_categoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;
    }

    function setId_usuario($id_categoria)
    {
        $this->id_usuario = $id_usuario;
    }
}
