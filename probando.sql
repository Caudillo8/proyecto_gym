-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2024 a las 20:42:31
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `probando`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`nombre`, `correo`, `telefono`, `id`, `fecha`) VALUES
('Martincito', 'martin@hotmail.com', '123456', 1, '0000-00-00'),
('Roberto', 'Roberto@hotmail.com', '1166905538', 10, '0000-00-00'),
('Jorge', 'Jorge@hotmail.com', '123123', 11, '0000-00-00'),
('Caroso', 'nuevocorreo@hotmail.com', '11664939', 12, '0000-00-00'),
('Caroso', 'nuevocorreo@hotmail.com', '11664939', 13, '0000-00-00'),
('Pepe', 'Esteeselmaildepepe@hotmail.com', '1166905538', 14, '0000-00-00'),
('Pepe', 'Esteeselmaildepepe@hotmail.com', '1166905538', 15, '0000-00-00'),
('ospp', 'pkq@hotmail.com', '34243', 16, '0000-00-00'),
('ospp', 'pkq@hotmail.com', '34243', 17, '0000-00-00'),
('holi', 'holi@hotmail.com', '123', 18, '0000-00-00'),
('Robert', 'Robert@hotmail.com', '1242142', 19, '0000-00-00'),
('Prueba', 'Prueba@hotmail.com', '11554433', 34, '0000-00-00'),
('Prueba', 'Prueba@hotmail.com', '11554433', 40, '0000-00-00'),
('Prueba', 'Prueba@hotmail.com', '11554433', 41, '0000-00-00'),
('Holaaa', 'hola@hotmail.com', '123456', 42, '0000-00-00'),
('Martincito', 'martincito@hotmail.com', '223344', 43, '2024-06-09'),
('Gabriel', 'Gabrielmartin@hotmail.com', '11223344', 44, '2024-06-09'),
('Gabriel', 'Gabrielmartin@hotmail.com', '11223344', 45, '2024-06-09'),
('Gabriel', 'Gabrielmartin@hotmail.com', '11223344', 46, '2024-06-09'),
('Gabriel', 'Gabrielmartin@hotmail.com', '11223344', 47, '2024-06-09'),
('Gabriel', 'Gabrielmartin@hotmail.com', '11223344', 48, '2024-06-09'),
('Gabriel', 'Gabrielmartin@hotmail.com', '11223344', 49, '2024-06-09'),
('Gabriel', 'Gabrielmartin@hotmail.com', '11223344', 50, '2024-06-09'),
('Gabriel', 'Gabrielmartin@hotmail.com', '11223344', 51, '2024-06-09'),
('Gabriel', 'Gabrielmartin@hotmail.com', '11223344', 52, '2024-06-09'),
('Gabriel', 'Gabrielmartin@hotmail.com', '11223344', 53, '2024-06-09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
