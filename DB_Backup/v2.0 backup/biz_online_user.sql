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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `_id` int unsigned NOT NULL AUTO_INCREMENT,
  `userid` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `name` varchar(45) NOT NULL,
  `image_url` text,
  `request_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `approval_date` datetime DEFAULT NULL,
  `last_access_date` datetime DEFAULT NULL,
  `recommender` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`_id`),
  UNIQUE KEY `userid_UNIQUE` (`userid`),
  KEY `fk_user_manager_idx` (`recommender`),
  CONSTRAINT `fk_user_manager_idx` FOREIGN KEY (`recommender`) REFERENCES `manager` (`code`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (3,'shl0122','gmlfbs123','01045176040','서희륜','bf453729cea04b6cf0125a613897ed8','2020-09-17 05:49:54','2020-09-18 05:56:02',NULL,'66666'),(19,'tjgmlfbs124','gmlfbs123','01045176040','서희륜','057cba341a96e236b97ff82154ec0dd','2020-10-16 01:29:37','2020-10-16 13:40:10',NULL,'66666'),(23,'zipcdeasd','gmlfbs123','01045176040','서희륜','','2020-10-28 10:28:45','2020-10-28 10:29:20',NULL,'66666');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
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
