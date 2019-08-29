/*		############# DML - Linguagem de manipulação de dados #############		*/

/** INSERT - Comando responsável por inserir registros no banco **/

/* insert do curso PHP com banco de dados na tabela tb_curso */
insert into tb_curso(idcurso, nome) values (null, 'PHP com banco de dados');

/* insert do curso Analise e modelagem de sistemas na tabela tb_curso */
insert into tb_curso(nome) values ('Analise e modelagem de sistemas');

/* insert do curso Linguagem de Programação - Java na tabela tb_curso */
insert into tb_curso values (null, 'Linguagem de Programação - Java');

/** SELECT - Comando responsável por consultar registros no banco **/

/* select de todos cursos (selecionando os campos) da tabela tb_curso */
select idcurso, nome from tb_curso;

/* select de todos cursos (sem selecionar os campos) da tabela tb_curso */
select * from tb_curso;

/* select de todos cursos (campos especificos) da tabela tb_curso */
select nome from tb_curso;