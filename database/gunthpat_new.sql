-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 02, 2019 at 03:43 PM
-- Server version: 10.2.15-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gunthpat_new`
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
(1, 'ABOUT GUNTHPAT PLACE', 'Gunthpat Place Luxurious apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc. Every room type is including 5&rsquo;bed, 2 Tables, 1TV stand, TV, Refrigerator, Closet, sink, bed light, etc, Gunthpat Place Luxurious apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc. Gunthpat Place Luxurious apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc.', 'เกี่ยวกับ กันตพัฒน์', 'กันตพัฒน์เพลส เป็นโรงแรมที่ตอบโจทย์ชีวิตคนรุ่นใหม่ ใกล้สิ่งอำนวยความสะดวกทุกที่ เพียงไม่กี่ก้าวจากเทสโก้โลตัส&nbsp;\r\n<div>โรงแรมประกอบไปด้วยห้องพัก 79 ห้องพร้อมสิ่งอำนวยความสะดวกครบครร หากคุณสนใจโรงแรมที่อยู่ใจกลางเมือง สะอาด ปลอดภัย และเดินทางสะดวกทุกที่ กันตพัฒน์เพลสคือ คำตอบที่ดีที่สุด<br />\r\n<br />\r\nระบบความปลอดภัย<br />\r\n- ระบบคีย์การ์ด (Key Card Access)<br />\r\n- ระบบเตือนอัคคีภัย (Smoke and Heat Alam)<br />\r\n- ระบบฉีดน้ำดับเพลิง (Sprinkler System)<br />\r\n- กล้องวงจนปิด CCTV 32 ตัว<br />\r\n- เจ้าหน้าที่รักษาความปลอดภัยตลอด 24 ชั่วโมง</div>\r\n', '25022019103315250220191033151014999630.jpg');

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
  `book_tel` varchar(200) NOT NULL,
  `book_recommened` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_book`
--

INSERT INTO `tb_book` (`book_id`, `book_firstname`, `book_lastname`, `book_person`, `room_id`, `book_date_start`, `book_date_end`, `book_tel`, `book_recommened`) VALUES
(2, 'บูรพา', 'ใจดี', 3, 2, '2019-03-15', '2019-03-18', '0856351254', 1),
(3, 'มนัสวี', 'เข่งพิมล', 3, 1, '2019-03-26', '2019-03-30', '0856415893', 1),
(4, 'สมชาย', 'ใจเด็ด', 2, 3, '2019-03-29', '2019-03-31', '0987452399', 0);

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
(3, '1', 'มนัสวี', 'เข่งพิมล', 'K.manadsawee1997@gmail.com', '0895412563', 'THA', '2', 'ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาที โปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน'),
(4, '10', 'ส้มฉุน', 'เทกระโทก', 'Som@gmail.com', '08785621563', 'THA', '1', 'Use the Airport Link service from Suvarnabhumi International Airport to Phayathai by serving every 20 minutes from 6.00 am to 24.00 pm, midnight by BTS sky train. Change the train at Siam Station And get off at Saphan Taksin Station. From there, you can use the passenger boat for free. By boat departing every 20 minutes, please inform the hotel in advance in order to let us know your travel style');

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
(1, 'ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาที โปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน', 'Use the Airport Link service from Suvarnabhumi International Airport to Phayathai by serving every 20 minutes from 6.00 am to 24.00 pm, midnight by BTS sky train. Change the train at Siam Station And get off at Saphan Taksin Station. From there, you can use the passenger boat for free. By boat departing every 20 minutes, please inform the hotel in advance in order to let us know your travel style');

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
(10, 'การเดินทาง', 'travel');

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
  `contact_us_img` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_contact_us`
--

INSERT INTO `tb_contact_us` (`contact_us_id`, `contact_us_title_en`, `contact_us_title_th`, `contact_us_sub_title_en`, `contact_us_sub_title_th`, `contact_us_facebook`, `contact_us_tel`, `contact_us_address_en`, `contact_us_address_th`, `contact_us_address_1_en`, `contact_us_address_1_th`, `contact_us_address_2_en`, `contact_us_address_2_th`, `contact_us_address_3_en`, `contact_us_address_3_th`, `contact_us_address_4`, `contact_us_fax`, `contact_us_email`, `contact_us_carry_title_th`, `contact_us_carry_title_en`, `contact_us_carry_detail_th`, `contact_us_carry_detail_en`, `contact_us_taxi_title_th`, `contact_us_taxi_title_en`, `contact_us_taxi_detail_th`, `contact_us_taxi_detail_en`, `contact_us_car_titel_th`, `contact_us_car_titel_en`, `contact_us_car_detail_th`, `contact_us_car_detail_en`, `contact_us_map`, `contact_us_map_latitude`, `contact_us_map_longitude`, `contact_us_img`, `contact_us_url`) VALUES
(8, 'GUNTHPAT PLACE', '', 'กันตพัฒน์เพลส เป็นโรงแรมที่ตอบโจทย์ชีวิตคนรุ่นใหม่ ใกล้สิ่งอำนวยความสะดวกทุกที่ เพียงไม่กี่ก้าวจากเทสโก้โลตัส \r\nโรงแรมประกอบไปด้วยห้องพัก 79 ห้องพร้อมสิ่งอำนวยความสะดวกครบครร หากคุณสนใจโรงแรมที่อยู่ใจกลางเมือง สะอาด ปลอดภัย และเดินทางสะดวกทุกที่ กันตพัฒน์เพลสคือ คำตอบที่ดีที่สุด', 'กันตพัฒน์เพลส เป็นโรงแรมที่ตอบโจทย์ชีวิตคนรุ่นใหม่ ใกล้สิ่งอำนวยความสะดวกทุกที่ เพียงไม่กี่ก้าวจากเทสโก้โลตัส \r\nโรงแรมประกอบไปด้วยห้องพัก 79 ห้องพร้อมสิ่งอำนวยความสะดวกครบครร หากคุณสนใจโรงแรมที่อยู่ใจกลางเมือง สะอาด ปลอดภัย และเดินทางสะดวกทุกที่ กันตพัฒน์เพลสคือ คำตอบที่ดีที่สุด', 'https://www.facebook.com/gunthpatplace', '0864653355', '263/3 Soi King-Sa wai rieng', '263/3 ซ.กิ่งสวายเรียง', 'Nai Muang', 'ต.ในเมือง', 'Muang', 'อ.เมือง', 'Nakhornratchasima ', 'จ.นครราชสีมา ', '30000', '086-465-3355 , 044-255222', 'gunthpatplace@hotmail.com', 'ระบบขนส่งสาธารณะ', 'Public transport', '           ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาทีโปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน          ', '         Use the Airport Link service from Suvarnabhumi International Airport to Phayathai by serving every 20 minutes from 6.00 am to 24.00 pm, midnight by BTS sky train. Change the train at Siam Station And get off at Saphan Taksin Station. From there, you can use the passenger boat for free. By boat departing every 20 minutes, please inform the hotel in advance in order to let us know your travel style         ', 'แท็กซี่โดยสาร', 'Passenger taxi', '         ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาทีโปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน          ', '         Use the Airport Link service from Suvarnabhumi International Airport to Phayathai by serving every 20 minutes from 6.00 am to 24.00 pm, midnight by BTS sky train. Change the train at Siam Station And get off at Saphan Taksin Station. From there, you can use the passenger boat for free. By boat departing every 20 minutes, please inform the hotel in advance in order to let us know your travel style         ', 'จักรยาน', 'ฺBicycle', '         ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาทีโปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน          ', '         Use the Airport Link service from Suvarnabhumi International Airport to Phayathai by serving every 20 minutes from 6.00 am to 24.00 pm, midnight by BTS sky train. Change the train at Siam Station And get off at Saphan Taksin Station. From there, you can use the passenger boat for free. By boat departing every 20 minutes, please inform the hotel in advance in order to let us know your travel style         ', 'https://www.google.com/maps/place/Gunthpat+Place/@14.9755388,102.070692,18.25z/data=!4m8!1m2!2m1!1sguthpat!3m4!1s0x311eb34d179b5b75:0xba3f08e9b53c348f!8m2!3d14.976385!4d102.0702457', '14.9763853', '102.0680571', 'http://support.revelsoft.co.th/gunthpat', 'http://support.revelsoft.co.th/gunthpat');

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
  `facilities_detail_en` text COLLATE utf8_unicode_ci NOT NULL,
  `facilities_detail_1_th` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `facilities_detail_1_en` text COLLATE utf8_unicode_ci NOT NULL,
  `facilities_detail_2_th` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `facilities_detail_2_en` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_facilities`
--

INSERT INTO `tb_facilities` (`facilities_id`, `facilities_name_en`, `facilities_name_th`, `facilities_img`, `facilities_detail_th`, `facilities_detail_en`, `facilities_detail_1_th`, `facilities_detail_1_en`, `facilities_detail_2_th`, `facilities_detail_2_en`) VALUES
(1, 'CONTACT', 'ติดต่อ', '25022019102641250220191026411309051608.jpg', 'คุณสามารถติดต่อทรู อินเทอร์เน็ตเพื่อสอบถาม', 'You can contact True. Internet to inquire', 'อาหารเช้า', 'Breakfast', 'ร้านกาแฟ ', 'Coffee Shop'),
(2, 'Deliicious Foods', 'อาหารอร่อย', '2502201910262825022019102628215980504.jpg', 'สด สะอาด อร่อย ปลอดภัย', 'We\'ve scoured the planet', 'ระเบียงสระน้ำ', 'Pool Terrace', ' สแน็คบาร์ ', ' Snack Bar');

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
(1, 'FACILITIES', 'Gunthpat Place Luxurious apartment right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp; Every room type is including 5&rsquo;bed, 2 Tables, 1TV stand, TV, Refrigerator, Closet, sink, bed light, etc,', 'สิ่งอำนวยความสะดวก', '<strong>อพาร์ทเม้นท์</strong>&nbsp;7 ชั้นหรูหรากับระบบความปลอดภัยเต็มรูปแบบ กับความสะดวกสบายด้วย<strong>บริการ</strong>ลิฟต์ 2&nbsp;&nbsp; ตัว &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โล่งโปร่งสบาย ด้วยโถง สกายไลท์ ตรงกลาง พร้อมน้ำพุ กับแหล่งช้อปปิ้ง ที่รายล้อม ทั้ง ห้างเดอะมอลล์ และเพียงเดินไม่กี่ก้าวถึงก็เทสโก้ โลตัส และสิ่งอำนวยความสะดวกอื่นๆอีกมากมาย&nbsp;');

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
  `gallery_recommened` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_gallery`
--

INSERT INTO `tb_gallery` (`gallery_id`, `room_id`, `gallery_name_en`, `gallery_name_th`, `gallery_img`, `gallery_type_id`, `gallery_recommened`) VALUES
(73, 3, '', '', '2502201910083625022019100836438480414.jpg', 1, 0),
(74, 3, '', '', '2502201910104625022019101046387324539.jpg', 1, 0),
(75, 3, '', '', '25022019101056250220191010561136095918.jpg', 1, 0),
(76, 4, '', '', '2502201910112325022019101123995880074.jpg', 1, 0),
(77, 4, '', '', '25022019101129250220191011291755025076.jpg', 1, 0),
(78, 4, '', '', '25022019101138250220191011381678424283.jpg', 1, 0),
(79, 5, '', '', '2502201910131825022019101318268529490.jpg', 1, 0),
(80, 5, '', '', '25022019101325250220191013252101346826.jpg', 1, 0),
(81, 5, '', '', '2502201910133725022019101337430281988.jpg', 1, 0),
(82, 5, '', '', '25022019101346250220191013461501730277.jpg', 1, 0),
(83, 6, '', '', '25022019101424250220191014241872757038.jpg', 1, 0),
(84, 6, '', '', '25022019101432250220191014321971392185.jpg', 1, 0),
(85, 6, '', '', '2502201910144125022019101441733081807.jpg', 1, 0),
(86, 6, '', '', '2502201910145225022019101452516482876.jpg', 1, 0),
(87, 6, '', '', '25022019101500250220191015001412921835.jpg', 1, 0),
(88, 6, '', '', '25022019101522250220191015221915472082.jpg', 1, 0),
(89, 6, '', '', '2502201910153025022019101530897634579.jpg', 1, 0),
(90, 6, '', '', '2502201910153625022019101536615834232.jpg', 1, 0),
(91, 7, '', '', '2502201910163325022019101633500386015.jpg', 1, 0),
(92, 7, '', '', '25022019101650250220191016501150396699.jpg', 1, 0),
(93, 7, '', '', '25022019101700250220191017001221878408.jpg', 1, 0),
(94, 7, '', '', '2502201910172225022019101722702926937.jpg', 1, 0),
(95, 7, '', '', '2502201910173225022019101732278179736.jpg', 1, 0),
(96, 7, '', '', '2502201910174025022019101740670657180.jpg', 1, 0),
(97, 7, '', '', '25022019101747250220191017472122401495.jpg', 1, 0),
(98, 1, '', '', '25022019102424250220191024241401611789.jpg', 1, 0),
(99, 1, '', '', '2502201910243825022019102438856998109.jpg', 1, 0),
(100, 1, '', '', '25022019102444250220191024441052291951.jpg', 1, 0),
(101, 1, '', '', '25022019102449250220191024491061769751.jpg', 1, 0),
(102, 2, '', '', '25022019102509250220191025091309215879.jpg', 1, 0),
(103, 2, '', '', '25022019102528250220191025282012699770.jpg', 1, 0),
(104, 2, '', '', '25022019102534250220191025341736472152.jpg', 1, 0),
(105, 2, '', '', '2502201910254125022019102541153788185.jpg', 1, 0),
(106, 2, '', '', '25022019102547250220191025471608105076.jpg', 1, 0),
(107, 2, '', '', '25022019102552250220191025521223472777.jpg', 1, 0);

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
(1, '\nกันตพัฒน์ เพลส', 'GUNTHPAT PLACE', 'กันทภัทรเพลสอพาร์ทเมนท์สุดหรูตั้งอยู่ด้านหลังเทสโก้โลตัสพร้อมอาคารระบบความปลอดภัยเต็มรูปแบบแวดล้อมไปด้วยสถานที่อำนวยความสะดวกมากมายเช่น THE MALL โรงพยาบาลกรุงเทพ - นครราชสีมาโรงเรียนธนาคาร ฯลฯ ห้องพักทุกห้องประกอบด้วยเตียง 5 เตียง 2 โต๊ะ 1 ทีวี, ทีวี, ตู้เย็น, ตู้เสื้อผ้า, อ่างล้าง, ไฟเตียง, ฯลฯ', '\n                    Gunthpat Place Luxurious apartment is located right behind Tesco-Lotus with the full safety\n                    system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima\n                    Hospital, Schools, Bank etc. Every room type is including 5’bed, 2 Tables, 1TV stand, TV,\n                    Refrigerator, Closet, sink, bed light, etc,');

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
  `news_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`news_id`, `news_name_en`, `news_name_th`, `news_detail_en`, `news_detail_th`, `news_img`, `news_date`) VALUES
(2, 'Lorem Ipsum is simply dummy', 'ช่วยคุณเชื่อมต่อและแชร์กับผู้คนมากมายรอบตัวคุณ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'ช่วยคุณเชื่อมต่อและแชร์กับผู้คนมากมายรอบตัวคุณ', '27022019160538270220191605381657898721.jpg', '2019-02-27 09:05:38'),
(3, 'Contrary to popular belief', 'ช่วยคุณเชื่อมต่อและแชร์กับผู้คนมากมายรอบตัวคุณ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32', 'ช่วยคุณเชื่อมต่อและแชร์กับผู้คนมากมายรอบตัวคุณ', '27022019160557270220191605571448911591.jpg', '2019-02-27 09:05:57'),
(4, 'Lorem Ipsum comes from sections', 'ช่วยคุณเชื่อมต่อและแชร์กับผู้คนมากมายรอบตัวคุณ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32', 'ช่วยคุณเชื่อมต่อและแชร์กับผู้คนมากมายรอบตัวคุณ', '27022019160602270220191606021294086212.jpg', '2019-02-27 09:06:02'),
(5, 'Lorem Ipsum is not simply random', 'ช่วยคุณเชื่อมต่อและแชร์กับผู้คนมากมายรอบตัวคุณ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32', 'ช่วยคุณเชื่อมต่อและแชร์กับผู้คนมากมายรอบตัวคุณ', '27022019160612270220191606121102645078.jpg', '2019-02-27 09:06:12'),
(6, 'comes from sections', 'ช่วยคุณเชื่อมต่อและแชร์กับผู้คนมากมายรอบตัวคุณ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32', 'ช่วยคุณเชื่อมต่อและแชร์กับผู้คนมากมายรอบตัวคุณ', '2702201916064127022019160641895406138.jpg', '2019-02-27 09:06:41'),
(15, 'FUTURE FORWARD PARTY', ' ช่วยคุณเชื่อมต่อและแชร์กับผู้คนมากมายรอบตัวคุณ', 'The Future Forward Party was founded by Thanathorn Juangroongruangkit and Piyabutr Saengkanokkul upon the determination to restore democracy in Thailand. Its slogan promises the changes Thailand much deserves - “The Future Forward for Thailand with a brighter future,”. Future Forward’s main policy frameworks are; 1) reconstruction of laws, policies and regulations which hinder Thailand’s development and support monopoly capital, 2) reformation of budgets and resources by providing public welfare and decentralizing power to local authorities, and 3) reinforcement by  increasing people’s opportunities to access resources and capital in order to reach their potential for better life.', ' ช่วยคุณเชื่อมต่อและแชร์กับผู้คนมากมายรอบตัวคุณ', '22022019171515220220191715151003901661.jpg', '2019-02-25 07:32:36');

-- --------------------------------------------------------

--
-- Table structure for table `tb_page`
--

CREATE TABLE `tb_page` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(100) NOT NULL,
  `page_title_th` varchar(100) DEFAULT NULL,
  `page_title_en` varchar(100) DEFAULT NULL,
  `page_tag_th` text DEFAULT NULL,
  `page_tag_en` text DEFAULT NULL,
  `page_description_th` text DEFAULT NULL,
  `page_description_en` text DEFAULT NULL,
  `page_image` varchar(200) NOT NULL,
  `updateby` int(11) DEFAULT NULL,
  `lastupdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_page`
--

INSERT INTO `tb_page` (`page_id`, `page_name`, `page_title_th`, `page_title_en`, `page_tag_th`, `page_tag_en`, `page_description_th`, `page_description_en`, `page_image`, `updateby`, `lastupdate`) VALUES
(1, 'index', 'GUNTHPAT-หน้าหลัก', 'GUNTHPAT-HOME PAGE ', 'หน้าหลัก', 'HOME PAGE', 'หน้าหลัก', 'HOME PAGE', '', 4, '2019-03-01 16:15:51'),
(2, 'about', 'GUNTHPAT-เกี่ยวกับเรา', 'GUNTHPAT-ABOUT', 'GUNTHPAT-เกี่ยวกับเรา', 'GUNTHPAT-ABOUT', 'GUNTHPAT-เกี่ยวกับเรา', 'GUNTHPAT-ABOUT', '', 4, '2019-03-01 16:16:07'),
(3, 'room', 'GUNTHPAT-ห้อง', 'GUNTHPAT-ROOM', 'GUNTHPAT-ห้อง', 'GUNTHPAT-ROOM', 'GUNTHPAT-ห้อง', 'GUNTHPAT-ROOM', '', 4, '2019-03-01 16:16:28'),
(4, 'facilities', 'GUNTHPAT-สิ่งอำนวยความสะดวก', 'GUNTHPAT-FACILITIES', 'GUNTHPAT-สิ่งอำนวยความสะดวก', 'GUNTHPAT-FACILITIES', 'GUNTHPAT-สิ่งอำนวยความสะดวก', 'GUNTHPAT-FACILITIES', '', 1, '2018-10-29 10:06:12'),
(5, 'gallery', 'GUNTHPAT-แกลเลอรี่', 'GUNTHPAT-GALLERY', 'GUNTHPAT แกลเลอรี่', 'GUNTHPAT-GALLERY', 'GUNTHPAT แกลเลอรี่', 'GUNTHPAT-GALLERY', '', 1, '2018-10-29 10:06:25'),
(6, 'contact', 'GUNTHPAT-ติดต่อเรา', 'GUNTHPAT-CONTACT', 'GUNTHPAT-ติดต่อเรา', 'GUNTHPAT-CONTACT', 'GUNTHPAT-ติดต่อเรา', 'GUNTHPAT-CONTACT', '', 1, '2018-10-29 10:07:01');

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
  `room_price_th` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `room_price_en` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `room_amout` int(3) DEFAULT NULL,
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
  `room_recommened` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_room`
--

INSERT INTO `tb_room` (`room_id`, `room_type_id`, `room_name_en`, `room_sub_title_en`, `room_name_th`, `room_sub_title_th`, `room_price_th`, `room_price_en`, `room_amout`, `room_img`, `room_size_th`, `room_detail_1_th`, `room_detail_2_th`, `room_detail_3_th`, `room_facility_1_th`, `room_facility_2_th`, `room_size_en`, `room_detail_1_en`, `room_detail_2_en`, `room_detail_3_en`, `room_facility_1_en`, `room_facility_2_en`, `room_recommened`) VALUES
(1, 3, ' Studio Room', 'ห้องพื้นที่ 25 ตารางเมตร&nbsp;<br />\r\nห้องนอน 1 ห้อง / ห้องน้ำ 1 ห้อง&nbsp;<br />\r\n* ห้องมุมพร้อมโซฟาเล็ก(เพิ่ม) 300 บาท<br />\r\n* ราคาดังกล่าวเป็นราคาสำหรับทำสัญญาตั้งแต่ 6 เดือนขึ้นไปเท่านั้น', 'ห้องสตูดิโอ', 'ห้องพื้นที่ 25 ตารางเมตร&nbsp;<br />\r\nห้องนอน 1 ห้อง / ห้องน้ำ 1 ห้อง&nbsp;<br />\r\n* ห้องมุมพร้อมโซฟาเล็ก(เพิ่ม) 300 บาท<br />\r\n* ราคาดังกล่าวเป็นราคาสำหรับทำสัญญาตั้งแต่ 6 เดือนขึ้นไปเท่านั้น', '6,000.00/เดือน', '', 0, '12062019163146120620191631461519589887.jpg', '25 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน', 'ระเบียงส่วนตัว', 'WIFI', 'โทรศัพท์', 'เครื่องปรับอากาศ', '25 square meters ', '2 adults ', 'Balcony', 'WIFI', 'TEL', 'AIR', 0),
(2, 1, 'Deluxe Room', 'ห้องพื้นที่ 28 - 32 ตารางเมตร<br />\r\n*ราคาดังกล่าวเป็นราคาสำหรับทำสัญญาตั้งแต่ 6 เดือนขึ้นไปเท่านั้น', 'ห้องดีลักซ์', 'ห้องพื้นที่ 28 - 32 ตารางเมตร<br />\r\n*ราคาดังกล่าวเป็นราคาสำหรับทำสัญญาตั้งแต่ 6 เดือนขึ้นไปเท่านั้น', '8,500.00 /เดือน', '8500.00', 0, '2502201910243025022019102430306583624.jpg', '28-32 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน ', '', 'WIFI', 'โทรศัพท์', 'เครื่องปรับอากาศ', '28-32 square meters ', '2 adults ', '', 'WIFI', 'TEL', 'AIR', 1),
(3, 6, 'VIP Room', 'ห้องขนาดกว้าง ขนาด 50 ตารางเมตร แยกเป็นสัดส่วน<br />\r\nห้องนอน 1 ห้อง / ห้องรับแขก 1 ห้อง / ห้องน้ำ 2 ห้อง&nbsp;<br />\r\n*ราคานี้รวมแพ็คเกจเซอร์วิสแล้ว<br />\r\n*ราคาดังกล่าวเป็นราคาสำหรับทำสัญญาตั้งแต่ 6 เดือนขึ้นไปเท่านั้น', 'ห้องวีไอพี', 'ห้องขนาดกว้าง ขนาด 50 ตารางเมตร แยกเป็นสัดส่วน<br />\r\nห้องนอน 1 ห้อง / ห้องรับแขก 1 ห้อง / ห้องน้ำ 2 ห้อง&nbsp;<br />\r\n*ราคานี้รวมแพ็คเกจเซอร์วิสแล้ว<br />\r\n*ราคาดังกล่าวเป็นราคาสำหรับทำสัญญาตั้งแต่ 6 เดือนขึ้นไปเท่านั้น<br />\r\n&nbsp;', '21,000.00/เดือน', '', 0, '25022019101706250220191017061801809049.jpg', '50 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน ', 'ระเบียงส่วนตัว', 'WIFI', 'โทรศัพท์', 'เครื่องปรับอากาศ', '50 square meters ', '2 adults ', 'Balcony', 'WIFI', 'TEL', 'AIR', 1),
(4, 2, 'President Room', 'ห้องขนาด 50 ตารางเมตร&nbsp;แบ่งเป็นสัดส่วน<br />\r\nห้องนอน 1 ห้อง / ห้องรับแขก 1 ห้อง / ห้องน้ำ 2 ห้อง<br />\r\nตกแต่งด้วยพื้นไม้ปาเก้และเพดานสูงโปร่งถึง 5 เมตร<br />\r\n*ราคานี้รวมแพ็คเกจเซอร์วิสแล้ว<br />\r\n*ฟรีที่จอดรถภายในตึก<br />\r\n*ราคาดังกล่าวเป็นราคาสำหรับทำสัญญาตั้งแต่ 6 เดือนขึ้นไปเท่านั้น', 'ห้องเพรสซิเดนท์', 'ห้องขนาด 50 ตารางเมตร&nbsp;แบ่งเป็นสัดส่วน<br />\r\nห้องนอน 1 ห้อง / ห้องรับแขก 1 ห้อง / ห้องน้ำ 2 ห้อง<br />\r\nตกแต่งด้วยพื้นไม้ปาเก้และเพดานสูงโปร่งถึง 5 เมตร<br />\r\n*ราคานี้รวมแพ็คเกจเซอร์วิสแล้ว<br />\r\n*ฟรีที่จอดรถภายในตึก<br />\r\n*ราคาดังกล่าเป็นราคาสำหรับทำสัญญาตั้งแต่ 6 เดือนขึ้นไปเท่านั้น', '27,000.00 / เดือน', '', 0, '25022019102519250220191025191353715690.jpg', '50 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน ', 'ระเบียงส่วนตัว', 'WIFI', 'โทรศัพท์', 'เครื่องปรับอากาศ', '50 square meters ', '2 adults ', 'Balcony', 'WIFI', 'TEL', 'AIR', 1),
(5, 4, 'Super President Room', 'ห้องสวีท พาโนรามาวิว อยู่ชั้นที่สูงที่สุดของโรงแรม ตกแต่งด้วยไม้สักและเพดานสูงโปร่งโอ่โถงสูงถึง 5 เมตร<br />\r\nห้องขนาด 50 ตารางเมตร&nbsp;แบ่งเป็นสัดส่วน<br />\r\nห้องนอน 1 ห้อง / ห้องรับแขก 1 ห้อง / ห้องน้ำ 1 ห้อง<br />\r\n*ราคานี้รวมแพ็คเกจเซอร์วิสแล้ว<br />\r\n*ฟรีที่จอดรถภายในตึก<br />\r\n*ราคาดังกล่าวเป็นราคาสำหรับสัญญาตั้งแต่ 6 เดือนขึ้นไปเท่านั้น', ' ห้องซูเปอร์เพรสซิเดนท์', 'ห้องสวีท พาโนรามาวิว อยู่ชั้นที่สูงที่สุดของโรงแรม ตกแต่งด้วยไม้สักและเพดานสูงโปร่งโอ่โถงสูงถึง 5 เมตร<br />\r\nห้องขนาด 50 ตารางเมตร&nbsp;แบ่งเป็นสัดส่วน<br />\r\nห้องนอน 1 ห้อง / ห้องรับแขก 1 ห้อง / ห้องน้ำ 1 ห้อง<br />\r\n*ราคานี้รวมแพ็คเกจเซอร์วิสแล้ว<br />\r\n*ฟรีที่จอดรถภายในตึก<br />\r\n*ราคาดังกล่าวเป็นราคาสำหรับทำสัญญาตั้งแต่ 6 เดือนขึ้นไปเท่านั้น', '29,000.00 / เดือน', '', 0, '25022019101508250220191015081684846739.jpg', '50 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน', 'ระเบียงส่วนตัว', 'WIFI', 'โทรศัพท์', 'เครื่องปรับอากาศ', '50 square meters ', '2 adults ', 'Balcony', 'WIFI', 'TEL', 'AIR', 1);

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
(2, ' ห้องเพรสซิเดนท์', 'President Room'),
(3, 'ห้องสตูดิโอ', 'Studio Room  '),
(4, ' ห้องซูเปอร์เพรสซิเดนท์', 'Super President Room'),
(6, 'ห้องวีไอพี', 'VIP Room');

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
(1, '2406201920240924062019202409829127291.jpg', 'GUNTHPAT PLACE', 'A place to experience and enjoy life\r\n', 'กันตพัฒน์ เพลส', 'โรงแรมที่ตอบโจทย์ชีวิตคนเมือง ใกล้ทุกที่ เพียงไม่กี่ก้าวจาก Tesco Lotus', ''),
(4, '2406201920242424062019202424770602860.jpg', 'GUNTHPAT PLACE', 'A place to experience and enjoy life\r\n', 'กันตพัฒน์ เพลส', 'หรูหรากับระบบความปลอดภัยเต็มรูปแบบ', '');

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
(2, 1, 'มนัสวี', 'เข่งพิมล', '0982189898', 'Manadswee@hotmail.com', 'www.facebook.com/manadsave', '098-218-9898', 'test', 'test123456', '68', 'บ้านใหม่', 'หนองบุญมาก', 'โคราช', '30410', '22022019150245-deluxe4.jpg'),
(4, 2, 'ทดลอง', 'ทดลอง', '0859589654', 'test@gmail.com', 'www.facebook.com/test', '085-958-9654', 'admin', '123456', '698', 'ในเมือง', 'เมืองนครราชสีมา', 'นครราชสีมา', '30000', '27022019160246270220191602461295722946.jpg');

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
-- Indexes for table `tb_page`
--
ALTER TABLE `tb_page`
  ADD PRIMARY KEY (`page_id`);

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
  MODIFY `book_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `contact_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_contact_head`
--
ALTER TABLE `tb_contact_head`
  MODIFY `contact_head_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_contact_title`
--
ALTER TABLE `tb_contact_title`
  MODIFY `contact_title_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_contact_type`
--
ALTER TABLE `tb_contact_type`
  MODIFY `contact_type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_contact_us`
--
ALTER TABLE `tb_contact_us`
  MODIFY `contact_us_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_facilities`
--
ALTER TABLE `tb_facilities`
  MODIFY `facilities_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_facilities_head`
--
ALTER TABLE `tb_facilities_head`
  MODIFY `facilities_head_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `gallery_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `tb_gallery_head`
--
ALTER TABLE `tb_gallery_head`
  MODIFY `gallery_head_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_gallery_type`
--
ALTER TABLE `tb_gallery_type`
  MODIFY `gallery_type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `news_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_page`
--
ALTER TABLE `tb_page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_room`
--
ALTER TABLE `tb_room`
  MODIFY `room_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_room_type`
--
ALTER TABLE `tb_room_type`
  MODIFY `room_type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_slide`
--
ALTER TABLE `tb_slide`
  MODIFY `slide_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user_type`
--
ALTER TABLE `tb_user_type`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
