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

CREATE TABLE IF NOT EXISTS tb_alunos (
  id_aluno int,
  nome varchar(255) default NULL,
  idade int default NULL,
  interesse varchar(255) default NULL,
  email varchar(255) default NULL,
  estado varchar(255) default NULL
);

select * from tb_alunos 
limit 23;

select * from tb_alunos
order by id_aluno desc 
limit 4;

select * from tb_alunos
order by id_aluno 
limit 4 offset 0; #retorne os registros a partir de 0

select * from tb_alunos
order by id_aluno 
limit 4 offset 5; #retorne 5 registros a partir do registro 5

select * from tb_alunos
order by id_aluno 
limit 4 offset 8; #retorne 5 registros a partir do registro 5

select * from tb_alunos
order by id_aluno 
limit 8,4; #ocultando o offset// limit x,y //onde x = offset e y= limit
