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