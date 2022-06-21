USE `tienda`;
DROP procedure IF EXISTS `sp_insertarFabricante`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_insertarFabricante (
in nombreI varchar (100)
)
BEGIN
INSERT INTO fabricante (nombre) VALUE (nombreI);
END$$

DELIMITER ;

////////////////////////////////////////////////////

USE `tienda`;
DROP procedure IF EXISTS `sp_insertarProducto`;

USE `tienda`;
DROP procedure IF EXISTS `tienda`.`sp_insertarProducto`;
;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_insertarProducto(
in nomProductoI varchar (100), 
in costoProductoI double,
in codigoFabricanteI int
)
BEGIN
INSERT INTO producto (nombre, precio, codigo_fabricante) 
        VALUE (nomProductoI, costoProductoI, codigoFabricanteI);
END$$

DELIMITER ;
;

///////////////////////////////////////////////////


USE `tienda`;
DROP procedure IF EXISTS `tienda`.`sp_mostrarFabricante`;
;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_mostrarFabricante()
BEGIN
SELECT * FROM fabricante;
END$$

DELIMITER ;
;

///////////////////////////////////////////////

USE `tienda`;
DROP procedure IF EXISTS `sp_mostrarProducto`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_mostrarProducto ()
BEGIN
SELECT producto.codigo, producto.nombre, producto.precio, fabricante.nombre AS fabricante
      FROM producto
      INNER JOIN fabricante
      ON producto.codigo_fabricante = fabricante.codigo ORDER BY producto.codigo ASC;
END$$

DELIMITER ;

/////////////////////////////////////////

USE `tienda`;
DROP procedure IF EXISTS `sp_eliminarFabricante`;

USE `tienda`;
DROP procedure IF EXISTS `tienda`.`sp_eliminarFabricante`;
;

DELIMITER $$
USE `tienda`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminarFabricante`(
in codigoD int
)
BEGIN
DELETE FROM fabricante WHERE codigo = codigoD;
END$$

DELIMITER ;
;

DELIMITER ;

////////////////////////////////////////////////


USE `tienda`;
DROP procedure IF EXISTS `tienda`.`sp_editarFabricante`;
;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_editarFabricante(
in nombreU VARCHAR (100),
in codigoU int
)
BEGIN
UPDATE fabricante SET nombre = nombreU WHERE codigo = codigoU;
END$$

DELIMITER ;
;

/////////////////////////////////////////////////////////////////////

USE `tienda`;
DROP procedure IF EXISTS `sp_eliminarUsuario`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_eliminarUsuario (
in codigoD INT)
BEGIN
DELETE FROM examen WHERE codigo=codigoD;
END$$

DELIMITER ;

/////////////////////////////////////////////////////////////////////////

USE `tienda`;
DROP procedure IF EXISTS `sp_eliminarProducto`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_eliminarProducto (
in codigoU int)
BEGIN DELETE FROM producto WHERE codigo = codigoU;
END$$

DELIMITER ;

/////////////////////////////////////////////////////

USE `tienda`;
DROP procedure IF EXISTS `sp_mostrarUsuario`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_mostrarUsuario ()
BEGIN
SELECT*FROM examen;
END$$

DELIMITER ;

////////////////////////////////////////////

USE `tienda`;
DROP procedure IF EXISTS `sp_editarUsuarios`;

USE `tienda`;
DROP procedure IF EXISTS `tienda`.`sp_editarUsuarios`;
;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_editarUsuarios(
in nombre varchar(100),
in apellidop  varchar (100),
in apellidom  varchar (100),
in tel  varchar (100),
in correo varchar (100),
in usuario varchar (100),
in contra varchar (100),
in codigo int
)
BEGIN
UPDATE examen 
SET nombre = nombre, apellidop = apellidop, apellidom = apellidop, tel = tel, correo = correo, usuario = usuario, contra = contra 
WHERE codigo = codigo;
END$$

DELIMITER ;
;

USE `tienda`;
DROP procedure IF EXISTS `sp_mostrareditarFabricante`;

////////////////////////////////////////////////////////////

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_mostrareditarFabricante (
in codigoME int
)
BEGIN
SELECT * FROM fabricante WHERE codigo = codigoME;
END$$

DELIMITER ;

////////////////////////////////////////////////////////////////

USE `tienda`;
DROP procedure IF EXISTS `sp_edicionUsuarios`;

USE `tienda`;
DROP procedure IF EXISTS `tienda`.`sp_edicionUsuarios`;
;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_edicionUsuarios(
in codigoEU int)
BEGIN
SELECT * FROM examen WHERE usuario = codigoEU;
END$$

DELIMITER ;
;





--jhbhjvhj--

USE `tienda`;
DROP procedure IF EXISTS `sp_edicionusuario2`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_edicionusuario2 (
IN idI INT 
)
BEGIN
select * FROM examen WHERE codigo = idI;

END$$

DELIMITER ;

----

USE `tienda`;
DROP procedure IF EXISTS `sp_editarusuariobueno`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_editarusuariobueno(
IN codigoI INT ,
IN nombreI VARCHAR (100) ,
IN apellidopI VARCHAR (100),
IN apellidomI VARCHAR (100),
IN telI INT ,
IN correoI VARCHAR (100),
IN usuarioI varchar (100),
IN contraI VARCHAR (100)
)
BEGIN
UPDATE examen 
SET nombre = nombreI, apellidop = apellidopI, apellidom = apellidomI, tel = telI, correo = correoI, usuario = usuarioI, contra = contraI 
WHERE codigo = codigoI;

END$$

DELIMITER ;
////////////////////////////

USE `tienda`;
DROP procedure IF EXISTS `sp_editarProducto`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_editarProducto (
in nombre VARCHAR (100),
in precio double,
in fabricante varchar (100),
in codigoEP int
)
BEGIN
UPDATE producto SET nombre = nombre, precio = precio, codigo_fabricante = fabricante  WHERE codigo = codigoEP;
END$$

DELIMITER ;

///////////////////////////////


USE `tienda`;
DROP procedure IF EXISTS `tienda`.`sp_edicionProducto`;
;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_edicionProducto(
in codigoEPP int)
BEGIN
SELECT * FROM producto WHERE codigo = codigoEPP;
END$$

DELIMITER ;
;
////////////////////////////



USE `tienda`;
DROP procedure IF EXISTS `sp_mostrarFabricante`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_mostrarFabricante(
)
BEGIN
SELECT * FROM fabricante;

END$$

DELIMITER ;

