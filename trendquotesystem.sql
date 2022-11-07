-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 01:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trendquotesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `get_info`
--

CREATE TABLE `get_info` (
  `ID` int(11) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Surname` varchar(32) NOT NULL,
  `Product` varchar(32) NOT NULL,
  `Price` varchar(32) NOT NULL,
  `TimeFrame` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `get_info`
--

INSERT INTO `get_info` (`ID`, `Name`, `Surname`, `Product`, `Price`, `TimeFrame`) VALUES
(115, 'Ben', 'Spalding', 'Mobile App', 'R50 000', '1 year'),
(116, 'Luan', 'Taljaard', '7 Page Website', 'R60 000', '2 months'),
(126, 'Hlogi', 'Mafalo', '3 Page Website', 'R 59 999', '1week');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `get_info`
--
ALTER TABLE `get_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `get_info`
--
ALTER TABLE `get_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
