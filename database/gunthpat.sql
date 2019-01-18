-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 18, 2019 at 08:43 AM
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
(1, '73118462.jpg', 'Delux Room', 'Bed to bangkok ที่จตุจักร ห้องนึงนอนได้ 6คน เป็นห้องนอนรวม นี่พัก1คืนกับเพื่อนอีกคน คืนละ588บาท หารกับเพื่อนคนละ200กว่าบาทฟรีอาหารเช้า ฟรีwifi เช็คอินเข้าได้ตั้งแต่14.00-00.00น. สภาพห้องดีมาก ห้องน้ำดีมากเช่นกัน มีน้ำอุ่นให้อาบด้วย 10 10 ไปเลย ?', '4000'),
(2, '67735705.jpg', 'Dream Stateroom', 'Bed to bangkok ที่จตุจักร ห้องนึงนอนได้ 6คน เป็นห้องนอนรวม นี่พัก1คืนกับเพื่อนอีกคน คืนละ588บาท หารกับเพื่อนคนละ200กว่าบาทฟรีอาหารเช้า ฟรีwifi เช็คอินเข้าได้ตั้งแต่14.00-00.00น. สภาพห้องดีมาก ห้องน้ำดีมากเช่นกัน มีน้ำอุ่นให้อาบด้วย 10 10 ไปเลย ?', '5000'),
(3, '5554565464.jpg', 'Family Suite', 'Bed to bangkok ที่จตุจักร ห้องนึงนอนได้ 6คน เป็นห้องนอนรวม นี่พัก1คืนกับเพื่อนอีกคน คืนละ588บาท หารกับเพื่อนคนละ200กว่าบาทฟรีอาหารเช้า ฟรีwifi เช็คอินเข้าได้ตั้งแต่14.00-00.00น. สภาพห้องดีมาก ห้องน้ำดีมากเช่นกัน มีน้ำอุ่นให้อาบด้วย 10 10 ไปเลย ?', '6000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_recommend_rooms`
--
ALTER TABLE `tb_recommend_rooms`
  ADD PRIMARY KEY (`recommend_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_recommend_rooms`
--
ALTER TABLE `tb_recommend_rooms`
  MODIFY `recommend_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
