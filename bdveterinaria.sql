-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2021 a las 23:04:30
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdveterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales`
--

CREATE TABLE `animales` (
  `Nombre` varchar(20) NOT NULL,
  `Raza` varchar(20) NOT NULL,
  `Edad` varchar(5) NOT NULL,
  `Motivo` varchar(25) NOT NULL,
  `Alergias` varchar(30) NOT NULL,
  `Peso` varchar(10) NOT NULL,
  `Temperatura` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `animales`
--

INSERT INTO `animales` (`Nombre`, `Raza`, `Edad`, `Motivo`, `Alergias`, `Peso`, `Temperatura`) VALUES
('Tita', 'Chihuahua', '8', 'Baño', 'No', '1.5 kilos', '37.5 C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `Nombre` varchar(20) NOT NULL,
  `id` int(25) NOT NULL,
  `Precio` varchar(20) NOT NULL,
  `Existencias` varchar(300) NOT NULL,
  `Proveedor` varchar(30) NOT NULL,
  `Departamento` varchar(20) NOT NULL,
  `Descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`Nombre`, `id`, `Precio`, `Existencias`, `Proveedor`, `Departamento`, `Descripcion`) VALUES
('erick', 123, '$50', '50', 'maquila', 'automoviles', 'llanta, grande');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Nombre` varchar(25) NOT NULL,
  `ApellidoPaterno` varchar(25) NOT NULL,
  `ApellidoMaterno` varchar(25) NOT NULL,
  `NumerodeTelefono` varchar(20) NOT NULL,
  `CorreoElectronico` varchar(30) NOT NULL,
  `Sexo` varchar(20) NOT NULL,
  `Direccion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `NumerodeTelefono`, `CorreoElectronico`, `Sexo`, `Direccion`) VALUES
('alejandro', 'perez', 'hernandez', '6561248742', 'prueba.1@gmail.com', 'hombre', 'las torres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Nombre` varchar(20) NOT NULL,
  `ApellidoPaterno` varchar(20) NOT NULL,
  `ApellidoMaterno` varchar(20) NOT NULL,
  `Direccion` varchar(20) NOT NULL,
  `NumerodeTelefono` varchar(50) NOT NULL,
  `Sexo` varchar(20) NOT NULL,
  `NumerodeEmpleado` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `Direccion`, `NumerodeTelefono`, `Sexo`, `NumerodeEmpleado`) VALUES
('Luis', 'Castañeda', 'hernandez', '6567702158', 'las torres', 'hombre', 1234);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Nombre`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`NumerodeEmpleado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
