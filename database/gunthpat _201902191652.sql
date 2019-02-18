-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 18, 2019 at 09:51 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gunthpat`
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
(4, ';ikp6mT', 'gmdiT\\Fmsd', 2, 4, '0000-00-00', '0000-00-00', '0999989988');

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
(2, 'สถานที่ ', 'location'),
(3, '', '');

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
(2, 'ด่วนมาก ๆ', 'Very quick'),
(3, 'ด่วน', 'quick'),
(4, 'ปานกลาง', 'medium'),
(8, 'ครับ', '555');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact_us`
--

CREATE TABLE `tb_contact_us` (
  `contact_us_id` int(5) NOT NULL,
  `contact_us_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_sub_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_facebook` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_tel` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_address_4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_fax` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_carry_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_carry_detail` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_taxi_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_taxi_detail` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_car_titel` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_car_detail` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_map` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_map_latitude` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_map_longitude` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_img` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_contact_us`
--

INSERT INTO `tb_contact_us` (`contact_us_id`, `contact_us_title`, `contact_us_sub_title`, `contact_us_facebook`, `contact_us_tel`, `contact_us_address`, `contact_us_address_1`, `contact_us_address_2`, `contact_us_address_3`, `contact_us_address_4`, `contact_us_fax`, `contact_us_email`, `contact_us_carry_title`, `contact_us_carry_detail`, `contact_us_taxi_title`, `contact_us_taxi_detail`, `contact_us_car_titel`, `contact_us_car_detail`, `contact_us_map`, `contact_us_map_latitude`, `contact_us_map_longitude`, `contact_us_img`) VALUES
(8, 'GUNTHPAT PLACE', 'Gunthpat Place Luxurious apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc.     Every room type is including 5’bed, 2 Tables, 1TV stand, TV, Refrigerator, Closet, sink, bed light, etc,', 'https://www.facebook.com/gunthpatplace', '098-652-9851', '263/3 Soi King-Sa wai rieng', 'Nai Muang', 'Muang', 'Nakhornratchasima ', '30000', '098-652-9851, 025-658-965', 'gunthpatplace@hotmail.com', 'ระบบขนส่งสาธารณะ', 'ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาทีโปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน', 'แท็กซี่โดยสาร', 'ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาทีโปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน', 'รถรับส่งของโรงแรม', 'ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาทีโปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน', 'https://www.google.com/maps/place/Gunthpat+Place/@14.9755388,102.070692,18.25z/data=!4m8!1m2!2m1!1sguthpat!3m4!1s0x311eb34d179b5b75:0xba3f08e9b53c348f!8m2!3d14.976385!4d102.0702457', '14.9763853', '102.0680571', '06022019102446060220191024461752050763.jpg');

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
  `facilities_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `facilities_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `facilities_detail` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_facilities`
--

INSERT INTO `tb_facilities` (`facilities_id`, `facilities_name`, `facilities_img`, `facilities_detail`) VALUES
(1, 'CONTACT', 'blogger-336371_1920.jpg', 'คุณสามารถติดต่อทรู อินเทอร์เน็ตเพื่อสอบถาม                                                  '),
(2, 'Deliicious Foods', 'breakfast-1246686_1920.jpg', 'We\'ve scoured the planet'),
(3, 'Security', 'hotel-1330850_1920.jpg', 'Security is freedom from');

-- --------------------------------------------------------

--
-- Table structure for table `tb_facilities_head`
--

CREATE TABLE `tb_facilities_head` (
  `facilities_head_id` int(5) NOT NULL,
  `facilities_head_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `facilities_head_sub_title` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_facilities_head`
--

INSERT INTO `tb_facilities_head` (`facilities_head_id`, `facilities_head_title`, `facilities_head_sub_title`) VALUES
(1, 'FACILITIES', 't hotel urban hotel, sardinia A dynamic hotel with diversified amenities and activities, a vibrant approach to hospitality and contemporary elegant design. Our branding approach reflects the vitality of this urban hotel with a vibrant colour palette, clean design and engaging photography which highlights the sophistication and modern luxuries offered to the hotel guest.                                        555                    ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `gallery_id` int(5) NOT NULL,
  `room_id` int(5) NOT NULL,
  `gallery_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gallery_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gallery_type_id` int(5) NOT NULL,
  `gallery_recommened` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_gallery`
--

INSERT INTO `tb_gallery` (`gallery_id`, `room_id`, `gallery_name`, `gallery_img`, `gallery_type_id`, `gallery_recommened`) VALUES
(1, 2, 'Deluxe Junior Suiteแอปแอ', 'hotel-1330841_1920.jpg', 3, 1),
(2, 2, 'Deluxe Room', 'hotel-1979406_1920.jpg', 1, 0),
(3, 4, 'Deliicious foods555', '24012019095132240120190951321461156926.jpg', 2, 0),
(5, 3, '\r\nthe bridge', 'bangkok-1178693_1920.jpg', 3, 0),
(6, 5, 'ระเบียง', '06022019102358060220191023582031698422.JPG', 3, 0),
(7, 6, 'บันได', '06022019102406060220191024061847635412.JPG', 1, 0),
(8, 5, 'โครมไฟ', '0602201910241906022019102419791969612.JPG', 0, 0),
(10, 4, '', '0902201901001909022019010019821357893.jpg', 1, 0),
(11, 3, '', '0902201912275709022019122757501095111.jpg', 1, 0),
(12, 2, '', '0902201912281309022019122813400796524.jpg', 1, 0),
(13, 1, '', '1202201909441112022019094411637775352.jpg', 1, 0),
(14, 2, '', '12022019094416120220190944161579921432.jpg', 1, 0),
(15, 3, '', '1202201909442212022019094422270102934.jpg', 1, 0),
(16, 4, '', '12022019094428120220190944281628548374.jpg', 1, 0),
(17, 0, '', '12022019103820120220191038201992948178.jpg', 2, 0),
(18, 0, '', '1202201910390312022019103903412308061.jpg', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallery_head`
--

CREATE TABLE `tb_gallery_head` (
  `gallery_head_id` int(5) NOT NULL,
  `gallery_head_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gallery_head_sub_title` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_gallery_head`
--

INSERT INTO `tb_gallery_head` (`gallery_head_id`, `gallery_head_title`, `gallery_head_sub_title`) VALUES
(1, 'GUNTHPAT PLACE', 'ค้นดูรูปภาพในแกลเลอรีของเราและเริ่มจินตนาการภาพวันหยุดพักผ่อนของท่านค้นดูรูปภาพในแกลเลอรีของเราและเริ่มจินตนาการภาพวันหยุดพักผ่อนของท่าน                                                                                                                                                                                                                        ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallery_type`
--

CREATE TABLE `tb_gallery_type` (
  `gallery_type_id` int(5) NOT NULL,
  `gallery_type_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_gallery_type`
--

INSERT INTO `tb_gallery_type` (`gallery_type_id`, `gallery_type_name`) VALUES
(1, 'ที่พัก'),
(2, 'สิ่งอำนวยความสะดวก'),
(3, 'สิ่งแวดล้อมด้วยรอบ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `news_id` int(5) NOT NULL,
  `news_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `news_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `news_img` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `news_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`news_id`, `news_name`, `news_detail`, `news_img`, `news_date`) VALUES
(1, 'asdasd2313212313dsfsdfsdfsdfsdfsdfdsd sfsdfsdfsdfsdfdsfsdfdsfsdfsdf', '...................654', '07022019041715070220190417151608639458.jpg', '2019-02-06 21:17:15'),
(2, '012135498798456478555555555555555555555555', ' hotel with diversified amenities and activities, a vibrant approach to hospitality and contemporary elegant design. ', '002.jpg', '2019-02-01 02:42:27'),
(3, 'อดพหกดหฟกดไำdsfsdfา่กหนวฟเรหิวฟนไรัะยนืะยวนำฟพคหะวนไำืตอะีบฟัเร', 'asd asda asdasdas a sda d asd  asddas ', '003.JPEG', '2019-02-01 02:42:34'),
(6, 'asddddddddsdasasddddddddsdas', 'dasdasdasdasddddddddsdasasddddddddsdasasddddddddsdasasddddddddsdasasddddddddsdasasddddddddsdas', '01022019101435010220191014351733412206.jpg', '2019-02-01 03:14:35'),
(7, 'asddddddddsdasasddddddddsdasasddddddddsdasasddddddddsdas', 'asddddddddsdasasddddddddsdasasddddddddsdasasddddddddsdasasddddddddsdas', '0102201910144101022019101441387420410.jpg', '2019-02-01 03:14:41'),
(8, 'asddddddddsdasasddddddddsdasasddddddddsdasasddddddddsdasasddddddddsdas', 'asddddddddsdasasddddddddsdasasddddddddsdasasddddddddsdasasddddddddsdas', '01022019101452010220191014521651620911.jpg', '2019-02-01 03:14:52'),
(9, 'asddddddddsdasasddddddddsdasasddddddddsdasasddddddddsdasasddddddddsdas', 'asddddddddsdasasddddddddsdasasddddddddsdasasddddddddsdasasddddddddsdasasddddddddsdas', '01022019101459010220191014591567592487.jpg', '2019-02-01 03:14:59'),
(10, 'asddddddddsdasasddddddddsdasasddddddddsdasasddddddddsdas', 'asddddddddsdasasddddddddsdasasddddddddsdasasddddddddsdas', '01022019101534010220191015341069330167.jpg', '2019-02-01 03:15:34'),
(11, '&& $i<8 && $i<8 && $i<8 && $i<8 && $i<8 && $i<8 && $i<8 && $i<8 && $i<8 && $i<8', '&& $i<8 && $i<8 && $i<8 && $i<8 && $i<8 && $i<8 && $i<8 && $i<8 && $i<8 && $i<8 && $i<8 && $i<8', '01022019101906010220191019061285735738.jpg', '2019-02-01 03:19:06'),
(12, '', '', '0902201912292209022019122922832766719.jpg', '2019-02-09 05:29:22'),
(13, '', '', '0902201912294109022019122941656539029.jpg', '2019-02-09 05:29:41'),
(14, '', '', '0902201912295509022019122955635910088.jpg', '2019-02-09 05:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `tb_room`
--

CREATE TABLE `tb_room` (
  `room_id` int(5) NOT NULL,
  `room_type_id` int(5) NOT NULL,
  `room_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_sub_title` text COLLATE utf8_unicode_ci NOT NULL,
  `room_price` decimal(10,2) NOT NULL,
  `room_amout` int(3) NOT NULL,
  `room_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `room_size` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_detail_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_detail_2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_detail_3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_facility_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_facility_2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_recommened` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_room`
--

INSERT INTO `tb_room` (`room_id`, `room_type_id`, `room_name`, `room_sub_title`, `room_price`, `room_amout`, `room_img`, `room_size`, `room_detail_1`, `room_detail_2`, `room_detail_3`, `room_facility_1`, `room_facility_2`, `room_recommened`) VALUES
(0, 4, 'Deluxe Room', 't hotel urban hotel, sardinia A dynamic hotel with diversified amenities and activities, a vibrant approach to hospitality and t hotel urban hotel, sardinia A dynamic hotel with diversified amenities and activities, a vibrant approach to hospitality and t hotel urban hotel, sardinia A dynamic hotel with diversified amenities and activities, a vibrant approach to hospitality and ', '4050.00', 5, '22012019164823220120191648231602616181.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวเมืองหรือสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี', 1),
(1, 4, 'Duluxe Junior Suite', 't hotel urban hotel, sardinia A dynamic hotel with diversified amenities and activities, a vibrant approach to hospitality and ', '4150.00', 5, '002.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวห้องหรือสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี', 1),
(2, 4, 'Deluxe River View Room', 't hotel urban hotel, sardinia A dynamic hotel with diversified amenities and activities, a vibrant approach to hospitality and ', '5100.00', 5, '003.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวเมืองหรือสวน', 'บริการโทรศัพท์ฟรี', 'บริการ WiFi ฟรี ', 1),
(3, 4, 'Anantara Riverfront Suite', 't hotel urban hotel, sardinia A dynamic hotel with diversified amenities and activities, a vibrant approach to hospitality and ', '6100.00', 5, '004.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวเมืองวิวสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี', 0),
(4, 4, 'Dream Stateroom', 't hotel urban hotel, sardinia A dynamic hotel with diversified amenities and activities, a vibrant approach to hospitality and ', '12000.00', 5, '005.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวเมืองหรือวสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี', 0),
(5, 4, 'Family Suite', 't hotel urban hotel, sardinia A dynamic hotel with diversified amenities and activities, a vibrant approach to hospitality and ', '9800.00', 5, '006.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน ', 'ระเบียงส่วนตัว', 'วิวเมืองหรือสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_room_type`
--

CREATE TABLE `tb_room_type` (
  `room_type_id` int(5) NOT NULL,
  `room_type_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_room_type`
--

INSERT INTO `tb_room_type` (`room_type_id`, `room_type_name`) VALUES
(1, 'Deluxe Room'),
(2, 'Deluxe Junior Suite'),
(3, 'Dream Stateroom'),
(4, 'Family Suite');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slide`
--

CREATE TABLE `tb_slide` (
  `slide_id` int(3) NOT NULL,
  `slide_img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slide_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slide_sub_title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `slide_link` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_slide`
--

INSERT INTO `tb_slide` (`slide_id`, `slide_img`, `slide_title`, `slide_sub_title`, `slide_link`) VALUES
(1, '06022019102303060220191023031740682243.jpg', 'Delux Room', 'other entity or phenomenon vulnerable to unwanted change by its environment.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ', 'https://www.youtube.com/watch?v=1AszE9-ikOU'),
(2, '29012019110632290120191106321811532773.jpg', 'Dream Stateroom', 'other entity or phenomenon vulnerable to unwanted change by its environment.                                                                                                                      ', 'https://youtu.be/JZKlSYWlW54');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slide_header`
--

CREATE TABLE `tb_slide_header` (
  `slide_header_id` int(5) NOT NULL,
  `slide_header_title` varchar(200) NOT NULL,
  `slide_header_title_2` varchar(200) NOT NULL,
  `slide_header_title_3` varchar(200) NOT NULL,
  `slide_header_video` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_slide_header`
--

INSERT INTO `tb_slide_header` (`slide_header_id`, `slide_header_title`, `slide_header_title_2`, `slide_header_title_3`, `slide_header_video`) VALUES
(1, 'asd', 'asd', 'asda', 'sdasda'),
(2, '', '', '', '');

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
(4, 2, 'ทดลอง', 'ทดลอง', '0859589654', 'test@gmail.com', 'www.facebook.com/test', '085-958-9654', 'admin', '123456', '698', 'ในเมือง', 'เมืองนครราชสีมา', 'นครราชสีมา', '30000', '25012019143620-24012019112916240120191129161102358359.jpg'),
(8, 1, 'manadsawee', 'Kh', '0878969854', 'Mix@gmail.com', 'manadsawee', '0878546951', 'test4', 'test123456', '25/1-2 Suranarai Road Soi 15', 'Muang Nakhonratchasima', 'เมือง', 'nakhonratchasima', '30000', '25012019145745-24012019113007240120191130071053170768.jpg');

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
-- Indexes for table `tb_slide_header`
--
ALTER TABLE `tb_slide_header`
  ADD PRIMARY KEY (`slide_header_id`);

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
  MODIFY `contact_title_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_contact_type`
--
ALTER TABLE `tb_contact_type`
  MODIFY `contact_type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_contact_us`
--
ALTER TABLE `tb_contact_us`
  MODIFY `contact_us_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_facilities`
--
ALTER TABLE `tb_facilities`
  MODIFY `facilities_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_facilities_head`
--
ALTER TABLE `tb_facilities_head`
  MODIFY `facilities_head_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `gallery_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
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
  MODIFY `news_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_room`
--
ALTER TABLE `tb_room`
  MODIFY `room_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_room_type`
--
ALTER TABLE `tb_room_type`
  MODIFY `room_type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_slide`
--
ALTER TABLE `tb_slide`
  MODIFY `slide_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_slide_header`
--
ALTER TABLE `tb_slide_header`
  MODIFY `slide_header_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
