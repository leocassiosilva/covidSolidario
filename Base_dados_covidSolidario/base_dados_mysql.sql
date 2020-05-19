
create database covidsolidario; 

	USE covidsolidario;

	CREATE TABLE usuario(
		id_usuario int auto_increment primary key not null,
		nome varchar(50) NOT NULL,
		celular varchar(50) NOT NULL,
		email varchar(50),
		cep varchar(50) NOT NULL,
		cidade varchar(50) NOT NULL,
		uf char(2) NOT NULL, 
		senha varchar (50),
		data_cadastro date
		);

	CREATE TABLE status_doacao (
		id_status int auto_increment primary key not null, 
		nome varchar(50) not null
		);

	INSERT INTO status_doacao (nome)
	VALUES ('Em andamento');

	INSERT INTO status_doacao (nome)
	VALUES ('Concluida');

	create table produto(
		id_produto int auto_increment primary key not null,
		nome varchar(100) NOT NULL
		);

	create table pedido(
		id_pedido int auto_increment primary key not null,
		id_usuario int,
		FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
		);

	create table pedido_detalhe(
		id_pedido_detalhe int auto_increment primary key not null,
		quantidade int, 
		id_produto int,
		FOREIGN KEY (id_produto) REFERENCES produto(id_produto),
		id_pedido int,
		FOREIGN KEY (id_pedido) REFERENCES pedido(id_pedido),
		id_status int,
		FOREIGN KEY (id_status) REFERENCES status_doacao(id_status)
		);



