-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2022 a las 19:32:37
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_desarrollo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `apellidos` varchar(200) DEFAULT NULL,
  `telefono` varchar(100) NOT NULL,
  `correo` varchar(150) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `estatus` tinyint(3) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellidos`, `telefono`, `correo`, `fecha_registro`, `estatus`) VALUES
(1, 'Alberto', 'Ramos Ortega', '2227160285', 'albert@gmail.com', '2022-01-26 07:23:30', 1),
(2, 'Gonzalo', 'Calderon', '5154585252', 'gonza@gmail.com', '2022-01-17 06:00:00', 1),
(3, 'Roberto', 'Buendia', '2225148561', 'rob@gmail.com', '2022-01-05 06:00:00', 1),
(4, 'Ana Karen', 'Carreto', '2214586235', 'ana@gmail.com', '2022-01-12 06:00:00', 1),
(5, 'Maria', 'Del Rocio', '2214586554', 'mari@gmail.com', '2022-01-04 06:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tipo` int(11) NOT NULL COMMENT '1. Administrador, 2. Asistente',
  `estatus` tinyint(3) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellidos`, `correo`, `usuario`, `password`, `tipo`, `estatus`) VALUES
(1, 'Administrador', '1', 'admin1@gmail.com', ' Admin1', 'admin123', 1, 1),
(2, 'Administrador', '2', 'admin2@gmail.com', 'Admin2', 'admin123', 1, 1),
(3, 'Asistente', '1', 'asiste1@gmail.com', 'Asiste1', 'asiste123', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `concepto` varchar(500) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `monto` varchar(100) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `estatus` tinyint(3) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `id_cliente`, `concepto`, `descripcion`, `monto`, `fecha_registro`, `estatus`) VALUES
(1, 2, 'Liquidación de compra', 'Pago realizado por compra de 1000 piezas', '$1,500.00', '2022-01-26 14:41:46', 1),
(2, 2, 'Pago mensual de compra', 'Pago mensual por la compra de 1000 pzas', '$5,000.00', '2022-01-26 14:43:48', 1),
(3, 1, 'Compra de ...', 'Venta de ... 1500 pzas.', '$80,000.00', '2022-01-26 14:45:56', 1),
(4, 3, 'Venta de ... ', 'Venta de 500 pzas de ...', '$400,000.00', '2022-01-26 18:26:48', 1),
(5, 5, 'Pago de servicio con descuento', 'Pago con descuento por acuerdo del proveedor y cliente.', '$300,000.00', '2022-01-26 18:31:40', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
