-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2023 a las 15:18:50
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
-- Base de datos: `tsbarato`
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
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_art`, `nom_art`, `cod_art`, `des_art`, `pre_art`, `img_art`, `cat_id`) VALUES
(1, 'Jabon', '15478', 'Jabon que wele rico ', 1000, 'ci', NULL),
(2, 'Jabon', '5471', 'Jabon de avena', 1200, 'ci', NULL),
(3, 'Jabon', '5471', 'Jabon de avena', 1200, 'ci', NULL),
(4, 'Jabon', '5471', 'Jabon de avena', 1200, 'ci', NULL),
(5, 'Shampoo', '546145', '500g', 1200, 'ci', 3),
(6, '', '', '', 0, 'ci', NULL),
(7, '', '', '', 0, 'ci', NULL),
(8, '', '', '', 0, 'ci', NULL),
(9, '', '', '', 0, 'ci', NULL),
(20, 'dsadasd', '5471', 'dsaadsfdwdefqikgyuwdgfiyugewujfhuiwreyafvctryeicfytgwrtv7kficdafcsarctasrtgqatce5yhgesfthyeujhytgfeartyhujikuolipo´0ñolobfvdgrhytuhu', 0, 'ci', 3),
(46, 'Jugo', '45415241', 'Jugo hit', 1000, 'ci', 4);

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
  `dir_cli` varchar(255) DEFAULT NULL COMMENT 'direccion de residencia del cliente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cli`, `nom_cli`, `user_cli`, `ape_cli`, `fch_cli`, `cor_cli`, `cel_cli`, `pas_cli`, `ciu_cli`, `dir_cli`) VALUES
(1, 'Julian', 'guanki', 'Muñoz Garcia', '2004-07-20', 'jm65726@gmail.com', '3117813045', '$2y$10$h2PzY3CL5BBazMt/MsulbOHEW/.BnwlyOZlzES33/flhFB0AprqKW', 'La Plata', 'Cra 5 # 5-38'),
(49, 'Ejemplo', 'ejemplo', 'Hash', '2023-07-20', 'jm@gmail.com', '3117813045', '$2y$10$eCe4ujAO1cREwsFE0IDhQOL7UZRGVEbrarGZk5GpLi7ALF00M5Hn2', NULL, 'alla'),
(50, 'Brayan', 'Bry', 'Papa', '2023-07-20', 'guanki@gmail.com', '3117813045', '$2y$10$smZoVfxPuiy4gQGcVbgCgOfLTJ39dc3dYL8Cn1cUS2dtcz7XIXsVC', NULL, 'mas alla aun '),
(51, 'Tabla', 'Ejemplito', 'Ejemplo', '2023-07-20', 'jm@gmail.com', '3117813045', '$2y$10$svuj1gqFCAzQdxlHA37JYO84lGUyxR0xngJ1DY/AkUdw3I4bs/ZGu', NULL, 'mas alla aun '),
(52, 'Tablita', 'cicici', 'Ejemplito', '2023-07-12', 'jm@gmail.com', '3117813045', '$2y$10$QGgIHIhfWGtWIsX4Zl2TUe58UMtQZzi7pVK/wCqzGbxrEp1n6i28u', NULL, 'alla'),
(53, 'Ejemplo', 'guanki', 'Celular', '2023-07-13', 'guanki@gmail.com', '3117813045', '$2y$10$CpqpFz/ZhTQaCkuKLx0vne/QYST5CYrwN9Y.IACi0FHSiHRBgXtZG', NULL, 'alla'),
(54, 'ejemplo', 'user', 'ingreso', '2023-07-19', 'jm@gmail.com', '3117813045', '$2y$10$Y0prKIJsx/hXtOAWaTA8z.oNKeJ5efDekz3RFagBSADU3Y28tbXxW', NULL, 'alla'),
(55, 'Ejemplo', 'cliente', 'No sé', '2023-07-19', 'jm@gmail.com', '3117813045', '$2y$10$C4oOgJNlKXr8M0/InKnPlOA.x.UZ/SreNDmr.SFQHYJb0BgRfPYFm', NULL, 'alla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientexrol`
--

CREATE TABLE `clientexrol` (
  `cli_id` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientexrol`
--

INSERT INTO `clientexrol` (`cli_id`, `rol_id`) VALUES
(51, 1),
(52, 1),
(53, 1),
(1, 1),
(1, 1),
(1, 2),
(1, 2),
(54, 1),
(54, 2),
(55, 1),
(55, 2),
(55, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `codigo`, `nombre`, `descripcion`) VALUES
(1, '1358', 'Papas ', 'Margaritaas sabor limoz'),
(2, '3647', 'Gaseosa', 'Coca-cola'),
(3, '5402', 'Jugo', 'Hit caja '),
(5, '1358', 'Papas ', 'margaritas sabor pollo'),
(6, '4858', 'Agua', 'H20 1000ml'),
(8, '10025', 'Chocolatina', 'Jumbo 127g'),
(9, '4512', 'Bombón', 'Sabor sandia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_pro` int(11) NOT NULL COMMENT 'id del proveedor',
  `rzs_pro` varchar(255) NOT NULL COMMENT 'razon social del proveedor',
  `cor_pro` varchar(255) DEFAULT NULL COMMENT 'correo electronico del proveedor',
  `cel_pro` varchar(10) DEFAULT NULL COMMENT 'numero de contacto del proveedor',
  `nit_pro` varchar(255) NOT NULL COMMENT 'numero de identificación tributaria del proveedor ',
  `rut_pro` varchar(255) DEFAULT NULL COMMENT 'registro unico tributario del proveedor',
  `dir_pro` varchar(255) DEFAULT NULL COMMENT 'direccion del proveedor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_pro`, `rzs_pro`, `cor_pro`, `cel_pro`, `nit_pro`, `rut_pro`, `dir_pro`) VALUES
(1, 'Don Arturo ', 'arturito@arturoSAS.com', '3254781024', '', '455215121', 'CRA11 #55-91'),
(2, 'Daddy Sausage', 'DannyA@gamil.com', '3114205874', '', '752465841253', 'CLL 12 #08-12'),
(3, 'DOBE', NULL, '3117813045', '12576312402', NULL, 'CR4 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedorxarticulo`
--

CREATE TABLE `proveedorxarticulo` (
  `art_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  ADD KEY `cat_id` (`cat_id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cli`);

--
-- Indices de la tabla `clientexrol`
--
ALTER TABLE `clientexrol`
  ADD KEY `cli_id` (`cli_id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_pro`);

--
-- Indices de la tabla `proveedorxarticulo`
--
ALTER TABLE `proveedorxarticulo`
  ADD KEY `art_id` (`art_id`),
  ADD KEY `pro_id` (`pro_id`);

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
  MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del articulo', AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del articulo', AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id del cliente', AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del proveedor', AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `articulo_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categoria` (`id_cat`);

--
-- Filtros para la tabla `clientexrol`
--
ALTER TABLE `clientexrol`
  ADD CONSTRAINT `clientexrol_ibfk_1` FOREIGN KEY (`cli_id`) REFERENCES `cliente` (`id_cli`),
  ADD CONSTRAINT `clientexrol_ibfk_2` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `proveedorxarticulo`
--
ALTER TABLE `proveedorxarticulo`
  ADD CONSTRAINT `proveedorxarticulo_ibfk_1` FOREIGN KEY (`art_id`) REFERENCES `articulo` (`id_art`),
  ADD CONSTRAINT `proveedorxarticulo_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `proveedor` (`id_pro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
