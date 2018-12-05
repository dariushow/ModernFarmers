-- MySQL dump 10.16  Distrib 10.1.36-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: ecommerce
-- ------------------------------------------------------
-- Server version	10.1.36-MariaDB

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (3,'Chicken'),(4,'Cows'),(5,'Pigs');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `items_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'FERALROOSTER',2100,'Fresh From Farm','catalog1.jpg',3),(2,'FERALROOSTER',2100,'Fresh From Farm','catalog1.jpg',3),(3,'Rhode Island Red',2500,'Fresh From Farm','catalog2.jpg',3),(4,'Brahman Cattle',16000,'Fresh From Farm','brahman.jfif',4),(10,'FERAL ROOSTER',2100,'Fresh From Farm','catalog1.jpg',3),(11,'Rhode Island Red',3000,'Quality Chicken','catalog2.jpg',3),(12,'Rhode Island Red',3000,'Quality Chicken','catalog2.jpg',3),(13,'Rhode Island Red',3000,'Quality Chicken','catalog2.jpg',3),(14,'New Hampshire Chicken',2000,'Quality Chicken','catalog3.jpg',3),(15,'New Hampshire Chicken',2000,'Quality Chicken','catalog3.jpg',3),(16,'Holstein Friesian cattle',18000,'Quality Cows','holstein-friesian bulls.jpg',4),(17,'Large White Pig',5000,'Quality Pig','largewhite.jpg',5),(18,'Large White Pig',5000,'Quality Pig','largewhite.jpg',5),(19,'Large White Pig',5000,'Quality Pig','largewhite.jpg',5),(20,'Berkshire Pig',6000,'Quality Pig','berkshire pig.jpg',5),(21,'British Landrace Pig',5000,'Quality Pig','britishlandrace.jpg',5),(25,'Angus Cattle',20000,'Quality Cow','angus cattle.jpg',4),(26,'Short Horn',20000,'Quality Cow','shorthorn.jpg',4),(27,'Texas Long Horn',20000,'Quality Cow','texaslonghorn.jfif',4),(28,'Texas Long Horn',20000,'Quality Cow','texaslonghorn.jfif',4),(29,'Droughmaster',20000,'Quality Cow','droughtmaster.jpg',4),(30,'Limousin Cattle',20000,'Quality Cow','limousin-cattle.jpg',4),(31,'Limousin Cattle',20000,'Quality Cow','limousin-cattle.jpg',4),(34,'Hampshire Pig',6000,'Quality','Hampshire-pig.jpg',5),(35,'Hampshire Pig',6000,'Quality Pig','Hampshire-pig.jpg',5),(36,'Hampshire Pig',6000,'Quality Pig','Hampshire-pig.jpg',5),(37,'British Landrace Pig',5000,'Quality Pig','britishlandrace.jpg',5);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `home_address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'werfdgdfhf','$2y$10$JrF5MfyGQIIuRAXtxiVw5u8rnqe6eXgfI3oDw7JOrmn8sWxqpVM32','gasdasd@yahoo.com','asjdfhkasdfasdf','asdgadsfgdsfh','1414 casanas street sampaloc');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-05 15:16:58
