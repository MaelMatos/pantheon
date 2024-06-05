CREATE DATABASE pantheon;
create table usuarios(
    id_usuario INT NOT null AUTO_INCREMENT,
    nome VARCHAR(255),
    senha VARCHAR(255),
    PRIMARY KEY(id_usuario)
);