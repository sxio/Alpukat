-- MySQL dump 10.16  Distrib 10.1.16-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: AVOCADODB
-- ------------------------------------------------------
-- Server version	10.1.16-MariaDB

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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
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
INSERT INTO `MSDCATEGORY` VALUES (27,4,'Kanker','','');
INSERT INTO `MSDCATEGORY` VALUES (28,4,'Bedah','','');
INSERT INTO `MSDCATEGORY` VALUES (29,4,'Saraf','','');
INSERT INTO `MSDCATEGORY` VALUES (30,4,'Kandungan','','');
INSERT INTO `MSDCATEGORY` VALUES (31,4,'Psikiater','','');
INSERT INTO `MSDCATEGORY` VALUES (32,4,'THT','','');
INSERT INTO `MSDCATEGORY` VALUES (33,4,'Mata','','');
INSERT INTO `MSDCATEGORY` VALUES (34,4,'Gigi','','');
INSERT INTO `MSDCATEGORY` VALUES (35,1,'tes','','');
INSERT INTO `MSDCATEGORY` VALUES (36,2,'tesss','','');
/*!40000 ALTER TABLE `MSDCATEGORY` ENABLE KEYS */;
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
  `DCT_SPECIALTY` int(11) NOT NULL,
  `DCT_CERTIFICATE` text NOT NULL,
  `CONSULT_FEE` int(11) NOT NULL,
  `BOOKING_FEE` int(11) NOT NULL,
  `IMG_CERTIFICATE` varchar(50) NOT NULL,
  `IMG_LICENSE` varchar(50) NOT NULL,
  `IMG_REGISTRATION` varchar(50) NOT NULL,
  `IMG_LOC` varchar(50) NOT NULL,
  PRIMARY KEY (`DCT_ID`),
  CONSTRAINT `MSHDOCTOR_ibfk_1` FOREIGN KEY (`DCT_ID`) REFERENCES `MSTUSER` (`USER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSHDOCTOR`
--

LOCK TABLES `MSHDOCTOR` WRITE;
/*!40000 ALTER TABLE `MSHDOCTOR` DISABLE KEYS */;
INSERT INTO `MSHDOCTOR` VALUES ('meikelwis',';;;;;','','',0,'',50000,100000,'meikelwis_cc.jpg','meikelwis_pl.jpg','meikelwis_pr.jpg','Array_dummy_data.jpg');
INSERT INTO `MSHDOCTOR` VALUES ('mikroskil','m;m;m;m;m;m','afrika','10 thn',27,'123456',70000,125000,'mikroskil_cc.jpg','mikroskil_pl.jpg','mikroskil_pr.jpg','mikroskil_loc.jpg');
INSERT INTO `MSHDOCTOR` VALUES ('stephen',';;;;;','','',0,'',50000,100000,'stephen_cc.jpg','stephen_pl.jpg','stephen_pr.jpg','stephen_dummy_data.jpg');
INSERT INTO `MSHDOCTOR` VALUES ('sxioo','m1;m2;m3;m4;m5;m6','Lorem','10 thn',31,'bedah-bedah',50000,100000,'sxioo_cc.jpg','sxioo_pl.jpg','sxioo_pr.jpg','sxioo_loc.jpg');
/*!40000 ALTER TABLE `MSHDOCTOR` ENABLE KEYS */;
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
-- Table structure for table `MSTDCTCOMMENT`
--

DROP TABLE IF EXISTS `MSTDCTCOMMENT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSTDCTCOMMENT` (
  `DCT_ID` varchar(15) NOT NULL,
  `COMMENT_ID` varchar(20) NOT NULL,
  `COMMENT_CONTENT` text NOT NULL,
  `USER_ID` varchar(15) NOT NULL,
  `USER_DT` datetime NOT NULL,
  PRIMARY KEY (`COMMENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSTDCTCOMMENT`
--

LOCK TABLES `MSTDCTCOMMENT` WRITE;
/*!40000 ALTER TABLE `MSTDCTCOMMENT` DISABLE KEYS */;
INSERT INTO `MSTDCTCOMMENT` VALUES ('sxioo','DC-20170111-002','asdkjasd','sxio','2017-01-11 18:47:24');
INSERT INTO `MSTDCTCOMMENT` VALUES ('sxioo','DC-20170111-003','ini adalah comment','sxio','2017-01-11 18:57:51');
INSERT INTO `MSTDCTCOMMENT` VALUES ('sxioo','DC-20170112-004','asdf','sxio','2017-01-12 04:42:23');
INSERT INTO `MSTDCTCOMMENT` VALUES ('sxioo','DC-20170112-005','l;askdfj','sxio','2017-01-12 10:44:31');
INSERT INTO `MSTDCTCOMMENT` VALUES ('sxioo','DC-20170112-006','ini comment','sxio','2017-01-12 20:00:28');
/*!40000 ALTER TABLE `MSTDCTCOMMENT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MSTDONATE`
--

DROP TABLE IF EXISTS `MSTDONATE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSTDONATE` (
  `DONATE_ID` varchar(20) NOT NULL,
  `USER_ID` varchar(15) NOT NULL,
  `BANK_TYPE` varchar(15) DEFAULT NULL,
  `BANK_ACC_NUM` varchar(15) DEFAULT NULL,
  `BACK_ACC_NAME` varchar(15) DEFAULT NULL,
  `AMOUNT` int(11) NOT NULL,
  `DONOR_NAME` varchar(50) DEFAULT NULL,
  `TRANSFER_DATE` date DEFAULT NULL,
  PRIMARY KEY (`DONATE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSTDONATE`
--

LOCK TABLES `MSTDONATE` WRITE;
/*!40000 ALTER TABLE `MSTDONATE` DISABLE KEYS */;
INSERT INTO `MSTDONATE` VALUES ('DO-20170112-008','sxio','BNI','123','123',10000,'Osas','2017-01-12');
INSERT INTO `MSTDONATE` VALUES ('DO-20170112-009','sxio','BRI','007','Ossasssssssssss',60000,'Temen Osas','2017-01-12');
/*!40000 ALTER TABLE `MSTDONATE` ENABLE KEYS */;
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
INSERT INTO `MSTPRODUCT` VALUES ('anti001','Antibiotic 1',16,50,50000,'<p>Anntibiotic 1</p>','antibiotic1.jpg','2017-01-08 14:41:01','2017-01-08 14:55:07');
INSERT INTO `MSTPRODUCT` VALUES ('baby001','Baby Care 1',18,50,50000,'<p>Baby 1</p>','900.jpg','2017-01-08 14:42:00','2017-01-08 14:55:12');
INSERT INTO `MSTPRODUCT` VALUES ('eye001','Glasses minus',21,50,300000,'<p>Glasses 1</p>','glasses.jpg','2017-01-08 14:44:32','2017-01-08 14:55:18');
INSERT INTO `MSTPRODUCT` VALUES ('sport001','TreadMill super',19,50,1000000,'<p>Treadmill 1</p>','treadmill.jpg','2017-01-08 14:47:12','2017-01-08 14:55:23');
INSERT INTO `MSTPRODUCT` VALUES ('stet001','Stethoscope Blue',15,50,400000,'<p>Stethoscope 1</p>','stet.jpg','2017-01-08 14:48:37','2017-01-08 14:55:26');
INSERT INTO `MSTPRODUCT` VALUES ('vita001','Vitacimin Yellow',20,50,300000,'<p>Vitacimin 1</p>','vitacimin.jpg','2017-01-08 14:51:28','2017-01-08 14:55:28');
/*!40000 ALTER TABLE `MSTPRODUCT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MSTRATING`
--

DROP TABLE IF EXISTS `MSTRATING`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSTRATING` (
  `RATING_ID` varchar(15) NOT NULL,
  `BOOKING_ID` varchar(20) NOT NULL,
  `USER_ID` varchar(15) NOT NULL,
  `DOCTOR_ID` varchar(15) NOT NULL,
  `FRIENDLINESS` int(11) DEFAULT NULL,
  `EXPERTISE` int(11) DEFAULT NULL,
  `ON_TIME` int(11) DEFAULT NULL,
  `PROFESSIONALISM` int(11) DEFAULT NULL,
  PRIMARY KEY (`RATING_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSTRATING`
--

LOCK TABLES `MSTRATING` WRITE;
/*!40000 ALTER TABLE `MSTRATING` DISABLE KEYS */;
INSERT INTO `MSTRATING` VALUES ('RT-20170113-007','BO-20170113-026','sxio','sxioo',9,8,10,7);
INSERT INTO `MSTRATING` VALUES ('RT-20170113-008','BO-20170113-025','sxio','sxioo',7,2,6,2);
INSERT INTO `MSTRATING` VALUES ('RT-20170113-009','BO-20170113-028','sxio','stephen',8,7,4,5);
INSERT INTO `MSTRATING` VALUES ('RT-20170114-012','BO-20170114-029','sxio','mikroskil',6,4,6,10);
/*!40000 ALTER TABLE `MSTRATING` ENABLE KEYS */;
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
INSERT INTO `MSTREMINDER` VALUES ('sxio','2017-01-12 17:20:00','Presentasi PKTI Coding');
/*!40000 ALTER TABLE `MSTREMINDER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MSTSEQUENCES`
--

DROP TABLE IF EXISTS `MSTSEQUENCES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MSTSEQUENCES` (
  `SEQ_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SEQ_NAME` varchar(30) NOT NULL,
  `SEQ_VALUE` int(11) NOT NULL,
  PRIMARY KEY (`SEQ_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MSTSEQUENCES`
--

LOCK TABLES `MSTSEQUENCES` WRITE;
/*!40000 ALTER TABLE `MSTSEQUENCES` DISABLE KEYS */;
INSERT INTO `MSTSEQUENCES` VALUES (1,'Estore_Pembelian',8);
INSERT INTO `MSTSEQUENCES` VALUES (2,'Forum',24);
INSERT INTO `MSTSEQUENCES` VALUES (3,'Forum_detail',30);
INSERT INTO `MSTSEQUENCES` VALUES (4,'Booking',30);
INSERT INTO `MSTSEQUENCES` VALUES (5,'Doctor Comment',7);
INSERT INTO `MSTSEQUENCES` VALUES (6,'Donation',10);
INSERT INTO `MSTSEQUENCES` VALUES (7,'Rating',13);
/*!40000 ALTER TABLE `MSTSEQUENCES` ENABLE KEYS */;
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
  `EMAIL` varchar(100) NOT NULL,
  `HANDPHONE` char(15) NOT NULL,
  `USER_ADDRESS` varchar(150) NOT NULL,
  `USER_IMG` varchar(100) NOT NULL,
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
INSERT INTO `MSTUSER` VALUES ('admin','Stephen','5f4dcc3b5aa765d61d8327deb882cf99','1996-06-08','chronolegionaire@yahoo.com','123','','noimage.png',0,1);
INSERT INTO `MSTUSER` VALUES ('Bahamut','Kenedy','96e79218965eb72c92a549dd5a330112','2017-01-11','141110043@students.mikroskil.a','081234567890','jalan','noimage.png',2,0);
INSERT INTO `MSTUSER` VALUES ('meikelwis','meikelwis','513231e44fe39f5ca7bf664ec591276c','2017-01-08','meikelwis.wijaya@gmail.com','21323123123213','Alamat','noimage.png',2,1);
INSERT INTO `MSTUSER` VALUES ('mikroskil','mikroskil','5f4dcc3b5aa765d61d8327deb882cf99','2017-12-31','141110868@students.mikroskil.ac.id','1687468','Afrika','noimage.png',2,1);
INSERT INTO `MSTUSER` VALUES ('stephen','stephen','5f4dcc3b5aa765d61d8327deb882cf99','2017-12-31','chronolegionaire1996@gmail.com','123','asd','noimage.png',2,1);
INSERT INTO `MSTUSER` VALUES ('sxio','Osas','5f4dcc3b5aa765d61d8327deb882cf99','1996-06-03','chronolegionaire@yahoo.com','11111','Afrika','sxio_photo.png',1,1);
INSERT INTO `MSTUSER` VALUES ('sxioo','dr Osas','5f4dcc3b5aa765d61d8327deb882cf99','1996-06-08','stephen.huang96@gmail.com','1111','kl','sxioo_photo.jpg',2,1);
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
-- Table structure for table `TMPDETAIL`
--

DROP TABLE IF EXISTS `TMPDETAIL`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TMPDETAIL` (
  `ID` varchar(20) NOT NULL,
  `DT` datetime NOT NULL,
  `VALUE1` int(11) NOT NULL,
  `VALUE2` int(11) NOT NULL,
  `VALUE3` int(11) NOT NULL,
  `VALUE4` varchar(10) NOT NULL,
  `VALUE5` varchar(15) NOT NULL,
  `VALUE6` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TMPDETAIL`
--

LOCK TABLES `TMPDETAIL` WRITE;
/*!40000 ALTER TABLE `TMPDETAIL` DISABLE KEYS */;
/*!40000 ALTER TABLE `TMPDETAIL` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TMPHEADER`
--

DROP TABLE IF EXISTS `TMPHEADER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TMPHEADER` (
  `ID` varchar(20) NOT NULL,
  `DT` datetime NOT NULL,
  `VALUE2` int(11) NOT NULL,
  `VALUE3` varchar(10) NOT NULL,
  `VALUE4` varchar(15) NOT NULL,
  `VALUE5` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TMPHEADER`
--

LOCK TABLES `TMPHEADER` WRITE;
/*!40000 ALTER TABLE `TMPHEADER` DISABLE KEYS */;
INSERT INTO `TMPHEADER` VALUES ('BO-20170110-010','2017-01-10 00:00:00',0,'sxioo','','2017-01-10 22:26:04');
INSERT INTO `TMPHEADER` VALUES ('BO-20170110-011','2017-01-10 00:00:00',0,'sxioo','','2017-01-10 22:28:50');
INSERT INTO `TMPHEADER` VALUES ('BO-20170110-012','2017-01-10 00:00:00',0,'sxioo','','2017-01-10 22:30:26');
INSERT INTO `TMPHEADER` VALUES ('BO-20170110-013','2017-01-10 00:00:00',0,'sxioo','','2017-01-10 22:32:07');
INSERT INTO `TMPHEADER` VALUES ('BO-20170110-014','2017-01-10 00:00:00',0,'sxioo','','2017-01-10 22:39:40');
INSERT INTO `TMPHEADER` VALUES ('BO-20170110-015','2017-01-10 00:00:00',0,'sxioo','','2017-01-10 22:40:21');
INSERT INTO `TMPHEADER` VALUES ('BO-20170110-016','2017-01-10 00:00:00',0,'sxioo','','2017-01-10 22:53:46');
INSERT INTO `TMPHEADER` VALUES ('BO-20170110-017','2017-01-10 00:00:00',0,'sxioo','','2017-01-10 22:58:59');
INSERT INTO `TMPHEADER` VALUES ('BO-20170110-018','0000-00-00 00:00:00',0,'sxioo','','2017-01-10 23:33:21');
INSERT INTO `TMPHEADER` VALUES ('BO-20170111-019','2017-01-11 00:00:00',0,'sxio','','2017-01-11 13:25:31');
/*!40000 ALTER TABLE `TMPHEADER` ENABLE KEYS */;
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
  `BOOKING_ID` varchar(20) NOT NULL,
  `BOOKING_DT` date NOT NULL,
  `DCT_ID` varchar(10) NOT NULL,
  `SERV_ID` varchar(100) NOT NULL,
  `BOOK_COUNT` int(11) NOT NULL,
  `TOTAL_AMOUNT` int(11) NOT NULL,
  `USER_ID` varchar(10) NOT NULL,
  `USER_DT` datetime NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  PRIMARY KEY (`BOOKING_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRDBOOKING`
--

LOCK TABLES `TRDBOOKING` WRITE;
/*!40000 ALTER TABLE `TRDBOOKING` DISABLE KEYS */;
INSERT INTO `TRDBOOKING` VALUES ('BO-20170113-025','2017-01-13','sxioo','Konsultasi',1,50000,'sxio','2017-01-13 16:45:15','DONE');
INSERT INTO `TRDBOOKING` VALUES ('BO-20170113-026','2017-01-13','sxioo','Konsul',1,50000,'sxio','2017-01-13 16:49:24','DONE');
INSERT INTO `TRDBOOKING` VALUES ('BO-20170113-027','2017-01-13','sxioo','konsulllll',1,50000,'sxio','2017-01-13 16:49:29','REJECTED');
INSERT INTO `TRDBOOKING` VALUES ('BO-20170113-028','2017-01-13','stephen','k',2,50000,'sxio','2017-01-13 21:33:51','DONE');
INSERT INTO `TRDBOOKING` VALUES ('BO-20170114-029','2017-01-14','mikroskil','Konsultasi',1,70000,'sxio','2017-01-14 13:20:00','DONE');
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
-- Table structure for table `TRDFORUM`
--

DROP TABLE IF EXISTS `TRDFORUM`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TRDFORUM` (
  `PARENT_ID` varchar(20) NOT NULL,
  `DETAIL_ID` varchar(20) NOT NULL,
  `USER_ID` varchar(15) NOT NULL,
  `USER_DT` datetime NOT NULL,
  `FORUM_CONTENT` text NOT NULL,
  PRIMARY KEY (`PARENT_ID`,`DETAIL_ID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRDFORUM`
--

LOCK TABLES `TRDFORUM` WRITE;
/*!40000 ALTER TABLE `TRDFORUM` DISABLE KEYS */;
INSERT INTO `TRDFORUM` VALUES ('FRD-20170111-021','FRD-20170111-023','sxio','2017-01-11 17:14:28','<p>asd</p>\r\n');
INSERT INTO `TRDFORUM` VALUES ('FRD-20170111-021','FRD-20170112-027','sxio','2017-01-12 20:02:15','<p>balas di presentasi</p>\r\n');
INSERT INTO `TRDFORUM` VALUES ('FRD-20170111-022','FRD-20170111-025','sxio','2017-01-11 22:19:16','<p>tes db</p>\r\n');
INSERT INTO `TRDFORUM` VALUES ('FRD-20170111-023','FRD-20170112-028','sxio','2017-01-12 20:02:24','<p>ini adalah balas</p>\r\n');
INSERT INTO `TRDFORUM` VALUES ('FRD-20170111-024','FRD-20170112-029','sxio','2017-01-12 20:02:41','<p><em><strong>ini juga reply</strong></em></p>\r\n');
INSERT INTO `TRDFORUM` VALUES ('FRM-20170111-012','FRD-20170111-021','sxioo','2017-01-11 15:34:42','<p>balas</p>\r\n');
INSERT INTO `TRDFORUM` VALUES ('FRM-20170111-012','FRD-20170111-024','sxio','2017-01-11 17:14:37','<p>balas 2</p>\r\n');
INSERT INTO `TRDFORUM` VALUES ('FRM-20170111-013','FRD-20170111-022','sxio','2017-01-11 15:35:23','<p>asdf</p>\r\n');
INSERT INTO `TRDFORUM` VALUES ('FRM-20170111-013','FRD-20170112-026','sxio','2017-01-12 19:51:42','<p>Bla</p>\r\n');
/*!40000 ALTER TABLE `TRDFORUM` ENABLE KEYS */;
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
INSERT INTO `TRDNEWS` VALUES ('asma','ini juga gk tw mw tulis apa','<p>African Americans may be less responsive to&nbsp;<a href=\"http://www.medicalnewstoday.com/info/asthma/\">asthma</a>&nbsp;treatment and more likely to die from the condition, in part, because they have a unique type of airway&nbsp;<a href=\"http://www.medicalnewstoday.com/articles/248423.php\">inflammation</a>, according to a study led by researchers at the University of Illinois at Chicago College of Medicine.</p>\r\n\r\n<p>Airway inflammation is a key component of asthma, and innovations in treatment are becoming more personalized based on the specific type of airway inflammation in a patient, says Dr. Sharmilee Nyenhuis, assistant professor of medicine at UIC and corresponding author on the study.</p>\r\n\r\n<p>&quot;Emerging evidence suggests that differences in airway inflammation can affect a patient&#39;s response to treatment, but whether the patterns of airway inflammation vary across race has, until now, been very unclear,&quot; said Nyenhuis, of UIC&#39;s division of pulmonary, critical care, sleep and allergy.</p>\r\n\r\n<p>Black men and women are two to three times more likely than whites to be hospitalized or die from asthma. And while many factors contribute to the burden of asthma in African Americans - such as access to health care and environmental exposures - rates are disproportionate even when social and environmental elements are taken into account.</p>\r\n\r\n<p>Nyenhuis and her colleagues performed a secondary analysis of more than 1,000 sputum samples obtained from AsthmaNet, a nationwide clinical research network created by the National Heart Lung and Blood Institute, and the Asthma Clinical Research Network. Samples of the coughed-up fluids were from past clinical trial participants over the age of 12 with mild or moderate persistent asthma and who had not smoked within the last year. The samples were tested for the presence of eosinophils - a type of white blood cell.</p>\r\n\r\n<p>The study is one of the largest and most diverse trials conducted in the U.S. on race and asthma, with 26 percent of the patients self-identifying as African American. Researchers found that black patients were more likely to exhibit eosinophilic airway inflammation than whites, despite taking comparable doses of asthma medication, such as inhaled corticosteroids.</p>\r\n\r\n<p>The results are published in the&nbsp;<em>Journal of Allergy and Clinical Immunology</em>.</p>\r\n\r\n<p>&quot;Our findings of higher numbers of African Americans with this type of airway inflammatory pattern suggests a mechanism that may account for more severe and difficult to control asthma in African Americans,&quot; said Nyenhuis. &quot;It follows that the persistence of eosinophilic airway inflammation in African Americans may be associated with asthma exacerbations and an impaired response to corticosteroids.&quot;</p>\r\n\r\n<p>The findings suggest that black patients with eosinophilic airway inflammation may not benefit from increasingly strong corticosteroid treatment - instead, other targeted therapies may need to be considered and researched as a treatment option for those black patients with difficult to control eosinophilic asthma.</p>\r\n\r\n<p>This research was supported by the National Heart, Lung and Blood Institute, one of the National Institutes of Health (Grant Nos. U10 HL098096, U10 HL074225, U10 HLA074227, U10 HLA074231, U10 HLA074204, U10 HLA074212, U10 HLA074073, U10 HLA074206, U10 HLA074208, U10 HLA074218, R21 HL118588); the American Academy of Allergy, Asthma &amp; Immunology/Association of Specialty Professors; the UIC Center for Clinical and Translational Science (Award No. KL2RR029878); and the National Center for Advancing Translational Sciences (Grant No. UL1TR000050).</p>\r\n\r\n<p>Article:&nbsp;<a href=\"http://www.jacionline.org/article/S0091-6749(16)31381-1/abstract\" target=\"_blank\">Race is associated with differences in airway inflammation in patients with asthma</a>, Sharmilee M. Nyenhuis, MD et al.,&nbsp;<em>Journal of Allergy and Clinical Immunology</em>, doi: 10.1016/j.jaci.2016.10.024, published online 6 January 2017.</p>\r\n\r\n<p>&nbsp;</p>','2017-01-14 13:14:38',10,'admin','medicalnews.com','5464034928882.jpg');
INSERT INTO `TRDNEWS` VALUES ('deslexia1','Dyslexics show a difference in sensory processing','<p>Neuroscientists at MIT and Boston University have discovered that a basic mechanism underlying sensory perception is deficient in individuals with&nbsp;<a href=\"http://www.medicalnewstoday.com/articles/186787.php\">dyslexia</a>, according to study published in&nbsp;<em>Neuron</em>. The brain typically adapts rapidly to sensory input, such as the sound of a person&#39;s voice or images of faces and objects, as a way to make processing more efficient. But for individuals with dyslexia, the researchers found that adaptation was on average about half that of those without the disorder.</p>\r\n\r\n<p>The difference may explain some of the challenges people with dyslexia experience, such as discerning speech in a noisy environment and learning to read. &quot;Adaptation is something the brain does to help make hard tasks easier,&quot; says first author Tyler Perrachione, assistant professor of Speech, Language and Hearing Sciences at Boston University, who completed this research as a graduate student and post-doctoral fellow at MIT. &quot;Dyslexics are not getting this advantage.&quot;</p>\r\n\r\n<p>Perrachione, who has a background in linguistics, wanted to investigate the theory that reading difficulties in dyslexia come from difficulties in associating sounds with written words. Working in the lab of lead investigator John Gabrieli, professor of Brain and Cognitive Science at MIT, he decided to investigate early, fundamental processes in the brain that could make this association difficult. &quot;Part of the mystery of dyslexia is that the brain doesn&#39;t have an area that evolved for reading,&quot; says Gabrieli.</p>\r\n\r\n<p>They zoomed in on the process of rapid neural adaptation. The researchers used functional magnetic resonance imaging (fMRI) to examine the brains of adults with and without dyslexia as they listened to voices. In some cases, the same voice spoke a series of words; in others, different voices spoke each word.</p>\r\n\r\n<p>Brains typically adapt to a single, consistent voice within a second or two, but they don&#39;t adapt to many different voices. As brains adapt, the fMRI measures of brain activity in relevant brain areas drop.</p>\r\n\r\n<p>Individuals without dyslexia adapted to a consistent voice and not to multiple voices. But for dyslexics, brain activity remained high in both cases, suggesting that they did not adapt as much. Dyslexics with better reading skills showed greater adaptation levels. &quot;Brains typically tune in and figure out what is consistent about a voice,&quot; says Perrachione. &quot;We saw much less adaptation in those with dyslexia group compared to typical readers.&quot;</p>\r\n\r\n<p>These results raised questions, since difficulty understanding speech is not seen in dyslexia. &quot;If you were to talk to someone on the street, you&#39;d have no idea if they were dyslexic or not,&quot; says Perrachione.</p>\r\n\r\n<p>So Perrachione and Gabrieli decided to look at adaption to visual stimuli, too. They recruited another group of individuals with and without dyslexia and examined adaptation to images of written words, faces, and objects, either in a series of different images or repeated images. Again they saw much less adaptation in participants with dyslexia.</p>\r\n\r\n<p>The reduced adaptation was observed in the regions of the brain responsible for processing the stimuli in question. &quot;This suggests that adaptation deficits in dyslexia are general, across the whole brain,&quot; says Perrachione.</p>\r\n\r\n<p>They repeated this experiment with yet another group of individuals, this time focusing on children aged 6 to 9 with and without dyslexia. The results were the same. Overall, the study involved over 150 individuals, and dyslexics on average had adaptation levels about half those of typical readers. &quot;I am surprised by the magnitude of the difference,&quot; says Perrachione. &quot;In people without dyslexia, we always see adaptation, but in the dyslexics, the lack of adaptation was often really pronounced.&quot;</p>\r\n\r\n<p>Perrachione and Gabrieli speculate that dyslexics don&#39;t struggle with processing of heard speech or seen objects and faces because human brains evolved to process these inputs. The systems that perform this processing are likely very robust. &quot;The brain devotes a lot of infrastructure to solving these problems, and has multiple routes,&quot; says Perrachione. &quot;Adaptation is just one of the things that helps take the load off.&quot;</p>\r\n\r\n<p>But reading is a different story. It is a learned skill that requires multiple regions of the brain to work together, potentially with the harmony and complexity of a Rube Goldberg machine, says Perrachione. As rapid neural adaptation deficits simultaneously affect auditory and visual processing during reading, they may compound to make reading very difficult. &quot;We have to see letters, map them onto words, map those to sounds, and connect them to semantics,&quot; says Perrachione. &quot;There are lots of places for things to go wrong.&quot;</p>\r\n\r\n<p>It isn&#39;t known yet exactly where things do go wrong as a result of deficits in rapid neural adaptation. &quot;This study presents strong evidence for a foundational brain difference in dyslexia, but it isn&#39;t clear how to bridge that to the specific properties of reading,&quot; says Gabrieli. &quot;It opens up as many questions as it answers.&quot;</p>\r\n\r\n<p>This research was supported by the Ellison Medical Foundation and the National Institutes of Health.</p>\r\n\r\n<p>Article:&nbsp;<a href=\"http://www.cell.com/neuron/fulltext/S0896-6273(16)30858-3\" target=\"_blank\">Dysfunction of Rapid Neural Adaptation in Dyslexia</a>, Perrachione, et al.,&nbsp;<em>Neuron</em>, doi: 10.1016/j.neuron.2016.11.020, published 21 December 2016.</p>','2016-12-27 20:04:14',13,'admin','Kompas.com','ali4.jpg');
INSERT INTO `TRDNEWS` VALUES ('graphene','Cancer / Oncology Biology / Biochemistry First use of graphene to detect cancer cells','<p>By interfacing brain cells onto graphene, researchers at the University of Illinois at Chicago have shown they can differentiate a single hyperactive cancerous cell from a normal cell, pointing the way to developing a simple, noninvasive tool for early&nbsp;<a href=\"http://www.medicalnewstoday.com/info/cancer-oncology/\">cancer</a>&nbsp;diagnosis.</p>\r\n\r\n<p>&quot;This graphene system is able to detect the level of activity of an interfaced cell,&quot; says Vikas Berry, associate professor and head of chemical engineering at UIC, who led the research along with Ankit Mehta, assistant professor of clinical neurosurgery in the UIC College of Medicine.</p>\r\n\r\n<p>&quot;Graphene is the thinnest known material and is very sensitive to whatever happens on its surface,&quot; Berry said. The nanomaterial is composed of a single layer of carbon atoms linked in a hexagonal chicken-wire pattern, and all the atoms share a cloud of electrons moving freely about the surface.</p>\r\n\r\n<p>&quot;The cell&#39;s interface with graphene rearranges the charge distribution in graphene, which modifies the energy of atomic vibration as detected by Raman spectroscopy,&quot; Berry said, referring to a powerful workhorse technique that is routinely used to study graphene.</p>\r\n\r\n<p>The atomic vibration energy in graphene&#39;s crystal lattice differs depending on whether it&#39;s in contact with a cancer cell or a normal cell, Berry said, because the cancer cell&#39;s hyperactivity leads to a higher negative charge on its surface and the release of more protons.</p>\r\n\r\n<p>&quot;The electric field around the cell pushes away electrons in graphene&#39;s electron cloud,&quot; he said, which changes the vibration energy of the carbon atoms. The change in vibration energy can be pinpointed by Raman mapping with a resolution of 300 nanometers, he said, allowing characterization of the activity of a single cell.</p>\r\n\r\n<p>The study, reported in the journal&nbsp;<em>ACS Applied Materials &amp; Interfaces</em>, looked at cultured human brain cells, comparing normal astrocytes to their cancerous counterpart, the highly malignant brain&nbsp;<a href=\"http://www.medicalnewstoday.com/articles/249141.php\">tumor</a>&nbsp;glioblastoma multiforme. The technique is now being studied in a mouse model of cancer, with results that are &quot;very promising,&quot; Berry said. Experiments with patient biopsies would be further down the road.</p>\r\n\r\n<p>&quot;Once a patient has brain tumor surgery, we could use this technique to see if the tumor relapses,&quot; Berry said. &quot;For this, we would need a cell sample we could interface with graphene and look to see if cancer cells are still present.&quot;</p>\r\n\r\n<p>The same technique may also work to differentiate between other types of cells or the activity of cells.</p>\r\n\r\n<p>&quot;We may be able to use it with bacteria to quickly see if the strain is Gram-positive or Gram-negative,&quot; Berry said. &quot;We may be able to use it to detect sickle cells.&quot;</p>\r\n\r\n<p>Earlier this year, Berry and other coworkers introduced nanoscale ripples in graphene, causing it to conduct differently in perpendicular directions, useful for electronics. They wrinkled the graphene by draping it over a string of rod-shaped bacteria, then vacuum-shrinking the germs.</p>\r\n\r\n<p>&quot;We took the earlier work and sort of flipped it over,&quot; Berry said. &quot;Instead of laying graphene on cells, we laid cells on graphene and studied graphene&#39;s atomic vibrations.&quot;</p>\r\n\r\n<p>Co-authors on the study are Bijentimala Keisham and Phong Nguyen of UIC chemical engineering and Arron Cole of UIC neurosurgery.</p>\r\n\r\n<p>Funding was provided by UIC.</p>\r\n\r\n<p>Article:&nbsp;<a href=\"http://pubs.acs.org/doi/abs/10.1021/acsami.6b12307\" target=\"_blank\">Cancer Cell Hyperactivity and Membrane Dipolarity Monitoring via Raman Mapping of Interfaced Graphene: Toward Non-Invasive Cancer Diagnostics</a>, Bijentimala Keisham, Arron Cole, Phong Nguyen, Ankit Mehta, and Vikas Berry,&nbsp;<em>ACS Applied Materials &amp; Interfaces</em>, doi: 10.1021/acsami.6b12307, published online 14 November 2016.</p>','2016-12-27 20:03:59',11,'admin','www.medicalnewstoday.com','ali2.jpg');
INSERT INTO `TRDNEWS` VALUES ('news1','Gk tw lg mw tulis apa di judul','<p>ini news loh</p>','2017-01-14 13:12:27',8,'admin','google.com','elementaryos-logo.png');
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
  `ORDER_ID` varchar(20) NOT NULL,
  `PROD_ID` varchar(10) NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `PRICE` int(11) NOT NULL,
  PRIMARY KEY (`USER_ID`,`ORDER_ID`,`PROD_ID`),
  KEY `PROD_ID` (`PROD_ID`),
  KEY `ORDER_ID` (`ORDER_ID`),
  CONSTRAINT `TRDORDER_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `MSTUSER` (`USER_ID`),
  CONSTRAINT `TRDORDER_ibfk_2` FOREIGN KEY (`ORDER_ID`) REFERENCES `TRHORDER` (`ORDER_ID`),
  CONSTRAINT `TRDORDER_ibfk_3` FOREIGN KEY (`PROD_ID`) REFERENCES `MSTPRODUCT` (`PROD_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRDORDER`
--

LOCK TABLES `TRDORDER` WRITE;
/*!40000 ALTER TABLE `TRDORDER` DISABLE KEYS */;
INSERT INTO `TRDORDER` VALUES ('sxio','ESB-20170114-006','vita001',1,300000);
INSERT INTO `TRDORDER` VALUES ('sxio','ESB-20170114-007','eye001',2,300000);
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
  `BOOKING_ID` varchar(20) NOT NULL,
  `BOOKING_DT` date NOT NULL,
  `TOTAL_PAYMENT` int(11) NOT NULL,
  `USER_ID` varchar(10) NOT NULL,
  `USER_DT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRHBOOKING`
--

LOCK TABLES `TRHBOOKING` WRITE;
/*!40000 ALTER TABLE `TRHBOOKING` DISABLE KEYS */;
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
  `FORUM_ID` varchar(20) NOT NULL,
  `FORUM_TITLE` varchar(150) NOT NULL,
  `FORUM_CAT` int(10) NOT NULL,
  `FORUM_CONTENT` text NOT NULL,
  `FORUM_LAST_POST` varchar(20) NOT NULL,
  `REPLY_NUM` int(11) NOT NULL,
  `USER_ID` varchar(15) NOT NULL,
  `USER_DT` datetime NOT NULL,
  PRIMARY KEY (`FORUM_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRHFORUM`
--

LOCK TABLES `TRHFORUM` WRITE;
/*!40000 ALTER TABLE `TRHFORUM` DISABLE KEYS */;
INSERT INTO `TRHFORUM` VALUES ('FRM-20170111-012','qwe',23,'<p>qwe</p>','FRD-20170112-029',6,'sxio','2017-01-11 15:34:32');
INSERT INTO `TRHFORUM` VALUES ('FRM-20170111-013','asd',23,'<p>asd</p>','FRD-20170112-026',3,'sxioo','2017-01-11 15:35:04');
INSERT INTO `TRHFORUM` VALUES ('FRM-20170112-014','Kesehatan kulit',24,'<p>ini forum loh</p>','FRM-20170112-014',0,'sxio','2017-01-12 20:03:20');
INSERT INTO `TRHFORUM` VALUES ('FRM-20170112-015','123',23,'<p>123</p>','FRM-20170112-015',0,'sxio','2017-01-12 20:03:32');
INSERT INTO `TRHFORUM` VALUES ('FRM-20170112-016','12333',23,'<p>4444</p>','FRM-20170112-016',0,'sxio','2017-01-12 20:03:36');
INSERT INTO `TRHFORUM` VALUES ('FRM-20170112-017','111',23,'<p>asd</p>','FRM-20170112-017',0,'sxio','2017-01-12 20:03:40');
INSERT INTO `TRHFORUM` VALUES ('FRM-20170112-018','fff',23,'<p>gggg</p>','FRM-20170112-018',0,'sxio','2017-01-12 20:03:44');
INSERT INTO `TRHFORUM` VALUES ('FRM-20170112-019','yyy',23,'<p>uuu</p>','FRM-20170112-019',0,'sxio','2017-01-12 20:03:50');
INSERT INTO `TRHFORUM` VALUES ('FRM-20170112-020','zxc',23,'<p>ccc</p>','FRM-20170112-020',0,'sxio','2017-01-12 20:03:55');
INSERT INTO `TRHFORUM` VALUES ('FRM-20170112-021','vvvv',23,'<p>aaaa</p>','FRM-20170112-021',0,'sxio','2017-01-12 20:04:03');
INSERT INTO `TRHFORUM` VALUES ('FRM-20170112-022','ooo',23,'<p>pppp</p>','FRM-20170112-022',0,'sxio','2017-01-12 20:04:08');
INSERT INTO `TRHFORUM` VALUES ('FRM-20170112-023','test',23,'<p><strong>ini tebal</strong></p>','FRM-20170112-023',0,'sxio','2017-01-12 20:04:45');
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
  `ORDER_ID` varchar(20) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRHORDER`
--

LOCK TABLES `TRHORDER` WRITE;
/*!40000 ALTER TABLE `TRHORDER` DISABLE KEYS */;
INSERT INTO `TRHORDER` VALUES ('ESB-20170114-006','sxio','Jalan santai','BRI','1231312','safsadfsaf','2017-01-14','TIKI',0,'2017-01-12 08:27:07','PENDING');
INSERT INTO `TRHORDER` VALUES ('ESB-20170114-007','sxio','AfrikA','CIMB','3333','Ossasss','2017-01-14','TIKI',0,'2017-01-12 20:05:51','ACCEPTED');
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

-- Dump completed on 2017-01-14 13:29:19
