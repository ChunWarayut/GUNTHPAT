-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2019 at 04:08 AM
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
(1, 'ABOUT GUNTHPAT PLACE', 'Gunthpat Place Luxurious apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc. Every room type is including 5’bed, 2 Tables, 1TV stand, TV, Refrigerator, Closet, sink, bed light, etc, Gunthpat Place Luxurious apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc. \r\n\r\nGunthpat Place Luxurious apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc.                                                                                                                                                                                                                                ', 'เกี่ยวกับ กันตพัฒน์', ' กันตพัฒน์ เพลส เซอร์วิส อพาร์ทเม้นท์ 7 ชั้น ใจกลางเมือง โคราช หรูหรากับระบบความปลอดภัยเต็มรูปแบบ กับความสะดวกสบายด้วยบริการลิฟต์ 2 ตัว โล่งโปร่งสบาย         ด้วยโถงสกายไลท์ ตรงกลาง พร้อมน้ำพุ กับแหล่งช้อปปิ้ง ที่รายล้อม ทั้ง ห้างเดอะมอลล์ และเพียงเดินไม่กี่ก้าวถึงก็เทสโก้ โลตัส และสิ่งอำนวยความสะดวกอื่นๆ อีกมากมาย', '25022019103315250220191033151014999630.jpg');

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
  `contact_us_img` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_contact_us`
--

INSERT INTO `tb_contact_us` (`contact_us_id`, `contact_us_title_en`, `contact_us_title_th`, `contact_us_sub_title_en`, `contact_us_sub_title_th`, `contact_us_facebook`, `contact_us_tel`, `contact_us_address_en`, `contact_us_address_th`, `contact_us_address_1_en`, `contact_us_address_1_th`, `contact_us_address_2_en`, `contact_us_address_2_th`, `contact_us_address_3_en`, `contact_us_address_3_th`, `contact_us_address_4`, `contact_us_fax`, `contact_us_email`, `contact_us_carry_title_th`, `contact_us_carry_title_en`, `contact_us_carry_detail_th`, `contact_us_carry_detail_en`, `contact_us_taxi_title_th`, `contact_us_taxi_title_en`, `contact_us_taxi_detail_th`, `contact_us_taxi_detail_en`, `contact_us_car_titel_th`, `contact_us_car_titel_en`, `contact_us_car_detail_th`, `contact_us_car_detail_en`, `contact_us_map`, `contact_us_map_latitude`, `contact_us_map_longitude`, `contact_us_img`) VALUES
(8, 'GUNTHPAT PLACE', '', 'Gunthpat Place Luxurious apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc.     Every room type is including 5’bed, 2 Tables, 1TV stand, TV, Refrigerator, Closet, sink, bed light, etc, ', ' เซอร์วิส อพาร์ทเม้นท์ 7 ชั้น ใจกลางเมือง โคราช หรูหรากับระบบความปลอดภัยเต็มรูปแบบ กับความสะดวกสบายด้วยบริการลิฟต์ 2 ตัว โล่งโปร่งสบาย         ด้วยโถงสกายไลท์ ตรงกลาง พร้อมน้ำพุ กับแหล่งช้อปปิ้ง ที่รายล้อม ทั้ง ห้างเดอะมอลล์ และเพียงเดินไม่กี่ก้าวถึงก็เทสโก้ โลตัส และสิ่งอำนวยความสะดวกอื่นๆ อีกมากมาย ', 'https://www.facebook.com/gunthpatplace', '0864653355', '263/3 Soi King-Sa wai rieng', '263/3 ซ.กิ่งสวายเรียง', 'Nai Muang', 'ต.ในเมือง', 'Muang', 'อ.เมือง', 'Nakhornratchasima ', 'จ.นครราชสีมา ', '30000', '044-255-617', 'gunthpatplace@hotmail.com', 'ระบบขนส่งสาธารณะ', 'Public transport', '   ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาทีโปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน  ', ' Use the Airport Link service from Suvarnabhumi International Airport to Phayathai by serving every 20 minutes from 6.00 am to 24.00 pm, midnight by BTS sky train. Change the train at Siam Station And get off at Saphan Taksin Station. From there, you can use the passenger boat for free. By boat departing every 20 minutes, please inform the hotel in advance in order to let us know your travel style ', 'แท็กซี่โดยสาร', 'Passenger taxi', ' ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาทีโปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน  ', ' Use the Airport Link service from Suvarnabhumi International Airport to Phayathai by serving every 20 minutes from 6.00 am to 24.00 pm, midnight by BTS sky train. Change the train at Siam Station And get off at Saphan Taksin Station. From there, you can use the passenger boat for free. By boat departing every 20 minutes, please inform the hotel in advance in order to let us know your travel style ', 'รถรับส่งของโรงแรม', 'Hotel shuttle', ' ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาทีโปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน  ', ' Use the Airport Link service from Suvarnabhumi International Airport to Phayathai by serving every 20 minutes from 6.00 am to 24.00 pm, midnight by BTS sky train. Change the train at Siam Station And get off at Saphan Taksin Station. From there, you can use the passenger boat for free. By boat departing every 20 minutes, please inform the hotel in advance in order to let us know your travel style ', 'https://www.google.com/maps/place/Gunthpat+Place/@14.9755388,102.070692,18.25z/data=!4m8!1m2!2m1!1sguthpat!3m4!1s0x311eb34d179b5b75:0xba3f08e9b53c348f!8m2!3d14.976385!4d102.0702457', '14.9763853', '102.0680571', '25022019103349250220191033491896032191.jpg');

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
(1, 'CONTACT', 'ติดต่อ ', '25022019102641250220191026411309051608.jpg', 'คุณสามารถติดต่อทรู อินเทอร์เน็ตเพื่อสอบถาม                                   ', 'You can contact True. Internet to inquire', 'อาหารเช้า', 'Breakfast', 'ร้านกาแฟ ', 'Coffee Shop'),
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
(107, 2, '', '', '25022019102552250220191025521223472777.jpg', 1, 0),
(108, 0, '', '', '2502201910355825022019103558141688695.jpg', 2, 0),
(109, 0, '', '', '2502201910365025022019103650356943488.jpg', 2, 0),
(110, 0, '', '', '2502201910511725022019105117574581508.jpg', 2, 0),
(111, 0, '', '', '25022019105128250220191051281502938188.jpg', 2, 0),
(112, 0, '', '', '2502201910513625022019105136103212463.jpg', 1, 0),
(113, 0, '', '', '2502201910514425022019105144500975071.jpg', 2, 0),
(114, 0, '', '', '2502201910515825022019105158962726843.jpg', 1, 0),
(115, 0, '', '', '2502201910521025022019105210722948669.jpg', 1, 0),
(116, 0, '', '', '25022019105252250220191052521101579715.jpg', 3, 0),
(117, 0, '', '', '25022019105304250220191053041358450328.jpg', 3, 0),
(118, 0, '', '', '2502201910531525022019105315106884089.jpg', 3, 0),
(119, 0, '', '', '25022019105325250220191053252111188276.jpg', 3, 0),
(120, 0, '', '', '2502201910533525022019105335132845646.jpg', 3, 0),
(121, 0, '', '', '25022019105345250220191053451926242244.jpg', 3, 0),
(122, 0, '', '', '25022019105358250220191053581737134534.jpg', 3, 0),
(123, 0, '', '', '2502201910540925022019105409559893591.jpg', 3, 0),
(124, 1, '', '', '25022019105423250220191054231059075937.jpg', 3, 0),
(125, 0, '', '', '2502201910544525022019105445325475771.jpg', 3, 0),
(126, 0, '', '', '2502201910545325022019105453870102385.jpg', 3, 0),
(127, 1, '', '', '25022019105504250220191055041199304537.jpg', 3, 0),
(128, 0, '', '', '25022019105532250220191055321569221245.jpg', 3, 0),
(129, 0, '', '', '2502201910554225022019105542548156350.jpg', 3, 0);

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
  `news_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`news_id`, `news_name_en`, `news_name_th`, `news_detail_en`, `news_detail_th`, `news_img`, `news_date`) VALUES
(2, 'Lorem Ipsum is simply dummy', 'ยื่นจดแจ้งชื่อจัดตั้งพรรคต่อคณะกรรมการการเลือกตั้งเมื่อวันพฤหัสบดีที่ 15 มีนาคม พ.ศ. 2561 โดยพรรคอนา', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'สามเหลี่ยมกลับหัว แสดงถึงการให้ความสำคัญกับประชาชนคนส่วนใหญ่ของประเทศ ลูกศรที่ชี้พุ่งขึ้นไป คือ การมุ่งหน้าไปสู่ “อนาคตใหม่” เครื่องหมายนี้จึงหมายถึง ประชาชนผู้ทรงอำนาจสูงสุดร่วมกันนำพาสังคมไทยก้าวไปสู่อนาคตใหม่   ', '2.jpg', '2019-02-21 02:48:47'),
(3, 'Contrary to popular belief', 'วันอาทิตย์ที่ 27 พฤษภาคม พ.ศ. 2561 พรรคอนาคตใหม่ได้จัดการประชุมใหญ่สามัญ ครั้งที่ 1 ที่ยิมเนเซียม 5 ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32', 'ตลอดช่วงทศวรรษที่ผ่านมาประเทศไทยวนเวียนอยู่ในความขัดแย้งทางการเมืองอย่างร้าวลึก กองทัพฉวยโอกาสเข้าครองอํานาจอยู่เสมอในยามที่บ้านเมืองมีวิกฤต ทำการรัฐประหารฉีกรัฐธรรมนูญซ้ำแล้วซ้ำเล่า โดยเฉลี่ยแทบจะทุกๆ 4 ปี ผู้คนต่างตกอยู่ในความรู้สึกหดหู่ สิ้นหวัง ไร้ทางออก การปกครองในระบอบประชาธิปไตยที่ประชาชนเป็นเจ้าของอำนาจสูงสุดไม่เคยถูกปล่อยให้เติบโต', '3.jpg', '2019-02-21 02:49:03'),
(4, 'Lorem Ipsum comes from sections', 'พรรคอนาคตใหม่ก่อตั้งขึ้นเพื่อมุ่งสร้างการเมืองแบบใหม่ ให้สังคมไทยตระหนักว่าการกลับสู่ประชาธิปไตยคือท', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32', 'ถึงเวลาแล้วที่จะต้องมีพลังใหม่เพื่อฟื้นความเชื่อมั่นในระบอบประชาธิปไตยให้กลับคืนมาอีกครั้ง นําพาประเทศไทยก้าวพ้นจากห้วงภาวะวิกฤติ นี่คือเหตุผลที่ทำให้เกิด \"พรรคอนาคตใหม่\" เพื่อสร้างประชาธิปไตยในประเทศ เพื่อเปลี่ยนแปลงและสร้างสรรค์สิ่งใหม่ที่ดีกว่าที่เป็นอยู่ และเพื่อปรับภูมิทัศน์การเมืองไทยให้ดีขึ้น', '4.jpg', '2019-02-21 02:49:07'),
(5, 'Lorem Ipsum is not simply random', 'เมื่อคนในชาติไม่อาจแสวงหาฉันทามติร่วมกันได้เพราะการเมืองไทยถูกแบ่งแยกออกเป็นฝักฝ่าย เราต่างถูกทำให้เ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32', 'พรรคอนาคตใหม่จะมุ่งนําเสนอนโยบายก้าวหน้า กระจายอํานาจ ทลายการผูกขาดทางเศรษฐกิจ และเปิดโอกาสให้ประชาชนเข้าถึงทุน ทรัพยากร และสวัสดิการ โดยนโยบายของพรรค จะเกิดจาก  การวิเคราะห์วิจัยทางวิชาการ การมีส่วนร่วมของประชาชน เข้ารับฟังปัญหาในแต่ละพื้นที่ การศึกษาเปรียบเทียบตัวแบบจากหลายประเทศ ในการดำเนินกิจกรรมทางการเมือง พรรคอนาคตใหม่มองพรรคการเมืองอื่นเป็นคู่แข่ง ไม่ใช่ศัตรูทางการเมือง โดยเรามุ่งที่จะเอาชนะใจประชาชนด้วยนโยบาย ไม่ใช่การทำลายล้างกันอย่างไม่เลือกวิธีการ', '5.jpg', '2019-02-21 02:49:14'),
(6, 'comes from sections', 'พรรคอนาคตใหม่จึงขอเป็นพลังที่จะฟื้นความเชื่อมั่นในระบอบประชาธิปไตยให้กลับคืนมาอีกครั้ง นำพาประเทศออก', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32', 'ผู้บริหารพรรคเพียงไม่กี่คนไม่อาจกําหนดความเป็นไปของพรรคได้ ไม่อาจกําหนดตัวผู้สมัครสมาชิกสภาผู้แทนราษฎร (ส.ส.) ได้ตามอําเภอใจ และที่สำคัญคือ เงินที่ได้จากการระดมทุน รายรับ รายจ่าย จะถูกนํามาเปิดเผยต่อสาธารณะเพื่อสร้างความโปร่งใสและ เปิดโอกาสให้สังคมตรวจสอบได้  เมื่อสมาชิกทุกคนร่วมเป็นเจ้าของพรรคร่วมกันแล้ว พวกเขาก็ย่อมมีอํานาจในการตัดสินใจ มีส่วนร่วมในการกําหนดทิศทางของพรรค ตามการออกแบบโครงสร้างและการดําเนินการที่อยู่บนพื้นฐานของหลักการประชาธิปไตย การมีส่วนร่วม และการกระจายอํานาจ', '6.jpg', '2019-02-21 02:49:21'),
(15, 'FUTURE FORWARD PARTY', 'พรรคอนาคตใหม่', 'The Future Forward Party was founded by Thanathorn Juangroongruangkit and Piyabutr Saengkanokkul upon the determination to restore democracy in Thailand. Its slogan promises the changes Thailand much deserves - “The Future Forward for Thailand with a brighter future,”. Future Forward’s main policy frameworks are; 1) reconstruction of laws, policies and regulations which hinder Thailand’s development and support monopoly capital, 2) reformation of budgets and resources by providing public welfare and decentralizing power to local authorities, and 3) reinforcement by  increasing people’s opportunities to access resources and capital in order to reach their potential for better life.', 'พรรคอนาคตใหม่ คือพรรคการเมืองที่เกิดจากการริเริ่มของ ธนาธร จึงรุ่งเรืองกิจ อดีตรองประธานกรรมการบริหารกลุ่มบริษัทไทยซัมมิท และ ปิยบุตร แสงกนกกุล อดีตนักวิชาการด้านนิติศาสตร์และอาจารย์มหาวิทยาลัยธรรมศาสตร์  ร่วมกับกลุ่มบุคคลที่ไม่เห็นด้วยกับการรัฐประหารซึ่งถือเป็นวิถีทางที่ไม่เป็นประชาธิปไตย อนาคตใหม่มุ่งมั่นทำงานการเมืองอย่างสร้างสรรค์โดยชูคำขวัญ “อนาคตใหม่ เพื่อประเทศไทยที่มีอนาคต” และเสนอแนวนโยบาย “3 ป.” คือ 1. ปลดล็อก กฎหมาย นโยบาย ระเบียบต่าง ๆ ที่ขัดขวางการพัฒนาประเทศและเอื้อต่อทุนผูกขาด 2. ปรับโครงสร้าง การจัดสรรงบประมาณและทรัพยากร มุ่งเน้นการกระจายอำนาจสู่ท้องถิ่น และ 3. เปิดโอกาส ให้ประชาชนเข้าถึงทรัพยากรต่าง ๆ  และใช้ศักยภาพดังกล่าวพาตัวเองไปสู่อนาคตใหม่ที่ดีขึ้น', '22022019171515220220191715151003901661.jpg', '2019-02-22 10:15:15');

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
(1, 1, 'Deluxe Room', 'apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc. Every room type is including 5’bed, 2 Tables, 1TV stand, TV, Refrigerator, Closet, sink, bed light, etc,', 'ห้องดีลักซ์', 'อพาร์ทเมนท์สุดหรูตั้งอยู่ด้านหลังเทสโก้โลตัสพร้อมอาคารระบบความปลอดภัยเต็มรูปแบบแวดล้อมไปด้วยสถานที่อำนวยความสะดวกมากมายเช่น THE MALL โรงพยาบาลกรุงเทพ - นครราชสีมาโรงเรียนธนาคาร ฯลฯ ห้องพักทุกห้องประกอบด้วยเตียง 5 เตียง 2 โต๊ะ 1 ทีวี, ทีวี, ตู้เย็น, ตู้เสื้อผ้า, อ่างล้าง, ไฟเตียง, ฯลฯ', '2500.00', 5, '2502201910243025022019102430306583624.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวห้องหรือสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี', '38 square meters ', '2 adults + 1 child', 'Private balcony', 'City or garden view ', 'Room telephone service', 'Free WiFi service', 0),
(2, 2, 'President Room', 'apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc. Every room type is including 5’bed, 2 Tables, 1TV stand, TV, Refrigerator, Closet, sink, bed light, etc,', 'ห้องประธานาธิบดี', 'อพาร์ทเมนท์สุดหรูตั้งอยู่ด้านหลังเทสโก้โลตัสพร้อมอาคารระบบความปลอดภัยเต็มรูปแบบแวดล้อมไปด้วยสถานที่อำนวยความสะดวกมากมายเช่น THE MALL โรงพยาบาลกรุงเทพ - นครราชสีมาโรงเรียนธนาคาร ฯลฯ ห้องพักทุกห้องประกอบด้วยเตียง 5 เตียง 2 โต๊ะ 1 ทีวี, ทีวี, ตู้เย็น, ตู้เสื้อผ้า, อ่างล้าง, ไฟเตียง, ฯลฯ', '3000.00', 5, '25022019102519250220191025191353715690.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวห้องหรือสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี', '38 square meters ', '2 adults + 1 child', 'Private balcony', 'City or garden view ', 'Room telephone service', 'Free WiFi service', 1),
(3, 3, ' Studio Room Corner Room', 'apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc. Every room type is including 5’bed, 2 Tables, 1TV stand, TV, Refrigerator, Closet, sink, bed light, etc,', 'ห้องสตูดิโอ(มุม)', 'อพาร์ทเมนท์สุดหรูตั้งอยู่ด้านหลังเทสโก้โลตัสพร้อมอาคารระบบความปลอดภัยเต็มรูปแบบแวดล้อมไปด้วยสถานที่อำนวยความสะดวกมากมายเช่น THE MALL โรงพยาบาลกรุงเทพ - นครราชสีมาโรงเรียนธนาคาร ฯลฯ ห้องพักทุกห้องประกอบด้วยเตียง 5 เตียง 2 โต๊ะ 1 ทีวี, ทีวี, ตู้เย็น, ตู้เสื้อผ้า, อ่างล้าง, ไฟเตียง, ฯลฯ', '3500.00', 5, '2202201916423222022019164232605077864.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวห้องหรือสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี', '38 square meters ', '2 adults + 1 child', 'Private balcony', 'City or garden view ', 'Room telephone service', 'Free WiFi service', 1),
(4, 3, ' Studio Room Single', 'apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc. Every room type is including 5’bed, 2 Tables, 1TV stand, TV, Refrigerator, Closet, sink, bed light, etc,', 'ห้องสตูดิโอ(เดี่ยว)', 'อพาร์ทเมนท์สุดหรูตั้งอยู่ด้านหลังเทสโก้โลตัสพร้อมอาคารระบบความปลอดภัยเต็มรูปแบบแวดล้อมไปด้วยสถานที่อำนวยความสะดวกมากมายเช่น THE MALL โรงพยาบาลกรุงเทพ - นครราชสีมาโรงเรียนธนาคาร ฯลฯ ห้องพักทุกห้องประกอบด้วยเตียง 5 เตียง 2 โต๊ะ 1 ทีวี, ทีวี, ตู้เย็น, ตู้เสื้อผ้า, อ่างล้าง, ไฟเตียง, ฯลฯ', '3500.00', 5, '22022019164539220220191645391080662942.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวห้องหรือสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี', '38 square meters ', '2 adults + 1 child', 'Private balcony', 'City or garden view ', 'Room telephone service', 'Free WiFi service', 0),
(5, 3, ' Studio Room double', 'apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc. Every room type is including 5’bed, 2 Tables, 1TV stand, TV, Refrigerator, Closet, sink, bed light, etc,', 'ห้องสตูดิโอ(เตียงคู่)', 'อพาร์ทเมนท์สุดหรูตั้งอยู่ด้านหลังเทสโก้โลตัสพร้อมอาคารระบบความปลอดภัยเต็มรูปแบบแวดล้อมไปด้วยสถานที่อำนวยความสะดวกมากมายเช่น THE MALL โรงพยาบาลกรุงเทพ - นครราชสีมาโรงเรียนธนาคาร ฯลฯ ห้องพักทุกห้องประกอบด้วยเตียง 5 เตียง 2 โต๊ะ 1 ทีวี, ทีวี, ตู้เย็น, ตู้เสื้อผ้า, อ่างล้าง, ไฟเตียง, ฯลฯ', '4000.00', 5, '22022019165137220220191651371751550915.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวห้องหรือสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี', '38 square meters ', '2 adults + 1 child', 'Private balcony', 'City or garden view ', 'Room telephone service', 'Free WiFi service', 0),
(6, 4, 'Super President Room', 'apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc. Every room type is including 5’bed, 2 Tables, 1TV stand, TV, Refrigerator, Closet, sink, bed light, etc', ' ห้องซูเปอร์เพรสซิเดนท์', 'อพาร์ทเมนท์สุดหรูตั้งอยู่ด้านหลังเทสโก้โลตัสพร้อมอาคารระบบความปลอดภัยเต็มรูปแบบแวดล้อมไปด้วยสถานที่อำนวยความสะดวกมากมายเช่น THE MALL โรงพยาบาลกรุงเทพ - นครราชสีมาโรงเรียนธนาคาร ฯลฯ ห้องพักทุกห้องประกอบด้วยเตียง 5 เตียง 2 โต๊ะ 1 ทีวี, ทีวี, ตู้เย็น, ตู้เสื้อผ้า, อ่างล้าง, ไฟเตียง, ฯลฯ', '6000.00', 5, '25022019101508250220191015081684846739.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวห้องหรือสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี', '38 square meters ', '2 adults + 1 child', 'Private balcony', 'City or garden view ', 'Room telephone service', 'Free WiFi service', 0),
(7, 6, 'VIP Room', 'apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc. Every room type is including 5’bed, 2 Tables, 1TV stand, TV, Refrigerator, Closet, sink, bed light, etc,', 'ห้องวีไอพี', 'อพาร์ทเมนท์สุดหรูตั้งอยู่ด้านหลังเทสโก้โลตัสพร้อมอาคารระบบความปลอดภัยเต็มรูปแบบแวดล้อมไปด้วยสถานที่อำนวยความสะดวกมากมายเช่น THE MALL โรงพยาบาลกรุงเทพ - นครราชสีมาโรงเรียนธนาคาร ฯลฯ ห้องพักทุกห้องประกอบด้วยเตียง 5 เตียง 2 โต๊ะ 1 ทีวี, ทีวี, ตู้เย็น, ตู้เสื้อผ้า, อ่างล้าง, ไฟเตียง, ฯลฯ', '8000.00', 3, '25022019101706250220191017061801809049.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวห้องหรือสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี', '38 square meters ', '2 adults + 1 child', 'Private balcony', 'City or garden view ', 'Room telephone service', 'Free WiFi service', 1);

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
(2, ' ห้องประธานาธิบดี', 'President Room'),
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
(1, '25022019102712250220191027121105551250.jpg', 'GUNTHPAT PLACE', 'A place to experience and enjoy life\r\n', 'กันตพัฒน์ เพลส', 'หรูหรากับระบบความปลอดภัยเต็มรูปแบบ', 'https://www.youtube.com/watch?v=1AszE9-ikOU'),
(2, '250220191031432502201910314383105868.jpg', 'Dream Stateroom', 'other entity or phenomenon vulnerable to unwanted change by its environment.                                                                                                                      ', 'ห้องนอน', 'เอนทิตีหรือปรากฏการณ์อื่น ๆ ที่เสี่ยงต่อการเปลี่ยนแปลงที่ไม่พึงประสงค์จากสภาพแวดล้อม', 'https://youtu.be/JZKlSYWlW54');

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
  MODIFY `book_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `contact_id` int(5) NOT NULL AUTO_INCREMENT;
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
  MODIFY `gallery_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
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
-- AUTO_INCREMENT for table `tb_room`
--
ALTER TABLE `tb_room`
  MODIFY `room_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_room_type`
--
ALTER TABLE `tb_room_type`
  MODIFY `room_type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_slide`
--
ALTER TABLE `tb_slide`
  MODIFY `slide_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
