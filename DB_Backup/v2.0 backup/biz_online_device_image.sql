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
-- Table structure for table `device_image`
--

DROP TABLE IF EXISTS `device_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_image` (
  `_id` int unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int unsigned NOT NULL,
  `name` varchar(45) NOT NULL,
  `image_url` text NOT NULL,
  `color` varchar(16) NOT NULL,
  `carrier_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`_id`),
  KEY `fk_device image_device1` (`device_id`),
  KEY `fk_device_image_mobile_carrier1_idx` (`carrier_id`),
  CONSTRAINT `fk_device_image_device2` FOREIGN KEY (`device_id`) REFERENCES `device` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_device_image_mobile_carrier2` FOREIGN KEY (`carrier_id`) REFERENCES `mobile_carrier` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `device_image`
--

LOCK TABLES `device_image` WRITE;
/*!40000 ALTER TABLE `device_image` DISABLE KEYS */;
INSERT INTO `device_image` VALUES (1,1,'미스틱브론즈','bronze.jpg','af7e75',4),(2,1,'미스틱화이트','white.jpg','ffffff',4),(3,1,'미스틱블랙','black.jpg','000000',4),(4,2,'미스틱그레이','gray.jpg','545454',4),(5,2,'미스틱브론즈','bronze.jpg','af7e75',4),(6,2,'레드','red.jpg','ff0000',1),(7,2,'블루','blue.jpg','0000ff',2),(8,2,'핑크','pink.jpg','ffe6ff',3),(11,6,'코스믹그레이','gray.jpg','545454',4),(12,6,'코스믹블랙','black.jpg','000000',4),(13,7,'코스믹그레이','gray.jpg','545454',4),(14,7,'클라우드블루','blue.jpg','a4c8e1',4),(15,7,'클라우드화이트','white.jpg','ffffff',4),(16,7,'클라우드블루','blue.jpg','0000ff',2),(17,7,'아우라레드','red.jpg','ff0000',1),(24,16,'코스믹그레이','gray.jpg','5e6366',4),(25,16,'클라우드블루','blue.jpg','a4c8e1',4),(26,16,'클라우드화이트','white.jpg','ffffff',4),(29,19,'코스모스블랙','black.jpg','000000',4),(30,19,'스페이스실버','silver.jpg','dedede',4),(31,20,'블랙','black.jpg','000000',4),(32,20,'화이트','white.jpg','ffffff',4),(33,20,'레드','red.jpg','ff0000',4),(34,21,'블랙','black.jpg','000000',4),(35,21,'화이트','white.jpg','ffffff',4),(36,21,'옐로','yellow.jpg','ffe56e',4),(37,21,'그린','green.jpg','9ee2cc',4),(38,21,'퍼플','purple.jpg','d1cddc',4),(40,21,'레드','red.jpg','ff0000',4),(41,22,'스페이스그레이','gray.jpg','52514f',4),(42,22,'실버','silver.jpg','ebebe2',4),(43,22,'골드','gold.jpg','ffd5b9',4),(44,22,'미드나이트 그린','green.jpg','6a7b70',4),(45,23,'그레이','gray.jpg','52514f',4),(46,23,'실버','silver.jpg','ebebe2',4),(47,23,'골드','gold.jpg','ffd5b9',4),(48,23,'그린','green.jpg','6a7b70',4),(49,24,'세라믹화이트','white.jpg','ffffff',4),(50,24,'미러티탄','titan.jpg','424959',4),(51,24,'미러레드','red.jpg','8a082a',4),(52,25,'문라이트티탄','titan.jpg','424959',4),(53,25,'프로즌화이트','white.jpg','ffffff',4),(54,25,'문라이트블루','blue.jpg','0000ff',4),(55,26,'오로라화이트','white.jpg','ffffff',4),(56,26,'오로라그레이','gray.jpg','1f2020',4),(57,26,'오로라그린','green.jpg','00545f',4),(58,26,'일루전선셋','sunset.jpg','e39829',4),(59,26,'핑크','pink.jpg','ffc0cb',3),(60,26,'오로라레드','red.jpg','ff0000',1),(61,26,'블루','blue.jpg','0000ff',2),(62,27,'그레이','gray.jpg','080808',4),(63,27,'화이트','white.jpg','ffffff',4),(64,28,'블랙','black.jpg','000000',4),(65,28,'화이트','white.jpg','ffffff',4),(66,29,'미스틱브론즈','bronze.jpg','dcb7ad',4),(67,29,'미스틱블랙','black.jpg','000000',4),(68,30,'화이트','white.jpg','ffffff',4),(69,30,'블랙','black.jpg','000000',4),(70,30,'레드','red.jpg','ff0000',1),(71,32,'블랙','black.jpg','000000',4),(72,32,'실버','silver.jpg','eaeaea',4),(73,32,'블루','blue.jpg','0000ff',4),(74,33,'핑크','pink.jpg','f789a2',4),(75,33,'블랙','black.jpg','000000',4),(76,33,'화이트','white.jpg','ffffff',4),(77,34,'블랙','black.jpg','000000',4),(78,34,'화이트','white.jpg','ffffff',4),(79,34,'블루','blue.jpg','0000ff',4),(80,35,'미러골드','gold.jpg','ece095',4),(81,35,'미러블랙','black.jpg','000000',4),(82,35,'미러퍼플','purple.jpg','a364c7',4),(83,36,'미스틱브론즈','bronze.jpg','ae9490',4),(84,36,'미스틱화이트','white.jpg','ffffff',4),(85,36,'미스틱실버','silver.jpg','3c3f48',4),(86,37,'블랙','black.jpg','000000',4),(87,37,'화이트','white.jpg','ffffff',4),(88,38,'블랙','black.jpg','000000',4),(89,38,'화이트','white.jpg','ffffff',4),(90,39,'아우라블랙','black.jpg','000000',4),(91,39,'아우라화이트','white.jpg','ffffff',4),(92,39,'아우라글로우','glow.jpg','BE97AF',4),(93,39,'아우라핑크','pink.jpg','fd846e',4),(94,39,'아우라레드','red.jpg','ff0000',1),(95,40,'아우라블랙','black.jpg','000000',4),(96,40,'아우라화이트','white.jpg','ffffff',4),(97,40,'아우라글로우','glow.jpg','0000ff',2),(98,41,'블랙','black.jpg','000000',4),(99,41,'화이트','white.jpg','ffffff',4),(100,41,'블루','blue.jpg','0000ff',4),(101,42,'블랙','black.jpg','000000',4),(102,42,'화이트','white.jpg','ffffff',4),(103,42,'코럴','coral.jpg','fd846e',4),(104,43,'블랙','black.jpg','000000',4),(105,43,'화이트','white.jpg','ffffff',4),(106,43,'레드','red.jpg','ff0000',4),(107,44,'블랙','black.jpg','000000',4),(108,44,'골드','gold.jpg','FAED7D',4),(109,45,'마제스틱블랙','black.jpg','000000',4),(110,45,'크라운실버','silver.jpg','b1afc4',4),(111,46,'블랙','SM-G975N_black.jpg','000000',4),(112,46,'화이트','SM-G975N_white.jpg','ffffff',4),(113,47,'블랙','black.jpg','000000',4),(114,47,'화이트','white.jpg','ffffff',4),(115,47,'그린','green.jpg','00ff00',4),(116,48,'블랙','SM-G970N_black.jpg','000000',4),(117,48,'화이트','SM-G970N_white.jpg','ffffff',4),(118,48,'노랑','SM-G970N_yellow.jpg','f9d251',4),(119,49,'블랙','black.jpg','000000',4),(120,50,'블랙','black.jpg','000000',4),(121,51,'블랙','black.jpg','000000',4),(122,52,'블랙','black.jpg','000000',4),(123,53,'뉴오로라블랙','black.jpg','000000',4),(124,53,'뉴플레티넘그레이','gray.jpg','eeeeee',4),(125,54,'뉴오로라블랙','black.jpg','000000',4),(126,54,'뉴모로칸블루','blue.jpg','0000ff',4),(127,55,'아스트로블랙','black.jpg','000000',4),(128,56,'뉴오로라블랙','black.jpg','000000',4),(129,56,'뉴모로칸블루','blue.jpg','0000ff',4),(130,56,'카민레드','red.jpg','ff0000',4),(131,57,'블랙','black.jpg','000000',4),(132,57,'화이트','white.jpg','ffffff',4),(133,57,'레드','red.jpg','ff0000',4),(134,57,'블루','blue.jpg','0000ff',4),(135,57,'노랑','yellow.jpg','f9d251',4),(136,57,'코럴','coral.jpg','ff6e5a',4),(152,45,'로얄골드','gold.jpg','ff6e5a',4);
/*!40000 ALTER TABLE `device_image` ENABLE KEYS */;
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
