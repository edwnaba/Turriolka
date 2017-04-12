-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-04-2017 a las 23:38:28
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `turriolkadb`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarEmpresa`(
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarGaleria`(
	IN `atNombre_` TEXT, 
    IN `atDescripcion_` TEXT, 
    IN `atIdioma_` INT, 
    IN `atcodigoImagen_` INT)
Update tu_galeria Set atNombre = atNombre_, atDescripcion = atDescripcion_ where atIdioma = atIdioma_ AND atcodigoImagen = atcodigoImagen_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarPremio`(IN `nombre_` TEXT, IN `descripcion_` TEXT, IN `ano_` TEXT, IN `nombreImagen_` TEXT, IN `idioma_` INT, IN `codigoPremio_` INT)
    NO SQL
Update tu_premio Set
 atNombre = nombre_,
 atDescripcion = descripcion_, 
 atAno = ano_, 
 atNombreImagen = nombreImagen_
 where atIdioma = idioma_ AND atCodigoPremio = codigoPremio_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarProducto`(
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarImagenDeInicio`(IN `atId_` INT)
DELETE FROM `tu_imagen` WHERE atId=atId_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarImagenGaleria`(IN `atId_` INT)
delete from tu_galeria where atcodigoImagen = atId_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarPremio`(IN `atId_` INT)
    NO SQL
delete from tu_premio where atCodigoPremio=atId_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarProducto`(IN `atId_` INT)
delete from tu_producto where atcodigoProducto=atId_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `IngresarImagenDeInicio`(
IN `atNombre_` TEXT)
INSERT INTO `tu_imagen` VALUES(0, atNombre_)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `IngresarImagenEnGaleria`(
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarPremio`(IN `idPremio_` INT, IN `nombre_` TEXT, IN `descripcion_` TEXT, IN `ano_` VARCHAR(6), IN `nombreImagen_` TEXT, IN `idioma_` INT, IN `codigoPremio_` INT)
    NO SQL
INSERT INTO tu_premio VALUES (null, nombre_, descripcion_, ano_, nombreImagen_,idioma_,codigoPremio_)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarProducto`(IN `atId_` INT, IN `atNombre_` TEXT, IN `atDescripcionCorta_` TEXT, IN `atDescripcionLarga_` TEXT, IN `atIdioma_` INT, IN `codigoProducto_` INT, IN `atNombreImagen` TEXT)
INSERT INTO tu_producto VALUES (null, atNombre_, atDescripcionCorta_, atDescripcionLarga_, atIdioma_,codigoProducto_,atNombreImagen)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerImagenesInicio`(IN `atTipo_` INT)
select * from tu_imagen where atTipo = atTipo_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerTodosGaleria`(IN `atIdioma_` INT)
    NO SQL
IF(atIdioma_ = -1)THEN
        select * from tu_galeria;
    ELSE

       select * from tu_galeria where atIdioma = atIdioma_;

    end if$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerTodosPremios`(IN `atIdioma_` INT)
    NO SQL
IF(atIdioma_ = -1)THEN
        select * from tu_premio;
    ELSE

       select * from tu_premio where atIdioma = atIdioma_;

    end if$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerTodosProductos`(IN `atIdioma_` INT)
    NO SQL
IF(atIdioma_ = -1)THEN
        select * from tu_producto;
    ELSE

       select * from tu_producto where atIdioma = atIdioma_;

    end if$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tu_empresa`
--

CREATE TABLE IF NOT EXISTS `tu_empresa` (
`atId` int(11) NOT NULL,
  `atHistoria` text NOT NULL,
  `atQuienesSomos` text,
  `atMision` text NOT NULL,
  `atVision` text NOT NULL,
  `atDescripcionProductos` text NOT NULL,
  `atDescripcionGaleria` text NOT NULL,
  `atDescripcionPremios` text NOT NULL,
  `atDireccion` text NOT NULL,
  `atCorreo` text NOT NULL,
  `atTelefono` int(11) NOT NULL,
  `atIdioma` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tu_empresa`
--

INSERT INTO `tu_empresa` (`atId`, `atHistoria`, `atQuienesSomos`, `atMision`, `atVision`, `atDescripcionProductos`, `atDescripcionGaleria`, `atDescripcionPremios`, `atDireccion`, `atCorreo`, `atTelefono`, `atIdioma`) VALUES
(1, 'Publicidadesse ha insertado en el mercado audiovisual, logrando conquistar espacios en los principales medios de comunicación, nacional e internacional: periódicos, revistas, vayas, televisión, radio y más recientemente en la publicidad cinematográfica, en donde además de promocionar las películas  y piezas producidas por Capacity, crea y difunde campañas educativas sobre los derechos y habilidades de las personas con condiciones especiales.\r\nEn la actualidad, Publicidades Focus ha ampliado sus metas, encontrando un gran nicho en el ámbito editorial, para la publicación de libros, que con un lenguaje sencillo y humano, puedan informar tanto a familiares como público general en qué consisten algunas de las capacidades especiales más comunes.', 'Publicidades Focus es una agencia de publicidad, orientada a prestar una plataforma comunicacional y publicitaria a las fundaciones sin fines de lucro, dedicadas a la captación, atención e inclusión de las personas con discapacidad cognitiva, en especial a las personas con Síndrome de Down.\r\nBrazo derecho de la productora Capacity, Publicidades Focus fue creada en el año 1981, abriendo sus puertas específicamente el 24 de julio de este año, con el fin de reinvertir el dinero obtenido de los documentales y películas educativas, sobre discapacidad, obtenidas por la Capacity, a fin de sumar su grano de arena en la promoción, educación y normalización de las Personas con algún tipo de condición especial.', 'La misión de Luminarias impala S.A de C.V, es la de iluminar los hogares y los centros de trabajo de nuestros clientes, en forma suficiente, económica y con productos de la mayor calidad, ajustados a los parámetros ecológicos y siempre en beneficio del menor consumo y mayor servicio de los usuarios  finales.', 'La visión de luminarias impala, es que la tecnología llegue a todos los clientes, ajustando nuestros productos a los avances tecnológicos y cuidando del bolsillo de nuestros clientes y a la vez de la ecología, al producir luminarias de bajo consumo y larga duración.', 'Los productos de nuestra finca son procesados de manera particular ya que...', 'Poseemos diversas imáganes sobre...', 'Nuestro manera de trabajar nos ha llevado a participar en...', 'La Suiza', 'ticorromanas@yahoo.com', 888888889, 0),
(2, 'Publicidades Focus se ha insertado en el mercado audiovisual, logrando conquistar espacios en los principales medios de comunicación, nacional e internacional: periódicos, revistas, vayas, televisión, radio y más recientemente en la publicidad cinematográfica, en donde además de promocionar las películas  y piezas producidas por Capacity, crea y difunde campañas educativas sobre los derechos y habilidades de las personas con condiciones especiales.\r\nEn la actualidad, Publicidades Focus ha ampliado sus metas, encontrando un gran nicho en el ámbito editorial, para la publicación de libros, que con un lenguaje sencillo y humano, puedan informar tanto a familiares como público general en qué consisten algunas de las capacidades especiales más comunes.', 'Publicidades Focus es una agencia de publicidad, orientada a prestar una plataforma comunicacional y publicitaria a las fundaciones sin fines de lucro, dedicadas a la captación, atención e inclusión de las personas con discapacidad cognitiva, en especial a las personas con Síndrome de Down.\r\nBrazo derecho de la productora Capacity, Publicidades Focus fue creada en el año 1981, abriendo sus puertas específicamente el 24 de julio de este año, con el fin de reinvertir el dinero obtenido de los documentales y películas educativas, sobre discapacidad, obtenidas por la Capacity, a fin de sumar su grano de arena en la promoción, educación y normalización de las Personas con algún tipo de condición especial.', 'La misión de Luminarias impala S.A de C.V, es la de iluminar los hogares y los centros de trabajo de nuestros clientes, en forma suficiente, económica y con productos de la mayor calidad, ajustados a los parámetros ecológicos y siempre en beneficio del menor consumo y mayor servicio de los usuarios  finales.', 'La visión de luminarias impala, es que la tecnología llegue a todos los clientes, ajustando nuestros productos a los avances tecnológicos y cuidando del bolsillo de nuestros clientes y a la vez de la ecología, al producir luminarias de bajo consumo y larga duración.', 'Los pr', 'Poseemos diversas imáganes sobre...', 'Nuestro manera de trabajar nos ha llevado a participar en...', 'La Suiza', 'ticorromanas@yahoo.com', 888888889, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tu_galeria`
--

CREATE TABLE IF NOT EXISTS `tu_galeria` (
`atId` int(11) NOT NULL,
  `atNombre` text NOT NULL,
  `atDescripcion` text NOT NULL,
  `atIdioma` int(11) NOT NULL,
  `atcodigoImagen` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `tu_galeria`
--

INSERT INTO `tu_galeria` (`atId`, `atNombre`, `atDescripcion`, `atIdioma`, `atcodigoImagen`) VALUES
(9, 'abstracto.jpg', 'es', 0, 1),
(10, 'abstracto.jpg', 'in', 1, 1),
(11, 'ocean.jpg', 'es222', 0, 2),
(12, 'ocean.jpg', 'in2', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tu_imagen`
--

CREATE TABLE IF NOT EXISTS `tu_imagen` (
`atId` int(11) NOT NULL,
  `atNombre` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tu_imagen`
--

INSERT INTO `tu_imagen` (`atId`, `atNombre`) VALUES
(1, 'crg67cccccccccccccccc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tu_premio`
--

CREATE TABLE IF NOT EXISTS `tu_premio` (
`atId` int(11) NOT NULL,
  `atNombre` text NOT NULL,
  `atDescripcion` text NOT NULL,
  `atAno` text NOT NULL,
  `atNombreImagen` text NOT NULL,
  `atIdioma` int(11) NOT NULL,
  `atCodigoPremio` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `tu_premio`
--

INSERT INTO `tu_premio` (`atId`, `atNombre`, `atDescripcion`, `atAno`, `atNombreImagen`, `atIdioma`, `atCodigoPremio`) VALUES
(1, 'nombre español', 'descri espa', '1997', 'ocean.jpg', 0, 1),
(2, 'nombre ingles', 'descri in2', '1997', 'ocean.jpg', 1, 1),
(3, 'nom 2 es', 'des 2 es', '2017', 'pintura.jpg', 0, 2),
(4, 'nom 2 in', 'des 2 in4444444', '2017', 'pintura.jpg', 1, 2),
(7, 'sdfrsf', 'sdf', '32', 'ciudad2.jpeg', 0, 3),
(8, 'asd', 'sad', '32', 'ciudad2.jpeg', 1, 3),
(9, 'sdfg', 'sdf', '4', 'dfgdfg.jpg', 0, 4),
(10, 'asd', 'sdf', '4', 'dfgdfg.jpg', 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tu_producto`
--

CREATE TABLE IF NOT EXISTS `tu_producto` (
`atId` int(11) NOT NULL,
  `atNombre` text NOT NULL,
  `atDescripcionCorta` text NOT NULL,
  `atDescripcionLarga` text NOT NULL,
  `atIdioma` int(11) NOT NULL,
  `atcodigoProducto` int(11) NOT NULL,
  `atNombreImagen` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `tu_producto`
--

INSERT INTO `tu_producto` (`atId`, `atNombre`, `atDescripcionCorta`, `atDescripcionLarga`, `atIdioma`, `atcodigoProducto`, `atNombreImagen`) VALUES
(1, 'Café español', 'Descri Corta Es ', 'Descri Larga Es', 0, 1, 'cafe.jpg'),
(2, 'Café Inglés', 'Descri Corta In', 'Descri Larga In', 1, 1, 'cafe.jpg'),
(3, 'nombre es 2', 'descri corta es ', 'descri larga es 2', 0, 2, 'Hoy-Expo-Cafe.jpg'),
(4, 'noombre in 2', 'descri corta in 2', 'descri larga in 2', 1, 2, 'Hoy-Expo-Cafe.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tu_titulo`
--


CREATE TABLE `tu_titulo` (
  `atId` int(11) NOT NULL,
  `atNombre` text NOT NULL,
  `atDescripcion` text NOT NULL,
  `atIdioma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tu_titulo`
--

INSERT INTO `tu_titulo` (`atId`, `atNombre`, `atDescripcion`, `atIdioma`) VALUES
(1, 'MENÚ', '', 0),
(2, 'MENU', '', 1),
(3, 'GALERÍA', '', 0),
(4, 'GALLERY', '', 1),
(5, 'IDENTIDAD', '', 0),
(6, 'IDENTITY', '', 1),
(7, 'PRODUCTOS', '', 0),
(8, 'PRODUCTS', '', 1),
(9, 'FERIAS', '', 0),
(10, 'FAIRS', '', 1),
(11, 'VARIEDADES', '', 0),
(12, 'VARIETIES', '', 1),
(13, 'CONTACTO', '', 0),
(14, 'CONTACT', '', 1)
(15, 'INICIO', '', 0),
(16, 'HOME', '', 1),;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tu_titulo`
--
ALTER TABLE `tu_titulo`
  ADD PRIMARY KEY (`atId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tu_titulo`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tu_variedad`
--

CREATE TABLE IF NOT EXISTS `tu_variedad` (
`atId` int(11) NOT NULL,
  `atNombre` text NOT NULL,
  `atDescripcion` text NOT NULL,
  `atNombreImagen` text NOT NULL,
  `atCalidad` int(11) NOT NULL,
  `atPotencialRendimiento` int(11) NOT NULL,
  `atAltura` int(11) NOT NULL,
  `atAltitud` int(11) NOT NULL,
  `atToleranciaRoya` int(11) NOT NULL,
  `atNematodos` int(11) NOT NULL,
  `atAntrscnosis` int(11) NOT NULL,
  `atAnosCosecha` int(11) NOT NULL,
  `atRequerimientosNutricionales` int(11) NOT NULL,
  `atTamanoFruto` int(11) NOT NULL,
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
  `atIdioma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tu_empresa`
--
ALTER TABLE `tu_empresa`
 ADD PRIMARY KEY (`atId`);

--
-- Indices de la tabla `tu_galeria`
--
ALTER TABLE `tu_galeria`
 ADD PRIMARY KEY (`atId`);

--
-- Indices de la tabla `tu_imagen`
--
ALTER TABLE `tu_imagen`
 ADD PRIMARY KEY (`atId`);

--
-- Indices de la tabla `tu_premio`
--
ALTER TABLE `tu_premio`
 ADD PRIMARY KEY (`atId`);

--
-- Indices de la tabla `tu_producto`
--
ALTER TABLE `tu_producto`
 ADD PRIMARY KEY (`atId`);

--
-- Indices de la tabla `tu_titulo`
--
ALTER TABLE `tu_titulo`
 ADD PRIMARY KEY (`atId`);

--
-- Indices de la tabla `tu_variedad`
--
ALTER TABLE `tu_variedad`
 ADD PRIMARY KEY (`atId`);
 
ALTER TABLE `tu_titulo`
  MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tu_empresa`
--
ALTER TABLE `tu_empresa`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tu_galeria`
--
ALTER TABLE `tu_galeria`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `tu_imagen`
--
ALTER TABLE `tu_imagen`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tu_premio`
--
ALTER TABLE `tu_premio`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `tu_producto`
--
ALTER TABLE `tu_producto`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `tu_titulo`
--
ALTER TABLE `tu_titulo`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tu_variedad`
--
ALTER TABLE `tu_variedad`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
