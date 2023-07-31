-- MySQL dump 10.13  Distrib 8.0.31, for macos12.6 (x86_64)
--
-- Host: 127.0.0.1    Database: ypp
-- ------------------------------------------------------
-- Server version	8.0.31


--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `F_Name` varchar(255) NOT NULL,
  `L_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Msg` varchar(1000) NOT NULL,
  `Num` varchar(255) NOT NULL,
  `Time_Date` varchar(255) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `contact`
--

--
-- Table structure for table `general_settings`
--

DROP TABLE IF EXISTS `general_settings`;
CREATE TABLE `general_settings` (
  `logo` varchar(1000) NOT NULL,
  `title` varchar(500) NOT NULL,
  `subtitle` varchar(1000) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `number` varchar(500) NOT NULL,
  `timings` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` VALUES ('logo.png','Yummy Pet Palate','A PET LOVER PARADISE','yummypetpalate@gmail.com','Karachi, Pakistan','92-312918743','12:00am to 12:00pm');


--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `filter` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4:


--
-- Dumping data for table `products`
--


INSERT INTO `products` VALUES (22,'Whiskas','2200','cat','food','catfood1.png'),(23,'Me-O','1800','cat','food','catfood8.png'),(24,'Josera','4000','cat','food','catfood3.png'),(25,'Bowl','2200','cat','accessory','bowl.png'),(26,'Collar','800','cat','accessory','collar.png'),(27,'House','4000','cat','accessory','house2.png'),(28,'Gim Cat','1000','cat','medicine','med1.png'),(29,'Quantum','1200','cat','medicine','med2.png'),(30,'Tape Tabs','900','cat','medicine','med3.png'),(31,'Ultra','2200','dog','food','food01.png'),(32,'Pedigree','1800','dog','food','food2.png'),(33,'Hypro','4000','dog','food','food3.png'),(34,'Bag','2200','dog','accessory','acc1.png'),(35,'Cage','4000','dog','accessory','acc2.png'),(36,'Leash','700','dog','accessory','acc3.png'),(37,'Bravecto','1000','dog','medicine','dmed1.png'),(38,'Vomitol','1200','dog','medicine','dmed02.png'),(39,'Digyton','900','dog','medicine','dmed3.png');


--
-- Table structure for table `social_links`
--

DROP TABLE IF EXISTS `social_links`;

CREATE TABLE `social_links` (
  `insta` varchar(500) DEFAULT NULL,
  `twitter` varchar(500) DEFAULT NULL,
  `linkedin` varchar(500) DEFAULT NULL,
  `google` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `social_links`
--


INSERT INTO `social_links` VALUES ('https://insta.com','https://twitter.com','https://linkedin.com','https://google.com');


--
-- Dumping routines for database 'ypp'
--


-- Dump completed on 2023-08-01  4:30:37
