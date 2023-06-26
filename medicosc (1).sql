-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 09:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicosc`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id_categorias` int(11) NOT NULL,
  `nombre` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id_categorias`, `nombre`) VALUES
(1, 'Medicina del Dolor'),
(2, 'Patología'),
(3, 'Anestesiología'),
(4, 'Cirugía Vascular'),
(5, 'Neumología'),
(6, 'Ginecología y Obstetricia');

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `idcomentarios` int(11) NOT NULL,
  `id_medico` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_especialidad` int(11) DEFAULT NULL,
  `comentario` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `especialidades`
--

CREATE TABLE `especialidades` (
  `id_especialidad` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Descripción` varchar(500) NOT NULL,
  `Precio` double NOT NULL,
  `duracion` int(11) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `especialidades`
--

INSERT INTO `especialidades` (`id_especialidad`, `Nombre`, `Descripción`, `Precio`, `duracion`, `categoria`) VALUES
(35, 'BRONCOSCOPÍA INTERVENCIONISTA', 'La Broncoscopía Intervencionista utiliza un broncoscopio para realizar procedimientos diagnósticos y terapéuticos en las vías respiratorias, como la extracción de cuerpos extraños, la toma de biopsias y la colocación de stents.', 0, NULL, 5),
(39, 'ASMA', 'El Asma es una enfermedad crónica que afecta las vías respiratorias y se caracteriza por episodios de dificultad para respirar, tos y opresión en el pecho. El tratamiento busca controlar los síntomas y prevenir las exacerbaciones.', 0, NULL, 5),
(83, 'ANGIOLOGÍA Y CIRUGÍA VASCULAR', 'La Angiología y Cirugía Vascular se especializa en el diagnóstico y tratamiento de enfermedades del sistema circulatorio, como venas varicosas, trombosis, aneurismas y obstrucción arterial.', 0, NULL, 4),
(95, 'BIOLOGÍA DE LA REPRODUCCIÓN HUMANA', 'La Biología de la Reproducción Humana se centra en el estudio de los procesos biológicos y genéticos relacionados con la reproducción humana, incluyendo la fertilidad, la concepción y el desarrollo embrionario.', 0, NULL, 6),
(157, 'ANATOMÍA PATOLÓGICA', 'La Anatomía Patológica se dedica al estudio de las alteraciones estructurales y funcionales de las células, tejidos y órganos, con el fin de establecer diagnósticos precisos.', 0, NULL, 2),
(337, 'ANESTESIOLOGÍA', 'La Anestesiología se ocupa de la administración de anestesia y el control del dolor durante intervenciones quirúrgicas u otros procedimientos médicos.', 0, NULL, 3),
(350, 'ALGOLOGÍA', 'La Algología se encarga del estudio y tratamiento del dolor, tanto agudo como crónico, y de las enfermedades que lo producen.', 0, NULL, 1),
(351, 'ANESTESIOLOGÍA PARA LOS SERVICIOS RURALES DE ', 'La Anestesiología para los Servicios Rurales de la Salud se enfoca en brindar servicios de anestesia en zonas rurales y remotas, donde el acceso a la atención médica puede ser limitado.', 0, NULL, 3),
(352, 'ANGIOLOGÍA, CIRUGÍA VASCULAR Y ENDOVASCULAR', 'La Angiología, Cirugía Vascular y Endovascular abarca el estudio y tratamiento de enfermedades vasculares mediante técnicas quirúrgicas convencionales y procedimientos endovasculares mínimamente invasivos.', 0, NULL, 4),
(361, 'ANESTESIOLOGÍA PEDIÁTRICA', 'La Anestesiología Pediátrica se dedica a la administración de anestesia y el manejo del dolor en niños y adolescentes durante procedimientos quirúrgicos o médicos.', 0, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `estatus`
--

CREATE TABLE `estatus` (
  `id_estatus` int(11) NOT NULL,
  `estatus` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `historial`
--

CREATE TABLE `historial` (
  `id_historial` int(11) NOT NULL,
  `id_usuario_reserva` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL,
  `id_especialidad` int(11) NOT NULL,
  `fecha_reserva` date NOT NULL,
  `estado_reserva` varchar(45) NOT NULL,
  `fecha_actualizacion` varchar(45) NOT NULL,
  `historialcol` date NOT NULL,
  `precio_total` double NOT NULL,
  `comentarios` varchar(45) NOT NULL,
  `calificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `medico`
--

CREATE TABLE `medico` (
  `id_medico` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Descripción` varchar(45) NOT NULL,
  `cedula` varchar(45) NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `comprobacion` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `pagos`
--

CREATE TABLE `pagos` (
  `id_pago` binary(32) NOT NULL,
  `id_usuario` binary(32) NOT NULL,
  `id_servicio` binary(32) NOT NULL,
  `fecha` date NOT NULL,
  `monto` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `reservas`
--

CREATE TABLE `reservas` (
  `id_Reservas` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_especialidad` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL,
  `Fecha_reserva` varchar(145) NOT NULL,
  `Comentarios` varchar(145) NOT NULL,
  `Calificación` double DEFAULT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_roles`, `nombre`) VALUES
(1, 'Usuario'),
(2, 'Medico'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_Usuarios` int(11) NOT NULL,
  `Nombre` varchar(32) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `Contraseña` varchar(45) NOT NULL,
  `Dirección` varchar(100) DEFAULT NULL,
  `Teléfono` int(11) NOT NULL,
  `Nacimiento` date NOT NULL,
  `Género` int(11) NOT NULL,
  `Verificación` int(11) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_Usuarios`, `Nombre`, `Correo`, `Contraseña`, `Dirección`, `Teléfono`, `Nacimiento`, `Género`, `Verificación`, `foto`, `rol`) VALUES
(1, 'Admin', 'admin@admin.com', 'admin', NULL, 5555555, '0000-00-00', 0, NULL, NULL, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categorias`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idcomentarios`),
  ADD KEY `idMedico_idx` (`id_medico`),
  ADD KEY `idUsuario_idx` (`id_usuario`),
  ADD KEY `idEspecialidadesC_idx` (`id_especialidad`);

--
-- Indexes for table `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id_especialidad`),
  ADD KEY `categoria_servicio_idx` (`categoria`);

--
-- Indexes for table `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`id_estatus`);

--
-- Indexes for table `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id_historial`),
  ADD KEY `id_negocio_historial_idx` (`id_medico`),
  ADD KEY `idUsuarioH_idx` (`id_usuario_reserva`),
  ADD KEY `idEspecialidades_idx` (`id_especialidad`);

--
-- Indexes for table `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id_medico`);

--
-- Indexes for table `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `id_user_id_user_idx` (`id_usuario`),
  ADD KEY `id_servicioP_servicio_idx` (`id_servicio`);

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_Reservas`),
  ADD KEY `id_provedor_idx` (`id_medico`),
  ADD KEY `id_estatus_idx` (`estatus`),
  ADD KEY `idUsuarioR_idx` (`id_usuario`),
  ADD KEY `idEspecialidadesR_idx` (`id_especialidad`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_Usuarios`),
  ADD KEY `idRol_usuario_idx` (`rol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idcomentarios` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id_especialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=365;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_Usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `idEspecialidadesC` FOREIGN KEY (`id_especialidad`) REFERENCES `especialidades` (`id_especialidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idMedico` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id_medico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idUsuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_Usuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `especialidades`
--
ALTER TABLE `especialidades`
  ADD CONSTRAINT `categoriaC` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id_categorias`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `idEspecialidades` FOREIGN KEY (`id_especialidad`) REFERENCES `especialidades` (`id_especialidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idMedicoH` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id_medico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idUsuarioH` FOREIGN KEY (`id_usuario_reserva`) REFERENCES `usuarios` (`id_Usuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `idEspecialidadesR` FOREIGN KEY (`id_especialidad`) REFERENCES `especialidades` (`id_especialidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idEstatusR` FOREIGN KEY (`estatus`) REFERENCES `estatus` (`id_estatus`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idMedicoR` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id_medico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idUsuarioR` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_Usuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `rolesU` FOREIGN KEY (`rol`) REFERENCES `roles` (`id_roles`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

