create database salazarro;
use salazarro;

create table usuario
(   id_usuario smallint not null auto_increment,
    nombre varchar(40),
    primer_apellido varchar(30),
    segundo_apellido varchar(30),
    correo varchar(100),
    usuario varchar(15),
    clave varchar(100),
    rol int(11),
    primary key(id_usuario)
);

select * from usuario;

insert into usuario (nombre, primer_apellido, segundo_apellido, correo, usuario, clave, rol)
values ('Ángel', 'Salazar', 'Rocha', 'angel.rochaa46281@outlook.com', 'angel', '$2y$11$35UOTIEjgSFeUH58AzK0OOu0oPfH/jeMD6I4/lg0t3l7bUx0kjffy');
values ('Gerardo', 'Pineda', 'Zapata', 'gerardo.p@outlook.com', 'gerardo', '$2y$11$SDz6q3t00tZZnnXzIQJAqehQUOfgYsnyJOKzpLzzdrKyERFs/QgZK');
-- clave = 18100230 = $2y$11$35UOTIEjgSFeUH58AzK0OOu0oPfH/jeMD6I4/lg0t3l7bUx0kjffy
-- clave = pineda = $2y$11$SDz6q3t00tZZnnXzIQJAqehQUOfgYsnyJOKzpLzzdrKyERFs/QgZK