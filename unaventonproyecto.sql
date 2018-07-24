-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2018 a las 10:13:50
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `unaventonproyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacionacompaniante`
--

CREATE TABLE `calificacionacompaniante` (
  `idcalifica` int(100) NOT NULL,
  `puntaje` int(100) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `idautoincremental` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacionpiloto`
--

CREATE TABLE `calificacionpiloto` (
  `Idcalificp` int(100) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `puntaje` int(100) NOT NULL,
  `idautoincremental` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `post_id` int(5) NOT NULL,
  `publicado` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `idautoincremental` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `comentarios` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(4) COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'OK',
  `dia` int(2) NOT NULL,
  `mes` int(2) NOT NULL,
  `anio` int(4) NOT NULL,
  `ip_post` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`post_id`, `publicado`, `fecha`, `idautoincremental`, `email`, `comentarios`, `estado`, `dia`, `mes`, `anio`, `ip_post`, `parent`) VALUES
(1, 'Publicado', '2015-05-01', 1, '', 'Hola como est&aacute;n veo que descargastes el sistema de comentarios <strong>php , mysql ,jquery y javascript</strong> espero les guste si desean saber su funcionamiento, solo dejen sus comentarios en <a target="_blank" href="http://www.bloguero-ec.com/publicacion/sistema-de-comentario-con-respuesta-panel-de-administracion">sistema de comentarios jquery</a> <br/>\r\nsu función es muy dinámica y sencilla... ', 'OK', 1, 5, 2015, '', 0),
(2, 'Publicado', '2015-05-02', 2, '', 'Gracias por este sistema es de mucha ayuda le voy a dar like a tu página en facebook y te ganastes un tweet..<br/>\r\nSaludos .....', 'OK', 2, 5, 2015, '', 1),
(3, 'Publicado', '2015-05-03', 1, '', 'Voy a dar mi próximo concierto en Ecuador saludos a todos mis seguidores esperenmen que va a estar <strong>Genial</strong><br/>\r\nAtte: <strong>Rockero</strong>\r\n ', 'OK', 3, 5, 2015, '', 0),
(4, 'Publicado', '2015-05-04', 1, '', 'Genial Rockero estaré en primera fila ..<br/>\r\npara ese conciertaso....\r\nUn saludo desde <strong>Ecuador</strong>', 'OK', 4, 5, 2015, '', 3),
(5, 'Publicado', '2015-05-06', 0, '', 'Hola Rockero de seguro te va a ir bi&eacute;n en Ecuador..<br />\r\nEspero vengas pronto a Brasil y nos sorprendas con tus m&uacute;sicas..<br />\r\nesta es mi blog <a href="http://www.bloguero-ec.com">Bloguero-Ec</a> ..<br />\r\nSaludos a todos...', 'OK', 6, 5, 2015, '', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destino`
--

CREATE TABLE `destino` (
  `idDestino` int(100) NOT NULL,
  `ciudadDestino` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `destino`
--

INSERT INTO `destino` (`idDestino`, `ciudadDestino`) VALUES
(1, 'La Plata'),
(2, 'Chascomus'),
(3, 'Berisso'),
(4, 'Ensenada'),
(5, 'Buenos Aires'),
(6, 'Saladillo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elimauto`
--

CREATE TABLE `elimauto` (
  `idvehiculo` int(11) NOT NULL,
  `idautoincremental` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadopostulacion`
--

CREATE TABLE `estadopostulacion` (
  `idpost` int(100) NOT NULL,
  `idautoincremental` int(100) NOT NULL,
  `idviaje` int(200) NOT NULL,
  `aceptado` int(1) NOT NULL,
  `rechazado` int(1) NOT NULL,
  `idvehiculo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `origen`
--

CREATE TABLE `origen` (
  `idOrigen` int(100) NOT NULL,
  `ciudadOrigen` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `origen`
--

INSERT INTO `origen` (`idOrigen`, `ciudadOrigen`) VALUES
(1, 'La Plata'),
(2, 'Berisso'),
(3, 'Cordoba'),
(4, 'Villa Gesell'),
(5, 'Bahia Blanca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `idpregunta` int(100) NOT NULL,
  `descripcionp` varchar(255) NOT NULL,
  `fechaP` date NOT NULL,
  `idautoincremental` int(100) NOT NULL,
  `idviaje` int(100) NOT NULL,
  `idrespuesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `fechar` date NOT NULL,
  `idrespuesta` int(100) NOT NULL,
  `descripcionr` varchar(255) NOT NULL,
  `idpregunta` int(100) NOT NULL,
  `idautoincremental` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipove`
--

CREATE TABLE `tipove` (
  `idtipov` int(15) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipove`
--

INSERT INTO `tipove` (`idtipov`, `nombre`) VALUES
(1, 'AUTO'),
(2, 'CAMIONETA'),
(3, 'CAMION'),
(4, 'MICRO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idautoincremental` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nombreusuario` varchar(100) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `contrasenia` varchar(100) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `foto` varchar(200) NOT NULL,
  `confirmarcontrasenia` varchar(100) NOT NULL,
  `estadologico` int(1) NOT NULL,
  `puedepublicar` int(2) NOT NULL,
  `estadopostulacion` int(11) NOT NULL,
  `calificacion` int(100) NOT NULL,
  `calificacionpiloto` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idautoincremental`, `nombre`, `apellido`, `email`, `nombreusuario`, `telefono`, `contrasenia`, `fechanacimiento`, `foto`, `confirmarcontrasenia`, `estadologico`, `puedepublicar`, `estadopostulacion`, `calificacion`, `calificacionpiloto`) VALUES
(1, '                  CamilalklÃ±k', '                  Faraone', 'camilafaraone@gmail.com', ' camifaraone', '2345421506', '12345678910', '1995-04-18', 'avatar.jpg', '12345678910', 0, 0, 0, 6, 0),
(2, 'Matias', '    nuÃ±ez', 'matute94_23@hotmail.com', '   felipe', '12345', 'admin123', '2000-06-21', 'mati.png', 'admin123', 1, 1, 0, 8, 0),
(3, 'agustin', 'nuÃ±ez', 'agustin@hotmail.com', 'agustin', '1234', '123456789', '2000-06-24', 'mati.png', '123456789', 0, 0, 0, 0, 0),
(4, 'jkwrfbj', 'vwknvrh', 'holachau@gmail.com', 'vjwikv', '6654', '12345678', '1995-04-17', 'descarga.jpg', '12345678', 0, 0, 0, 10, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `idvehiculo` int(100) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `detalles` varchar(255) NOT NULL,
  `cantasientosdisp` int(10) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `patente` varchar(200) NOT NULL,
  `idtipov` varchar(100) NOT NULL,
  `idautoincremental` int(100) NOT NULL,
  `postulados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`idvehiculo`, `marca`, `color`, `detalles`, `cantasientosdisp`, `modelo`, `patente`, `idtipov`, `idautoincremental`, `postulados`) VALUES
(1, 'vwvh', 'vwkjv', 'vwlke', 2, 'vwkevj', 'vkwo', '', 2, 0),
(9, 'aaa', '  vlwevmjï¿½', '  vmwemv', 2, '  vlwmvm', '  vkwmj', '', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viaje`
--

CREATE TABLE `viaje` (
  `idautoincremental` int(11) NOT NULL,
  `idviaje` int(200) NOT NULL,
  `fecha` date NOT NULL,
  `monto` float NOT NULL,
  `duracion` varchar(200) NOT NULL,
  `hssalida` varchar(200) NOT NULL,
  `idvehiculo` int(100) NOT NULL,
  `idOrigen` int(100) NOT NULL,
  `idDestino` int(100) NOT NULL,
  `observaciones` varchar(200) NOT NULL,
  `cantasientos` int(10) NOT NULL,
  `estadopago` int(1) NOT NULL,
  `postulados` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `viaje`
--

INSERT INTO `viaje` (`idautoincremental`, `idviaje`, `fecha`, `monto`, `duracion`, `hssalida`, `idvehiculo`, `idOrigen`, `idDestino`, `observaciones`, `cantasientos`, `estadopago`, `postulados`) VALUES
(1, 4, '2018-07-19', 100, ' 1', ' 1', 9, 1, 5, ' nn', 2, 0, 6),
(2, 5, '2018-07-25', 100, '1', '1', 2, 3, 3, 'nvkrwlik', 2, 1, 0),
(2, 6, '2018-07-21', 100, '1', '1', 26, 5, 3, 'njbkj', 2, 1, 0),
(2, 7, '2018-10-20', 100, '10:00', '10:01', 1, 1, 1, 'nk,', 2, 0, 0),
(2, 8, '2018-10-20', 100, '10:00', '10:01', 1, 1, 1, 'nk,', 2, 0, 0),
(2, 9, '2018-10-28', 52622, '10:00', '10:00', 1, 1, 1, '26526', 2, 0, 0),
(2, 10, '2018-10-29', 52622, '10:00', '10:00', 1, 1, 1, '26526', 2, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificacionacompaniante`
--
ALTER TABLE `calificacionacompaniante`
  ADD PRIMARY KEY (`idcalifica`),
  ADD UNIQUE KEY `idautoincremental` (`idautoincremental`);

--
-- Indices de la tabla `calificacionpiloto`
--
ALTER TABLE `calificacionpiloto`
  ADD PRIMARY KEY (`Idcalificp`),
  ADD UNIQUE KEY `idautoincremental` (`idautoincremental`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD UNIQUE KEY `post_id` (`post_id`,`publicado`);

--
-- Indices de la tabla `destino`
--
ALTER TABLE `destino`
  ADD PRIMARY KEY (`idDestino`);

--
-- Indices de la tabla `estadopostulacion`
--
ALTER TABLE `estadopostulacion`
  ADD PRIMARY KEY (`idpost`);

--
-- Indices de la tabla `origen`
--
ALTER TABLE `origen`
  ADD PRIMARY KEY (`idOrigen`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`idpregunta`),
  ADD UNIQUE KEY `idautoincremental_2` (`idautoincremental`),
  ADD UNIQUE KEY `idviaje_2` (`idviaje`),
  ADD KEY `idautoincremental` (`idautoincremental`),
  ADD KEY `idviaje` (`idviaje`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`idrespuesta`),
  ADD UNIQUE KEY `descripcionr` (`descripcionr`),
  ADD UNIQUE KEY `idpregunta_2` (`idpregunta`),
  ADD KEY `idpregunta` (`idpregunta`);

--
-- Indices de la tabla `tipove`
--
ALTER TABLE `tipove`
  ADD PRIMARY KEY (`idtipov`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idautoincremental`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`idvehiculo`),
  ADD KEY `idautoincremental` (`idautoincremental`);

--
-- Indices de la tabla `viaje`
--
ALTER TABLE `viaje`
  ADD PRIMARY KEY (`idviaje`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificacionacompaniante`
--
ALTER TABLE `calificacionacompaniante`
  MODIFY `idcalifica` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `calificacionpiloto`
--
ALTER TABLE `calificacionpiloto`
  MODIFY `Idcalificp` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `post_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `destino`
--
ALTER TABLE `destino`
  MODIFY `idDestino` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `estadopostulacion`
--
ALTER TABLE `estadopostulacion`
  MODIFY `idpost` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `origen`
--
ALTER TABLE `origen`
  MODIFY `idOrigen` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `idpregunta` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `idrespuesta` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idautoincremental` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `idvehiculo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `viaje`
--
ALTER TABLE `viaje`
  MODIFY `idviaje` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
