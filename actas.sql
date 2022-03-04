-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-03-2022 a las 06:12:27
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `actas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crearacta`
--

CREATE TABLE `crearacta` (
  `codigoActa` int(10) NOT NULL,
  `tema` varchar(10) DEFAULT NULL,
  `lugar` varchar(20) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `nombreCreador` varchar(30) DEFAULT NULL,
  `cargo` varchar(10) DEFAULT NULL,
  `Desarrollo` varchar(100) DEFAULT NULL,
  `Compromisos` varchar(100) DEFAULT NULL,
  `horaInicio` time DEFAULT NULL,
  `horaTerminacion` time DEFAULT NULL,
  `asistentes` varchar(20) DEFAULT NULL,
  `sede` varchar(10) DEFAULT NULL,
  `observaciones` varchar(30) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `crearacta`
--

INSERT INTO `crearacta` (`codigoActa`, `tema`, `lugar`, `fecha`, `nombreCreador`, `cargo`, `Desarrollo`, `Compromisos`, `horaInicio`, `horaTerminacion`, `asistentes`, `sede`, `observaciones`, `estado`) VALUES
(0, '', '', '2022-01-01', '', '', '', '', '00:00:00', '00:00:00', '', '', '', '2'),
(1, '', '', '2022-01-01', '', '', '', '', '00:00:00', '00:00:00', '', '', '', '2'),
(2, '', '', '2022-01-01', '', '', '', '', '00:00:00', '00:00:00', '', '', '', 'Iniciado'),
(5, '', '', '2022-01-01', '', '', '', '', '00:00:00', '00:00:00', '', '', '', 'Iniciado'),
(6, '', '', '2022-01-01', '', '', '', '', '00:00:00', '00:00:00', '', '', '', 'Iniciado'),
(8, '', '', '2022-01-01', '', '', '', '', '00:00:00', '00:00:00', '', '', '', 'Iniciado'),
(10, '', '', '2022-01-01', '', '', '', '', '00:00:00', '00:00:00', '', '', '', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioestudiante`
--

CREATE TABLE `usuarioestudiante` (
  `Usuario` varchar(15) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarioestudiante`
--

INSERT INTO `usuarioestudiante` (`Usuario`, `password`) VALUES
('1069504193', '1069504193');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariofuncionario`
--

CREATE TABLE `usuariofuncionario` (
  `Usuario` varchar(15) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuariofuncionario`
--

INSERT INTO `usuariofuncionario` (`Usuario`, `password`) VALUES
('1069504513', '1069504513');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioprofesor`
--

CREATE TABLE `usuarioprofesor` (
  `usuario` int(15) DEFAULT NULL,
  `password` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarioprofesor`
--

INSERT INTO `usuarioprofesor` (`usuario`, `password`) VALUES
(1007508540, 1007508540);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `crearacta`
--
ALTER TABLE `crearacta`
  ADD PRIMARY KEY (`codigoActa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
