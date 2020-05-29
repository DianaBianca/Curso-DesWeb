CREATE DATABASE IF NOT EXISTS db_curso_web;
USE db_curso_web;

CREATE TABLE IF NOT EXISTS tb_cursos(
	id_curso      INT NOT NULL PRIMARY KEY,
    imagem_curso  VARCHAR(100) NOT NULL, 
    nome_curso    CHAR(50) NOT NULL,
    resumo        TEXT NULL,
    data_cadastro DATETIME NOT NULL,
    ativo         BOOLEAN DEFAULT TRUE,
    investimento  FLOAT(5,2)
);


ALTER TABLE cursos ADD COLUMN carga_horaria VARCHAR(5) NOT NULL ;

ALTER TABLE cursos CHANGE carga_horaria carga_hora INT(5) NULL;

ALTER TABLE cursos CHANGE carga_hora carga_horaria INT(5);

ALTER TABLE cursos  DROP carga_horaria;

DROP TABLE tb_cursos;

ALTER TABLE cursos ADD carga_horaria INT(5) NULL;