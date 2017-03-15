use turriolkadb;

DELIMITER $$

CREATE PROCEDURE `ActualizarEmpresa`(
  IN `atId_` INT,
  IN `atHistoria_` text ,
  IN `atQuienesSomos_` text,
  IN `atMision_` text ,
  IN `atVision_` text ,
  IN `atDescripcionProductos_` text ,
  IN `atDescripcionGaleria_` text ,
  IN `atDescripcionPremios_` text ,
  IN `atDireccion_` text ,
  IN `atCorreo_` text ,
  IN `atTelefono_` int ,
  IN `atIdioma_` int 
)

Update tu_empresa Set 
atHistoria = atHistoria_,
atQuienesSomos = atQuienesSomos_,
atMision = atMision_,
atVision = atVision_,
atDescripcionProductos = atDescripcionProductos_,
atDescripcionGaleria = atDescripcionGaleria_,
atDescripcionPremios = atDescripcionPremios_,
atDireccion = atDireccion_,
atCorreo = atCorreo_,
atTelefono = atTelefono_
WHERE atIdioma = atIdioma_$$

CREATE PROCEDURE `ActualizarGaleria`(
	IN `atNombre_` TEXT, 
    IN `atDescripcion_` TEXT, 
    IN `atIdioma_` INT, 
    IN `atcodigoImagen_` INT)
Update tu_galeria Set atNombre = atNombre_, atDescripcion = atDescripcion_ where atIdioma = atIdioma_ AND atcodigoImagen = atcodigoImagen_$$


CREATE  PROCEDURE `ActualizarProducto`(
	 IN `atNombre_` TEXT,
	 IN `atDescripcionCorta_` TEXT,
	 IN `atDescripcionLarga_` TEXT, 
	 IN `atIdioma_` INT,
	 IN `atcodigoProducto_` INT, 
	 IN `atNombreImagen_` TEXT
 )
Update tu_producto Set
 atNombre = atNombre_,
 atDescripcionCorta = atDescripcionCorta_, 
 atDescripcionLarga = atDescripcionLarga_, 
 atNombreImagen = atNombreImagen_
 where atIdioma = atIdioma_ AND atcodigoProducto = atCodigoProducto_$$

CREATE PROCEDURE `EliminarImagenDeInicio`(IN `atId_` INT)
DELETE FROM `tu_imagen` WHERE atId=atId_$$

CREATE PROCEDURE `EliminarImagenGaleria`(IN `atId_` INT)
delete from tu_galeria where atcodigoImagen = atId_$$

CREATE  PROCEDURE `EliminarProducto`(IN `atId_` INT)
delete from tu_productos where atcodigoProducto=atId_$$

CREATE  PROCEDURE `IngresarImagenDeInicio`(
IN `atNombre_` TEXT)
INSERT INTO `tu_imagen` VALUES(0, atNombre_)$$

CREATE  PROCEDURE `IngresarImagenEnGaleria`(
	 IN `atNombre_` TEXT,
	 IN `atDescripcion_` TEXT,
	 IN `atIdioma_` INT, 
	 IN `atCodigoImagen_` INT
 )
INSERT INTO `tu_galeria` VALUES(
	 0,
	 atNombre_,
	 atDescripcion_,
	 atIdioma_,
	 atCodigoImagen_
)$$

CREATE  PROCEDURE `InsertarProducto`(
	IN `atId_` INT, 
	IN `atNombre_` TEXT,
	IN `atDescripcionCorta_` TEXT,
	IN `atDescripcionLarga_` TEXT,
	IN `atIdioma_` INT, 
	IN `codigoProducto_` INT,
	IN `atNombreImagen` TEXT
 )
INSERT INTO tu_producto VALUES (0, atNombre_, atDescripcionCorta_, atDescripcionLarga_, atIdioma_,codigoProducto_,atNombreImagen)$$

CREATE  PROCEDURE `ObtenerImagenesInicio`(IN `atTipo_` INT)
select * from tu_imagen where atTipo = atTipo_$$

CREATE  PROCEDURE `ObtenerTodosGaleria`(IN `atIdioma_` INT)
IF(atIdioma_ = -1)THEN
        select * from tu_galeria ;
    ELSE
       select * from tu_galeria where atIdioma = atIdioma_;
    end if$$    
CREATE  PROCEDURE `ObtenerTodosProductos`(IN `atIdioma_` INT)
IF(atIdioma_ = -1)THEN
        select * from tu_producto ;
    ELSE
       select * from la_producto where atIdioma = atIdioma_;
    end if$$
DELIMITER ;



-- call ActualizarEmpresa(0,'5','5','5','5','5','5','5','5','5',8888889,0);
-- call ActualizarGaleria('5frrf','frfr5',1,0);
--  call ActualizarProducto('4565656','7uh76h','frfr5',1,0,'dfsdgs');
--  call EliminarImagenDeInicio(0);


