CREATE DATABASE IF NOT EXISTS db_curso_web;
USE db_curso_web;

CREATE TABLE IF NOT EXISTS cursos(
	id_curso      INT NOT NULL PRIMARY KEY,
    imagem_curso  VARCHAR(100) NOT NULL, 
    nome_curso    CHAR(50) NOT NULL,
    resumo        TEXT NULL,
    data_cadastro DATETIME NOT NULL,
    ativo         BOOLEAN DEFAULT TRUE,
    investimento  FLOAT(5,2),
    carga_horaria INT(5) NULL
    
);

#alter table cursos add column carga_horaria INT(5) NULL;

CREATE TABLE IF NOT EXISTS tb_alunos (
  id_aluno int,
  nome varchar(255) default NULL,
  idade int default NULL,
  interesse varchar(255) default NULL,
  email varchar(255) default NULL,
  estado varchar(255) default NULL
);

TRUNCATE cursos;

INSERT INTO cursos(id_curso, imagem_curso, nome_curso, resumo, data_cadastro, ativo, investimento, carga_horaria) 
VALUES (1, 'curso_node.jpg', 'Curso Completo do Desenvolvedor NodeJS e MongoDB', 'Resumo do curso de Node','2020-12-22 12:32:12', true, 12.344, 1000),(2, 'curso_java.jpg', 'Curso Completo do Desenvolvedor java e java oo ','Resumo do curso de java','2020-11-22 12:00:12', true, 12.500, 100),
(3, 'curso_artee.jpg', 'Curso Completo do Desenvolvedor arte', 'Resumo do curso de arte','2010-12-22 12:32:12', true, 1.200, 500),(4, 'curso_game.jpg', 'Curso Completo do Desenvolvedor games', 'Resumo do curso de games','2015-12-10 11:02:12', true, 1.300, 800),
(5, 'curso_desenho.jpg', 'Curso Completo do Desenvolvedor desenho', 'Resumo do curso de desenho','2018-12-22 22:32:12', true, 3.100, 800),(6, 'curso_engenharia.jpg', 'Curso Completo de engenharia', 'Resumo do curso de engenharia','2011-20-22 12:32:00',false, 1.256, 500),
(7, 'geologia.jpg', 'Curso Completo do geologo', 'Resumo do curso de geologia','2010-14-22 18:02:12', true, 1.000, 500),(8, 'curso_udemy.jpg', 'Curso Completo do Desenvolvedor udemy', 'Resumo do curso de udemy','2019-12-22 12:32:12', true, 11.200, 500);


update  tb_alunos
set estado = 'SP'
where id_aluno = 10;

update tb_alunos 
set interesse = 'Saúde'
where idade >=80;

update tb_alunos
set nome = 'Anamaria', idade = 22, email = 'huhu@gmail.com'
where id_aluno = 12;

update tb_alunos
set nome = 'Anamaria', idade = 22, email = 'huhu@gmail.com'
where idade between 12 and 24 and estado ='PA';