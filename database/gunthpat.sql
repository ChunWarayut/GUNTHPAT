-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 18, 2019 at 10:37 AM
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
-- Table structure for table `tb_room`
--

CREATE TABLE `tb_room` (
  `room_id` int(5) NOT NULL,
  `room_type_id` int(5) NOT NULL,
  `room_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_price` decimal(7,2) NOT NULL,
  `room_amout` int(3) NOT NULL,
  `room_amout_total` int(3) NOT NULL,
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

INSERT INTO `tb_room` (`room_id`, `room_type_id`, `room_name`, `room_price`, `room_amout`, `room_amout_total`, `room_size`, `room_detail_1`, `room_detail_2`, `room_detail_3`, `room_facility_1`, `room_facility_2`) VALUES
(1, 1, 'Deluxe Room', '4800.00', 5, 5, '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวเมืองหรือสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี'),
(2, 2, 'Duluxe Junior Suite', '4150.00', 5, 5, '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวห้องหรือสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี'),
(3, 3, 'Deluxe River View Room', '5100.00', 5, 5, '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวเมืองหรือสวน', 'บริการโทรศัพท์ฟรี', 'บริการ WiFi ฟรี '),
(4, 4, 'Anantara Riverfront Suite', '6100.00', 5, 5, '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวเมืองวิวสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี'),
(5, 2, 'Dream Stateroom', '12000.00', 5, 5, '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน', 'ระเบียงส่วนตัว', 'วิวเมืองหรือวสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี'),
(6, 3, 'Family Suite', '9800.00', 5, 5, '38 ตารางเมตร', 'ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน ', 'ระเบียงส่วนตัว', 'วิวเมืองหรือสวน', 'บริการโทรศัพท์ห้อง', 'บริการ WiFi ฟรี');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_room`
--
ALTER TABLE `tb_room`
  ADD PRIMARY KEY (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_room`
--
ALTER TABLE `tb_room`
  MODIFY `room_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
