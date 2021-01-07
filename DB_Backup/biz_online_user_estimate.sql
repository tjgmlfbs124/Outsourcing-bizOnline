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
-- Table structure for table `user_estimate`
--

DROP TABLE IF EXISTS `user_estimate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_estimate` (
  `_id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `url` text,
  `device_id` int unsigned DEFAULT NULL,
  `carrier_id` int unsigned DEFAULT NULL,
  `installment_period` int NOT NULL,
  `discount` int unsigned DEFAULT NULL,
  `size_id` int unsigned DEFAULT NULL,
  `plan_id` int unsigned DEFAULT NULL,
  `color_id` int unsigned DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`_id`),
  KEY `fk_user estimate_user1` (`user_id`),
  KEY `fk_device_id-device1` (`device_id`),
  KEY `fk_carrier_id-carrier` (`carrier_id`),
  KEY `fk_size_id-device_storage1` (`size_id`),
  KEY `fk_plan_id-mobile_plan1` (`plan_id`),
  KEY `fk_color_id-device_image1` (`color_id`),
  CONSTRAINT `fk_carrier_id-carrier` FOREIGN KEY (`carrier_id`) REFERENCES `mobile_carrier` (`_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_color_id-device_image1` FOREIGN KEY (`color_id`) REFERENCES `device_image` (`_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_device_id-device1` FOREIGN KEY (`device_id`) REFERENCES `device` (`_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_plan_id-mobile_plan1` FOREIGN KEY (`plan_id`) REFERENCES `mobile_plan` (`_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_size_id-device_storage1` FOREIGN KEY (`size_id`) REFERENCES `device_storage` (`_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_user_estimate_user2` FOREIGN KEY (`user_id`) REFERENCES `user` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_estimate`
--

LOCK TABLES `user_estimate` WRITE;
/*!40000 ALTER TABLE `user_estimate` DISABLE KEYS */;
INSERT INTO `user_estimate` VALUES (39,3,'id=1&carrier=1&installment_period=24&discount=1&size=1&plan=19&color=1&subscription=0',1,1,24,1,1,19,1,'2020-11-20 17:24:38');
/*!40000 ALTER TABLE `user_estimate` ENABLE KEYS */;
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
