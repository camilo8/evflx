-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2018 a las 18:35:52
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `evflx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

CREATE TABLE `evaluacion` (
  `Id` int(11) NOT NULL,
  `CriterioA` varchar(15) NOT NULL,
  `CriterioB` varchar(15) NOT NULL,
  `CriterioC` varchar(15) NOT NULL,
  `CriterioD` varchar(15) NOT NULL,
  `CriterioE` varchar(15) NOT NULL,
  `CriterioF` varchar(15) NOT NULL,
  `CriterioG` varchar(15) NOT NULL,
  `CriterioH` varchar(15) NOT NULL,
  `CriterioI` varchar(15) NOT NULL,
  `CriterioJ` varchar(15) NOT NULL,
  `DespcrionEstu` varchar(260) NOT NULL,
  `DespcrionPro` varchar(260) NOT NULL,
  `Proceso` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evaluacion`
--

INSERT INTO `evaluacion` (`Id`, `CriterioA`, `CriterioB`, `CriterioC`, `CriterioD`, `CriterioE`, `CriterioF`, `CriterioG`, `CriterioH`, `CriterioI`, `CriterioJ`, `DespcrionEstu`, `DespcrionPro`, `Proceso`) VALUES
(5, 'algunas veces', 'siempre', 'algunas veces', 'casi simpre', 'siempre', 'siempre', 'casi siempre', 'algunas siempre', 'siempre', 'siempre', 'hola mundo', 'mundo hola', 'F');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Profesor_id` int(11) NOT NULL,
  `Estudiante_id` int(11) NOT NULL,
  `Evaluacion_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Codigo` int(6) NOT NULL,
  `Rol_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`Id`, `Nombre`, `Apellido`, `Codigo`, `Rol_Id`) VALUES
(1, 'Camilo', 'Penagos', 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`Id`, `Nombre`) VALUES
(1, 'Estudiante'),
(2, 'Profesor'),
(3, 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Profesor_id` (`Profesor_id`),
  ADD KEY `Estudiante_id` (`Estudiante_id`),
  ADD KEY `Evaluacion_id` (`Evaluacion_id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Codigo` (`Codigo`),
  ADD KEY `Rol_Id` (`Rol_Id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `grado`
--
ALTER TABLE `grado`
  ADD CONSTRAINT `grado_ibfk_1` FOREIGN KEY (`Profesor_id`) REFERENCES `persona` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grado_ibfk_2` FOREIGN KEY (`Estudiante_id`) REFERENCES `persona` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grado_ibfk_3` FOREIGN KEY (`Evaluacion_id`) REFERENCES `evaluacion` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`Rol_Id`) REFERENCES `rol` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
