-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-11-2013 a las 07:01:34
-- Versión del servidor: 5.6.12
-- Versión de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Prueba_1`
--
CREATE DATABASE IF NOT EXISTS `Prueba_1` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE `Prueba_1`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Reportes`
--

CREATE TABLE IF NOT EXISTS `Reportes` (
  `ID_Reporte` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Usuario` int(11) NOT NULL,
  `Calle` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Numero` int(11) NOT NULL,
  `Colonia` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `Codigo_Postal` int(11) NOT NULL,
  `Calle_Uno` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `Calle_Dos` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `Descripcion` text COLLATE latin1_spanish_ci NOT NULL,
  `Estatus` int(4) NOT NULL,
  `Departamento` int(4) NOT NULL,
  `Imagen` mediumblob,
  `Tipo_imagen` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Croquis` mediumblob,
  `Tipo_Croquis` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_Reporte`),
  KEY `ID_Usuario` (`ID_Usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Reportes`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
  `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Apellidos` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Numero_Interior` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Numero_Exterior` int(11) NOT NULL,
  `Calle` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Colonia` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Codigo_Postal` int(11) NOT NULL,
  `Telefono` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Username` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Pass` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Tipo_Usuario` int(11) NOT NULL,
  PRIMARY KEY (`ID_Usuario`),
  UNIQUE KEY `Username` (`Username`),
  UNIQUE KEY `ID_Usuario` (`ID_Usuario`),
  KEY `ID_Usuario_2` (`ID_Usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `Usuarios`
--


--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Reportes`
--
ALTER TABLE `Reportes`
  ADD CONSTRAINT `Reportes_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `Usuarios` (`ID_Usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
