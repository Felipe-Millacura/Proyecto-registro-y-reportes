-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2019 a las 07:58:55
-- Versión del servidor: 10.3.15-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `minimarket`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boleta`
--

CREATE TABLE `boleta` (
  `idBoleta` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idSucursal` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `boleta`
--

INSERT INTO `boleta` (`idBoleta`, `idUsuario`, `idSucursal`, `fecha`, `total`) VALUES
(1, 1, 1, '2019-06-26', 1),
(2, 2, 2, '2019-06-25', 1),
(3, 3, 3, '2019-06-25', 1),
(4, 4, 4, '2019-06-25', 1),
(5, 5, 5, '2019-06-25', 1),
(6, 6, 6, '2019-06-25', 1),
(7, 7, 7, '2019-06-25', 1),
(8, 8, 8, '2019-06-25', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `idDetalle` int(11) NOT NULL,
  `idBoleta` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `subTotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`idDetalle`, `idBoleta`, `idProducto`, `cantidad`, `precio`, `subTotal`) VALUES
(1, 1, 1, 1, 60000, 1),
(2, 2, 2, 1, 60000, 1),
(3, 3, 3, 1, 100000, 1),
(4, 4, 4, 1, 650000, 1),
(5, 5, 5, 1, 40000, 1),
(6, 6, 6, 1, 75000, 1),
(7, 7, 7, 1, 350000, 1),
(8, 8, 8, 1, 600000, 1),
(13, 1, 9, 1, 600000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idMarca` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idMarca`, `nombre`, `activo`) VALUES
(1, 'Puma', 1),
(2, 'Gucci', 1),
(3, 'Nike', 1),
(4, 'Microsoft', 1),
(5, 'LG', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL,
  `idMarca` int(11) NOT NULL,
  `idProveedor` int(11) NOT NULL,
  `idTipoProducto` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nombreP` varchar(100) NOT NULL,
  `descripcion` varchar(2000) NOT NULL,
  `stock` int(11) NOT NULL,
  `stockMinimo` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `idMarca`, `idProveedor`, `idTipoProducto`, `codigo`, `nombreP`, `descripcion`, `stock`, `stockMinimo`, `precio`, `activo`) VALUES
(1, 1, 1, 2, 100, 'Cali Bold', 'Zapatillas de mujer', 15, 1, 60000, 1),
(2, 1, 1, 2, 101, 'CELL Viper', 'Zapatillas de hombre', 5, 1, 60000, 1),
(3, 2, 1, 1, 102, 'Pantalón', 'Pantalón de Lana de Pata de Gallo', 65, 1, 100000, 1),
(4, 2, 1, 1, 103, 'Chaqueta', 'Chaqueta Bomber de Seda Estampada', 100, 1, 650000, 1),
(5, 3, 1, 2, 104, 'Nike Shox R4', 'Zapatillas para Hombre', 10, 1, 40000, 1),
(6, 3, 1, 1, 105, 'Nike Sportswear', 'Sudadera con capucha y media ', 7, 1, 75000, 1),
(7, 4, 1, 3, 106, 'Xbox One', 'Consola para el hogar', 13, 1, 350000, 1),
(8, 4, 1, 3, 107, 'Surface Pro 6', 'Tablet con windows 10', 32, 1, 600000, 1),
(9, 5, 1, 3, 108, 'LG V50 ThinQ', 'Pantalla OLED 16,25cm', 95, 1, 455000, 1),
(10, 5, 1, 3, 109, 'LG V30', 'Pantalla OLED Fullvision 15.24cm', 5, 1, 675000, 1),
(32, 5, 1, 3, 110, 'Monitor', 'Monitor 144hz - 1ms', 2, 1, 320000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idProveedor` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idProveedor`, `nombre`, `activo`) VALUES
(1, 'Mayorista', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `idSucursal` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`idSucursal`, `nombre`, `activo`) VALUES
(1, 'Plaza Oeste', 1),
(2, 'Macul', 1),
(3, 'Maipu', 1),
(4, 'Talagante', 1),
(5, 'Las Condes', 1),
(6, 'Pajaritos', 1),
(7, 'Lo Espejo', 1),
(8, 'Ciudad Satelite', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproducto`
--

CREATE TABLE `tipoproducto` (
  `idTipoProducto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipoproducto`
--

INSERT INTO `tipoproducto` (`idTipoProducto`, `nombre`, `activo`) VALUES
(1, 'Ropa', 1),
(2, 'Calzado', 1),
(3, 'Tecnología', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `idSucursal` int(11) NOT NULL,
  `rut` int(11) NOT NULL,
  `digito` varchar(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `paterno` varchar(50) NOT NULL,
  `materno` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `activo` tinyint(4) NOT NULL,
  `esVendedor` tinyint(4) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `idSucursal`, `rut`, `digito`, `username`, `paterno`, `materno`, `password`, `activo`, `esVendedor`, `id_level`) VALUES
(1, 1, 11111111, '1', 'vendedorONE', 'vendedorONE', 'vendedorONE', 'vendedor', 1, 1, 2),
(2, 2, 22222222, '2', 'vendedorTWO', 'vendedorTWO', 'vendedorTWO', 'vendedor', 1, 1, 2),
(3, 3, 33333333, '3', 'vendedorTRES', 'vendedorTRES', 'vendedorTRES', 'vendedor', 1, 1, 2),
(4, 4, 44444444, '4', 'vendedorFOUR', 'vendedorFOUR', 'vendedorFOUR', 'vendedor', 1, 1, 2),
(5, 5, 55555555, '5', 'vendedorFIVE', 'vendedorFIVE', 'vendedorFIVE', 'vendedor', 1, 1, 2),
(6, 6, 66666666, '6', 'vendedorSIX', 'vendedorSIX', 'vendedorSIX', 'vendedor', 1, 1, 2),
(7, 7, 77777777, '7', 'vendedorSEVEN', 'vendedorSEVEN', 'vendedorSEVEN', 'vendedor', 1, 1, 2),
(8, 8, 88888888, '8', 'vendedorOCHO', 'vendedorOCHO', 'vendedorOCHO', 'vendedor', 1, 1, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `boleta`
--
ALTER TABLE `boleta`
  ADD PRIMARY KEY (`idBoleta`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idSucursal` (`idSucursal`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`idDetalle`),
  ADD KEY `idBoleta` (`idBoleta`),
  ADD KEY `idProducto` (`idProducto`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idMarca`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD KEY `idMarca` (`idMarca`),
  ADD KEY `idProveedor` (`idProveedor`),
  ADD KEY `idTipoProducto` (`idTipoProducto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idProveedor`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`idSucursal`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `tipoproducto`
--
ALTER TABLE `tipoproducto`
  ADD PRIMARY KEY (`idTipoProducto`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `rut` (`rut`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `boleta`
--
ALTER TABLE `boleta`
  MODIFY `idBoleta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `idDetalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `idSucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipoproducto`
--
ALTER TABLE `tipoproducto`
  MODIFY `idTipoProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `boleta`
--
ALTER TABLE `boleta`
  ADD CONSTRAINT `boleta_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `boleta_ibfk_2` FOREIGN KEY (`idSucursal`) REFERENCES `sucursal` (`idSucursal`);

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `detalle_ibfk_1` FOREIGN KEY (`idBoleta`) REFERENCES `boleta` (`idBoleta`),
  ADD CONSTRAINT `detalle_ibfk_2` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`idMarca`) REFERENCES `marca` (`idMarca`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`idProveedor`),
  ADD CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`idTipoProducto`) REFERENCES `tipoproducto` (`idTipoProducto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
