drop database procuradores;
create database if not exists procuradores;
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

insert into servicios values (null,'img/servicios/servicio1.jpg','servicio1','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor scelerisque commodo. Donec molestie purus a ipsum vestibulum ultricies. Integer sed commodo ex. Etiam diam eros, tristique convallis suscipit sit amet, cursus vitae augue. Ut quis tincidunt leo. Nullam et justo at nunc luctus rhoncus ut ac elit. In pulvinar metus at congue congue. Nam tincidunt nisi in dolor dapibus, sit amet fringilla magna pulvinar. Sed ullamcorper sollicitudin porta. Ut nec velit ut nisl cursus sodal');
insert into servicios values (null,'img/servicios/servicio2.jpg','servicio2','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor scelerisque commodo. Donec molestie purus a ipsum vestibulum ultricies. Integer sed commodo ex. Etiam diam eros, tristique convallis suscipit sit amet, cursus vitae augue. Ut quis tincidunt leo. Nullam et justo at nunc luctus rhoncus ut ac elit. In pulvinar metus at congue congue. Nam tincidunt nisi in dolor dapibus, sit amet fringilla magna pulvinar. Sed ullamcorper sollicitudin porta. Ut nec velit ut nisl cursus sodal');
insert into servicios values (null,'img/servicios/servicio1.jpg','servicio3','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor scelerisque commodo. Donec molestie purus a ipsum vestibulum ultricies. Integer sed commodo ex. Etiam diam eros, tristique convallis suscipit sit amet, cursus vitae augue. Ut quis tincidunt leo. Nullam et justo at nunc luctus rhoncus ut ac elit. In pulvinar metus at congue congue. Nam tincidunt nisi in dolor dapibus, sit amet fringilla magna pulvinar. Sed ullamcorper sollicitudin porta. Ut nec velit ut nisl cursus sodal');
insert into servicios values (null,'img/servicios/servicio2.jpg','servicio4','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor scelerisque commodo. Donec molestie purus a ipsum vestibulum ultricies. Integer sed commodo ex. Etiam diam eros, tristique convallis suscipit sit amet, cursus vitae augue. Ut quis tincidunt leo. Nullam et justo at nunc luctus rhoncus ut ac elit. In pulvinar metus at congue congue. Nam tincidunt nisi in dolor dapibus, sit amet fringilla magna pulvinar. Sed ullamcorper sollicitudin porta. Ut nec velit ut nisl cursus sodal');
insert into datos values ('img/inicio/inicio.jpg','Ladron de Guevara','Procurador','img/sobre/nosotros.jpg','Sobre Nosotros','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor scelerisque commodo. Donec molestie purus a ipsum vestibulum ultricies. Integer sed commodo ex. Etiam diam eros, tristique convallis suscipit sit amet, cursus vitae augue. Ut quis tincidunt leo. Nullam et justo at nunc luctus rhoncus ut ac elit. In pulvinar metus at congue congue. Nam tincidunt nisi in dolor dapibus, sit amet fringilla magna pulvinar. Sed ullamcorper sollicitudin porta. Ut nec velit ut nisl cursus sodal','Calle Barrau 13, 2B, 41008, Sevilla','https://www.google.com/maps/place/Calle+Barrau,+11,+41018+Sevilla/@37.3809183,-5.9764598,18z/data=!4m5!3m4!1s0xd126e98900acda7:0xd51ed4a7ac9d6fa3!8m2!3d37.3807295!4d-5.9760695','info@ladrondeguevara.com','954656300/667931775','https://es.linkedin.com/','https://www.facebook.com/','https://www.instagram.com/');
insert into usuario values ('15407262E', 'Raúl Gutiérrez', 'linkia2019');
insert into usuario values ('28416124S', 'Moises Meso Perez', 'linkia2019');
insert into usuario values ('30225364Y', 'Luis Ladrón de Guevara', 'linkia2019');
insert into usuario values ('11111111A', 'Diana Padilla Freixinet', 'linkia2019');
insert into usuario values ('11111111B', 'Usuario1', 'linkia2019');
insert into usuario values ('11111111C', 'Usuario2', 'linkia2019');
insert into usuario values ('11111111D', 'Usuario3', 'linkia2019');


