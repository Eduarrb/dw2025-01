SELECT * FROM actores, personajes WHERE act_id = per_act_id

-- ⚡⚡ JOINS ⚡⚡
-- INNER JOIN, LEFT JOIN, RIGHT JOIN, FULL JOIN

-- SELECT * FROM actores INNER JOIN personajes ON id = id

SELECT * FROM actores INNER JOIN personajes ON actores.act_id = personajes.per_act_id

-- ALIAS DE TABLAS

SELECT * FROM actores a INNER JOIN personajes b ON a.act_id = b.per_act_id

SELECT a.act_nombres, b.per_nombre FROM actores a INNER JOIN personajes b ON a.act_id = b.per_act_id


---------------------------------
SELECT * FROM peliculas a LEFT JOIN personajes b ON a.peli_id = b.per_peli_id

INSERT INTO peliculas (peli_nombre, peli_genero, peli_fechaEstreno, peli_restricciones) VALUES
    ('Alien: El octavo pasajero', 'ciencia ficcion', '1990-12-12', 'PG-13'),
    ('007: Golden Eye', 'Acción', '1996-07-07', 'PG')


SELECT * FROM personajes a LEFT JOIN peliculas b ON a.per_peli_id = b.peli_id


SELECT * FROM peliculas a RIGHT JOIN personajes b ON a.peli_id = b.per_peli_id

CREATE TABLE directores (
    dire_id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    dire_nombres VARCHAR(50) NOT NULL,
    dire_apellidos VARCHAR(50) NOT NULL
)

INSERT INTO directores (dire_nombres, dire_apellidos) VALUES
    ('Christopher', 'Nolan'),
    ('Lana', 'Wachowsky'),
    ('James', 'Cameron'),
    ('Ridley', 'Scott'),
    ('Juan', 'Bayona')


ALTER TABLE peliculas ADD COLUMN peli_dire_id INT UNSIGNED AFTER peli_id

UPDATE peliculas SET peli_dire_id = 1 WHERE peli_id = 1
UPDATE peliculas SET peli_dire_id = 1 WHERE peli_id = 1
UPDATE peliculas SET peli_dire_id = 1 WHERE peli_id = 1
UPDATE peliculas SET peli_dire_id = 1 WHERE peli_id = 1
UPDATE peliculas SET peli_dire_id = 1 WHERE peli_id = 1
UPDATE peliculas SET peli_dire_id = 1 WHERE peli_id = 1