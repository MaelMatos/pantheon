CREATE DATABASE pantheon;
use pantheon;
create table usuarios(
    id_usuario INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255),
    senha VARCHAR(255),
    tipo TEXT,
    PRIMARY KEY(id_usuario)
);
CREATE Table fichas(
    id_ficha INT NOT NULL,
    nome VARCHAR(255),
    mestre VARCHAR(255),
    campanha VARCHAR(255),
    ´FOR´ BIGINT,
    RES BIGINT,
    AG BIGINT,
    HAB BIGINT,
    ´INT´ BIGINT,
    PD BIGINT,
    CO BIGINT,
    CF BIGINT,
    OM BIGINT,
    OMMAX BIGINT,
    HP BIGINT,
    HPMAX BIGINT,
    PRIMARY KEY(id_ficha)
);

CREATE TABLE tecnica(
    id_tecnica INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255),
    tipo VARCHAR(255),
    elemento VARCHAR(255),
    ranking VARCHAR(255),
    classificacao VARCHAR(255),
    caminho VARCHAR(255),
    url VARCHAR(255),
    custo VARCHAR(255),
    dano INT,
    dado-dano VARCHAR(255),
    dado-acerto VARCHAR(255),
    PRIMARY KEY(id_tecnica)
);

CREATE Table ficha-tecnica(
    id_usuario-ficha INT NOT NULL,
    id_ficha INT,
    id_usuario INT,
    PRIMARY KEY(id_usuario-ficha)
);

CREATE table acesso(
    id_acesso INT NOT null AUTO_INCREMENT,
    id_pagina INT,
    id_usuario INT,
    PRIMARY KEY(id_acesso),
    FOREIGN KEY (id_pagina) REFERENCES paginas(id_pagina),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
);