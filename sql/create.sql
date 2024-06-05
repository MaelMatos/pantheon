CREATE DATABASE pantheon;
create table usuarios(
    id_usuario INT NOT null AUTO_INCREMENT,
    nome VARCHAR(255),
    senha VARCHAR(255),
    PRIMARY KEY(id_usuario)
);

CREATE table acesso(
    id_acesso INT NOT null AUTO_INCREMENT,
    id_pagina INT,
    id_usuario INT,
    PRIMARY KEY(id_acesso)
)