drop database if exists procuradores;
create database procuradores;
use procuradores;

create table usuario (
    dni varchar(9) unique primary key not null,
    nombre varchar (50) not null,
    pass varchar(50) not null
);

create table imagenes (
    identificador int(3) primary key auto_increment,
    titulo varchar(20),
    texto varchar(250)
);

create table textos (
    identificador int(3) primary key auto_increment,
    titulo varchar(20),
    texto varchar(250)
);
create table datos (
    identificador int(3) primary key auto_increment,
    titulo varchar(20),
    texto varchar(50)
);

insert into usuario values ('15407262E', 'raul', '12345');
insert into usuario values ('11111111A', 'moises', '12345');
insert into usuario values ('22222222B', 'luis', '12345');
insert into textos values('default', 'Sobre Notoros', 'xxx');
insert into textos values('default', 'Servicios 1', 'xxx');
insert into textos values('default', 'Servicios 2', 'xxx');
insert into datos values('default', 'Direccion', 'calle xxx');
insert into datos values('default', 'email', 'calle xxx');
insert into datos values('default', 'Telefono', 'calle xxx');

select * from datos