CREATE DATABASE bienes_raices

USE bienes_raices

CREATE TABLE vendedor (
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombres VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL
)

INSERT INTO vendedor (nombres, apellidos) VALUES 
    ('John', 'Smith'),
    ('Catherine', 'Doe')

CREATE TABLE propiedades (
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(50) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    imagen VARCHAR(200) NOT NULL,
    descripcion TEXT NOT NULL,
    habitaciones INT(1) UNSIGNED NOT NULL,
    estacionamiento INT(1) UNSIGNED NOT NULL,
    wc INT(1) UNSIGNED NOT NULL,
    creado DATE NOT NULL,
    vendedorId INT UNSIGNED NOT NULL,
    KEY vendedorId (vendedorId),
    CONSTRAINT vendedor_FK FOREIGN KEY (vendedorId) REFERENCES vendedor (id) ON DELETE CASCADE ON UPDATE CASCADE
)