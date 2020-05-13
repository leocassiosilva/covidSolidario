<?php
//CRIANDO A CLASSE DE CONEXAO
class Conexao{
	//ATRIBUTO PRIVADOS
	private $usuario = "zvlsiayfrfzzkt";
	private $senha= "354338005bdc6ca480269a1d35e3752a80e810ab5ba48d7aa7a2c89b6bbfa2e8";
	private $banco= "das5ht4878dqo6";
	private $servidor = "ec2-50-17-21-170.compute-1.amazonaws.com";
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