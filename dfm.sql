-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2020 a las 06:01:38
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dfm`
--
CREATE DATABASE IF NOT EXISTS `dfm` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dfm`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrios`
--

CREATE TABLE `barrios` (
  `id` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `nombre` text NOT NULL,
  `idestaca` text NOT NULL,
  `idconsejo` text NOT NULL,
  `idpais` text NOT NULL,
  `solicitudes_medicinas_recibidas` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `barrios`
--

INSERT INTO `barrios` (`id`, `codigo`, `nombre`, `idestaca`, `idconsejo`, `idpais`, `solicitudes_medicinas_recibidas`, `fecha`) VALUES
(1, '206938', 'Anzoategui Ward', '1', '1', '1', '', '2020-06-18 16:04:00'),
(2, '121592', 'Barcelona Ward', '1', '1', '1', '', '2020-06-18 16:04:21'),
(3, '219525', 'Bolivar Ward', '1', '1', '1', '', '2020-06-18 16:04:49'),
(4, '305766', 'Nueva Barcelona Ward', '1', '1', '1', '', '2020-06-18 16:05:22'),
(5, '479500', 'Puerto Piritu Branch', '1', '1', '1', '', '2020-06-18 16:05:41'),
(6, '206946', 'Vinedo Ward', '1', '1', '1', '', '2020-06-18 16:06:03'),
(7, '305758', 'Carupano Branch', '2', '1', '1', '', '2020-06-18 16:06:23'),
(8, '336645', 'Guayacan de las Flores Branch', '2', '1', '1', '', '2020-06-18 16:06:40'),
(9, '274763', 'Guiria Branch', '2', '1', '1', '', '2020-06-18 16:07:01'),
(10, '378208', 'Primero de Mayo Branch', '2', '1', '1', '', '2020-06-20 03:58:31'),
(11, '135534', 'Catedral Ward', '3', '1', '1', '', '2020-06-18 16:07:56'),
(12, '434795', 'Libertador Ward', '3', '1', '1', '', '2020-06-20 03:58:33'),
(13, '189650', 'La Sabanita Ward', '3', '1', '1', '', '2020-06-18 16:08:53'),
(14, '339881', 'Peru Ward', '3', '1', '1', '', '2020-06-18 16:09:20'),
(15, '194328', 'Soledad Ward', '3', '1', '1', '', '2020-06-18 16:09:39'),
(16, '219568', 'Ayacucho Ward', '4', '1', '1', '', '2020-06-18 16:10:12'),
(17, '464600', 'Campeche Ward', '4', '1', '1', '', '2020-06-18 16:10:35'),
(18, '135542', 'Cumana Ward', '4', '1', '1', '', '2020-06-18 16:11:24'),
(19, '330078', 'Cumanacoa Ward', '4', '1', '1', '', '2020-06-18 16:11:44'),
(20, '380180', 'Mariguitar Ward', '4', '1', '1', '', '2020-06-18 16:12:09'),
(21, '206954', 'Sucre Ward', '4', '1', '1', '', '2020-06-18 16:12:33'),
(22, '135550', 'Anaco Ward', '5', '1', '1', '', '2020-06-18 16:12:59'),
(23, '339482', 'Cantaura Ward', '5', '1', '1', '', '2020-06-18 16:13:20'),
(24, '291064', 'El Tigrito Ward', '5', '1', '1', '', '2020-06-18 16:13:36'),
(25, '338389', 'El Tigre', '5', '1', '1', '', '2020-06-18 16:14:04'),
(26, '219533', 'Libertad Branch', '5', '1', '1', '', '2020-06-18 16:14:59'),
(27, '336661', 'Pariaguan Ward', '5', '1', '1', '', '2020-06-18 16:15:24'),
(28, '312215', 'Alta Vista Ward', '6', '1', '1', '', '2020-06-18 16:15:54'),
(29, '247219', 'Caroni Ward', '6', '1', '1', '', '2020-06-18 16:16:24'),
(30, '247227', 'La Gran Sabana 1st Ward', '6', '1', '1', '', '2020-06-18 16:16:54'),
(31, '1777378', 'La Gran Sabana 2nd Ward', '6', '1', '1', '', '2020-06-18 16:17:57'),
(32, '312932', 'Unare Ward', '6', '1', '1', '', '2020-06-18 16:18:20'),
(33, '305898', 'Enoc Ward', '7', '1', '1', '', '2020-06-18 16:19:35'),
(34, '336629', 'Fundemos Ward', '7', '1', '1', '', '2020-06-18 16:19:56'),
(35, '459194', 'La Floresta Ward', '7', '1', '1', '', '2020-06-18 16:20:14'),
(36, '292052', 'Las Brisas Ward', '7', '1', '1', '', '2020-06-18 16:20:39'),
(37, '440566', 'Libertador Ward', '7', '1', '1', '', '2020-06-18 16:22:14'),
(38, '92398', 'Los Guaritos Ward', '7', '1', '1', '', '2020-06-18 16:23:31'),
(39, '336696', 'Paramaconi Ward', '7', '1', '1', '', '2020-06-18 16:23:52'),
(40, '274755', 'Punta de Mata Ward', '7', '1', '1', '', '2020-06-18 16:24:10'),
(41, '305324', 'San Juan Ward', '8', '1', '1', '', '2020-06-18 16:26:01'),
(42, '274771', 'Punta de Piedras Ward', '8', '1', '1', '', '2020-06-18 16:26:29'),
(43, '471879', 'Nueva Esparta  ', '8', '1', '1', '', '2020-06-18 16:26:58'),
(44, '338370', 'Capital', '8', '1', '1', '', '2020-06-18 16:27:20'),
(45, '291099', 'Boyaca Ward', '9', '1', '1', '', '2020-06-18 16:27:42'),
(46, '354775', 'Delicias Ward', '9', '1', '1', '', '2020-06-20 00:33:37'),
(47, '206962', 'Guanta Branch', '9', '1', '1', '', '2020-06-18 16:28:32'),
(48, '352799', 'Lecheria Ward', '9', '1', '1', '', '2020-06-18 16:28:53'),
(49, '460923', 'Los Altos Branch', '9', '1', '1', '', '2020-06-18 16:29:13'),
(50, '219541', 'Paraiso Ward', '9', '1', '1', '', '2020-06-18 16:29:32'),
(51, '86320', 'Puerto La Cruz Ward', '9', '1', '1', '', '2020-06-18 16:29:49'),
(52, '1677179', 'Rotaria Ward', '9', '1', '1', '', '2020-06-18 16:30:08'),
(53, '444367', 'San Diego Ward', '9', '1', '1', '', '2020-06-18 16:30:33'),
(54, '264385', 'El Callao Ward', '10', '1', '1', '', '2020-06-18 16:31:33'),
(55, '190551', 'El Progreso Ward', '10', '1', '1', '', '2020-06-18 16:31:49'),
(56, '135585', 'San Felix 1st Ward', '10', '1', '1', '', '2020-06-18 16:32:10'),
(57, '312924', 'San Felix 2nd Ward', '10', '1', '1', '', '2020-06-18 16:32:30'),
(58, '461539', 'San Felix 3rd Ward', '10', '1', '1', '', '2020-06-18 16:33:13'),
(59, '135577', 'Upata Ward', '10', '1', '1', '', '2020-06-18 16:35:43'),
(60, '78867', 'La Urbina ', '11', '1', '1', '', '2020-06-18 16:36:12'),
(61, '312304', 'Palo Verde ', '11', '1', '1', '', '2020-06-18 16:36:29'),
(62, '305332', 'Caurimare ', '11', '1', '1', '', '2020-06-18 16:36:55'),
(63, '109576', 'La Trinidad', '11', '1', '1', '', '2020-06-18 16:37:15'),
(64, '94366', 'Guarenas', '12', '1', '1', '', '2020-06-18 16:37:39'),
(65, '201928', 'Guatire', '12', '1', '1', '', '2020-06-18 16:37:58'),
(66, '242306', 'La Rosa', '12', '1', '1', '', '2020-06-18 16:38:16'),
(67, '242292', 'Los Naranjos ', '12', '1', '1', '', '2020-06-18 16:40:55'),
(68, '210781', 'Trapichito', '12', '1', '1', '', '2020-06-18 16:41:40'),
(69, '336939', 'Santa Elena de Uairen Branch', '13', '1', '1', '', '2020-06-18 16:42:03'),
(70, '1744178', 'Tucupita Branch', '13', '1', '1', '', '2020-06-18 16:42:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consejo`
--

CREATE TABLE `consejo` (
  `id` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `nombre` text NOT NULL,
  `id_pais` text NOT NULL,
  `solicitudes_medicinas_recibidas` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consejo`
--

INSERT INTO `consejo` (`id`, `codigo`, `nombre`, `id_pais`, `solicitudes_medicinas_recibidas`, `fecha`) VALUES
(1, '0001', 'Barcelona', '1', '', '2020-06-20 03:59:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desaprobado`
--

CREATE TABLE `desaprobado` (
  `id` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `ncm` text NOT NULL,
  `nombre` text NOT NULL,
  `edad` text NOT NULL,
  `email` text NOT NULL,
  `telefono` text NOT NULL,
  `idbarrio` text NOT NULL,
  `idestaca` text NOT NULL,
  `idconsejo` text NOT NULL,
  `idpais` text NOT NULL,
  `enfermedad` text NOT NULL,
  `medicamento` text NOT NULL,
  `dosis` text NOT NULL,
  `duracion` text NOT NULL,
  `necesidad` text NOT NULL,
  `pa1` text NOT NULL,
  `pa2` text NOT NULL,
  `im` text NOT NULL,
  `rm` text NOT NULL,
  `ci` text NOT NULL,
  `aprobacion_gerente` text NOT NULL,
  `comentarios_gerente` text NOT NULL,
  `aprobacion_asesor` text NOT NULL,
  `comentarios_asesor` text NOT NULL,
  `aprobacion_finanzas` text NOT NULL,
  `comentarios_finanzas` text NOT NULL,
  `fecha_solicitud` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entregados`
--

CREATE TABLE `entregados` (
  `id` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `ncm` text NOT NULL,
  `nombre` text NOT NULL,
  `edad` text NOT NULL,
  `email` text NOT NULL,
  `telefono` text NOT NULL,
  `idbarrio` text NOT NULL,
  `idestaca` text NOT NULL,
  `idconsejo` text NOT NULL,
  `idpais` text NOT NULL,
  `enfermedad` text NOT NULL,
  `medicamento` text NOT NULL,
  `dosis_recetada` text NOT NULL,
  `duracion` text NOT NULL,
  `necesidad` text NOT NULL,
  `pa1` text NOT NULL,
  `pa2` text NOT NULL,
  `im` text NOT NULL,
  `rm` text NOT NULL,
  `ci` text NOT NULL,
  `aprobacion_gerente` text NOT NULL,
  `comentarios_gerente` text NOT NULL,
  `aprobacion_asesor` text NOT NULL,
  `comentarios_asesor` text NOT NULL,
  `aprobacion_finanzas` text NOT NULL,
  `comentarios_finanzas` text NOT NULL,
  `fecha_solicitud` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entregar`
--

CREATE TABLE `entregar` (
  `id` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `ncm` text NOT NULL,
  `nombre` text NOT NULL,
  `edad` text NOT NULL,
  `email` text NOT NULL,
  `telefono` text NOT NULL,
  `idbarrio` text NOT NULL,
  `idestaca` text NOT NULL,
  `idconsejo` text NOT NULL,
  `idpais` text NOT NULL,
  `enfermedad` text NOT NULL,
  `medicamento` text NOT NULL,
  `dosis_recetada` text NOT NULL,
  `duracion` text NOT NULL,
  `necesidad` text NOT NULL,
  `pa1` text NOT NULL,
  `pa2` text NOT NULL,
  `im` text NOT NULL,
  `rm` text NOT NULL,
  `ci` text NOT NULL,
  `aprobacion_gerente` text NOT NULL,
  `comentarios_gerente` text NOT NULL,
  `aprobacion_asesor` text NOT NULL,
  `comentarios_asesor` text NOT NULL,
  `aprobacion_finanzas` text NOT NULL,
  `comentarios_finanzas` text NOT NULL,
  `fecha_solicitud` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estaca`
--

CREATE TABLE `estaca` (
  `id` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `nombre` text NOT NULL,
  `idconsejo` text NOT NULL,
  `idpais` text NOT NULL,
  `solicitudes_medicinas_recibidas` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estaca`
--

INSERT INTO `estaca` (`id`, `codigo`, `nombre`, `idconsejo`, `idpais`, `solicitudes_medicinas_recibidas`, `fecha`) VALUES
(1, '519650', 'Barcelona Venezuela Stake', '1', '1', '', '2020-06-20 03:59:25'),
(2, '378194', 'Carupano Venezuela District', '1', '1', '', '2020-06-20 03:59:26'),
(3, '412155', 'Ciudad Bolivar Venezuela Stake', '1', '1', '', '2020-06-20 03:59:39'),
(4, '1639773', 'Cumana Venezuela Stake', '1', '1', '', '2020-06-20 03:59:41'),
(5, '429589', 'El Tigre Venezuela Stake', '1', '1', '', '2020-06-20 03:59:42'),
(6, '517933', 'Guayana Venezuela Stake', '1', '1', '', '2020-06-20 03:59:47'),
(7, '389897', 'Maturin Venezuela Stake', '1', '1', '', '2020-06-20 03:59:50'),
(8, '614564', 'Porlamar Venezuela Stake', '1', '1', '', '2020-06-20 03:59:34'),
(9, '521620', 'Puerto La Cruz Venezuela Stake', '1', '1', '', '2020-06-20 03:59:33'),
(10, '1226053', 'San Felix Venezuela Stake', '1', '1', '', '2020-06-20 03:59:31'),
(11, '521590', 'Palo Verde Stake ', '1', '1', '', '2020-06-20 03:59:30'),
(12, '382396', 'Guarenas Stake', '1', '1', '', '2020-06-20 03:59:28'),
(13, '2010453', 'Venezuela Barcelona Mission', '1', '1', '', '2020-06-18 16:01:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembros`
--

CREATE TABLE `miembros` (
  `id` int(11) NOT NULL,
  `ncm` text NOT NULL,
  `nombre` text NOT NULL,
  `edad` text NOT NULL,
  `email` text NOT NULL,
  `telefono` text NOT NULL,
  `idbarrio` text NOT NULL,
  `idestaca` text NOT NULL,
  `idconsejo` text NOT NULL,
  `idpais` text NOT NULL,
  `solicitudes_medicinas_recibidas` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `nombre` text NOT NULL,
  `solicitudes_medicinas_recibidas` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `codigo`, `nombre`, `solicitudes_medicinas_recibidas`, `fecha`) VALUES
(1, '0001', 'Venezuela', '2', '2020-06-20 01:17:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE `prueba` (
  `id` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`id`, `codigo`, `descripcion`) VALUES
(1, '122', 'hjhjshas'),
(2, '10001', '1911919'),
(3, '10001', '1911919');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `id` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `ncm_miembro` text NOT NULL,
  `nombre_miembro` text NOT NULL,
  `edad` text NOT NULL,
  `email` text NOT NULL,
  `telefono` text NOT NULL,
  `idbarrio` text NOT NULL,
  `idestaca` text NOT NULL,
  `idconsejo` text NOT NULL,
  `idpais` text NOT NULL,
  `enfermedad` text NOT NULL,
  `medicamento` text NOT NULL,
  `dosis_recetada` text NOT NULL,
  `duracion` text NOT NULL,
  `necesidad` text NOT NULL,
  `Plan_Autosuficiencia_1` text NOT NULL,
  `Plan_Autosuficiencia_2` text NOT NULL,
  `Informe_Medico` text NOT NULL,
  `Recipe_Medico` text NOT NULL,
  `CI` text NOT NULL,
  `aprobacion_gerente` text NOT NULL,
  `comentarios_gerente` text NOT NULL,
  `aprobacion_asesor` text NOT NULL,
  `comentarios_asesor` text NOT NULL,
  `aprobacion_finanzas` text NOT NULL,
  `comentarios_finanzas` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `idbarrio` text COLLATE utf8_spanish_ci NOT NULL,
  `idestaca` text COLLATE utf8_spanish_ci NOT NULL,
  `idconsejo` text COLLATE utf8_spanish_ci NOT NULL,
  `idpais` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `idbarrio`, `idestaca`, `idconsejo`, `idpais`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'Administrador', 'admin', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', '', '', '', '', 'Administrador', 'vistas/img/usuarios/admin/191.jpg', 1, '2020-06-19 23:01:16', '2020-06-20 04:01:16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barrios`
--
ALTER TABLE `barrios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `consejo`
--
ALTER TABLE `consejo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `desaprobado`
--
ALTER TABLE `desaprobado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entregados`
--
ALTER TABLE `entregados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entregar`
--
ALTER TABLE `entregar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estaca`
--
ALTER TABLE `estaca`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `miembros`
--
ALTER TABLE `miembros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `barrios`
--
ALTER TABLE `barrios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `consejo`
--
ALTER TABLE `consejo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `desaprobado`
--
ALTER TABLE `desaprobado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `entregados`
--
ALTER TABLE `entregados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `entregar`
--
ALTER TABLE `entregar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `estaca`
--
ALTER TABLE `estaca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `miembros`
--
ALTER TABLE `miembros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `prueba`
--
ALTER TABLE `prueba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
