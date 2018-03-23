-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2018 a las 22:39:20
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examenparcial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `codigo` varchar(20) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sufa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`codigo`, `fecha`, `sufa`) VALUES
('4 8 15 16 23 42 ', '2018-03-23 15:24:04', 'SYSTEMFAILURE'),
('4 8 15 16 23 42 ', '2018-03-23 15:26:43', 'SYSTEMFAILURE'),
('4815162342 ', '2018-03-23 15:29:14', 'SYSTEMFAILURE'),
('4 8 15 16 23 42 ', '2018-03-23 15:29:30', 'SYSTEMFAILURE'),
('4 8 15 16 23 42', '2018-03-23 15:35:28', 'success'),
('4 8 15 16 23 42', '2018-03-23 15:35:59', 'success'),
('4 8 15 16 23 42', '2018-03-23 15:36:01', 'success'),
('', '2018-03-23 15:36:34', 'SYSTEMFAILURE'),
('4 8 15 16 23 42 ', '2018-03-23 15:36:44', 'SYSTEMFAILURE'),
('4 8 15 16 23 42 ', '2018-03-23 15:36:59', 'SYSTEMFAILURE'),
('4 8 15 16 23 42 ', '2018-03-23 15:37:15', 'SYSTEMFAILURE'),
('4 8 15 16 23 42 ', '2018-03-23 15:37:28', 'SYSTEMFAILURE'),
('4 8 15 16 23 42 ', '2018-03-23 15:37:30', 'SYSTEMFAILURE'),
('4 8 15 16 23 42 ', '2018-03-23 15:37:40', 'SYSTEMFAILURE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
