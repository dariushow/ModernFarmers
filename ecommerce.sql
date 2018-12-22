-- MySQL dump 10.16  Distrib 10.1.16-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: ECOMMERCE
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
INSERT INTO `items` VALUES (1,'FERAL ROOSTER',2300,'Fresh From Farm','catalog1.jpg',3),(2,'FERALROOSTER',2100,'Fresh From Farm','catalog1.jpg',3),(3,'Rhode Island Red',2500,'Fresh From Farm','catalog2.jpg',3),(4,'Brahman Cattle',16000,'Fresh From Farm','brahman.jfif',4),(10,'FERAL ROOSTER',2100,'Fresh From Farm','catalog1.jpg',3),(11,'Rhode Island Red',3000,'Quality Chicken','catalog2.jpg',3),(12,'Rhode Island Red',3000,'Quality Chicken','catalog2.jpg',3),(13,'Rhode Island Red',3000,'Quality Chicken','catalog2.jpg',3),(14,'New Hampshire Chicken',2000,'Quality Chicken','catalog3.jpg',3),(15,'New Hampshire Chicken',2000,'Quality Chicken','catalog3.jpg',3),(16,'Holstein Friesian cattle',18000,'Quality Cows','holstein-friesian bulls.jpg',4),(17,'Large White Pig',5000,'Quality Pig','largewhite.jpg',5),(18,'Large White Pig',5000,'Quality Pig','largewhite.jpg',5),(19,'Large White Pig',5000,'Quality Pig','largewhite.jpg',5),(20,'Berkshire Pig',6000,'Quality Pig','berkshire pig.jpg',5),(21,'British Landrace Pig',5000,'Quality Pig','britishlandrace.jpg',5),(25,'Angus Cattle',20000,'Quality Cow','angus cattle.jpg',4),(26,'Short Horn',20000,'Quality Cow','shorthorn.jpg',4),(27,'Texas Long Horn',20000,'Quality Cow','texaslonghorn.jfif',4),(28,'Texas Long Horn',20000,'Quality Cow','texaslonghorn.jfif',4),(29,'Droughmaster',20000,'Quality Cow','droughtmaster.jpg',4),(30,'Limousin Cattle',20000,'Quality Cow','limousin-cattle.jpg',4),(31,'Limousin Cattle',20000,'Quality Cow','limousin-cattle.jpg',4),(34,'Hampshire Pig',6000,'Quality','Hampshire-pig.jpg',5),(35,'Hampshire Pig',6000,'Quality Pig','Hampshire-pig.jpg',5),(36,'Hampshire Pig',6000,'Quality Pig','Hampshire-pig.jpg',5),(37,'British Landrace Pig',5000,'Quality Pig','britishlandrace.jpg',5);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `transaction_code` varchar(255) NOT NULL,
  `purchase_date` date NOT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `payment_mode_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `status_id` (`status_id`),
  KEY `payment_mode_id` (`payment_mode_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`),
  CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`payment_mode_id`) REFERENCES `payment_modes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,3,'3BDE00-1544406450','2018-12-10',0.00,2,1),(2,3,'8B38FC-1544406455','2018-12-10',0.00,2,1),(3,3,'BF10E7-1544406736','2018-12-10',0.00,2,1),(4,3,'AAD1D5-1544406778','2018-12-10',0.00,3,1),(5,3,'13A48D-1544406780','2018-12-10',0.00,3,1),(6,3,'945865-1544407172','2018-12-10',0.00,3,1),(7,3,'945865-1544407172','2018-12-10',0.00,3,1),(8,3,'98F0A0-1544407224','2018-12-10',0.00,3,1),(9,3,'98F0A0-1544407224','2018-12-10',0.00,1,1),(10,3,'9D2ABA-1544407498','2018-12-10',0.00,1,1),(11,3,'9D2ABA-1544407498','2018-12-10',0.00,1,1),(12,3,'30FBBF-1544407499','2018-12-10',0.00,1,1),(13,3,'30FBBF-1544407499','2018-12-10',0.00,1,1),(14,3,'D4396A-1544407515','2018-12-10',0.00,1,1),(15,3,'D4396A-1544407515','2018-12-10',0.00,1,1),(16,3,'7D6993-1544407532','2018-12-10',18900.00,1,1),(17,3,'7D6993-1544407532','2018-12-10',18900.00,1,1),(18,3,'33628F-1544407713','2018-12-10',0.00,1,1),(19,3,'33628F-1544407713','2018-12-10',0.00,1,1),(20,3,'D3C58C-1544412088','2018-12-10',0.00,1,1),(21,3,'D3C58C-1544412088','2018-12-10',0.00,1,1),(22,3,'02EEDA-1544412244','2018-12-10',4200.00,1,1),(23,3,'02EEDA-1544412244','2018-12-10',4200.00,1,1),(24,3,'02E3D2-1544412358','2018-12-10',0.00,1,1),(25,3,'02E3D2-1544412358','2018-12-10',0.00,1,1),(26,3,'1E5191-1544412452','2018-12-10',0.00,1,1),(27,3,'1E5191-1544412452','2018-12-10',0.00,1,1),(28,3,'4F76B5-1544412461','2018-12-10',12600.00,1,1),(29,3,'4F76B5-1544412461','2018-12-10',12600.00,1,1),(30,3,'718D31-1544412513','2018-12-10',0.00,1,1),(31,3,'718D31-1544412513','2018-12-10',0.00,1,1),(32,3,'C54D8F-1544412523','2018-12-10',8400.00,1,1),(33,3,'C54D8F-1544412523','2018-12-10',8400.00,1,1),(34,3,'E810EB-1544412621','2018-12-10',0.00,1,1),(35,3,'E810EB-1544412621','2018-12-10',0.00,1,1),(36,3,'CC7531-1544412705','2018-12-10',0.00,1,1),(37,3,'CC7531-1544412705','2018-12-10',0.00,1,1),(38,3,'4D2E87-1544412729','2018-12-10',0.00,1,1),(39,3,'4D2E87-1544412729','2018-12-10',0.00,1,1),(40,3,'BDC723-1544412756','2018-12-10',0.00,1,1),(41,3,'BDC723-1544412756','2018-12-10',0.00,1,1),(42,3,'22F454-1544412797','2018-12-10',14700.00,1,1),(43,3,'22F454-1544412797','2018-12-10',14700.00,1,1),(44,3,'0D3201-1544413106','2018-12-10',0.00,1,1),(45,3,'0D3201-1544413106','2018-12-10',0.00,1,1),(46,3,'240B42-1544413109','2018-12-10',0.00,1,1),(47,3,'240B42-1544413109','2018-12-10',0.00,1,1),(48,3,'F3150C-1544413111','2018-12-10',0.00,1,1),(49,3,'F3150C-1544413111','2018-12-10',0.00,1,1),(50,3,'3E4AB6-1544413114','2018-12-10',0.00,1,1),(51,3,'3E4AB6-1544413114','2018-12-10',0.00,1,1),(52,3,'D5C012-1544413116','2018-12-10',0.00,1,1),(53,3,'D5C012-1544413116','2018-12-10',0.00,1,1),(54,3,'E06C8D-1544413119','2018-12-10',0.00,1,1),(55,3,'E06C8D-1544413119','2018-12-10',0.00,1,1),(56,3,'60EEB8-1544413124','2018-12-10',0.00,1,1),(57,3,'60EEB8-1544413124','2018-12-10',0.00,1,1),(58,3,'342488-1544413141','2018-12-10',0.00,1,1),(59,3,'342488-1544413141','2018-12-10',0.00,1,1),(60,3,'8B9EF5-1544413146','2018-12-10',0.00,1,1),(61,3,'8B9EF5-1544413146','2018-12-10',0.00,1,1),(62,3,'F37485-1544413150','2018-12-10',0.00,1,1),(63,3,'F37485-1544413150','2018-12-10',0.00,1,1),(64,3,'789AD7-1544413155','2018-12-10',0.00,1,1),(65,3,'789AD7-1544413155','2018-12-10',0.00,1,1),(66,3,'8D16EA-1544413158','2018-12-10',0.00,1,1),(67,3,'8D16EA-1544413158','2018-12-10',0.00,1,1),(68,3,'C658F9-1544413163','2018-12-10',0.00,1,1),(69,3,'C658F9-1544413163','2018-12-10',0.00,1,1),(70,3,'8D188D-1544413165','2018-12-10',0.00,1,1),(71,3,'8D188D-1544413165','2018-12-10',0.00,1,1),(72,3,'0CBE6B-1544413169','2018-12-10',0.00,1,1),(73,3,'0CBE6B-1544413169','2018-12-10',0.00,1,1),(74,3,'CEFD79-1544413171','2018-12-10',0.00,1,1),(75,3,'CEFD79-1544413171','2018-12-10',0.00,1,1),(76,3,'C4DC0F-1544413173','2018-12-10',0.00,1,1),(77,3,'C4DC0F-1544413173','2018-12-10',0.00,1,1),(78,3,'0D088A-1544413175','2018-12-10',0.00,1,1),(79,3,'0D088A-1544413175','2018-12-10',0.00,1,1),(80,3,'B81EB2-1544413237','2018-12-10',0.00,1,1),(81,3,'B81EB2-1544413237','2018-12-10',0.00,1,1),(82,3,'D3AB30-1544413268','2018-12-10',0.00,1,1),(83,3,'D3AB30-1544413268','2018-12-10',0.00,1,1),(84,3,'0B59FA-1544413278','2018-12-10',12600.00,1,1),(85,3,'0B59FA-1544413278','2018-12-10',12600.00,1,1),(86,3,'FEB799-1544413611','2018-12-10',0.00,1,1),(87,3,'FEB799-1544413611','2018-12-10',0.00,1,1),(88,3,'37B960-1544413648','2018-12-10',0.00,1,1),(89,3,'37B960-1544413648','2018-12-10',0.00,1,1),(90,3,'BD333D-1544413699','2018-12-10',0.00,1,1),(91,3,'BD333D-1544413699','2018-12-10',0.00,1,1),(92,6,'BDF674-1544488362','2018-12-11',16800.00,1,1),(93,6,'BDF674-1544488362','2018-12-11',16800.00,1,1),(94,6,'5E54AD-1544669023','2018-12-13',11500.00,1,1),(95,6,'5E54AD-1544669023','2018-12-13',11500.00,1,1),(96,6,'9C5AEC-1544669082','2018-12-13',6900.00,1,1),(97,6,'9C5AEC-1544669082','2018-12-13',6900.00,1,1),(98,6,'C380AB-1544669175','2018-12-13',11500.00,1,1),(99,6,'C380AB-1544669175','2018-12-13',11500.00,1,1),(100,6,'86F00B-1544683723','2018-12-13',2300.00,1,1),(101,6,'86F00B-1544683723','2018-12-13',2300.00,1,1),(102,6,'4A0273-1544683740','2018-12-13',6900.00,1,1),(103,6,'4A0273-1544683740','2018-12-13',6900.00,1,1),(104,6,'23A2F0-1544684940','2018-12-13',4600.00,1,1),(105,6,'23A2F0-1544684940','2018-12-13',4600.00,1,1),(106,6,'MFarmers_5c12076e727df','2018-12-13',4600.00,1,2),(107,6,'MFarmers_5c1207f175ccb','2018-12-13',2300.00,1,2);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_items`
--

DROP TABLE IF EXISTS `orders_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `item_id` (`item_id`),
  CONSTRAINT `orders_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `orders_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_items`
--

LOCK TABLES `orders_items` WRITE;
/*!40000 ALTER TABLE `orders_items` DISABLE KEYS */;
INSERT INTO `orders_items` VALUES (1,3,1,9),(2,4,1,9),(3,5,1,9),(4,7,1,9),(5,17,1,9),(6,23,1,2),(7,29,1,6),(8,33,1,4),(9,43,1,7),(10,85,1,6),(11,93,1,8),(12,95,1,5),(13,97,1,3),(14,99,1,5),(15,101,1,1),(16,103,1,3),(17,105,1,2);
/*!40000 ALTER TABLE `orders_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_modes`
--

DROP TABLE IF EXISTS `payment_modes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_modes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_modes`
--

LOCK TABLES `payment_modes` WRITE;
/*!40000 ALTER TABLE `payment_modes` DISABLE KEYS */;
INSERT INTO `payment_modes` VALUES (1,'COD'),(2,'PayPal');
/*!40000 ALTER TABLE `payment_modes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin'),(2,'user');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statuses`
--

LOCK TABLES `statuses` WRITE;
/*!40000 ALTER TABLE `statuses` DISABLE KEYS */;
INSERT INTO `statuses` VALUES (1,'pending'),(2,'completed'),(3,'cancelled');
/*!40000 ALTER TABLE `statuses` ENABLE KEYS */;
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
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `Darius_How` (`role_id`),
  CONSTRAINT `Darius_How` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'abiegail123','$2y$10$vfY5HYeapcHDJRn8fdmsMeZe6eWpdpG6IjyT90u1V86aAnSuES80m','asdasdasd@yahoo.com','abiegail123','tope','',2),(5,'erikayujeco','$2y$10$Ym8c0uwdlJYF4AXDrYvpbOu1WogBZUyMHKA9ha7s1wAww2tfuXPYq','darius@gmail.com','darlene123','paano','',2),(6,'jonis1234','$2y$10$YDNsDNKrWoqvy0qo/ter1uP8Wh/4L8wsr1bZEXfImyCKs6uGQ44I.','asfasfas@yahoo.com','erika','jeco','1414 casanas street',2),(9,'darius12345','$2y$10$.Y3JTh7pV.LFYtolKxMOZ.ljEJlJr1du3HOFDdjncbYMwxAgASmJu','tofie@yahoo.com','darius12345','asdasdsad','1414 casanas street',2),(10,'dariusLamadrid','$2y$10$yz9C7TLcvZ13MdOq49AWf.MICZLiG1bBC8yyNuw8W573RsEnI5V7i','dariuspaano@yahoo.com','Darius','LaMadrid','14',1);
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

-- Dump completed on 2018-12-13 15:33:52
