drop database if exists procuradores;
create database procuradores;
use procuradores;

create table usuario (
    dni varchar(9) unique primary key not null,
    nombre varchar (50) not null,
    pass varchar(10) not null
);

create table datos (
    img_inicio varchar(500),
    titulo_inicio varchar(50),
    txt_inicio varchar(500),
    img_nosotros varchar(500),
    titulo_nosotros varchar(50),
    txt_nosotros varchar(500),
    direccion varchar(500),
    url_direccion varchar (500),
    email varchar(500),
    telefono varchar(500),
    url_linkedin varchar(500),
    url_facebook varchar(500),
    url_instagram varchar(500)
);

create table servicios(
    id int(3) auto_increment not null primary key,
    url_imagen varchar(500),
    txt_titulo varchar(50),
    txt_texto varchar(500)
);

insert into servicios values (null,'img/servicios/servicio1.jpg','servicio1','texto servicio 1');
insert into servicios values (null,'img/servicios/servicio2.jpg','servicio2','texto servicio 2');
insert into servicios values (null,'img/servicios/servicio1.jpg','servicio3','texto servicio 3');
insert into servicios values (null,'img/servicios/servicio2.jpg','servicio4','texto servicio 4');
insert into datos values ('img/inicio/inicio.jpg','Ladron de Guevara','Procurador','img/sobre/nosotros.jpg','Sobre Nosotros','Somos un bufete consolidado, con mas de 50 años de experiencia en sevilla, con un equipo cualificado y capaz formado por los mejores y mas experimentados procuradores del colegio','Calle Barra 13, 2B, 41008, Sevilla','https://www.google.com/maps/place/Calle+Barrau,+11,+41018+Sevilla/@37.3809183,-5.9764598,18z/data=!4m5!3m4!1s0xd126e98900acda7:0xd51ed4a7ac9d6fa3!8m2!3d37.3807295!4d-5.9760695','info@ladrondeguevara.com','954656300/667931775','https://es.linkedin.com/in/raulgutierrezcecilia','https://www.facebook.com/luis.ladrondeguevara.33','https://www.instagram.com/luis_ladron/?hl=es');
insert into usuario values ('15407262E', 'Raul', '12345');
insert into usuario values ('28416124S', 'Moises', '12345');
insert into usuario values ('30225364Y', 'Luis', '12345');

select * from datos;
select * from servicios;
