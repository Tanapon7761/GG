-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 06:14 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `hire_id` int(11) NOT NULL COMMENT 'ไอดีเช่า',
  `hire_name` varchar(256) NOT NULL COMMENT 'ชื่อคนเช่า',
  `days` int(11) NOT NULL COMMENT 'จองกี่วัน',
  `telephon` int(11) NOT NULL COMMENT 'เบอร์โทร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hire`
--

INSERT INTO `hire` (`hire_id`, `hire_name`, `days`, `telephon`) VALUES
(1, 'นาย ธนพนธ์ เธียรพิบูลย์', 3, 625799316);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(6) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสหนังสือ',
  `pro_name` varchar(256) NOT NULL COMMENT 'ชื่อหนังสือ',
  `price` float NOT NULL COMMENT 'ราคาหนังสือ',
  `amount` int(11) NOT NULL COMMENT 'จำนวนหนังสือ',
  `image` varchar(100) NOT NULL COMMENT 'รูปภาพ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `price`, `amount`, `image`) VALUES
(000001, 'Kimetsu no Yaiba เล่ม 1', 260, 8, 'G6417da5cd2a9e.jpg'),
(000002, 'My Hero', 185, 15, 'G6417dab7e443b.jpg'),
(000004, 'Conan', 135, 10, 'G6417e55c845b9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`hire_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `hire_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีเช่า', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัสหนังสือ', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
