-- MySQL dump 10.16  Distrib 10.1.13-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: AVOCADODB
-- ------------------------------------------------------
-- Server version	10.1.13-MariaDB

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
-- Table structure for table `MSDCATEGORY`
--

DROP TABLE IF EXISTS `MSDCATEGORY`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSDCATEGORY` (
  `CAT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CAT_GROUP` int(1) NOT NULL,
  `CAT_NAME` varchar(30) NOT NULL,
  `SPEC1` varchar(50) NOT NULL,
  `SPEC2` varchar(50) NOT NULL,
  PRIMARY KEY (`CAT_ID`),
  KEY `CAT_ID` (`CAT_GROUP`),
  CONSTRAINT `MSDCATEGORY_ibfk_1` FOREIGN KEY (`CAT_GROUP`) REFERENCES `MSHCATEGORY` (`CAT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSDCATEGORY`
--

LOCK TABLES `MSDCATEGORY` WRITE;
/*!40000 ALTER TABLE `MSDCATEGORY` DISABLE KEYS */;
INSERT INTO `MSDCATEGORY` VALUES (1,1,'Abilify','','');
INSERT INTO `MSDCATEGORY` VALUES (2,1,'Abiraterone','','');
INSERT INTO `MSDCATEGORY` VALUES (3,1,'Abortion','','');
INSERT INTO `MSDCATEGORY` VALUES (4,1,'Abraxane','','');
INSERT INTO `MSDCATEGORY` VALUES (5,1,'Abreva','','');
INSERT INTO `MSDCATEGORY` VALUES (6,1,'Abstinence','','');
INSERT INTO `MSDCATEGORY` VALUES (7,1,'Acadesine','','');
INSERT INTO `MSDCATEGORY` VALUES (8,1,'Acanthamoeba','','');
INSERT INTO `MSDCATEGORY` VALUES (9,1,'Acarbose','','');
INSERT INTO `MSDCATEGORY` VALUES (10,1,'Accutane','','');
INSERT INTO `MSDCATEGORY` VALUES (11,1,'Cancer','','');
INSERT INTO `MSDCATEGORY` VALUES (12,1,'Diabetes','','');
INSERT INTO `MSDCATEGORY` VALUES (13,1,'Dyslexia','','');
INSERT INTO `MSDCATEGORY` VALUES (14,1,'Stroke','','');
INSERT INTO `MSDCATEGORY` VALUES (15,2,'Stetoskop','','');
INSERT INTO `MSDCATEGORY` VALUES (16,2,'Antibiotic','','');
INSERT INTO `MSDCATEGORY` VALUES (17,1,'Cholesterol','','');
INSERT INTO `MSDCATEGORY` VALUES (18,2,'Baby Care','','');
INSERT INTO `MSDCATEGORY` VALUES (19,2,'Sport Equipment','','');
INSERT INTO `MSDCATEGORY` VALUES (20,2,'Vitamins','','');
INSERT INTO `MSDCATEGORY` VALUES (21,2,'Eye Care','','');
INSERT INTO `MSDCATEGORY` VALUES (22,2,'Cosmetics','','');
INSERT INTO `MSDCATEGORY` VALUES (23,3,'Forum','','');
INSERT INTO `MSDCATEGORY` VALUES (24,3,'Kesehatan','','');
INSERT INTO `MSDCATEGORY` VALUES (25,3,'Estore','','');
INSERT INTO `MSDCATEGORY` VALUES (26,1,'Mati suri','','');
/*!40000 ALTER TABLE `MSDCATEGORY` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MSDGRPMENU`
--

DROP TABLE IF EXISTS `MSDGRPMENU`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSDGRPMENU` (
  `GRP_MENU_ID` varchar(10) NOT NULL,
  `GRP_MENU_LIST` varchar(30) NOT NULL,
  `GRP_MENU_DESC` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSDGRPMENU`
--

LOCK TABLES `MSDGRPMENU` WRITE;
/*!40000 ALTER TABLE `MSDGRPMENU` DISABLE KEYS */;
/*!40000 ALTER TABLE `MSDGRPMENU` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MSHCATEGORY`
--

DROP TABLE IF EXISTS `MSHCATEGORY`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSHCATEGORY` (
  `CAT_ID` int(1) NOT NULL AUTO_INCREMENT,
  `CAT_NAME` varchar(10) NOT NULL,
  PRIMARY KEY (`CAT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSHCATEGORY`
--

LOCK TABLES `MSHCATEGORY` WRITE;
/*!40000 ALTER TABLE `MSHCATEGORY` DISABLE KEYS */;
INSERT INTO `MSHCATEGORY` VALUES (1,'news');
INSERT INTO `MSHCATEGORY` VALUES (2,'estore');
INSERT INTO `MSHCATEGORY` VALUES (3,'forum');
INSERT INTO `MSHCATEGORY` VALUES (4,'doctor');
/*!40000 ALTER TABLE `MSHCATEGORY` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MSHDOCTOR`
--

DROP TABLE IF EXISTS `MSHDOCTOR`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSHDOCTOR` (
  `DCT_ID` varchar(10) NOT NULL,
  `DCT_EDUC` varchar(100) NOT NULL,
  `DCT_ABOUT` text NOT NULL,
  `DCT_EXP` text NOT NULL,
  `DCT_SPECIALTY` text NOT NULL,
  `DCT_CERTIFICATE` text NOT NULL,
  `CONSULT_FEE` int(11) NOT NULL,
  `BOOKING_FEE` int(11) NOT NULL,
  `IMG_CERTIFICATE` varchar(50) NOT NULL,
  `IMG_LICENSE` varchar(50) NOT NULL,
  `IMG_REGISTRATION` varchar(50) NOT NULL,
  PRIMARY KEY (`DCT_ID`),
  CONSTRAINT `MSHDOCTOR_ibfk_1` FOREIGN KEY (`DCT_ID`) REFERENCES `MSTUSER` (`USER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSHDOCTOR`
--

LOCK TABLES `MSHDOCTOR` WRITE;
/*!40000 ALTER TABLE `MSHDOCTOR` DISABLE KEYS */;
INSERT INTO `MSHDOCTOR` VALUES ('sxioo','m1;m2;m3;m4;m5;m6','Lorem','5 thn','bedah','bedah-bedah',50000,100000,'sxioo_cc.jpg','sxioo_pl.jpg','sxioo_pr.jpg');
/*!40000 ALTER TABLE `MSHDOCTOR` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MSHGRPMENU`
--

DROP TABLE IF EXISTS `MSHGRPMENU`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSHGRPMENU` (
  `GRP_MENU_ID` varchar(10) NOT NULL,
  `GRP_MENU_NAME` varchar(30) NOT NULL,
  PRIMARY KEY (`GRP_MENU_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSHGRPMENU`
--

LOCK TABLES `MSHGRPMENU` WRITE;
/*!40000 ALTER TABLE `MSHGRPMENU` DISABLE KEYS */;
/*!40000 ALTER TABLE `MSHGRPMENU` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MSHPACIENT`
--

DROP TABLE IF EXISTS `MSHPACIENT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSHPACIENT` (
  `PCT_ID` varchar(10) NOT NULL,
  `PCT_NAME` varchar(30) NOT NULL,
  `PCT_ADDR` varchar(50) NOT NULL,
  `PCT_EMAIL` varchar(15) NOT NULL,
  `USER_ID` varchar(10) NOT NULL,
  PRIMARY KEY (`PCT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSHPACIENT`
--

LOCK TABLES `MSHPACIENT` WRITE;
/*!40000 ALTER TABLE `MSHPACIENT` DISABLE KEYS */;
/*!40000 ALTER TABLE `MSHPACIENT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MSTCITY`
--

DROP TABLE IF EXISTS `MSTCITY`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSTCITY` (
  `CITY_ID` varchar(10) NOT NULL,
  `CITY_DESC` varchar(30) NOT NULL,
  PRIMARY KEY (`CITY_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSTCITY`
--

LOCK TABLES `MSTCITY` WRITE;
/*!40000 ALTER TABLE `MSTCITY` DISABLE KEYS */;
/*!40000 ALTER TABLE `MSTCITY` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MSTCOMMENT`
--

DROP TABLE IF EXISTS `MSTCOMMENT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSTCOMMENT` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(70) NOT NULL,
  `SUBJECT` varchar(100) NOT NULL,
  `COMMENT` text NOT NULL,
  `CREATED_AT` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSTCOMMENT`
--

LOCK TABLES `MSTCOMMENT` WRITE;
/*!40000 ALTER TABLE `MSTCOMMENT` DISABLE KEYS */;
INSERT INTO `MSTCOMMENT` VALUES (1,'a@a.com','a','a','2017-01-06 07:12:27');
INSERT INTO `MSTCOMMENT` VALUES (2,'a@a.com','a','a','2017-01-06 07:12:41');
INSERT INTO `MSTCOMMENT` VALUES (3,'a@a.com','a','a','2017-01-06 07:12:42');
INSERT INTO `MSTCOMMENT` VALUES (4,'a@a.com','a','a','2017-01-06 07:12:42');
INSERT INTO `MSTCOMMENT` VALUES (5,'ossas@ossas.com','This is Ossas','Uvuvwevwevwe Ossas','2017-01-06 07:25:55');
INSERT INTO `MSTCOMMENT` VALUES (6,'ossas@ossas.com','This is Ossas','Uvuvwevwevwe Onyetenyevwe Ugwemuhwem Osas','2017-01-06 07:40:39');
/*!40000 ALTER TABLE `MSTCOMMENT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MSTCUSTOMER`
--

DROP TABLE IF EXISTS `MSTCUSTOMER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSTCUSTOMER` (
  `CUST_ID` varchar(10) NOT NULL,
  `CUST_NAME` varchar(30) NOT NULL,
  `CUSTOMER_JOIN_DT` datetime NOT NULL,
  `EMAIL` varchar(15) NOT NULL,
  `CUST_ADDR` varchar(50) NOT NULL,
  `CUST_RCV_ADDR` varchar(50) NOT NULL,
  `CUST_NO_REK` int(20) NOT NULL,
  `USER_ID` varchar(10) NOT NULL,
  PRIMARY KEY (`CUST_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSTCUSTOMER`
--

LOCK TABLES `MSTCUSTOMER` WRITE;
/*!40000 ALTER TABLE `MSTCUSTOMER` DISABLE KEYS */;
/*!40000 ALTER TABLE `MSTCUSTOMER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MSTGENDER`
--

DROP TABLE IF EXISTS `MSTGENDER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSTGENDER` (
  `GEND_ID` varchar(10) NOT NULL,
  `GEND_DESC` varchar(30) NOT NULL,
  PRIMARY KEY (`GEND_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSTGENDER`
--

LOCK TABLES `MSTGENDER` WRITE;
/*!40000 ALTER TABLE `MSTGENDER` DISABLE KEYS */;
/*!40000 ALTER TABLE `MSTGENDER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MSTPRODUCT`
--

DROP TABLE IF EXISTS `MSTPRODUCT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSTPRODUCT` (
  `PROD_ID` varchar(10) NOT NULL,
  `PROD_NAME` varchar(30) NOT NULL,
  `CAT_ID` int(11) NOT NULL,
  `PROD_QTY_OS` int(11) NOT NULL,
  `PROD_PRICE` int(20) NOT NULL,
  `PROD_DESC` text NOT NULL,
  `PROD_IMG` varchar(30) NOT NULL,
  `CREATED_AT` datetime NOT NULL,
  `UPDATED_AT` datetime NOT NULL,
  PRIMARY KEY (`PROD_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSTPRODUCT`
--

LOCK TABLES `MSTPRODUCT` WRITE;
/*!40000 ALTER TABLE `MSTPRODUCT` DISABLE KEYS */;
INSERT INTO `MSTPRODUCT` VALUES ('ANTI1','Antibiotic Super',16,603,30000,'<p>This is an Antibiotic</p>','noimage.jpg','2016-12-28 00:00:00','0000-00-00 00:00:00');
INSERT INTO `MSTPRODUCT` VALUES ('Baby1','Himalaya Baby Cream 100ml',18,100,300000,'<p>Himalaya&rsquo;s Baby Cream is specially formulated to protect the little one&#39;s roughen cheeks, &#39;crawler&#39;s knee&#39;, gentle nose and rubbed elbows. This cream protects against irritating humidity and windburn. Its ingredients works together to moisturize the baby&#39;s skin and maintain its natural softness. Uses under doctor&#39;s advice</p>','baby-cream_2.jpg','2016-12-29 15:17:07','0000-00-00 00:00:00');
INSERT INTO `MSTPRODUCT` VALUES ('STET1','Stethoscope White',15,1005,500000,'<p>White Stethoscope is the best</p>','ste1.jpg','2016-12-25 00:00:00','2016-12-29 23:03:58');
INSERT INTO `MSTPRODUCT` VALUES ('STET2','Stethoscope Black',15,1501,600000,'<p>This is a black stethoscope</p>','Lucifer.jpg','2016-12-26 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `MSTPRODUCT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MSTRELIGION`
--

DROP TABLE IF EXISTS `MSTRELIGION`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSTRELIGION` (
  `RLG_ID` varchar(10) NOT NULL,
  `RLG_DESC` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSTRELIGION`
--

LOCK TABLES `MSTRELIGION` WRITE;
/*!40000 ALTER TABLE `MSTRELIGION` DISABLE KEYS */;
/*!40000 ALTER TABLE `MSTRELIGION` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MSTREMINDER`
--

DROP TABLE IF EXISTS `MSTREMINDER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSTREMINDER` (
  `USER_ID` varchar(10) NOT NULL,
  `REMINDER_DT` datetime NOT NULL,
  `REMINDER_DESC` varchar(100) NOT NULL,
  PRIMARY KEY (`USER_ID`,`REMINDER_DT`),
  CONSTRAINT `MSTREMINDER_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `MSTUSER` (`USER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSTREMINDER`
--

LOCK TABLES `MSTREMINDER` WRITE;
/*!40000 ALTER TABLE `MSTREMINDER` DISABLE KEYS */;
INSERT INTO `MSTREMINDER` VALUES ('sxio','2017-01-05 17:20:00','Presentasi SIM');
/*!40000 ALTER TABLE `MSTREMINDER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MSTSEQUENCES`
--

DROP TABLE IF EXISTS `MSTSEQUENCES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSTSEQUENCES` (
  `SEQ_ID` varchar(10) NOT NULL,
  `SEQ_NAME` varchar(30) NOT NULL,
  `SEQ_VALUE` int(11) NOT NULL,
  PRIMARY KEY (`SEQ_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSTSEQUENCES`
--

LOCK TABLES `MSTSEQUENCES` WRITE;
/*!40000 ALTER TABLE `MSTSEQUENCES` DISABLE KEYS */;
/*!40000 ALTER TABLE `MSTSEQUENCES` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MSTSERVICE`
--

DROP TABLE IF EXISTS `MSTSERVICE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSTSERVICE` (
  `SERV_ID` varchar(10) NOT NULL,
  `SERV_DESC` varchar(30) NOT NULL,
  `PRICE` int(11) NOT NULL,
  PRIMARY KEY (`SERV_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSTSERVICE`
--

LOCK TABLES `MSTSERVICE` WRITE;
/*!40000 ALTER TABLE `MSTSERVICE` DISABLE KEYS */;
/*!40000 ALTER TABLE `MSTSERVICE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MSTSUPPLIER`
--

DROP TABLE IF EXISTS `MSTSUPPLIER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSTSUPPLIER` (
  `SUPP_ID` varchar(10) NOT NULL,
  `SUPP_NAME` varchar(30) NOT NULL,
  `SUPP_JOIN_DT` datetime NOT NULL,
  `EMAIL` varchar(15) NOT NULL,
  `SUPP_ADDR` varchar(50) NOT NULL,
  `SUPP_DLV_ADDR` varchar(50) NOT NULL,
  `SUPP_NO_REK` int(20) NOT NULL,
  `USER_NAME` varchar(10) NOT NULL,
  PRIMARY KEY (`SUPP_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSTSUPPLIER`
--

LOCK TABLES `MSTSUPPLIER` WRITE;
/*!40000 ALTER TABLE `MSTSUPPLIER` DISABLE KEYS */;
/*!40000 ALTER TABLE `MSTSUPPLIER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MSTTYPESCORING`
--

DROP TABLE IF EXISTS `MSTTYPESCORING`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSTTYPESCORING` (
  `TYPESCORE_ID` varchar(10) NOT NULL,
  `TYPESCORE_DESC` int(11) NOT NULL,
  PRIMARY KEY (`TYPESCORE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSTTYPESCORING`
--

LOCK TABLES `MSTTYPESCORING` WRITE;
/*!40000 ALTER TABLE `MSTTYPESCORING` DISABLE KEYS */;
/*!40000 ALTER TABLE `MSTTYPESCORING` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MSTUSER`
--

DROP TABLE IF EXISTS `MSTUSER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSTUSER` (
  `USER_ID` varchar(10) NOT NULL,
  `USER_NAME` varchar(30) NOT NULL,
  `USER_PASS` varchar(100) NOT NULL,
  `USER_BIRTH` date NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `HANDPHONE` char(15) NOT NULL,
  `USER_ADDRESS` varchar(150) NOT NULL,
  `USER_IMG` varchar(100) NOT NULL,
  `GRP_MENU_ID` int(11) NOT NULL,
  `USER_LEVEL` int(11) NOT NULL,
  `ACTIVE` int(11) DEFAULT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSTUSER`
--

LOCK TABLES `MSTUSER` WRITE;
/*!40000 ALTER TABLE `MSTUSER` DISABLE KEYS */;
INSERT INTO `MSTUSER` VALUES ('admin','Stephen','5f4dcc3b5aa765d61d8327deb882cf99','1996-06-08','chronolegionaire@yahoo.com','123','','',0,0,1);
INSERT INTO `MSTUSER` VALUES ('meikelwis','meikelwis','afe538dc69067417dc87c310230ab881','1997-01-06','meikelwis.wijaya@gmail.com','12312','123123','',0,2,1);
INSERT INTO `MSTUSER` VALUES ('ossas','Uvuvwevwevwe Ossas','aec676f7d23170153bf9f2cb2cc4d052','2016-12-31','ossas@ossas.com','789456321','Afrika Selatan','',0,0,1);
INSERT INTO `MSTUSER` VALUES ('sxio','Stephen','5f4dcc3b5aa765d61d8327deb882cf99','1996-06-08','chronolegionaire@yahoo.com','123','Jalan PROF HM YAMIN SH No 133','',0,1,1);
INSERT INTO `MSTUSER` VALUES ('sxioo','Stephen Huang','5f4dcc3b5aa765d61d8327deb882cf99','1996-06-08','stephen.huang96@gmail.com','083199773608','Jalan PROF HM YAMIN SH No 254','sxioo_photo.jpg',0,2,1);
/*!40000 ALTER TABLE `MSTUSER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MSTUSERLEVEL`
--

DROP TABLE IF EXISTS `MSTUSERLEVEL`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSTUSERLEVEL` (
  `USER_LEVEL` int(11) NOT NULL,
  `USER_DESC` varchar(10) NOT NULL,
  PRIMARY KEY (`USER_LEVEL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSTUSERLEVEL`
--

LOCK TABLES `MSTUSERLEVEL` WRITE;
/*!40000 ALTER TABLE `MSTUSERLEVEL` DISABLE KEYS */;
INSERT INTO `MSTUSERLEVEL` VALUES (0,'Admin');
INSERT INTO `MSTUSERLEVEL` VALUES (1,'User');
INSERT INTO `MSTUSERLEVEL` VALUES (2,'Doctor');
/*!40000 ALTER TABLE `MSTUSERLEVEL` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TRDADDCHATTING`
--

DROP TABLE IF EXISTS `TRDADDCHATTING`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TRDADDCHATTING` (
  `ADDCHAT_ID` varchar(10) NOT NULL,
  `ADDCHAT_DT` datetime NOT NULL,
  `USER_ID` varchar(15) NOT NULL,
  `CONTACT_ID` varchar(15) NOT NULL,
  `LEVEL` int(11) DEFAULT NULL,
  PRIMARY KEY (`ADDCHAT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRDADDCHATTING`
--

LOCK TABLES `TRDADDCHATTING` WRITE;
/*!40000 ALTER TABLE `TRDADDCHATTING` DISABLE KEYS */;
/*!40000 ALTER TABLE `TRDADDCHATTING` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TRDBOOKING`
--

DROP TABLE IF EXISTS `TRDBOOKING`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TRDBOOKING` (
  `BOOKING_ID` varchar(10) NOT NULL,
  `DCT_ID` varchar(10) NOT NULL,
  `SERV_ID` varchar(10) NOT NULL,
  `BOOK_COUNT` int(11) NOT NULL,
  `TOTAL_AMOUNT` int(11) NOT NULL,
  `USER_ID` varchar(10) NOT NULL,
  `USER_NAME` varchar(15) NOT NULL,
  `USER_DT` datetime NOT NULL,
  PRIMARY KEY (`BOOKING_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRDBOOKING`
--

LOCK TABLES `TRDBOOKING` WRITE;
/*!40000 ALTER TABLE `TRDBOOKING` DISABLE KEYS */;
/*!40000 ALTER TABLE `TRDBOOKING` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TRDCHATTING`
--

DROP TABLE IF EXISTS `TRDCHATTING`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TRDCHATTING` (
  `CHAT_ID` varchar(10) NOT NULL,
  `USER_ID` varchar(15) NOT NULL,
  `USER_NAME` varchar(30) NOT NULL,
  `USER_DT` datetime NOT NULL,
  `TIPE` int(2) NOT NULL,
  `CHAT_TEXT` text NOT NULL,
  PRIMARY KEY (`CHAT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRDCHATTING`
--

LOCK TABLES `TRDCHATTING` WRITE;
/*!40000 ALTER TABLE `TRDCHATTING` DISABLE KEYS */;
/*!40000 ALTER TABLE `TRDCHATTING` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TRDDOCTOR`
--

DROP TABLE IF EXISTS `TRDDOCTOR`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TRDDOCTOR` (
  `DCT_ID` varchar(10) NOT NULL,
  `DCT_STATUS` varchar(10) NOT NULL,
  `DCT_ID_GRADE` int(11) NOT NULL,
  `LOC_X` int(11) NOT NULL,
  `LOC_Y` int(11) NOT NULL,
  PRIMARY KEY (`DCT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRDDOCTOR`
--

LOCK TABLES `TRDDOCTOR` WRITE;
/*!40000 ALTER TABLE `TRDDOCTOR` DISABLE KEYS */;
/*!40000 ALTER TABLE `TRDDOCTOR` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TRDGRADING`
--

DROP TABLE IF EXISTS `TRDGRADING`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TRDGRADING` (
  `GRADING_ID` varchar(10) NOT NULL,
  `TYPESCORE_ID` varchar(10) NOT NULL,
  `SCORE` int(11) NOT NULL,
  PRIMARY KEY (`GRADING_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRDGRADING`
--

LOCK TABLES `TRDGRADING` WRITE;
/*!40000 ALTER TABLE `TRDGRADING` DISABLE KEYS */;
/*!40000 ALTER TABLE `TRDGRADING` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TRDNEWS`
--

DROP TABLE IF EXISTS `TRDNEWS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TRDNEWS` (
  `NEWS_ID` varchar(10) NOT NULL,
  `NEWS_TITLE` varchar(100) NOT NULL,
  `NEWS_CONTENT` longtext NOT NULL,
  `NEWS_DT` datetime NOT NULL,
  `NEWS_CAT` int(11) NOT NULL,
  `USER_ID` varchar(15) NOT NULL,
  `NEWS_SOURCE` varchar(50) NOT NULL,
  `NEWS_IMAGE` varchar(30) NOT NULL,
  PRIMARY KEY (`NEWS_ID`),
  KEY `NEWS_CAT` (`NEWS_CAT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRDNEWS`
--

LOCK TABLES `TRDNEWS` WRITE;
/*!40000 ALTER TABLE `TRDNEWS` DISABLE KEYS */;
INSERT INTO `TRDNEWS` VALUES ('chinese','Traditional Chinese herbal medicines hold promise for slowing progression of diabetes','<p>Traditional Chinese herbal medicines hold promise for slowing the progression from prediabetes to an official diabetes diagnosis, according to new research accepted for publication in the Endocrine Society&#39;s&nbsp;<em>Journal of Clinical Endocrinology &amp; Metabolism</em>&nbsp;(<em>JCEM</em>).</p>\r\n\r\n<p>Prediabetes is diagnosed an individual has developed elevated blood sugar levels, but glucose levels have not yet risen to the point of&nbsp;<a href=\"http://www.news-medical.net/health/What-is-Type-2-Diabetes.aspx\">developing type 2 diabetes</a>. People who are prediabetic face a heightened risk of developing type 2 diabetes as well as heart disease and stroke. According to the Centers for Disease Control and Prevention, about 79 million American adults age 20 years or older have prediabetes.</p>\r\n\r\n<p>&quot;With diabetes evolving into a serious public health burden worldwide, it is crucial to take steps to stem the flood of cases,&quot; said one of the study&#39;s authors, Chun-Su Yuan, MD, PhD, of the University of Chicago. &quot;Patients often struggle to make the necessary lifestyle changes to control blood sugar levels, and current medications have limitations and can have adverse gastrointestinal side effects. Traditional Chinese herbs may offer a new option for managing blood sugar levels, either alone or in combination with other treatments.&quot;</p>\r\n\r\n<p>During the double-blind, randomized, placebo-controlled trial, 389 participants at 11 research sites in China were randomly assigned to take either a capsule containing a mixture of 10 Chinese herbal medicines or a placebo. For a year, subjects took capsules of either the Chinese herb mixture, called Tianqi, or the placebo three times a day before meals. All participants received a month of lifestyle education at the outset of the trial and met with nutritionists several times during the course of the study. Subjects&#39; glucose tolerance was measured on a quarterly basis.</p>\r\n\r\n<p>At the end of the trial, 36 participants in the Tianqi group and 56 in the placebo group had developed diabetes. The analysis found taking Tianqi reduced the risk of diabetes by 32.1 percent compared with the placebo, after adjusting for age and gender. The overall reduction in risk was comparable to that found in studies of diabetes medications acarbose and metformin, and study participants reported few side effects from the Tianqi herbs. Tianqi includes several herbs that have been shown to lower blood glucose levels and improve control of blood glucose levels after meals.</p>\r\n\r\n<p>&quot;Few controlled clinical trials have examined traditional Chinese medicine&#39;s impact on diabetes, and the findings from our study showed this approach can be very useful in slowing the disease&#39;s progression,&quot; said one of the study&#39;s lead authors, Xiaolin Tong, MD, PhD, of Guang&#39;anmen Hospital in Beijing, China, said. &quot;More research is needed to evaluate the role Chinese herbal medicine can play in preventing and controlling diabetes.&quot;</p>','2016-12-27 20:04:39',12,'admin','kompas.com','stomach2.jpg');
INSERT INTO `TRDNEWS` VALUES ('chinese2','Traditional Chinese herbal medicines hold promise for slowing progression of diabetes','<p>Traditional Chinese herbal medicines hold promise for slowing the progression from prediabetes to an official diabetes diagnosis, according to new research accepted for publication in the Endocrine Society&#39;s&nbsp;<em>Journal of Clinical Endocrinology &amp; Metabolism</em>&nbsp;(<em>JCEM</em>).</p>\r\n\r\n<p>Prediabetes is diagnosed an individual has developed elevated blood sugar levels, but glucose levels have not yet risen to the point of&nbsp;<a href=\"http://www.news-medical.net/health/What-is-Type-2-Diabetes.aspx\">developing type 2 diabetes</a>. People who are prediabetic face a heightened risk of developing type 2 diabetes as well as heart disease and stroke. According to the Centers for Disease Control and Prevention, about 79 million American adults age 20 years or older have prediabetes.</p>\r\n\r\n<p>&quot;With diabetes evolving into a serious public health burden worldwide, it is crucial to take steps to stem the flood of cases,&quot; said one of the study&#39;s authors, Chun-Su Yuan, MD, PhD, of the University of Chicago. &quot;Patients often struggle to make the necessary lifestyle changes to control blood sugar levels, and current medications have limitations and can have adverse gastrointestinal side effects. Traditional Chinese herbs may offer a new option for managing blood sugar levels, either alone or in combination with other treatments.&quot;</p>\r\n\r\n<p>During the double-blind, randomized, placebo-controlled trial, 389 participants at 11 research sites in China were randomly assigned to take either a capsule containing a mixture of 10 Chinese herbal medicines or a placebo. For a year, subjects took capsules of either the Chinese herb mixture, called Tianqi, or the placebo three times a day before meals. All participants received a month of lifestyle education at the outset of the trial and met with nutritionists several times during the course of the study. Subjects&#39; glucose tolerance was measured on a quarterly basis.</p>\r\n\r\n<p>At the end of the trial, 36 participants in the Tianqi group and 56 in the placebo group had developed diabetes. The analysis found taking Tianqi reduced the risk of diabetes by 32.1 percent compared with the placebo, after adjusting for age and gender. The overall reduction in risk was comparable to that found in studies of diabetes medications acarbose and metformin, and study participants reported few side effects from the Tianqi herbs. Tianqi includes several herbs that have been shown to lower blood glucose levels and improve control of blood glucose levels after meals.</p>\r\n\r\n<p>&quot;Few controlled clinical trials have examined traditional Chinese medicine&#39;s impact on diabetes, and the findings from our study showed this approach can be very useful in slowing the disease&#39;s progression,&quot; said one of the study&#39;s lead authors, Xiaolin Tong, MD, PhD, of Guang&#39;anmen Hospital in Beijing, China, said. &quot;More research is needed to evaluate the role Chinese herbal medicine can play in preventing and controlling diabetes.&quot;</p>','2016-12-27 20:04:39',12,'admin','kompas.com','stomach2.jpg');
INSERT INTO `TRDNEWS` VALUES ('Chol1','\'Bad\' cholesterol linked to poorer cognitive performance','<p>Low-density lipoproteins, also known as &quot;bad&quot; cholesterol, have already been implicated in a number of negative health outcomes. A recent study investigates the role of cholesterol fluctuation in cognitive decline.</p>\r\n\r\n<p>Despite its bad name,&nbsp;<a href=\"http://www.medicalnewstoday.com/articles/9152.php\">cholesterol</a>&nbsp;is essential to the normal functioning of the human body.</p>\r\n\r\n<p>Our cell membranes are composed of around 30 percent cholesterol. It plays a vital role in building, maintaining, and keeping membranes functional.</p>\r\n\r\n<p>Cholesterol cannot be dissolved in the blood; it is lipoproteins that carry it to the areas of the body where it is needed.</p>\r\n\r\n<p>There are two types of lipoproteins: low-density (LDL) and high-density (HDL).</p>\r\n\r\n<p>LDL cholesterol is considered &quot;bad&quot; because it helps build a thick, hard plaque that can clog up arteries and stiffen them. This leads to an increased risk of&nbsp;<a href=\"http://www.heart.org/HEARTORG/Conditions/Cholesterol/AboutCholesterol/Good-vs-Bad-Cholesterol_UCM_305561_Article.jsp#.V4ySe5MrJTY\" target=\"_blank\">heart attack and stroke</a>.</p>\r\n\r\n<p>HDL cholesterol is considered &quot;good&quot; because it helps ferry LDL cholesterol toward the liver where it is broken down.</p>\r\n\r\n<h2>&#39;Bad&#39; cholesterol and the brain</h2>\r\n\r\n<p>Previous research into the relationship between cholesterol levels and cognitive (thinking) function in older adults has been inconclusive. The relationship appears to be a&nbsp;<a href=\"http://www.ncbi.nlm.nih.gov/pmc/articles/PMC4211868/\" target=\"_blank\">complex one</a>.</p>\r\n\r\n<p>A study, published this week in the journal&nbsp;<em>Circulation</em>, used a slightly different approach to investigate the interaction. Rather than the overall levels of LDL cholesterol, the team looked at the effects of cholesterol fluctuation on cognitive performance.</p>\r\n\r\n<p>Cholesterol levels are not static in an individual; they can rise and fall, dependent on factors such as exercise, diet, drugs, and impaired homeostasis due to age or disease. Each individual&#39;s cholesterol levels ebb and flow to different degrees; some people&#39;s levels are relatively static, others are more erratic.</p>\r\n\r\n<p>A team of investigators from Leiden University Medical Center in Leiden, Netherlands, set out to see if LDL cholesterol fluctuations had a measurable impact on the brain.</p>\r\n\r\n<p>The study used 4,428 participants, aged 70-82, taken from the PROspective Study of Pravastatin in the Elderly at Risk (PROSPER). The individuals were from Scotland, the Netherlands, and Ireland.</p>\r\n\r\n<p>PROSPER participants are all either at high risk of developing vascular disease or already had a vascular disease diagnosis.</p>\r\n\r\n<p>Researchers, led by Dr. Roelof Smit, assessed the individual&#39;s LDL cholesterol variability before putting them through a raft of cognitive tests.</p>\r\n\r\n<p>These cognitive tests involved a measure of attention that used colored words - an individual is asked to read the word of a color, written in a different color, for instance, the word &quot;red&quot; written in the color blue. They also used an assessment of information processing speed and two verbal memory tests measuring recall and delayed recall after 20 minutes.</p>\r\n\r\n<h2>Cholesterol fluctuation slows thinking</h2>\r\n\r\n<p>Once the results had been analyzed, the team observed that participants with the highest cholesterol variability needed&nbsp;<a href=\"http://circ.ahajournals.org/content/134/3/212\" target=\"_blank\">2.7 seconds</a>&nbsp;longer to finish the colored word test when compared with individuals with the lowest fluctuations.</p>\r\n\r\n<p>This link was still significant when factors were taken into account, such as overall high LDL levels and the use of statin drugs, which lower cholesterol.</p>\r\n\r\n<p>Although the&nbsp;<a href=\"http://www.alphagalileo.org/ViewItem.aspx?ItemId=166067&amp;CultureCode=en\" target=\"_blank\">effect size</a>&nbsp;might seem small, as Dr. Smit says, it is &quot;significant at a population level.&quot;</p>\r\n\r\n<p>Individuals with highest LDL cholesterol variability also showed lower brain blood flow and higher levels of white matter hyperintensity (WMH). WMH are areas that show as bright marks on&nbsp;<a href=\"http://www.medicalnewstoday.com/articles/146309.php\">MRI</a>&nbsp;scans. They are associated with the normal aging process and are considered a marker of&nbsp;<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3222729/\" target=\"_blank\">cognitive decline</a>.</p>\r\n\r\n<p>Although the results come from a European population, they are, most likely, applicable to American populations, too. However, because the study sample used older adults, the findings cannot be extrapolated to the population at large.</p>\r\n\r\n<p>This study is the first step to understanding the relationship between LDL cholesterol, cognitive performance, and aging. As Dr. Smit says: &quot;Our study is just the first exciting step. Further studies are needed to examine whether these findings could truly influence clinical practice.&quot;</p>\r\n\r\n<p><a href=\"http://www.medicalnewstoday.com/articles/270710.php\">Learn about cholesterol and its links to Alzheimer&#39;s disease</a>.</p>','2016-12-28 21:33:08',17,'admin','medicalnewstoday.com','tangle-of-neurons.jpg');
INSERT INTO `TRDNEWS` VALUES ('Chol2','\'Bad\' cholesterol linked to poorer cognitive performance','<p>Low-density lipoproteins, also known as &quot;bad&quot; cholesterol, have already been implicated in a number of negative health outcomes. A recent study investigates the role of cholesterol fluctuation in cognitive decline.</p>\r\n\r\n<p>Despite its bad name,&nbsp;<a href=\"http://www.medicalnewstoday.com/articles/9152.php\">cholesterol</a>&nbsp;is essential to the normal functioning of the human body.</p>\r\n\r\n<p>Our cell membranes are composed of around 30 percent cholesterol. It plays a vital role in building, maintaining, and keeping membranes functional.</p>\r\n\r\n<p>Cholesterol cannot be dissolved in the blood; it is lipoproteins that carry it to the areas of the body where it is needed.</p>\r\n\r\n<p>There are two types of lipoproteins: low-density (LDL) and high-density (HDL).</p>\r\n\r\n<p>LDL cholesterol is considered &quot;bad&quot; because it helps build a thick, hard plaque that can clog up arteries and stiffen them. This leads to an increased risk of&nbsp;<a href=\"http://www.heart.org/HEARTORG/Conditions/Cholesterol/AboutCholesterol/Good-vs-Bad-Cholesterol_UCM_305561_Article.jsp#.V4ySe5MrJTY\" target=\"_blank\">heart attack and stroke</a>.</p>\r\n\r\n<p>HDL cholesterol is considered &quot;good&quot; because it helps ferry LDL cholesterol toward the liver where it is broken down.</p>\r\n\r\n<h2>&#39;Bad&#39; cholesterol and the brain</h2>\r\n\r\n<p>Previous research into the relationship between cholesterol levels and cognitive (thinking) function in older adults has been inconclusive. The relationship appears to be a&nbsp;<a href=\"http://www.ncbi.nlm.nih.gov/pmc/articles/PMC4211868/\" target=\"_blank\">complex one</a>.</p>\r\n\r\n<p>A study, published this week in the journal&nbsp;<em>Circulation</em>, used a slightly different approach to investigate the interaction. Rather than the overall levels of LDL cholesterol, the team looked at the effects of cholesterol fluctuation on cognitive performance.</p>\r\n\r\n<p>Cholesterol levels are not static in an individual; they can rise and fall, dependent on factors such as exercise, diet, drugs, and impaired homeostasis due to age or disease. Each individual&#39;s cholesterol levels ebb and flow to different degrees; some people&#39;s levels are relatively static, others are more erratic.</p>\r\n\r\n<p>A team of investigators from Leiden University Medical Center in Leiden, Netherlands, set out to see if LDL cholesterol fluctuations had a measurable impact on the brain.</p>\r\n\r\n<p>The study used 4,428 participants, aged 70-82, taken from the PROspective Study of Pravastatin in the Elderly at Risk (PROSPER). The individuals were from Scotland, the Netherlands, and Ireland.</p>\r\n\r\n<p>PROSPER participants are all either at high risk of developing vascular disease or already had a vascular disease diagnosis.</p>\r\n\r\n<p>Researchers, led by Dr. Roelof Smit, assessed the individual&#39;s LDL cholesterol variability before putting them through a raft of cognitive tests.</p>\r\n\r\n<p>These cognitive tests involved a measure of attention that used colored words - an individual is asked to read the word of a color, written in a different color, for instance, the word &quot;red&quot; written in the color blue. They also used an assessment of information processing speed and two verbal memory tests measuring recall and delayed recall after 20 minutes.</p>\r\n\r\n<h2>Cholesterol fluctuation slows thinking</h2>\r\n\r\n<p>Once the results had been analyzed, the team observed that participants with the highest cholesterol variability needed&nbsp;<a href=\"http://circ.ahajournals.org/content/134/3/212\" target=\"_blank\">2.7 seconds</a>&nbsp;longer to finish the colored word test when compared with individuals with the lowest fluctuations.</p>\r\n\r\n<p>This link was still significant when factors were taken into account, such as overall high LDL levels and the use of statin drugs, which lower cholesterol.</p>\r\n\r\n<p>Although the&nbsp;<a href=\"http://www.alphagalileo.org/ViewItem.aspx?ItemId=166067&amp;CultureCode=en\" target=\"_blank\">effect size</a>&nbsp;might seem small, as Dr. Smit says, it is &quot;significant at a population level.&quot;</p>\r\n\r\n<p>Individuals with highest LDL cholesterol variability also showed lower brain blood flow and higher levels of white matter hyperintensity (WMH). WMH are areas that show as bright marks on&nbsp;<a href=\"http://www.medicalnewstoday.com/articles/146309.php\">MRI</a>&nbsp;scans. They are associated with the normal aging process and are considered a marker of&nbsp;<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3222729/\" target=\"_blank\">cognitive decline</a>.</p>\r\n\r\n<p>Although the results come from a European population, they are, most likely, applicable to American populations, too. However, because the study sample used older adults, the findings cannot be extrapolated to the population at large.</p>\r\n\r\n<p>This study is the first step to understanding the relationship between LDL cholesterol, cognitive performance, and aging. As Dr. Smit says: &quot;Our study is just the first exciting step. Further studies are needed to examine whether these findings could truly influence clinical practice.&quot;</p>\r\n\r\n<p><a href=\"http://www.medicalnewstoday.com/articles/270710.php\">Learn about cholesterol and its links to Alzheimer&#39;s disease</a>.</p>','2016-12-28 21:33:08',17,'admin','medicalnewstoday.com','tangle-of-neurons.jpg');
INSERT INTO `TRDNEWS` VALUES ('deslexia1','Dyslexics show a difference in sensory processing','<p>Neuroscientists at MIT and Boston University have discovered that a basic mechanism underlying sensory perception is deficient in individuals with&nbsp;<a href=\"http://www.medicalnewstoday.com/articles/186787.php\">dyslexia</a>, according to study published in&nbsp;<em>Neuron</em>. The brain typically adapts rapidly to sensory input, such as the sound of a person&#39;s voice or images of faces and objects, as a way to make processing more efficient. But for individuals with dyslexia, the researchers found that adaptation was on average about half that of those without the disorder.</p>\r\n\r\n<p>The difference may explain some of the challenges people with dyslexia experience, such as discerning speech in a noisy environment and learning to read. &quot;Adaptation is something the brain does to help make hard tasks easier,&quot; says first author Tyler Perrachione, assistant professor of Speech, Language and Hearing Sciences at Boston University, who completed this research as a graduate student and post-doctoral fellow at MIT. &quot;Dyslexics are not getting this advantage.&quot;</p>\r\n\r\n<p>Perrachione, who has a background in linguistics, wanted to investigate the theory that reading difficulties in dyslexia come from difficulties in associating sounds with written words. Working in the lab of lead investigator John Gabrieli, professor of Brain and Cognitive Science at MIT, he decided to investigate early, fundamental processes in the brain that could make this association difficult. &quot;Part of the mystery of dyslexia is that the brain doesn&#39;t have an area that evolved for reading,&quot; says Gabrieli.</p>\r\n\r\n<p>They zoomed in on the process of rapid neural adaptation. The researchers used functional magnetic resonance imaging (fMRI) to examine the brains of adults with and without dyslexia as they listened to voices. In some cases, the same voice spoke a series of words; in others, different voices spoke each word.</p>\r\n\r\n<p>Brains typically adapt to a single, consistent voice within a second or two, but they don&#39;t adapt to many different voices. As brains adapt, the fMRI measures of brain activity in relevant brain areas drop.</p>\r\n\r\n<p>Individuals without dyslexia adapted to a consistent voice and not to multiple voices. But for dyslexics, brain activity remained high in both cases, suggesting that they did not adapt as much. Dyslexics with better reading skills showed greater adaptation levels. &quot;Brains typically tune in and figure out what is consistent about a voice,&quot; says Perrachione. &quot;We saw much less adaptation in those with dyslexia group compared to typical readers.&quot;</p>\r\n\r\n<p>These results raised questions, since difficulty understanding speech is not seen in dyslexia. &quot;If you were to talk to someone on the street, you&#39;d have no idea if they were dyslexic or not,&quot; says Perrachione.</p>\r\n\r\n<p>So Perrachione and Gabrieli decided to look at adaption to visual stimuli, too. They recruited another group of individuals with and without dyslexia and examined adaptation to images of written words, faces, and objects, either in a series of different images or repeated images. Again they saw much less adaptation in participants with dyslexia.</p>\r\n\r\n<p>The reduced adaptation was observed in the regions of the brain responsible for processing the stimuli in question. &quot;This suggests that adaptation deficits in dyslexia are general, across the whole brain,&quot; says Perrachione.</p>\r\n\r\n<p>They repeated this experiment with yet another group of individuals, this time focusing on children aged 6 to 9 with and without dyslexia. The results were the same. Overall, the study involved over 150 individuals, and dyslexics on average had adaptation levels about half those of typical readers. &quot;I am surprised by the magnitude of the difference,&quot; says Perrachione. &quot;In people without dyslexia, we always see adaptation, but in the dyslexics, the lack of adaptation was often really pronounced.&quot;</p>\r\n\r\n<p>Perrachione and Gabrieli speculate that dyslexics don&#39;t struggle with processing of heard speech or seen objects and faces because human brains evolved to process these inputs. The systems that perform this processing are likely very robust. &quot;The brain devotes a lot of infrastructure to solving these problems, and has multiple routes,&quot; says Perrachione. &quot;Adaptation is just one of the things that helps take the load off.&quot;</p>\r\n\r\n<p>But reading is a different story. It is a learned skill that requires multiple regions of the brain to work together, potentially with the harmony and complexity of a Rube Goldberg machine, says Perrachione. As rapid neural adaptation deficits simultaneously affect auditory and visual processing during reading, they may compound to make reading very difficult. &quot;We have to see letters, map them onto words, map those to sounds, and connect them to semantics,&quot; says Perrachione. &quot;There are lots of places for things to go wrong.&quot;</p>\r\n\r\n<p>It isn&#39;t known yet exactly where things do go wrong as a result of deficits in rapid neural adaptation. &quot;This study presents strong evidence for a foundational brain difference in dyslexia, but it isn&#39;t clear how to bridge that to the specific properties of reading,&quot; says Gabrieli. &quot;It opens up as many questions as it answers.&quot;</p>\r\n\r\n<p>This research was supported by the Ellison Medical Foundation and the National Institutes of Health.</p>\r\n\r\n<p>Article:&nbsp;<a href=\"http://www.cell.com/neuron/fulltext/S0896-6273(16)30858-3\" target=\"_blank\">Dysfunction of Rapid Neural Adaptation in Dyslexia</a>, Perrachione, et al.,&nbsp;<em>Neuron</em>, doi: 10.1016/j.neuron.2016.11.020, published 21 December 2016.</p>','2016-12-27 20:04:14',13,'admin','Kompas.com','ali4.jpg');
INSERT INTO `TRDNEWS` VALUES ('graphene','Cancer / Oncology Biology / Biochemistry First use of graphene to detect cancer cells','<p>By interfacing brain cells onto graphene, researchers at the University of Illinois at Chicago have shown they can differentiate a single hyperactive cancerous cell from a normal cell, pointing the way to developing a simple, noninvasive tool for early&nbsp;<a href=\"http://www.medicalnewstoday.com/info/cancer-oncology/\">cancer</a>&nbsp;diagnosis.</p>\r\n\r\n<p>&quot;This graphene system is able to detect the level of activity of an interfaced cell,&quot; says Vikas Berry, associate professor and head of chemical engineering at UIC, who led the research along with Ankit Mehta, assistant professor of clinical neurosurgery in the UIC College of Medicine.</p>\r\n\r\n<p>&quot;Graphene is the thinnest known material and is very sensitive to whatever happens on its surface,&quot; Berry said. The nanomaterial is composed of a single layer of carbon atoms linked in a hexagonal chicken-wire pattern, and all the atoms share a cloud of electrons moving freely about the surface.</p>\r\n\r\n<p>&quot;The cell&#39;s interface with graphene rearranges the charge distribution in graphene, which modifies the energy of atomic vibration as detected by Raman spectroscopy,&quot; Berry said, referring to a powerful workhorse technique that is routinely used to study graphene.</p>\r\n\r\n<p>The atomic vibration energy in graphene&#39;s crystal lattice differs depending on whether it&#39;s in contact with a cancer cell or a normal cell, Berry said, because the cancer cell&#39;s hyperactivity leads to a higher negative charge on its surface and the release of more protons.</p>\r\n\r\n<p>&quot;The electric field around the cell pushes away electrons in graphene&#39;s electron cloud,&quot; he said, which changes the vibration energy of the carbon atoms. The change in vibration energy can be pinpointed by Raman mapping with a resolution of 300 nanometers, he said, allowing characterization of the activity of a single cell.</p>\r\n\r\n<p>The study, reported in the journal&nbsp;<em>ACS Applied Materials &amp; Interfaces</em>, looked at cultured human brain cells, comparing normal astrocytes to their cancerous counterpart, the highly malignant brain&nbsp;<a href=\"http://www.medicalnewstoday.com/articles/249141.php\">tumor</a>&nbsp;glioblastoma multiforme. The technique is now being studied in a mouse model of cancer, with results that are &quot;very promising,&quot; Berry said. Experiments with patient biopsies would be further down the road.</p>\r\n\r\n<p>&quot;Once a patient has brain tumor surgery, we could use this technique to see if the tumor relapses,&quot; Berry said. &quot;For this, we would need a cell sample we could interface with graphene and look to see if cancer cells are still present.&quot;</p>\r\n\r\n<p>The same technique may also work to differentiate between other types of cells or the activity of cells.</p>\r\n\r\n<p>&quot;We may be able to use it with bacteria to quickly see if the strain is Gram-positive or Gram-negative,&quot; Berry said. &quot;We may be able to use it to detect sickle cells.&quot;</p>\r\n\r\n<p>Earlier this year, Berry and other coworkers introduced nanoscale ripples in graphene, causing it to conduct differently in perpendicular directions, useful for electronics. They wrinkled the graphene by draping it over a string of rod-shaped bacteria, then vacuum-shrinking the germs.</p>\r\n\r\n<p>&quot;We took the earlier work and sort of flipped it over,&quot; Berry said. &quot;Instead of laying graphene on cells, we laid cells on graphene and studied graphene&#39;s atomic vibrations.&quot;</p>\r\n\r\n<p>Co-authors on the study are Bijentimala Keisham and Phong Nguyen of UIC chemical engineering and Arron Cole of UIC neurosurgery.</p>\r\n\r\n<p>Funding was provided by UIC.</p>\r\n\r\n<p>Article:&nbsp;<a href=\"http://pubs.acs.org/doi/abs/10.1021/acsami.6b12307\" target=\"_blank\">Cancer Cell Hyperactivity and Membrane Dipolarity Monitoring via Raman Mapping of Interfaced Graphene: Toward Non-Invasive Cancer Diagnostics</a>, Bijentimala Keisham, Arron Cole, Phong Nguyen, Ankit Mehta, and Vikas Berry,&nbsp;<em>ACS Applied Materials &amp; Interfaces</em>, doi: 10.1021/acsami.6b12307, published online 14 November 2016.</p>','2016-12-27 20:03:59',11,'admin','www.medicalnewstoday.com','ali2.jpg');
INSERT INTO `TRDNEWS` VALUES ('graphene1','Cancer / Oncology Biology / Biochemistry First use of graphene to detect cancer cells','<p>By interfacing brain cells onto graphene, researchers at the University of Illinois at Chicago have shown they can differentiate a single hyperactive cancerous cell from a normal cell, pointing the way to developing a simple, noninvasive tool for early&nbsp;<a href=\"http://www.medicalnewstoday.com/info/cancer-oncology/\">cancer</a>&nbsp;diagnosis.</p>\r\n\r\n<p>&quot;This graphene system is able to detect the level of activity of an interfaced cell,&quot; says Vikas Berry, associate professor and head of chemical engineering at UIC, who led the research along with Ankit Mehta, assistant professor of clinical neurosurgery in the UIC College of Medicine.</p>\r\n\r\n<p>&quot;Graphene is the thinnest known material and is very sensitive to whatever happens on its surface,&quot; Berry said. The nanomaterial is composed of a single layer of carbon atoms linked in a hexagonal chicken-wire pattern, and all the atoms share a cloud of electrons moving freely about the surface.</p>\r\n\r\n<p>&quot;The cell&#39;s interface with graphene rearranges the charge distribution in graphene, which modifies the energy of atomic vibration as detected by Raman spectroscopy,&quot; Berry said, referring to a powerful workhorse technique that is routinely used to study graphene.</p>\r\n\r\n<p>The atomic vibration energy in graphene&#39;s crystal lattice differs depending on whether it&#39;s in contact with a cancer cell or a normal cell, Berry said, because the cancer cell&#39;s hyperactivity leads to a higher negative charge on its surface and the release of more protons.</p>\r\n\r\n<p>&quot;The electric field around the cell pushes away electrons in graphene&#39;s electron cloud,&quot; he said, which changes the vibration energy of the carbon atoms. The change in vibration energy can be pinpointed by Raman mapping with a resolution of 300 nanometers, he said, allowing characterization of the activity of a single cell.</p>\r\n\r\n<p>The study, reported in the journal&nbsp;<em>ACS Applied Materials &amp; Interfaces</em>, looked at cultured human brain cells, comparing normal astrocytes to their cancerous counterpart, the highly malignant brain&nbsp;<a href=\"http://www.medicalnewstoday.com/articles/249141.php\">tumor</a>&nbsp;glioblastoma multiforme. The technique is now being studied in a mouse model of cancer, with results that are &quot;very promising,&quot; Berry said. Experiments with patient biopsies would be further down the road.</p>\r\n\r\n<p>&quot;Once a patient has brain tumor surgery, we could use this technique to see if the tumor relapses,&quot; Berry said. &quot;For this, we would need a cell sample we could interface with graphene and look to see if cancer cells are still present.&quot;</p>\r\n\r\n<p>The same technique may also work to differentiate between other types of cells or the activity of cells.</p>\r\n\r\n<p>&quot;We may be able to use it with bacteria to quickly see if the strain is Gram-positive or Gram-negative,&quot; Berry said. &quot;We may be able to use it to detect sickle cells.&quot;</p>\r\n\r\n<p>Earlier this year, Berry and other coworkers introduced nanoscale ripples in graphene, causing it to conduct differently in perpendicular directions, useful for electronics. They wrinkled the graphene by draping it over a string of rod-shaped bacteria, then vacuum-shrinking the germs.</p>\r\n\r\n<p>&quot;We took the earlier work and sort of flipped it over,&quot; Berry said. &quot;Instead of laying graphene on cells, we laid cells on graphene and studied graphene&#39;s atomic vibrations.&quot;</p>\r\n\r\n<p>Co-authors on the study are Bijentimala Keisham and Phong Nguyen of UIC chemical engineering and Arron Cole of UIC neurosurgery.</p>\r\n\r\n<p>Funding was provided by UIC.</p>\r\n\r\n<p>Article:&nbsp;<a href=\"http://pubs.acs.org/doi/abs/10.1021/acsami.6b12307\" target=\"_blank\">Cancer Cell Hyperactivity and Membrane Dipolarity Monitoring via Raman Mapping of Interfaced Graphene: Toward Non-Invasive Cancer Diagnostics</a>, Bijentimala Keisham, Arron Cole, Phong Nguyen, Ankit Mehta, and Vikas Berry,&nbsp;<em>ACS Applied Materials &amp; Interfaces</em>, doi: 10.1021/acsami.6b12307, published online 14 November 2016.</p>','2016-12-27 20:03:59',11,'admin','www.medicalnewstoday.com','ali2.jpg');
INSERT INTO `TRDNEWS` VALUES ('PROJECT','New project to help reduce unsafe abortion death rates in disaster zones','<p>New research led by Dr Nibedita S Ray-Bennett at the University of Leicester will look into the sexual and reproductive health issues in disaster-prone areas during times of humanitarian crisis.</p>\r\n\r\n<p>The project, supported by the International Planned Parenthood Federation&#39;s (IPPF) Innovation Programme, will explore the opportunities and challenges around reproductive health during disasters and emergencies in Bangladesh and Pakistan.</p>\r\n\r\n<p>The two year project will look at whether the pre-positioning of Reproductive Health Kit-8 prior to disasters such as flooding or cyclones has the potential to provide Post-abortion care (PAC) services to help reduce the morbidity and mortality associated with complications of unsafe abortions.</p>\r\n\r\n<p>The research is a joint venture with Dr Fauzia Akhter Huda from the icddrb, Bangladesh; Ms Rehana Salam from the Agha Khan University in Pakistan, International Planned Parenthood Federation&#39;s South Asia Region (IPPF-SAR), IPPF&#39;s SPRINT Initiative (Sexual and Reproductive Health Programme in Crisis and Post Crisis Situations) and IPPF SAR Member Associations in Pakistan and Bangladesh.</p>\r\n\r\n<p>The team will look specifically at Reproductive Health Kit 8 supplied by the United Nations Population Fund (UNPFA), which is used to treat the complications arising from miscarriage (spontaneous abortion) and from unsafe induced abortion, including&nbsp;<a href=\"http://www.medicalnewstoday.com/articles/305782.php\">sepsis</a>, incomplete evacuation and bleeding.</p>\r\n\r\n<p>The kits are complementary to the Interagency Emergency Health Kit - which is designed to meet the primary health care needs of displaced populations without medical facilities.</p>\r\n\r\n<p>The researchers will conduct the evaluation of the RH Kit-8 positioned by IPPF-SAR and IPPF-SAR Member Associations in Pakistan and Bangladesh which will help to reduce the number of women falling ill or dying as a result of a miscarriage (spontaneous abortion) or unsafe induced abortion, during their displacement.</p>\r\n\r\n<p>Dr Nibedita S Ray-Bennett, Lecturer in Risk Management from the University of Leicester&#39;s School of Management, said: &quot;We feel that the success of the Reproductive Health Kit 8 is likely to be influenced by its positioning in strategic locations and with strategic agents.</p>\r\n\r\n<p>&quot;We will establish this by reviewing IPPF-SAR Member Association&#39;s reproductive health data documented at branch levels, and by conducting a baseline survey in disaster-prone locations in Bangladesh, we shall develop an intervention protocol based on these findings which we will then implement in a &#39;disaster climate&#39; in Bangladesh as well as in a disaster-prone locale in Pakistan to test and validate the positioning of RH kit-8 in such situation.&quot;</p>\r\n\r\n<p>&quot;In a post-disaster phase, we will conduct end line surveys to identify reproductive health changes happened due to the positioning of RH kit-8 amongst our selected population.&quot;</p>\r\n\r\n<p>The overall objective of the research study is that the evidence gathered from this research will be used by governing bodies to inform policy and programmatic decisions for Post-abortion care (PAC) services and reproductive health issues in Bangladesh in a humanitarian crisis situation.</p>\r\n\r\n<p>Dr Ray-Bennett added: &quot;We will work closely with the consortium partners to disseminate our findings to promote communication and action amongst the target audience in the Government of Bangladesh and other relevant stakeholders.</p>\r\n\r\n<p>&quot;We will develop policy briefs for information dissemination in collaboration with Family Planning Associations in Bangladesh, Pakistan and IPPF-SAR and we will also aim to implement the &#39;proven intervention&#39; in 10 other countries where IPPF is present.&quot;</p>','2016-12-27 20:04:52',3,'admin','detik.com','ali5.jpg');
/*!40000 ALTER TABLE `TRDNEWS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TRDORDER`
--

DROP TABLE IF EXISTS `TRDORDER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TRDORDER` (
  `USER_ID` varchar(15) NOT NULL,
  `ORDER_ID` int(11) NOT NULL,
  `PROD_ID` varchar(10) NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `PRICE` int(11) NOT NULL,
  PRIMARY KEY (`USER_ID`,`ORDER_ID`,`PROD_ID`),
  KEY `PROD_ID` (`PROD_ID`),
  KEY `ORDER_ID` (`ORDER_ID`),
  CONSTRAINT `TRDORDER_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `MSTUSER` (`USER_ID`),
  CONSTRAINT `TRDORDER_ibfk_3` FOREIGN KEY (`PROD_ID`) REFERENCES `MSTPRODUCT` (`PROD_ID`),
  CONSTRAINT `TRDORDER_ibfk_4` FOREIGN KEY (`ORDER_ID`) REFERENCES `TRHORDER` (`ORDER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRDORDER`
--

LOCK TABLES `TRDORDER` WRITE;
/*!40000 ALTER TABLE `TRDORDER` DISABLE KEYS */;
INSERT INTO `TRDORDER` VALUES ('sxio',1,'STET1',1,500000);
INSERT INTO `TRDORDER` VALUES ('sxio',1,'STET2',2,600000);
INSERT INTO `TRDORDER` VALUES ('sxio',2,'STET2',2,600000);
/*!40000 ALTER TABLE `TRDORDER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TRDPURCHASING`
--

DROP TABLE IF EXISTS `TRDPURCHASING`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TRDPURCHASING` (
  `PURC_ID` varchar(10) NOT NULL,
  `SEQ_NO` int(2) NOT NULL,
  `PROD_ID` varchar(10) NOT NULL,
  `PURC_QTY` int(11) NOT NULL,
  `PURC_AMOUNT` int(11) NOT NULL,
  `USER_NAME` varchar(15) NOT NULL,
  `USER_DT` datetime NOT NULL,
  PRIMARY KEY (`PURC_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRDPURCHASING`
--

LOCK TABLES `TRDPURCHASING` WRITE;
/*!40000 ALTER TABLE `TRDPURCHASING` DISABLE KEYS */;
/*!40000 ALTER TABLE `TRDPURCHASING` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TRDSALES`
--

DROP TABLE IF EXISTS `TRDSALES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TRDSALES` (
  `SALES_ID` varchar(10) NOT NULL,
  `SEQ_NO` int(2) NOT NULL,
  `PROD_ID` varchar(10) NOT NULL,
  `SALES_QTY` int(11) NOT NULL,
  `USER_NAME` varchar(15) NOT NULL,
  `USER_DT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRDSALES`
--

LOCK TABLES `TRDSALES` WRITE;
/*!40000 ALTER TABLE `TRDSALES` DISABLE KEYS */;
/*!40000 ALTER TABLE `TRDSALES` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TRHBOOKING`
--

DROP TABLE IF EXISTS `TRHBOOKING`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TRHBOOKING` (
  `BOOKING_ID` varchar(10) NOT NULL,
  `BOOKING_DT` date NOT NULL,
  `OTHER_PAYMENT` int(11) NOT NULL,
  `TOTAL_PAYMENT` int(11) NOT NULL,
  `USER_ID` varchar(10) NOT NULL,
  `USER_NAME` varchar(15) NOT NULL,
  `USER_DT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRHBOOKING`
--

LOCK TABLES `TRHBOOKING` WRITE;
/*!40000 ALTER TABLE `TRHBOOKING` DISABLE KEYS */;
INSERT INTO `TRHBOOKING` VALUES ('BO1312001','2016-12-13',100000,10000000,'MEIKELWIS','MEIKELWIS','2016-12-13');
INSERT INTO `TRHBOOKING` VALUES ('BO1312002','2016-12-12',200000,3000000,'MEIKELWIS','MEIKELWIS','2016-12-13');
/*!40000 ALTER TABLE `TRHBOOKING` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TRHCHATTING`
--

DROP TABLE IF EXISTS `TRHCHATTING`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TRHCHATTING` (
  `CHAT_ID` varchar(10) NOT NULL,
  `CHAT_NAME` varchar(30) NOT NULL,
  `CHAT_DT` date NOT NULL,
  PRIMARY KEY (`CHAT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRHCHATTING`
--

LOCK TABLES `TRHCHATTING` WRITE;
/*!40000 ALTER TABLE `TRHCHATTING` DISABLE KEYS */;
/*!40000 ALTER TABLE `TRHCHATTING` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TRHFORUM`
--

DROP TABLE IF EXISTS `TRHFORUM`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TRHFORUM` (
  `FORUM_ID` int(10) NOT NULL AUTO_INCREMENT,
  `FORUM_TITLE` varchar(150) NOT NULL,
  `FORUM_CAT` int(10) NOT NULL,
  `FORUM_CONTENT` text NOT NULL,
  `USER_ID` varchar(15) NOT NULL,
  `USER_DT` datetime NOT NULL,
  PRIMARY KEY (`FORUM_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRHFORUM`
--

LOCK TABLES `TRHFORUM` WRITE;
/*!40000 ALTER TABLE `TRHFORUM` DISABLE KEYS */;
INSERT INTO `TRHFORUM` VALUES (39,'Isi Forum',23,'Isi Title','sxioo','2017-01-07 14:41:26');
/*!40000 ALTER TABLE `TRHFORUM` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TRHGRADING`
--

DROP TABLE IF EXISTS `TRHGRADING`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TRHGRADING` (
  `GRADE_ID` varchar(10) NOT NULL,
  `GRADE_DT` date NOT NULL,
  `DCT_ID` varchar(10) NOT NULL,
  `TOTAL_GRADING` int(11) NOT NULL,
  `USER_ID` varchar(10) NOT NULL,
  `USER_NAME` varchar(15) NOT NULL,
  `USER_DT` datetime NOT NULL,
  PRIMARY KEY (`GRADE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRHGRADING`
--

LOCK TABLES `TRHGRADING` WRITE;
/*!40000 ALTER TABLE `TRHGRADING` DISABLE KEYS */;
/*!40000 ALTER TABLE `TRHGRADING` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TRHORDER`
--

DROP TABLE IF EXISTS `TRHORDER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TRHORDER` (
  `ORDER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ID` varchar(15) NOT NULL,
  `ORDER_ADDRESS` varchar(50) NOT NULL,
  `BANK_TYPE` varchar(30) NOT NULL,
  `BANK_ACC_NUM` varchar(20) NOT NULL,
  `BANK_ACC_NAME` varchar(20) NOT NULL,
  `TRANSFER_DATE` date NOT NULL,
  `TRANSPORT` varchar(10) NOT NULL,
  `TRANSPORT_FEE` int(11) NOT NULL,
  `ORDER_DATE` datetime NOT NULL,
  `STATUS` varchar(10) NOT NULL,
  PRIMARY KEY (`ORDER_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRHORDER`
--

LOCK TABLES `TRHORDER` WRITE;
/*!40000 ALTER TABLE `TRHORDER` DISABLE KEYS */;
INSERT INTO `TRHORDER` VALUES (1,'sxio','Jalan Sembarang tes 4','BCA','123','Stephen','2017-01-05','TIKI',0,'2017-01-01 21:01:06','ONTHEWAY');
INSERT INTO `TRHORDER` VALUES (2,'sxio','Jalan Sembarang tes 5','BRI','456','456','2017-01-01','JNE',0,'2017-01-01 21:37:39','ACCEPTED');
/*!40000 ALTER TABLE `TRHORDER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TRHPURCHASING`
--

DROP TABLE IF EXISTS `TRHPURCHASING`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TRHPURCHASING` (
  `PURC_ID` varchar(10) NOT NULL,
  `PURCH_DT` date NOT NULL,
  `SUPP_ID` varchar(10) NOT NULL,
  `TOTAL_PURC` int(11) NOT NULL,
  `USER_ID` varchar(10) NOT NULL,
  `USER_NAME` varchar(15) NOT NULL,
  `USER_DT` datetime NOT NULL,
  PRIMARY KEY (`PURC_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRHPURCHASING`
--

LOCK TABLES `TRHPURCHASING` WRITE;
/*!40000 ALTER TABLE `TRHPURCHASING` DISABLE KEYS */;
/*!40000 ALTER TABLE `TRHPURCHASING` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TRHSALES`
--

DROP TABLE IF EXISTS `TRHSALES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TRHSALES` (
  `SALES_ID` varchar(10) NOT NULL,
  `SALES_DT` date NOT NULL,
  `CUST_ID` varchar(10) NOT NULL,
  `TOTAL_SALES` int(11) NOT NULL,
  `USER_ID` varchar(10) NOT NULL,
  `USER_NAME` int(11) NOT NULL,
  `USER_DT` datetime NOT NULL,
  PRIMARY KEY (`SALES_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRHSALES`
--

LOCK TABLES `TRHSALES` WRITE;
/*!40000 ALTER TABLE `TRHSALES` DISABLE KEYS */;
/*!40000 ALTER TABLE `TRHSALES` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-07 14:42:36
