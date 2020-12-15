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
-- Table structure for table `mobile_category_installment`
--

DROP TABLE IF EXISTS `mobile_category_installment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mobile_category_installment` (
  `_id` int unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int unsigned NOT NULL,
  `installment_id` int unsigned NOT NULL,
  PRIMARY KEY (`_id`),
  KEY `fk_mobile_category_installment_mobile_plan_category1` (`category_id`),
  KEY `fk_mobile_category_installment_installment1` (`installment_id`),
  CONSTRAINT `fk_mobile_category_installment_installment2` FOREIGN KEY (`installment_id`) REFERENCES `installment` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_mobile_category_installment_mobile_plan_category2` FOREIGN KEY (`category_id`) REFERENCES `mobile_plan_category` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mobile_category_installment`
--

LOCK TABLES `mobile_category_installment` WRITE;
/*!40000 ALTER TABLE `mobile_category_installment` DISABLE KEYS */;
INSERT INTO `mobile_category_installment` VALUES (1,4,5),(2,4,6),(3,4,7),(4,4,8),(13,1,5),(14,1,6),(15,1,7),(16,1,8),(25,7,5),(26,7,6),(27,7,7),(28,7,8);
/*!40000 ALTER TABLE `mobile_category_installment` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-10 14:51:36
