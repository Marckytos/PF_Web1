-- Crear la base de datos
CREATE DATABASE TiendaCelulares;

-- usar la DB creada
USE TiendaCelulares;

-- crear la tabla "celular"
CREATE TABLE celular (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    modelo VARCHAR(50) NOT NULL,
    marca VARCHAR(50) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    color VARCHAR(45) NOT NULL,
    capacidad VARCHAR(15) NOT NULL,
    version VARCHAR(30) NOT NULL
);

-- Insertar el primer celular
INSERT INTO celular(modelo, marca, nombre, color, capacidad, version)
VALUES (`2107113SG`, `Xiaomi`, `Xiaomi 11T Pro`, `Moonlight White`, `256GB`, `Global`);

