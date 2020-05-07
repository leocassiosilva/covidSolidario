
create database covidsolidario; 

USE covidsolidario;

CREATE TABLE usuario(
id_usuario serial primary key not null,
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
	id_status serial primary key not null, 
    nome varchar(50) not null
);

INSERT INTO status_doacao (nome)
VALUES ("Em andamento");

INSERT INTO status_doacao (nome)
VALUES ("Concluida");

/*Tabela doação*/
CREATE TABLE doacao (
	id_doacao serial primary key not null, 
    descricao text not null, 
    id_usuario integer,
	FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario),
    id_status integer,
	FOREIGN KEY (id_status) REFERENCES status_doacao (id_status),
    data_doacao date
);



