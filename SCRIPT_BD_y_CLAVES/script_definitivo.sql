-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2024 a las 20:46:14
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gimnasio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `nombre`) VALUES
(1, 'Yoga'),
(2, 'Pilates'),
(3, 'Spinning'),
(4, 'Zumba'),
(5, 'CrossFit');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(3) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `usuario`, `pass`) VALUES
(1, 'admin@admin.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `id` int(11) NOT NULL,
  `inicio` time NOT NULL,
  `fin` time NOT NULL,
  `cupos` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `comentarios` varchar(50) DEFAULT NULL,
  `fk_actividades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id`, `inicio`, `fin`, `cupos`, `fecha`, `comentarios`, `fk_actividades`) VALUES
(1, '09:00:00', '10:00:00', 20, '2024-06-20', 'Clase de Yoga', 1),
(2, '10:00:00', '11:00:00', 15, '2024-06-21', 'Clase de Pilates', 2),
(3, '11:00:00', '12:00:00', 25, '2024-06-22', 'Clase de Spinning', 3),
(4, '12:00:00', '13:00:00', 30, '2024-06-23', 'Clase de Zumba', 4),
(5, '13:00:00', '14:00:00', 20, '2024-06-24', 'Clase de CrossFit', 5),
(6, '14:00:00', '15:00:00', 20, '2024-06-20', 'Clase de Yoga', 1),
(7, '15:00:00', '16:00:00', 15, '2024-06-21', 'Clase de Pilates', 2),
(8, '16:00:00', '17:00:00', 25, '2024-06-22', 'Clase de Spinning', 3),
(9, '17:00:00', '18:00:00', 30, '2024-06-23', 'Clase de Zumba', 4),
(10, '18:00:00', '19:00:00', 20, '2024-06-24', 'Clase de CrossFit', 5),
(11, '19:00:00', '20:00:00', 20, '2024-06-25', 'Clase de Yoga', 1),
(12, '20:00:00', '21:00:00', 15, '2024-06-26', 'Clase de Pilates', 2),
(13, '21:00:00', '22:00:00', 25, '2024-06-27', 'Clase de Spinning', 3),
(14, '22:00:00', '23:00:00', 30, '2024-06-28', 'Clase de Zumba', 4),
(15, '23:00:00', '00:00:00', 20, '2024-06-29', 'Clase de CrossFit', 5),
(16, '09:00:00', '10:00:00', 20, '2024-07-01', 'Clase de Yoga', 1),
(17, '10:00:00', '11:00:00', 15, '2024-07-02', 'Clase de Pilates', 2),
(18, '11:00:00', '12:00:00', 25, '2024-07-03', 'Clase de Spinning', 3),
(19, '12:00:00', '13:00:00', 30, '2024-07-04', 'Clase de Zumba', 4),
(20, '13:00:00', '14:00:00', 20, '2024-07-05', 'Clase de CrossFit', 5),
(21, '14:00:00', '15:00:00', 20, '2024-07-06', 'Clase de Yoga', 1),
(22, '15:00:00', '16:00:00', 15, '2024-07-07', 'Clase de Pilates', 2),
(23, '16:00:00', '17:00:00', 25, '2024-07-08', 'Clase de Spinning', 3),
(24, '17:00:00', '18:00:00', 30, '2024-07-09', 'Clase de Zumba', 4),
(25, '18:00:00', '19:00:00', 20, '2024-07-10', 'Clase de CrossFit', 5),
(26, '19:00:00', '20:00:00', 20, '2024-07-11', 'Clase de Yoga', 1),
(27, '20:00:00', '21:00:00', 15, '2024-07-12', 'Clase de Pilates', 2),
(28, '21:00:00', '22:00:00', 25, '2024-07-13', 'Clase de Spinning', 3),
(29, '22:00:00', '23:00:00', 30, '2024-07-14', 'Clase de Zumba', 4),
(30, '23:00:00', '00:00:00', 20, '2024-07-15', 'Clase de CrossFit', 5),
(31, '09:00:00', '10:00:00', 20, '2024-07-16', 'Clase de Yoga', 1),
(32, '10:00:00', '11:00:00', 15, '2024-07-17', 'Clase de Pilates', 2),
(33, '11:00:00', '12:00:00', 25, '2024-07-18', 'Clase de Spinning', 3),
(34, '12:00:00', '13:00:00', 30, '2024-07-19', 'Clase de Zumba', 4),
(35, '13:00:00', '14:00:00', 20, '2024-07-20', 'Clase de CrossFit', 5),
(36, '14:00:00', '15:00:00', 20, '2024-07-21', 'Clase de Yoga', 1),
(37, '15:00:00', '16:00:00', 15, '2024-07-22', 'Clase de Pilates', 2),
(38, '16:00:00', '17:00:00', 25, '2024-07-23', 'Clase de Spinning', 3),
(39, '17:00:00', '18:00:00', 30, '2024-07-24', 'Clase de Zumba', 4),
(40, '18:00:00', '19:00:00', 20, '2024-07-25', 'Clase de CrossFit', 5),
(41, '19:00:00', '20:00:00', 20, '2024-07-26', 'Clase de Yoga', 1),
(42, '20:00:00', '21:00:00', 15, '2024-07-27', 'Clase de Pilates', 2),
(43, '21:00:00', '22:00:00', 25, '2024-07-28', 'Clase de Spinning', 3),
(44, '22:00:00', '23:00:00', 30, '2024-07-29', 'Clase de Zumba', 4),
(45, '23:00:00', '00:00:00', 20, '2024-07-30', 'Clase de CrossFit', 5),
(46, '09:00:00', '10:00:00', 20, '2024-08-01', 'Clase de Yoga', 1),
(47, '10:00:00', '11:00:00', 15, '2024-08-02', 'Clase de Pilates', 2),
(48, '11:00:00', '12:00:00', 25, '2024-08-03', 'Clase de Spinning', 3),
(49, '12:00:00', '13:00:00', 30, '2024-08-04', 'Clase de Zumba', 4),
(50, '13:00:00', '14:00:00', 20, '2024-08-05', 'Clase de CrossFit', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `dni` int(10) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `apellido`, `nombre`, `dni`, `telefono`, `mail`, `sexo`, `pass`) VALUES
(1, 'Perez', 'Juan', 12345678, '555123456', 'prueba@prueba.com', 'Masculino', '202cb962ac59075b964b07152d234b70'),
(2, 'Gonzalez', 'Ana', 87654321, '555987654', 'ana@example.com', 'Femenino', '202cb962ac59075b964b07152d234b70'),
(3, 'Lopez', 'Carlos', 13579246, '555246810', 'carlos@example.com', 'Masculino', '202cb962ac59075b964b07152d234b70'),
(4, 'Martinez', 'Laura', 24681357, '555135792', 'laura@example.com', 'Femenino', '202cb962ac59075b964b07152d234b70'),
(5, 'Rodriguez', 'Pablo', 36925814, '555369258', 'pablo@example.com', 'Masculino', '202cb962ac59075b964b07152d234b70'),
(6, 'Fernandez', 'Lucia', 14725836, '555147258', 'lucia@example.com', 'Femenino', '202cb962ac59075b964b07152d234b70'),
(7, 'Gomez', 'David', 25814739, '555258147', 'david@example.com', 'Masculino', '202cb962ac59075b964b07152d234b70'),
(8, 'Diaz', 'Sofia', 36914725, '555369147', 'sofia@example.com', 'Femenino', '202cb962ac59075b964b07152d234b70'),
(9, 'Alvarez', 'Miguel', 47125836, '555471258', 'miguel@example.com', 'Masculino', '202cb962ac59075b964b07152d234b70'),
(10, 'Romero', 'Isabella', 58236914, '555582369', 'isabella@example.com', 'Femenino', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `correo`, `telefono`, `fecha`) VALUES
(1, 'Luis', 'luis@example.com', '1100000024', '2024-06-20'),
(2, 'Elena', 'elena@example.com', '1100000025', '2024-06-21'),
(3, 'Mario', 'mario@example.com', '1100000026', '2024-06-22'),
(4, 'Alicia', 'alicia@example.com', '1100000027', '2024-06-23'),
(5, 'Ricardo', 'ricardo@example.com', '1100000028', '2024-06-24'),
(6, 'Estela', 'estela@example.com', '1100000029', '2024-06-25'),
(7, 'Martin', 'martin@example.com', '1100000030', '2024-06-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `dni` int(10) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `fk_actividades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `apellido`, `nombre`, `dni`, `telefono`, `mail`, `sexo`, `pass`, `fk_actividades`) VALUES
(1, 'Garcia', 'Maria', 87654321, '555654321', 'prueba@prueba.com', 'Femenino', '202cb962ac59075b964b07152d234b70', 1),
(2, 'Mendez', 'Roberto', 13579246, '555987321', 'roberto@example.com', 'Masculino', '202cb962ac59075b964b07152d234b70', 2),
(3, 'Sanchez', 'Carmen', 24681357, '555321987', 'carmen@example.com', 'Femenino', '202cb962ac59075b964b07152d234b70', 3),
(4, 'Reyes', 'Juan', 36925814, '555789456', 'juan@example.com', 'Masculino', '202cb962ac59075b964b07152d234b70', 4),
(5, 'Morales', 'Sara', 14725836, '555456789', 'sara@example.com', 'Femenino', '202cb962ac59075b964b07152d234b70', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `fk_cliente` int(11) NOT NULL,
  `fk_clase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `fk_cliente`, `fk_clase`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(10, 10, 10),
(11, 1, 11),
(12, 2, 12),
(13, 3, 13),
(14, 4, 14),
(15, 5, 15),
(16, 6, 16),
(17, 7, 17),
(18, 8, 18),
(19, 9, 19),
(20, 10, 20),
(21, 1, 21),
(22, 2, 22),
(23, 3, 23),
(24, 4, 24),
(25, 5, 25),
(26, 6, 26),
(27, 7, 27),
(28, 8, 28),
(29, 9, 29),
(30, 10, 30),
(31, 1, 31),
(32, 2, 32),
(33, 3, 33),
(34, 4, 34),
(35, 5, 35),
(36, 6, 36),
(37, 7, 37),
(38, 8, 38),
(39, 9, 39),
(40, 10, 40),
(41, 1, 41),
(42, 2, 42),
(43, 3, 43),
(44, 4, 44),
(45, 5, 45),
(46, 6, 46),
(47, 7, 47),
(48, 8, 48),
(49, 9, 49),
(50, 10, 50);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actividad` (`fk_actividades`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_actividades` (`fk_actividades`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clase` (`fk_clase`),
  ADD KEY `cliente` (`fk_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clases`
--
ALTER TABLE `clases`
  ADD CONSTRAINT `actividad` FOREIGN KEY (`fk_actividades`) REFERENCES `actividades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `clase` FOREIGN KEY (`fk_clase`) REFERENCES `clases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cliente` FOREIGN KEY (`fk_cliente`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
