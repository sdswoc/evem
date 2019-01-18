-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: evem
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.10.1

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
-- Table structure for table `event_adrijshikhar`
--

DROP TABLE IF EXISTS `event_adrijshikhar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_adrijshikhar` (
  `event_no` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `start_at` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_adrijshikhar`
--

LOCK TABLES `event_adrijshikhar` WRITE;
/*!40000 ALTER TABLE `event_adrijshikhar` DISABLE KEYS */;
INSERT INTO `event_adrijshikhar` VALUES (6,'2019-01-09','09:00:00'),(5,'2019-01-06','11:00:00'),(2,'2019-01-05','11:00:00'),(3,'2019-01-05','11:00:00'),(4,'2019-01-05','11:00:00');
/*!40000 ALTER TABLE `event_adrijshikhar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_aviral`
--

DROP TABLE IF EXISTS `event_aviral`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_aviral` (
  `event_no` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `start_at` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_aviral`
--

LOCK TABLES `event_aviral` WRITE;
/*!40000 ALTER TABLE `event_aviral` DISABLE KEYS */;
INSERT INTO `event_aviral` VALUES (3,'2019-01-05','11:00:00'),(2,'2019-01-05','11:00:00');
/*!40000 ALTER TABLE `event_aviral` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_deva007deva`
--

DROP TABLE IF EXISTS `event_deva007deva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_deva007deva` (
  `event_no` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `start_at` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_deva007deva`
--

LOCK TABLES `event_deva007deva` WRITE;
/*!40000 ALTER TABLE `event_deva007deva` DISABLE KEYS */;
INSERT INTO `event_deva007deva` VALUES (2,'2019-01-05','11:00:00'),(4,'2019-01-05','11:00:00'),(3,'2019-01-05','11:00:00'),(5,'2019-01-06','11:00:00'),(6,'2019-01-09','09:00:00');
/*!40000 ALTER TABLE `event_deva007deva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_shreya`
--

DROP TABLE IF EXISTS `event_shreya`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_shreya` (
  `event_no` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `start_at` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_shreya`
--

LOCK TABLES `event_shreya` WRITE;
/*!40000 ALTER TABLE `event_shreya` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_shreya` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_srajan`
--

DROP TABLE IF EXISTS `event_srajan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_srajan` (
  `event_no` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `start_at` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_srajan`
--

LOCK TABLES `event_srajan` WRITE;
/*!40000 ALTER TABLE `event_srajan` DISABLE KEYS */;
INSERT INTO `event_srajan` VALUES (2,'2019-01-05','11:00:00'),(3,'2019-01-05','11:00:00'),(4,'2019-01-05','11:00:00'),(6,'2019-01-09','09:00:00'),(5,'2019-01-06','11:00:00');
/*!40000 ALTER TABLE `event_srajan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_utkarshmathur`
--

DROP TABLE IF EXISTS `event_utkarshmathur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_utkarshmathur` (
  `event_no` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `start_at` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_utkarshmathur`
--

LOCK TABLES `event_utkarshmathur` WRITE;
/*!40000 ALTER TABLE `event_utkarshmathur` DISABLE KEYS */;
INSERT INTO `event_utkarshmathur` VALUES (3,'2019-01-05','11:00:00'),(4,'2019-01-05','11:00:00');
/*!40000 ALTER TABLE `event_utkarshmathur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `start_at` time DEFAULT NULL,
  `end_at` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `venue` varchar(500) DEFAULT NULL,
  `for_people` varchar(50) DEFAULT NULL,
  `contact` varchar(500) DEFAULT NULL,
  `auth` varchar(500) DEFAULT NULL,
  `resources` varchar(1000) DEFAULT NULL,
  `by_organizer` varchar(100) DEFAULT NULL,
  `rating` float DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (2,' sds ','a','11:00:00','13:00:00','2019-01-05','  a  ','  a  ','  a  ','  a  ','  a  ','adrijshikhar',4),(3,'ShARE','a','11:00:00','13:00:00','2019-01-05','a ','a ','a ','a ','a ','adrijshikhar',3.5),(4,'Music Club','a','11:00:00','13:00:00','2019-01-05','a  ','a  ','a  ','a  ','a  ','adrijshikhar',1),(5,'img','img','11:00:00','12:00:00','2019-01-06','a','a','a','a','a','adrijshikhar',0),(6,'sds','sds','09:00:00','11:00:00','2019-01-09','s','s','s','s','s','adrijshikhar',0);
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `rating` int(11) DEFAULT '0',
  `feedback` varchar(1000) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `id` int(11) DEFAULT '0',
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (1,'asd','adrijshikhar',4,'2019-01-02 17:13:07'),(5,'Awesome','adrijshikhar',3,'2019-01-03 11:12:41'),(4,'Good','srajan',3,'2019-01-03 18:53:37'),(1,'bad','adrijshikhar',3,'2019-01-09 21:36:28'),(4,'okok','adrijshikhar',3,'2019-01-10 03:18:21'),(4,'awesome','adrijshikhar',2,'2019-01-14 21:26:08');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `enroll` varchar(10) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `organizer` varchar(5) NOT NULL,
  `security_ques` varchar(50) NOT NULL,
  `security_ans` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `logged_in` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Adrij Shikhar','adrij123','adrijshikhar85@gmail.com','m','8218058928','18121003','chemical',1,'y','In which city you were born?','bareilly','adrijshikhar',1),(3,'Utkarsh Mathur','utkarsh','asd@asd.com','m','9639639632','18121024','PSE',1,'n','In which city you were born?','jodhpur','utkarshmathur',0),(4,'Aviral Gangwar','aviral123','aviral@ee.iitr.ac.in','m','8958539517','18115023','EE',1,'n','In which city you were born?','bareilly','aviral',0),(5,'Devang ','devang123','deva@gmail.com','m','9621031395','18411010','GPT',1,'n','','Aligarh','deva007deva',0),(6,'Srajan Saxena','srajan123','asd123@asd.com','m','9639639632','123123123','CSE',1,'y','','india','srajan',0),(7,'shreya','shreya123','shreya@gmail.com','f','9874563214','1234566','CSE',2,'n','In which city you were born?','bareilly','shreya',0);
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

-- Dump completed on 2019-01-17 22:28:14
