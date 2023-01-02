-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-12-2022 a las 21:59:09
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tp base datos unidad 11`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos personas tp`
--

CREATE TABLE `datos personas tp` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(40) CHARACTER SET latin1 NOT NULL,
  `Apellido` varchar(40) CHARACTER SET latin1 NOT NULL,
  `Edad` tinyint(4) NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `Provincia` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `datos personas tp`
--

INSERT INTO `datos personas tp` (`ID`, `Nombre`, `Apellido`, `Edad`, `Fecha`, `Provincia`) VALUES
(1, 'Maria Florencia', 'Barros', 43, '0000-00-00 00:00:00', 'Bs As'),
(2, 'Jorge', 'Barros', 68, '0000-00-00 00:00:00', 'Bs As'),
(3, 'Cesar', 'Lopez', 11, '0000-00-00 00:00:00', 'Bs As'),
(4, 'Horacio', 'Lopez', 4, '0000-00-00 00:00:00', 'Bs As'),
(5, 'Florencia', 'Mendez', 65, '0000-00-00 00:00:00', 'Bs As');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos personas tp`
--
ALTER TABLE `datos personas tp`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos personas tp`
--
ALTER TABLE `datos personas tp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
