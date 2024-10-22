-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Oct 22, 2024 at 06:41 PM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tu28`
--

-- --------------------------------------------------------

--
-- Table structure for table `SUSTAINABLELIVINGCategories`
--

CREATE TABLE IF NOT EXISTS `SUSTAINABLELIVINGCategories` (
  `SUSTAINABLELIVINGCategoryID` int(11) NOT NULL,
  `SUSTAINABLELIVINGCategoryCode` varchar(255) NOT NULL,
  `SUSTAINABLELIVINGCategoryName` varchar(255) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `Size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `SUSTAINABLELIVINGCategories`
--

INSERT INTO `SUSTAINABLELIVINGCategories` (`SUSTAINABLELIVINGCategoryID`, `SUSTAINABLELIVINGCategoryCode`, `SUSTAINABLELIVINGCategoryName`, `DateCreated`, `Size`) VALUES
(200, 'BTS', 'Bamboo Toothbrush Set', '2024-10-21 18:43:24', 5),
(300, 'SPC', 'Solar-powered Charger', '2024-10-21 18:43:25', 4),
(400, 'ESB', 'Eco-friendly Shopping Bag', '2024-10-21 18:43:27', 11),
(500, 'LED', 'LED Bulbs', '2024-10-21 18:43:29', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `SUSTAINABLELIVINGCategories`
--
ALTER TABLE `SUSTAINABLELIVINGCategories`
 ADD PRIMARY KEY (`SUSTAINABLELIVINGCategoryID`), ADD UNIQUE KEY `SUSTAINABLELIVINGCategoryCode` (`SUSTAINABLELIVINGCategoryCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
