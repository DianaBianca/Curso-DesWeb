use db_curso_web;

#1) Selecione todos os clientes com idade igual ou superior a 29. Os registros devem ser ordenados
# de forma ascendente pela idade.
select * from tb_alunos 
where idade >= 29 
order by idade asc;

#realizar a inclusão das colunas abaixo na tabela tb_clientes: 

#• Adicine a coluna “sexo” do tipo string com tamanho fixo de 1 caractere. 
#Coluna não pode ser vazia na inserção. 

alter table tb_alunos add column sexo char(1) not null;

#• Adicione a coluna “endereço” do tipo string com tamanho variado de até 150 caracteres. 
#Coluna pode ser vazia na inserção.

alter table tb_alunos add column endereco varchar(150);

#3) Efetue um update em tb_clientes dos registros de id_cliente igual a 1, 2, 3, 6 e 7, atualizando o sexo para “M”. 
#Utilize a instrução IN para este fim.

INSERT INTO `tb_alunos` (`id_aluno`,`nome`,`idade`,`interesse`,`email`,`estado`,`sexo`,`endereco`) VALUES (100,"Diana",47,"Esporte","didi.Integer@nec.net","DF","F","rua dos alfeneiros"),(121,"Jaoa",59,"Jogos","ligula.eu.enim@egetlaoreetposuere.com","SC","m","rua dos alfeneiros 99"),(102,"Lillith",48,"Saúde","Curabitur@atvelitCras.org","MA","F","rua dos alfeneiros90"),(104,"Zephania",63,"Saúde","erat.vitae@loremtristiquealiquet.net","RS","M","rua dos alfeneiros");

update table tb_alunos

 