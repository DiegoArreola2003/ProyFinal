CREATE DATABASE UNI;
use UNI;

CREATE TABLE usuario(
    Nombre VARCHAR(20),
    Primer_apellido VARCHAR(10),
    Segundo_apellido VARCHAR(10),
    Email VARCHAR(25) UNIQUE,
    Ciudad VARCHAR(30),
	Edad INT NOT NULL,
    Contrasena VARCHAR(12),
    PRIMARY KEY (id_cliente)
	);