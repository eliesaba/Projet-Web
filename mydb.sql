-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2020 at 05:38 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `citizen`
--

CREATE TABLE `citizen` (
  `id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  `fileupload` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citizen`
--

INSERT INTO `citizen` (`id`, `firstname`, `lastname`, `gender`, `email`, `password`, `cpassword`, `message`, `fileupload`) VALUES
(27, 'elie', 'saba', 'male', 'elie.bs@hotmail.com', 'ELIE@123a', 'ELIE@123a', 'hello', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` int(100) NOT NULL,
  `jobTitle` varchar(50) NOT NULL,
  `ministry` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstname`, `lastname`, `gender`, `email`, `telephone`, `jobTitle`, `ministry`) VALUES
(10, 'joe', 'ghanime', 'male', 'joe.ghanime@hotmail.com', 70422564, 'Accountant', 'MinistryOfFinance'),
(9, 'carla', 'gedeon', 'female', 'carla.gedeon@hotmail.com', 71875522, 'Water towers', 'MinistryOfEnvironement');

-- --------------------------------------------------------

--
-- Table structure for table `hremployee`
--

CREATE TABLE `hremployee` (
  `id` int(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hremployee`
--

INSERT INTO `hremployee` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'admin@hotmail.com', 'ADMIN@123a');

-- --------------------------------------------------------

--
-- Table structure for table `ministry`
--

CREATE TABLE `ministry` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `minister` varchar(50) NOT NULL,
  `numberemp` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ministry`
--

INSERT INTO `ministry` (`id`, `name`, `location`, `minister`, `numberemp`) VALUES
(5, 'MinistryOfEnvironement', 'Beirut', 'Dr. Tony Karam', NULL),
(6, 'MinistryOfFinance', 'Baabda', 'Ali Hassan Khalil', NULL),
(7, 'MinistryOfSocialaffairs', 'Beirut', 'Richard Kouyoujian.', NULL),
(8, 'MinistryOfCulture', 'Beirut', 'Mohammad Daoud', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vacancie`
--

CREATE TABLE `vacancie` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `ministry` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancie`
--

INSERT INTO `vacancie` (`id`, `title`, `ministry`) VALUES
(20, 'agricultural role', 'MinistryOfEnvironement'),
(3, 'cnss', 'MinistryOfSocialaffairs'),
(11, 'Program Designer', 'MinistryOfCulture'),
(5, 'water role', 'MinistryOfEnvironement'),
(13, 'leader', 'MinistryOfFinance'),
(17, 'Accountant', 'MinistryOfFinance'),
(18, 'Water towers', 'MinistryOfEnvironement'),
(21, 'Accountant', 'MinistryOfFinance');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citizen`
--
ALTER TABLE `citizen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hremployee`
--
ALTER TABLE `hremployee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ministry`
--
ALTER TABLE `ministry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacancie`
--
ALTER TABLE `vacancie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citizen`
--
ALTER TABLE `citizen`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `hremployee`
--
ALTER TABLE `hremployee`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ministry`
--
ALTER TABLE `ministry`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `vacancie`
--
ALTER TABLE `vacancie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
