-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2018 a las 09:10:07
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
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `idautoincremental` int(11) NOT NULL,
  `idviaje` int(11) NOT NULL,
  `idcomentario` int(11) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`idautoincremental`, `idviaje`, `idcomentario`, `comentario`) VALUES
(1, 0, 0, 'vekrvwkevmrjwkiojvm'),
(1, 0, 0, 'vekrvwkevmrjwkiojvm'),
(1, 0, 0, 'cwlavkeropvl'),
(1, 0, 0, 'xlsaxmas'),
(1, 0, 0, 'wefkjqogfeÂ´q'),
(2, 0, 0, 'kelvwmrlwemvblñ\r\n');

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

--
-- Volcado de datos para la tabla `estadopostulacion`
--

INSERT INTO `estadopostulacion` (`idpost`, `idautoincremental`, `idviaje`, `aceptado`, `rechazado`, `idvehiculo`) VALUES
(1, 1, 4, 0, 0, 0);

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
  `idautoincremental` int(11) NOT NULL,
  `idcomentario` int(11) NOT NULL,
  `idrespuesta` int(11) NOT NULL,
  `respuesta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`idautoincremental`, `idcomentario`, `idrespuesta`, `respuesta`) VALUES
(1, 0, 0, 'respuesta'),
(1, 0, 0, 'respuesta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE `tarjeta` (
  `tipo` int(11) NOT NULL,
  `numtarjeta` int(16) NOT NULL,
  `mes` int(2) NOT NULL,
  `anio` int(2) NOT NULL,
  `nomape` text NOT NULL,
  `codseguridad` int(3) NOT NULL,
  `documento` int(8) NOT NULL,
  `idautoincremental` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `calificacionacompaniante` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idautoincremental`, `nombre`, `apellido`, `email`, `nombreusuario`, `telefono`, `contrasenia`, `fechanacimiento`, `foto`, `confirmarcontrasenia`, `estadologico`, `puedepublicar`, `estadopostulacion`, `calificacion`, `calificacionacompaniante`) VALUES
(1, '                   Camila', '                   Faraone', 'camilafaraone@gmail.com', '  camifaraone', '2345421506', '12345678910', '1995-04-18', 'avatar.jpg', '12345678910', 0, 0, 0, 6, 0),
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
  `postulados` int(8) NOT NULL,
  `coments` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `viaje`
--

INSERT INTO `viaje` (`idautoincremental`, `idviaje`, `fecha`, `monto`, `duracion`, `hssalida`, `idvehiculo`, `idOrigen`, `idDestino`, `observaciones`, `cantasientos`, `estadopago`, `postulados`, `coments`) VALUES
(1, 4, '2018-08-26', 9000, '10:00', '10:00', 9, 1, 3, '635', 2, 1, 0, 0),
(2, 129, '2019-03-01', 9000, '10:00', '10:00', 9, 1, 3, '635', 2, 1, 0, 0),
(1, 130, '2019-03-08', 9000, '10:00', '10:00', 9, 1, 3, '635', 2, 1, 0, 0),
(1, 131, '2019-03-15', 9000, '10:00', '10:00', 9, 1, 3, '635', 2, 1, 0, 0),
(1, 132, '2019-03-22', 9000, '10:00', '10:00', 9, 1, 3, '635', 2, 1, 0, 0),
(1, 133, '2019-03-29', 9000, '10:00', '10:00', 9, 1, 3, '635', 2, 0, 0, 0),
(2, 134, '2018-08-19', 300, '10', '10', 5, 2, 3, 'Ninguna', 3, 0, 0, 0),
(2, 135, '2018-07-19', 300, '10', '10', 5, 2, 3, 'Ninguna', 3, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votaciones`
--

CREATE TABLE `votaciones` (
  `id` int(11) NOT NULL,
  `clicks` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
-- Indices de la tabla `votaciones`
--
ALTER TABLE `votaciones`
  ADD UNIQUE KEY `id` (`id`);

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
-- AUTO_INCREMENT de la tabla `destino`
--
ALTER TABLE `destino`
  MODIFY `idDestino` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `estadopostulacion`
--
ALTER TABLE `estadopostulacion`
  MODIFY `idpost` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `idviaje` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
--
-- AUTO_INCREMENT de la tabla `votaciones`
--
ALTER TABLE `votaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
