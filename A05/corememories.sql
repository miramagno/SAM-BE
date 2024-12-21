-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 08:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'img/fam.jpg', 'As a loving daughter, I find joy in the moments spent with my family, cherishing the bond we share and the love that surrounds us.', NULL),
(2, 1, 'img/tita.jpg', 'As a tita, I find joy in being a guiding presence, showering my nieces and nephews with love, and creating lasting memories with them.', NULL),
(3, 1, 'img/fr.jpg', 'As a supportive, loving friend, I find joy in uplifting others, offering a listening ear, and being a constant source of encouragement and care.', NULL),
(4, 2, 'img/swit.jpg', '', NULL),
(5, 2, 'img/adv.jpg', '', NULL),
(6, 2, 'img/travel.jpg', '', NULL),
(7, 3, 'img/career.jpg', 'Being career-driven fuels my determination to succeed, but it also brings moments of pressure as I strive to balance my aspirations with personal well-being.', NULL),
(8, 3, 'img/vis.jpg', 'Achieving goals fills me with a sense of pride and accomplishment, reinforcing the belief that perseverance and dedication lead to meaningful success.', NULL),
(9, 3, 'img/mo.jpg', 'These moments bring a sense of fulfillment, reminding me that my hard work and dedication are valued, and they inspire me to keep pushing forward.', NULL),
(10, 4, 'img/ind.jpg', 'Building resilience and confidence through self-reliance and inner determination.', NULL),
(11, 4, 'img/i.jpg', 'Life often presents us with crossroads—moments of choice that define our future. These crossroads are symbolic of independence, a phase where we must rely on ourselves, our values, and our vision.', NULL),
(12, 4, 'img/n.jpg', 'Making informed and thoughtful choices to navigate life is complexities.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Loving Personality', NULL, NULL, NULL, NULL, 'inactive'),
(2, 'Adventurous Personality', NULL, 'Adventure in nature often brings a sense of excitement and exhilaration, yet for many, it also stirs a deep-rooted fear. The vastness of the wilderness, the unpredictability of the elements, and the unfamiliarity of the terrain can trigger feelings of uncertainty. However, within this fear lies a unique calmness—a peace found in the raw beauty of nature, in the quiet moments that allow one to connect with the earth. The contrast between fear and calmness is not only intriguing but also transformative, offering a space for personal growth and self-discovery.', NULL, NULL, 'inactive'),
(3, 'Ambitious Personality', 'Being ambitious often stirs anxiety within me, as I push myself toward my goals, yet the fear of not meeting expectations can sometimes feel overwhelming.', NULL, NULL, NULL, 'inactive'),
(4, 'Independent Personality', NULL, 'Independence is a core aspect of my personality, shaped by a journey of self-reliance and personal growth. It embodies the strength to stand alone, make thoughtful decisions, and find fulfillment in individual pursuits. This trait allows me to embrace challenges, learn from experiences, and navigate life with confidence and resilience.', NULL, NULL, 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
