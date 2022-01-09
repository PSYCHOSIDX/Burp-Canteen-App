-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2022 at 08:03 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `canteen_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `contact`, `canteen_id`) VALUES
(1, 'DBCE CANTEEN', 'dbce_canteen', '21ADA99E5C61EE9A0444D02B409F15069B116FE2C90869FEAE7638785090D7D6', '7028193277', 1);

-- --------------------------------------------------------

--
-- Table structure for table `canteens`
--

CREATE TABLE `canteens` (
  `id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `college_name` varchar(200) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `timing` varchar(100) DEFAULT NULL,
  `off_days` varchar(50) DEFAULT NULL,
  `minimum_pricing_for_two` int(10) DEFAULT NULL,
  `contact` bigint(200) DEFAULT NULL,
  `menu_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `canteens`
--

INSERT INTO `canteens` (`id`, `name`, `college_name`, `location`, `timing`, `off_days`, `minimum_pricing_for_two`, `contact`, `menu_id`) VALUES
(1, 'DBCE CANTEEN', 'Don Bosco College Of Engineering', 'Margao - Goa', '10 am to 5 pm', 'MON SAT and SUN', 200, 7028193277, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(100) NOT NULL,
  `itemno` int(100) NOT NULL,
  `item_name` varchar(300) NOT NULL,
  `price` int(30) NOT NULL,
  `qty` int(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `category` enum('snacks','maincourse','beverage','') NOT NULL,
  `type` enum('VEG','NON VEG','') NOT NULL,
  `available` enum('available','sold out','') NOT NULL,
  `best` enum('true','false') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `itemno`, `item_name`, `price`, `qty`, `description`, `category`, `type`, `available`, `best`) VALUES
(1, 1, 'Cheese Cake', 123, 1, 'fbsrgljsnlj jkujblknl', 'snacks', 'VEG', 'sold out', 'true'),
(1, 2, 'cheese', 33, 1, 'dsvsgsr dbgdrv', 'snacks', 'VEG', 'available', 'true'),
(1, 3, 'cheeeseee', 20, 1, 'guyjy', 'maincourse', 'VEG', 'sold out', 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `canteen_id` (`canteen_id`);

--
-- Indexes for table `canteens`
--
ALTER TABLE `canteens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`itemno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `itemno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`canteen_id`) REFERENCES `canteens` (`id`);

--
-- Constraints for table `canteens`
--
ALTER TABLE `canteens`
  ADD CONSTRAINT `canteens_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`itemno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
