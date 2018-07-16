-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2018 a las 22:48:26
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
(10, 2, 2, 1, 0),
(12, 3, 1, 0, 0),
(16, 1, 1, 0, 0);

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
  `idviaje` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `fechar` date NOT NULL,
  `idrespuesta` int(100) NOT NULL,
  `descripcionr` varchar(255) NOT NULL,
  `idpregunta` int(100) NOT NULL
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
(1, ' Camila', ' Faraone', 'camilafaraone@gmail.com', ' camifaraone', '2345421506', '12345678', '1995-04-17', 'avatar.jpg', '12345678', 0, 0, 0, 8, 0),
(2, 'Matias', '    nuÃ±ez', 'matute94_23@hotmail.com', '   felipe', '12345', 'admin123', '2000-06-21', 'mati.png', 'admin123', 0, 0, 0, 8, 0),
(3, 'agustin', 'nuÃ±ez', 'agustin@hotmail.com', 'agustin', '1234', 'admin123', '2000-06-24', 'mati.png', 'admin123', 0, 0, 0, 0, 0);

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
  `idautoincremental` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`idvehiculo`, `marca`, `color`, `detalles`, `cantasientosdisp`, `modelo`, `patente`, `idtipov`, `idautoincremental`) VALUES
(1, ' BMW', 'negro', ' ninguno', 3, ' q7', ' aaa 111', '', 2),
(3, 'fiat', 'gris', 'ruidos en el motor', 4, 'uno', 'ccc 111', '', 1),
(5, 'ford', 'rosa', 'descapotable', 4, 'fiesta', 'qqq 333', '', 1);

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
(2, 1, '2018-07-09', 1000, '01:00', '12:00', 1, 2, 3, 'ninguna', 10, 0, 0),
(1, 2, '2018-07-18', 2000, '05:00', '12:00', 3, 1, 4, 'ninguna', 10, 0, 1);

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
-- AUTO_INCREMENT de la tabla `destino`
--
ALTER TABLE `destino`
  MODIFY `idDestino` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estadopostulacion`
--
ALTER TABLE `estadopostulacion`
  MODIFY `idpost` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `idautoincremental` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `idvehiculo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `viaje`
--
ALTER TABLE `viaje`
  MODIFY `idviaje` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
