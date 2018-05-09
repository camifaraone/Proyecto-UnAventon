-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2018 a las 08:58:17
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
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `idciudad` int(100) NOT NULL,
  `nombreciudad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadopostulacion`
--

CREATE TABLE `estadopostulacion` (
  `idep` int(100) NOT NULL,
  `descripcionep` varchar(255) NOT NULL,
  `idautoincremental` int(100) NOT NULL,
  `idviaje` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hacen`
--

CREATE TABLE `hacen` (
  `idautoincremental` int(100) NOT NULL,
  `idcalificp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hacenca`
--

CREATE TABLE `hacenca` (
  `idautoincremental` int(100) NOT NULL,
  `idcalifica` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Estructura de tabla para la tabla `solicitav`
--

CREATE TABLE `solicitav` (
  `idautoincremental` int(100) NOT NULL,
  `idviaje` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipov`
--

CREATE TABLE `tipov` (
  `distancia` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipove`
--

CREATE TABLE `tipove` (
  `nombreve` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `confirmarcontrasenia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `nombreve` varchar(100) NOT NULL,
  `idautoincremental` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viaje`
--

CREATE TABLE `viaje` (
  `fecha` date NOT NULL,
  `idviaje` int(200) NOT NULL,
  `monto` float NOT NULL,
  `duracion` varchar(200) NOT NULL,
  `observaciones` varchar(200) NOT NULL,
  `hssalida` varchar(200) NOT NULL,
  `estadopago` varchar(200) NOT NULL,
  `comision` varchar(200) NOT NULL,
  `distancia` int(255) NOT NULL,
  `idciudad` int(100) NOT NULL,
  `idvehiculo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`idciudad`);

--
-- Indices de la tabla `estadopostulacion`
--
ALTER TABLE `estadopostulacion`
  ADD PRIMARY KEY (`idep`),
  ADD UNIQUE KEY `idautoincremental` (`idautoincremental`),
  ADD UNIQUE KEY `idviaje` (`idviaje`);

--
-- Indices de la tabla `hacen`
--
ALTER TABLE `hacen`
  ADD UNIQUE KEY `idautoincremental_2` (`idautoincremental`),
  ADD UNIQUE KEY `idcalificp_2` (`idcalificp`),
  ADD KEY `idautoincremental` (`idautoincremental`),
  ADD KEY `idcalificp` (`idcalificp`);

--
-- Indices de la tabla `hacenca`
--
ALTER TABLE `hacenca`
  ADD UNIQUE KEY `idcalifica_2` (`idcalifica`),
  ADD UNIQUE KEY `idautoincremental_2` (`idautoincremental`),
  ADD KEY `idautoincremental` (`idautoincremental`),
  ADD KEY `idcalifica` (`idcalifica`);

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
-- Indices de la tabla `solicitav`
--
ALTER TABLE `solicitav`
  ADD UNIQUE KEY `idautoincremental_2` (`idautoincremental`),
  ADD UNIQUE KEY `idviaje_2` (`idviaje`),
  ADD KEY `idautoincremental` (`idautoincremental`),
  ADD KEY `idviaje` (`idviaje`);

--
-- Indices de la tabla `tipov`
--
ALTER TABLE `tipov`
  ADD PRIMARY KEY (`distancia`);

--
-- Indices de la tabla `tipove`
--
ALTER TABLE `tipove`
  ADD PRIMARY KEY (`nombreve`);

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
  ADD UNIQUE KEY `nombreve_2` (`nombreve`),
  ADD UNIQUE KEY `idautoincremental_2` (`idautoincremental`),
  ADD KEY `nombreve` (`nombreve`),
  ADD KEY `idautoincremental` (`idautoincremental`);

--
-- Indices de la tabla `viaje`
--
ALTER TABLE `viaje`
  ADD PRIMARY KEY (`idviaje`),
  ADD UNIQUE KEY `distancia_2` (`distancia`),
  ADD UNIQUE KEY `idciudad_2` (`idciudad`),
  ADD UNIQUE KEY `idvehiculo_2` (`idvehiculo`),
  ADD KEY `distancia` (`distancia`),
  ADD KEY `idciudad` (`idciudad`),
  ADD KEY `idvehiculo` (`idvehiculo`);

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
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `idciudad` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estadopostulacion`
--
ALTER TABLE `estadopostulacion`
  MODIFY `idep` int(100) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT de la tabla `tipov`
--
ALTER TABLE `tipov`
  MODIFY `distancia` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idautoincremental` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `idvehiculo` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `viaje`
--
ALTER TABLE `viaje`
  MODIFY `idviaje` int(200) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
