-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2019 a las 02:46:38
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lamborghini`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automoviles`
--

CREATE TABLE `automoviles` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Precio` varchar(10) NOT NULL,
  `Nacionalidad` varchar(10) NOT NULL,
  `HP` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `automoviles`
--

INSERT INTO `automoviles` (`ID`, `Nombre`, `Precio`, `Nacionalidad`, `HP`) VALUES
(1, 'Huracan', '$230,775', 'Italiana', 602),
(2, 'Aventador', '$380,210', 'Italiana', 720),
(3, 'Murcielago', '$379,437', 'Italiana', 760),
(4, 'Gallardo', '$222,766', 'Italiana', 570),
(5, 'Veneno', '$6,1M', 'Italiana', 750),
(7, 'Velo', '1010', 'Mexicana', 10022);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `automoviles`
--
ALTER TABLE `automoviles`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `automoviles`
--
ALTER TABLE `automoviles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
