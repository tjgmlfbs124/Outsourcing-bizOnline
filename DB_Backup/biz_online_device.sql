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
-- Table structure for table `device`
--

DROP TABLE IF EXISTS `device`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device` (
  `_id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `model` varchar(45) NOT NULL,
  `image_url` text NOT NULL,
  `spec_display` text,
  `spec_cam` text,
  `spec_cpu` text,
  `spec_size` text,
  `manufacturer_id` int unsigned NOT NULL,
  PRIMARY KEY (`_id`),
  KEY `fk_device_manufacturer1` (`manufacturer_id`),
  CONSTRAINT `fk_device_manufacturer1` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturer` (`_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `device`
--

LOCK TABLES `device` WRITE;
/*!40000 ALTER TABLE `device` DISABLE KEYS */;
INSERT INTO `device` VALUES (1,'갤럭시 노트20 울트라','SM-N986N','SM-N986N_IMG.jpg','6.9″ QHD+Dynamic AMOLED 2X 엣지 디스플레이','전면 1,000만 / 후면 1억800만(광각) + 1,200만(초광각) + 1,200만(망원)','Qualcomm Snapdragon 865+','164.8 × 77.2 × 8.1 mm / 208g',1),(2,'갤럭시 노트20','SM-N981N','SM-N981N_IMG.jpg','6.7″ FHD+ Super AMOLED Plus 플랫 디스플레이','전면: 1,000만 / 후면: 6,400만 (망원) + 1,200만(초광각) + 1,200만(광각)','	Qualcomm Snapdragon 865+','	161.6 × 75.2 × 8.3 mm / 192g',1),(6,'갤럭시 S20 울트라','SM-G988N','','6.9″ WQHD+ HID','전면 : 4,000만(PD AF) / 후면 : 1,200만(F2.2 초광각) + 10,800만 PD OIS(F1.8 일반) + 4,800만 OIS(F3.5 망원) + ToF(VGA)','Qualcomm SD865 + SDX55M','166.9 x 76.0 x 8.8mm / 220g',1);
/*!40000 ALTER TABLE `device` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-02 13:43:54
