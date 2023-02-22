CREATE TABLE pessoa (
    id INT AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(80) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    CONSTRAINT pk_pessoa PRIMARY KEY (id),
    CONSTRAINT un_pessoa UNIQUE KEY (nome)
);

CREATE TABLE recebimento (
    id INT AUTO_INCREMENT,
    id_pessoa INT NOT NULL,
    valor DECIMAL(10,2),
    data_rec DATE NOT NULL,
    CONSTRAINT pk_rec PRIMARY KEY (id),
    CONSTRAINT fk_pessoa FOREIGN KEY(id_pessoa) REFERENCES pessoa(id)
);

CREATE TABLE despesa (
    id INT AUTO_INCREMENT,
    id_pessoa INT NOT NULL,
    valor DECIMAL(10,2),
    data_desp DATE NOT NULL,
    CONSTRAINT pk_desp PRIMARY kEY (id),
    CONSTRAINT fk_pessoa FOREIGN KEY(id_pessoa) REFERENCES pessoa(id)
);