-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2017 at 05:39 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avocadodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `msdcategory`
--

CREATE TABLE `msdcategory` (
  `CAT_ID` int(11) NOT NULL,
  `CAT_GROUP` int(1) NOT NULL,
  `CAT_NAME` varchar(30) NOT NULL,
  `SPEC1` varchar(50) NOT NULL,
  `SPEC2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msdcategory`
--

INSERT INTO `msdcategory` (`CAT_ID`, `CAT_GROUP`, `CAT_NAME`, `SPEC1`, `SPEC2`) VALUES
(1, 1, 'Abilify', '', ''),
(2, 1, 'Abiraterone', '', ''),
(3, 1, 'Abortion', '', ''),
(4, 1, 'Abraxane', '', ''),
(5, 1, 'Abreva', '', ''),
(6, 1, 'Abstinence', '', ''),
(7, 1, 'Acadesine', '', ''),
(8, 1, 'Acanthamoeba', '', ''),
(9, 1, 'Acarbose', '', ''),
(10, 1, 'Accutane', '', ''),
(11, 1, 'Cancer', '', ''),
(12, 1, 'Diabetes', '', ''),
(13, 1, 'Dyslexia', '', ''),
(14, 1, 'Stroke', '', ''),
(15, 2, 'Stetoskop', '', ''),
(16, 2, 'Antibiotic', '', ''),
(17, 1, 'Cholesterol', '', ''),
(18, 2, 'Baby Care', '', ''),
(19, 2, 'Sport Equipment', '', ''),
(20, 2, 'Vitamins', '', ''),
(21, 2, 'Eye Care', '', ''),
(22, 2, 'Cosmetics', '', ''),
(23, 3, 'Forum', '', ''),
(24, 3, 'Kesehatan', '', ''),
(25, 3, 'Estore', '', ''),
(27, 4, 'Kanker', '', ''),
(28, 4, 'Bedah', '', ''),
(29, 4, 'Saraf', '', ''),
(30, 4, 'Kandungan', '', ''),
(31, 4, 'Psikiater', '', ''),
(32, 4, 'THT', '', ''),
(33, 4, 'Mata', '', ''),
(34, 4, 'Gigi', '', ''),
(35, 1, 'tes', '', ''),
(36, 2, 'tesss', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mshcategory`
--

CREATE TABLE `mshcategory` (
  `CAT_ID` int(1) NOT NULL,
  `CAT_NAME` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mshcategory`
--

INSERT INTO `mshcategory` (`CAT_ID`, `CAT_NAME`) VALUES
(1, 'news'),
(2, 'estore'),
(3, 'forum'),
(4, 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `mshdoctor`
--

CREATE TABLE `mshdoctor` (
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
  `IMG_LOC` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mshdoctor`
--

INSERT INTO `mshdoctor` (`DCT_ID`, `DCT_EDUC`, `DCT_ABOUT`, `DCT_EXP`, `DCT_SPECIALTY`, `DCT_CERTIFICATE`, `CONSULT_FEE`, `BOOKING_FEE`, `IMG_CERTIFICATE`, `IMG_LICENSE`, `IMG_REGISTRATION`, `IMG_LOC`) VALUES
('sxioo', 'm1;m2;m3;m4;m5;m6', 'Lorem', '10 thn', 31, 'bedah-bedah', 50000, 100000, 'sxioo_cc.jpg', 'sxioo_pl.jpg', 'sxioo_pr.jpg', 'sxioo_loc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mstcity`
--

CREATE TABLE `mstcity` (
  `CITY_ID` varchar(10) NOT NULL,
  `CITY_DESC` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mstcomment`
--

CREATE TABLE `mstcomment` (
  `ID` int(11) NOT NULL,
  `EMAIL` varchar(70) NOT NULL,
  `SUBJECT` varchar(100) NOT NULL,
  `COMMENT` text NOT NULL,
  `CREATED_AT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstcomment`
--

INSERT INTO `mstcomment` (`ID`, `EMAIL`, `SUBJECT`, `COMMENT`, `CREATED_AT`) VALUES
(1, 'a@a.com', 'a', 'a', '2017-01-06 07:12:27'),
(2, 'a@a.com', 'a', 'a', '2017-01-06 07:12:41'),
(3, 'a@a.com', 'a', 'a', '2017-01-06 07:12:42'),
(4, 'a@a.com', 'a', 'a', '2017-01-06 07:12:42'),
(5, 'ossas@ossas.com', 'This is Ossas', 'Uvuvwevwevwe Ossas', '2017-01-06 07:25:55'),
(6, 'ossas@ossas.com', 'This is Ossas', 'Uvuvwevwevwe Onyetenyevwe Ugwemuhwem Osas', '2017-01-06 07:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `mstdctcomment`
--

CREATE TABLE `mstdctcomment` (
  `DCT_ID` varchar(15) NOT NULL,
  `COMMENT_ID` varchar(20) NOT NULL,
  `COMMENT_CONTENT` text NOT NULL,
  `USER_ID` varchar(15) NOT NULL,
  `USER_DT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstdctcomment`
--

INSERT INTO `mstdctcomment` (`DCT_ID`, `COMMENT_ID`, `COMMENT_CONTENT`, `USER_ID`, `USER_DT`) VALUES
('sxioo', 'DC-20170111-002', 'asdkjasd', 'sxio', '2017-01-11 18:47:24'),
('sxioo', 'DC-20170111-003', 'ini adalah comment', 'sxio', '2017-01-11 18:57:51'),
('sxioo', 'DC-20170112-004', 'asdf', 'sxio', '2017-01-12 04:42:23'),
('sxioo', 'DC-20170112-005', 'l;askdfj', 'sxio', '2017-01-12 10:44:31'),
('sxioo', 'DC-20170112-006', 'ini comment', 'sxio', '2017-01-12 20:00:28');

-- --------------------------------------------------------

--
-- Table structure for table `mstdonate`
--

CREATE TABLE `mstdonate` (
  `DONATE_ID` varchar(20) NOT NULL,
  `USER_ID` varchar(15) NOT NULL,
  `BANK_TYPE` varchar(15) DEFAULT NULL,
  `BANK_ACC_NUM` varchar(15) DEFAULT NULL,
  `BACK_ACC_NAME` varchar(15) DEFAULT NULL,
  `AMOUNT` int(11) NOT NULL,
  `DONOR_NAME` varchar(50) DEFAULT NULL,
  `TRANSFER_DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstdonate`
--

INSERT INTO `mstdonate` (`DONATE_ID`, `USER_ID`, `BANK_TYPE`, `BANK_ACC_NUM`, `BACK_ACC_NAME`, `AMOUNT`, `DONOR_NAME`, `TRANSFER_DATE`) VALUES
('DO-20170112-008', 'sxio', 'BNI', '123', '123', 10000, 'Osas', '2017-01-12'),
('DO-20170112-009', 'sxio', 'BRI', '007', 'Ossasssssssssss', 60000, 'Temen Osas', '2017-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `mstproduct`
--

CREATE TABLE `mstproduct` (
  `PROD_ID` varchar(10) NOT NULL,
  `PROD_NAME` varchar(30) NOT NULL,
  `CAT_ID` int(11) NOT NULL,
  `PROD_QTY_OS` int(11) NOT NULL,
  `PROD_PRICE` int(20) NOT NULL,
  `PROD_DESC` text NOT NULL,
  `PROD_IMG` varchar(30) NOT NULL,
  `CREATED_AT` datetime NOT NULL,
  `UPDATED_AT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstproduct`
--

INSERT INTO `mstproduct` (`PROD_ID`, `PROD_NAME`, `CAT_ID`, `PROD_QTY_OS`, `PROD_PRICE`, `PROD_DESC`, `PROD_IMG`, `CREATED_AT`, `UPDATED_AT`) VALUES
('anti001', 'Antibiotic 1', 16, 50, 50000, '<p>Anntibiotic 1</p>', 'antibiotic1.jpg', '2017-01-08 14:41:01', '2017-01-08 14:55:07'),
('baby001', 'Baby Care 1', 18, 50, 50000, '<p>Baby 1</p>', '900.jpg', '2017-01-08 14:42:00', '2017-01-08 14:55:12'),
('eye001', 'Glasses minus', 21, 50, 300000, '<p>Glasses 1</p>', 'glasses.jpg', '2017-01-08 14:44:32', '2017-01-08 14:55:18'),
('lampu', 'lampu wow wow wow', 22, 123413, 9000, '<p>ini lampu</p>', '141112460.jpg', '2017-01-12 20:14:36', '2017-01-12 20:14:50'),
('sport001', 'TreadMill super', 19, 50, 1000000, '<p>Treadmill 1</p>', 'treadmill.jpg', '2017-01-08 14:47:12', '2017-01-08 14:55:23'),
('stet001', 'Stethoscope Blue', 15, 50, 400000, '<p>Stethoscope 1</p>', 'stet.jpg', '2017-01-08 14:48:37', '2017-01-08 14:55:26'),
('vita001', 'Vitacimin Yellow', 20, 50, 300000, '<p>Vitacimin 1</p>', 'vitacimin.jpg', '2017-01-08 14:51:28', '2017-01-08 14:55:28');

-- --------------------------------------------------------

--
-- Table structure for table `mstreminder`
--

CREATE TABLE `mstreminder` (
  `USER_ID` varchar(10) NOT NULL,
  `REMINDER_DT` datetime NOT NULL,
  `REMINDER_DESC` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstreminder`
--

INSERT INTO `mstreminder` (`USER_ID`, `REMINDER_DT`, `REMINDER_DESC`) VALUES
('sxio', '2017-01-12 17:20:00', 'Presentasi PKTI Coding');

-- --------------------------------------------------------

--
-- Table structure for table `mstsequences`
--

CREATE TABLE `mstsequences` (
  `SEQ_ID` int(11) NOT NULL,
  `SEQ_NAME` varchar(30) NOT NULL,
  `SEQ_VALUE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstsequences`
--

INSERT INTO `mstsequences` (`SEQ_ID`, `SEQ_NAME`, `SEQ_VALUE`) VALUES
(1, 'Estore_Pembelian', 8),
(2, 'Forum', 24),
(3, 'Forum_detail', 30),
(4, 'Booking', 24),
(5, 'Doctor Comment', 7),
(6, 'Donation', 10);

-- --------------------------------------------------------

--
-- Table structure for table `mstuser`
--

CREATE TABLE `mstuser` (
  `USER_ID` varchar(10) NOT NULL,
  `USER_NAME` varchar(30) NOT NULL,
  `USER_PASS` varchar(100) NOT NULL,
  `USER_BIRTH` date NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `HANDPHONE` char(15) NOT NULL,
  `USER_ADDRESS` varchar(150) NOT NULL,
  `USER_IMG` varchar(100) NOT NULL,
  `USER_LEVEL` int(11) NOT NULL,
  `ACTIVE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstuser`
--

INSERT INTO `mstuser` (`USER_ID`, `USER_NAME`, `USER_PASS`, `USER_BIRTH`, `EMAIL`, `HANDPHONE`, `USER_ADDRESS`, `USER_IMG`, `USER_LEVEL`, `ACTIVE`) VALUES
('admin', 'Stephen', '5f4dcc3b5aa765d61d8327deb882cf99', '1996-06-08', 'chronolegionaire@yahoo.com', '123', '', 'noimage.png', 0, 1),
('Bahamut', 'Kenedy', '25d55ad283aa400af464c76d713c07ad', '2017-01-12', 'kenedylukito@yahoo.com', '081234567890', 'Jalan jalan', 'noimage.png', 1, 0),
('meikelwis', 'meikelwis', 'afe538dc69067417dc87c310230ab881', '1997-01-06', 'meikelwis.wijaya@gmail.com', '12312', '123123', 'noimage.png', 2, 1),
('osas', 'osas', '5f4dcc3b5aa765d61d8327deb882cf99', '2017-12-31', '141110868@students.mikroskil.a', '1234567', 'Afrika', 'noimage.png', 2, 0),
('sxio', 'Osas', '5f4dcc3b5aa765d61d8327deb882cf99', '1996-06-03', 'chronolegionaire@yahoo.com', '11111', 'Afrika', 'sxio_photo.png', 1, 1),
('sxioo', 'dr Osas', '5f4dcc3b5aa765d61d8327deb882cf99', '1996-06-08', 'stephen.huang96@gmail.com', '1111', 'kl', 'sxioo_photo.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mstuserlevel`
--

CREATE TABLE `mstuserlevel` (
  `USER_LEVEL` int(11) NOT NULL,
  `USER_DESC` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstuserlevel`
--

INSERT INTO `mstuserlevel` (`USER_LEVEL`, `USER_DESC`) VALUES
(0, 'Admin'),
(1, 'User'),
(2, 'Doctor');

-- --------------------------------------------------------

--
-- Table structure for table `tmpdetail`
--

CREATE TABLE `tmpdetail` (
  `ID` varchar(20) NOT NULL,
  `DT` datetime NOT NULL,
  `VALUE1` int(11) NOT NULL,
  `VALUE2` int(11) NOT NULL,
  `VALUE3` int(11) NOT NULL,
  `VALUE4` varchar(10) NOT NULL,
  `VALUE5` varchar(15) NOT NULL,
  `VALUE6` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmpheader`
--

CREATE TABLE `tmpheader` (
  `ID` varchar(20) NOT NULL,
  `DT` datetime NOT NULL,
  `VALUE2` int(11) NOT NULL,
  `VALUE3` varchar(10) NOT NULL,
  `VALUE4` varchar(15) NOT NULL,
  `VALUE5` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmpheader`
--

INSERT INTO `tmpheader` (`ID`, `DT`, `VALUE2`, `VALUE3`, `VALUE4`, `VALUE5`) VALUES
('BO-20170110-010', '2017-01-10 00:00:00', 0, 'sxioo', '', '2017-01-10 22:26:04'),
('BO-20170110-011', '2017-01-10 00:00:00', 0, 'sxioo', '', '2017-01-10 22:28:50'),
('BO-20170110-012', '2017-01-10 00:00:00', 0, 'sxioo', '', '2017-01-10 22:30:26'),
('BO-20170110-013', '2017-01-10 00:00:00', 0, 'sxioo', '', '2017-01-10 22:32:07'),
('BO-20170110-014', '2017-01-10 00:00:00', 0, 'sxioo', '', '2017-01-10 22:39:40'),
('BO-20170110-015', '2017-01-10 00:00:00', 0, 'sxioo', '', '2017-01-10 22:40:21'),
('BO-20170110-016', '2017-01-10 00:00:00', 0, 'sxioo', '', '2017-01-10 22:53:46'),
('BO-20170110-017', '2017-01-10 00:00:00', 0, 'sxioo', '', '2017-01-10 22:58:59'),
('BO-20170110-018', '0000-00-00 00:00:00', 0, 'sxioo', '', '2017-01-10 23:33:21'),
('BO-20170111-019', '2017-01-11 00:00:00', 0, 'sxio', '', '2017-01-11 13:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `trdaddchatting`
--

CREATE TABLE `trdaddchatting` (
  `ADDCHAT_ID` varchar(10) NOT NULL,
  `ADDCHAT_DT` datetime NOT NULL,
  `USER_ID` varchar(15) NOT NULL,
  `CONTACT_ID` varchar(15) NOT NULL,
  `LEVEL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trdbooking`
--

CREATE TABLE `trdbooking` (
  `BOOKING_ID` varchar(20) NOT NULL,
  `BOOKING_DT` datetime NOT NULL,
  `DCT_ID` varchar(10) NOT NULL,
  `SERV_ID` varchar(100) NOT NULL,
  `BOOK_COUNT` int(11) NOT NULL,
  `TOTAL_AMOUNT` int(11) NOT NULL,
  `USER_ID` varchar(10) NOT NULL,
  `USER_DT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trdbooking`
--

INSERT INTO `trdbooking` (`BOOKING_ID`, `BOOKING_DT`, `DCT_ID`, `SERV_ID`, `BOOK_COUNT`, `TOTAL_AMOUNT`, `USER_ID`, `USER_DT`) VALUES
('BO-20170112-020', '2017-01-12 00:00:00', 'sxioo', 'Konsul', 1, 0, 'sxio', '2017-01-12 18:57:26'),
('BO-20170112-021', '2017-01-12 00:00:00', 'sxioo', 'Konsul', 1, 0, 'sxio', '2017-01-12 19:00:00'),
('BO-20170112-022', '2017-01-20 00:00:00', 'sxioo', 'ntaha apa', 5, 50000, 'sxio', '2017-01-12 19:02:44'),
('BO-20170112-023', '2017-01-13 00:00:00', 'sxioo', 'Konsultasi', 1, 50000, 'sxio', '2017-01-12 23:37:27');

-- --------------------------------------------------------

--
-- Table structure for table `trdchatting`
--

CREATE TABLE `trdchatting` (
  `CHAT_ID` varchar(10) NOT NULL,
  `USER_ID` varchar(15) NOT NULL,
  `USER_NAME` varchar(30) NOT NULL,
  `USER_DT` datetime NOT NULL,
  `TIPE` int(2) NOT NULL,
  `CHAT_TEXT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trddoctor`
--

CREATE TABLE `trddoctor` (
  `DCT_ID` varchar(10) NOT NULL,
  `DCT_STATUS` varchar(10) NOT NULL,
  `DCT_ID_GRADE` int(11) NOT NULL,
  `LOC_X` int(11) NOT NULL,
  `LOC_Y` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trdforum`
--

CREATE TABLE `trdforum` (
  `PARENT_ID` varchar(20) NOT NULL,
  `DETAIL_ID` varchar(20) NOT NULL,
  `USER_ID` varchar(15) NOT NULL,
  `USER_DT` datetime NOT NULL,
  `FORUM_CONTENT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trdforum`
--

INSERT INTO `trdforum` (`PARENT_ID`, `DETAIL_ID`, `USER_ID`, `USER_DT`, `FORUM_CONTENT`) VALUES
('FRD-20170111-021', 'FRD-20170111-023', 'sxio', '2017-01-11 17:14:28', '<p>asd</p>\r\n'),
('FRD-20170111-021', 'FRD-20170112-027', 'sxio', '2017-01-12 20:02:15', '<p>balas di presentasi</p>\r\n'),
('FRD-20170111-022', 'FRD-20170111-025', 'sxio', '2017-01-11 22:19:16', '<p>tes db</p>\r\n'),
('FRD-20170111-023', 'FRD-20170112-028', 'sxio', '2017-01-12 20:02:24', '<p>ini adalah balas</p>\r\n'),
('FRD-20170111-024', 'FRD-20170112-029', 'sxio', '2017-01-12 20:02:41', '<p><em><strong>ini juga reply</strong></em></p>\r\n'),
('FRM-20170111-012', 'FRD-20170111-021', 'sxioo', '2017-01-11 15:34:42', '<p>balas</p>\r\n'),
('FRM-20170111-012', 'FRD-20170111-024', 'sxio', '2017-01-11 17:14:37', '<p>balas 2</p>\r\n'),
('FRM-20170111-013', 'FRD-20170111-022', 'sxio', '2017-01-11 15:35:23', '<p>asdf</p>\r\n'),
('FRM-20170111-013', 'FRD-20170112-026', 'sxio', '2017-01-12 19:51:42', '<p>Bla</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `trdgrading`
--

CREATE TABLE `trdgrading` (
  `GRADING_ID` varchar(10) NOT NULL,
  `TYPESCORE_ID` varchar(10) NOT NULL,
  `SCORE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trdnews`
--

CREATE TABLE `trdnews` (
  `NEWS_ID` varchar(10) NOT NULL,
  `NEWS_TITLE` varchar(100) NOT NULL,
  `NEWS_CONTENT` longtext NOT NULL,
  `NEWS_DT` datetime NOT NULL,
  `NEWS_CAT` int(11) NOT NULL,
  `USER_ID` varchar(15) NOT NULL,
  `NEWS_SOURCE` varchar(50) NOT NULL,
  `NEWS_IMAGE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trdnews`
--

INSERT INTO `trdnews` (`NEWS_ID`, `NEWS_TITLE`, `NEWS_CONTENT`, `NEWS_DT`, `NEWS_CAT`, `USER_ID`, `NEWS_SOURCE`, `NEWS_IMAGE`) VALUES
('chinese', 'Traditional Chinese herbal medicines hold promise for slowing progression of diabetes', '<p>Traditional Chinese herbal medicines hold promise for slowing the progression from prediabetes to an official diabetes diagnosis, according to new research accepted for publication in the Endocrine Society&#39;s&nbsp;<em>Journal of Clinical Endocrinology &amp; Metabolism</em>&nbsp;(<em>JCEM</em>).</p>\r\n\r\n<p>Prediabetes is diagnosed an individual has developed elevated blood sugar levels, but glucose levels have not yet risen to the point of&nbsp;<a href="http://www.news-medical.net/health/What-is-Type-2-Diabetes.aspx">developing type 2 diabetes</a>. People who are prediabetic face a heightened risk of developing type 2 diabetes as well as heart disease and stroke. According to the Centers for Disease Control and Prevention, about 79 million American adults age 20 years or older have prediabetes.</p>\r\n\r\n<p>&quot;With diabetes evolving into a serious public health burden worldwide, it is crucial to take steps to stem the flood of cases,&quot; said one of the study&#39;s authors, Chun-Su Yuan, MD, PhD, of the University of Chicago. &quot;Patients often struggle to make the necessary lifestyle changes to control blood sugar levels, and current medications have limitations and can have adverse gastrointestinal side effects. Traditional Chinese herbs may offer a new option for managing blood sugar levels, either alone or in combination with other treatments.&quot;</p>\r\n\r\n<p>During the double-blind, randomized, placebo-controlled trial, 389 participants at 11 research sites in China were randomly assigned to take either a capsule containing a mixture of 10 Chinese herbal medicines or a placebo. For a year, subjects took capsules of either the Chinese herb mixture, called Tianqi, or the placebo three times a day before meals. All participants received a month of lifestyle education at the outset of the trial and met with nutritionists several times during the course of the study. Subjects&#39; glucose tolerance was measured on a quarterly basis.</p>\r\n\r\n<p>At the end of the trial, 36 participants in the Tianqi group and 56 in the placebo group had developed diabetes. The analysis found taking Tianqi reduced the risk of diabetes by 32.1 percent compared with the placebo, after adjusting for age and gender. The overall reduction in risk was comparable to that found in studies of diabetes medications acarbose and metformin, and study participants reported few side effects from the Tianqi herbs. Tianqi includes several herbs that have been shown to lower blood glucose levels and improve control of blood glucose levels after meals.</p>\r\n\r\n<p>&quot;Few controlled clinical trials have examined traditional Chinese medicine&#39;s impact on diabetes, and the findings from our study showed this approach can be very useful in slowing the disease&#39;s progression,&quot; said one of the study&#39;s lead authors, Xiaolin Tong, MD, PhD, of Guang&#39;anmen Hospital in Beijing, China, said. &quot;More research is needed to evaluate the role Chinese herbal medicine can play in preventing and controlling diabetes.&quot;</p>', '2016-12-27 20:04:39', 12, 'admin', 'kompas.com', 'stomach2.jpg'),
('Chol2', '''Bad'' cholesterol linked to poorer cognitive performance', '<p>edit</p>', '2017-01-12 20:13:10', 17, 'admin', 'medicalnewstoday.com', 'tangle-of-neurons.jpg'),
('deslexia1', 'Dyslexics show a difference in sensory processing', '<p>Neuroscientists at MIT and Boston University have discovered that a basic mechanism underlying sensory perception is deficient in individuals with&nbsp;<a href="http://www.medicalnewstoday.com/articles/186787.php">dyslexia</a>, according to study published in&nbsp;<em>Neuron</em>. The brain typically adapts rapidly to sensory input, such as the sound of a person&#39;s voice or images of faces and objects, as a way to make processing more efficient. But for individuals with dyslexia, the researchers found that adaptation was on average about half that of those without the disorder.</p>\r\n\r\n<p>The difference may explain some of the challenges people with dyslexia experience, such as discerning speech in a noisy environment and learning to read. &quot;Adaptation is something the brain does to help make hard tasks easier,&quot; says first author Tyler Perrachione, assistant professor of Speech, Language and Hearing Sciences at Boston University, who completed this research as a graduate student and post-doctoral fellow at MIT. &quot;Dyslexics are not getting this advantage.&quot;</p>\r\n\r\n<p>Perrachione, who has a background in linguistics, wanted to investigate the theory that reading difficulties in dyslexia come from difficulties in associating sounds with written words. Working in the lab of lead investigator John Gabrieli, professor of Brain and Cognitive Science at MIT, he decided to investigate early, fundamental processes in the brain that could make this association difficult. &quot;Part of the mystery of dyslexia is that the brain doesn&#39;t have an area that evolved for reading,&quot; says Gabrieli.</p>\r\n\r\n<p>They zoomed in on the process of rapid neural adaptation. The researchers used functional magnetic resonance imaging (fMRI) to examine the brains of adults with and without dyslexia as they listened to voices. In some cases, the same voice spoke a series of words; in others, different voices spoke each word.</p>\r\n\r\n<p>Brains typically adapt to a single, consistent voice within a second or two, but they don&#39;t adapt to many different voices. As brains adapt, the fMRI measures of brain activity in relevant brain areas drop.</p>\r\n\r\n<p>Individuals without dyslexia adapted to a consistent voice and not to multiple voices. But for dyslexics, brain activity remained high in both cases, suggesting that they did not adapt as much. Dyslexics with better reading skills showed greater adaptation levels. &quot;Brains typically tune in and figure out what is consistent about a voice,&quot; says Perrachione. &quot;We saw much less adaptation in those with dyslexia group compared to typical readers.&quot;</p>\r\n\r\n<p>These results raised questions, since difficulty understanding speech is not seen in dyslexia. &quot;If you were to talk to someone on the street, you&#39;d have no idea if they were dyslexic or not,&quot; says Perrachione.</p>\r\n\r\n<p>So Perrachione and Gabrieli decided to look at adaption to visual stimuli, too. They recruited another group of individuals with and without dyslexia and examined adaptation to images of written words, faces, and objects, either in a series of different images or repeated images. Again they saw much less adaptation in participants with dyslexia.</p>\r\n\r\n<p>The reduced adaptation was observed in the regions of the brain responsible for processing the stimuli in question. &quot;This suggests that adaptation deficits in dyslexia are general, across the whole brain,&quot; says Perrachione.</p>\r\n\r\n<p>They repeated this experiment with yet another group of individuals, this time focusing on children aged 6 to 9 with and without dyslexia. The results were the same. Overall, the study involved over 150 individuals, and dyslexics on average had adaptation levels about half those of typical readers. &quot;I am surprised by the magnitude of the difference,&quot; says Perrachione. &quot;In people without dyslexia, we always see adaptation, but in the dyslexics, the lack of adaptation was often really pronounced.&quot;</p>\r\n\r\n<p>Perrachione and Gabrieli speculate that dyslexics don&#39;t struggle with processing of heard speech or seen objects and faces because human brains evolved to process these inputs. The systems that perform this processing are likely very robust. &quot;The brain devotes a lot of infrastructure to solving these problems, and has multiple routes,&quot; says Perrachione. &quot;Adaptation is just one of the things that helps take the load off.&quot;</p>\r\n\r\n<p>But reading is a different story. It is a learned skill that requires multiple regions of the brain to work together, potentially with the harmony and complexity of a Rube Goldberg machine, says Perrachione. As rapid neural adaptation deficits simultaneously affect auditory and visual processing during reading, they may compound to make reading very difficult. &quot;We have to see letters, map them onto words, map those to sounds, and connect them to semantics,&quot; says Perrachione. &quot;There are lots of places for things to go wrong.&quot;</p>\r\n\r\n<p>It isn&#39;t known yet exactly where things do go wrong as a result of deficits in rapid neural adaptation. &quot;This study presents strong evidence for a foundational brain difference in dyslexia, but it isn&#39;t clear how to bridge that to the specific properties of reading,&quot; says Gabrieli. &quot;It opens up as many questions as it answers.&quot;</p>\r\n\r\n<p>This research was supported by the Ellison Medical Foundation and the National Institutes of Health.</p>\r\n\r\n<p>Article:&nbsp;<a href="http://www.cell.com/neuron/fulltext/S0896-6273(16)30858-3" target="_blank">Dysfunction of Rapid Neural Adaptation in Dyslexia</a>, Perrachione, et al.,&nbsp;<em>Neuron</em>, doi: 10.1016/j.neuron.2016.11.020, published 21 December 2016.</p>', '2016-12-27 20:04:14', 13, 'admin', 'Kompas.com', 'ali4.jpg'),
('graphene', 'Cancer / Oncology Biology / Biochemistry First use of graphene to detect cancer cells', '<p>By interfacing brain cells onto graphene, researchers at the University of Illinois at Chicago have shown they can differentiate a single hyperactive cancerous cell from a normal cell, pointing the way to developing a simple, noninvasive tool for early&nbsp;<a href="http://www.medicalnewstoday.com/info/cancer-oncology/">cancer</a>&nbsp;diagnosis.</p>\r\n\r\n<p>&quot;This graphene system is able to detect the level of activity of an interfaced cell,&quot; says Vikas Berry, associate professor and head of chemical engineering at UIC, who led the research along with Ankit Mehta, assistant professor of clinical neurosurgery in the UIC College of Medicine.</p>\r\n\r\n<p>&quot;Graphene is the thinnest known material and is very sensitive to whatever happens on its surface,&quot; Berry said. The nanomaterial is composed of a single layer of carbon atoms linked in a hexagonal chicken-wire pattern, and all the atoms share a cloud of electrons moving freely about the surface.</p>\r\n\r\n<p>&quot;The cell&#39;s interface with graphene rearranges the charge distribution in graphene, which modifies the energy of atomic vibration as detected by Raman spectroscopy,&quot; Berry said, referring to a powerful workhorse technique that is routinely used to study graphene.</p>\r\n\r\n<p>The atomic vibration energy in graphene&#39;s crystal lattice differs depending on whether it&#39;s in contact with a cancer cell or a normal cell, Berry said, because the cancer cell&#39;s hyperactivity leads to a higher negative charge on its surface and the release of more protons.</p>\r\n\r\n<p>&quot;The electric field around the cell pushes away electrons in graphene&#39;s electron cloud,&quot; he said, which changes the vibration energy of the carbon atoms. The change in vibration energy can be pinpointed by Raman mapping with a resolution of 300 nanometers, he said, allowing characterization of the activity of a single cell.</p>\r\n\r\n<p>The study, reported in the journal&nbsp;<em>ACS Applied Materials &amp; Interfaces</em>, looked at cultured human brain cells, comparing normal astrocytes to their cancerous counterpart, the highly malignant brain&nbsp;<a href="http://www.medicalnewstoday.com/articles/249141.php">tumor</a>&nbsp;glioblastoma multiforme. The technique is now being studied in a mouse model of cancer, with results that are &quot;very promising,&quot; Berry said. Experiments with patient biopsies would be further down the road.</p>\r\n\r\n<p>&quot;Once a patient has brain tumor surgery, we could use this technique to see if the tumor relapses,&quot; Berry said. &quot;For this, we would need a cell sample we could interface with graphene and look to see if cancer cells are still present.&quot;</p>\r\n\r\n<p>The same technique may also work to differentiate between other types of cells or the activity of cells.</p>\r\n\r\n<p>&quot;We may be able to use it with bacteria to quickly see if the strain is Gram-positive or Gram-negative,&quot; Berry said. &quot;We may be able to use it to detect sickle cells.&quot;</p>\r\n\r\n<p>Earlier this year, Berry and other coworkers introduced nanoscale ripples in graphene, causing it to conduct differently in perpendicular directions, useful for electronics. They wrinkled the graphene by draping it over a string of rod-shaped bacteria, then vacuum-shrinking the germs.</p>\r\n\r\n<p>&quot;We took the earlier work and sort of flipped it over,&quot; Berry said. &quot;Instead of laying graphene on cells, we laid cells on graphene and studied graphene&#39;s atomic vibrations.&quot;</p>\r\n\r\n<p>Co-authors on the study are Bijentimala Keisham and Phong Nguyen of UIC chemical engineering and Arron Cole of UIC neurosurgery.</p>\r\n\r\n<p>Funding was provided by UIC.</p>\r\n\r\n<p>Article:&nbsp;<a href="http://pubs.acs.org/doi/abs/10.1021/acsami.6b12307" target="_blank">Cancer Cell Hyperactivity and Membrane Dipolarity Monitoring via Raman Mapping of Interfaced Graphene: Toward Non-Invasive Cancer Diagnostics</a>, Bijentimala Keisham, Arron Cole, Phong Nguyen, Ankit Mehta, and Vikas Berry,&nbsp;<em>ACS Applied Materials &amp; Interfaces</em>, doi: 10.1021/acsami.6b12307, published online 14 November 2016.</p>', '2016-12-27 20:03:59', 11, 'admin', 'www.medicalnewstoday.com', 'ali2.jpg'),
('graphene1', 'Cancer / Oncology Biology / Biochemistry First use of graphene to detect cancer cells', '<p>By interfacing brain cells onto graphene, researchers at the University of Illinois at Chicago have shown they can differentiate a single hyperactive cancerous cell from a normal cell, pointing the way to developing a simple, noninvasive tool for early&nbsp;<a href="http://www.medicalnewstoday.com/info/cancer-oncology/">cancer</a>&nbsp;diagnosis.</p>\r\n\r\n<p>&quot;This graphene system is able to detect the level of activity of an interfaced cell,&quot; says Vikas Berry, associate professor and head of chemical engineering at UIC, who led the research along with Ankit Mehta, assistant professor of clinical neurosurgery in the UIC College of Medicine.</p>\r\n\r\n<p>&quot;Graphene is the thinnest known material and is very sensitive to whatever happens on its surface,&quot; Berry said. The nanomaterial is composed of a single layer of carbon atoms linked in a hexagonal chicken-wire pattern, and all the atoms share a cloud of electrons moving freely about the surface.</p>\r\n\r\n<p>&quot;The cell&#39;s interface with graphene rearranges the charge distribution in graphene, which modifies the energy of atomic vibration as detected by Raman spectroscopy,&quot; Berry said, referring to a powerful workhorse technique that is routinely used to study graphene.</p>\r\n\r\n<p>The atomic vibration energy in graphene&#39;s crystal lattice differs depending on whether it&#39;s in contact with a cancer cell or a normal cell, Berry said, because the cancer cell&#39;s hyperactivity leads to a higher negative charge on its surface and the release of more protons.</p>\r\n\r\n<p>&quot;The electric field around the cell pushes away electrons in graphene&#39;s electron cloud,&quot; he said, which changes the vibration energy of the carbon atoms. The change in vibration energy can be pinpointed by Raman mapping with a resolution of 300 nanometers, he said, allowing characterization of the activity of a single cell.</p>\r\n\r\n<p>The study, reported in the journal&nbsp;<em>ACS Applied Materials &amp; Interfaces</em>, looked at cultured human brain cells, comparing normal astrocytes to their cancerous counterpart, the highly malignant brain&nbsp;<a href="http://www.medicalnewstoday.com/articles/249141.php">tumor</a>&nbsp;glioblastoma multiforme. The technique is now being studied in a mouse model of cancer, with results that are &quot;very promising,&quot; Berry said. Experiments with patient biopsies would be further down the road.</p>\r\n\r\n<p>&quot;Once a patient has brain tumor surgery, we could use this technique to see if the tumor relapses,&quot; Berry said. &quot;For this, we would need a cell sample we could interface with graphene and look to see if cancer cells are still present.&quot;</p>\r\n\r\n<p>The same technique may also work to differentiate between other types of cells or the activity of cells.</p>\r\n\r\n<p>&quot;We may be able to use it with bacteria to quickly see if the strain is Gram-positive or Gram-negative,&quot; Berry said. &quot;We may be able to use it to detect sickle cells.&quot;</p>\r\n\r\n<p>Earlier this year, Berry and other coworkers introduced nanoscale ripples in graphene, causing it to conduct differently in perpendicular directions, useful for electronics. They wrinkled the graphene by draping it over a string of rod-shaped bacteria, then vacuum-shrinking the germs.</p>\r\n\r\n<p>&quot;We took the earlier work and sort of flipped it over,&quot; Berry said. &quot;Instead of laying graphene on cells, we laid cells on graphene and studied graphene&#39;s atomic vibrations.&quot;</p>\r\n\r\n<p>Co-authors on the study are Bijentimala Keisham and Phong Nguyen of UIC chemical engineering and Arron Cole of UIC neurosurgery.</p>\r\n\r\n<p>Funding was provided by UIC.</p>\r\n\r\n<p>Article:&nbsp;<a href="http://pubs.acs.org/doi/abs/10.1021/acsami.6b12307" target="_blank">Cancer Cell Hyperactivity and Membrane Dipolarity Monitoring via Raman Mapping of Interfaced Graphene: Toward Non-Invasive Cancer Diagnostics</a>, Bijentimala Keisham, Arron Cole, Phong Nguyen, Ankit Mehta, and Vikas Berry,&nbsp;<em>ACS Applied Materials &amp; Interfaces</em>, doi: 10.1021/acsami.6b12307, published online 14 November 2016.</p>', '2016-12-27 20:03:59', 11, 'admin', 'www.medicalnewstoday.com', 'ali2.jpg'),
('PROJECT', 'New project to help reduce unsafe abortion death rates in disaster zones', '<p>New research led by Dr Nibedita S Ray-Bennett at the University of Leicester will look into the sexual and reproductive health issues in disaster-prone areas during times of humanitarian crisis.</p>\r\n\r\n<p>The project, supported by the International Planned Parenthood Federation&#39;s (IPPF) Innovation Programme, will explore the opportunities and challenges around reproductive health during disasters and emergencies in Bangladesh and Pakistan.</p>\r\n\r\n<p>The two year project will look at whether the pre-positioning of Reproductive Health Kit-8 prior to disasters such as flooding or cyclones has the potential to provide Post-abortion care (PAC) services to help reduce the morbidity and mortality associated with complications of unsafe abortions.</p>\r\n\r\n<p>The research is a joint venture with Dr Fauzia Akhter Huda from the icddrb, Bangladesh; Ms Rehana Salam from the Agha Khan University in Pakistan, International Planned Parenthood Federation&#39;s South Asia Region (IPPF-SAR), IPPF&#39;s SPRINT Initiative (Sexual and Reproductive Health Programme in Crisis and Post Crisis Situations) and IPPF SAR Member Associations in Pakistan and Bangladesh.</p>\r\n\r\n<p>The team will look specifically at Reproductive Health Kit 8 supplied by the United Nations Population Fund (UNPFA), which is used to treat the complications arising from miscarriage (spontaneous abortion) and from unsafe induced abortion, including&nbsp;<a href="http://www.medicalnewstoday.com/articles/305782.php">sepsis</a>, incomplete evacuation and bleeding.</p>\r\n\r\n<p>The kits are complementary to the Interagency Emergency Health Kit - which is designed to meet the primary health care needs of displaced populations without medical facilities.</p>\r\n\r\n<p>The researchers will conduct the evaluation of the RH Kit-8 positioned by IPPF-SAR and IPPF-SAR Member Associations in Pakistan and Bangladesh which will help to reduce the number of women falling ill or dying as a result of a miscarriage (spontaneous abortion) or unsafe induced abortion, during their displacement.</p>\r\n\r\n<p>Dr Nibedita S Ray-Bennett, Lecturer in Risk Management from the University of Leicester&#39;s School of Management, said: &quot;We feel that the success of the Reproductive Health Kit 8 is likely to be influenced by its positioning in strategic locations and with strategic agents.</p>\r\n\r\n<p>&quot;We will establish this by reviewing IPPF-SAR Member Association&#39;s reproductive health data documented at branch levels, and by conducting a baseline survey in disaster-prone locations in Bangladesh, we shall develop an intervention protocol based on these findings which we will then implement in a &#39;disaster climate&#39; in Bangladesh as well as in a disaster-prone locale in Pakistan to test and validate the positioning of RH kit-8 in such situation.&quot;</p>\r\n\r\n<p>&quot;In a post-disaster phase, we will conduct end line surveys to identify reproductive health changes happened due to the positioning of RH kit-8 amongst our selected population.&quot;</p>\r\n\r\n<p>The overall objective of the research study is that the evidence gathered from this research will be used by governing bodies to inform policy and programmatic decisions for Post-abortion care (PAC) services and reproductive health issues in Bangladesh in a humanitarian crisis situation.</p>\r\n\r\n<p>Dr Ray-Bennett added: &quot;We will work closely with the consortium partners to disseminate our findings to promote communication and action amongst the target audience in the Government of Bangladesh and other relevant stakeholders.</p>\r\n\r\n<p>&quot;We will develop policy briefs for information dissemination in collaboration with Family Planning Associations in Bangladesh, Pakistan and IPPF-SAR and we will also aim to implement the &#39;proven intervention&#39; in 10 other countries where IPPF is present.&quot;</p>', '2016-12-27 20:04:52', 3, 'admin', 'detik.com', 'ali5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trdorder`
--

CREATE TABLE `trdorder` (
  `USER_ID` varchar(15) NOT NULL,
  `ORDER_ID` varchar(20) NOT NULL,
  `PROD_ID` varchar(10) NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `PRICE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trdorder`
--

INSERT INTO `trdorder` (`USER_ID`, `ORDER_ID`, `PROD_ID`, `QUANTITY`, `PRICE`) VALUES
('sxio', 'ESB-20170114-006', 'vita001', 1, 300000),
('sxio', 'ESB-20170114-007', 'eye001', 2, 300000);

-- --------------------------------------------------------

--
-- Table structure for table `trdpurchasing`
--

CREATE TABLE `trdpurchasing` (
  `PURC_ID` varchar(10) NOT NULL,
  `SEQ_NO` int(2) NOT NULL,
  `PROD_ID` varchar(10) NOT NULL,
  `PURC_QTY` int(11) NOT NULL,
  `PURC_AMOUNT` int(11) NOT NULL,
  `USER_NAME` varchar(15) NOT NULL,
  `USER_DT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trdsales`
--

CREATE TABLE `trdsales` (
  `SALES_ID` varchar(10) NOT NULL,
  `SEQ_NO` int(2) NOT NULL,
  `PROD_ID` varchar(10) NOT NULL,
  `SALES_QTY` int(11) NOT NULL,
  `USER_NAME` varchar(15) NOT NULL,
  `USER_DT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trhbooking`
--

CREATE TABLE `trhbooking` (
  `BOOKING_ID` varchar(20) NOT NULL,
  `BOOKING_DT` date NOT NULL,
  `TOTAL_PAYMENT` int(11) NOT NULL,
  `USER_ID` varchar(10) NOT NULL,
  `USER_DT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trhchatting`
--

CREATE TABLE `trhchatting` (
  `CHAT_ID` varchar(10) NOT NULL,
  `CHAT_NAME` varchar(30) NOT NULL,
  `CHAT_DT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trhforum`
--

CREATE TABLE `trhforum` (
  `FORUM_ID` varchar(20) NOT NULL,
  `FORUM_TITLE` varchar(150) NOT NULL,
  `FORUM_CAT` int(10) NOT NULL,
  `FORUM_CONTENT` text NOT NULL,
  `FORUM_LAST_POST` varchar(20) NOT NULL,
  `REPLY_NUM` int(11) NOT NULL,
  `USER_ID` varchar(15) NOT NULL,
  `USER_DT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trhforum`
--

INSERT INTO `trhforum` (`FORUM_ID`, `FORUM_TITLE`, `FORUM_CAT`, `FORUM_CONTENT`, `FORUM_LAST_POST`, `REPLY_NUM`, `USER_ID`, `USER_DT`) VALUES
('FRM-20170111-012', 'qwe', 23, '<p>qwe</p>', 'FRD-20170112-029', 6, 'sxio', '2017-01-11 15:34:32'),
('FRM-20170111-013', 'asd', 23, '<p>asd</p>', 'FRD-20170112-026', 3, 'sxioo', '2017-01-11 15:35:04'),
('FRM-20170112-014', 'Kesehatan kulit', 24, '<p>ini forum loh</p>', 'FRM-20170112-014', 0, 'sxio', '2017-01-12 20:03:20'),
('FRM-20170112-015', '123', 23, '<p>123</p>', 'FRM-20170112-015', 0, 'sxio', '2017-01-12 20:03:32'),
('FRM-20170112-016', '12333', 23, '<p>4444</p>', 'FRM-20170112-016', 0, 'sxio', '2017-01-12 20:03:36'),
('FRM-20170112-017', '111', 23, '<p>asd</p>', 'FRM-20170112-017', 0, 'sxio', '2017-01-12 20:03:40'),
('FRM-20170112-018', 'fff', 23, '<p>gggg</p>', 'FRM-20170112-018', 0, 'sxio', '2017-01-12 20:03:44'),
('FRM-20170112-019', 'yyy', 23, '<p>uuu</p>', 'FRM-20170112-019', 0, 'sxio', '2017-01-12 20:03:50'),
('FRM-20170112-020', 'zxc', 23, '<p>ccc</p>', 'FRM-20170112-020', 0, 'sxio', '2017-01-12 20:03:55'),
('FRM-20170112-021', 'vvvv', 23, '<p>aaaa</p>', 'FRM-20170112-021', 0, 'sxio', '2017-01-12 20:04:03'),
('FRM-20170112-022', 'ooo', 23, '<p>pppp</p>', 'FRM-20170112-022', 0, 'sxio', '2017-01-12 20:04:08'),
('FRM-20170112-023', 'test', 23, '<p><strong>ini tebal</strong></p>', 'FRM-20170112-023', 0, 'sxio', '2017-01-12 20:04:45');

-- --------------------------------------------------------

--
-- Table structure for table `trhgrading`
--

CREATE TABLE `trhgrading` (
  `GRADE_ID` varchar(10) NOT NULL,
  `GRADE_DT` date NOT NULL,
  `DCT_ID` varchar(10) NOT NULL,
  `TOTAL_GRADING` int(11) NOT NULL,
  `USER_ID` varchar(10) NOT NULL,
  `USER_NAME` varchar(15) NOT NULL,
  `USER_DT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trhorder`
--

CREATE TABLE `trhorder` (
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
  `STATUS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trhorder`
--

INSERT INTO `trhorder` (`ORDER_ID`, `USER_ID`, `ORDER_ADDRESS`, `BANK_TYPE`, `BANK_ACC_NUM`, `BANK_ACC_NAME`, `TRANSFER_DATE`, `TRANSPORT`, `TRANSPORT_FEE`, `ORDER_DATE`, `STATUS`) VALUES
('ESB-20170114-006', 'sxio', 'Jalan santai', 'BRI', '1231312', 'safsadfsaf', '2017-01-14', 'TIKI', 0, '2017-01-12 08:27:07', 'PENDING'),
('ESB-20170114-007', 'sxio', 'AfrikA', 'CIMB', '3333', 'Ossasss', '2017-01-14', 'TIKI', 0, '2017-01-12 20:05:51', 'ACCEPTED');

-- --------------------------------------------------------

--
-- Table structure for table `trhpurchasing`
--

CREATE TABLE `trhpurchasing` (
  `PURC_ID` varchar(10) NOT NULL,
  `PURCH_DT` date NOT NULL,
  `SUPP_ID` varchar(10) NOT NULL,
  `TOTAL_PURC` int(11) NOT NULL,
  `USER_ID` varchar(10) NOT NULL,
  `USER_NAME` varchar(15) NOT NULL,
  `USER_DT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trhsales`
--

CREATE TABLE `trhsales` (
  `SALES_ID` varchar(10) NOT NULL,
  `SALES_DT` date NOT NULL,
  `CUST_ID` varchar(10) NOT NULL,
  `TOTAL_SALES` int(11) NOT NULL,
  `USER_ID` varchar(10) NOT NULL,
  `USER_NAME` int(11) NOT NULL,
  `USER_DT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msdcategory`
--
ALTER TABLE `msdcategory`
  ADD PRIMARY KEY (`CAT_ID`),
  ADD KEY `CAT_ID` (`CAT_GROUP`);

--
-- Indexes for table `mshcategory`
--
ALTER TABLE `mshcategory`
  ADD PRIMARY KEY (`CAT_ID`);

--
-- Indexes for table `mshdoctor`
--
ALTER TABLE `mshdoctor`
  ADD PRIMARY KEY (`DCT_ID`);

--
-- Indexes for table `mstcity`
--
ALTER TABLE `mstcity`
  ADD PRIMARY KEY (`CITY_ID`);

--
-- Indexes for table `mstcomment`
--
ALTER TABLE `mstcomment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mstdctcomment`
--
ALTER TABLE `mstdctcomment`
  ADD PRIMARY KEY (`COMMENT_ID`);

--
-- Indexes for table `mstdonate`
--
ALTER TABLE `mstdonate`
  ADD PRIMARY KEY (`DONATE_ID`);

--
-- Indexes for table `mstproduct`
--
ALTER TABLE `mstproduct`
  ADD PRIMARY KEY (`PROD_ID`);

--
-- Indexes for table `mstreminder`
--
ALTER TABLE `mstreminder`
  ADD PRIMARY KEY (`USER_ID`,`REMINDER_DT`);

--
-- Indexes for table `mstsequences`
--
ALTER TABLE `mstsequences`
  ADD PRIMARY KEY (`SEQ_ID`);

--
-- Indexes for table `mstuser`
--
ALTER TABLE `mstuser`
  ADD PRIMARY KEY (`USER_ID`);

--
-- Indexes for table `mstuserlevel`
--
ALTER TABLE `mstuserlevel`
  ADD PRIMARY KEY (`USER_LEVEL`);

--
-- Indexes for table `trdaddchatting`
--
ALTER TABLE `trdaddchatting`
  ADD PRIMARY KEY (`ADDCHAT_ID`);

--
-- Indexes for table `trdbooking`
--
ALTER TABLE `trdbooking`
  ADD PRIMARY KEY (`BOOKING_ID`);

--
-- Indexes for table `trdchatting`
--
ALTER TABLE `trdchatting`
  ADD PRIMARY KEY (`CHAT_ID`);

--
-- Indexes for table `trddoctor`
--
ALTER TABLE `trddoctor`
  ADD PRIMARY KEY (`DCT_ID`);

--
-- Indexes for table `trdforum`
--
ALTER TABLE `trdforum`
  ADD PRIMARY KEY (`PARENT_ID`,`DETAIL_ID`) USING BTREE;

--
-- Indexes for table `trdgrading`
--
ALTER TABLE `trdgrading`
  ADD PRIMARY KEY (`GRADING_ID`);

--
-- Indexes for table `trdnews`
--
ALTER TABLE `trdnews`
  ADD PRIMARY KEY (`NEWS_ID`),
  ADD KEY `NEWS_CAT` (`NEWS_CAT`);

--
-- Indexes for table `trdorder`
--
ALTER TABLE `trdorder`
  ADD PRIMARY KEY (`USER_ID`,`ORDER_ID`,`PROD_ID`),
  ADD KEY `PROD_ID` (`PROD_ID`),
  ADD KEY `ORDER_ID` (`ORDER_ID`);

--
-- Indexes for table `trdpurchasing`
--
ALTER TABLE `trdpurchasing`
  ADD PRIMARY KEY (`PURC_ID`);

--
-- Indexes for table `trhchatting`
--
ALTER TABLE `trhchatting`
  ADD PRIMARY KEY (`CHAT_ID`);

--
-- Indexes for table `trhforum`
--
ALTER TABLE `trhforum`
  ADD PRIMARY KEY (`FORUM_ID`);

--
-- Indexes for table `trhgrading`
--
ALTER TABLE `trhgrading`
  ADD PRIMARY KEY (`GRADE_ID`);

--
-- Indexes for table `trhorder`
--
ALTER TABLE `trhorder`
  ADD PRIMARY KEY (`ORDER_ID`);

--
-- Indexes for table `trhpurchasing`
--
ALTER TABLE `trhpurchasing`
  ADD PRIMARY KEY (`PURC_ID`);

--
-- Indexes for table `trhsales`
--
ALTER TABLE `trhsales`
  ADD PRIMARY KEY (`SALES_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msdcategory`
--
ALTER TABLE `msdcategory`
  MODIFY `CAT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `mshcategory`
--
ALTER TABLE `mshcategory`
  MODIFY `CAT_ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mstcomment`
--
ALTER TABLE `mstcomment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mstsequences`
--
ALTER TABLE `mstsequences`
  MODIFY `SEQ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `msdcategory`
--
ALTER TABLE `msdcategory`
  ADD CONSTRAINT `MSDCATEGORY_ibfk_1` FOREIGN KEY (`CAT_GROUP`) REFERENCES `mshcategory` (`CAT_ID`);

--
-- Constraints for table `mshdoctor`
--
ALTER TABLE `mshdoctor`
  ADD CONSTRAINT `MSHDOCTOR_ibfk_1` FOREIGN KEY (`DCT_ID`) REFERENCES `mstuser` (`USER_ID`);

--
-- Constraints for table `mstreminder`
--
ALTER TABLE `mstreminder`
  ADD CONSTRAINT `MSTREMINDER_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `mstuser` (`USER_ID`);

--
-- Constraints for table `trdorder`
--
ALTER TABLE `trdorder`
  ADD CONSTRAINT `TRDORDER_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `mstuser` (`USER_ID`),
  ADD CONSTRAINT `TRDORDER_ibfk_2` FOREIGN KEY (`ORDER_ID`) REFERENCES `trhorder` (`ORDER_ID`),
  ADD CONSTRAINT `TRDORDER_ibfk_3` FOREIGN KEY (`PROD_ID`) REFERENCES `mstproduct` (`PROD_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
