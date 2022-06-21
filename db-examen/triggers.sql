ALTER TABLE `tienda`.`fabricante` 
ADD COLUMN `fecha` DATETIME NULL DEFAULT CURRENT_TIMESTAMP AFTER `accion`,
CHANGE COLUMN `codigo` `id` INT NOT NULL ,
CHANGE COLUMN `nombre` `accion` VARCHAR(500) NULL DEFAULT NULL , RENAME TO  `tienda`.`log_fabricante` ;
