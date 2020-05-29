CREATE DATABASE IF NOT EXISTS db_curso_web;
USE db_curso_web;

CREATE TABLE IF NOT EXISTS cursos(
	id_curso      INT NOT NULL PRIMARY KEY,
    imagem_curso  VARCHAR(100) NOT NULL, 
    nome_curso    CHAR(50) NOT NULL,
    resumo        TEXT NULL,
    data_cadastro DATETIME NOT NULL,
    ativo         BOOLEAN DEFAULT TRUE,
    investimento  FLOAT(5,2)
);

CREATE TABLE IF NOT EXISTS tb_alunos (
  id_aluno int,
  nome varchar(255) default NULL,
  idade int default NULL,
  interesse varchar(255) default NULL,
  email varchar(255) default NULL,
  estado varchar(255) default NULL
);

INSERT INTO `tb_alunos` (`id_aluno`,`nome`,`idade`,`interesse`,`email`,`estado`) VALUES (1,"Jorden",47,"Esporte","vel.mauris.Integer@nec.net","DF"),(2,"Lacey",59,"Jogos","ligula.eu.enim@egetlaoreetposuere.com","SC"),(3,"Lillith",48,"Saúde","Curabitur@atvelitCras.org","MA"),(4,"Zephania",63,"Saúde","erat.vitae@loremtristiquealiquet.net","RS"),(5,"Scarlett",95,"Informática","facilisis.Suspendisse.commodo@placeratCrasdictum.org","MS"),(6,"Nash",39,"Música","Aliquam@Maurisquisturpis.org","BA"),(7,"Indigo",62,"Informática","mus.Proin@laoreet.co.uk","GO"),(8,"Bernard",77,"Esporte","ut@Craspellentesque.net","PA"),(9,"Cheyenne",78,"Música","vel.pede@liberoduinec.co.uk","PR"),(10,"Nerea",88,"Música","non@facilisisvitae.edu","PB"),(11,"Lucius",57,"Esporte","eu.erat@interdum.ca","PE"),(12,"Fallon",38,"Saúde","risus@Etiamimperdietdictum.net","MT"),(13,"Steven",35,"Música","tellus@netus.org","CE"),(14,"Paul",37,"Música","sollicitudin.adipiscing@magnaCras.edu","GO"),(15,"Bradley",31,"Música","massa.Vestibulum@vitaesemperegestas.com","AP"),(16,"Jeanette",46,"Informática","vitae@accumsannequeet.co.uk","MG"),(17,"Craig",40,"Informática","magna.et.ipsum@tellusid.edu","MS"),(18,"Maia",94,"Esporte","ac@tempusnon.co.uk","PB"),(19,"Harriet",16,"Jogos","ante.ipsum@maurissitamet.com","AL"),(20,"Finn",99,"Informática","metus.vitae@vitaerisusDuis.com","MT"),(21,"Rafael",71,"Esporte","adipiscing.elit.Etiam@vel.edu","MG"),(22,"Cynthia",85,"Esporte","Donec.nibh.Quisque@Sed.org","RN"),(23,"Evelyn",13,"Informática","lacus.Aliquam.rutrum@etrutrumeu.edu","MA"),(24,"Sybil",39,"Saúde","semper@nuncsed.com","ES"),(25,"Uriel",10,"Esporte","semper.pretium.neque@eumetusIn.ca","PB");
INSERT INTO `tb_alunos` (`id_aluno`,`nome`,`idade`,`interesse`,`email`,`estado`) VALUES (26,"Dakota",99,"Esporte","ipsum@etrutrumnon.co.uk","PB"),(27,"Stewart",31,"Saúde","natoque.penatibus.et@inhendrerit.org","CE"),(28,"Cruz",96,"Saúde","Cum.sociis.natoque@elementumloremut.org","RS"),(29,"Kadeem",57,"Informática","consectetuer@faucibusleoin.net","MS"),(30,"Wyatt",36,"Música","feugiat.non@dolorsitamet.net","SC"),(31,"Griffith",28,"Jogos","Lorem@elementumsem.com","RO"),(32,"Yvette",39,"Saúde","mauris@dignissim.com","RO"),(33,"Burton",14,"Esporte","leo.elementum.sem@arcuVestibulumante.edu","SC"),(34,"Tatum",4,"Saúde","eget.lacus@nequeInornare.com","PA"),(35,"Graham",88,"Informática","ac@necurna.com","ES"),(36,"Aretha",37,"Esporte","malesuada.augue@Nunc.com","ES"),(37,"Sloane",5,"Saúde","parturient@purusMaecenaslibero.net","CE"),(38,"Uriel",81,"Saúde","Praesent.interdum@enimnon.net","AL");

select * from tb_alunos 
where id_aluno > 10 and id_aluno < 40;

select idade from tb_alunos
where estado = 'DF';

select * from tb_alunos
where idade < 19;

select * from tb_alunos
where idade < 50 and idade > 18;

select idade from tb_alunos
where id_aluno < 50;