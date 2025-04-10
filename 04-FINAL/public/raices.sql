CREATE DATABASE  IF NOT EXISTS `bienes_raices` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bienes_raices`;
-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: localhost    Database: bienes_raices
-- ------------------------------------------------------
-- Server version	8.0.38

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
-- Table structure for table `propiedades`
--

DROP TABLE IF EXISTS `propiedades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `propiedades` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `habitaciones` int unsigned NOT NULL,
  `estacionamiento` int unsigned NOT NULL,
  `wc` int unsigned NOT NULL,
  `creado` date NOT NULL,
  `vendedorId` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vendedorId` (`vendedorId`),
  CONSTRAINT `vendedor_FK` FOREIGN KEY (`vendedorId`) REFERENCES `vendedor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propiedades`
--

LOCK TABLES `propiedades` WRITE;
/*!40000 ALTER TABLE `propiedades` DISABLE KEYS */;
INSERT INTO `propiedades` VALUES (1,'Casa en la playa',120000.00,'f57610c2ad3329b1de29bfdb5e4946ea.webp','Casa en la playa Casa en la playa Casa en la playa Casa en la playa Casa en la playa Casa en la playa',3,1,2,'2025-03-25',1),(2,'Casa en el campo',180000.00,'84176d5ca9f9362a9294541d1852e45d.webp','Casa en el campo Casa en el campo Casa en el campo Casa en el campo Casa en el campo',4,2,2,'2025-03-24',2),(6,'Hermosa casa rural nueva',151000.00,'7342c7dcd327d28ae1265db8d0bc34f5.webp','Hermosa casa rural Hermosa casa rural Hermosa casa rural Hermosa casa rural Hermosa casa rural Hermosa casa rural',4,1,2,'2025-03-26',2),(7,'Casa de ensueño',190000.00,'baafd7961928f19c26c572128678f0d4.jpg','Casa de ensueño Casa de ensueño Casa de ensueño Casa de ensueño',5,2,3,'2025-03-28',1),(8,'Departamento duplex',250000.00,'0a9bb30161c2f4cf95bb7986b6bce714.webp','Departamento duplex Departamento duplex Departamento duplex Departamento duplex Departamento duplex',3,1,2,'2025-03-28',2),(9,'Terreno de construcción',50000.00,'771c26a74b881eb70088c17321d84bdc.jpg','Terreno de construcción Terreno de construcció Terreno de construcció Terreno de construcció Terreno de construcció Terreno de construcció',1,1,1,'2025-03-28',1),(10,'Casa de campo',160000.00,'9085c8761d66378b2243b486627c96fe.webp','Casa de campo Casa de campo Casa de campo Casa de campo Casa de campo Casa de campo',6,2,3,'2025-03-28',2);
/*!40000 ALTER TABLE `propiedades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `pass` varchar(60) NOT NULL,
  `token` varchar(50) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `rol` varchar(20) NOT NULL DEFAULT 'cliente',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Eduardo','Arroyo','eduardo@gmail.com',NULL,'$2y$12$KaqsGCw93dH8Q3G.jagGd.hv0ZvSCLFSRBYVW4rdGtIOsixDFyFkS','',1,'admin'),(2,'Joe','Smith','joe@gmail.com',NULL,'$2y$12$GXnQsQOLUkVoKf3IqnwJPOm.SbY9k8loCgPHte8Ov7dvfsdvlElIK','',1,'cliente');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendedor`
--

DROP TABLE IF EXISTS `vendedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vendedor` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendedor`
--

LOCK TABLES `vendedor` WRITE;
/*!40000 ALTER TABLE `vendedor` DISABLE KEYS */;
INSERT INTO `vendedor` VALUES (1,'John','Smith'),(2,'Catherine','Doe');
/*!40000 ALTER TABLE `vendedor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-04-09 22:24:51
