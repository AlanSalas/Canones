-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2019 a las 03:16:01
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `canones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canones`
--

CREATE TABLE `canones` (
  `id_can` int(11) NOT NULL,
  `nombre_can` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status_can` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `canones`
--

INSERT INTO `canones` (`id_can`, `nombre_can`, `status_can`) VALUES
(1, 'Cañon Epson #1', 1),
(2, 'Cañon Epson #2', 1),
(3, 'Cañon facha vietnamita', 1),
(4, 'No mames te la creíste', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usr` int(11) NOT NULL,
  `matricula_usr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_usr` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_usr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email_usr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nivel_usr` int(11) NOT NULL,
  `status_usr` tinyint(1) NOT NULL,
  `password_usr` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usr`, `matricula_usr`, `nombre_usr`, `telefono_usr`, `email_usr`, `nivel_usr`, `status_usr`, `password_usr`) VALUES
(1, '00276466', 'Alan Salas', '9981284316', 'dubekone@gmail.com', 1, 1, 'estrella100'),
(2, '00276469', 'Armando Robles', '9981303030', 'army@gmail.com', 1, 1, 'estrella100'),
(3, '00267870', 'Luis Vazquez', '1234567890', 'pixcel@gmail.com', 1, 1, 'estrella100'),
(4, '00276570', 'Ruben Tellez', '1234567890', 'ruby@gmail.com', 1, 1, 'estrella100');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `canones`
--
ALTER TABLE `canones`
  ADD PRIMARY KEY (`id_can`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usr`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `canones`
--
ALTER TABLE `canones`
  MODIFY `id_can` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
