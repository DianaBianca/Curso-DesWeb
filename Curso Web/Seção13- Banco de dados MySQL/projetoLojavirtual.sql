CREATE DATABASE IF NOT EXISTS projeto_web;
USE projeto_web;

create table tb_produtos(
	id_produto integer primary key not null auto_increment,
    produto varchar(200) not null,
    valor float(8,2) not null
);


create table descricoes_tecnicas(
	id_descicao integer primary key not null,
    id_produto integer not null,
    descricao_tecnica text not null,    
    
);