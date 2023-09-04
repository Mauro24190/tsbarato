-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:1002
-- Tiempo de generación: 04-09-2023 a las 14:54:07
-- Versión del servidor: 10.4.24-MariaDB
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
  `img_artDSADSA` varchar(255) NOT NULL COMMENT 'dirrecion de la imagen',
  `cat_id` int(11) DEFAULT NULL,
  `img_art` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_art`, `nom_art`, `cod_art`, `des_art`, `pre_art`, `img_artDSADSA`, `cat_id`, `img_art`) VALUES
(96, 'Cocacola', '0000000001', 'Cocacola 1.5ml', 5000, '', 4, 'imagenes/cocacola1.5.png'),
(97, 'Colombiana', '0000000002', 'Colombiana 1.5ml', 4000, '', 4, 'imagenes/colombiana1.5.png'),
(114, 'Fresas', '8000000001', '500gr de fresas', 5000, '', 11, 'imagenes/fresas.png'),
(115, 'Manzana verde', '8000000002', '500gr de manzana verde', 6500, '', 11, 'imagenes/manzanaverde.png'),
(119, 'Pollo', '78456532', '500gr pollo', 6000, '', 5, 'imagenes/pollo.png'),
(120, 'Carne de cerdo ', '3000000002', '500gr carne de cerdo', 12000, '', 5, 'imagenes/carnecerdo.png'),
(121, 'Leche', '5000000001', 'Leche alqueria entera 1100ml', 6000, '', 7, 'imagenes/alqueriaentera.png'),
(122, 'Crema de leche', '5000000002', 'Crema de leche alquería 180g', 7500, '', 7, 'imagenes/cremaleche.png'),
(123, 'Lenteja', '4000000001', 'lenteja la soberana 500gr', 3500, '', 6, 'imagenes/lentejasoberana.png'),
(124, 'Arveja verde', '4000000002', 'arveja verde la soberana 500gr', 2300, '', 6, 'imagenes/arvejasoberana.png'),
(125, 'Jabón rey ', '1000000001', 'Jabón rey en barra 300g', 3200, '', 3, 'imagenes/jabonrey.png'),
(126, 'Jabón en polvo ', '1000000002', 'Jabón fab en polvo 3kg', 25000, '', 3, 'imagenes/fabx3kg.png'),
(127, 'Pan sandwich', '7000000001', 'Pan sandwich Santa Clara', 9200, '', 9, 'imagenes/pansguche.png'),
(128, 'Pan hamburguesa', '7000000002', 'Pan hamburguesa 400g', 6500, '', 9, 'imagenes/panhamburgeusa.png'),
(129, 'Tapabocas', '6000000001', 'Tapaboca desechable ', 2000, '', 8, 'imagenes/tapabocas.png'),
(130, 'Dolex', '6000000002', 'Dolex 200 tabletas', 42000, '', 8, 'imagenes/dolex.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_cat` int(11) NOT NULL COMMENT 'id del articulo',
  `nom_cat` varchar(255) DEFAULT NULL COMMENT 'titulo de la categoria'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `dir_cli` varchar(255) DEFAULT NULL COMMENT 'direccion de residencia del cliente',
  `pri_cli` int(11) NOT NULL COMMENT 'Privilegios del cliente\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cli`, `nom_cli`, `user_cli`, `ape_cli`, `fch_cli`, `cor_cli`, `cel_cli`, `pas_cli`, `ciu_cli`, `dir_cli`, `pri_cli`) VALUES
(61, 'Ejemplo', 'Priv', 'cambios', '2023-08-01', 'jm@gmail.com', '3117813045', '$2y$10$JT6JYQ36UMTZrWrNInQ54OOkm2BDshHlXgo3defcGhBOOPQ8WJVP.', NULL, 'alla', 2),
(64, 'Mauricio', 'Mauro', 'Achipiz', '2004-08-24', 'machipiz9@misena.edu.co', '3117505835', '$2y$10$HO0W4l8VcTIqUr8s/2s.reTj75EquZXCfTTGLZXxu0PR90cx91Ase', NULL, 'La Plata', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`imagen`) VALUES
('imagenes/tl.jpg');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_pro`, `rzs_pro`, `cor_pro`, `cel_pro`, `nit_pro`, `rut_pro`, `dir_pro`) VALUES
(4, 'POSTOBÓN S.A.', 'postobon@hotmail.com', '3175952105', '105485142', NULL, 'Colombia '),
(5, 'Fruverla4', 'fruver@hotmail.com', '36481267', '846913756', NULL, 'Colombia '),
(6, 'Carnitas.S.A.', 'carnitas@hotmail.com', '8512946', '784598657', NULL, 'Colombia '),
(7, 'Alqueria.S.A.', 'alqueria@hotmail.com', '57841236', '126545818', NULL, 'Colombia '),
(8, 'La Soberana.S.A.S', 'lasoberana@hotmail.com', '21874616', '154679152', NULL, 'Colombia '),
(9, 'Todo aseo.S.A.S.', 'todoaseo@hotmail.com', '57413588', '841216564', NULL, 'Colombia '),
(10, 'Santa Clara', 'santaclara@hotmail.com', '5784613467', '155458121', NULL, 'Colombia '),
(11, 'Genfar.S.A.', 'genfar@hotmail.com', '45412184', '845118418', NULL, 'Colombia ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedorxarticulo`
--

CREATE TABLE `proveedorxarticulo` (
  `art_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL COMMENT 'id del rol ',
  `nom_rol` varchar(255) NOT NULL COMMENT 'nombre del rol '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del articulo', AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del articulo', AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id del cliente', AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del proveedor', AUTO_INCREMENT=12;

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
-- Filtros para la tabla `proveedorxarticulo`
--
ALTER TABLE `proveedorxarticulo`
  ADD CONSTRAINT `proveedorxarticulo_ibfk_1` FOREIGN KEY (`art_id`) REFERENCES `articulo` (`id_art`),
  ADD CONSTRAINT `proveedorxarticulo_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `proveedor` (`id_pro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
