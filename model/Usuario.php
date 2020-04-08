<?php 

class Usuario {
    private $id_usuario;
    private $nome;
    private $celular; 
    private $email;
    private $cep;
    private $cidade;
    private $uf;
    private $senha;

    function getId_usuario()
    {
        return $this->id_usuario;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getCelular()
    {
        return $this->celular;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getCep()
    {
        return $this->cep;
    }

    function getCidade()
    {
        return $this->cidade;
    }

    function getUf()
    {
        return $this->uf;
    }

    function getSenha()
    {
        return $this->senha;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function setCelular($celular)
    {
        $this->celular = $celular;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function setCep($cep)
    {
        $this->cep = $cep;
    }

    function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    function setUf($uf)
    {
        $this->uf = $uf;
    }

    function setSenha($senha)
    {
        $this->senha = md5($senha);
    }
}
