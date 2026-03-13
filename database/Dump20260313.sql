-- MySQL dump 10.13  Distrib 8.0.44, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: asocidemucre_db
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `citas`
--

DROP TABLE IF EXISTS `citas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `citas` (
  `id_cita` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_cita` date NOT NULL,
  `hora_cita` time NOT NULL,
  `motivo` varchar(200) NOT NULL,
  `estado` varchar(20) NOT NULL DEFAULT 'Pendiente',
  `pacientes_id_paciente` int(11) NOT NULL,
  `usuarios_id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_cita`),
  KEY `fk_citas_pacientes_idx` (`pacientes_id_paciente`),
  KEY `fk_citas_usuarios1_idx` (`usuarios_id_usuario`),
  CONSTRAINT `fk_citas_pacientes` FOREIGN KEY (`pacientes_id_paciente`) REFERENCES `pacientes` (`id_paciente`) ON UPDATE CASCADE,
  CONSTRAINT `fk_citas_usuarios1` FOREIGN KEY (`usuarios_id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `citas`
--

LOCK TABLES `citas` WRITE;
/*!40000 ALTER TABLE `citas` DISABLE KEYS */;
/*!40000 ALTER TABLE `citas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historial_clinico`
--

DROP TABLE IF EXISTS `historial_clinico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `historial_clinico` (
  `id_historial` int(11) NOT NULL AUTO_INCREMENT,
  `observaciones` text NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT current_timestamp(),
  `pacientes_id_paciente` int(11) NOT NULL,
  `citas_id_cita` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_historial`),
  KEY `fk_historial_clinico_pacientes1_idx` (`pacientes_id_paciente`),
  KEY `fk_historial_clinico_citas1_idx` (`citas_id_cita`),
  CONSTRAINT `fk_historial_clinico_citas1` FOREIGN KEY (`citas_id_cita`) REFERENCES `citas` (`id_cita`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_historial_clinico_pacientes1` FOREIGN KEY (`pacientes_id_paciente`) REFERENCES `pacientes` (`id_paciente`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historial_clinico`
--

LOCK TABLES `historial_clinico` WRITE;
/*!40000 ALTER TABLE `historial_clinico` DISABLE KEYS */;
/*!40000 ALTER TABLE `historial_clinico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pacientes`
--

DROP TABLE IF EXISTS `pacientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pacientes` (
  `id_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(15) NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  PRIMARY KEY (`id_paciente`),
  UNIQUE KEY `cedula_UNIQUE` (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pacientes`
--

LOCK TABLES `pacientes` WRITE;
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(15) NOT NULL,
  `nombre_completo` varchar(90) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(20) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `cedula_UNIQUE` (`cedula`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-03-13 17:40:26
