-- MySQL dump 10.13  Distrib 5.7.9, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: bd_hemeroteca
-- ------------------------------------------------------
-- Server version	5.5.49-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `areas`
--

DROP TABLE IF EXISTS `areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `areas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_area` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion_area` varchar(99) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo_pasivo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idareas_UNIQUE` (`id`),
  UNIQUE KEY `nombre_area_UNIQUE` (`nombre_area`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areas`
--

LOCK TABLES `areas` WRITE;
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
INSERT INTO `areas` VALUES (1,'Sociales','Departamenteo de Sociales','activo'),(2,'Fisica','Fisica','activo');
/*!40000 ALTER TABLE `areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(99) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido_cliente` varchar(99) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cedula_cliente` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_cliente` varchar(99) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion_cliente` varchar(99) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono_cliente` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular_cliente` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `genero` varchar(2) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo_pasivo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idcliente_UNIQUE` (`id`),
  UNIQUE KEY `email_cliente_UNIQUE` (`email_cliente`),
  UNIQUE KEY `cedula_cliente_UNIQUE` (`cedula_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'Juan jose','Alvarez','0602145214','mail@mail.com','calle 4','036215422','0984032314','M','activo'),(2,'cccc','bb','0602145217','mail12@mail.com','calle 4','036215422','0984032314','M','activo'),(3,'cliente','cliente','0602145215','mail17@mail.com','calle 41','036215422','0984032314','M','activo');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado_obras`
--

DROP TABLE IF EXISTS `estado_obras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado_obras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_estado_historial` varchar(99) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion_estado_historial` varchar(99) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo_pasivo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idestado_historial_prestaciones_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_obras`
--

LOCK TABLES `estado_obras` WRITE;
/*!40000 ALTER TABLE `estado_obras` DISABLE KEYS */;
INSERT INTO `estado_obras` VALUES (1,'Disponible','descripcion estado disponible','activo'),(2,'Prestado','Descripcion estado Prestado','activo'),(3,'Donado','Descripcion estrado Donado','activo');
/*!40000 ALTER TABLE `estado_obras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `obras`
--

DROP TABLE IF EXISTS `obras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `obras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autor` varchar(99) COLLATE utf8_spanish_ci DEFAULT NULL,
  `editorial` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo` varchar(99) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `numeros_paginas` int(11) DEFAULT NULL,
  `proveedor_idproveedor` int(11) NOT NULL,
  `tipos_obras_idtipos_obras` int(11) NOT NULL,
  `areas_idareas` int(11) NOT NULL,
  `tipo_registro_id` int(11) NOT NULL,
  `descripcion_obra` varchar(99) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idobras_UNIQUE` (`id`),
  KEY `fk_obras_proveedor1_idx` (`proveedor_idproveedor`),
  KEY `fk_obras_tipos_obras1_idx` (`tipos_obras_idtipos_obras`),
  KEY `fk_obras_areas1_idx` (`areas_idareas`),
  KEY `fk_obras_tipo_registro1_idx` (`tipo_registro_id`),
  CONSTRAINT `fk_obras_areas1` FOREIGN KEY (`areas_idareas`) REFERENCES `areas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_obras_proveedor1` FOREIGN KEY (`proveedor_idproveedor`) REFERENCES `proveedor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_obras_tipos_obras1` FOREIGN KEY (`tipos_obras_idtipos_obras`) REFERENCES `tipos_obras` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_obras_tipo_registro1` FOREIGN KEY (`tipo_registro_id`) REFERENCES `tipo_registro` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `obras`
--

LOCK TABLES `obras` WRITE;
/*!40000 ALTER TABLE `obras` DISABLE KEYS */;
INSERT INTO `obras` VALUES (1,'yo autor','editorial pepito','Obra 1','2016-12-03','2016-07-05',200,1,1,2,1,'es una buan obra'),(2,'Juan Marcos','ninguna','Obras 3','2016-07-03','2016-07-07',45,1,1,2,1,'es una buan obra'),(3,'juan','asasa','Patitp LEE','2016-07-05','2016-07-13',40,1,1,1,1,'asasasasas');
/*!40000 ALTER TABLE `obras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `obras_isbn`
--

DROP TABLE IF EXISTS `obras_isbn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `obras_isbn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `obras_id` int(11) NOT NULL,
  `estado_obras_id` int(11) NOT NULL,
  `codigo_isbn` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo_pasivo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idobras_isbn_UNIQUE` (`id`),
  KEY `fk_obras_isbn_obras1_idx` (`obras_id`),
  KEY `fk_obras_isbn_estado_obras1_idx` (`estado_obras_id`),
  CONSTRAINT `fk_obras_isbn_estado_obras1` FOREIGN KEY (`estado_obras_id`) REFERENCES `estado_obras` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_obras_isbn_obras1` FOREIGN KEY (`obras_id`) REFERENCES `obras` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `obras_isbn`
--

LOCK TABLES `obras_isbn` WRITE;
/*!40000 ALTER TABLE `obras_isbn` DISABLE KEYS */;
INSERT INTO `obras_isbn` VALUES (1,1,2,'CD2','activo'),(2,1,3,'cd3','activo'),(3,1,2,'cd4','activo'),(4,2,1,'cdg-098','pasivo'),(5,3,1,'isbn890','activo');
/*!40000 ALTER TABLE `obras_isbn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prestaciones_donaciones`
--

DROP TABLE IF EXISTS `prestaciones_donaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prestaciones_donaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_reservacion` date DEFAULT NULL,
  `numeros_dias` int(11) DEFAULT NULL,
  `cliente_idcliente` int(11) NOT NULL,
  `prestacion_donacion` varchar(99) COLLATE utf8_spanish_ci DEFAULT NULL,
  `obras_isbn_idobras_isbn` int(11) NOT NULL,
  `activo` int(11) NOT NULL DEFAULT '1',
  `fecha_devolucion` date DEFAULT NULL,
  `fecha_registro_devolucion` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idprestaciones_UNIQUE` (`id`),
  KEY `fk_prestaciones_cliente1_idx` (`cliente_idcliente`),
  KEY `fk_prestaciones_donaciones_obras_isbn1_idx` (`obras_isbn_idobras_isbn`),
  CONSTRAINT `fk_prestaciones_cliente1` FOREIGN KEY (`cliente_idcliente`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_prestaciones_donaciones_obras_isbn1` FOREIGN KEY (`obras_isbn_idobras_isbn`) REFERENCES `obras_isbn` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prestaciones_donaciones`
--

LOCK TABLES `prestaciones_donaciones` WRITE;
/*!40000 ALTER TABLE `prestaciones_donaciones` DISABLE KEYS */;
INSERT INTO `prestaciones_donaciones` VALUES (16,'2016-07-08',5,1,'pres',3,0,'2016-07-12','2016-07-12'),(17,'2016-07-08',1,3,'pres',1,0,'2016-07-09','2016-07-08'),(18,'2016-07-08',2,3,'pres',4,0,'2016-07-08','2016-07-08'),(19,'2016-07-08',1,3,'don',2,1,'2016-07-09',NULL),(20,'2016-07-12',3,1,'pres',1,0,'2016-07-15','2016-07-12'),(21,'2016-07-12',3,1,'pres',3,0,'2016-07-15','2016-07-12'),(22,'2016-07-12',1,2,'pres',4,0,'2016-07-13','2016-07-12'),(23,'2016-07-12',1,1,'pres',1,1,'2016-07-13',NULL),(24,'2016-07-12',1,1,'pres',3,1,'2016-07-13',NULL);
/*!40000 ALTER TABLE `prestaciones_donaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_proveedor` varchar(99) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cedula_proveedor` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion_proveedor` varchar(99) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono_proveedor` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular_proveedor` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo_pasivo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idproveedor_UNIQUE` (`id`),
  UNIQUE KEY `cedula_proveedor_UNIQUE` (`cedula_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedor`
--

LOCK TABLES `proveedor` WRITE;
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
INSERT INTO `proveedor` VALUES (1,'Maria alavrez','06031254124','Calle 5','032154233','094215412','activo');
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_registro`
--

DROP TABLE IF EXISTS `tipo_registro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_registro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_registro` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion_registro` varchar(99) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo_pasivo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_registro`
--

LOCK TABLES `tipo_registro` WRITE;
/*!40000 ALTER TABLE `tipo_registro` DISABLE KEYS */;
INSERT INTO `tipo_registro` VALUES (1,'donacion','descripcion donacion','activo'),(2,'Compra','se ha comprado','activo');
/*!40000 ALTER TABLE `tipo_registro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(99) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idtipo_usuario_UNIQUE` (`id`),
  UNIQUE KEY `nombre_usuario_UNIQUE` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_usuario`
--

LOCK TABLES `tipo_usuario` WRITE;
/*!40000 ALTER TABLE `tipo_usuario` DISABLE KEYS */;
INSERT INTO `tipo_usuario` VALUES (1,'Adminsitrador','Usuario Adminsitrador del Sistema'),(2,'Admin','admin');
/*!40000 ALTER TABLE `tipo_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_obras`
--

DROP TABLE IF EXISTS `tipos_obras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_obras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipos_obras` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion_tipos_obras` varchar(99) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo_pasivo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idtipos_obras_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_obras`
--

LOCK TABLES `tipos_obras` WRITE;
/*!40000 ALTER TABLE `tipos_obras` DISABLE KEYS */;
INSERT INTO `tipos_obras` VALUES (1,'tipo 1','tipo 1','activo'),(2,'tipo 2','tipo 2','activo');
/*!40000 ALTER TABLE `tipos_obras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Apellido` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `username` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(99) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(99) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cedula` varchar(13) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_usuario_idtipo_usuario` int(11) NOT NULL,
  `activo_pasivo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `remember_token` varchar(128) COLLATE utf8_spanish_ci DEFAULT NULL,
  `updated_at` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idusuario_UNIQUE` (`id`),
  UNIQUE KEY `cedula_UNIQUE` (`cedula`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_usuarios_tipo_usuario1_idx` (`tipo_usuario_idtipo_usuario`),
  CONSTRAINT `fk_usuarios_tipo_usuario1` FOREIGN KEY (`tipo_usuario_idtipo_usuario`) REFERENCES `tipo_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Fabian','Villa','efaby','$2y$10$Y3DVVu/WqDOKTIgBdExWg.gxL7lBrz8IEwPBGjvNRwMKGRXaqX0..','mail@mail.com','Calle 5','0603718577',1,'activo','es1AjB9PEHYqMAIXRoG0EF9gRrAHOTHD68gHUanbzxm7nYN8LZrPouI1YvK5','2016-07-12 18:33:31');
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

-- Dump completed on 2016-07-13 17:08:51
