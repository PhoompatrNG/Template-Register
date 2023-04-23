-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 07:25 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `1user`
--

CREATE TABLE `1user` (
  `id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `userlevel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `1user`
--

INSERT INTO `1user` (`id`, `username`, `password`, `firstname`, `lastname`, `userlevel`) VALUES
(000089, 'admin', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 'Admin', '00', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data1`
--

CREATE TABLE `data1` (
  `number` int(5) UNSIGNED ZEROFILL NOT NULL,
  `day` varchar(200) NOT NULL,
  `itemcode` varchar(200) NOT NULL,
  `detail` varchar(200) NOT NULL,
  `get1` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `edit` varchar(200) NOT NULL,
  `note` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data1`
--

INSERT INTO `data1` (`number`, `day`, `itemcode`, `detail`, `get1`, `price`, `location`, `edit`, `note`, `status`) VALUES
(00000, '2023-04-14', '216465462', 'คอมพิว', 'งบ', '15000', '225', '2023-04-24', '', 'ใช้ไม่ได้'),
(00000, '2023-04-13', '65465616', 'แอ', 'งบ', '15000', '225', '2023-04-24', '', 'หาย');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1user`
--
ALTER TABLE `1user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data1`
--
ALTER TABLE `data1`
  ADD PRIMARY KEY (`itemcode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1user`
--
ALTER TABLE `1user`
  MODIFY `id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
