-- Validar si esta la DB
DROP SCHEMA IF EXISTS `registros`;
-- crear la DB
CREATE SCHEMA  IF NOT EXISTS `registros` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;

USE `registros`;
-- Crear una tabla 
CREATE TABLE `cliente`(
    `id_usuario` int auto_increment primary key not null,
    `nombre_usuario` text not null,
    `direccion` text not null,
    `telefono` varchar(10) not null,
    `email` text not null,
    `password` varchar(10) not null,
    `fecha_registro` datetime not null default current_timestamp
);


SELECT * FROM cliente;


-- Añadimos registros
INSERT INTO `registros`.`cliente` (`nombre_usuario`, `direccion`, `telefono`, `email`, `password`) VALUES ('Erick', 'calle 35 colonia san agustin', '5546789101', 'erick1234@gmail.com', '123456');
INSERT INTO `registros`.`cliente` (`nombre_usuario`, `direccion`, `telefono`, `email`, `password`) VALUES ('Vanessa', 'calle 43 colonia nueva loma', '5567123409', 'vanessa78@gmail.com', '234567');
INSERT INTO `registros`.`cliente` (`nombre_usuario`, `direccion`, `telefono`, `email`, `password`) VALUES ('Bibiana', 'calle 13 colonia san diego', '5512301989', 'bibi23@gmail.com', '345678');
INSERT INTO `registros`.`cliente` (`nombre_usuario`, `direccion`, `telefono`, `email`, `password`) VALUES ('John', 'calle 709 colonia nueva atzacoalco', '5543112278', 'john456@gmail.com', '456789');
INSERT INTO `registros`.`cliente` (`nombre_usuario`, `direccion`, `telefono`, `email`, `password`) VALUES ('Monica', 'calle 311 colonia nueva atzacoalco', '5678912490', 'moni_vazques12@gmail.com', '567890');
INSERT INTO `registros`.`cliente` (`nombre_usuario`, `direccion`, `telefono`, `email`, `password`) VALUES ('Scott', 'calle 215 colonia nueva alianza ', '5678909912', 'scott_leon4@gmail.com', '678901');

