
create database covidsolidario; 

USE covidsolidario;

CREATE TABLE usuario(
id_usuario int(4) AUTO_INCREMENT primary key,
nome varchar(50) NOT NULL,
celular varchar(50) NOT NULL,
email varchar(50),
cep varchar(50) NOT NULL,
cidade varchar(50) NOT NULL,
uf char(2) NOT NULL, 
senha varchar (50),
data_cadastro date
);
CREATE TABLE categoria (
	id_categoria int (4) auto_increment primary key, 
    nome varchar (50) NOT NULL
);

INSERT INTO categoria (nome)
VALUES ("Alimento Infantil");
INSERT INTO categoria (nome)
VALUES ("Leite e Derivados");
INSERT INTO categoria (nome)
VALUES ("Carne e Ovos");
INSERT INTO categoria (nome)
VALUES ("Biscoitos");
INSERT INTO categoria (nome)
VALUES ("Equipamento de proteção individual");
INSERT INTO categoria (nome)
VALUES ("Outros");


CREATE TABLE produto(
	id_produto int auto_increment primary key, 
    nome varchar(100) not null, 
	id_categoria integer(4),
	FOREIGN KEY (id_categoria) REFERENCES categoria (id_categoria)
);

CREATE TABLE usuario_produto(
	id_usuario_produto  int auto_increment primary key, 
	quantidade int not null, 
    id_produto integer,
	FOREIGN KEY (id_produto) REFERENCES produto (id_produto),
    id_usuario integer(4),
	FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario)
);