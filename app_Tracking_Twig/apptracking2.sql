-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2015 a las 10:16:27
-- Versión del servidor: 5.5.43-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `apptracking`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posiciones`
--

CREATE TABLE IF NOT EXISTS `posiciones` (
  `id_posiciones` int(5) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(3) NOT NULL,
  `longitud` double NOT NULL,
  `latitud` double NOT NULL,
  `tiempo` varchar(30) NOT NULL,
  PRIMARY KEY (`id_posiciones`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `posiciones`
--

INSERT INTO `posiciones` (`id_posiciones`, `id_usuario`, `longitud`, `latitud`, `tiempo`) VALUES
(1, 0, 30.5, 25.32, '2147483647'),
(2, 0, 25.65, 12.25, '2147483647'),
(3, 0, 22, 22, '22'),
(4, 7, 22, 34, '44'),
(5, 7, 12, 43, '55'),
(6, 8, -1.9704662397209671, 43.327325443400575, '22'),
(7, 8, -1.976114971906331, 43.32584644525797, '23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`) VALUES
(1, 'pepe', 'correo@correo.com'),
(2, 'otilio', 'otilio@correo.com'),
(7, 'kaixo', 'kaixo@correo.com'),
(8, 'egoitz', 'egoitz@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
