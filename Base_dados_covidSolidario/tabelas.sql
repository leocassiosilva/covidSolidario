
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

CREATE TABLE status_doacao (
	id_status int auto_increment primary key, 
    nome varchar(50) not null
);

INSERT INTO status_doacao (nome)
VALUES ("Em andamento");

INSERT INTO status_doacao (nome)
VALUES ("Concluida");

/*Tabela doação*/
CREATE TABLE doacao (
	id_doacao int auto_increment primary key, 
    descricao text not null, 
    id_usuario integer(4),
	FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario),
    id_status integer,
	FOREIGN KEY (id_status) REFERENCES status_doacao (id_status),
    data_doacao date
);



