/*		############# DDL - Linguagem de definição de dados #############		*/

/* Criação de base */
create schema db_curso;

/* Selecionar uma base */
use db_curso;

/* Criação da tabela curso */
create table tb_curso(
	idcurso int primary key auto_increment,
    nome varchar(150) not null
);

/* Criação da tabela endereço */
create table tb_endereco(
	idendereco int primary key auto_increment,
    rua varchar(145) not null,
    bairro varchar(145) not null
);

/* Criação da tabela aluno */
create table tb_aluno(
	idaluno int primary key auto_increment,
    matricula int not null unique,
    nome varchar(145) not null,
    endereco_id int not null,
    curso_id int not null,
    constraint fk_endereco foreign key(endereco_id) references tb_endereco(idendereco),
    constraint fk_curso foreign key(curso_id) references tb_curso(idcurso)
);

/* Criação da tabela professor */
create table tb_professor(
	idprofessor int primary key auto_increment,
    cpf varchar(14) not null,
    nome varchar(145) not null
);

/* Criação da tabela telefone */
create table tb_telefone(
	idtelefone int primary key auto_increment,
    numero varchar(12) not null,
    professor_id int not null,
    constraint fk_professor foreign key(professor_id) references tb_professor(idprofessor)
);

/* Criação da tabela disciplina */
create table tb_disciplina(
	iddisciplina int primary key auto_increment,
    descricao text not null,
    professor_id int not null,
    constraint fk_professor_d foreign key(professor_id) references tb_professor(idprofessor)
);

/* alterar estrutura da tabela disciplina */
alter table tb_disciplina add column nome varchar(150) not null after iddisciplina;
alter table tb_disciplina drop foreign key fk_professor_d;
alter table tb_disciplina drop column professor_id;

/* Criação da tabela professor_disciplina */
create table professor_disciplina(
    professor_id int not null,
    disciplina_id int not null,
    primary key(professor_id, disciplina_id),
    constraint fk_professor_disciplina foreign key(professor_id) references tb_professor(idprofessor),
    constraint fk_disciplina_professor foreign key(disciplina_id) references tb_disciplina(iddisciplina)
);

/* Criação da tabela curso_disciplina */
create table curso_disciplina(
	curso_id int not null,
    disciplina_id int not null,
    primary key(curso_id, disciplina_id),
    constraint fk_curso_dis foreign key(curso_id) references tb_curso(idcurso),
    constraint fk_disciplina_cur foreign key(disciplina_id) references tb_disciplina(iddisciplina)
);

/* Comando para visualizar a descrição da tabela */
desc tb_curso;


/* Criação da tabela login */
create table login(
    idlogin int primary key auto_increment,
    username varchar(20) not null unique,
    password varchar(255) not null
);