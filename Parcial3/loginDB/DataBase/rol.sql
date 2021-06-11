use salazarro;
create table rol(
    id_rol smallint not null auto_increment,
    nombre_tendero varchar(40),
    tipo int(10),
    descripcion varchar(300),
    primary key(id_rol)
);
insert into rol (nombre_tendero, tipo, descripcion)
values ('angel', 1, 'Socio mayoritario');
/*2 Gerente en turno, 3 Administrador, 
4 Cajero - varios
5 Carnes y atencion a clientes - varios*/