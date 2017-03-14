create database turriolkadb;
use turriolkadb;

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarEmpresa`(IN `atId_` INT(11), IN `atCorreo_` TEXT, IN `atDenominacion_` TEXT, IN `atDescripcionContactos_` TEXT, IN `atDescripcionGaleria_` TEXT, IN `atDescripcionProductoA_` TEXT, IN `atDireccion_` TEXT, IN `atElaboracion_` TEXT, IN `atElaboracionProductoB_` TEXT, IN `atEncargadoA_` TEXT, IN `atEncargadoB_` TEXT, IN `atHistoria_` TEXT, IN `atVision_` TEXT, IN `atMision_` TEXT, IN `atQuinesSomos_` TEXT, IN `atTelefonoA_` INT(11), IN `atTelefonoB_` INT(11), IN `atIdioma_` INT(11))
    NO SQL
Update la_empresa Set 
atCorreo = atCorreo_,
atDenominacion = atDenominacion_,
atDescripcionContactos = atDescripcionContactos_,
atDescripcionGaleria = atDescripcionGaleria_,
atDescripcionProductoA = atDescripcionProductoA_,
atDireccion = atDireccion_,
atElaboracion = atElaboracion_,
atElaboracionProductoB = atElaboracionProductoB_,
atEncargadoA = atEncargadoA_,
atEncargadoB = atEncargadoB_,
atHistoria = atHistoria_,
atVision = atVision_,
atMision = atMision_,
atQuinesSomos = atQuinesSomos_,
atTelefonoA = atTelefonoA_,
atTelefonoB = atTelefonoB_ 

WHERE atIdioma = atIdioma_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarGaleria`(IN `atNombre_` TEXT, IN `atDescripcion_` TEXT, IN `atIdioma_` INT, IN `atcodigoImagen_` INT)
    NO SQL
Update la_galeria Set atNombre = atNombre_, atDescripcion = atDescripcion_ where atIdioma = atIdioma_ AND atcodigoImagen = atcodigoImagen_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarProducto`(IN `atNombre_` TEXT, IN `atPrecio_` INT, IN `atDescripcion_` TEXT, IN `atIdioma_` INT, IN `atcodigoProducto_` INT, IN `atNombreImagen_` TEXT)
    NO SQL
Update la_productos Set 
atNombre = atNombre_, atPrecio = atPrecio_, atDescripcion = atDescripcion_, atNombreImagen=atNombreImagen_ where atIdioma = atIdioma_ AND atcodigoProducto = atCodigoProducto_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarImagenDeInicio`(IN `atId_` INT)
    NO SQL
DELETE FROM `la_imagen` WHERE atId=atId_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarImagenGaleria`(IN `atId_` INT)
    NO SQL
delete from la_galeria where atcodigoImagen = atId_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarProducto`(IN `atId_` INT)
    NO SQL
delete from la_productos where atcodigoProducto=atId_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `IngresarImagenDeInicio`(IN `atNombre_` TEXT, IN `atTipo_` INT)
    NO SQL
INSERT INTO `la_imagen` VALUES(NULL, atNombre_,atTipo_)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `IngresarImagenEnGaleria`(IN `atNombre_` TEXT, IN `atDescripcion_` TEXT, IN `atTipo_` INT, IN `atCodigoImagen_` INT)
    NO SQL
INSERT INTO `la_galeria` VALUES(NULL, atNombre_,atDescripcion_,atTipo_,atCodigoImagen_)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarProducto`(IN `atId_` INT, IN `atNombre_` TEXT, IN `atPrecio_` INT, IN `atDescripcion_` TEXT, IN `atIdioma_` INT, IN `codigoProducto_` INT, IN `atNombreImagen` TEXT)
    NO SQL
INSERT INTO la_productos VALUES (NULL, atNombre_, atPrecio_, atDescripcion_, atIdioma_,codigoProducto_,atNombreImagen)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerImagenesInicio`(IN `atTipo_` INT)
    NO SQL
select * from la_imagen where atTipo = atTipo_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerTodosGaleria`(IN `atIdioma_` INT)
    NO SQL
IF(atIdioma_ = -1)THEN
        select * from la_galeria ;
    ELSE
       select * from la_galeria where atIdioma = atIdioma_;
    end if$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerTodosProductos`(IN `atIdioma_` INT)
    NO SQL
IF(atIdioma_ = -1)THEN
        select * from la_productos ;


    ELSE


       select * from la_productos where atIdioma = atIdioma_;

    end if$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `la_empresa`
--

CREATE TABLE IF NOT EXISTS `la_empresa` (
`atId` int(11) NOT NULL,
  `atHistoria` text NOT NULL,
  `atQuinesSomos` text,
  `atDescripcionGaleria` text NOT NULL,
  `atElaboracion` text NOT NULL,
  `atDescripcionProductoA` text NOT NULL,
  `atElaboracionProductoB` text NOT NULL,
  `atDenominacion` text NOT NULL,
  `atDescripcionContactos` text NOT NULL,
  `atDireccion` text NOT NULL,
  `atCorreo` text NOT NULL,
  `atTelefonoA` int(11) NOT NULL,
  `atTelefonoB` int(11) NOT NULL,
  `atEncargadoA` text NOT NULL,
  `atEncargadoB` text NOT NULL,
  `atMision` text NOT NULL,
  `atVision` text NOT NULL,
  `atIdioma` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

 'This dream started twenty years ago in a small farm with a few cows. However, a question about of the milk process let this journey to be a fact. Also, through our surpassing illusion and perseverance we achieved the first step in the art of making cheese.|\r\nLittle by little, our growth was the result of the high quality products that encouraged us to expand our vision to a more ambitious horizon. \r\nDuring the 2014 the processing plant construction began; and two farms were unified in just one place. \r\nVisionary and fighter people, who were eager to make this art as perfect as they could, is the description that characterize each member of our great family.', 'Our ingrained traditions combine work dedication as well as the welcoming atmosphere of each family.\r\nOur processing plant is located in Santa Cruz, Turrialba, Cartago. Place where nowadays enjoys the process for the Certification of Denomination of Origin by QUESO TURRIALBA.|\r\nOur company has been distinguished for being a family project, which was born from a dream, and has seen a constant evolution as the result of the effort and dedication to our team work. As a consequence, we are a company made up of trained people who bring high standards of quality to your home.|\r\nWe are Productos Lácteos Las Abras.', 'Know a little  bit more about our company, our factory, the store, our livestock and much more ...', 'A process of craftsmanship is what prevails today in the taste and quality of each of our products. This differentiated quality is the hallmark of identity that today the artificial means have not been able to achieve, because only by means of craftsmanship the legitimate flavor of the cheese is obtained, which in this case have led to the initiation of the Denomination of Origin process.', 'Through our products you will be able to appreciate the creamy texture, with the smell and taste of the cow''s milk, which only the artisan processes know how to give. We offer cheese, yogurt, custard and many more.', 'Through our products you will be able to appreciate the creamy texture, with the smell and taste of the cow''s milk, which only the artisan processes know how to give. We offer cheese, yogurt, custard and many more.', 'Productos Lacteos Las Abras is proud to be a pioneer in the certification for the Denomination of Origin by QUESO TURRIALBA, thanks to the efforts made each day to comply with the standards of quality and safety in each of our products.', 'Your opinion, your complaints or suggestions are very important to us. We will respond as soon as possible.', 'El Carmen, Santa Cruz, Cartago Province, Turrialba, Costa Rica', 'productoslacteoslasabras@gmail.com', 88298767, 83187290, 'Martín Solano Vargas- Gerente General', 'Gloriana Solano Pereira – Tienda de quesos', 'Elaborate Queso Turrialba and other dairy products of the highest quality, faithful to the artisan methods that we offer in their elaboration, to the flavor and naturalness necessary, to be a reference in our region.', 'To guarantee that our Queso Turrialba and dairy products can be enjoyed throughout the national territory, and of course, without forgetting the values that have positioned us as one of the best cheesemakers in the area.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `la_galeria`
--

CREATE TABLE IF NOT EXISTS `la_galeria` (
`atId` int(11) NOT NULL,
  `atNombre` text NOT NULL,
  `atDescripcion` text NOT NULL,
  `atIdioma` int(11) NOT NULL,
  `atcodigoImagen` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `la_imagen`
--

CREATE TABLE IF NOT EXISTS `la_imagen` (
`atId` int(11) NOT NULL,
  `atNombre` text NOT NULL,
  `atTipo` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `la_productos`
--

CREATE TABLE IF NOT EXISTS `la_productos` (
`atId` int(11) NOT NULL,
  `atNombre` text NOT NULL,
  `atPrecio` int(11) NOT NULL,
  `atDescripcion` text NOT NULL,
  `atIdioma` int(11) NOT NULL,
  `atcodigoProducto` int(11) NOT NULL,
  `atNombreImagen` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `la_productos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `la_titulos`
--

CREATE TABLE IF NOT EXISTS `la_titulos` (
`atId` int(11) NOT NULL,
  `atNombre` text NOT NULL,
  `atDescripcion` text NOT NULL,
  `atIdioma` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `la_titulos`
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `la_empresa`
--
ALTER TABLE `la_empresa`
 ADD PRIMARY KEY (`atId`);

--
-- Indices de la tabla `la_galeria`
--
ALTER TABLE `la_galeria`
 ADD PRIMARY KEY (`atId`);

--
-- Indices de la tabla `la_imagen`
--
ALTER TABLE `la_imagen`
 ADD PRIMARY KEY (`atId`);

--
-- Indices de la tabla `la_productos`
--
ALTER TABLE `la_productos`
 ADD PRIMARY KEY (`atId`);

--
-- Indices de la tabla `la_titulos`
--
ALTER TABLE `la_titulos`
 ADD PRIMARY KEY (`atId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `la_empresa`
--
ALTER TABLE `la_empresa`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `la_galeria`
--
ALTER TABLE `la_galeria`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `la_imagen`
--
ALTER TABLE `la_imagen`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `la_productos`
--
ALTER TABLE `la_productos`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `la_titulos`
--
ALTER TABLE `la_titulos`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;