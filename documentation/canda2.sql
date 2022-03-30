CREATE TABLE `producto` (
  `id_producto` integer PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `clave` varchar(20),
  `clave_sat` varchar(20),
  `nombre` varchar(200),
  `descripcion` text,
  `linea` integer,
  `modelo` varchar(20),
  `talla` varchar(20),
  `existencia` integer,
  `activo` boolean,
  `date_add` datatime,
  `date_upd` datatime
);

CREATE TABLE `empleado` (
  `id_empleado` integer PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100),
  `correo` varchar(50),
  `password` varchar(20),
  `id_tipo_empleado` integer,
  `date_add` datatime,
  `date_upd` datatime
);

CREATE TABLE `tipo_empleado` (
  `id_tipo_empleado` integer PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `tipo_empleado` varchar(50)
);

CREATE TABLE `almacen` (
  `id_almacen` integer PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `clave` varchar(20),
  `nombre` varchar(100),
  `status` varchar(20),
  `date_add` datatime,
  `date_upd` datatime
);

CREATE TABLE `producto_almacen` (
  `id_producto_almacen` integer PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `id_producto` integer,
  `id_almacen` integer
);

ALTER TABLE `producto_almacen` ADD FOREIGN KEY (`id_almacen`) REFERENCES `almacen` (`id_almacen`);

ALTER TABLE `producto_almacen` ADD FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

ALTER TABLE `empleado` ADD FOREIGN KEY (`id_tipo_empleado`) REFERENCES `tipo_empleado` (`id_tipo_empleado`);
