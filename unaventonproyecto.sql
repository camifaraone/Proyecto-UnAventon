-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2018 a las 07:40:19
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `idautoincremental` int(100) NOT NULL,
  `idpiloto` int(255) NOT NULL,
  `idviaje` int(255) NOT NULL,
  `comentario` text NOT NULL,
  `motivo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `calificacionacompaniante`
--

INSERT INTO `calificacionacompaniante` (`idcalifica`, `puntaje`, `idautoincremental`, `idpiloto`, `idviaje`, `comentario`, `motivo`) VALUES
(29, 1, 2, 1, 4, 'HOLIS', ''),
(36, 3, 2, -1, 138, '', 'se dio de baja la postulacion al viaje luego de haberse aceptado.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacionpiloto`
--

CREATE TABLE `calificacionpiloto` (
  `Idcalificp` int(100) NOT NULL,
  `puntaje` int(100) NOT NULL,
  `idautoincremental` int(100) NOT NULL,
  `idacompaniante` int(255) NOT NULL,
  `idviaje` int(255) NOT NULL,
  `comentario` text NOT NULL,
  `motivo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `calificacionpiloto`
--

INSERT INTO `calificacionpiloto` (`Idcalificp`, `puntaje`, `idautoincremental`, `idacompaniante`, `idviaje`, `comentario`, `motivo`) VALUES
(10, 1, 1, 2, 4, 'AAAAAAAAAAAAAAAAAAAA', ''),
(15, 3, 1, -1, 138, '', 'se elimino un viaje con usuarios postulados al mismo.');

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
  `rechazado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estadopostulacion`
--

INSERT INTO `estadopostulacion` (`idpost`, `idautoincremental`, `idviaje`, `aceptado`, `rechazado`) VALUES
(8, 3, 4, 0, 0),
(11, 2, 132, 0, 0),
(19, 2, 4, 1, 0),
(20, 2, 137, 1, 0);

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
  `idautoincremental` int(100) NOT NULL,
  `idduenio` int(255) NOT NULL,
  `idviaje` int(100) NOT NULL,
  `idrespuesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`idpregunta`, `descripcionp`, `idautoincremental`, `idduenio`, `idviaje`, `idrespuesta`) VALUES
(1, 'todo bien?', 1, 2, 136, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `idrespuesta` int(255) NOT NULL,
  `idpregunta` int(255) NOT NULL,
  `descripcionr` text NOT NULL,
  `idautoincremental` int(255) NOT NULL,
  `idviaje` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `calificacionacompaniante` int(100) NOT NULL,
  `bajalogica` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idautoincremental`, `nombre`, `apellido`, `email`, `nombreusuario`, `telefono`, `contrasenia`, `fechanacimiento`, `foto`, `confirmarcontrasenia`, `estadologico`, `puedepublicar`, `estadopostulacion`, `calificacion`, `calificacionacompaniante`, `bajalogica`) VALUES
(1, '                   Camila', '                   Faraone', 'camilafaraone@gmail.com', '  camifaraone', '2345421506', '12345678910', '1995-04-18', 'avatar.jpg', '12345678910', 0, 0, 0, 0, 0, 0),
(2, ' Matias', '     nuÃ±ez', 'matute94_23@hotmail.com', '   felipe', '12345', 'admin123', '2000-06-21', '../img/img6.png', 'admin123', 1, 1, 0, 8, 4, 0),
(3, 'agustin', 'nuÃ±ez', 'agustin@hotmail.com', 'agustin', '1234', '123456789', '2000-06-24', 'mati.png', '123456789', 0, 0, 0, 0, 5, 0),
(4, 'jkwrfbj', 'vwknvrh', 'holachau@gmail.com', 'vjwikv', '6654', '12345678', '1995-04-17', 'descarga.jpg', '12345678', 0, 0, 0, 10, 0, 1),
(7, 'adad', 'awwdad', 'holachau@gmail.com', 'cacca', '1231', 'admin123', '2000-08-02', 'avatar.jpg', 'admin123', 0, 0, 0, 0, 0, 0);

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
  `postulados` int(11) NOT NULL,
  `bajalogica` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`idvehiculo`, `marca`, `color`, `detalles`, `cantasientosdisp`, `modelo`, `patente`, `idtipov`, `idautoincremental`, `postulados`, `bajalogica`) VALUES
(9, 'aaa', '  vlwevmjï¿½', '  vmwemv', 2, '  vlwmvm', '  vkwmj', '', 1, 1, 0),
(10, 'audi', 'blanco', 'a', 3, 'aaa', 'aaa1111', '', 2, 0, 0),
(11, 'SADAD', 'ADADAD', 'ADADW', 3, 'ADAD', 'ADAD', '', 1, 0, 1);

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
  `coments` int(100) NOT NULL,
  `bajalogica` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `viaje`
--

INSERT INTO `viaje` (`idautoincremental`, `idviaje`, `fecha`, `monto`, `duracion`, `hssalida`, `idvehiculo`, `idOrigen`, `idDestino`, `observaciones`, `cantasientos`, `estadopago`, `postulados`, `coments`, `bajalogica`) VALUES
(1, 4, '2018-08-26', 9000, '10:00', '10:00', 9, 1, 3, '635', 2, 1, 2, 0, 0),
(1, 130, '2018-08-01', 9000, '10:00', '10:00', 9, 1, 3, '1', 2, 1, 0, 0, 1),
(1, 131, '2018-08-15', 9000, '10:00', '10:00', 9, 1, 3, '2', 2, 1, 1, 0, 1),
(1, 132, '2018-08-22', 9000, '10:00', '10:00', 9, 1, 3, '3', 2, 1, 1, 0, 0),
(1, 133, '2018-08-21', 9000, '10:00', '10:00', 9, 1, 3, 'AAAA', 2, 1, 0, 0, 1),
(2, 134, '2018-08-19', 300, '10', '10', 5, 2, 3, 'Ninguna', 3, 1, 0, 0, 1),
(2, 136, '2018-08-26', 1000, '11:11', '11:11', 10, 1, 2, 'NINGUNO', 2, 1, 0, 0, 0),
(1, 137, '2018-08-09', 100, '01:00', '12:00', 9, 1, 5, 'dfsef', 5, 0, 1, 0, 1),
(1, 138, '2018-08-10', 100, '11:11', '11:11', 9, 1, 2, 'aaaaa', 3, 0, 1, 0, 1);

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
  ADD PRIMARY KEY (`idcalifica`);

--
-- Indices de la tabla `calificacionpiloto`
--
ALTER TABLE `calificacionpiloto`
  ADD PRIMARY KEY (`Idcalificp`);

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
  ADD PRIMARY KEY (`idpregunta`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`idrespuesta`);

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
  MODIFY `idcalifica` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `calificacionpiloto`
--
ALTER TABLE `calificacionpiloto`
  MODIFY `Idcalificp` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `destino`
--
ALTER TABLE `destino`
  MODIFY `idDestino` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estadopostulacion`
--
ALTER TABLE `estadopostulacion`
  MODIFY `idpost` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `origen`
--
ALTER TABLE `origen`
  MODIFY `idOrigen` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `idpregunta` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `idrespuesta` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idautoincremental` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `idvehiculo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `viaje`
--
ALTER TABLE `viaje`
  MODIFY `idviaje` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT de la tabla `votaciones`
--
ALTER TABLE `votaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
