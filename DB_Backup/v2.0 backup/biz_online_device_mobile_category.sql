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
-- Table structure for table `device_mobile_category`
--

DROP TABLE IF EXISTS `device_mobile_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_mobile_category` (
  `_id` int unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int unsigned NOT NULL,
  `category_id` int unsigned NOT NULL,
  PRIMARY KEY (`_id`),
  KEY `fk_device_mobile_catoery_deivce1` (`device_id`),
  KEY `fk_device_mobile_category_mobile_plan_category1` (`category_id`),
  CONSTRAINT `fk_device_mobile_category_device2` FOREIGN KEY (`device_id`) REFERENCES `device` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_device_mobile_category_mobile_plan_category2` FOREIGN KEY (`category_id`) REFERENCES `mobile_plan_category` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=160 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `device_mobile_category`
--

LOCK TABLES `device_mobile_category` WRITE;
/*!40000 ALTER TABLE `device_mobile_category` DISABLE KEYS */;
INSERT INTO `device_mobile_category` VALUES (1,1,1),(2,2,1),(3,6,1),(4,7,1),(5,16,1),(6,19,1),(7,1,4),(8,2,4),(9,6,4),(10,7,4),(11,16,4),(12,19,4),(13,1,7),(14,2,7),(15,6,7),(16,7,7),(17,16,7),(18,19,7),(62,24,1),(63,24,4),(64,24,7),(65,26,1),(66,26,4),(67,26,7),(78,32,1),(82,33,4),(83,33,1),(84,33,7),(91,36,4),(92,36,1),(93,36,7),(97,38,4),(98,38,1),(99,38,7),(100,39,4),(101,39,1),(102,39,7),(103,40,4),(104,40,1),(105,40,7),(114,45,4),(115,45,1),(116,45,7),(126,49,4),(127,49,1),(128,49,7),(142,55,4),(143,55,1),(144,55,7),(151,29,1),(152,29,4),(153,29,7);
/*!40000 ALTER TABLE `device_mobile_category` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-10 14:51:35
