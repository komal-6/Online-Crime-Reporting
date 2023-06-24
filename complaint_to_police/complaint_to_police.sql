-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 05:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complane_to_police`
--

-- --------------------------------------------------------

--
-- Table structure for table `action_tbl`
--

CREATE TABLE `action_tbl` (
  `ID` int(11) NOT NULL,
  `COMPLENT_CATEGORY_ID` int(11) NOT NULL,
  `COMPLENT_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `ACTION_DESCRIPTION` text NOT NULL,
  `ISACTIVE` int(11) NOT NULL,
  `DOI` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `action_tbl`
--

INSERT INTO `action_tbl` (`ID`, `COMPLENT_CATEGORY_ID`, `COMPLENT_ID`, `USER_ID`, `ACTION_DESCRIPTION`, `ISACTIVE`, `DOI`) VALUES
(6, 4, 5, 5, 'Please Be Prepare For Cort', 1, '2010-04-20 03:40:47'),
(8, 4, 6, 7, 'Dont Worry Police Coming Your House ', 1, '2012-04-20 09:32:35'),
(9, 6, 10, 9, 'Dont Worray I will Trace His Mobile By email.', 0, '2003-05-20 03:26:42'),
(10, 6, 10, 9, 'Dont Worray I will Trace him Mobile Device And Catch Him.', 1, '2003-05-20 03:27:57'),
(16, 6, 10, 9, 'Congrates Your Case Is Solved.', 1, '2003-05-20 04:01:21'),
(17, 4, 11, 7, 'Dont Worry I will Find Them Shortly.', 1, '2003-05-20 04:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `area_tbl`
--

CREATE TABLE `area_tbl` (
  `ID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `CID` int(11) NOT NULL,
  `AREA_NAME` varchar(100) NOT NULL,
  `ISACTIVE` int(11) NOT NULL,
  `DOI` datetime NOT NULL,
  `DOU` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area_tbl`
--

INSERT INTO `area_tbl` (`ID`, `SID`, `CID`, `AREA_NAME`, `ISACTIVE`, `DOI`, `DOU`) VALUES
(1, 1, 5, 'Bapunager', 2, '2030-03-20 06:41:29', '0000-00-00 00:00:00'),
(2, 1, 6, 'Kirti', 1, '2030-03-20 06:44:33', '2005-04-20 06:27:31'),
(3, 1, 5, 'Paldi', 1, '2030-03-20 06:45:35', '0000-00-00 00:00:00'),
(4, 1, 5, 'Navrangpura', 1, '2030-03-20 06:45:58', '0000-00-00 00:00:00'),
(5, 1, 5, 'Astodiya', 1, '2030-03-20 06:46:11', '0000-00-00 00:00:00'),
(6, 1, 5, 'vastral', 1, '2030-03-20 06:46:27', '0000-00-00 00:00:00'),
(7, 1, 5, 'Kakariya', 1, '2030-03-20 06:46:39', '0000-00-00 00:00:00'),
(8, 1, 5, 'Iskon', 1, '2030-03-20 06:47:06', '0000-00-00 00:00:00'),
(9, 1, 6, 'Rashcorsh', 1, '2030-03-20 06:48:05', '0000-00-00 00:00:00'),
(10, 1, 6, 'NyayMandir', 1, '2030-03-20 06:48:54', '0000-00-00 00:00:00'),
(11, 1, 6, 'Kalaghoda', 1, '2030-03-20 06:49:08', '0000-00-00 00:00:00'),
(13, 1, 6, 'Mandvi', 1, '2030-03-20 06:50:37', '0000-00-00 00:00:00'),
(14, 1, 6, 'Fahtegunj', 1, '2030-03-20 06:51:06', '0000-00-00 00:00:00'),
(15, 1, 7, 'Neelkanth Nager', 1, '2030-03-20 06:57:20', '0000-00-00 00:00:00'),
(16, 1, 7, 'Asha Vihar', 1, '2030-03-20 06:58:18', '0000-00-00 00:00:00'),
(17, 1, 7, 'vidhyanager', 1, '2030-03-20 06:58:34', '0000-00-00 00:00:00'),
(18, 1, 7, 'Purshottam Nagar', 1, '2030-03-20 07:00:01', '0000-00-00 00:00:00'),
(19, 1, 7, 'Mangalpura', 1, '2030-03-20 07:02:27', '0000-00-00 00:00:00'),
(20, 1, 11, 'Mavdi', 1, '2030-03-20 07:06:19', '0000-00-00 00:00:00'),
(21, 1, 11, 'Kankot', 1, '2030-03-20 07:06:41', '0000-00-00 00:00:00'),
(22, 1, 11, 'Krushannagar', 1, '2030-03-20 07:07:05', '0000-00-00 00:00:00'),
(23, 1, 11, 'vajdi Ghad', 1, '2030-03-20 07:07:49', '0000-00-00 00:00:00'),
(24, 1, 11, 'jesvantpur', 1, '2030-03-20 07:08:24', '0000-00-00 00:00:00'),
(25, 1, 11, 'kherdi', 1, '2030-03-20 07:08:44', '0000-00-00 00:00:00'),
(26, 1, 12, 'Dumral', 1, '2030-03-20 07:12:21', '0000-00-00 00:00:00'),
(27, 1, 12, 'Indira Nagar', 1, '2030-03-20 07:12:46', '0000-00-00 00:00:00'),
(28, 1, 12, 'Santram', 1, '2030-03-20 07:13:23', '0000-00-00 00:00:00'),
(29, 1, 12, 'kadam Nagar', 1, '2030-03-20 07:13:56', '0000-00-00 00:00:00'),
(32, 1, 12, 'shanti Nagar', 1, '2030-03-20 07:18:08', '0000-00-00 00:00:00'),
(33, 1, 12, 'hari om Nagar', 1, '2030-03-20 07:18:30', '0000-00-00 00:00:00'),
(34, 1, 12, 'chalali', 1, '2030-03-20 07:18:55', '0000-00-00 00:00:00'),
(35, 1, 13, 'santosh Nagar', 1, '2030-03-20 07:21:34', '0000-00-00 00:00:00'),
(36, 1, 13, 'jalaramnager', 1, '2030-03-20 07:23:57', '0000-00-00 00:00:00'),
(37, 1, 13, 'Palanpur', 1, '2030-03-20 07:24:21', '0000-00-00 00:00:00'),
(38, 1, 13, 'Bharthana', 1, '2030-03-20 07:24:55', '0000-00-00 00:00:00'),
(39, 1, 13, 'vijay Nagar', 1, '2030-03-20 07:25:23', '0000-00-00 00:00:00'),
(40, 1, 13, 'Bamroli', 1, '2030-03-20 07:25:41', '0000-00-00 00:00:00'),
(41, 1, 13, 'Shivaji Nagar', 1, '2030-03-20 07:26:01', '0000-00-00 00:00:00'),
(42, 1, 13, 'Gopipura', 1, '2030-03-20 07:26:16', '0000-00-00 00:00:00'),
(43, 1, 13, 'Narotam Nagar', 1, '2030-03-20 07:26:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE `category_tbl` (
  `ID` int(11) NOT NULL,
  `CATEGORY_NAME` varchar(100) NOT NULL,
  `ISACTIVE` int(11) NOT NULL,
  `DOI` datetime NOT NULL,
  `DOU` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`ID`, `CATEGORY_NAME`, `ISACTIVE`, `DOI`, `DOU`) VALUES
(2, 'violent', 1, '2009-03-20 04:48:37', '0000-00-00 00:00:00'),
(3, 'Assault', 1, '2009-03-20 04:49:32', '0000-00-00 00:00:00'),
(4, 'Attacks', 1, '2009-03-20 04:49:57', '2009-03-20 05:48:48'),
(5, 'Baiting', 1, '2009-03-20 04:51:07', '0000-00-00 00:00:00'),
(6, 'Cyber-crime', 1, '2009-03-20 04:51:43', '0000-00-00 00:00:00'),
(7, 'Blackmail', 1, '2009-03-20 04:52:17', '0000-00-00 00:00:00'),
(8, 'Attempted Muder', 1, '2009-03-20 04:53:01', '0000-00-00 00:00:00'),
(9, 'Child-Pornography', 1, '2009-03-20 04:56:06', '0000-00-00 00:00:00'),
(12, 'Domestic-Violence', 1, '2009-03-20 05:01:02', '0000-00-00 00:00:00'),
(13, 'Murder', 1, '2009-03-20 05:01:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `city_tbl`
--

CREATE TABLE `city_tbl` (
  `ID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `CITY_NAME` varchar(100) NOT NULL,
  `ISACTIVE` int(11) NOT NULL,
  `DOI` datetime NOT NULL,
  `DOU` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city_tbl`
--

INSERT INTO `city_tbl` (`ID`, `SID`, `CITY_NAME`, `ISACTIVE`, `DOI`, `DOU`) VALUES
(5, 1, 'Ahemdabad', 1, '2006-03-20 07:27:07', '0000-00-00 00:00:00'),
(6, 1, 'Vadodara', 1, '2006-03-20 07:27:21', '0000-00-00 00:00:00'),
(7, 1, 'Aanand', 1, '2006-03-20 07:27:44', '0000-00-00 00:00:00'),
(11, 1, 'Rajkot', 1, '2029-03-20 01:11:12', '0000-00-00 00:00:00'),
(12, 1, 'Nadiad', 1, '2029-03-20 01:13:29', '0000-00-00 00:00:00'),
(13, 1, 'Surat', 1, '2029-03-20 01:14:07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `complent_tbl`
--

CREATE TABLE `complent_tbl` (
  `ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(100) NOT NULL,
  `LAST_NAME` varchar(100) NOT NULL,
  `COMPLENT_CATEGORY_ID` int(11) NOT NULL,
  `COMPLENT_DISCRIPTION` varchar(100) NOT NULL,
  `STATE_ID` int(11) NOT NULL,
  `CITY_ID` int(11) NOT NULL,
  `AREA_ID` int(11) NOT NULL,
  `PS_ID` int(11) NOT NULL,
  `ISACTIVE` int(11) NOT NULL,
  `DOI` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complent_tbl`
--

INSERT INTO `complent_tbl` (`ID`, `USER_ID`, `FIRST_NAME`, `LAST_NAME`, `COMPLENT_CATEGORY_ID`, `COMPLENT_DISCRIPTION`, `STATE_ID`, `CITY_ID`, `AREA_ID`, `PS_ID`, `ISACTIVE`, `DOI`) VALUES
(6, 7, 'Pratik', 'Rana', 4, 'Thodi Dar Pahle 2 people Ne mujpe Jaan Lava Attack Kiya  or Mara sir Pe Bahut Choot Aai he Please Ar', 1, 5, 4, 11, 1, '2020-04-12 06:52:09'),
(10, 9, 'Jaya', 'Parekh', 6, 'Mare sath Kal Gift wowchar ka Name Pe Froad Hua.', 1, 6, 9, 13, 1, '2020-05-03 03:23:56'),
(11, 7, 'Pratik', 'Rana', 4, 'Muj Pe kal Rat Hamla Hua.', 1, 6, 9, 13, 1, '2020-05-03 04:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `contectus_tbl`
--

CREATE TABLE `contectus_tbl` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `EMAIL_ID` varchar(100) NOT NULL,
  `CONTECT_NUMBER` text NOT NULL,
  `MESSAGE` text NOT NULL,
  `ISACTIVE` int(11) NOT NULL,
  `DOI` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

CREATE TABLE `feedback_tbl` (
  `ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `FEEDBACK` text NOT NULL,
  `ISACTIVE` int(11) NOT NULL,
  `DOI` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news_tbl`
--

CREATE TABLE `news_tbl` (
  `ID` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `HEADING` varchar(100) NOT NULL,
  `DISCRIPTION` text NOT NULL,
  `PHOTO/VIDEO` varchar(100) NOT NULL,
  `ISACTIVE` int(11) NOT NULL,
  `DOI` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_tbl`
--

INSERT INTO `news_tbl` (`ID`, `PID`, `HEADING`, `DISCRIPTION`, `PHOTO/VIDEO`, `ISACTIVE`, `DOI`) VALUES
(24, 11, 'lockdown Chaking', 'Full Chacking By  Police in Lockdown.', '1.mp4', 1, '2003-05-20 04:16:23'),
(25, 11, 'Chakning', 'No Discription', 'images2.jpeg', 1, '2003-05-20 04:20:02'),
(27, 11, 'Braking News', 'Aaj subha Ahemdabad ma Accident ka karan Puri car Jal Gai.', 'images (2).jpeg', 1, '2003-05-20 04:24:15'),
(28, 11, 'Good News', 'Vadodara ma Badi Achhi Tarah se Hua Lockdown Ka palan.', 'images.jpeg', 1, '2003-05-20 04:25:29'),
(29, 11, 'Arrest Criminals', 'Gujrat Police Arrest 8 Criminals in Firing Case.', '2.mp4', 1, '2003-05-20 04:28:49'),
(30, 13, 'Braking News', 'Aaj Ho Jaiga Police Walo Ka Look Chage.', 'videoplayback (7).mp4', 1, '2003-05-20 04:36:32'),
(31, 13, 'Police ', 'Aaj Baroda ma Police walo Ko Public na Bahut Mara.', 'images (1).jpeg', 1, '2003-05-20 04:38:15'),
(33, 13, 'Complane', 'Aaj Ahmadabad Kagad Pith Police station ma  5 Police walo ka Against aai Complane.', 'complne.mp4', 1, '2003-05-20 04:44:01'),
(34, 13, 'Braking News', 'Rajkot ma Gundda Raj.', 'Rajkot.mp4', 1, '2003-05-20 04:47:25'),
(35, 12, 'Darampur Policestation', 'No Discription', 'y2mate.com - Dalit ruckus at Dharampur Police station, Valsad _ News18 Gujarati_5XBpmgEuvl0_360p.mp4', 1, '2003-05-20 04:50:50');

-- --------------------------------------------------------

--
-- Table structure for table `policestation_tbl`
--

CREATE TABLE `policestation_tbl` (
  `ID` int(11) NOT NULL,
  `PS_NAME` varchar(200) NOT NULL,
  `PS_EMAIL` varchar(100) NOT NULL,
  `PS_USERNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `PS_CONTECT_NUMBER` varchar(100) NOT NULL,
  `STATE_ID` int(11) NOT NULL,
  `CITY_ID` int(11) NOT NULL,
  `AREA_ID` int(11) NOT NULL,
  `PS_PICTURE` varchar(100) NOT NULL,
  `ISACTIVE` int(11) NOT NULL,
  `DOI` datetime NOT NULL,
  `DOU` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policestation_tbl`
--

INSERT INTO `policestation_tbl` (`ID`, `PS_NAME`, `PS_EMAIL`, `PS_USERNAME`, `PASSWORD`, `PS_CONTECT_NUMBER`, `STATE_ID`, `CITY_ID`, `AREA_ID`, `PS_PICTURE`, `ISACTIVE`, `DOI`, `DOU`) VALUES
(11, 'Navrang Pura Police Station', 'pratik.creart@gmail.com', 'nav@crimePolice.com', 'nav111', '9998252587', 1, 5, 4, 'navrangpura-police-station.jpg', 1, '2012-04-20 05:26:25', '2012-04-20 08:28:25'),
(12, 'astodiya Police Station', 'pratikversion2.1@gmail.com', 'ast@online_crime_reporting.com', 'ast100', '9998023455', 1, 5, 5, 'gita-mandir-polices-station.jpg', 1, '2012-04-20 05:29:29', '0000-00-00 00:00:00'),
(13, 'Rascorsh Policestation', 'cre.chirag@gmail.com', 'Rash_Police@crime.com', 'Rash111', '7890789050', 1, 6, 9, 'avetar.png', 1, '2003-05-20 03:12:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `post_tbl`
--

CREATE TABLE `post_tbl` (
  `ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `POST_NAME` varchar(100) NOT NULL,
  `DISCRIPTION` text NOT NULL,
  `PHOTO/VIDEO` text NOT NULL,
  `ISACTIVE` int(11) NOT NULL,
  `DOI` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_tbl`
--

INSERT INTO `post_tbl` (`ID`, `USER_ID`, `POST_NAME`, `DISCRIPTION`, `PHOTO/VIDEO`, `ISACTIVE`, `DOI`) VALUES
(20, 7, 'Speech ', ' This Speech is moivantional For Criminals...', 'videoplayback (3).mp4', 1, '2003-05-20 01:53:37'),
(21, 7, 'Chori', 'No Discription', 'videoplayback (5).mp4', 1, '2003-05-20 01:59:29'),
(22, 7, 'Police  Pared', 'Pared By Female Police ', 'IMG_20200503_173608.JPG', 1, '2003-05-20 02:38:04'),
(23, 8, 'Patrolling', ' Patrolling By  Gujrat Police In RedZone Area.', 'IMG_20200503_173643.JPG', 1, '2003-05-20 02:42:00'),
(24, 8, 'Murder', 'Murder In shop only For 5000 Rs.', 'videoplayback (4).mp4', 1, '2003-05-20 02:43:27'),
(25, 8, 'Crime Reporter', 'Misbehavior By News Reporter To Police.', 'videoplayback (8).mp4', 1, '2003-05-20 02:46:40'),
(26, 9, 'My Dream', 'My Frist Drime Is Police Cap', 'IMG_20200503_173737.JPG', 1, '2003-05-20 02:55:41'),
(27, 9, 'Police Requirement', 'Police Requirement in Vadorara. Body Chakup Location Is Vadodara Polo Ground.\r\nTiming 8:00AM To 11:00AM.', 'videoplayback (6).mp4', 1, '2003-05-20 02:58:27'),
(28, 9, 'Police Selection', 'No Discription', 'IMG_20200503_173547.JPG', 1, '2003-05-20 02:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `state_tbl`
--

CREATE TABLE `state_tbl` (
  `ID` int(11) NOT NULL,
  `STATE_NAME` varchar(100) NOT NULL,
  `ISACTIVE` int(11) NOT NULL,
  `DOI` datetime NOT NULL,
  `DOU` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state_tbl`
--

INSERT INTO `state_tbl` (`ID`, `STATE_NAME`, `ISACTIVE`, `DOI`, `DOU`) VALUES
(1, 'Gujrat', 1, '2004-03-20 07:52:06', '2005-03-20 12:01:40');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(100) NOT NULL,
  `LAST_NAME` varchar(100) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` text NOT NULL,
  `DOB` text NOT NULL,
  `GENDER` text NOT NULL,
  `CONTECT_NUMBER` text NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `PROFILE_PIC` text NOT NULL,
  `STATE_ID` int(11) NOT NULL,
  `CITY_ID` int(11) NOT NULL,
  `AREA_ID` int(11) NOT NULL,
  `ISACTIVE` int(11) NOT NULL,
  `USER_TYPE` int(11) NOT NULL,
  `DOI` datetime NOT NULL,
  `DOU` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`ID`, `FIRST_NAME`, `LAST_NAME`, `USERNAME`, `EMAIL`, `PASSWORD`, `DOB`, `GENDER`, `CONTECT_NUMBER`, `ADDRESS`, `PROFILE_PIC`, `STATE_ID`, `CITY_ID`, `AREA_ID`, `ISACTIVE`, `USER_TYPE`, `DOI`, `DOU`) VALUES
(1, '', '', '', 'admin@gmail.com', 'admin@123', '0000-00-00', '', '', '', '', 0, 0, 0, 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Pratik', 'Rana', 'Pratik_Rana', 'rajuswager356@gmail.com', 'pratik111', '2001-02-12', 'Male', '7878032497', 'NavrangPura CG Road Ahmadabad.', 'pratik.jpg', 1, 5, 4, 1, 1, '2012-04-20 06:37:01', '0000-00-00 00:00:00'),
(8, 'Komal', 'Panchal', 'komal_panchal', 'komalpanchal113@gmail.com', 'kp111', '2001-01-12', 'Female', '9902113444', 'Astodiya Char Rasta Ahmadabad.', 'avetar.png', 1, 5, 5, 1, 1, '2012-04-20 07:43:31', '0000-00-00 00:00:00'),
(9, 'Jaya', 'Parekh', 'jaya_p', 'jayaparekh007@gmail.com', 'jaya123', '2001-02-02', 'Female', '9090223434', 'Rascorsh Circle Vadodara.', 'avetar.png', 1, 6, 9, 1, 1, '2003-05-20 02:54:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action_tbl`
--
ALTER TABLE `action_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `area_tbl`
--
ALTER TABLE `area_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category_tbl`
--
ALTER TABLE `category_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `city_tbl`
--
ALTER TABLE `city_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `complent_tbl`
--
ALTER TABLE `complent_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contectus_tbl`
--
ALTER TABLE `contectus_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news_tbl`
--
ALTER TABLE `news_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `policestation_tbl`
--
ALTER TABLE `policestation_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `post_tbl`
--
ALTER TABLE `post_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `state_tbl`
--
ALTER TABLE `state_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action_tbl`
--
ALTER TABLE `action_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `area_tbl`
--
ALTER TABLE `area_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `category_tbl`
--
ALTER TABLE `category_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `city_tbl`
--
ALTER TABLE `city_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `complent_tbl`
--
ALTER TABLE `complent_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contectus_tbl`
--
ALTER TABLE `contectus_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news_tbl`
--
ALTER TABLE `news_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `policestation_tbl`
--
ALTER TABLE `policestation_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `post_tbl`
--
ALTER TABLE `post_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `state_tbl`
--
ALTER TABLE `state_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
