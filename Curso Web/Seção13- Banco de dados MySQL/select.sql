CREATE DATABASE IF NOT EXISTS db_curso_web;
USE db_curso_web;

CREATE TABLE IF NOT EXISTS cursos(
	id_curso      INT NOT NULL PRIMARY KEY,
    imagem_curso  VARCHAR(100) NOT NULL, 
    nome_curso    CHAR(50) NOT NULL,
    resumo        TEXT NULL,
    data_cadastro DATETIME NOT NULL,
    ativo         BOOLEAN DEFAULT TRUE,
    investimento  FLOAT(5,2)
);

INSERT INTO cursos(id_curso,imagem_curso,nome_curso,resumo,data_cadastro,ativo,investimento) VALUES(1, 'testes','DESENVOLVIMENO.png','aqui nos ensinamos a desenvolver aplicações web','2020-12-22 12:32:12', true, 12.344);
INSERT INTO cursos(id_curso,imagem_curso,nome_curso,resumo,data_cadastro,ativo,investimento) VALUES(2, 'testes','DESENVOLVIMENtO.png','aqui nos ensinamos a desenvolver aplicações web','2020-15-22 16:32:12', true, 1.344);

select * from cursos;
select id_curso, nome_curso from cursos;

