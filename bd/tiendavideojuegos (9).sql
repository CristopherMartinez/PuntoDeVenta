-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2023 a las 22:05:29
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendavideojuegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `idAdministrador` int(150) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `apellidos` varchar(150) NOT NULL,
  `correoElectronico` varchar(150) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `contrasenia` varchar(300) NOT NULL,
  `idRol` int(11) NOT NULL DEFAULT 2,
  `estado` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`idAdministrador`, `nombre`, `apellidos`, `correoElectronico`, `telefono`, `direccion`, `contrasenia`, `idRol`, `estado`) VALUES
(24, 'Juan Esteban', 'Aparicio ', 'juan@worldgames.com.mx', '4421163766', 'calle 99 #558 col. Meliton Salazar', '$2y$10$e8vfN8gySGSztJbfkr4Mtudkoyc11lKjDdv6weEJ3lTNP2eMXHu6e', 2, b'1'),
(26, 'Cristopher', 'Martinez Bahena', 'cristopher@worldgames.com', '9993354342', 'calle 99 #558 col. Meliton Salazar', '$2y$10$gDArSo8uy504ZrEyd1iL7e3fmxTKBs3wHUON1uNKfwgJZRdLlQCdq', 2, b'1'),
(27, 'Celeste ', 'Concha', 'celeste@worldgames.com', '9993354548', 'Calle 32 Colonia Centro entre 64a y 65b', '$2y$10$3SBZrzF02C/yIUmZ/4ExfuJRM3t7..BMYgB93ZIZg06XND5rzX99S', 2, b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombre`) VALUES
(1, 'Aventura'),
(2, 'Arcade'),
(3, 'Deportes'),
(4, 'Terror'),
(5, 'Estrategia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'Hola, tengo una consulta?', 'Claro, ¿Cuál es tu consulta?\r\n1. Membresía\r\n2. Juegos\r\n3. Pago'),
(2, '1. Membresía', 'Existen 3 tipos de membresías:\r\nPremium $60/mes\r\nGold $100/mes\r\nDiamond $200/mes'),
(3, '2. Juegos', 'Juegos: ¿Quieres acceder a los juegos o a comprar un juego?'),
(4, '3. Pago', 'Para realizar la compra de un juego o una membresía, tenemos dos formas de pago:\r\nTarjeta de debito\r\nTarjeta de credito'),
(5, 'Acceder a juegos', 'Para acceder y ver el catalogo de juegos disponibles, accede al menú y selecciona Videojuegos.'),
(6, 'Comprar juegos', 'Para comprar un juego, deberás haberte registrado previamente. Una vez registrado y seleccionado un juego de tu preferencias podrás verlo en el carrito de compra, en el cual, podrás pagarlo con tarjeta de debito o credito'),
(7, 'Como jugar', 'Para poder jugar debes primeramente comprar un juego y despues dirigirte al apartado de mis juegos una vez ahi dar click en Empezar a jugar'),
(8, 'Para que sirven los puntos', 'Una vez acumulados varios puntos tendras mas posibilidades de ganar un premio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consola`
--

CREATE TABLE `consola` (
  `idConsola` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `consola`
--

INSERT INTO `consola` (`idConsola`, `nombre`) VALUES
(1, 'PLAYSTATION 3'),
(2, 'PLAYSTATION 4'),
(3, 'PLAYSTATION 5'),
(4, 'XBOX ONE SERIES S'),
(5, 'XBOX ONE X'),
(6, 'XBOX ONE S'),
(7, 'NINTENDO SWITCH');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detventas`
--

CREATE TABLE `detventas` (
  `idDetVentas` int(11) NOT NULL,
  `idVenta` int(11) NOT NULL,
  `idMetPago` int(11) NOT NULL,
  `idVideojuego` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioUnitario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lanzamientosofertas`
--

CREATE TABLE `lanzamientosofertas` (
  `idVideojuego` int(11) NOT NULL,
  `idProveedor` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `cantidadInventario` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `idConsola` int(11) NOT NULL,
  `fechaSalida` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lanzamientosofertas`
--

INSERT INTO `lanzamientosofertas` (`idVideojuego`, `idProveedor`, `nombre`, `descripcion`, `imagen`, `precio`, `cantidadInventario`, `idCategoria`, `idConsola`, `fechaSalida`) VALUES
(1, 2, 'Greyhill Incident', 'Este juego Survival-Horror basado en una historia trata sobre una invasión alienígena clásica que ti', '../imgLanzamientos/Greyhill.jpg', 1800, 30, 4, 3, '9-06-2023'),
(3, 1, 'Jack Jeanne', 'Kisa está a punto de abandonar su sueño de convertirse en actriz cuando tiene la oportunidad de insc', '../imgLanzamientos/jackJeanne.jpg', 1850, 15, 1, 7, '15-06-2023'),
(4, 1, 'Dordogne', 'Adéntrate en una experiencia narrativa única y explora los miles de colores del verano de la Dordoña', '../imgLanzamientos/Dordogne.jpg', 1950, 30, 2, 6, '13-06-2023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `membresia`
--

CREATE TABLE `membresia` (
  `idMembresia` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `precio` double NOT NULL,
  `html` longtext DEFAULT NULL,
  `imagen` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `membresia`
--

INSERT INTO `membresia` (`idMembresia`, `nombre`, `descripcion`, `precio`, `html`, `imagen`) VALUES
(1, 'PREMIUM', 'Membresia nivel 1', 60, '<div class=\"pricing-table\">\r\n        <h3 class=\"pricing-title\">Premium</h3>\r\n        <div class=\"price\">$60<sup>/ mes</sup></div>\r\n        <ul class=\"table-list\">\r\n            <li>Temporadas <span>de videojuegos</span></li>\r\n            <li>Acceso Ilimitado <span>por 3 meses</span></li>\r\n            <li>Promociones <span>especiales</span></li>\r\n            <li>15 días <span> de demos especiales</span></li>\r\n            <li>6 Meses <span>de acceso a juegos online</span></li>\r\n        </ul>\r\n        <div class=\"table-buy\">\r\n            <div class=\"price\" hidden>id</div>\r\n            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal1\">Comprar</button>\r\n        </div>\r\n    </div>', ''),
(2, 'GOLD', 'Membresia nivel 2', 100, '<div class=\"pricing-table gold\">\r\n        <h3 class=\"pricing-title\">Gold</h3>\r\n        <div class=\"price\">$100<sup>/ mes</sup></div>\r\n        <ul class=\"table-list\">\r\n            <li>Acceso Ilimitado <span>por 12 meses</span></li>\r\n            <li>Juegos nintendo<span> especiales</span></li>\r\n            <li>1 Meses <span>de demos especiales</span></li>\r\n            <li>6 Meses <span> de acceso a juegos online</span></li>\r\n            <li>Acceso a preventa especial</li>\r\n        </ul>\r\n        <div class=\"table-buy\">\r\n            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal2\">Comprar</button>\r\n        </div>\r\n    </div>', ''),
(3, 'DIAMONT', 'Membresia nivel 3', 200, '<div class=\"pricing-table diamond\">\r\n        <h3 class=\"pricing-title\">Diamond</h3>\r\n        <div class=\"price\">$200<sup>/ mes</sup></div>\r\n        <ul class=\"table-list\">\r\n            <li>Acceso Ilimitado <span>por 15 meses</span></li>\r\n            <li>Mas puntos <span>al comprar</span></li>\r\n            <li>12 meses<span> de acceso a juegos online</span></li>\r\n            <li>Soporte <span> personalizado</span></li>\r\n            <li>Acceso a preventa especial</li>\r\n        </ul>\r\n        <div class=\"table-buy\">\r\n        <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal3\">Comprar</button>\r\n        </div>\r\n    </div>', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodopago`
--

CREATE TABLE `metodopago` (
  `idMetPago` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `metodopago`
--

INSERT INTO `metodopago` (`idMetPago`, `nombre`) VALUES
(1, 'Efectivo'),
(2, 'Tarjeta de debito'),
(3, 'Tarjeta de credito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opiniones`
--

CREATE TABLE `opiniones` (
  `idOpinion` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `idOrden` int(11) NOT NULL,
  `folio` varchar(10) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellidos` varchar(250) NOT NULL,
  `numeroTarjeta` varchar(19) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `fechaVencimiento` date NOT NULL,
  `cvv` int(11) NOT NULL,
  `fechaVenta` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`idOrden`, `folio`, `usuario`, `nombre`, `apellidos`, `numeroTarjeta`, `direccion`, `fechaVencimiento`, `cvv`, `fechaVenta`) VALUES
(174, '1617884827', 'crisb6395', 'Cristopher', 'Martinez Bahena', '4152 3136 7520 5322', 'calle 99 #558 col. Meliton Salazar', '2023-05-01', 267, '2023-05-16 04:57:25'),
(176, '3122540232', 'crisb6395', 'Cristopher', 'Martinez Bahena', '4152 3136 7520 5322', 'calle 99 #558 col. Meliton Salazar', '2023-05-01', 267, '2023-05-16 04:59:02'),
(177, '6488544927', 'marti9082', 'Cristopher', 'Martinez Bahena', '4421 2624 4548 7587', 'calle 99 558 x64a y 64b', '2023-05-01', 267, '2023-05-16 05:29:16'),
(178, '6505334574', 'marti9082', 'Cristopher', 'Martinez Bahena', '4421 2624 4548 7587', 'calle 99 558 x64a y 64b', '2023-05-01', 267, '2023-05-16 05:48:58'),
(179, '7468138446', 'marti9082', 'Cristopher', 'Martinez Bahena', '4421 2624 4548 7587', 'calle 99 558 x64a y 64b', '2023-05-01', 267, '2023-05-16 06:25:32'),
(180, '9142345386', 'celes1020', 'Celeste', 'Concha', '4152 3136 7520 5324', 'Calle 32 Colonia Centro entre 64a y 65b', '2023-05-01', 267, '2023-05-16 18:23:33'),
(181, '1057489098', 'celes1020', 'Celeste', 'Concha', '4421 2624 4548 7588', 'calle 99 558 x64a y 64b', '2023-05-01', 267, '2023-05-16 18:26:04'),
(182, '9056111846', 'celes1020', 'Celeste', 'Concha', '4421 2624 4548 7588', 'calle 99 558 x64a y 64b', '2023-05-01', 267, '2023-05-16 18:26:57'),
(183, '7882144251', 'david5031', 'David', 'Sulub', '4442 1624 4578 5421', 'Calle 32 Colonia Centro entre 64a y 65b', '2023-05-01', 267, '2023-05-16 18:32:16'),
(184, '6553838823', 'david5031', 'David', 'sulub', '4421 2624 4548 7589', 'calle 99 558 x64a y 64b', '2023-05-10', 267, '2023-05-16 18:34:24'),
(185, '3253564883', 'celes9925', 'Celeste', 'Concha', '4152 3136 7520 5322', 'calle 99 #558 col. Meliton Salazar', '2023-05-01', 267, '2023-05-16 18:42:06'),
(186, '8467637628', 'celes3190', 'Celeste', 'Concha', '4152 3136 7520 5322', 'calle 99 #558 col. Meliton Salazar', '2023-05-02', 267, '2023-05-16 18:47:03'),
(187, '7966050722', 'celes8850', 'Celeste', 'Concha', '4152 3136 7520 5322', 'calle 99 #558 col. Meliton Salazar', '2023-05-01', 267, '2023-05-16 18:49:10'),
(188, '9259525051', 'celes8850', 'Celeste', 'Concha', '4421 2624 4548 7581', 'calle 99 558 x64a y 64b', '2023-05-09', 267, '2023-05-16 18:50:45'),
(190, '7162181419', 'celes8850', 'Celeste', 'Concha', '4421 2624 4548 7581', 'calle 99 558 x64a y 64b', '2023-05-09', 267, '2023-05-16 18:52:45'),
(191, '1973456117', 'celes4988', 'Celeste', 'Concha', '4152 3136 7520 5322', 'calle 99 #558 col. Meliton Salazar', '2023-05-02', 267, '2023-05-16 18:56:02'),
(192, '1733851894', 'marti9082', 'Cristopher', 'Martinez Bahena', '4421 2624 4548 7587', 'calle 99 558 x64a y 64b', '2023-05-01', 267, '2023-05-16 19:06:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenesusuario`
--

CREATE TABLE `ordenesusuario` (
  `idOrden` int(11) NOT NULL,
  `idVideojuego` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `consola` varchar(150) NOT NULL,
  `precio` float NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ordenesusuario`
--

INSERT INTO `ordenesusuario` (`idOrden`, `idVideojuego`, `usuario`, `nombre`, `consola`, `precio`, `cantidad`) VALUES
(174, 58, 'crisb6395', 'farcry', 'PLAYSTATION 5', 1500, 1),
(174, 60, 'crisb6395', 'Cyberpunk', 'PLAYSTATION 5', 1765, 1),
(176, 64, 'crisb6395', 'Fornite', 'PLAYSTATION 3', 1800, 1),
(177, 68, 'marti9082', 'animalCrossing', 'NINTENDO SWITCH', 1800, 1),
(177, 69, 'marti9082', 'LuigisMansion3', 'NINTENDO SWITCH', 1900, 1),
(177, 70, 'marti9082', 'Splatoon3', 'NINTENDO SWITCH', 1950, 1),
(178, 89, 'marti9082', 'Red Dead Redemp', 'XBOX ONE SERIES S', 1995, 1),
(179, 91, 'marti9082', 'Far Cry 6 ', 'PLAYSTATION 3', 1800, 1),
(180, 73, 'celes1020', 'Grand Theft Auto V', 'PLAYSTATION 3', 1800, 1),
(180, 69, 'celes1020', 'LuigisMansion3', 'NINTENDO SWITCH', 1900, 1),
(180, 90, 'celes1020', 'Forza Horizon 5', 'XBOX ONE X', 2100, 1),
(181, 68, 'celes1020', 'animalCrossing', 'NINTENDO SWITCH', 1800, 1),
(182, 56, 'celes1020', 'A way out', 'XBOX ONE S', 1697, 1),
(183, 73, 'david5031', 'Grand Theft Auto V', 'PLAYSTATION 3', 1800, 1),
(184, 64, 'david5031', 'Fornite', 'PLAYSTATION 3', 1800, 1),
(185, 60, 'celes9925', 'Cyberpunk', 'PLAYSTATION 5', 1765, 1),
(186, 73, 'celes3190', 'Grand Theft Auto V', 'PLAYSTATION 3', 1800, 1),
(187, 73, 'celes8850', 'Grand Theft Auto V', 'PLAYSTATION 3', 1800, 1),
(188, 91, 'celes8850', 'Far Cry 6 ', 'PLAYSTATION 3', 1800, 1),
(190, 64, 'celes8850', 'Fornite', 'PLAYSTATION 3', 1800, 1),
(191, 60, 'celes4988', 'Cyberpunk', 'PLAYSTATION 5', 1765, 1),
(191, 89, 'celes4988', 'Red Dead Redemp', 'XBOX ONE SERIES S', 1995, 1),
(191, 90, 'celes4988', 'Forza Horizon 5', 'XBOX ONE X', 2100, 1),
(191, 69, 'celes4988', 'LuigisMansion3', 'NINTENDO SWITCH', 1900, 1),
(191, 70, 'celes4988', 'Splatoon3', 'NINTENDO SWITCH', 1950, 1),
(192, 53, 'marti9082', '7DaysToDie', 'XBOX ONE SERIES S', 1900, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `idPromociones` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `descuento` float NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idProveedor` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `correoElectronico` varchar(250) NOT NULL,
  `telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idProveedor`, `nombre`, `direccion`, `correoElectronico`, `telefono`) VALUES
(1, 'Compudesk', 'República de Uruguay No. 14 Col. Centro, México, C.P. 06000. México.', 'contacto@compudesk.com.mx', '5555814547'),
(2, 'LIFTOR SA DE CV', 'PROTON 16 Col. PARQUE INDUSTRIAL NAUCALPAN, EDOMEX, Estado de México', 'contacto@liftorsacv.com.mx', '5554474886');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntos`
--

CREATE TABLE `puntos` (
  `idPuntos` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `puntos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `puntos`
--

INSERT INTO `puntos` (`idPuntos`, `idUsuario`, `puntos`) VALUES
(19, 134, 120),
(20, 124, 60),
(22, 136, 20),
(26, 140, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `nombre`) VALUES
(1, 'cliente'),
(2, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugerencias`
--

CREATE TABLE `sugerencias` (
  `idSugerencia` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `comentarios` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sugerencias`
--

INSERT INTO `sugerencias` (`idSugerencia`, `nombre`, `correo`, `comentarios`) VALUES
(1, 'Cristopher', 'martinezcristopher69@gmail.com', 'Hola me parece que es una buena pagina '),
(23, 'Cristopher', 'martinezcristopher69@gmail.com', 'Me gusta mucho esta pagina'),
(24, 'Celeste', 'celeste.conchan@gmail.com', 'Me gusta mucho la pagina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjetapuntos`
--

CREATE TABLE `tarjetapuntos` (
  `idTarPuntos` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `precio` double NOT NULL,
  `idConsola` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjetasusuario`
--

CREATE TABLE `tarjetasusuario` (
  `idTarjeta` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellidos` varchar(250) NOT NULL,
  `numeroTarjeta` varchar(19) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `fechaVencimiento` date NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tarjetasusuario`
--

INSERT INTO `tarjetasusuario` (`idTarjeta`, `usuario`, `nombre`, `apellidos`, `numeroTarjeta`, `direccion`, `fechaVencimiento`, `cvv`) VALUES
(42, 'marti9082', 'Cristopher', 'Martinez Bahena', '4421 2624 4548 7587', 'calle 99 558 x64a y 64b', '2023-05-01', 267),
(43, 'marti9082', 'Cristopher', 'Martinez Bahena', '4421 2624 4548 7585', 'calle 99 558 x64a y 64b', '2023-05-01', 267),
(44, 'celes1020', 'Celeste', 'Concha', '4421 2624 4548 7588', 'calle 99 558 x64a y 64b', '2023-05-01', 267),
(45, 'david5031', 'David', 'sulub', '4421 2624 4548 7589', 'calle 99 558 x64a y 64b', '2023-05-10', 267),
(46, 'celes8850', 'Celeste', 'Concha', '4421 2624 4548 7581', 'calle 99 558 x64a y 64b', '2023-05-09', 267);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `idMembresia` int(11) DEFAULT 1,
  `usuario` varchar(150) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(150) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `contrasenia` varchar(300) NOT NULL,
  `idRol` int(11) DEFAULT 1,
  `estado` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `idMembresia`, `usuario`, `nombre`, `apellidos`, `correo`, `direccion`, `telefono`, `contrasenia`, `idRol`, `estado`) VALUES
(124, 3, 'marti9082', 'Cristopher', 'Martinez Bahena', 'martinezcristopher69@gmail.com', 'calle 99 #558 col. Meliton Salazar', '4421163766', '$2y$10$DuQc54HAehM9RN1Y7wssWOZkw3plZQgg20hNTr0sahn3FwNPXbINe', 1, b'1'),
(134, 1, 'crisb6395', 'Cristopher', 'Martinez Bahena', 'crisboxito@gmail.com', 'calle 99 #558 col. Meliton Salazar', '4421163766', '$2y$10$MAqHQcgwoYltRYxqHcouLu72q9AKPhHRiNsq/A2VqV5dMs9.SWvz6', 1, b'1'),
(136, 1, 'david5031', 'David', 'Sulub', 'davidsulub@gmail.com', 'Calle 32 Colonia Centro entre 64a y 65b', '4421163765', '$2y$10$Hr/Kefzda1tpMuYzfqp6p./9Glq.CTkIvHWLib9nge.RP8sABDmpm', 1, b'1'),
(140, 2, 'celes4988', 'Celeste', 'Concha', 'celeste.conchan@gmail.com', 'Calle 32 Colonia Centro entre 64a y 65b', '4421163766', '$2y$10$3ob/B9iYk833t6a1tkGobOdwuc5CBwlXSksIQGnDJ0akldewqhFd6', 1, b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idVentas` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `precioTotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventasvideojuegos`
--

CREATE TABLE `ventasvideojuegos` (
  `idVentaVideojuego` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `precio` float NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuego`
--

CREATE TABLE `videojuego` (
  `idVideojuego` int(11) NOT NULL,
  `idProveedor` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `imagen` varchar(150) NOT NULL,
  `precio` float NOT NULL,
  `cantidadInventario` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `idConsola` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `videojuego`
--

INSERT INTO `videojuego` (`idVideojuego`, `idProveedor`, `nombre`, `descripcion`, `imagen`, `precio`, `cantidadInventario`, `idCategoria`, `idConsola`) VALUES
(53, 1, '7DaysToDie', '7 Days to Die es un videojuego perteneciente al género de Videojuego de terror, mundo abierto, sandb', '../images/7DaysToDie.png', 1900, 46, 1, 4),
(56, 2, 'A way out', 'A Way Out es un videojuego de acción-aventura desarrollado por Hazelight Studios y distribuido por E', '../images/A way out.png', 1697, 23, 1, 6),
(60, 1, 'Cyberpunk', 'Cyberpunk 2077 es un videojuego desarrollado y publicado por CD Projekt, que se lanzó para Microsoft', '../images/Cyberpunk.png', 1765, 37, 1, 3),
(64, 2, 'Fornite', 'Es un juego de tipo batalla real en el que compiten hasta cien jugadores en solitario, dúos, tríos o', '../images/Fornite.png', 1800, 12, 2, 1),
(68, 2, 'animalCrossing', 'Animal Crossing: New Horizons es un videojuego de simulación social desarrollado y publicado por Nin', '../images/animalCrossing.png', 1800, 54, 2, 7),
(69, 1, 'LuigisMansion3', 'Luigi\'s Mansion 3 es un videojuego de terror de tipo videojuego de acción-aventura desarrollado por ', '../images/LuigisMansion3.png', 1900, 60, 1, 7),
(70, 1, 'Splatoon3', 'Splatoon 3 es la tercera entrega de la serie Splatoon. Es la secuela del exitoso juego de disparos e', '../images/Splatoon3.png', 1950, 23, 5, 7),
(73, 1, 'Grand Theft Auto V', 'Grand Theft Auto V es un videojuego de acción-aventura de mundo abierto en tercera persona desarroll', '../images/gtv.jpg', 1800, 44, 1, 1),
(89, 1, 'Red Dead Redemp', 'Red Dead Redemption 2 es un videojuego de acción-aventura western basado en el drama, en un mundo ab', '../images/Red Dead Redemp.png', 1995, 54, 1, 4),
(90, 1, 'Forza Horizon 5', 'Forza Horizon 5 es un videojuego de carreras multijugador en línea desarrollado por Playground Games', '../images/Forza Horizon 5.png', 2100, 53, 1, 5),
(91, 1, 'Far Cry 6 ', 'Far Cry 6 es un videojuego de disparos en primera persona desarrollado por Ubisoft Toronto y publica', '../images/Far Cry 6 .png', 1800, 53, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuegosusuario`
--

CREATE TABLE `videojuegosusuario` (
  `idVidUsuario` int(11) NOT NULL,
  `idVideojuego` int(11) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `nombreVideojuego` varchar(250) NOT NULL,
  `consola` varchar(250) NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `videojuegosusuario`
--

INSERT INTO `videojuegosusuario` (`idVidUsuario`, `idVideojuego`, `usuario`, `nombreVideojuego`, `consola`, `precio`, `imagen`) VALUES
(215, 58, 'crisb6395', 'farcry', 'PLAYSTATION 5', 1500, '../images/farcry.png'),
(216, 60, 'crisb6395', 'Cyberpunk', 'PLAYSTATION 5', 1765, '../images/Cyberpunk.png'),
(217, 64, 'crisb6395', 'Fornite', 'PLAYSTATION 3', 1800, '../images/Fornite.png'),
(218, 68, 'marti9082', 'animalCrossing', 'NINTENDO SWITCH', 1800, '../images/animalCrossing.png'),
(219, 69, 'marti9082', 'LuigisMansion3', 'NINTENDO SWITCH', 1900, '../images/LuigisMansion3.png'),
(220, 70, 'marti9082', 'Splatoon3', 'NINTENDO SWITCH', 1950, '../images/Splatoon3.png'),
(221, 89, 'marti9082', 'Red Dead Redemp', 'XBOX ONE SERIES S', 1995, '../images/Red Dead Redemp.png'),
(222, 91, 'marti9082', 'Far Cry 6 ', 'PLAYSTATION 3', 1800, '../images/Far Cry 6 .png'),
(223, 73, 'celes1020', 'Grand Theft Auto V', 'PLAYSTATION 3', 1800, '../images/gtv.jpg'),
(224, 69, 'celes1020', 'LuigisMansion3', 'NINTENDO SWITCH', 1900, '../images/LuigisMansion3.png'),
(225, 90, 'celes1020', 'Forza Horizon 5', 'XBOX ONE X', 2100, '../images/Forza Horizon 5.png'),
(226, 68, 'celes1020', 'animalCrossing', 'NINTENDO SWITCH', 1800, '../images/animalCrossing.png'),
(227, 56, 'celes1020', 'A way out', 'XBOX ONE S', 1697, '../images/A way out.png'),
(228, 73, 'david5031', 'Grand Theft Auto V', 'PLAYSTATION 3', 1800, '../images/gtv.jpg'),
(229, 64, 'david5031', 'Fornite', 'PLAYSTATION 3', 1800, '../images/Fornite.png'),
(230, 60, 'celes9925', 'Cyberpunk', 'PLAYSTATION 5', 1765, '../images/Cyberpunk.png'),
(231, 73, 'celes3190', 'Grand Theft Auto V', 'PLAYSTATION 3', 1800, '../images/gtv.jpg'),
(232, 73, 'celes8850', 'Grand Theft Auto V', 'PLAYSTATION 3', 1800, '../images/gtv.jpg'),
(233, 91, 'celes8850', 'Far Cry 6 ', 'PLAYSTATION 3', 1800, '../images/Far Cry 6 .png'),
(234, 64, 'celes8850', 'Fornite', 'PLAYSTATION 3', 1800, '../images/Fornite.png'),
(235, 60, 'celes4988', 'Cyberpunk', 'PLAYSTATION 5', 1765, '../images/Cyberpunk.png'),
(236, 89, 'celes4988', 'Red Dead Redemp', 'XBOX ONE SERIES S', 1995, '../images/Red Dead Redemp.png'),
(237, 90, 'celes4988', 'Forza Horizon 5', 'XBOX ONE X', 2100, '../images/Forza Horizon 5.png'),
(238, 69, 'celes4988', 'LuigisMansion3', 'NINTENDO SWITCH', 1900, '../images/LuigisMansion3.png'),
(239, 70, 'celes4988', 'Splatoon3', 'NINTENDO SWITCH', 1950, '../images/Splatoon3.png'),
(240, 53, 'marti9082', '7DaysToDie', 'XBOX ONE SERIES S', 1900, '../images/7DaysToDie.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`idAdministrador`),
  ADD KEY `idRol` (`idRol`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `consola`
--
ALTER TABLE `consola`
  ADD PRIMARY KEY (`idConsola`);

--
-- Indices de la tabla `detventas`
--
ALTER TABLE `detventas`
  ADD PRIMARY KEY (`idDetVentas`),
  ADD KEY `idVenta` (`idVenta`),
  ADD KEY `idProducto` (`idVideojuego`),
  ADD KEY `idVideojuego` (`idVideojuego`),
  ADD KEY `idMetPago` (`idMetPago`);

--
-- Indices de la tabla `lanzamientosofertas`
--
ALTER TABLE `lanzamientosofertas`
  ADD PRIMARY KEY (`idVideojuego`),
  ADD KEY `idProveedor` (`idProveedor`),
  ADD KEY `idCategoria` (`idCategoria`),
  ADD KEY `idConsola` (`idConsola`);

--
-- Indices de la tabla `membresia`
--
ALTER TABLE `membresia`
  ADD PRIMARY KEY (`idMembresia`);

--
-- Indices de la tabla `metodopago`
--
ALTER TABLE `metodopago`
  ADD PRIMARY KEY (`idMetPago`);

--
-- Indices de la tabla `opiniones`
--
ALTER TABLE `opiniones`
  ADD PRIMARY KEY (`idOpinion`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`idOrden`);

--
-- Indices de la tabla `ordenesusuario`
--
ALTER TABLE `ordenesusuario`
  ADD KEY `idOrden` (`idOrden`),
  ADD KEY `idOrden_2` (`idOrden`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`idPromociones`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `puntos`
--
ALTER TABLE `puntos`
  ADD PRIMARY KEY (`idPuntos`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  ADD PRIMARY KEY (`idSugerencia`);

--
-- Indices de la tabla `tarjetapuntos`
--
ALTER TABLE `tarjetapuntos`
  ADD PRIMARY KEY (`idTarPuntos`),
  ADD KEY `idConsola` (`idConsola`);

--
-- Indices de la tabla `tarjetasusuario`
--
ALTER TABLE `tarjetasusuario`
  ADD PRIMARY KEY (`idTarjeta`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idRol` (`idRol`),
  ADD KEY `idMembresia` (`idMembresia`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idVentas`),
  ADD KEY `idCliente` (`idUsuario`);

--
-- Indices de la tabla `ventasvideojuegos`
--
ALTER TABLE `ventasvideojuegos`
  ADD PRIMARY KEY (`idVentaVideojuego`);

--
-- Indices de la tabla `videojuego`
--
ALTER TABLE `videojuego`
  ADD PRIMARY KEY (`idVideojuego`),
  ADD KEY `idCategoria` (`idCategoria`),
  ADD KEY `idConsola` (`idConsola`),
  ADD KEY `idProveedor` (`idProveedor`);

--
-- Indices de la tabla `videojuegosusuario`
--
ALTER TABLE `videojuegosusuario`
  ADD PRIMARY KEY (`idVidUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `idAdministrador` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `consola`
--
ALTER TABLE `consola`
  MODIFY `idConsola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `detventas`
--
ALTER TABLE `detventas`
  MODIFY `idDetVentas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lanzamientosofertas`
--
ALTER TABLE `lanzamientosofertas`
  MODIFY `idVideojuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `membresia`
--
ALTER TABLE `membresia`
  MODIFY `idMembresia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `metodopago`
--
ALTER TABLE `metodopago`
  MODIFY `idMetPago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `opiniones`
--
ALTER TABLE `opiniones`
  MODIFY `idOpinion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `idOrden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `idPromociones` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `puntos`
--
ALTER TABLE `puntos`
  MODIFY `idPuntos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  MODIFY `idSugerencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tarjetapuntos`
--
ALTER TABLE `tarjetapuntos`
  MODIFY `idTarPuntos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tarjetasusuario`
--
ALTER TABLE `tarjetasusuario`
  MODIFY `idTarjeta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idVentas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventasvideojuegos`
--
ALTER TABLE `ventasvideojuegos`
  MODIFY `idVentaVideojuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `videojuego`
--
ALTER TABLE `videojuego`
  MODIFY `idVideojuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de la tabla `videojuegosusuario`
--
ALTER TABLE `videojuegosusuario`
  MODIFY `idVidUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD CONSTRAINT `administradores_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detventas`
--
ALTER TABLE `detventas`
  ADD CONSTRAINT `detventas_ibfk_1` FOREIGN KEY (`idVenta`) REFERENCES `ventas` (`idVentas`),
  ADD CONSTRAINT `detventas_ibfk_2` FOREIGN KEY (`idVideojuego`) REFERENCES `videojuego` (`idVideojuego`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detventas_ibfk_3` FOREIGN KEY (`idMetPago`) REFERENCES `metodopago` (`idMetPago`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `lanzamientosofertas`
--
ALTER TABLE `lanzamientosofertas`
  ADD CONSTRAINT `lanzamientosofertas_ibfk_1` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`idProveedor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lanzamientosofertas_ibfk_2` FOREIGN KEY (`idConsola`) REFERENCES `consola` (`idConsola`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lanzamientosofertas_ibfk_3` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `puntos`
--
ALTER TABLE `puntos`
  ADD CONSTRAINT `puntos_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tarjetapuntos`
--
ALTER TABLE `tarjetapuntos`
  ADD CONSTRAINT `tarjetapuntos_ibfk_1` FOREIGN KEY (`idConsola`) REFERENCES `consola` (`idConsola`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `videojuego`
--
ALTER TABLE `videojuego`
  ADD CONSTRAINT `videojuego_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `videojuego_ibfk_2` FOREIGN KEY (`idConsola`) REFERENCES `consola` (`idConsola`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `videojuego_ibfk_3` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`idProveedor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
