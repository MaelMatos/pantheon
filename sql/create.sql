CREATE DATABASE pantheon;
use pantheon;
create table usuarios(
    id_usuario INT NOT null AUTO_INCREMENT,
    nome VARCHAR(255),
    senha VARCHAR(255),
    tipo TEXT,
    id_mestre INT,
    PRIMARY KEY(id_usuario)
);

CREATE TABLE paginas(
    id_pagina INT NOT null AUTO_INCREMENT,
    nome VARCHAR(255),
    PRIMARY KEY (id_pagina)
);
CREATE table acesso(
    id_acesso INT NOT null AUTO_INCREMENT,
    id_pagina INT,
    id_usuario INT,
    PRIMARY KEY(id_acesso),
    FOREIGN KEY (id_pagina) REFERENCES paginas(id_pagina),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
);