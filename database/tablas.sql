drop database turriolkadb;
create database turriolkadb;
use turriolkadb;

CREATE TABLE IF NOT EXISTS `tu_empresa` (
  `atId` int NOT NULL,
  `atHistoria` text NOT NULL,
  `atQuienesSomos` text,
  `atMision` text NOT NULL,
  `atVision` text NOT NULL,
  `atDescripcionProductos` text NOT NULL,
  `atDescripcionGaleria` text NOT NULL,
  `atDescripcionPremios` text NOT NULL,
  `atDireccion` text NOT NULL,
  `atCorreo` text NOT NULL,
  `atTelefono` int NOT NULL,
  `atIdioma` int NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `tu_producto` (
  `atId` int NOT NULL,
  `atNombre` text NOT NULL,
  `atDescripcionCorta` text NOT NULL,
  `atDescripcionLarga` text NOT NULL,
  `atIdioma` int NOT NULL,
  `atcodigoProducto` int NOT NULL,
  `atNombreImagen` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
CREATE TABLE IF NOT EXISTS `tu_galeria` (
  `atId` int NOT NULL,
  `atNombre` text NOT NULL,
  `atDescripcion` text NOT NULL,
  `atIdioma` int NOT NULL,
  `atcodigoImagen` int NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `tu_imagen` (
  `atId` int NOT NULL,
  `atNombre` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `tu_titulo` (
`atId` int NOT NULL,
  `atNombre` text NOT NULL,
  `atDescripcion` text NOT NULL,
  `atIdioma` int NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `tu_premio` (
  `atId` int NOT NULL,
  `atNombre` text NOT NULL,
  `atDescripcion` text NOT NULL,
  `atAno` text NOT NULL,
  `atNombreImagen` text NOT NULL,
  `atIdioma` int NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `tu_variedad` (
  `atId` int NOT NULL,
  `atNombre` text NOT NULL,
  `atDescripcion` text NOT NULL,
  `atNombreImagen` text NOT NULL,
  `atCalidad` int NOT NULL,
  `atPotencialRendimiento` int NOT NULL,
  `atAltura` int NOT NULL,
  `atAltitud` int NOT NULL,
  `atToleranciaRoya` int NOT NULL,
  `atNematodos` int NOT NULL,
  `atAntrscnosis` int NOT NULL,
  `atAnosCosecha` int NOT NULL,
  `atRequerimientosNutricionales` int NOT NULL,
  `atTamanoFruto` int NOT NULL,
  `atColor` text NOT NULL,

  `atMaduracion` text NOT NULL,
  `atRendimientoCereza` text NOT NULL,
  `atDensidad` text NOT NULL,
  `atInformacionAdicional` text,

  `atDerechoPropiedad` text NOT NULL,
  `atObtentor` text NOT NULL,
  `atdescripcionGenetica` text NOT NULL,
  `atFamilia` text,

   `atDescripcionURL` text,
   `atURL` text,
  
  `atIdioma` int NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


ALTER TABLE `tu_variedad`
 ADD PRIMARY KEY (`atId`);

ALTER TABLE `tu_premio`
 ADD PRIMARY KEY (`atId`);

ALTER TABLE `tu_empresa`
 ADD PRIMARY KEY (`atId`);

ALTER TABLE `tu_galeria`
 ADD PRIMARY KEY (`atId`);

ALTER TABLE `tu_imagen`
 ADD PRIMARY KEY (`atId`);

ALTER TABLE `tu_producto`
 ADD PRIMARY KEY (`atId`);

ALTER TABLE `tu_titulo`
 ADD PRIMARY KEY (`atId`);

ALTER TABLE `tu_premio`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

ALTER TABLE `tu_variedad`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

ALTER TABLE `tu_empresa`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

ALTER TABLE `tu_galeria`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

ALTER TABLE `tu_imagen`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

ALTER TABLE `tu_producto`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

ALTER TABLE `tu_titulo`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

