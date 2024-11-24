Instruções para setup do database dentro do phpMyAdmin:

-Criação do database
CREATE DATABASE projetodevweb;

-Selecionando o database
USE projetodevweb;

-Criação da tabela "usuarios"
CREATE TABLE usuarios (
  id_usu INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255),
  sobrenome VARCHAR(255),
  email VARCHAR(255),
  cpf VARCHAR(255),
  celular VARCHAR(255),
  nascimento DATE
);
