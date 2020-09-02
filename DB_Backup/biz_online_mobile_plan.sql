-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: biz_online
-- ------------------------------------------------------
-- Server version	8.0.19

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
-- Table structure for table `mobile_plan`
--

DROP TABLE IF EXISTS `mobile_plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mobile_plan` (
  `_id` int unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int unsigned NOT NULL,
  `name` varchar(45) NOT NULL,
  `price` int unsigned NOT NULL,
  `data` varchar(45) NOT NULL,
  `call` varchar(45) NOT NULL,
  `message` varchar(45) NOT NULL,
  PRIMARY KEY (`_id`),
  KEY `fk_mobile plan_mobile plan category1` (`category_id`),
  CONSTRAINT `fk_mobile plan_mobile plan category1` FOREIGN KEY (`category_id`) REFERENCES `mobile_plan_category` (`_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mobile_plan`
--

LOCK TABLES `mobile_plan` WRITE;
/*!40000 ALTER TABLE `mobile_plan` DISABLE KEYS */;
INSERT INTO `mobile_plan` VALUES (1,1,'슬림',55000,'9GB','무제한','무제한'),(2,1,'5GX스텐다드',75000,'200GB','무제한','무제한'),(3,1,'5GX프라임',89000,'무제한','무제한','무제한'),(4,1,'5GX플래티넘',125000,'무제한','무제한','무제한'),(5,1,'0틴 5G',45000,'9GB','무제한','무제한'),(6,4,'5G Y틴',47000,'10GB(+1Mbps무제한)','무제한(영상/부가300분)','무제한'),(7,4,'5G 슬림',55000,'8GB','무제한(조건부 무제한)','무제한');
/*!40000 ALTER TABLE `mobile_plan` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-02 13:43:51
