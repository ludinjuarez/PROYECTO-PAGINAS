-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-06-2015 a las 07:27:17
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `carritocompras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `numeroventa` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` text COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` text COLLATE utf8_spanish_ci NOT NULL,
  `subtotal` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=30 ;

--
-- Volcar la base de datos para la tabla `compras`
--

INSERT INTO `compras` (`Id`, `numeroventa`, `nombre`, `imagen`, `precio`, `cantidad`, `subtotal`) VALUES
(1, 1, 'PANADOL', 'panadol.jpg', '5', '1', '5'),
(2, 2, 'Dolex', 'Dolex.jpg', '8', '2', '16'),
(3, 3, 'Dolex', 'Dolex.jpg', '8', '0', '0'),
(12, 4, 'Vitaflenaco ', 'Vitaflenaco.jpg', '56.4', '1', '56.4'),
(13, 4, 'Tabcin noche', 'Tabcinnoche.jpg', '56.2', '2', '112.4'),
(14, 5, 'Paracetamol', 'Paracetamol.jpg', '90', '1', '90'),
(15, 6, 'Paracetamol', 'Paracetamol.jpg', '90', '1', '90'),
(16, 6, 'Dolex', 'Dolex.jpg', '8', '1', '8'),
(17, 7, 'Paracetamol', 'Paracetamol.jpg', '90', '10', '900'),
(18, 7, 'SUKROL', 'sukrol.jpg', '75', '6', '450'),
(19, 8, 'Acetaminofen', 'Acetaminofen.jpg', '4', '5', '20'),
(20, 9, 'PANADOL', 'panadol.jpg', '5', '23', '115'),
(21, 10, 'SUKROL', 'sukrol.jpg', '75', '2', '150'),
(22, 11, 'Omeplazol', 'Omeplazol.jpg', '0', '5', '0'),
(23, 11, 'XICANIL', 'xicanil.png', '40', '2', '80'),
(24, 12, 'Dolex', 'Dolex.jpg', '8', '1', '8'),
(25, 13, 'PANADOL', 'panadol.jpg', '5', '2', '10'),
(26, 13, 'SUKROL', 'sukrol.jpg', '75', '2', '150'),
(27, 13, 'Clorace ', 'Clorace.jpg', '7', '1', '7'),
(28, 14, 'PANADOL', 'panadol.jpg', '5', '2', '10'),
(29, 15, 'Dolex', 'Dolex.jpg', '8', '1', '8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=20 ;

--
-- Volcar la base de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES
(3, 'PANADOL', 'Medicamento para la Gripe', 'panadol.jpg', 5),
(4, 'SUKROL', 'Vitamina Para el Cerrebro', 'sukrol.jpg', 75),
(5, 'XICANIL', 'XICANILL PARA PIES', 'xicanil.png', 40),
(7, 'Acetaminofen', 'Acetaminofen plus pastillas', 'Acetaminofen.jpg', 4),
(8, 'Aspirina', 'Aspirina bayer para malestar de Cabeza', 'Aspirina.png', 8),
(9, 'Atamel', 'Atamel pastillas', 'Atamel.jpg', 2.5),
(10, 'Clorace ', 'Clorace pastilals', 'Clorace.jpg', 7),
(11, 'Dolex', 'Doles Pastillas en Caja con pre inscirpcion medica', 'Dolex.jpg', 8),
(12, 'Omeplazol', 'Omeplazol genfar 20 mg.', 'Omeplazol.jpg', 0),
(13, 'Paracetamol', 'Paracetamol  50mg', 'Paracetamol.jpg', 90),
(14, 'Prednison', 'Prednison', 'Prednison.jpeg', 78.85),
(15, 'Tabcin', 'Tabcin Clasico', 'Tabcin.jpg', 15),
(16, 'Tabcindia', 'Tabcin que impide Dormir', 'Tabcindia.jpg', 0),
(17, 'Tabcin noche', 'Tabcin noche tabletas', 'Tabcinnoche.jpg', 56.2),
(18, 'Tyleno', 'Tyleno Regular', 'Tylenol.jpg', 63.9),
(19, 'Vitaflenaco ', 'Vitaflenaco Mas commplejo B\r\n15 Capsulas ', 'Vitaflenaco.jpg', 56.4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `Password` text COLLATE utf8_spanish_ci NOT NULL,
  `Imagen` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nombre`, `Apellido`, `Usuario`, `Password`, `Imagen`) VALUES
(1, 'Ludin', 'Juarez', 'ljuarez', '56483397', 'imagen.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
