--CRIAÇÃO DAS TABELAS USUÁRIOS E PRODUTOS
create table USUARIOS (
	ID integer auto_increment primary key,
	NOME varchar(255),
	EMAIL varchar(255),
	SENHA varchar(255)
);

create table PRODUTOS (
	ID integer auto_increment primary key,
	NOME varchar(255),
	descricao text,
	preco decimal(10,2),
	usuario_id integer
);

--Inserção de produtos
insert into USUARIOS values (
	1,
	'Nome Sobrenome',
	'email@dominio.com'
	'senha_criptografada'	
);

insert into PRODUTOS values (
	1,
	'Bola de futebol',
	'Bola de futebol nova',
	100,
	1
);

insert into PRODUTOS values (
	2,
	'HD externo',
	'HD externo de 320GB usado',
	125,
	1
);

insert into PRODUTOS values (
	3,
	'Vinho',
	'Vinho suave',
	70,
	1
);