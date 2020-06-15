CREATE TABLE tb_status (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  status varchar(25) NOT NULL
);

INSERT INTO tb_status (status) VALUES ('pendente');
INSERT INTO tb_status (status) VALUES ('realizado');

CREATE TABLE tb_tarefas (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_status int(11) NOT NULL DEFAULT '1',
  tarefa text NOT NULL,
  data_cadastrado datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
);