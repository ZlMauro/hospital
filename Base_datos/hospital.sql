-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-09-2021 a las 22:22:03
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hospital`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcita`
--

CREATE TABLE `tblcita` (
  `id` int(11) NOT NULL,
  `codigo_cita` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `identificacion_paciente` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `identificacion_medico` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `diagnostico` text COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblcita`
--

INSERT INTO `tblcita` (`id`, `codigo_cita`, `fecha`, `hora`, `identificacion_paciente`, `identificacion_medico`, `diagnostico`, `activo`) VALUES
(1, '339', '2021-09-13', '16:18:00', '1060655620', '1060655620', 'Primera cita creada', 1),
(2, '270', '2021-09-24', '15:19:00', '1060655620', '1060655620', 'Segunda cita', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmedico`
--

CREATE TABLE `tblmedico` (
  `id` int(11) DEFAULT NULL,
  `identificacion` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_documento` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_completo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `especialidad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblmedico`
--

INSERT INTO `tblmedico` (`id`, `identificacion`, `tipo_documento`, `nombre_completo`, `especialidad`, `activo`) VALUES
(NULL, '1060655620', 'CC', 'doctor 1', 'Medicina', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpaciente`
--

CREATE TABLE `tblpaciente` (
  `id` int(11) NOT NULL,
  `identificacion` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_documento` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_completo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_eps` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblpaciente`
--

INSERT INTO `tblpaciente` (`id`, `identificacion`, `tipo_documento`, `nombre_completo`, `direccion`, `nombre_eps`, `activo`) VALUES
(1, '1060655620', 'CC', 'Mauricio giraldo valencia', 'cra 109 -22', '1', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblcita`
--
ALTER TABLE `tblcita`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblpaciente`
--
ALTER TABLE `tblpaciente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblcita`
--
ALTER TABLE `tblcita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblpaciente`
--
ALTER TABLE `tblpaciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
