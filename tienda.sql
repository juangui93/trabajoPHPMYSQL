-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2021 a las 00:16:06
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `documento` int(11) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `deuda` int(11) NOT NULL,
  PRIMARY KEY (`documento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`documento`, `nombres`, `apellidos`, `direccion`, `telefono`, `deuda`) VALUES
(123456, 'Mario Alejandro', 'BenÃ­tez Orozco', 'Calle 27 # 35-51', 4440000, 5000000),
(3480809, 'Guillermo ', 'Del Valle', 'calle 98a # 49-30 int 301', 2588052, 2000),
(32476543, 'Luz Amparo', 'Salinas Botero', 'carrera 24 # 70-12', 3457869, 3000),
(32491984, 'Luz Mery', 'Urrego Cardona', 'calle 98a # 49-30 int 301', 2588052, 1500),
(43250996, 'Adriana Patricia', 'Ãlvarez GÃ³mez', 'carrera 45 # 82a- 5 Int 115', 2147483647, 35000),
(46532167, 'Marina', 'AtehortÃºa', 'calle 4 # 56-32', 2365748, 2300),
(1017233956, 'Luis Alejandro', 'Del Valle Urrego', 'calle 98a # 49-30 int 301', 2588052, 12000),
(1214717534, 'Juan Guillermo', 'Del Valle Urrego', 'carrera 45 # 82a- 5 Int 115', 2147483647, 35000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallev`
--

CREATE TABLE IF NOT EXISTS `detallev` (
  `detalleID` int(11) NOT NULL AUTO_INCREMENT,
  `ventaID` int(11) NOT NULL,
  `fechaVenta` date NOT NULL,
  `documento` int(11) NOT NULL,
  `nombreCliente` varchar(30) NOT NULL,
  `productoID` int(11) NOT NULL,
  `nombreProducto` varchar(30) NOT NULL,
  `precioUnitario` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioTotal` int(11) NOT NULL,
  PRIMARY KEY (`detalleID`),
  KEY `documento` (`documento`),
  KEY `productoID` (`productoID`),
  KEY `ventaID` (`ventaID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `detallev`
--

INSERT INTO `detallev` (`detalleID`, `ventaID`, `fechaVenta`, `documento`, `nombreCliente`, `productoID`, `nombreProducto`, `precioUnitario`, `cantidad`, `precioTotal`) VALUES
(1, 1, '2021-02-15', 43250996, 'Adriana Ãlvarez', 2, 'Arepas', 2500, 2, 5000),
(2, 3, '2021-02-14', 3480809, 'Guillermo Del Valle', 1, 'Arroz', 1500, 5, 7500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `productoID` int(11) NOT NULL AUTO_INCREMENT,
  `nombreProducto` varchar(30) NOT NULL,
  `valorUnitario` int(11) NOT NULL,
  PRIMARY KEY (`productoID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`productoID`, `nombreProducto`, `valorUnitario`) VALUES
(1, 'Arroz', 1500),
(2, 'Arepas', 2500),
(3, 'SalchichÃ³n', 2500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `ventaID` int(11) NOT NULL AUTO_INCREMENT,
  `fechaVenta` date NOT NULL,
  `documento` int(11) NOT NULL,
  `productoID` int(11) NOT NULL,
  PRIMARY KEY (`ventaID`),
  KEY `documento` (`documento`),
  KEY `productoID` (`productoID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`ventaID`, `fechaVenta`, `documento`, `productoID`) VALUES
(1, '2021-02-15', 43250996, 2),
(2, '2021-02-13', 43250996, 1),
(3, '2021-02-14', 3480809, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallev`
--
ALTER TABLE `detallev`
  ADD CONSTRAINT `detallev_ibfk_1` FOREIGN KEY (`documento`) REFERENCES `clientes` (`documento`),
  ADD CONSTRAINT `detallev_ibfk_2` FOREIGN KEY (`productoID`) REFERENCES `productos` (`productoID`),
  ADD CONSTRAINT `detallev_ibfk_3` FOREIGN KEY (`ventaID`) REFERENCES `ventas` (`ventaID`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`documento`) REFERENCES `clientes` (`documento`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`productoID`) REFERENCES `productos` (`productoID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
