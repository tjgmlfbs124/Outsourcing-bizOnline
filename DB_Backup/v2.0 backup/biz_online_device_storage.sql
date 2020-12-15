-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: biz_online
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `device_storage`
--

DROP TABLE IF EXISTS `device_storage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_storage` (
  `_id` int unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int unsigned NOT NULL,
  `storage` varchar(45) NOT NULL,
  `price` int unsigned NOT NULL,
  PRIMARY KEY (`_id`),
  KEY `fk_deivce storage_device1` (`device_id`),
  CONSTRAINT `fk_device_storage_device2` FOREIGN KEY (`device_id`) REFERENCES `device` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `device_storage`
--

LOCK TABLES `device_storage` WRITE;
/*!40000 ALTER TABLE `device_storage` DISABLE KEYS */;
INSERT INTO `device_storage` VALUES (1,1,'256GB',1452000),(2,2,'256GB',1199000),(9,6,'256GB',1595000),(11,7,'256GB',1353000),(20,16,'128GB',1248500),(23,19,'512GB',1988700),(24,20,'64GB',550000),(25,20,'128GB',620000),(26,20,'256GB',760000),(27,21,'64GB',990000),(28,21,'128GB',1056000),(29,21,'256GB',1188000),(30,22,'64GB',1375000),(31,22,'256GB',1584000),(32,22,'512GB',1837000),(33,23,'64GB',1529000),(34,23,'256GB',1738000),(35,23,'512GB',1991000),(36,24,'128G',499400),(37,25,'64GB',369600),(38,26,'128GB',899800),(39,27,'8G',198000),(40,28,'32G',319000),(41,29,'256GB',2398000),(42,30,'32GB',297000),(44,32,'128GB',649000),(45,33,'128GB',572000),(46,34,'64GB',374000),(47,35,'256GB',1342000),(48,36,'256GB',1650000),(49,37,'32GB',199100),(50,38,'128GB',699600),(51,39,'256GB',1248500),(52,40,'256GB',1397000),(53,40,'512GB',1496000),(54,41,'64GB',399300),(55,42,'64GB',429000),(56,43,'32GB',349800),(57,44,'32GB',253000),(58,45,'256GB',998800),(59,45,'512GB',1031800),(60,46,'128GB',1155000),(61,46,'512GB',1196800),(62,47,'128GB',899800),(63,47,'512GB',998800),(64,48,'128GB',899800),(65,49,'128GB',999900),(66,50,'64GB',548900),(67,51,'32GB',209000),(68,52,'32GB',198000),(69,53,'32GB',297000),(70,54,'64GB',349800),(71,55,'128GB',999900),(72,56,'64GB',499400),(73,57,'64GB',841500),(74,57,'128GB',891000),(75,57,'256GB',940500);
/*!40000 ALTER TABLE `device_storage` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-10 14:51:37