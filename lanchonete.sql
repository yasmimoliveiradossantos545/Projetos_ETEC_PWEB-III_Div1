create database lanchonete2;
use lanchonete2;
create table usuarios
    (
        usuid int primary key auto_increment,
        usunome varchar(100),
        usulogin varchar(100),
        ususenha varchar(100),
        usulogado boolean default 0
    );

    insert into usuarios
    (usunome,usuarios,usulogin)
    VALUES
    ('Yasmim', 'yas2008', '1234'),
    ('Debora', 'dede', '4321');