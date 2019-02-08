
-- Criação do banco de dados.
CREATE DATABASE IF NOT EXISTS MEUBANCO;

USE MEUBANCO;

-- Criando a tabela "usuario".
CREATE TABLE IF NOT EXISTS usuario (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(150) NOT NULL,
login VARCHAR(30) NOT NULL UNIQUE,
senha VARCHAR(20) NOT NULL UNIQUE,
cpf CHAR(11) NOT NULL UNIQUE,
nomePai VARCHAR(150) NOT NULL,
nomeMae VARCHAR(150) NOT NULL,
aniversario VARCHAR(10));

-- Inserindos dados na tablela "usuario".
INSERT INTO usuario (nome,login,senha,cpf,nomePai,nomeMae,aniversario) VALUES(
'Eduardo José Ferreira',
'eduardo123',
'12345',
'12345678901',
'Eduarda Pai Ferreira',
'Eduardo Mae Ferreira',
'23/08/1997');