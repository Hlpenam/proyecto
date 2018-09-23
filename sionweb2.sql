-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-09-2018 a las 07:11:20
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sionweb2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartamento`
--

CREATE TABLE IF NOT EXISTS `apartamento` (
  `id` int(11) NOT NULL,
  `torre` varchar(45) DEFAULT NULL,
  `apartamento` varchar(45) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `usuarios_cedula` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ubicacion_usuarios1_idx` (`usuarios_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `apartamento`
--

INSERT INTO `apartamento` (`id`, `torre`, `apartamento`, `observaciones`, `usuarios_cedula`) VALUES
(1, '2', '101', 'no', 2147483647),
(2, '3', '102', 'no|', 1022934516),
(3, '2', '102', 'no', 1031180529);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `mensaje` varchar(500) DEFAULT NULL,
  `subtitulo` varchar(100) DEFAULT NULL,
  `submensaje` varchar(500) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `imagenes` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `mensaje`, `subtitulo`, `submensaje`, `estado`, `imagenes`) VALUES
(0, 'a', 'a', 'a', 'a', 3, ''),
(1, 'CARRERA POR DEPARTAMENTOS', 'Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.', 'Proceso', 'lorem', 0, '../images/eventos/20180610_182713.jpg'),
(2, 'CARRERA POR DEPARTAMENTOS', 'Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.', 'cccc', 'a', 1, '../images/eventos/20180728_150838.jpg'),
(3, 'bbbb', 'Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.', 'jajajajajj', 'dddd', 0, '../images/eventos/20180805_083557.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventosc`
--

CREATE TABLE IF NOT EXISTS `eventosc` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `mensaje` varchar(500) DEFAULT NULL,
  `subtitulo` varchar(100) DEFAULT NULL,
  `submensaje` varchar(500) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `imagenes` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eventosc`
--

INSERT INTO `eventosc` (`id`, `titulo`, `mensaje`, `subtitulo`, `submensaje`, `estado`, `imagenes`) VALUES
(0, 'a', 'a', 'a', 'a', 3, ''),
(1, 'CARRERA POR DEPARTAMENTOS', 'Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.', 'Proceso', 'lorem', 1, '../images/eventos/20180610_182713.jpg'),
(2, 'CARRERA POR DEPARTAMENTOS', 'Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.', 'cccc', 'a', 1, '../images/eventos/20180728_150838.jpg'),
(3, 'bbbb', 'Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.', 'jajajajajj', 'dddd', 1, '../images/eventos/20180805_083557.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones`
--

CREATE TABLE IF NOT EXISTS `opciones` (
  `id` int(11) NOT NULL,
  `opciones` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pqrs_pk`
--

CREATE TABLE IF NOT EXISTS `pqrs_pk` (
  `codigo` int(8) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_proce` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `opciones_soli` int(100) DEFAULT NULL,
  `observaciones` varchar(1000) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `punto_pk`
--

CREATE TABLE IF NOT EXISTS `punto_pk` (
  `punto_pk` int(11) NOT NULL,
  `hora_ingreso` time DEFAULT NULL,
  `hora_salida` time DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `observaciones` varchar(255) DEFAULT NULL,
  `cedula` varchar(20) NOT NULL,
  `id_puntopk` int(11) DEFAULT NULL,
  PRIMARY KEY (`punto_pk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `punto_pk`
--

INSERT INTO `punto_pk` (`punto_pk`, `hora_ingreso`, `hora_salida`, `estado`, `observaciones`, `cedula`, `id_puntopk`) VALUES
(1, NULL, NULL, '1', 'no', '2147483647', 80),
(2, NULL, NULL, '1', 'no', '1031180529', 48),
(3, NULL, NULL, '1', 'NO', '1022934516', 81);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sorteo_pk`
--

CREATE TABLE IF NOT EXISTS `sorteo_pk` (
  `sorteo_pk` int(11) NOT NULL,
  `observaciones` varchar(255) DEFAULT NULL,
  `cedula` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`sorteo_pk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sorteo_pk`
--

INSERT INTO `sorteo_pk` (`sorteo_pk`, `observaciones`, `cedula`, `email`) VALUES
(1, 'sdgsg', '2147483647', 'hmuno@gmail.com'),
(2, 'effsedf', '1031180529', 'hugo@gmail.com'),
(3, 'asdfasfa', '1022934516', 'Q@');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `cedula` int(11) NOT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `telefono` decimal(20,0) DEFAULT NULL,
  `celular` decimal(20,0) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  `contrasenaoper` varchar(45) DEFAULT NULL,
  `contrasenaclient` varchar(45) DEFAULT NULL,
  `fecha_ingreso` varchar(45) DEFAULT NULL,
  `fecha_fin` varchar(45) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `tienevehiculo` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cedula`, `nombres`, `apellidos`, `telefono`, `celular`, `email`, `cargo`, `contrasena`, `contrasenaoper`, `contrasenaclient`, `fecha_ingreso`, `fecha_fin`, `observaciones`, `tienevehiculo`) VALUES
(9786543, 'leonardo ', 'peÃ±a', '978654', '98765456789', 'hlpenan@misena.edu.co', 'administrador', '12345', '', '', '2018-12-31', '2019-12-31', 'wsedrgyhj1', NULL),
(1022934516, 'Gustavo Eduardo', 'Adrade Hernandez', '3777777', '3172646327', 'geandrade6@misena.edu.co', 'administrador', '12345', '', '', '', '', 'Es el Administrador del programa', NULL),
(1031180529, 'johan sebastian', 'Ortiz Lopez', '355555', '32024444', 'jortiz82@misena.edu.co', 'cliente', '', '', '12345', '2018-12-01', '2020-12-31', 'Nuevo Operador ', NULL),
(2147483647, 'anderson', 'beltran', '0', '123457654', 'edison@mmisen', 'cliente', '', '', '12345', '2018-06-07', '2018-06-14', 'asasas1234567', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE IF NOT EXISTS `vehiculos` (
  `placa` varchar(45) NOT NULL,
  `color` varchar(45) DEFAULT NULL,
  `marca` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL,
  `origen` varchar(45) DEFAULT NULL,
  `observaciones` varchar(255) DEFAULT NULL,
  `cedula` varchar(20) NOT NULL,
  PRIMARY KEY (`placa`),
  UNIQUE KEY `placa_UNIQUE` (`placa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`placa`, `color`, `marca`, `estado`, `fecha_ingreso`, `fecha_salida`, `origen`, `observaciones`, `cedula`) VALUES
('MKL234', 'ROJO', 'kjk', 'dispo', NULL, NULL, 'armenia', 'lihi', '1022934516'),
('plk239', 'verde', 'bugatti', 'disponible', '2018-09-22', '2018-09-22', 'bogota', 'hola', '2147483647'),
('xxx123', 'azul', 'chevrolet', 'disponible', '2018-09-23', '2018-07-22', 'bogota', 'dfsd', '1031180529');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
