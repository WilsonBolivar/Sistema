-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2017 a las 21:15:45
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beca`
--

DROP TABLE IF EXISTS `beca`;
CREATE TABLE `beca` (
  `id` int(11) NOT NULL,
  `id beca` int(11) NOT NULL,
  `beca` char(2) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Especificacion de beca';

--
-- RELACIONES PARA LA TABLA `beca`:
--   `id`
--       `tipo de beca` -> `id`
--

--
-- Volcado de datos para la tabla `beca`
--

INSERT INTO `beca` (`id`, `id beca`, `beca`) VALUES
(1, 1, 'si'),
(2, 2, 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `becado`
--

DROP TABLE IF EXISTS `becado`;
CREATE TABLE `becado` (
  `id` int(11) NOT NULL,
  `id_repre` int(11) NOT NULL,
  `Identificacion` int(20) NOT NULL,
  `idsocial` int(11) NOT NULL,
  `idbeca` int(11) NOT NULL,
  `iddicapacidad` int(11) NOT NULL,
  `id direccion becado` int(11) NOT NULL,
  `PNomBeca` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `SNomBeca` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `PApeBeca` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `SApeBeca` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nivel` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Sexo` char(1) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Nacionalidad` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `FechaNacimi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Tabla Del Estudiante Becado';

--
-- RELACIONES PARA LA TABLA `becado`:
--   `id_repre`
--       `repre` -> `id`
--   `idsocial`
--       `contactoredes` -> `id`
--   `iddicapacidad`
--       `discapacidad` -> `id`
--   `idbeca`
--       `beca` -> `id`
--   `id direccion becado`
--       `direcbecado` -> `id`
--

--
-- Volcado de datos para la tabla `becado`
--

INSERT INTO `becado` (`id`, `id_repre`, `Identificacion`, `idsocial`, `idbeca`, `iddicapacidad`, `id direccion becado`, `PNomBeca`, `SNomBeca`, `PApeBeca`, `SApeBeca`, `nivel`, `Sexo`, `Nacionalidad`, `FechaNacimi`) VALUES
(1, 1, 25527300, 1, 1, 1, 1, 'Santiago', 'Jose ', 'Bolivar', 'Matos', 'Bachiller estudio universitario', 'M', 'venezolano', '2009-08-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactoredes`
--

DROP TABLE IF EXISTS `contactoredes`;
CREATE TABLE `contactoredes` (
  `id` int(11) NOT NULL,
  `facebook` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `twitter` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `instagram` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Redes del Bacado';

--
-- RELACIONES PARA LA TABLA `contactoredes`:
--

--
-- Volcado de datos para la tabla `contactoredes`
--

INSERT INTO `contactoredes` (`id`, `facebook`, `twitter`, `instagram`) VALUES
(1, 'www.@wilsonbolivar.com', '', 'troyawb'),
(2, 'www.@Mariasifia.com', '#sofiamaria', 'msbolivarmatos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcbecado`
--

DROP TABLE IF EXISTS `direcbecado`;
CREATE TABLE `direcbecado` (
  `id` int(11) NOT NULL,
  `Estado` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Municipio` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Ciudad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Direccion del Becado';

--
-- RELACIONES PARA LA TABLA `direcbecado`:
--

--
-- Volcado de datos para la tabla `direcbecado`
--

INSERT INTO `direcbecado` (`id`, `Estado`, `Municipio`, `Ciudad`, `Direccion`) VALUES
(1, 'Aragua', 'Sucre', 'cagua', 'calle comercio sector centro 3 casa nº 40'),
(2, 'Aragua', 'Sucre', 'cagua', 'calle Comercio sector centro 3 casa 40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcrepre`
--

DROP TABLE IF EXISTS `direcrepre`;
CREATE TABLE `direcrepre` (
  `id` int(11) NOT NULL,
  `Id_repre` int(11) NOT NULL,
  `Estado` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Municipio` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Parroquia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Ciudad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `celular` int(15) NOT NULL,
  `telefono` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Ubicacion De residencia de Representante';

--
-- RELACIONES PARA LA TABLA `direcrepre`:
--   `Id_repre`
--       `repre` -> `id`
--

--
-- Volcado de datos para la tabla `direcrepre`
--

INSERT INTO `direcrepre` (`id`, `Id_repre`, `Estado`, `Municipio`, `Parroquia`, `Ciudad`, `Direccion`, `celular`, `telefono`) VALUES
(1, 1, 'Aragua', 'Santiago Mariño', 'Santigo Mariño', 'Turmero', 'Calle Camili Torres conunto Residencias turmero Conjunto 2 edificio 2 piso 2 apartamento 10', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discapacidad`
--

DROP TABLE IF EXISTS `discapacidad`;
CREATE TABLE `discapacidad` (
  `id` int(11) NOT NULL,
  `discacidad` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `tipodiscacidad` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='discapacidad y tipo';

--
-- RELACIONES PARA LA TABLA `discapacidad`:
--

--
-- Volcado de datos para la tabla `discapacidad`
--

INSERT INTO `discapacidad` (`id`, `discacidad`, `tipodiscacidad`) VALUES
(1, 'no', 'Ninguna'),
(2, 'no', 'ninguna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profecion`
--

DROP TABLE IF EXISTS `profecion`;
CREATE TABLE `profecion` (
  `id` int(11) NOT NULL,
  `nivel` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Profecion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Nivel estudio Representante';

--
-- RELACIONES PARA LA TABLA `profecion`:
--   `id`
--       `repre` -> `id`
--

--
-- Volcado de datos para la tabla `profecion`
--

INSERT INTO `profecion` (`id`, `nivel`, `Profecion`, `cargo`) VALUES
(1, 'universitario', 'Ingeniero en Sistema', 'Accionista'),
(2, 'universitario', 'doctor', 'jede de piso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repre`
--

DROP TABLE IF EXISTS `repre`;
CREATE TABLE `repre` (
  `id` int(11) NOT NULL,
  `Cedula` int(11) NOT NULL,
  `Identificacion` int(10) NOT NULL,
  `PriNombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `SegNombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `PriApellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `SegApellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Sexo` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `FechaNaci` date NOT NULL,
  `Nacionalidad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cuentabanco` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla del Representante ';

--
-- RELACIONES PARA LA TABLA `repre`:
--

--
-- Volcado de datos para la tabla `repre`
--

INSERT INTO `repre` (`id`, `Cedula`, `Identificacion`, `PriNombre`, `SegNombre`, `PriApellido`, `SegApellido`, `Sexo`, `FechaNaci`, `Nacionalidad`, `cuentabanco`) VALUES
(1, 25527330, 1, 'wilson', 'alexander', 'bolivar', 'requena', 'M', '1994-08-02', 'Venezolano', 0),
(2, 255273311, 2, 'jose', 'mod', 'awd', 'fwefwef', 'M', '2010-03-01', 'venezolano', 0),
(3, 7294589, 3, 'gricel', 'martina', 'requena', 'corrales ', 'F', '1863-01-31', 'venezolana', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo de beca`
--

DROP TABLE IF EXISTS `tipo de beca`;
CREATE TABLE `tipo de beca` (
  `id` int(11) NOT NULL,
  `deportiva` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `comunal` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `cultural` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `productivo` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `medresbarrio` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `ecologica` char(2) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='tipos de becas ';

--
-- RELACIONES PARA LA TABLA `tipo de beca`:
--

--
-- Volcado de datos para la tabla `tipo de beca`
--

INSERT INTO `tipo de beca` (`id`, `deportiva`, `comunal`, `cultural`, `productivo`, `medresbarrio`, `ecologica`) VALUES
(1, 'si', 'si', 'no', 'no', 'no', 'no'),
(2, 'no', 'no', 'si', 'si', 'no', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `Usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Contraseña` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Nivel` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Usuarios del sistema';

--
-- RELACIONES PARA LA TABLA `usuario`:
--

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `Usuario`, `Contraseña`, `Nivel`) VALUES
(1, 'admin', 'admin', 'Administrador'),
(2, 'privi', 'privi', 'Privilejiado'),
(3, 'comun', 'comun', 'Comun');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `beca`
--
ALTER TABLE `beca`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `becado`
--
ALTER TABLE `becado`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Identificacion` (`Identificacion`),
  ADD UNIQUE KEY `id_repre` (`id_repre`),
  ADD UNIQUE KEY `redes` (`idsocial`),
  ADD UNIQUE KEY `beca` (`idbeca`),
  ADD UNIQUE KEY `iddicapacidad` (`iddicapacidad`),
  ADD UNIQUE KEY `id direccion becado` (`id direccion becado`);

--
-- Indices de la tabla `contactoredes`
--
ALTER TABLE `contactoredes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `direcbecado`
--
ALTER TABLE `direcbecado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `direcrepre`
--
ALTER TABLE `direcrepre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Id_repre` (`Id_repre`);

--
-- Indices de la tabla `discapacidad`
--
ALTER TABLE `discapacidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profecion`
--
ALTER TABLE `profecion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `repre`
--
ALTER TABLE `repre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Identificacion` (`Identificacion`),
  ADD UNIQUE KEY `Cedula` (`Cedula`);

--
-- Indices de la tabla `tipo de beca`
--
ALTER TABLE `tipo de beca`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `beca`
--
ALTER TABLE `beca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `becado`
--
ALTER TABLE `becado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `contactoredes`
--
ALTER TABLE `contactoredes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `direcbecado`
--
ALTER TABLE `direcbecado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `direcrepre`
--
ALTER TABLE `direcrepre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `discapacidad`
--
ALTER TABLE `discapacidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `profecion`
--
ALTER TABLE `profecion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `repre`
--
ALTER TABLE `repre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipo de beca`
--
ALTER TABLE `tipo de beca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `beca`
--
ALTER TABLE `beca`
  ADD CONSTRAINT `beca_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tipo de beca` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `becado`
--
ALTER TABLE `becado`
  ADD CONSTRAINT `becado_ibfk_1` FOREIGN KEY (`id_repre`) REFERENCES `repre` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `becado_ibfk_3` FOREIGN KEY (`idsocial`) REFERENCES `contactoredes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `becado_ibfk_4` FOREIGN KEY (`iddicapacidad`) REFERENCES `discapacidad` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `becado_ibfk_5` FOREIGN KEY (`idbeca`) REFERENCES `beca` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `becado_ibfk_6` FOREIGN KEY (`id direccion becado`) REFERENCES `direcbecado` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `direcrepre`
--
ALTER TABLE `direcrepre`
  ADD CONSTRAINT `direcrepre_ibfk_1` FOREIGN KEY (`Id_repre`) REFERENCES `repre` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `profecion`
--
ALTER TABLE `profecion`
  ADD CONSTRAINT `profecion_ibfk_1` FOREIGN KEY (`id`) REFERENCES `repre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
