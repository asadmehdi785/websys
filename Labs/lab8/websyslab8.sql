-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2016 at 03:21 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websyslab8`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `crn` int(11) NOT NULL,
  `prefix` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `number` smallint(4) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `section` int(2) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`crn`, `prefix`, `number`, `title`, `section`, `year`) VALUES
(35938, 'ITWS', 3000, 'Introduction to Speaking', 3, 2017),
(38132, 'ITWS', 4500, 'Web Science Systems Development', 1, 2017),
(38133, 'ITWS', 9001, 'Introduction to Information Security', 2, 2017),
(38134, 'ITWS', 1000, 'Advanced Bird Watching', 3, 2017),
(38135, 'ITWS', 4510, 'Introduction to Listening', 4, 2017),
(38136, 'ITWS', 2000, 'Data Synthesis', 2, 2017),
(39485, 'ITWS', 9999, 'Advanced Screenshotting', 2, 2017),
(40598, 'CSGO', 2100, 'Introduction to CS:GO', 1, 2017),
(56374, 'ITWS', 5400, 'Advanced Calculators', 2, 2017),
(60593, 'ITWS', 4000, 'Relational People Watching', 1, 2017);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `crn` int(11) NOT NULL,
  `rin` int(11) NOT NULL,
  `grade` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `crn`, `rin`, `grade`) VALUES
(0, 38132, 125489632, 90),
(1, 35938, 123098567, 89),
(2, 38133, 140930394, 84),
(3, 38134, 234856270, 76),
(4, 38135, 486539291, 100),
(5, 38136, 495830239, 70),
(6, 39485, 573969250, 99),
(7, 40598, 987654321, 65),
(8, 56374, 999999999, 78),
(9, 60593, 495587473, 97),
(10, 38136, 125489632, 87),
(11, 38135, 123098567, 85),
(12, 39485, 495587473, 98),
(13, 39485, 125489632, 76),
(14, 38133, 573969250, 95),
(15, 56374, 140930394, 97),
(16, 38135, 486539291, 90),
(17, 40598, 123098567, 86),
(18, 38136, 125489632, 77),
(19, 38134, 486539291, 89);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `rin` int(9) NOT NULL,
  `rcsID` char(7) COLLATE utf16_unicode_ci NOT NULL,
  `first name` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `last name` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `street` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `zip` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`rin`, `rcsID`, `first name`, `last name`, `alias`, `phone`, `street`, `city`, `state`, `zip`) VALUES
(123098567, 'kagamit', 'Taiga', 'Kagami', 'Taiga', 1049593, 'Basketball Street', 'Seirin', 'Winter Cup', 75748),
(125489632, 'aomined', 'Daiki', 'Aomine', 'Daiki', 1935934, 'Basketball Street', 'Seirin', 'Winter Cup', 12939),
(140930394, 'emilia', 'Emilia', 'Emilia', 'Emilia', 1235983, 'Camp', 'Kingdom', 'Lugnica', 28589),
(234856270, 'hanamak', 'Kunikida', 'Hanamaru', 'Kunikida', 5555432, 'AZALEA', 'Uranohoshi', 'Japan', 23949),
(486539291, 'ketchum', 'Ash', 'Ketchum', 'Ash', 5555949, 'First Street', 'Pallet Town', 'Kanto', 12345),
(495587473, 'kurokot', 'Tetsuya', 'Kuroko', 'Kuroko', 5555431, 'Basketball Street', 'Seirin', 'Winter Cup', 54321),
(495830239, 'akashis', 'Seijuro', 'Akashi', 'Seijuro', 9994858, 'Basketball Street', 'Seirin', 'Winter Cup', 19498),
(573969250, 'umis', 'Sonoda', 'Umi', 'Umi', 4954959, 'lily white', 'Otonokizaka', 'Japan', 38587),
(987654321, 'makisek', 'Kurisu', 'Makise', 'Kurisu', 5559876, 'Akihabara', 'Tokyo', 'Japan', 75748),
(999999999, 'mercurr', 'Rory', 'Mercury', 'Oracle', 9615555, 'Emloy', 'JSDF', 'Special Region', 96196);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`crn`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`rin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
