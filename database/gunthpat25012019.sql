-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2019 at 10:30 AM
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
  `about_us_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `about_us_sub_title` text COLLATE utf8_unicode_ci NOT NULL,
  `about_us_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_about_us`
--

INSERT INTO `tb_about_us` (`about_us_id`, `about_us_title`, `about_us_sub_title`, `about_us_img`) VALUES
(1, 'ABOUT GUNTHPAT PLACEgdhfg', '                                                                                                                                                                                                                                                            Gunthpat Place Luxurious apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc. Every room type is including 5’bed, 2 Tables, 1TV stand, TV, Refrigerator, Closet, sink, bed light, etc, Gunthpat Place Luxurious apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc.\r\n\r\nGunthpat Place Luxurious apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc.                                                                                                                                                                                                                                ', '2501201915214025012019152140992935755.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `contact_id` int(5) NOT NULL,
  `contact_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `contact_country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`contact_id`, `contact_title`, `contact_firstname`, `contact_lastname`, `contact_email`, `contact_tel`, `contact_country`, `contact_text`) VALUES
(1, 'ที่พัก', 'ส้มฉุน', 'เที่ยงกระโทก', 'Som@gmail.com', '089-958-8747', 'ประเทศไทย', 'ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาที\r\nโปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน'),
(2, 'สถานที่', 'สมใจ', 'ใจดี', 'Test@gmail.com', '085-965-9587', 'ประเทศไทย', 'ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาที\r\nโปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน'),
(3, 'การเดินทาง', 'มนัสวี', 'เข่งพิมล', 'Manadsawee@hotmail.com', '098-218-9498', 'ประเทศไทย', 'ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาที\r\nโปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน');

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
  `contact_us_map` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_contact_us`
--

INSERT INTO `tb_contact_us` (`contact_us_id`, `contact_us_title`, `contact_us_sub_title`, `contact_us_facebook`, `contact_us_tel`, `contact_us_address`, `contact_us_address_1`, `contact_us_address_2`, `contact_us_address_3`, `contact_us_address_4`, `contact_us_fax`, `contact_us_email`, `contact_us_carry_title`, `contact_us_carry_detail`, `contact_us_taxi_title`, `contact_us_taxi_detail`, `contact_us_car_titel`, `contact_us_car_detail`, `contact_us_map`) VALUES
(8, 'CONTACT US', 'Gunthpat Place Luxurious apartment is located right behind Tesco-Lotus with the full safety system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima Hospital, Schools, Bank etc.     Every room type is including 5’bed, 2 Tables, 1TV stand, TV, Refrigerator, Closet, sink, bed light, etc,', 'https://www.facebook.com/gunthpat place', '098-652-9851', '263/3 Soi King-Sa wai rieng', 'Nai Muang', 'Muang', 'Nakhornratchasima ', '30000', '098-652-9851, 025-658-965', 'gunthpatplace@hotmail.com', 'ระบบขนส่งสาธารณะ', 'ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาทีโปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน', 'แท็กซี่โดยสาร', 'ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาทีโปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน', 'รถรับส่งของโรงแรม', 'ใช้บริการแอร์พอร์ต ลิงก์ จากสนามบินนานาชาติสุวรรณภูมิมาที่พญาไทโดยให้บริการทุกๆ 20 นาทีตั้งแต่เวลา 6.00 น. ถึง 24.00 น. เที่ยงคืน โดยขึ้นรถไฟฟ้าบีทีเอส เปลี่ยนขบวนที่สถานีสยาม และลงที่สถานีสะพานตากสิน จากที่นั่น ท่านสามารถใช้บริการเรือโดยสารได้ฟรี โดยเรือออกทุก 20 นาทีโปรดแจ้งให้ทางโรงแรมทราบล่วงหน้าเพื่อให้เราทราบถึงรูปแบบการเดินทางของท่าน', '\'35.0');

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
(1, 'CONTACT', 'blogger-336371_1920.jpg', 'คุณสามารถติดต่อทรู อินเทอร์เน็ตเพื่อสอบถามรายละเอียดของผลิตภัณฑ์ และบริการ  รวมทั้งข้อแนะนำและคำติชมได้ในวันและเวลาทำการ                                                                '),
(2, 'Deliicious Foods', 'breakfast-1246686_1920.jpg', 'We\'ve scoured the planet for what we think are 50 of the most delicious foods ever created. For now, feast your eyes and control your drooling, as we reveal some of the world\'s best foods that can help you make'),
(3, 'Security', 'hotel-1330850_1920.jpg', 'Security is freedom from, or resilience against, potential harm (or other unwanted coercive change) from external forces. Beneficiaries (technically referents) of security may be persons and social groups, objects and institutions, ecosystems, and any other entity or phenomenon vulnerable to unwanted change by its environment.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallary`
--

CREATE TABLE `tb_gallary` (
  `gallary_id` int(5) NOT NULL,
  `gallary_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gallary_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gallary_type_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_gallary`
--

INSERT INTO `tb_gallary` (`gallary_id`, `gallary_name`, `gallary_img`, `gallary_type_id`) VALUES
(1, 'Deluxe Junior Suiteแอปแอ', 'hotel-1330841_1920.jpg', 3),
(2, 'Deluxe Room', 'hotel-1979406_1920.jpg', 1),
(3, 'Deliicious foods555', '24012019095132240120190951321461156926.jpg', 2),
(4, 'Key Card', 'hotel-1330850_1920.jpg', 2),
(5, '\r\nthe bridge', 'bangkok-1178693_1920.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallary_type`
--

CREATE TABLE `tb_gallary_type` (
  `gallary_type_id` int(5) NOT NULL,
  `gallary_type_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_gallary_type`
--

INSERT INTO `tb_gallary_type` (`gallary_type_id`, `gallary_type_name`) VALUES
(1, 'ที่พัก'),
(2, 'สิ่งอำนวยความสะดวก'),
(3, 'สิ่งแวดล้อมด้วยรอบ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_recommend_rooms`
--

CREATE TABLE `tb_recommend_rooms` (
  `recommend_id` int(3) NOT NULL,
  `recommend_img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `recommend_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `recommend_sub_title` text COLLATE utf8_unicode_ci NOT NULL,
  `recommend_price` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_recommend_rooms`
--

INSERT INTO `tb_recommend_rooms` (`recommend_id`, `recommend_img`, `recommend_title`, `recommend_sub_title`, `recommend_price`) VALUES
(1, '2301201917094823012019170948498357758.jpg', 'Delux Room', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Bed to bangkok ที่จตุจักร ห้องนึงนอนได้ 6คน เป็นห้องนอนรวม นี่พัก1คืนกับเพื่อนอีกคน คืนละ588บาท หารกับเพื่อน                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', '4000'),
(2, '67735705.jpg', 'Dream Stateroom', '                                                                                                                                            Bed to bangkok ที่จตุจักร ห้องนึงนอนได้ 6คน เป็นห้องนอนรวม นี่พัก1คืนกับเพื่อนอีกคน คืนละ588บาท หารกับเพื่อน                                                                                                                       ', '5000'),
(3, '5554565464.jpg', 'Family Suite', '                            สภาพห้องดีมาก ห้องน้ำดีมากเช่นกัน มีน้ำอุ่นให้อาบด้วย 10 10 ไปเลย ?                                                                                                ', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_room`
--

CREATE TABLE `tb_room` (
  `room_id` int(5) NOT NULL,
  `room_type_id` int(5) NOT NULL,
  `room_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_price` decimal(10,2) NOT NULL,
  `room_amout` int(3) NOT NULL,
  `room_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `room_size` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_detail_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_detail_2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_detail_3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_facility_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_facility_2` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_room`
--

INSERT INTO `tb_room` (`room_id`, `room_type_id`, `room_name`, `room_price`, `room_amout`, `room_img`, `room_size`, `room_detail_1`, `room_detail_2`, `room_detail_3`, `room_facility_1`, `room_facility_2`) VALUES
(1, 4, 'Deluxe Room', '4000.00', 5, '22012019164823220120191648231602616181.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวเมืองหรือสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี'),
(2, 2, 'Duluxe Junior Suite', '4150.00', 5, '002.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวห้องหรือสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี'),
(3, 2, 'Deluxe River View Room', '5100.00', 5, '003.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวเมืองหรือสวน', 'บริการโทรศัพท์ฟรี', 'บริการ WiFi ฟรี '),
(4, 4, 'Anantara Riverfront Suite', '6100.00', 5, '004.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวเมืองวิวสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี'),
(5, 2, 'Dream Stateroom', '12000.00', 5, '005.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวเมืองหรือวสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี'),
(6, 4, 'Family Suite', '9800.00', 5, '006.jpg', '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน ', 'ระเบียงส่วนตัว', 'วิวเมืองหรือสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี');

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
(4, 2, 'ทดลอง', 'ทดลอง', '0859589654', 'test@gmail.com', 'www.facebook.com/test', '085-958-9654', 'test3', 'test123456', '698', 'ในเมือง', 'เมืองนครราชสีมา', 'นครราชสีมา', '30000', '25012019143620-24012019112916240120191129161102358359.jpg'),
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
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tb_contact_us`
--
ALTER TABLE `tb_contact_us`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `tb_facilities`
--
ALTER TABLE `tb_facilities`
  ADD PRIMARY KEY (`facilities_id`);

--
-- Indexes for table `tb_gallary`
--
ALTER TABLE `tb_gallary`
  ADD PRIMARY KEY (`gallary_id`);

--
-- Indexes for table `tb_gallary_type`
--
ALTER TABLE `tb_gallary_type`
  ADD PRIMARY KEY (`gallary_type_id`);

--
-- Indexes for table `tb_recommend_rooms`
--
ALTER TABLE `tb_recommend_rooms`
  ADD PRIMARY KEY (`recommend_id`);

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
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `contact_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
-- AUTO_INCREMENT for table `tb_gallary`
--
ALTER TABLE `tb_gallary`
  MODIFY `gallary_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_gallary_type`
--
ALTER TABLE `tb_gallary_type`
  MODIFY `gallary_type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_recommend_rooms`
--
ALTER TABLE `tb_recommend_rooms`
  MODIFY `recommend_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_room`
--
ALTER TABLE `tb_room`
  MODIFY `room_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_room_type`
--
ALTER TABLE `tb_room_type`
  MODIFY `room_type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
