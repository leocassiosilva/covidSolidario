<?php
//CRIANDO A CLASSE DE CONEXAO
class Conexao{
	//ATRIBUTO PRIVADOS
	private $usuario = "nvohxwcldzkfmc";
	private $senha= "17f1eb57fbc11dbc91463ebc4716d0d9c9702548c0d531161811049a6e5c0342";
	private $banco= "d8v54a9tbsehej";
	private $servidor = "ec2-52-202-146-43.compute-1.amazonaws.com";
	private static $conexao;
    private $porta = 5432;


	//CONSTRUTOR
	public function __construct(){}
	//METODO PARA CONECTAR
	public function conectar(){
		try{
			if(is_null(self::$conexao)){
				self::$conexao = new PDO("pgsql:host=".$this->servidor.";port=".$this->porta.";   dbname=".$this->banco, $this->usuario, $this->senha);
			}
			return self::$conexao;
		}catch(PDOException $e){
			echo 'Error: '.$e->getMessage();
		}
	}
}
?>