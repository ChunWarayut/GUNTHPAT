-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 21, 2019 at 07:17 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revelsoft_gtp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_about_us`
--

CREATE TABLE `tb_about_us` (
  `about_us_id` int(5) NOT NULL,
  `about_us_title_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `about_us_sub_title_en` text COLLATE utf8_unicode_ci NOT NULL,
  `about_us_title_th` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `about_us_sub_title_th` text COLLATE utf8_unicode_ci NOT NULL,
  `about_us_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_about_us`
--

INSERT INTO `tb_about_us` (`about_us_id`, `about_us_title_en`, `about_us_sub_title_en`, `about_us_title_th`, `about_us_sub_title_th`, `about_us_img`) VALUES
(1, 'ABOUT GUNTHPAT PLACEgdhfg', 'Gunthpat Place Luxurious apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc. Every room type is including 5’bed, 2 Tables, 1TV stand, TV, Refrigerator, Closet, sink, bed light, etc, Gunthpat Place Luxurious apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc. \r\n\r\nGunthpat Place Luxurious apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc.                                                                                                                                                                                                                                ', 'เกี่ยวกับ กันตพัฒน์', ' กันตพัฒน์ เพลส เซอร์วิส อพาร์ทเม้นท์ 7 ชั้น ใจกลางเมือง โคราช หรูหรากับระบบความปลอดภัยเต็มรูปแบบ กับความสะดวกสบายด้วยบริการลิฟต์ 2 ตัว โล่งโปร่งสบาย         ด้วยโถงสกายไลท์ ตรงกลาง พร้อมน้ำพุ กับแหล่งช้อปปิ้ง ที่รายล้อม ทั้ง ห้างเดอะมอลล์ และเพียงเดินไม่กี่ก้าวถึงก็เทสโก้ โลตัส และสิ่งอำนวยความสะดวกอื่นๆ อีกมากมาย', '1802201915405918022019154059504040802.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_book`
--

CREATE TABLE `tb_book` (
  `book_id` int(5) NOT NULL,
  `book_firstname` varchar(200) NOT NULL,
  `book_lastname` varchar(200) NOT NULL,
  `book_person` int(10) NOT NULL,
  `room_id` int(5) NOT NULL,
  `book_date_start` date NOT NULL,
  `book_date_end` date NOT NULL,
  `book_tel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_book`
--

INSERT INTO `tb_book` (`book_id`, `book_firstname`, `book_lastname`, `book_person`, `room_id`, `book_date_start`, `book_date_end`, `book_tel`) VALUES
(1, 'warayut', 'taekrathok', 1, 3, '0000-00-00', '0000-00-00', '0918136426'),
(2, 'วรายุทธ', 'เทกระโทก', 5, 2, '0000-00-00', '0000-00-00', '0918136426'),
(3, '', '', 0, 0, '0000-00-00', '0000-00-00', ''),
(4, ';ikp6mT', 'gmdiT\\Fmsd', 2, 4, '0000-00-00', '0000-00-00', '0999989988'),
(5, 'as', 'dasd', 0, 0, '2019-02-09', '2019-02-15', '0999989988');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `contact_id` int(5) NOT NULL,
  `contact_title_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `contact_country` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `contact_type_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`contact_id`, `contact_title_id`, `contact_firstname`, `contact_lastname`, `contact_email`, `contact_tel`, `contact_country`, `contact_type_id`, `contact_text`) VALUES
(1, '1', 'ส้มฉุน', 'เที่ยงกระโทก', 'Som@gmail.com', '089-958-8747', 'THA', '3', 'ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาที\r\nโปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน'),
(2, '2', 'สมใจ', 'ใจดี', 'Test@gmail.com', '085-965-9587', 'THA', '4', 'ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาที\r\nโปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน'),
(3, '3', 'มนัสวี', 'เข่งพิมล', 'Manadsawee@hotmail.com', '098-218-9498', 'THA', '2', 'ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาที\r\nโปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน'),
(4, '3', 'dasd', 'das', 'asd', 'asdas', 'THA', '1', 'asdasdasdasdasd'),
(5, '3', 'dasd', 'das', 'asd', 'asdas', 'THA', '1', 'asdasdasdasdasd'),
(6, '2', 'asd', 'asd', 'asd', 'sdasd', 'THA', '2', '555'),
(7, '2', 'asd', 'asd', 'asd', 'sdasd', 'THA', '2', '555'),
(8, '2', 'asd', 'asd', 'asd', 'sdasd', 'THA', '2', '555'),
(9, '2', 'asd', 'asd', 'asd', 'sdasd', 'THA', '2', '555'),
(10, '2', 'asd', 'asd', 'asd', 'asd', 'THA', '3', 'asdasdasdasdasd'),
(11, '1', 'asdasdas', 'sd', 'asd', 'asd', 'THA', '5', 'asdasdasdasd'),
(12, '1', 'asdasdas', 'sd', 'asd', 'asd', 'THA', '5', 'asdasdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact_head`
--

CREATE TABLE `tb_contact_head` (
  `contact_head_id` int(5) NOT NULL,
  `contact_head_detail_th` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_head_detail_en` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_contact_head`
--

INSERT INTO `tb_contact_head` (`contact_head_id`, `contact_head_detail_th`, `contact_head_detail_en`) VALUES
(1, 'ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาที โปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน\n\nUse the Airport Link service from Suvarnabhumi International Airport to Phayathai by serving every 20 minutes from 6.00 am to 24.00 pm, midnight by BTS sky train. Change the train at Siam Station And get off at Saphan Taksin Station. From there, you can use the passenger boat for free. By boat departing every 20 minutes, please inform the hotel in advance in order to let us know your travel style\n                    ', 'Use the Airport Link service from Suvarnabhumi International Airport to Phayathai by serving every 20 minutes from 6.00 am to 24.00 pm, midnight by BTS sky train. Change the train at Siam Station And get off at Saphan Taksin Station. From there, you can use the passenger boat for free. By boat departing every 20 minutes, please inform the hotel in advance in order to let us know your travel style\nใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาที โปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact_title`
--

CREATE TABLE `tb_contact_title` (
  `contact_title_id` int(5) NOT NULL,
  `contact_title_name_th` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `contact_title_name_en` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_contact_title`
--

INSERT INTO `tb_contact_title` (`contact_title_id`, `contact_title_name_th`, `contact_title_name_en`) VALUES
(1, 'ที่พัก', 'room'),
(8, 'สถานที่', 'travel ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact_type`
--

CREATE TABLE `tb_contact_type` (
  `contact_type_id` int(5) NOT NULL,
  `contact_type_name_th` varchar(200) NOT NULL,
  `contact_type_name_en` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_contact_type`
--

INSERT INTO `tb_contact_type` (`contact_type_id`, `contact_type_name_th`, `contact_type_name_en`) VALUES
(1, 'สำคัญ', 'important'),
(2, 'ด่วนมาก', 'Very quick'),
(3, 'ปลานกลาง', 'quick'),
(4, 'น้อย', 'medium');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact_us`
--

CREATE TABLE `tb_contact_us` (
  `contact_us_id` int(5) NOT NULL,
  `contact_us_title_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_title_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_sub_title_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_sub_title_th` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_facebook` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_tel` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_th` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_1_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_1_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_2_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_2_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_3_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_3_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_fax` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_carry_title_th` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_carry_title_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_carry_detail_th` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_carry_detail_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_taxi_title_th` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_taxi_title_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_taxi_detail_th` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_taxi_detail_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_car_titel_th` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_car_titel_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_car_detail_th` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_car_detail_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_map` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_map_latitude` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_map_longitude` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_img` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_contact_us`
--

INSERT INTO `tb_contact_us` (`contact_us_id`, `contact_us_title_en`, `contact_us_title_th`, `contact_us_sub_title_en`, `contact_us_sub_title_th`, `contact_us_facebook`, `contact_us_tel`, `contact_us_address_en`, `contact_us_address_th`, `contact_us_address_1_en`, `contact_us_address_1_th`, `contact_us_address_2_en`, `contact_us_address_2_th`, `contact_us_address_3_en`, `contact_us_address_3_th`, `contact_us_address_4`, `contact_us_fax`, `contact_us_email`, `contact_us_carry_title_th`, `contact_us_carry_title_en`, `contact_us_carry_detail_th`, `contact_us_carry_detail_en`, `contact_us_taxi_title_th`, `contact_us_taxi_title_en`, `contact_us_taxi_detail_th`, `contact_us_taxi_detail_en`, `contact_us_car_titel_th`, `contact_us_car_titel_en`, `contact_us_car_detail_th`, `contact_us_car_detail_en`, `contact_us_map`, `contact_us_map_latitude`, `contact_us_map_longitude`, `contact_us_img`) VALUES
(8, 'GUNTHPAT PLACE', '', 'Gunthpat Place Luxurious apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc.     Every room type is including 5’bed, 2 Tables, 1TV stand, TV, Refrigerator, Closet, sink, bed light, etc, ', ' เซอร์วิส อพาร์ทเม้นท์ 7 ชั้น ใจกลางเมือง โคราช หรูหรากับระบบความปลอดภัยเต็มรูปแบบ กับความสะดวกสบายด้วยบริการลิฟต์ 2 ตัว โล่งโปร่งสบาย         ด้วยโถงสกายไลท์ ตรงกลาง พร้อมน้ำพุ กับแหล่งช้อปปิ้ง ที่รายล้อม ทั้ง ห้างเดอะมอลล์ และเพียงเดินไม่กี่ก้าวถึงก็เทสโก้ โลตัส และสิ่งอำนวยความสะดวกอื่นๆ อีกมากมาย ', 'https://www.facebook.com/gunthpatplace', '0864653355', '263/3 Soi King-Sa wai rieng', '263/3 ซ.กิ่งสวายเรียง', 'Nai Muang', 'ต.ในเมือง', 'Muang', 'อ.เมือง', 'Nakhornratchasima ', 'จ.นครราชสีมา ', '30000', '044-255-617', 'gunthpatplace@hotmail.com', 'ระบบขนส่งสาธารณะ', 'Public transport', '  ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาทีโปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน ', 'Use the Airport Link service from Suvarnabhumi International Airport to Phayathai by serving every 20 minutes from 6.00 am to 24.00 pm, midnight by BTS sky train. Change the train at Siam Station And get off at Saphan Taksin Station. From there, you can use the passenger boat for free. By boat departing every 20 minutes, please inform the hotel in advance in order to let us know your travel style', 'แท็กซี่โดยสาร', 'Passenger taxi', 'ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาทีโปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน ', 'Use the Airport Link service from Suvarnabhumi International Airport to Phayathai by serving every 20 minutes from 6.00 am to 24.00 pm, midnight by BTS sky train. Change the train at Siam Station And get off at Saphan Taksin Station. From there, you can use the passenger boat for free. By boat departing every 20 minutes, please inform the hotel in advance in order to let us know your travel style', 'รถรับส่งของโรงแรม', 'Hotel shuttle', 'ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาทีโปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน ', 'Use the Airport Link service from Suvarnabhumi International Airport to Phayathai by serving every 20 minutes from 6.00 am to 24.00 pm, midnight by BTS sky train. Change the train at Siam Station And get off at Saphan Taksin Station. From there, you can use the passenger boat for free. By boat departing every 20 minutes, please inform the hotel in advance in order to let us know your travel style', 'https://www.google.com/maps/place/Gunthpat+Place/@14.9755388,102.070692,18.25z/data=!4m8!1m2!2m1!1sguthpat!3m4!1s0x311eb34d179b5b75:0xba3f08e9b53c348f!8m2!3d14.976385!4d102.0702457', '14.9763853', '102.0680571', '20022019153537200220191535371116883229.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_country`
--

CREATE TABLE `tb_country` (
  `ct_code` char(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสประเทศ',
  `ct_nameENG` varchar(200) NOT NULL COMMENT 'ชื่อภาษาอังกฤษ',
  `ct_nameTHA` varchar(200) NOT NULL COMMENT 'ชื่อภาษาไทย',
  `code` char(2) NOT NULL COMMENT 'ชื่อย่อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_country`
--

INSERT INTO `tb_country` (`ct_code`, `ct_nameENG`, `ct_nameTHA`, `code`) VALUES
('ABW', 'Aruba', 'อารูบา', 'AW'),
('AFG', 'Afghanistan', 'อัฟกานิสถาน', 'AF'),
('AGO', 'Angola', 'แองโกลา', 'AO'),
('AIA', 'Anguilla', 'แองกวิลลา', 'AI'),
('ALA', 'Åland', 'โอลันด์', 'AX'),
('ALB', 'Albania', 'แอลเบเนีย', 'AL'),
('AND', 'Andorra', 'อันดอร์รา', 'AD'),
('ARE', 'United Arab Emirates', 'สหรัฐอาหรับเอมิเรตส์\n', 'AE'),
('ARG', 'Argentina', 'อาร์เจนตินา', 'AR'),
('ARM', 'Armenia', 'อาร์เมเนีย', 'AM'),
('ASM', 'American Samoa', 'อเมริกันซามัว', 'AS'),
('ATA', 'Antarctica', 'ทวิปแอนตาร์กติกา', 'AQ'),
('ATF', 'French Southern Territories', 'ดินแดนทางตอนใต้ของฝรั่งเศส', 'TF'),
('ATG', 'Antigua and Barbuda', 'แอนติกาและบาร์บูดา', 'AG'),
('AUS', 'Australia', 'ออสเตรเลีย', 'AU'),
('AUT', 'Austria', 'ออสเตรีย', 'AT'),
('AZE', 'Azerbaijan', 'อาเซอร์ไบจาน', 'AZ'),
('BDI', 'Burundi', 'บุรุนดี', 'BI'),
('BEL', 'Belgium', 'เบลเยียม', 'BE'),
('BEN', 'Benin', 'เบนิน', 'BJ'),
('BES', 'Bonaire', 'โบแนร์', 'BQ'),
('BFA', 'Burkina Faso', 'บูร์กินาฟาโซ', 'BF'),
('BGD', 'Bangladesh', 'บังคลาเทศ', 'BD'),
('BGR', 'Bulgaria', 'บัลแกเรีย', 'BG'),
('BHR', 'Bahrain', 'บาห์เรน', 'BH'),
('BHS', 'Bahamas', 'บาฮามาส', 'BS'),
('BIH', 'Bosnia and Herzegovina', 'บอสเนียและเฮอร์เซโก\n', 'BA'),
('BLM', 'Saint Barthélemy', 'Saint Barthélemy', 'BL'),
('BLR', 'Belarus', 'เบลารุส', 'BY'),
('BLZ', 'Belize', 'เบลีซ', 'BZ'),
('BMU', 'Bermuda', 'เบอร์มิวดา', 'BM'),
('BOL', 'Bolivia', 'โบลิเวีย', 'BO'),
('BRA', 'Brazil', 'บราซิล', 'BR'),
('BRB', 'Barbados', 'บาร์เบโดส', 'BB'),
('BRN', 'Brunei', 'บรูไน', 'BN'),
('BTN', 'Bhutan', 'ภูฏาน', 'BT'),
('BVT', 'Bouvet Island', 'เกาะบูเว็ต', 'BV'),
('BWA', 'Botswana', 'บอตสวานา', 'BW'),
('CAF', 'Central African Republic', 'สาธารณรัฐแอฟริกากลาง', 'CF'),
('CAN', 'Canada', 'แคนาดา', 'CA'),
('CCK', 'Cocos [Keeling] Islands', 'เกาะโคโคส [คีลิง]', 'CC'),
('CHE', 'Switzerland', 'สวิสเซอร์แลนด์', 'CH'),
('CHL', 'Chile', 'ชิลี', 'CL'),
('CHN', 'China', 'จีน', 'CN'),
('CIV', 'Ivory Coast', 'ไอวอรี่โคสต์', 'CI'),
('CMR', 'Cameroon', 'แคเมอรูน', 'CM'),
('COD', 'Democratic Republic of the Congo', 'สาธารณรัฐประชาธิปไตยคองโก', 'CD'),
('COG', 'Republic of the Congo', 'สาธารณรัฐคองโก', 'CG'),
('COK', 'Cook Islands', 'หมู่เกาะคุก', 'CK'),
('COL', 'Colombia', 'โคลอมเบีย', 'CO'),
('COM', 'Comoros', 'คอโมโรส', 'KM'),
('CPV', 'Cape Verde', 'เคปเวิร์ด', 'CV'),
('CRI', 'Costa Rica', 'คอสตาริกา\n', 'CR'),
('CUB', 'Cuba', 'คิวบา', 'CU'),
('CUW', 'Curacao', 'คูราเซา\n', 'CW'),
('CXR', 'Christmas Island', 'เกาะคริสต์มาส', 'CX'),
('CYM', 'Cayman Islands', 'หมู่เกาะเคย์เเมน', 'KY'),
('CYP', 'Cyprus', 'ไซปรัส', 'CY'),
('CZE', 'Czech Republic', 'สาธารณรัฐเช็ก', 'CZ'),
('DEU', 'Germany', 'เยอรมันนี', 'DE'),
('DJI', 'Djibouti', 'จิบูตี', 'DJ'),
('DMA', 'Dominica', 'โดมินิกา', 'DM'),
('DNK', 'Denmark', 'เดนมาร์ก', 'DK'),
('DOM', 'Dominican Republic', 'สาธารณรัฐโดมินิกัน\n', 'DO'),
('DZA', 'Algeria', 'แอลจีเรีย', 'DZ'),
('ECU', 'Ecuador', 'เอกวาดอร์', 'EC'),
('EGY', 'Egypt', 'อียิปต์', 'EG'),
('ERI', 'Eritrea', 'เอริเทรี', 'ER'),
('ESH', 'Western Sahara', 'ซาฮาร่าตะวันตก', 'EH'),
('ESP', 'Spain', 'สเปน', 'ES'),
('EST', 'Estonia', 'เอสโตเนีย', 'EE'),
('ETH', 'Ethiopia', 'สาธารณรัฐเอธิโอเปีย', 'ET'),
('FIN', 'Finland', 'ฟินแลนด์', 'FI'),
('FJI', 'Fiji', 'ฟิจิ', 'FJ'),
('FLK', 'Falkland Islands', 'หมู่เกาะฟอล์คแลนด์', 'FK'),
('FRA', 'France', 'ฝรั่งเศส', 'FR'),
('FRO', 'Faroe Islands', 'หมู่เกาะแฟโร', 'FO'),
('FSM', 'Micronesia', 'ไมโครนีเซีย', 'FM'),
('GAB', 'Gabon', 'กาบอง', 'GA'),
('GBR', 'United Kingdom', 'อังกฤษ (สหราชอาณาจักร)', 'GB'),
('GEO', 'Georgia', 'จอร์เจีย', 'GE'),
('GGY', 'Guernsey', 'เกิร์นซีย์', 'GG'),
('GHA', 'Ghana', 'เกิร์นซีย์', 'GH'),
('GIB', 'Gibraltar', 'ยิบรอลตา', 'GI'),
('GIN', 'Guinea', 'กินี', 'GN'),
('GLP', 'Guadeloupe', 'กัวเดลุฟ', 'GP'),
('GMB', 'Gambia', 'แกมเบีย', 'GM'),
('GNB', 'Guinea-Bissau', 'กินีบิสเซา', 'GW'),
('GNQ', 'Equatorial Guinea', 'อิเควทอเรียลกินี', 'GQ'),
('GRC', 'Greece', 'กรีซ', 'GR'),
('GRD', 'Grenada', 'เกรเนดา ', 'GD'),
('GRL', 'Greenland', 'กรีนแลนด์', 'GL'),
('GTM', 'Guatemala', 'กัวเตมาลา', 'GT'),
('GUF', 'French Guiana', 'เฟรนช์เกียนา', 'GF'),
('GUM', 'Guam', 'เกาะกวม', 'GU'),
('GUY', 'Guyana', 'กายอานา', 'GY'),
('HKG', 'Hong Kong', 'ฮ่องกง', 'HK'),
('HMD', 'Heard Island and McDonald Islands', 'เกาะเฮิร์ดและหมู่เกาะแมคโดนัลด์', 'HM'),
('HND', 'Honduras', 'ฮอนดูรัส', 'HN'),
('HRV', 'Croatia', 'โครเอเชีย', 'HR'),
('HTI', 'Haiti', 'เฮติ', 'HT'),
('HUN', 'Hungary', 'ฮังการี', 'HU'),
('IDN', 'Indonesia', 'อินโดนีเซีย', 'ID'),
('IMN', 'Isle of Man', 'เกาะแมน', 'IM'),
('IND', 'India', 'อินเดีย', 'IN'),
('IOT', 'British Indian Ocean Territory', 'หมู่เกาะบริติชเวอร์จิน', 'IO'),
('IRL', 'Ireland', 'ไอร์แลนด์', 'IE'),
('IRN', 'Iran', 'อิหร่าน', 'IR'),
('IRQ', 'Iraq', 'อิรัก', 'IQ'),
('ISL', 'Iceland', 'ประเทศไอซ์แลนด์', 'IS'),
('ISR', 'Israel', 'อิสราเอล', 'IL'),
('ITA', 'Italy', 'อิตาลี', 'IT'),
('JAM', 'Jamaica', 'เกาะจาเมกา', 'JM'),
('JEY', 'Jersey', 'นิวเจอร์ซีย์', 'JE'),
('JOR', 'Jordan', 'จอร์แดน', 'JO'),
('JPN', 'Japan', 'ญี่ปุ่น', 'JP'),
('KAZ', 'Kazakhstan', 'คาซัคสถาน', 'KZ'),
('KEN', 'Kenya', 'เคนย่า', 'KE'),
('KGZ', 'Kyrgyzstan', 'คีร์กีสถาน', 'KG'),
('KHM', 'Cambodia', 'กัมพูชา', 'KH'),
('KIR', 'Kiribati', 'คิริบาส', 'KI'),
('KNA', 'Saint Kitts and Nevis', 'เซนต์คิตส์และเนวิส', 'KN'),
('KOR', 'South Korea', 'เกาหลีใต้', 'KR'),
('KWT', 'Kuwait', 'คูเวต', 'KW'),
('LAO', 'Laos', 'ลาว', 'LA'),
('LBN', 'Lebanon', 'เลบานอน', 'LB'),
('LBR', 'Liberia', 'ประเทศไลบีเรีย', 'LR'),
('LBY', 'Libya', 'ลิบยา', 'LY'),
('LCA', 'Saint Lucia', 'เซนต์ลูเซีย', 'LC'),
('LIE', 'Liechtenstein', 'นสไตน์', 'LI'),
('LKA', 'Sri Lanka', 'ศรีลังกา', 'LK'),
('LSO', 'Lesotho', 'เลโซโท', 'LS'),
('LTU', 'Lithuania', 'ลิธัวเนีย', 'LT'),
('LUX', 'Luxembourg', 'ลักเซมเบิร์ก', 'LU'),
('LVA', 'Latvia', 'ลัตเวีย', 'LV'),
('MAC', 'Macao', 'มาเก๊า', 'MO'),
('MAF', 'Saint Martin', 'เซนต์มาร์ติน', 'MF'),
('MAR', 'Morocco', 'โมร็อกโก', 'MA'),
('MCO', 'Monaco', 'โมนาโก', 'MC'),
('MDA', 'Moldova', 'มอลโดวา', 'MD'),
('MDG', 'Madagascar', 'มาดากัสการ์', 'MG'),
('MDV', 'Maldives', 'มัลดีฟส์', 'MV'),
('MEX', 'Mexico', 'เม็กซิโก', 'MX'),
('MHL', 'Marshall Islands', 'หมู่เกาะมาร์แชลล์', 'MH'),
('MKD', 'Macedonia', 'มาซิโดเนีย', 'MK'),
('MLI', 'Mali', 'มาลี', 'ML'),
('MLT', 'Malta', 'เกาะมอลตา', 'MT'),
('MMR', 'Myanmar [Burma]', 'พม่า', 'MM'),
('MNE', 'Montenegro', 'มอนเตเนโก', 'ME'),
('MNG', 'Mongolia', 'มองโกเลีย', 'MN'),
('MNP', 'Northern Mariana Islands', 'หมู่เกาะนอร์เทิร์นมาเรียนา', 'MP'),
('MOZ', 'Mozambique', 'โมซัมบิก', 'MZ'),
('MRT', 'Mauritania', 'มอริเตเนีย', 'MR'),
('MSR', 'Montserrat', 'มอนต์เซอร์รัต', 'MS'),
('MTQ', 'Martinique', 'มาร์ตินีก', 'MQ'),
('MUS', 'Mauritius', 'มอริเชียส', 'MU'),
('MWI', 'Malawi', 'มาลาวี', 'MW'),
('MYS', 'Malaysia', 'มาเลเซีย', 'MY'),
('MYT', 'Mayotte', 'มายอต', 'YT'),
('NAM', 'Namibia', 'นามิเบีย', 'NA'),
('NCL', 'New Caledonia', 'นิวแคลิโดเนีย', 'NC'),
('NER', 'Niger', 'ไนเธอร์', 'NE'),
('NFK', 'Norfolk Island', 'เกาะนอร์ฟอล์ก', 'NF'),
('NGA', 'Nigeria', 'ไนจีเรีย', 'NG'),
('NIC', 'Nicaragua', 'นิการากัว', 'NI'),
('NIU', 'Niue', 'นีอูเอ', 'NU'),
('NLD', 'Netherlands', 'เนเธอร์แลนด์', 'NL'),
('NOR', 'Norway', 'นอร์เวย์', 'NO'),
('NPL', 'Nepal', 'เนปาล', 'NP'),
('NRU', 'Nauru', 'นาอูรู', 'NR'),
('NZL', 'New Zealand', 'นิวซีแลนด์', 'NZ'),
('OMN', 'Oman', 'โอมาน', 'OM'),
('PAK', 'Pakistan', 'ปากีสถาน', 'PK'),
('PAN', 'Panama', 'ปานามา', 'PA'),
('PCN', 'Pitcairn Islands', 'หมู่เกาะพิตแคร์น', 'PN'),
('PER', 'Peru', 'เปรู', 'PE'),
('PHL', 'Philippines', 'ฟิลิปปินส์', 'PH'),
('PLW', 'Palau', 'ปาเลา', 'PW'),
('PNG', 'Papua New Guinea', 'ปาปัวนิวกินี', 'PG'),
('POL', 'Poland', 'โปแลนด์', 'PL'),
('PRI', 'Puerto Rico', 'เปอร์โตริโก', 'PR'),
('PRK', 'North Korea', 'เกาหลีเหนือ', 'KP'),
('PRT', 'Portugal', 'โปรตุเกส', 'PT'),
('PRY', 'Paraguay', 'ปารากวัย', 'PY'),
('PSE', 'Palestine', 'ปาเลสไตน์', 'PS'),
('PYF', 'French Polynesia', 'เฟรนช์โปลินีเซีย', 'PF'),
('QAT', 'Qatar', 'กาตาร์', 'QA'),
('REU', 'Réunion', 'เรอูนียง', 'RE'),
('ROU', 'Romania', 'โรมาเนีย', 'RO'),
('RUS', 'Russia', 'รัสเซีย', 'RU'),
('RWA', 'Rwanda', 'รวันดา', 'RW'),
('SAU', 'Saudi Arabia', 'ซาอุดิอาราเบีย', 'SA'),
('SDN', 'Sudan', 'ซูดาน', 'SD'),
('SEN', 'Senegal', 'เซเนกัล', 'SN'),
('SGP', 'Singapore', 'สิงคโปร์', 'SG'),
('SGS', 'South Georgia and the South Sandwich Islands', 'หมู่เกาะเซาท์จอร์เจียและหมู่เกาะเซาท์แซนด์วิช', 'GS'),
('SHN', 'Saint Helena', 'เซนต์เฮเลนา', 'SH'),
('SJM', 'Svalbard and Jan Mayen', 'สฟาลบาร์และยานไมเอน', 'SJ'),
('SLB', 'Solomon Islands', 'หมู่เกาะโซโลมอน', 'SB'),
('SLE', 'Sierra Leone', 'เซียร์ราลีโอน', 'SL'),
('SLV', 'El Salvador', 'เอลซัลวาดอร์', 'SV'),
('SMR', 'San Marino', 'ซานมาริโน', 'SM'),
('SOM', 'Somalia', 'โซมาเลีย', 'SO'),
('SPM', 'Saint Pierre and Miquelon', 'เซนต์ปิแอร์และมีเกอลง', 'PM'),
('SRB', 'Serbia', 'เซอร์เบีย', 'RS'),
('SSD', 'South Sudan', 'ซูดานใต้', 'SS'),
('STP', 'São Tomé and Príncipe', 'เซาตูเมและปรินซิปี', 'ST'),
('SUR', 'Suriname', 'ซูรินาเม', 'SR'),
('SVK', 'Slovakia', 'สโลวะเกีย', 'SK'),
('SVN', 'Slovenia', 'สโลวีเนีย', 'SI'),
('SWE', 'Sweden', 'สวีเดน', 'SE'),
('SWZ', 'Swaziland', 'สวาซิแลนด์', 'SZ'),
('SXM', 'Sint Maarten', 'เกาะเซนต์มาร์ติน', 'SX'),
('SYC', 'Seychelles', 'เซเชลส์', 'SC'),
('SYR', 'Syria', 'ซีเรีย', 'SY'),
('TCA', 'Turks and Caicos Islands', 'หมู่เกาะเติกส์และหมู่เกาะเคคอส', 'TC'),
('TCD', 'Chad', 'ชาด', 'TD'),
('TGO', 'Togo', 'โตโก', 'TG'),
('THA', 'Thailand', 'ไทย', 'TH'),
('TJK', 'Tajikistan', 'ทาจิกิสถาน', 'TJ'),
('TKL', 'Tokelau', 'โตเกเลา', 'TK'),
('TKM', 'Turkmenistan', 'เติร์กเมนิสถาน', 'TM'),
('TLS', 'East Timor', 'ติมอร์ตะวันออก', 'TL'),
('TON', 'Tonga', 'ตองกา', 'TO'),
('TTO', 'Trinidad and Tobago', 'ตรินิแดดและโตเบโก', 'TT'),
('TUN', 'Tunisia', 'ตูนิเซีย', 'TN'),
('TUR', 'Turkey', 'ตุรกี', 'TR'),
('TUV', 'Tuvalu', 'ตูวาลู', 'TV'),
('TWN', 'Taiwan', 'ไต้หวัน', 'TW'),
('TZA', 'Tanzania', 'แทนซาเนีย', 'TZ'),
('UGA', 'Uganda', 'ยูกันดา', 'UG'),
('UKR', 'Ukraine', 'ยูเครน', 'UA'),
('UMI', 'U.S. Minor Outlying Islands', 'เกาะนอกรีตของสหรัฐฯ', 'UM'),
('URY', 'Uruguay', 'อุรุกวัย', 'UY'),
('USA', 'United States', 'สหรัฐอเมริกา', 'US'),
('UZB', 'Uzbekistan', 'อุซเบกิสถาน', 'UZ'),
('VAT', 'Vatican City', 'เมืองวาติกัน', 'VA'),
('VCT', 'Saint Vincent and the Grenadines', 'เซนต์วินเซนต์และเกรนาดีนส์', 'VC'),
('VEN', 'Venezuela', 'เวเนซุเอลา', 'VE'),
('VGB', 'British Virgin Islands', 'หมู่เกาะบริติชเวอร์จิน', 'VG'),
('VIR', 'U.S. Virgin Islands', 'หมู่เกาะเวอร์จินของสหรัฐอเมริกา', 'VI'),
('VNM', 'Vietnam', 'เวียดนาม', 'VN'),
('VUT', 'Vanuatu', 'วานูอาตู', 'VU'),
('WLF', 'Wallis and Futuna', 'วาลลิสและฟุตูนา', 'WF'),
('WSM', 'Samoa', 'ซามัว', 'WS'),
('XKX', 'Kosovo', 'โคโซโว', 'XK'),
('YEM', 'Yemen', 'เยเมน', 'YE'),
('ZAF', 'South Africa', 'แอฟริกาใต้', 'ZA'),
('ZMB', 'Zambia', 'แซมเบีย', 'ZM'),
('ZWE', 'Zimbabwe', 'ประเทศซิมบับเว', 'ZW');

-- --------------------------------------------------------

--
-- Table structure for table `tb_facilities`
--

CREATE TABLE `tb_facilities` (
  `facilities_id` int(5) NOT NULL,
  `facilities_name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `facilities_name_th` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `facilities_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `facilities_detail_th` text COLLATE utf8_unicode_ci NOT NULL,
  `facilities_detail_en` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_facilities`
--

INSERT INTO `tb_facilities` (`facilities_id`, `facilities_name_en`, `facilities_name_th`, `facilities_img`, `facilities_detail_th`, `facilities_detail_en`) VALUES
(1, 'CONTACT', 'ติดต่อ ', 'blogger-336371_1920.jpg', 'คุณสามารถติดต่อทรู อินเทอร์เน็ตเพื่อสอบถาม                                   ', 'You can contact True. Internet to inquire'),
(2, 'Deliicious Foods', 'อาหารอร่อย', 'breakfast-1246686_1920.jpg', 'สด สะอาด อร่อย ปลอดภัย', 'We\'ve scoured the planet'),
(3, 'Security', 'ความปลอดภัย', 'hotel-1330850_1920.jpg', 'มีความปลอดภัยและเป็นอิสระ', 'Security is freedom from');

-- --------------------------------------------------------

--
-- Table structure for table `tb_facilities_head`
--

CREATE TABLE `tb_facilities_head` (
  `facilities_head_id` int(5) NOT NULL,
  `facilities_head_title_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `facilities_head_sub_title_en` text COLLATE utf8_unicode_ci NOT NULL,
  `facilities_head_title_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `facilities_head_sub_title_th` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_facilities_head`
--

INSERT INTO `tb_facilities_head` (`facilities_head_id`, `facilities_head_title_en`, `facilities_head_sub_title_en`, `facilities_head_title_th`, `facilities_head_sub_title_th`) VALUES
(1, 'FACILITIES', 't hotel urban hotel, sardinia A dynamic hotel with diversified amenities and activities, a vibrant approach to hospitality and contemporary elegant design. Our branding approach reflects the vitality of this urban hotel with a vibrant colour palette, clean design and engaging photography which highlights the sophistication and modern luxuries offered to the hotel guest.\r\n          ', 'สิ่งอำนวยความสะดวก', 'โรงแรมในเมืองซาร์ดิเนียโรงแรมที่มีชีวิตชีวาพร้อมสิ่งอำนวยความสะดวกและกิจกรรมที่หลากหลายวิธีการที่มีชีวิตชีวาในการต้อนรับและการออกแบบที่หรูหราร่วมสมัย วิธีการสร้างแบรนด์ของเราสะท้อนให้เห็นถึงความมีชีวิตชีวาของโรงแรมในเมืองแห่งนี้ด้วยโทนสีที่สดใสการออกแบบที่สะอาดตา ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `gallery_id` int(5) NOT NULL,
  `room_id` int(5) NOT NULL,
  `gallery_name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gallery_name_th` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gallery_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gallery_type_id` int(5) NOT NULL,
  `gallery_recommened` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_gallery`
--

INSERT INTO `tb_gallery` (`gallery_id`, `room_id`, `gallery_name_en`, `gallery_name_th`, `gallery_img`, `gallery_type_id`, `gallery_recommened`) VALUES
(1, 2, 'Deluxe Junior Suite', '', 'hotel-1330841_1920.jpg', 3, 1),
(2, 2, 'Deluxe Room', '', 'hotel-1979406_1920.jpg', 1, 0),
(3, 4, 'Deliicious foods555', '', '24012019095132240120190951321461156926.jpg', 2, 0),
(5, 3, '\r\nthe bridge', '', 'bangkok-1178693_1920.jpg', 3, 0),
(6, 5, 'labeang', 'ระเบียง', '06022019102358060220191023582031698422.JPG', 3, 0),
(7, 6, '', 'บันได', '06022019102406060220191024061847635412.JPG', 1, 0),
(8, 5, '', 'โครมไฟ', '0602201910241906022019102419791969612.JPG', 0, 0),
(10, 4, '', '', '0902201901001909022019010019821357893.jpg', 1, 0),
(11, 3, '', '', '0902201912275709022019122757501095111.jpg', 1, 0),
(12, 2, '', '', '0902201912281309022019122813400796524.jpg', 1, 0),
(13, 1, '', '', '1202201909441112022019094411637775352.jpg', 1, 0),
(14, 2, '', '', '12022019094416120220190944161579921432.jpg', 1, 0),
(15, 3, '', '', '1202201909442212022019094422270102934.jpg', 1, 0),
(16, 4, '', '', '12022019094428120220190944281628548374.jpg', 1, 0),
(17, 0, '', '', '12022019103820120220191038201992948178.jpg', 2, 0),
(18, 0, '', '', '1202201910390312022019103903412308061.jpg', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallery_head`
--

CREATE TABLE `tb_gallery_head` (
  `gallery_head_id` int(5) NOT NULL,
  `gallery_head_title_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gallery_head_title_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gallery_head_sub_title_th` text COLLATE utf8_unicode_ci NOT NULL,
  `gallery_head_sub_title_en` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_gallery_head`
--

INSERT INTO `tb_gallery_head` (`gallery_head_id`, `gallery_head_title_th`, `gallery_head_title_en`, `gallery_head_sub_title_th`, `gallery_head_sub_title_en`) VALUES
(1, 'GUNTHPAT PLACE', '', 'ค้นดูรูปภาพในแกลเลอรีของเราและเริ่มจินตนาการภาพวันหยุดพักผ่อนของท่านค้นดูรูปภาพในแกลเลอรีของเราและเริ่มจินตนาการภาพวันหยุดพักผ่อนของท่าน                                                                                                                                                                               ', 'Search for pictures in our gallery and start imagining your vacation. Look at the pictures in our gallery and start imagining your vacation.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallery_type`
--

CREATE TABLE `tb_gallery_type` (
  `gallery_type_id` int(5) NOT NULL,
  `gallery_type_name_th` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gallery_type_name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_gallery_type`
--

INSERT INTO `tb_gallery_type` (`gallery_type_id`, `gallery_type_name_th`, `gallery_type_name_en`) VALUES
(1, 'ที่พัก', 'room'),
(2, 'สิ่งอำนวยความสะดวก', 'facilities'),
(3, 'สิ่งแวดล้อมด้วยรอบ', 'please');

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `news_id` int(5) NOT NULL,
  `news_name_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `news_name_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `news_detail_en` text COLLATE utf8_unicode_ci NOT NULL,
  `news_detail_th` text COLLATE utf8_unicode_ci NOT NULL,
  `news_img` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `news_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`news_id`, `news_name_en`, `news_name_th`, `news_detail_en`, `news_detail_th`, `news_img`, `news_date`) VALUES
(1, 'It is a long established fact', 'พรรคอนาคตใหม่ก่อตั้งขึ้นโดยนายธนาธร จึงรุ่งเรืองกิจ', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'พรรคอนาคตใหม่ยึดมั่นในหลักประชาธิปไตย นิติรัฐ ศักดิ์ศรีความเป็นมนุษย์ สิทธิมนุษยชน ความเสมอภาคทางการเมือง เศรษฐกิจ และสังคม การกระจายอำนาจออกจากส่วนกลาง ความหลากหลายทางเพศ ความหลากหลายทางวัฒนธรรม ระบบเศรษฐกิจที่แข่งขันอย่างเสรีและเป็นธรรมปราศจากการผูกขาด การสร้างระบบสวัสดิการ การสร้างโอกาสให้แก่มนุษย์ในการดำรงชีวิตอย่างมีศักดิ์ศรีและมีคุณภาพตั้งแต่เกิดจนตาย และการพัฒนาอย่างยั่งยืนโดยคำนึงถึงทรัพยากรธรรมชาติและสิ่งแวดล้อม', '21022019102227210220191022271526931450.png', '2019-02-21 03:22:27'),
(2, 'Lorem Ipsum is simply dummy', 'ยื่นจดแจ้งชื่อจัดตั้งพรรคต่อคณะกรรมการการเลือกตั้งเมื่อวันพฤหัสบดีที่ 15 มีนาคม พ.ศ. 2561 โดยพรรคอนา', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'สามเหลี่ยมกลับหัว แสดงถึงการให้ความสำคัญกับประชาชนคนส่วนใหญ่ของประเทศ ลูกศรที่ชี้พุ่งขึ้นไป คือ การมุ่งหน้าไปสู่ “อนาคตใหม่” เครื่องหมายนี้จึงหมายถึง ประชาชนผู้ทรงอำนาจสูงสุดร่วมกันนำพาสังคมไทยก้าวไปสู่อนาคตใหม่   ', '2.jpg', '2019-02-21 02:48:47'),
(3, 'Contrary to popular belief', 'วันอาทิตย์ที่ 27 พฤษภาคม พ.ศ. 2561 พรรคอนาคตใหม่ได้จัดการประชุมใหญ่สามัญ ครั้งที่ 1 ที่ยิมเนเซียม 5 ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32', 'ตลอดช่วงทศวรรษที่ผ่านมาประเทศไทยวนเวียนอยู่ในความขัดแย้งทางการเมืองอย่างร้าวลึก กองทัพฉวยโอกาสเข้าครองอํานาจอยู่เสมอในยามที่บ้านเมืองมีวิกฤต ทำการรัฐประหารฉีกรัฐธรรมนูญซ้ำแล้วซ้ำเล่า โดยเฉลี่ยแทบจะทุกๆ 4 ปี ผู้คนต่างตกอยู่ในความรู้สึกหดหู่ สิ้นหวัง ไร้ทางออก การปกครองในระบอบประชาธิปไตยที่ประชาชนเป็นเจ้าของอำนาจสูงสุดไม่เคยถูกปล่อยให้เติบโต', '3.jpg', '2019-02-21 02:49:03'),
(4, 'Lorem Ipsum comes from sections', 'พรรคอนาคตใหม่ก่อตั้งขึ้นเพื่อมุ่งสร้างการเมืองแบบใหม่ ให้สังคมไทยตระหนักว่าการกลับสู่ประชาธิปไตยคือท', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32', 'ถึงเวลาแล้วที่จะต้องมีพลังใหม่เพื่อฟื้นความเชื่อมั่นในระบอบประชาธิปไตยให้กลับคืนมาอีกครั้ง นําพาประเทศไทยก้าวพ้นจากห้วงภาวะวิกฤติ นี่คือเหตุผลที่ทำให้เกิด \"พรรคอนาคตใหม่\" เพื่อสร้างประชาธิปไตยในประเทศ เพื่อเปลี่ยนแปลงและสร้างสรรค์สิ่งใหม่ที่ดีกว่าที่เป็นอยู่ และเพื่อปรับภูมิทัศน์การเมืองไทยให้ดีขึ้น', '4.jpg', '2019-02-21 02:49:07'),
(5, 'Lorem Ipsum is not simply random', 'เมื่อคนในชาติไม่อาจแสวงหาฉันทามติร่วมกันได้เพราะการเมืองไทยถูกแบ่งแยกออกเป็นฝักฝ่าย เราต่างถูกทำให้เ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32', 'พรรคอนาคตใหม่จะมุ่งนําเสนอนโยบายก้าวหน้า กระจายอํานาจ ทลายการผูกขาดทางเศรษฐกิจ และเปิดโอกาสให้ประชาชนเข้าถึงทุน ทรัพยากร และสวัสดิการ โดยนโยบายของพรรค จะเกิดจาก  การวิเคราะห์วิจัยทางวิชาการ การมีส่วนร่วมของประชาชน เข้ารับฟังปัญหาในแต่ละพื้นที่ การศึกษาเปรียบเทียบตัวแบบจากหลายประเทศ ในการดำเนินกิจกรรมทางการเมือง พรรคอนาคตใหม่มองพรรคการเมืองอื่นเป็นคู่แข่ง ไม่ใช่ศัตรูทางการเมือง โดยเรามุ่งที่จะเอาชนะใจประชาชนด้วยนโยบาย ไม่ใช่การทำลายล้างกันอย่างไม่เลือกวิธีการ', '5.jpg', '2019-02-21 02:49:14'),
(6, 'comes from sections', 'พรรคอนาคตใหม่จึงขอเป็นพลังที่จะฟื้นความเชื่อมั่นในระบอบประชาธิปไตยให้กลับคืนมาอีกครั้ง นำพาประเทศออก', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32', 'ผู้บริหารพรรคเพียงไม่กี่คนไม่อาจกําหนดความเป็นไปของพรรคได้ ไม่อาจกําหนดตัวผู้สมัครสมาชิกสภาผู้แทนราษฎร (ส.ส.) ได้ตามอําเภอใจ และที่สำคัญคือ เงินที่ได้จากการระดมทุน รายรับ รายจ่าย จะถูกนํามาเปิดเผยต่อสาธารณะเพื่อสร้างความโปร่งใสและ เปิดโอกาสให้สังคมตรวจสอบได้  เมื่อสมาชิกทุกคนร่วมเป็นเจ้าของพรรคร่วมกันแล้ว พวกเขาก็ย่อมมีอํานาจในการตัดสินใจ มีส่วนร่วมในการกําหนดทิศทางของพรรค ตามการออกแบบโครงสร้างและการดําเนินการที่อยู่บนพื้นฐานของหลักการประชาธิปไตย การมีส่วนร่วม และการกระจายอํานาจ', '6.jpg', '2019-02-21 02:49:21'),
(15, 'FUTURE FORWARD PARTY', 'พรรคอนาคตใหม่', 'The Future Forward Party was founded by Thanathorn Juangroongruangkit and Piyabutr Saengkanokkul upon the determination to restore democracy in Thailand. Its slogan promises the changes Thailand much deserves - “The Future Forward for Thailand with a brighter future,”. Future Forward’s main policy frameworks are; 1) reconstruction of laws, policies and regulations which hinder Thailand’s development and support monopoly capital, 2) reformation of budgets and resources by providing public welfare and decentralizing power to local authorities, and 3) reinforcement by  increasing people’s opportunities to access resources and capital in order to reach their potential for better life.', 'พรรคอนาคตใหม่ คือพรรคการเมืองที่เกิดจากการริเริ่มของ ธนาธร จึงรุ่งเรืองกิจ อดีตรองประธานกรรมการบริหารกลุ่มบริษัทไทยซัมมิท และ ปิยบุตร แสงกนกกุล อดีตนักวิชาการด้านนิติศาสตร์และอาจารย์มหาวิทยาลัยธรรมศาสตร์  ร่วมกับกลุ่มบุคคลที่ไม่เห็นด้วยกับการรัฐประหารซึ่งถือเป็นวิถีทางที่ไม่เป็นประชาธิปไตย อนาคตใหม่มุ่งมั่นทำงานการเมืองอย่างสร้างสรรค์โดยชูคำขวัญ “อนาคตใหม่ เพื่อประเทศไทยที่มีอนาคต” และเสนอแนวนโยบาย “3 ป.” คือ 1. ปลดล็อก กฎหมาย นโยบาย ระเบียบต่าง ๆ ที่ขัดขวางการพัฒนาประเทศและเอื้อต่อทุนผูกขาด 2. ปรับโครงสร้าง การจัดสรรงบประมาณและทรัพยากร มุ่งเน้นการกระจายอำนาจสู่ท้องถิ่น และ 3. เปิดโอกาส ให้ประชาชนเข้าถึงทรัพยากรต่าง ๆ  และใช้ศักยภาพดังกล่าวพาตัวเองไปสู่อนาคตใหม่ที่ดีขึ้น', '2102201910313121022019103131726865006.png', '2019-02-21 03:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_room`
--

CREATE TABLE `tb_room` (
  `room_id` int(5) NOT NULL,
  `room_type_id` int(5) NOT NULL,
  `room_name_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_sub_title_en` text COLLATE utf8_unicode_ci NOT NULL,
  `room_name_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_sub_title_th` text COLLATE utf8_unicode_ci NOT NULL,
  `room_price` decimal(10,2) NOT NULL,
  `room_amout` int(3) NOT NULL,
  `room_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `room_size_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_detail_1_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_detail_2_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_detail_3_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_facility_1_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_facility_2_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_size_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_detail_1_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_detail_2_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_detail_3_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_facility_1_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_facility_2_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_recommened` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_room`
--

INSERT INTO `tb_room` (`room_id`, `room_type_id`, `room_name_en`, `room_sub_title_en`, `room_name_th`, `room_sub_title_th`, `room_price`, `room_amout`, `room_img`, `room_size_th`, `room_detail_1_th`, `room_detail_2_th`, `room_detail_3_th`, `room_facility_1_th`, `room_facility_2_th`, `room_size_en`, `room_detail_1_en`, `room_detail_2_en`, `room_detail_3_en`, `room_facility_1_en`, `room_facility_2_en`, `room_recommened`) VALUES
(0, 3, 'Deluxe Room', 't hotel urban hotel, sardinia A dynamic hotel with diversified amenities and activities, a vibrant approach to hospitality and t hotel urban hotel, sardinia A dynamic hotel with diversified amenities and activities, a vibrant approach to hospitality and t hotel urban hotel, sardinia A dynamic hotel with diversified amenities and activities, a vibrant approach to hospitality and ', 'ห้องดีลักซ์', 't hotel urban hotel, sardinia โรงแรมแบบไดนามิกที่มีสิ่งอำนวยความสะดวกและกิจกรรมที่หลากหลายวิธีการที่มีชีวิตชีวาเพื่อการต้อนรับและ t โรงแรมในเมืองซาร์ดิเนียโรงแรมแบบไดนามิกที่มีสิ่งอำนวยความสะดวกและกิจกรรมที่หลากหลายวิธีการที่มีชีวิตชีวาเพื่อการต้อนรับและ t โรงแรมที่มีสิ่งอำนวยความสะดวกและกิจกรรมที่หลากหลายวิธีการที่มีชีวิตชีวาเพื่อการต้อนรับและ', '4050.00', 5, '22012019164823220120191648231602616181.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวเมืองหรือสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี', '38 square meters', '2 adults + 1 child', 'Private balcony', 'City or garden view', 'Room telephone service', 'Free WiFi service', 1),
(1, 2, 'Duluxe Junior Suite', 't hotel urban hotel, sardinia A dynamic hotel with diversified amenities and activities, a vibrant approach to hospitality and ', 'Deluxe Junior Suite', 't hotel urban hotel, sardinia โรงแรมแบบไดนามิกที่มีสิ่งอำนวยความสะดวกและกิจกรรมที่หลากหลายวิธีการที่มีชีวิตชีวาเพื่อการต้อนรับและ t โรงแรมในเมืองซาร์ดิเนียโรงแรมแบบไดนามิกที่มีสิ่งอำนวยความสะดวกและกิจกรรมที่หลากหลายวิธีการที่มีชีวิตชีวาเพื่อการต้อนรับและ t โรงแรมที่มีสิ่งอำนวยความสะดวกและกิจกรรมที่หลากหลายวิธีการที่มีชีวิตชีวาเพื่อการต้อนรับและ', '4150.00', 5, '002.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวห้องหรือสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี', '38 square meters', '2 adults + 1 child', 'Private balcony', 'City or garden view', 'Room telephone service', 'Free WiFi service', 1),
(2, 1, 'Deluxe River View Room', 't hotel urban hotel, sardinia A dynamic hotel with diversified amenities and activities, a vibrant approach to hospitality and ', 'ห้องดีลักซ์ริเวอร์วิว', 't hotel urban hotel, sardinia โรงแรมแบบไดนามิกที่มีสิ่งอำนวยความสะดวกและกิจกรรมที่หลากหลายวิธีการที่มีชีวิตชีวาเพื่อการต้อนรับและ t โรงแรมในเมืองซาร์ดิเนียโรงแรมแบบไดนามิกที่มีสิ่งอำนวยความสะดวกและกิจกรรมที่หลากหลายวิธีการที่มีชีวิตชีวาเพื่อการต้อนรับและ t โรงแรมที่มีสิ่งอำนวยความสะดวกและกิจกรรมที่หลากหลายวิธีการที่มีชีวิตชีวาเพื่อการต้อนรับและ', '5100.00', 5, '003.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวเมืองหรือสวน', 'บริการโทรศัพท์ฟรี', 'บริการ WiFi ฟรี ', '38 square meters', '2 adults + 1 child', 'Private balcony', 'City or garden view', 'Room telephone service', 'Free WiFi service', 1),
(3, 4, 'Anantara Riverfront Suite', 't hotel urban hotel, sardinia A dynamic hotel with diversified amenities and activities, a vibrant approach to hospitality and ', 'ห้องอนันตราริเวอร์ฟร้อนท์', 't hotel urban hotel, sardinia โรงแรมแบบไดนามิกที่มีสิ่งอำนวยความสะดวกและกิจกรรมที่หลากหลายวิธีการที่มีชีวิตชีวาเพื่อการต้อนรับและ t โรงแรมในเมืองซาร์ดิเนียโรงแรมแบบไดนามิกที่มีสิ่งอำนวยความสะดวกและกิจกรรมที่หลากหลายวิธีการที่มีชีวิตชีวาเพื่อการต้อนรับและ t โรงแรมที่มีสิ่งอำนวยความสะดวกและกิจกรรมที่หลากหลายวิธีการที่มีชีวิตชีวาเพื่อการต้อนรับและ', '6100.00', 5, '004.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวเมืองวิวสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี', '38 square meters', '2 adults + 1 child', 'Private balcony', 'City or garden view', 'Room telephone service', 'Free WiFi service', 0),
(4, 4, 'Dream Stateroom', 't hotel urban hotel, sardinia A dynamic hotel with diversified amenities and activities, a vibrant approach to hospitality and ', 'ห้องนอน', 't hotel urban hotel, sardinia โรงแรมแบบไดนามิกที่มีสิ่งอำนวยความสะดวกและกิจกรรมที่หลากหลายวิธีการที่มีชีวิตชีวาเพื่อการต้อนรับและ t โรงแรมในเมืองซาร์ดิเนียโรงแรมแบบไดนามิกที่มีสิ่งอำนวยความสะดวกและกิจกรรมที่หลากหลายวิธีการที่มีชีวิตชีวาเพื่อการต้อนรับและ t โรงแรมที่มีสิ่งอำนวยความสะดวกและกิจกรรมที่หลากหลายวิธีการที่มีชีวิตชีวาเพื่อการต้อนรับและ', '12000.00', 5, '005.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวเมืองหรือวสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี', '38 square meters', '2 adults + 1 child', 'Private balcony', 'City or garden view', 'Room telephone service', 'Free WiFi service', 0),
(5, 4, 'Family Suite', 't hotel urban hotel, sardinia A dynamic hotel with diversified amenities and activities, a vibrant approach to hospitality and ', 'ห้องสวีทสำหรับครอบครัว', 't hotel urban hotel, sardinia โรงแรมแบบไดนามิกที่มีสิ่งอำนวยความสะดวกและกิจกรรมที่หลากหลายวิธีการที่มีชีวิตชีวาเพื่อการต้อนรับและ t โรงแรมในเมืองซาร์ดิเนียโรงแรมแบบไดนามิกที่มีสิ่งอำนวยความสะดวกและกิจกรรมที่หลากหลายวิธีการที่มีชีวิตชีวาเพื่อการต้อนรับและ t โรงแรมที่มีสิ่งอำนวยความสะดวกและกิจกรรมที่หลากหลายวิธีการที่มีชีวิตชีวาเพื่อการต้อนรับและ', '9800.00', 5, '006.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน ', 'ระเบียงส่วนตัว', 'วิวเมืองหรือสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี', '38 square meters', '2 adults + 1 child', 'Private balcony', 'City or garden view', 'Room telephone service', 'Free WiFi service', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_room_type`
--

CREATE TABLE `tb_room_type` (
  `room_type_id` int(5) NOT NULL,
  `room_type_name_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_type_name_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_room_type`
--

INSERT INTO `tb_room_type` (`room_type_id`, `room_type_name_th`, `room_type_name_en`) VALUES
(1, 'ห้องดีลักซ์\n', 'Deluxe Room'),
(2, 'ห้องจูเนียร์สวีท\n', 'Deluxe Junior Suite'),
(3, 'ห้องนอน\n', 'Dream Stateroom'),
(4, 'ห้องสวีทสำหรับครอบครัว\n', 'Family Suite'),
(6, 'ธรรมะสวัสดี', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slide`
--

CREATE TABLE `tb_slide` (
  `slide_id` int(3) NOT NULL,
  `slide_img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slide_title_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slide_sub_title_en` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `slide_title_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slide_sub_title_th` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `slide_link` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_slide`
--

INSERT INTO `tb_slide` (`slide_id`, `slide_img`, `slide_title_en`, `slide_sub_title_en`, `slide_title_th`, `slide_sub_title_th`, `slide_link`) VALUES
(1, '06022019102303060220191023031740682243.jpg', 'Delux Room', 'other entity or phenomenon vulnerable to unwanted change by its environment.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ', 'ห้องดีลักซ์', 'เอนทิตีหรือปรากฏการณ์อื่น ๆ ที่เสี่ยงต่อการเปลี่ยนแปลงที่ไม่พึงประสงค์จากสภาพแวดล้อม', 'https://www.youtube.com/watch?v=1AszE9-ikOU'),
(2, '29012019110632290120191106321811532773.jpg', 'Dream Stateroom', 'other entity or phenomenon vulnerable to unwanted change by its environment.                                                                                                                      ', 'ห้องนอน', 'เอนทิตีหรือปรากฏการณ์อื่น ๆ ที่เสี่ยงต่อการเปลี่ยนแปลงที่ไม่พึงประสงค์จากสภาพแวดล้อม', 'https://youtu.be/JZKlSYWlW54'),
(3, '21022019141621210220191416211517055568.png', 'Future Forward Party พรรคอนาคตใหม่', 'The Future Forward Party was founded by Thanathorn Juangroongruangkit and Piyabutr Saengkanokkul upon the determination to restore democracy in Thailand. Its slogan promises the changes Thailand much deserves - “The Future Forward for Thailand with a brighter future,”', 'พรรคอนาคตใหม่พรรค', 'พรรคอนาคตใหม่ คือพรรคการเมืองที่เกิดจากการริเริ่มของ ธนาธร จึงรุ่งเรืองกิจ อดีตรองประธานกรรมการบริหารกลุ่มบริษัทไทยซัมมิท และ ปิยบุตร แสงกนกกุล อดีตนักวิชาการด้านนิติศาสตร์และอาจารย์มหาวิทยาลัยธรรมศาสตร์  ร่วมกับกลุ่มบุคคลที่ไม่เห็นด้วยกับการรัฐประหารซึ่งถือเป็นวิถีทางที่ไม่เป็นประชาธิปไตย อนาคตใหม่มุ่งมั่นทำงานการเมืองอย่างสร้างสรรค์โดยชูคำขวัญ “อนาคตใหม่ เพื่อประเทศไทยที่มีอนาคต” และเสนอแนวนโยบาย “3 ป.”', 'https://www.facebook.com/FWPthailand/');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `user_firstname` varchar(45) DEFAULT NULL,
  `user_lastname` varchar(45) DEFAULT NULL,
  `user_phone` varchar(20) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_facebook` varchar(200) NOT NULL,
  `user_line` varchar(100) NOT NULL,
  `user_username` varchar(45) DEFAULT NULL,
  `user_password` varchar(45) DEFAULT NULL,
  `user_address` varchar(200) DEFAULT NULL,
  `user_district` varchar(100) DEFAULT NULL,
  `user_amphur` varchar(100) DEFAULT NULL,
  `user_province` varchar(100) DEFAULT NULL,
  `user_zipcode` varchar(20) DEFAULT NULL,
  `user_image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_type_id`, `user_firstname`, `user_lastname`, `user_phone`, `user_email`, `user_facebook`, `user_line`, `user_username`, `user_password`, `user_address`, `user_district`, `user_amphur`, `user_province`, `user_zipcode`, `user_image`) VALUES
(2, 1, 'มนัสวี', 'เข่งพิมล', '0982189898', 'Manadswee@hotmail.com', 'www.facebook.com/manadsave', '098-218-9898', 'test', 'test123456', '68', 'บ้านใหม่', 'หนองบุญมาก', 'โคราช', '30410', 'nack.jpg'),
(3, 1, 'ส้มฉุน', 'เทกระโทก', '0899589651', 'Som@gmail.com', 'www.facebook.com/som', '089-958-9651', 'root', 'root123456', '215', 'เพ็กใหญ่', 'พล', 'ขอนแก่น', '10420', 'man667-8.jpg'),
(4, 2, 'ทดลอง', 'ทดลอง', '0859589654', 'test@gmail.com', 'www.facebook.com/test', '085-958-9654', 'admin', '123456', '698', 'ในเมือง', 'เมืองนครราชสีมา', 'นครราชสีมา', '30000', '25012019143620-24012019112916240120191129161102358359.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_type`
--

CREATE TABLE `tb_user_type` (
  `user_type_id` int(11) NOT NULL,
  `user_type_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user_type`
--

INSERT INTO `tb_user_type` (`user_type_id`, `user_type_name`) VALUES
(1, 'ผู้ดูเเล'),
(2, 'ผู้ใช้งาน');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_about_us`
--
ALTER TABLE `tb_about_us`
  ADD PRIMARY KEY (`about_us_id`);

--
-- Indexes for table `tb_book`
--
ALTER TABLE `tb_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tb_contact_head`
--
ALTER TABLE `tb_contact_head`
  ADD PRIMARY KEY (`contact_head_id`);

--
-- Indexes for table `tb_contact_title`
--
ALTER TABLE `tb_contact_title`
  ADD PRIMARY KEY (`contact_title_id`);

--
-- Indexes for table `tb_contact_type`
--
ALTER TABLE `tb_contact_type`
  ADD PRIMARY KEY (`contact_type_id`);

--
-- Indexes for table `tb_contact_us`
--
ALTER TABLE `tb_contact_us`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `tb_country`
--
ALTER TABLE `tb_country`
  ADD PRIMARY KEY (`ct_code`);

--
-- Indexes for table `tb_facilities`
--
ALTER TABLE `tb_facilities`
  ADD PRIMARY KEY (`facilities_id`);

--
-- Indexes for table `tb_facilities_head`
--
ALTER TABLE `tb_facilities_head`
  ADD PRIMARY KEY (`facilities_head_id`);

--
-- Indexes for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `tb_gallery_head`
--
ALTER TABLE `tb_gallery_head`
  ADD PRIMARY KEY (`gallery_head_id`);

--
-- Indexes for table `tb_gallery_type`
--
ALTER TABLE `tb_gallery_type`
  ADD PRIMARY KEY (`gallery_type_id`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tb_room`
--
ALTER TABLE `tb_room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `tb_room_type`
--
ALTER TABLE `tb_room_type`
  ADD PRIMARY KEY (`room_type_id`);

--
-- Indexes for table `tb_slide`
--
ALTER TABLE `tb_slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_user_type`
--
ALTER TABLE `tb_user_type`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_about_us`
--
ALTER TABLE `tb_about_us`
  MODIFY `about_us_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_book`
--
ALTER TABLE `tb_book`
  MODIFY `book_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `contact_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_contact_head`
--
ALTER TABLE `tb_contact_head`
  MODIFY `contact_head_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_contact_title`
--
ALTER TABLE `tb_contact_title`
  MODIFY `contact_title_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_contact_type`
--
ALTER TABLE `tb_contact_type`
  MODIFY `contact_type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_contact_us`
--
ALTER TABLE `tb_contact_us`
  MODIFY `contact_us_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_facilities`
--
ALTER TABLE `tb_facilities`
  MODIFY `facilities_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_facilities_head`
--
ALTER TABLE `tb_facilities_head`
  MODIFY `facilities_head_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `gallery_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tb_gallery_head`
--
ALTER TABLE `tb_gallery_head`
  MODIFY `gallery_head_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_gallery_type`
--
ALTER TABLE `tb_gallery_type`
  MODIFY `gallery_type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `news_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_room`
--
ALTER TABLE `tb_room`
  MODIFY `room_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_room_type`
--
ALTER TABLE `tb_room_type`
  MODIFY `room_type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_slide`
--
ALTER TABLE `tb_slide`
  MODIFY `slide_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_user_type`
--
ALTER TABLE `tb_user_type`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
