-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2023 a las 18:33:39
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ajuste`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id_art` int(11) NOT NULL COMMENT 'id del articulo',
  `nom_art` varchar(255) DEFAULT NULL COMMENT 'nombre del articulo',
  `cod_art` varchar(11) NOT NULL COMMENT 'codigo de identificación del articulo',
  `des_art` varchar(255) NOT NULL COMMENT 'descripcion sobre el articulo\r\n',
  `pre_art` int(7) DEFAULT NULL COMMENT 'precio del articulo individual',
  `img_art` varchar(255) NOT NULL COMMENT 'dirrecion de la imagen',
  `cat_id` int(11) DEFAULT NULL,
  `pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_cat` int(11) NOT NULL COMMENT 'id del articulo',
  `nom_cat` varchar(255) DEFAULT NULL COMMENT 'titulo de la categoria'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_cat`, `nom_cat`) VALUES
(3, 'aseo '),
(4, 'bebidas'),
(5, 'carnicos'),
(6, 'despensa '),
(7, 'lacteos'),
(8, 'medicina'),
(9, 'panaderia'),
(10, 'plantilla '),
(11, 'vegetales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cli` int(11) NOT NULL COMMENT 'Id del cliente',
  `nom_cli` varchar(255) NOT NULL COMMENT 'nombre del cliente',
  `user_cli` varchar(255) DEFAULT NULL COMMENT 'alias del usuario',
  `ape_cli` varchar(255) NOT NULL COMMENT 'apellido del cliente',
  `fch_cli` date DEFAULT NULL COMMENT 'fecha de nacimiento del cliente',
  `cor_cli` varchar(255) DEFAULT NULL COMMENT 'correo electronico del cliente',
  `cel_cli` varchar(10) DEFAULT NULL COMMENT 'numero de contacto del cliente',
  `pas_cli` varchar(255) DEFAULT NULL COMMENT 'contraseña del cliente',
  `ciu_cli` varchar(255) DEFAULT NULL COMMENT 'ciudad de residencia del cliente',
  `dir_cli` varchar(255) DEFAULT NULL COMMENT 'direccion de residencia del cliente',
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_pro` int(11) NOT NULL COMMENT 'id del proveedor',
  `rzs_pro` varchar(255) NOT NULL COMMENT 'razon social del proveedor',
  `cor_pro` varchar(255) DEFAULT NULL COMMENT 'correo electronico del proveedor',
  `cel_pro` varchar(10) DEFAULT NULL COMMENT 'numero de contacto del proveedor',
  `rut_pro` varchar(255) DEFAULT NULL COMMENT 'registro unico tributario del proveedor',
  `dir_pro` varchar(255) DEFAULT NULL COMMENT 'direccion del proveedor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_pro`, `rzs_pro`, `cor_pro`, `cel_pro`, `rut_pro`, `dir_pro`) VALUES
(1, 'Don Arturo ', 'arturito@arturoSAS.com', '3254781024', '455215121', 'CRA11 #55-91'),
(2, 'Daddy Sausage', 'DannyA@gamil.com', '3114205874', '752465841253', 'CLL 12 #08-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL COMMENT 'id del rol ',
  `nom_rol` varchar(255) NOT NULL COMMENT 'nombre del rol '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nom_rol`) VALUES
(1, 'user '),
(2, 'admin ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_art`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cli`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_pro`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del articulo';

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del articulo', AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id del cliente';

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del proveedor', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del rol ', AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `articulo_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categoria` (`id_cat`),
  ADD CONSTRAINT `articulo_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `proveedor` (`id_pro`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
