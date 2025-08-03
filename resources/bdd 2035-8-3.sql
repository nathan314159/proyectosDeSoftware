-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2025 at 07:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ejemploajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catalogo`
--

CREATE TABLE `tbl_catalogo` (
  `id_catalogo` int(11) NOT NULL,
  `cat_codigo` varchar(255) DEFAULT NULL,
  `cat_nombre` varchar(255) DEFAULT NULL,
  `ca_estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_funcionalidad`
--

CREATE TABLE `tbl_funcionalidad` (
  `id_funcionalidad` int(11) NOT NULL,
  `funcionalidad_nombre_funcion` varchar(255) DEFAULT NULL,
  `funcionalidad_url` varchar(255) DEFAULT NULL,
  `funcionalidad_estado` tinyint(1) DEFAULT 1,
  `funcionalidad_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_funcionalidad`
--

INSERT INTO `tbl_funcionalidad` (`id_funcionalidad`, `funcionalidad_nombre_funcion`, `funcionalidad_url`, `funcionalidad_estado`, `funcionalidad_created_at`) VALUES
(1, 'login GET', 'auth/login', 1, '2025-07-18 00:49:15'),
(2, 'login POST', 'auth/login', 1, '2025-07-18 00:49:15'),
(3, 'cerrar session', 'auth/logout', 1, '2025-07-18 00:50:37'),
(4, 'registro GET', 'auth/registro', 1, '2025-07-18 00:50:37'),
(5, 'registrar POST', 'auth/registrar', 1, '2025-07-18 00:51:22'),
(6, 'Mostrar el formulario de trabajo del empleado', 'empleado/', 1, '2025-07-18 00:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_catalogo`
--

CREATE TABLE `tbl_item_catalogo` (
  `id_item` int(11) NOT NULL,
  `itc_codigo` varchar(255) DEFAULT NULL,
  `itc_nombre` varchar(255) DEFAULT NULL,
  `itc_descripcion` varchar(255) DEFAULT NULL,
  `itc_estado` tinyint(1) DEFAULT NULL,
  `id_catalogo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_restaurante`
--

CREATE TABLE `tbl_restaurante` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ubicacion` varchar(100) NOT NULL,
  `tipo_cocina` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_restaurante`
--

INSERT INTO `tbl_restaurante` (`id`, `nombre`, `ubicacion`, `tipo_cocina`) VALUES
(3, 'Mexican choken', 'Ibarra', 'Criolla'),
(4, 'Mexican chiken', 'Ibarra', 'Criolla'),
(5, 'La Casa del olor', 'Quito', 'Criolla');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rol`
--

CREATE TABLE `tbl_rol` (
  `id_rol` int(11) NOT NULL,
  `rol_nombre` varchar(255) DEFAULT NULL,
  `rol_estado` tinyint(1) DEFAULT NULL,
  `rol_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_rol`
--

INSERT INTO `tbl_rol` (`id_rol`, `rol_nombre`, `rol_estado`, `rol_created_at`) VALUES
(1, 'Administrador', 1, '2025-07-18 02:17:02'),
(2, 'Empleado', 1, '2025-07-18 02:17:02'),
(3, 'gestion operativa', 1, '2025-07-18 02:18:48'),
(4, 'gestion social', 1, '2025-07-18 02:18:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rol_access`
--

CREATE TABLE `tbl_rol_access` (
  `id_principal_rol_access` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_funcionalidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_users` int(11) NOT NULL,
  `users_nombre` varchar(255) NOT NULL,
  `users_apellido` varchar(255) NOT NULL,
  `users_cedula` varchar(255) NOT NULL,
  `users_password` varchar(255) NOT NULL,
  `users_estado` tinyint(1) NOT NULL DEFAULT 1,
  `users_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_users`, `users_nombre`, `users_apellido`, `users_cedula`, `users_password`, `users_estado`, `users_created_at`) VALUES
(50, 'nathan', 'arboleda', '1722417331', '12', 1, '2025-07-17 18:07:25'),
(51, 'nathan', 'arboleda', '1722417332', '12', 1, '2025-07-18 00:31:20'),
(52, '', '', '', '', 0, '2025-07-17 22:56:32'),
(53, 'nathan', 'arboleda', '1722417333', '12', 0, '2025-07-17 23:20:51'),
(54, 'nathan', 'arboleda', '1722417334', '12', 0, '2025-07-17 23:58:16'),
(55, 'fer', 'das', '1722417335', '12', 0, '2025-07-18 00:21:09'),
(56, 'fern', 'das', '1722417336', '12', 0, '2025-07-18 00:24:10'),
(57, 'ferna', 'das', '1722417337', '12', 1, '2025-07-18 00:37:36'),
(58, 'fernanda', 'das', '1322417337', '12', 1, '2025-07-18 20:41:25'),
(59, 'fernanda', 'das', '13224173377', '12', 1, '2025-07-18 20:41:43'),
(60, 'fernandaaaaa', 'das', '132221', '12', 1, '2025-07-18 21:07:54'),
(61, 'fernandaaaaa', 'das', '1322211', '12', 1, '2025-07-18 21:07:58'),
(62, 'fernandaaaaa', 'das', '12', '12', 1, '2025-07-18 21:08:24'),
(63, 'fernandaaaaa', 'das', '122', '12', 1, '2025-07-18 21:11:21'),
(64, 'fernandaaaaa', 'das', '1222', '12', 1, '2025-07-18 21:11:44'),
(65, 'fernandaaaaa', 'das', '12222', '12', 1, '2025-07-18 21:14:17'),
(66, 'fernandaaaaa', 'das', '122222', '12', 1, '2025-07-18 21:14:34'),
(67, 'fernandaaaaa', 'das', '1222227', '12', 1, '2025-07-18 22:06:16'),
(68, 'fernandaaaaa', 'das', '12222273', '12', 1, '2025-07-21 15:10:49'),
(69, 'juan', 'andres', '12345', '1234', 1, '2025-07-26 18:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_rol`
--

CREATE TABLE `tbl_user_rol` (
  `id_users_rol` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `user_rol_estado` tinyint(1) NOT NULL DEFAULT 1,
  `user_rol_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_user_rol`
--

INSERT INTO `tbl_user_rol` (`id_users_rol`, `id_users`, `id_rol`, `user_rol_estado`, `user_rol_created_at`) VALUES
(14, 60, 3, 1, '2025-07-26 18:57:43'),
(22, 53, 3, 1, '2025-07-26 23:57:18'),
(27, 50, 2, 1, '2025-07-28 00:04:35'),
(28, 51, 2, 1, '2025-07-28 20:08:31'),
(29, 51, 2, 1, '2025-07-28 20:10:03'),
(30, 51, 2, 1, '2025-07-28 20:10:22'),
(33, 50, 4, 1, '2025-07-31 22:54:29'),
(35, 50, 2, 1, '2025-07-31 22:55:52'),
(37, 51, 3, 1, '2025-08-03 21:11:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_catalogo`
--
ALTER TABLE `tbl_catalogo`
  ADD PRIMARY KEY (`id_catalogo`);

--
-- Indexes for table `tbl_funcionalidad`
--
ALTER TABLE `tbl_funcionalidad`
  ADD PRIMARY KEY (`id_funcionalidad`);

--
-- Indexes for table `tbl_item_catalogo`
--
ALTER TABLE `tbl_item_catalogo`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `id_catalogo` (`id_catalogo`);

--
-- Indexes for table `tbl_restaurante`
--
ALTER TABLE `tbl_restaurante`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rol`
--
ALTER TABLE `tbl_rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indexes for table `tbl_rol_access`
--
ALTER TABLE `tbl_rol_access`
  ADD PRIMARY KEY (`id_principal_rol_access`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_funcionalidad` (`id_funcionalidad`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `unique_cedula` (`users_cedula`);

--
-- Indexes for table `tbl_user_rol`
--
ALTER TABLE `tbl_user_rol`
  ADD PRIMARY KEY (`id_users_rol`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_catalogo`
--
ALTER TABLE `tbl_catalogo`
  MODIFY `id_catalogo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_funcionalidad`
--
ALTER TABLE `tbl_funcionalidad`
  MODIFY `id_funcionalidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_item_catalogo`
--
ALTER TABLE `tbl_item_catalogo`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_restaurante`
--
ALTER TABLE `tbl_restaurante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_rol`
--
ALTER TABLE `tbl_rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_rol_access`
--
ALTER TABLE `tbl_rol_access`
  MODIFY `id_principal_rol_access` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tbl_user_rol`
--
ALTER TABLE `tbl_user_rol`
  MODIFY `id_users_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_item_catalogo`
--
ALTER TABLE `tbl_item_catalogo`
  ADD CONSTRAINT `tbl_item_catalogo_ibfk_1` FOREIGN KEY (`id_catalogo`) REFERENCES `tbl_catalogo` (`id_catalogo`);

--
-- Constraints for table `tbl_rol_access`
--
ALTER TABLE `tbl_rol_access`
  ADD CONSTRAINT `tbl_rol_access_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `tbl_rol` (`id_rol`),
  ADD CONSTRAINT `tbl_rol_access_ibfk_2` FOREIGN KEY (`id_funcionalidad`) REFERENCES `tbl_funcionalidad` (`id_funcionalidad`);

--
-- Constraints for table `tbl_user_rol`
--
ALTER TABLE `tbl_user_rol`
  ADD CONSTRAINT `tbl_user_rol_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `tbl_users` (`id_users`),
  ADD CONSTRAINT `tbl_user_rol_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `tbl_rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
