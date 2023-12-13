CREATE DATABASE barba_bigode;

USE barba_bigode;

CREATE TABLE servico
(
	idServiço INT PRIMARY KEY AUTO_INCREMENT ,
	descricao VARCHAR(50) NOT NULL,
	preco FLOAT
)

CREATE TABLE filial
(
	idFilial INT PRIMARY KEY AUTO_INCREMENT,
	descricao varchar(50) NOT NULL,
	localizacao VARCHAR(50) NOT NULL,
	responsavel VARCHAR(50) NOT NULL
)

CREATE TABLE atendimento
(
	idAtendiemnto INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	idServiço INT FOREIGN KEY (servico),
	idFilial INT FOREIGN KEY (filial),
	dataAtendimento DATE NOT NULL,
	horarioPreferencial VARCHAR(20)
)