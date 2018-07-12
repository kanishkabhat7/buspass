-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2018 at 06:48 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pass_re` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `firstname`, `lastname`, `password`, `pass_re`, `age`, `gender`, `address`) VALUES
('Kanishka7', 'Kanishka', 'Bh', 'kan', 'kan', 23, 'Female', '12qer');

-- --------------------------------------------------------

--
-- Table structure for table `pass`
--

CREATE TABLE `pass` (
  `username` varchar(50) NOT NULL,
  `pass_id` int(50) NOT NULL,
  `bus_no` int(50) NOT NULL,
  `start_stp` int(50) NOT NULL,
  `end_stp` text NOT NULL,
  `bus_type` text NOT NULL,
  `pass_amt` int(50) NOT NULL,
  `card_no` int(50) NOT NULL,
  `expiry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pass`
--

INSERT INTO `pass` (`username`, `pass_id`, `bus_no`, `start_stp`, `end_stp`, `bus_type`, `pass_amt`, `card_no`, `expiry`) VALUES
('', 0, 0, 0, '', '', 0, 0, '0000-00-00'),
('Kanishka7', 123, 21, 0, 'Jammu', 'Monthly', 300, 1234, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `admin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`admin`, `password`) VALUES
('kanishka', 'kanishka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `pass`
--
ALTER TABLE `pass`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `admin` (`admin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
