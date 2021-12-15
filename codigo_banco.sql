CREATE DATABASE IF NOT EXISTS estoque; 

USE estoque; 

CREATE TABLE IF NOT EXISTS livros (
id_livro int not null auto_increment primary key, 
titulo VARCHAR (500) NOT NULL, 
editora VARCHAR (500),
quantidade VARCHAR(500), 
data_lancamento DATE

);
