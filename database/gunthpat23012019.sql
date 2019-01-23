-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 23, 2019 at 07:39 AM
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
  `facilities_type_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `facilities_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `facilities_detail` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_facilities`
--
ALTER TABLE `tb_facilities`
  ADD PRIMARY KEY (`facilities_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_facilities`
--
ALTER TABLE `tb_facilities`
  MODIFY `facilities_id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
