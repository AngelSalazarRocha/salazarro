create database AdminTienda;
use admintienda;

create table Vendedor
(
id_vendedor smallint not null auto_increment,
nombre varchar(30),
ap_paterno varchar(30),
ap_materno varchar(30),
login varchar(10),
pasword varchar(32),
primary key(id_vendedor)
);

insert into vendedor values (null, 'Angel', 'Salazar', 'Rocha', 'salazarro', 'Salazar07771');

select * from vendedor;