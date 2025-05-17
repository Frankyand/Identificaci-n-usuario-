-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2025 a las 00:18:59
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
-- Base de datos: `eventos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE `inscripciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `fecha_inscripcion` timestamp NOT NULL DEFAULT current_timestamp(),
  `contraseña` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inscripciones`
--

INSERT INTO `inscripciones` (`id`, `nombre`, `correo`, `fecha_inscripcion`, `contraseña`) VALUES
(22, 'Luis', 'luis1@gmail.com', '2025-05-17 20:17:22', '12345'),
(23, 'Jose', 'Jose@gmail.com', '2025-05-17 21:20:43', '123456'),
(24, 'Juan', 'Juan123456@gmail.com', '2025-05-17 21:22:49', '1234567'),
(25, 'Mario', 'mario12345@gmail.com', '2025-05-17 22:14:29', '12345678'),
(26, 'Miguel', 'miguel12345@gmail.com', '2025-05-17 22:15:13', '123456789'),
(27, 'Ana', 'ana12345@gmail.com', '2025-05-17 22:15:44', '1234567891'),
(28, 'Carlos', 'carlos12345@gmailcom', '2025-05-17 22:16:51', '12345678912'),
(29, 'Fernando', 'fernando12345@gmail.com', '2025-05-17 22:17:24', '123456789123'),
(30, 'Camila', 'camila12345@gmailcom', '2025-05-17 22:17:49', '123456789123'),
(31, 'Gabriela', 'gabriela12345@gmail.com', '2025-05-17 22:18:20', '1234567891234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
