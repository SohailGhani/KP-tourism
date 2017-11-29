-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2017 at 12:01 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sNo` int(20) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sNo`, `name`, `password`, `email`) VALUES
(NULL, 'sohail', '123', 'sohail@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `disti`
--

CREATE TABLE `disti` (
  `Id` int(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Visited` int(200) NOT NULL,
  `PMDC` varchar(200) NOT NULL,
  `Descroption` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disti`
--

INSERT INTO `disti` (`Id`, `Name`, `Visited`, `PMDC`, `Descroption`) VALUES
(1, 'Peshawar', 1243243, 'sadar', 'sldfj'),
(2, 'swat', 2342309, 'Saidu', 'dlfks');

-- --------------------------------------------------------

--
-- Table structure for table `eventsall`
--

CREATE TABLE `eventsall` (
  `Id` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Vanue` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Desciption` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventsall`
--

INSERT INTO `eventsall` (`Id`, `Name`, `Vanue`, `Status`, `Desciption`) VALUES
(3, 'Event2', 'peshawar', 'Active', 'dsfkl'),
(4, 'Event4', 'djfdsl', 'dslkfn', 'lsdm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nic` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nic`, `phone`) VALUES
(1, 'hamza', '20384032', '349850'),
(2, 'ali', '453404', '320835');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disti`
--
ALTER TABLE `disti`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `eventsall`
--
ALTER TABLE `eventsall`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disti`
--
ALTER TABLE `disti`
  MODIFY `Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `eventsall`
--
ALTER TABLE `eventsall`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
