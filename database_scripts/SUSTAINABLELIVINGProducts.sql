-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Oct 22, 2024 at 06:44 PM
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
-- Table structure for table `SUSTAINABLELIVINGProducts`
--

CREATE TABLE IF NOT EXISTS `SUSTAINABLELIVINGProducts` (
  `SUSTAINABLELIVINGProductID` int(11) NOT NULL,
  `SUSTAINABLELIVINGProductCode` varchar(10) NOT NULL,
  `SUSTAINABLELIVINGProductName` varchar(255) NOT NULL,
  `SUSTAINABLELIVINGDescription` text NOT NULL,
  `SUSTAINABLELIVINGCategoryID` int(11) NOT NULL,
  `SUSTAINABLELIVINGWholesalePrice` decimal(10,2) NOT NULL,
  `SUSTAINABLELIVINGListPrice` decimal(10,2) NOT NULL,
  `SUSTAINABLELIVINGColor` varchar(20) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `SUSTAINABLELIVINGProducts`
--

INSERT INTO `SUSTAINABLELIVINGProducts` (`SUSTAINABLELIVINGProductID`, `SUSTAINABLELIVINGProductCode`, `SUSTAINABLELIVINGProductName`, `SUSTAINABLELIVINGDescription`, `SUSTAINABLELIVINGCategoryID`, `SUSTAINABLELIVINGWholesalePrice`, `SUSTAINABLELIVINGListPrice`, `SUSTAINABLELIVINGColor`, `DateCreated`) VALUES
(1000, '0', 'Waterbottle', '''reusable water bottles made from a range of materials, including BPA-free plastic. Great for saving enviornment.', 100, 2.99, 5.99, 'Blue', '2024-10-22 12:21:19'),
(1001, 'SSB', 'Stainless Steel Bottle', 'Stainless steel bottles are double walled and are designed to retain the temperature of whatever you are drinking. Insulated water bottles keep your cold drinks cold and your hot drinks hot for hours, making them the perfect choice for any season or environment.', 100, 3.99, 9.99, 'Black', '2024-10-22 14:20:37'),
(1002, 'BPAF', 'BPA Free Waterbottle', 'BPA-free water bottles are manufactured without the presence of bisphenol-A. Other traditional or older water bottles that are “regular,” or non-BPA-free water bottles, are made using bisphenol-A.', 100, 1.99, 4.99, 'Clear', '2024-10-22 14:20:39'),
(2000, 'Daletu', 'Bamboo Toothbrush', 'Made of biodegradable bamboo, this high-quality and eco-friendly toothbrush is naturally antimicrobial and water-resistant as its nylon bristles massage teeth and gums for good oral health.', 200, 1.99, 4.99, 'Tan', '2024-10-22 11:02:52'),
(2001, 'SBBT', 'Soft Bristle Bamboo Toothbrush', 'Ideal for sensitive gums, these toothbrushes feature soft bristles made from nylon or plant-based materials.', 200, 1.99, 3.99, 'Tan', '2024-10-22 14:20:43'),
(2002, 'MBBT', 'Medium Bristle Bamboo Toothbrush', ' A balanced option for those who prefer a firmer brushing experience, offering effective plaque removal without being too harsh on the gums.', 200, 1.99, 4.49, 'Tan', '2024-10-22 14:20:44'),
(3000, 'Rasbes', 'Solar-powered Charger', 'Solar battery charger equipped with photovoltaic (PV) cells or solar panels that convert sunlight into electrical energy. You can have it on you in case of an emergency when power is needed.', 300, 4.99, 15.99, 'Black', '2024-10-22 14:24:30'),
(3001, 'SPC', 'Solar-Panel Charger', 'These are foldable or rigid solar panels that can directly charge devices like phones and laptops. They typically connect via USB or other charging ports and are great for outdoor activities.', 300, 99.99, 249.99, 'Black', '2024-10-22 14:24:28'),
(3002, 'SPBP', 'Solar-powered Backpack', 'These backpacks come with built-in solar panels, allowing you to charge devices while you are on the move. They are ideal for hiking, camping, or daily commuting in sunny areas.', 300, 49.99, 125.99, 'Black', '2024-10-22 14:24:37'),
(4000, 'GP', 'Eco Friendly Bag', 'Made of 100 percent biodegradable material. Start using these bags to dp your part in helping saving the enviornment.', 400, 0.99, 2.99, 'Green', '2024-10-22 14:29:07'),
(4001, 'JUTE', 'Jute Bag', 'Jute is a natural, biodegradable fiber that produces strong and sturdy bags. Often used for groceries or as beach bags, jute bags are not only eco-friendly but also stylish and versatile.', 400, 1.99, 3.99, 'Red', '2024-10-22 14:25:23'),
(4002, 'RPB', 'Recycle-Pet Bag', 'These bags are made from recycled plastic bottles, turning waste into a functional product. Lightweight and water-resistant, they are perfect for everyday use and help reduce plastic pollution.', 400, 2.99, 5.99, 'Black', '2024-10-22 14:27:39'),
(5000, 'JESLED', 'LED Light Bulb', 'electrical current passes through a microchip, which illuminates the tiny light sources we call LEDs and the result is visible light.', 500, 3.99, 9.99, 'white', '2024-10-22 14:25:52'),
(5001, 'A19', 'A19 LED Light Bulb', 'These are the most common LED bulbs, designed to replace traditional incandescent bulbs. They provide warm white light, are energy-efficient, and have a long lifespan, making them perfect for general home lighting.', 500, 3.99, 7.99, 'white', '2024-10-22 14:25:53'),
(5002, 'BR30', 'BR30 LED Bulb', 'Designed for recessed or track lighting, BR30 bulbs have a wider beam angle and are ideal for illuminating larger areas. They consume less energy than incandescent options while providing bright, focused light suitable for both indoor and outdoor use.', 500, 4.99, 9.99, 'Yellow', '2024-10-22 14:25:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `SUSTAINABLELIVINGProducts`
--
ALTER TABLE `SUSTAINABLELIVINGProducts`
 ADD PRIMARY KEY (`SUSTAINABLELIVINGProductID`), ADD UNIQUE KEY `SUSTAINABLELIVINGProductCode` (`SUSTAINABLELIVINGProductCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
