create database pizzariaweb;

use pizzariaweb;

create table tb_cliente(
	id int primary key auto_increment,
	nome varchar(150) not null,
	cpf varchar(11) not null,
	email varchar(150) not null unique,
	senha varchar(255) not null
);