CREATE DATABASE UNI;
use UNI;

CREATE TABLE usuario(
    nombre_usuario VARCHAR(20),
    primer_apellido VARCHAR(10),
    segundo_apellido VARCHAR(10),
    email VARCHAR(25) UNIQUE,
    ciudad VARCHAR(30),
	edad INT NOT NULL,
    contrasena VARCHAR(12),
    PRIMARY KEY (id_cliente)
	);