CREATE DATABASE IF NOT EXISTS projeto_web;
USE projeto_web;

create table if not exists tb_produtos(
	id_produto integer primary key not null auto_increment,
    produto varchar(200) not null,
    valor float(8,2) not null
);

create table if not exists descricoes_tecnicas(
	id_descicao integer primary key not null auto_increment,
    id_produto integer not null,
    descricao_tecnica text not null,    
    foreign key(id_produto) references tb_produtos(id_produto)
);

INSERT INTO tb_produtos(produto, valor) VALUES ('Notebook Dell Inspiron Ultrafino Intel Core i7, 16GB RAM e 240GB SSD', 3500.00);

INSERT INTO tb_produtos(produto, valor) VALUES ('Smart TV LED 40" Samsung Full HD 2 HDMI 1 USB Wi-Fi Integrado', 1475.54);

INSERT INTO tb_produtos(produto, valor) VALUES ('Smartphone LG K10 Dual Chip Android 7.0 4G Wi-Fi Câmera de 13MP', 629.99);

INSERT INTO descricoes_tecnicas(id_produto, descricao_tecnica) VALUES (1, 'O novo Inspiron Dell oferece um design elegante e tela infinita');
INSERT INTO descricoes_tecnicas(id_produto, descricao_tecnica) VALUES (2, ' A tv da Samsung Full com  Wi-Fi Integrado é perfeita para assistir Stranger Things com a família');
INSERT INTO descricoes_tecnicas(id_produto, descricao_tecnica) VALUES (3, 'O novo Inspiron Smartphone LG K10 Dual Chip é capaz de registrar lindos momentos com sua super camera de 13mp');

create table imagens(
	id_imagem int not null auto_increment primary key,
    id_produto int not null,
    foreign key(id_produto) references tb_produtos(id_produto),
    url_imagem varchar(200) not null #endereço da imagem fica armazenada no banco
);

insert into imagens(id_produto,url_imagem) values (1,'notebook1.jpg'),(1,'notebook2.jpg'),(1,'notebook3.jpg');
insert into imagens(id_produto,url_imagem) values (2,'smarttv1.jpg'),(2,'smarttv2.jpg');
insert into imagens(id_produto,url_imagem) values (3,'smatfone1.jpg');

create table tb_clientes(
	id_cliente int not null primary key auto_increment,
    nome varchar(100) not null,
    idade int(3) not null
);

create table tb_pedidos(
	id_pedido int not null primary key auto_increment,
    id_cliente int not null,
    data_hora datetime not null default current_timestamp,
    foreign key(id_cliente) references tb_clientes(id_clientes)
);


create table 

