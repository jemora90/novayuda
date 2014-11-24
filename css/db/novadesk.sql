-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2014 a las 13:33:10
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `novadesk`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo_incidente`
--

CREATE TABLE IF NOT EXISTS `archivo_incidente` (
`id_archivo` int(11) NOT NULL,
  `descripcion` varchar(350) NOT NULL,
  `incidente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_empresarial`
--

CREATE TABLE IF NOT EXISTS `area_empresarial` (
  `nombre` varchar(30) NOT NULL,
  `nu_de_empleados` int(5) NOT NULL,
`codigo_area_empre` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `area_empresarial`
--

INSERT INTO `area_empresarial` (`nombre`, `nu_de_empleados`, `codigo_area_empre`) VALUES
('Sistemamas', 10, 1),
('Cantabilidad', 200, 2),
('Produccion', 20, 4),
('Recursos Humanos', 45, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
`id_categoria` int(11) NOT NULL,
  `nomcategoria` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nomcategoria`) VALUES
(1, 'software'),
(2, 'hardware');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidente`
--

CREATE TABLE IF NOT EXISTS `incidente` (
`id_incidente` int(11) NOT NULL,
  `descripcion` varchar(2000) NOT NULL,
  `calificacion_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `prioridad_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `incidente`
--

INSERT INTO `incidente` (`id_incidente`, `descripcion`, `calificacion_id`, `categoria_id`, `estado_id`, `fecha_creacion`, `fecha_vencimiento`, `usuario_id`, `prioridad_id`) VALUES
(4, 'hgdhshgs', 14, 2, 8, '2014-11-18', '0000-00-00', 1072688, 5),
(5, 'se me daño', 14, 1, 8, '2014-11-18', '0000-00-00', 1072688, 5),
(8, 'daño g', 14, 1, 8, '2014-11-19', '0000-00-00', 999, 5),
(9, 'ufghjfgjf', 14, 1, 8, '2014-11-20', '0000-00-00', 999, 5),
(10, 'se jodio', 14, 1, 8, '2014-11-21', '0000-00-00', 1072688, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametro`
--

CREATE TABLE IF NOT EXISTS `parametro` (
`codigo_parametro` int(11) NOT NULL,
  `nombre_parametro` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `parametro`
--

INSERT INTO `parametro` (`codigo_parametro`, `nombre_parametro`) VALUES
(1, 'Tipo de Documento'),
(2, 'Genero'),
(3, 'Prioridad'),
(4, 'Calificacion'),
(5, 'Estado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
`id_perfil` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
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
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE IF NOT EXISTS `subcategoria` (
`id_subcategoria` int(11) NOT NULL,
  `nomsubcategoria` varchar(15) NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`id_subcategoria`, `nomsubcategoria`, `categoria_id`) VALUES
(1, 'office', 1),
(2, 'impresoras', 2);

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
  `id_perfil` int(11) NOT NULL,
  `password` varchar(30) NOT NULL,
  `genero` int(10) NOT NULL,
  `area_empre_id` int(11) NOT NULL,
  `tipo_documento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ndocumento`, `nombre`, `apellido`, `email`, `telefono`, `id_perfil`, `password`, `genero`, `area_empre_id`, `tipo_documento`) VALUES
(1072688, 'JORGE', 'MORA', 'MORA@GAMIL.COM\r\n', '321352245', 2, 'usuarios', 3, 1, 1),
(948998489, 'JULIANA', 'GALVIS', 'ww@is.com\r\n', '238982184', 2, 'usuarios', 4, 1, 2),
(1020802202, 'JULIAN', 'JIMENEZ', 'YULIAN@GMAIL.COM\r\n', '3144922495', 2, 'usuarios', 3, 1, 1),
(1072703545, 'FABIAN', 'CARVAJAL', 'FABIANHAMMETT@GMAIL.COM\r\n', '108877839', 2, 'usuarios', 3, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valor`
--

CREATE TABLE IF NOT EXISTS `valor` (
`codigo_valor` int(11) NOT NULL,
  `nombre_valor` varchar(50) NOT NULL,
  `codigo_parametro` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `valor`
--

INSERT INTO `valor` (`codigo_valor`, `nombre_valor`, `codigo_parametro`) VALUES
(1, 'CC', 1),
(2, 'CE', 1),
(3, 'Masculino', 2),
(4, 'Femenino', 2),
(5, 'Baja', 3),
(6, 'Media', 3),
(7, 'Alta', 3),
(8, 'Abierto', 5),
(9, 'En Proceso', 5),
(10, 'Cerrado', 5),
(11, 'Solucionado', 5),
(12, 'Malo', 4),
(13, 'Regular', 4),
(14, 'Bueno', 4),
(15, 'Execelente', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivo_incidente`
--
ALTER TABLE `archivo_incidente`
 ADD PRIMARY KEY (`id_archivo`), ADD KEY `incidente_id` (`incidente_id`);

--
-- Indices de la tabla `area_empresarial`
--
ALTER TABLE `area_empresarial`
 ADD PRIMARY KEY (`codigo_area_empre`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
 ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `incidente`
--
ALTER TABLE `incidente`
 ADD PRIMARY KEY (`id_incidente`), ADD KEY `calificacion_id` (`calificacion_id`), ADD KEY `categoria_id` (`categoria_id`), ADD KEY `estado_id` (`estado_id`), ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `parametro`
--
ALTER TABLE `parametro`
 ADD PRIMARY KEY (`codigo_parametro`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
 ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
 ADD PRIMARY KEY (`id_subcategoria`), ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`ndocumento`), ADD KEY `ip_perfil` (`id_perfil`), ADD KEY `area_empre_id` (`area_empre_id`);

--
-- Indices de la tabla `valor`
--
ALTER TABLE `valor`
 ADD PRIMARY KEY (`codigo_valor`), ADD KEY `cod_par` (`codigo_parametro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivo_incidente`
--
ALTER TABLE `archivo_incidente`
MODIFY `id_archivo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `area_empresarial`
--
ALTER TABLE `area_empresarial`
MODIFY `codigo_area_empre` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `incidente`
--
ALTER TABLE `incidente`
MODIFY `id_incidente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `parametro`
--
ALTER TABLE `parametro`
MODIFY `codigo_parametro` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
MODIFY `id_subcategoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `valor`
--
ALTER TABLE `valor`
MODIFY `codigo_valor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `archivo_incidente`
--
ALTER TABLE `archivo_incidente`
ADD CONSTRAINT `archivo_incidente_ibfk_1` FOREIGN KEY (`incidente_id`) REFERENCES `incidente` (`id_incidente`);

--
-- Filtros para la tabla `incidente`
--
ALTER TABLE `incidente`
ADD CONSTRAINT `incidente_ibfk_2` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
ADD CONSTRAINT `subcategoria_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `perfil` (`id_perfil`),
ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`area_empre_id`) REFERENCES `area_empresarial` (`codigo_area_empre`);

--
-- Filtros para la tabla `valor`
--
ALTER TABLE `valor`
ADD CONSTRAINT `valor_ibfk_1` FOREIGN KEY (`codigo_parametro`) REFERENCES `parametro` (`codigo_parametro`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
