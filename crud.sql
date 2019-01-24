-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2018 a las 05:22:28
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_de_datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `email` varchar(30) NOT NULL,
  `genero` varchar(15) NOT NULL,
  `edad` int(2) NOT NULL,
  `profesion` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `crud`
--

INSERT INTO `crud` (`id`, `nombre`, `apellido`, `email`, `genero`, `edad`, `profesion`, `direccion`) VALUES
(3, 'Esmeralda', 'Moran', 'moran@gmail.com', 'femenino', 23, 'ingeniero en sistemas', 'Pierola con Estandrt'),
(4, 'Miguel', 'Estofanero', 'rios@gmail.com', 'masculino', 25, 'Asistente Contable', 'Av Britain'),
(6, 'Carlos', 'Robles', 'robles@gmail.com', 'masculino', 24, 'LogÃ­stica externa', 'Las Palmas Rivera'),
(8, 'Esther', 'Marin', 'marin@gmail.com', 'femenino', 25, 'Desarrollador Web', 'Av Revolucion');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
