-- ⚡⚡ LLAVES PRIMARIAS Y FORANEAS ⚡⚡
-- NOTA lo mas importante es que ayuda a la performance de las consultas o queries
-- ALERTA para relacionar tablas, los campos en comun deben ser del mismo tipo de valor

-- al hacer relaciones, vienen consigo restricciones.
-- RESTRICT
    -- Por defecto, impide realizar modificaciones que atenten la seguridad referencial de las tablas
    -- no permite borrar o actualizar datos

-- CASCADE
    -- al actualizar o borrar los datos de referencia, tambien se actualiza o se borra el dato de la tabla dependiente
    
-- SET NULL
    -- Se establece campos nulos en la tabla dependiente

-- NO ACTION
    -- no hace nada

-- DANGER esto hacerlo al momento de hacer la estructuras de las tablas. mucho antes de ingresar datos
ALTER TABLE peliculas
    ADD CONSTRAINT fk_direId FOREIGN KEY (peli_dire_id)
    REFERENCES directores (dire_id)
    ON DELETE RESTRICT ON UPDATE RESTRICT

DELETE FROM directores WHERE dire_id = 1

DELETE FROM peliculas WHERE peli_id = 9

ALTER TABLE peliculas DROP CONSTRAINT fk_direId

ALTER TABLE peliculas
    ADD CONSTRAINT fk_direId FOREIGN KEY (peli_dire_id)
    REFERENCES directores (dire_id)
    ON DELETE CASCADE ON UPDATE CASCADE