-- CONSULTAS O QUERIES
-- NO ES KEY SENSITIVE
-- POR BUENAS PRACTICAS Y RECOMENDACION, USAR LOS COMANDOS DE SLQ EN MAYUSCULAS.

mysql -u root -p

SHOW DATABASES

CREATE DATABASE stream

SHOW DATABASES

USE stream

CREATE TABLE personas (
    per_id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    per_nombres VARCHAR(60) NOT NULL,
    per_foto VARCHAR(100),
    per_ciudad VARCHAR(50),
    per_dni CHAR(8) NOT NULL,
    per_fecha_nac DATE NOT NULL
)

SHOW TABLES

DESC personas

INSERT INTO personas (per_nombres, per_foto, per_ciudad, per_dni, per_fecha_nac) VALUES
    ('John', 'perfil001.png', 'Lima', '12345678', '1999-12-25')

SELECT * FROM personas

SELECT per_nombres, per_fecha_nac FROM personas

INSERT INTO personas (per_nombres, per_foto, per_ciudad, per_dni, per_fecha_nac) VALUES
    ('Juan', 'perfil002.png', 'Cuzco', '11111111', '2000-11-20'),
    ('Katherine', 'perfil003.png', 'Arequipa', '22222222', '2010-10-10'),
    ('Pedro', 'perfil004.png', 'Trujillo', '33333333', '1970-01-01')

-- COMO CAMBIAR, AGREGAR O QUITAR CAMPOS A UNA TABLA

-- DANGER 💥💥💥 HACER ESTO SOLO EN MODO DESARROLLO Y NO EN PRODUCCION

DELETE FROM personas WHERE per_id = 4

INSERT INTO personas (per_nombres, per_foto, per_ciudad, per_dni, per_fecha_nac) VALUES
    ('Pedro', 'perfil004.png', 'Trujillo', '33333333', '1970-01-01')

UPDATE personas SET per_id = 4 WHERE per_id = 5

INSERT INTO personas (per_nombres, per_foto, per_ciudad, per_dni, per_fecha_nac) VALUES
    ('Sofia', 'perfil005.png', 'Ica', '44444444', '2019-01-25')

DELETE FROM personas

TRUNCATE personas

DROP TABLE personas

-----------------------------------------------------------------------
CREATE TABLE peliculas (
    peli_id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    peli_nombre VARCHAR(50) NOT NULL,
    peli_genero VARCHAR(20) NOT NULL,
    peli_fechaEstreno DATE NOT NULL,
    peli_restricciones VARCHAR(5) NOT NULL
)

INSERT INTO peliculas (peli_nombre, peli_genero, peli_fechaEstreno, peli_restricciones) VALUES
    ('Opennhaimer', 'Drama', '2023-07-21', 'PG-13'),
    ('Matrix', 'Ciencia Ficción', '1991-01-23', 'PG-13'),
    ('Titanic', 'drama', '1997-12-19', 'PG-16'),
    ('La Lista de Shindler', 'Drama', '1998-05-05', 'PG-16'),
    ('La Sociedad y la nieve', 'Suspenso', '2023-06-06', 'PG-18'),
    ('El Conjuro', 'Terror', '2010-02-02', 'PG-16')

CREATE TABLE actores (
    act_id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    act_nombres VARCHAR(50) NOT NULL,
    act_apellidos VARCHAR(50)
)

INSERT INTO actores (act_nombres, act_apellidos) VALUES
    ('Cilian', 'Murphy'),
    ('Matt', 'Daemon'),
    ('Keanu', 'Reaves'),
    ('Carrie-Anne', 'Moss'),
    ('Leonardo', 'Dicaprio'),
    ('Kate', 'Winslet'),
    ('Liam', 'Neelson'),
    ('Sigourney', 'Weaver'),
    ('Patrick', 'Wilson'),
    ('Vera', 'Farmiga')


CREATE TABLE personajes (
    per_act_id INT NOT NULL,
    per_peli_id INT NOT NULL,
    per_nombre VARCHAR(30) NOT NULL
)

INSERT INTO personajes (per_act_id, per_peli_id, per_nombre) VALUES
    (1, 1, 'Opennhaimer'),
    (2, 1, 'Gen. Lesli Groves'),
    (3, 2, 'Neo'),
    (4, 2, 'Trinity'),
    (5, 3, 'Jack'),
    (6, 3, 'Rose'),
    (7, 4, 'Oscar Shindler'),
    (8, 7, 'Ripley'),
    (9, 6, 'Ed Warren'),
    (10, 6, 'Lorraine Warren')

SHOW TABLES