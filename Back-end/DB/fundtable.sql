-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 07:14 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `fundtable`
--

CREATE TABLE `fundtable` (
  `FundID` int(11) NOT NULL COMMENT 'The ID that links to Users',
  `FundName` text NOT NULL COMMENT 'The FundName',
  `FundLevel` int(11) NOT NULL COMMENT 'The Percentile Of Funding Achieved',
  `FundDesc` text NOT NULL,
  `PortfolioID` int(11) NOT NULL COMMENT 'Will Link To portfolio Table'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fundtable`
--

INSERT INTO `fundtable` (`FundID`, `FundName`, `FundLevel`, `FundDesc`, `PortfolioID`) VALUES
(1, 'LocationX Basketball Fund', 27, 'We want a basketball court in LocationX the public can use! Please donate!', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fundtable`
--
ALTER TABLE `fundtable`
  ADD PRIMARY KEY (`FundID`),
  ADD UNIQUE KEY `FundID` (`FundID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fundtable`
--
ALTER TABLE `fundtable`
  MODIFY `FundID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The ID that links to Users', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
