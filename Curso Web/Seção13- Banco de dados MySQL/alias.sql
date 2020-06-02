CREATE DATABASE IF NOT EXISTS projeto_web;
USE projeto_web;

create table if not exists produtos(
	id_produto int primary key not null auto_increment,
    produto varchar(200) not null,
    valor float(8,2) not null
);

create table if not exists descricoes_tecnicas(
	id_descicao integer primary key not null auto_increment,
    id_produto integer not null,
    descricao_tecnica text not null,    
    foreign key(id_produto) references produtos(id_produto)
);

INSERT INTO produtos(produto, valor) VALUES ('Notebook Dell Inspiron Ultrafino Intel Core i7, 16GB RAM e 240GB SSD', 3500.00);

INSERT INTO produtos(produto, valor) VALUES ('Smart TV LED 40" Samsung Full HD 2 HDMI 1 USB Wi-Fi Integrado', 1475.54);

INSERT INTO produtos(produto, valor) VALUES ('Smartphone LG K10 Dual Chip Android 7.0 4G Wi-Fi Câmera de 13MP', 629.99);

INSERT INTO descricoes_tecnicas(id_produto, descricao_tecnica) VALUES (1, 'O novo Inspiron Dell oferece um design elegante e tela infinita');
INSERT INTO descricoes_tecnicas(id_produto, descricao_tecnica) VALUES (2, ' A tv da Samsung Full com  Wi-Fi Integrado é perfeita para assistir Stranger Things com a família');
INSERT INTO descricoes_tecnicas(id_produto, descricao_tecnica) VALUES (3, 'O novo Inspiron Smartphone LG K10 Dual Chip é capaz de registrar lindos momentos com sua super camera de 13mp');

create table if not exists imagens(
	id_imagem int not null auto_increment primary key,
    id_produto int not null,
    foreign key(id_produto) references produtos(id_produto),
    url_imagem varchar(200) not null #endereço da imagem fica armazenada no banco
);

insert into imagens(id_produto,url_imagem) values (1,'notebook1.jpg'),(1,'notebook2.jpg'),(1,'notebook3.jpg');
insert into imagens(id_produto,url_imagem) values (2,'smarttv1.jpg'),(2,'smarttv2.jpg');
insert into imagens(id_produto,url_imagem) values (3,'smatfone1.jpg');

create table if not exists clientes(
	id_cliente int not null primary key auto_increment,
    nome varchar(100) not null,
    idade int(3) not null
);

create table if not exists pedidos(
	id_pedido int not null primary key auto_increment,
    id_cliente int not null ,
    FOREIGN KEY(id_cliente) REFERENCES clientes(id_cliente),
    data_hora datetime not null default current_timestamp
);

create table if not exists tb_pedidos_produtos(
	id_pedido int not null,
    id_produto int not null,
    foreign key(id_produto) references produtos(id_produto),
    foreign key(id_pedido) references pedidos(id_pedido)
);

select * from clientes 
left join pedidos 
on (clientes.id_cliente = pedidos.id_cliente);

select * from produtos
left join imagens
on (produtos.id_produto = imagens.id_produto);

select * from clientes
left join  pedidos 
on(clientes.id_cliente = pedidos.id_cliente);

select * from clientes
right join  pedidos 
on(clientes.id_cliente = pedidos.id_cliente);

insert into produtos(produto,valor) values('HD externo portatil',120),('carregador portatil',80),('Memória RAM',110),('Gabinete',130),('Monitor full HD ',1220);


select * from pedidos 
left join tb_pedidos_produtos
on( pedidos.id_pedido = tb_pedidos_produtos.id_pedido);

select * from pedidos 
left join tb_pedidos_produtos
on( pedidos.id_pedido = tb_pedidos_produtos.id_pedido)
left join produtos on (tb_pedidos_produtos.id_produto = produtos.id_produto);

select * from pedidos 
right join tb_pedidos_produtos
on( pedidos.id_pedido = tb_pedidos_produtos.id_pedido)
left join produtos on (tb_pedidos_produtos.id_produto = produtos.id_produto);
 
select * from pedidos as pe
inner join tb_pedidos_produtos as pp
on( pe.id_pedido = pp.id_pedido)
left join produtos as pr on (pp.id_produto = pr.id_produto);

select * from pedidos 
left join tb_pedidos_produtos
on( pedidos.id_pedido = tb_pedidos_produtos.id_pedido);

select * from pedidos as p
inner join tb_pedidos_produtos as pp
on( p.id_pedido = pp.id_pedido)
inner join produtos as pr on (pp.id_produto = pr.id_produto);
