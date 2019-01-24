-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 24, 2019 at 02:43 AM
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
(1, 'Deluxe Junior Suite', 'hotel-1330841_1920.jpg', 1),
(2, 'Deluxe Room', 'hotel-1979406_1920.jpg', 1),
(3, 'Deliicious foods', 'breakfast-1246686_1920.jpg', 2),
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

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_facilities`
--
ALTER TABLE `tb_facilities`
  MODIFY `facilities_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
  MODIFY `recommend_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_room`
--
ALTER TABLE `tb_room`
  MODIFY `room_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_room_type`
--
ALTER TABLE `tb_room_type`
  MODIFY `room_type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
