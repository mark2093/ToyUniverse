-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2016 at 08:34 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toy_universe1`
--

-- --------------------------------------------------------

--
-- Table structure for table `store_toys`
--

CREATE TABLE `store_toys` (
  `St_id` int(11) NOT NULL,
  `St_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `St_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `St_price` int(11) NOT NULL,
  `St_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `St_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `St_main` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `store_toys`
--
ALTER TABLE `store_toys`
  ADD PRIMARY KEY (`St_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `store_toys`
--
ALTER TABLE `store_toys`
  MODIFY `St_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
