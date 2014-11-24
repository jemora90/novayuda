-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2014 a las 16:25:07
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `helpdesk`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_empresarial`
--

CREATE TABLE IF NOT EXISTS `area_empresarial` (
  `id_area` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `nu_de_empleados` int(5) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id_area`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE IF NOT EXISTS `calificacion` (
  `id_calificacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) NOT NULL,
  PRIMARY KEY (`id_calificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidente`
--

CREATE TABLE IF NOT EXISTS `incidente` (
  `id_incidente` int(11) NOT NULL AUTO_INCREMENT,
  `prioridad_id` int(11) NOT NULL,
  `descripcion` varchar(2000) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `calificacion_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  PRIMARY KEY (`id_incidente`),
  UNIQUE KEY `prioridad_id` (`prioridad_id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `calificacion_id` (`calificacion_id`),
  KEY `categoria_id` (`categoria_id`),
  KEY `estado_id` (`estado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametro`
--

CREATE TABLE IF NOT EXISTS `parametro` (
  `codpar` int(11) NOT NULL AUTO_INCREMENT,
  `nompar` varchar(40) NOT NULL,
  `parametro_fijo` int(1) NOT NULL,
  PRIMARY KEY (`codpar`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `parametro`
--

INSERT INTO `parametro` (`codpar`, `nompar`, `parametro_fijo`) VALUES
(1, 'Tipo de Registro', 0),
(2, 'Categoria', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `id_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `nombre`) VALUES
(1, 'Admnistrador'),
(2, 'Usuario Avanzado'),
(4, 'Especialista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prioridad`
--

CREATE TABLE IF NOT EXISTS `prioridad` (
  `id_prioridad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`id_prioridad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `ndocumento` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `ip_perfil` int(11) NOT NULL,
  `pass` varchar(30) NOT NULL,
  PRIMARY KEY (`ndocumento`),
  KEY `ip_perfil` (`ip_perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ndocumento`, `nombre`, `apellido`, `email`, `telefono`, `ip_perfil`, `pass`) VALUES
(987654321, 'Jhoan', 'Gutierrez', 'pepito@sdjsd.com', '1234567890', 2, '0987654321'),
(1234567890, 'carlos', 'sanabria', 'neo@ddkfdf.com', '1234567890', 1, '1234567890');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valor`
--

CREATE TABLE IF NOT EXISTS `valor` (
  `codval` int(11) NOT NULL AUTO_INCREMENT,
  `nomval` varchar(50) NOT NULL,
  `codpar` int(11) NOT NULL,
  `valor_fijo` int(1) NOT NULL,
  PRIMARY KEY (`codval`),
  KEY `cod_par` (`codpar`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `valor`
--

INSERT INTO `valor` (`codval`, `nomval`, `codpar`, `valor_fijo`) VALUES
(1, 'WEB', 1, 0),
(2, 'Correo Electronico', 1, 0),
(3, 'Telefonico', 1, 0),
(4, 'Impresoras / Fax', 2, 0),
(5, 'Computador', 2, 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `area_empresarial`
--
ALTER TABLE `area_empresarial`
  ADD CONSTRAINT `area_empresarial_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`ndocumento`);

--
-- Filtros para la tabla `incidente`
--
ALTER TABLE `incidente`
  ADD CONSTRAINT `incidente_ibfk_1` FOREIGN KEY (`prioridad_id`) REFERENCES `prioridad` (`id_prioridad`),
  ADD CONSTRAINT `incidente_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`ndocumento`),
  ADD CONSTRAINT `incidente_ibfk_3` FOREIGN KEY (`calificacion_id`) REFERENCES `calificacion` (`id_calificacion`),
  ADD CONSTRAINT `incidente_ibfk_4` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id_categoria`),
  ADD CONSTRAINT `incidente_ibfk_5` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `valor`
--
ALTER TABLE `valor`
  ADD CONSTRAINT `valor_ibfk_1` FOREIGN KEY (`codpar`) REFERENCES `parametro` (`codpar`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
