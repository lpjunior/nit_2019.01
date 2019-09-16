/*		############# DML - Linguagem de manipulação de dados #############		*/

/** INSERT - Comando responsável por inserir registros no banco **/

/* insert do curso PHP com banco de dados na tabela tb_curso */
insert into tb_curso(idcurso, nome) values (null, 'PHP com banco de dados');

/* insert do curso Analise e modelagem de sistemas na tabela tb_curso */
insert into tb_curso(nome) values ('Analise e modelagem de sistemas');

/* insert do curso Linguagem de Programação - Java na tabela tb_curso */
insert into tb_curso values (null, 'Linguagem de Programação - Java');

/* insert de multiplos cursos na tabela tb_curso */
insert into tb_curso(nome) values ('Linguagem de Script para Web'), ('Consulta e gerenciamento de dados'), ('Administração de servidores'), ('Desenvolvimento aplicativos híbridos');

/** SELECT - Comando responsável por consultar registros no banco **/

/* select de todos cursos (selecionando os campos) da tabela tb_curso */
select idcurso, nome from tb_curso;

/* select de todos cursos (sem selecionar os campos) da tabela tb_curso */
select * from tb_curso;

/* select de todos cursos (campos especificos) da tabela tb_curso */
select nome from tb_curso;

/* select de um elemento especifico (definindo uma condição) da tabela tb_curso */
select * from tb_curso where idcurso = 3;

/* select de elemento(s) especifico(s) da tabela tb_curso */
/* #1 - localiza a partir de um prefixo */
select * from tb_curso where nome like 'Linguagem de%';

/* #2 - localiza a partir de um sufixo */
select * from tb_curso where nome like '%java';

/* #3 - localiza valores que contenham */
select * from tb_curso where nome like '%php%';

/* #4 - localiza valores entre uma faixa */
select * from tb_curso where idcurso between 3 and 5;

/* Update de curso na tabela tb_curso */
update tb_curso set nome = 'Linguagem de Programação' where idcurso = 3;

/* Delete de curso na tabela tb_curso */
delete from tb_curso where idcurso = 2;


insert into tb_professor(nome, cpf) values ('Luis', '123.456.789-00');
insert into tb_telefone(numero, professor_id) values ('21964875646', 1);

/* Junção de tabelas */
/* Inner Join - seleção de todos os campos requeridos */
SELECT nome, cpf, numero as 'telefone' FROM tb_professor
INNER JOIN tb_telefone
ON tb_telefone.professor_id = tb_professor.idprofessor;

/** Funções no banco **/
/* limit - serve para limitar a quantidade de linhas(registros) a serem exibidas */
select * from tb_disciplina limit 3;

/* count - serve para contar */
select count(*) from tb_disciplina;

/* ordenação */
select * from tb_disciplina order by nome asc;
select * from tb_disciplina order by nome desc;

/* distinção */
select distinct descricao from tb_disciplina order by nome asc;

/* Md5 - criptografia. Muito utilizado para senhas simples */
select md5('senha@123'); -- ada3c39413b4f6284c8301257812190e

/* Inserção na tabela login */
insert into login(username, password) values ('admin', md5('Senha@123'));
