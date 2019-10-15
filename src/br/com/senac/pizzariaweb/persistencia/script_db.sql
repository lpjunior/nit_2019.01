create database pizzariaweb;

alter schema pizzariaweb  default character set utf8 default collate utf8_general_ci;

use pizzariaweb;

create table tb_cliente(
	id int primary key auto_increment,
	nome varchar(150) not null,
	cpf varchar(11) not null,
	email varchar(150) not null unique,
	senha varchar(255) not null
);

create table tb_funcionario(
	id int primary key auto_increment,
	matricula int not null unique,
	nome varchar(150) not null,
	cpf varchar(11) not null,
	salario double not null
);