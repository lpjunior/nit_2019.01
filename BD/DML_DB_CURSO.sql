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




