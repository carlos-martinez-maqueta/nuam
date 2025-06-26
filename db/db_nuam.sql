-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2025 a las 04:38:57
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
-- Base de datos: `db_nuam`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `name`, `mail`, `pass`) VALUES
(1, 'Administrador', 'admin@gmail.com', '$2y$10$0aknnInDOS63iC5OH4x9je2od9zpD5dRBO1KcP6vOQoB5L24D70We');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_eventos`
--

CREATE TABLE `tbl_eventos` (
  `id` int(11) NOT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `titulo` varchar(500) DEFAULT NULL,
  `descripcion` longtext DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `estado` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_eventos`
--

INSERT INTO `tbl_eventos` (`id`, `imagen`, `titulo`, `descripcion`, `fecha`, `estado`) VALUES
(1, 'imagen-evento-1.jpg', 'PROYECTO CIENTÍFICO', NULL, '2025-06-19', 'activo'),
(2, 'imagen-evento-2.jpg', 'CIENCIA PARA NIÑOS', NULL, '2025-06-19', 'activo'),
(3, 'imagen-evento-3.jpg', 'TALLER DE CREATIVIDAD', NULL, '2025-06-19', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_horarios`
--

CREATE TABLE `tbl_horarios` (
  `id` int(11) NOT NULL,
  `horario` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_horarios`
--

INSERT INTO `tbl_horarios` (`id`, `horario`) VALUES
(1, '8:00 AM'),
(2, '9:00 AM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_modalidad`
--

CREATE TABLE `tbl_modalidad` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_modalidad`
--

INSERT INTO `tbl_modalidad` (`id`, `titulo`) VALUES
(1, 'Presencial'),
(2, 'Virtual'),
(3, 'Llamada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reservas`
--

CREATE TABLE `tbl_reservas` (
  `id` int(11) NOT NULL,
  `id_cliente` varchar(100) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `horario` varchar(150) DEFAULT NULL,
  `modalidad` varchar(150) DEFAULT NULL,
  `mensaje` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_reservas`
--

INSERT INTO `tbl_reservas` (`id`, `id_cliente`, `fecha`, `horario`, `modalidad`, `mensaje`) VALUES
(1, '1', '2025-06-11', '8:00 AM', 'Presencial', 'Hola'),
(2, '1', '2025-06-11', '9:00 AM', 'Virtual', 'jj'),
(3, '1', '2025-06-11', '9:00 AM', 'Virtual', 'jj'),
(4, '1', '2025-06-14', '8:00 AM', 'Presencial', 'a'),
(5, '1', '2025-06-15', '9:00 AM', 'Virtual', 'a');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_eventos`
--
ALTER TABLE `tbl_eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_horarios`
--
ALTER TABLE `tbl_horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_modalidad`
--
ALTER TABLE `tbl_modalidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_reservas`
--
ALTER TABLE `tbl_reservas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_eventos`
--
ALTER TABLE `tbl_eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_horarios`
--
ALTER TABLE `tbl_horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_modalidad`
--
ALTER TABLE `tbl_modalidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_reservas`
--
ALTER TABLE `tbl_reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
