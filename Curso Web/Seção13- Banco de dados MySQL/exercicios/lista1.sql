use db_curso_web;

#1) Selecione todos os clientes com idade igual ou superior a 29. Os registros devem ser ordenados
# de forma ascendente pela idade.
select * from tb_alunos 
where idade >= 29 
order by idade asc;

#realizar a inclusão das colunas abaixo na tabela tb_clientes: 

#• Adicine a coluna “sexo” do tipo string com tamanho fixo de 1 caractere. 
#Coluna não pode ser vazia na inserção. 

alter table tb_alunos add column sexo varchar(1) not null;


#• Adicione a coluna “endereço” do tipo string com tamanho variado de até 150 caracteres. 
#Coluna pode ser vazia na inserção. 

alter table


 