create database filmesdb;

use filmesdb;

create table filme (
	id int primary key auto_increment,
    nome varchar(255) not null,
    ano int,
    descricao text,
    img text
);
