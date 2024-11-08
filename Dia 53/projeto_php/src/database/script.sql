    create database projeto_php;

use projeto_php;

create table products(
id int auto_increment primary key,
name varchar(255) not null,
description text,
price decimal(10,2)
);