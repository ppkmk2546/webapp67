-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2024 at 06:58 AM
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
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentbio`
--

CREATE TABLE `studentbio` (
  `sid` varchar(3) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `slastname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='student information';

--
-- Dumping data for table `studentbio`
--

INSERT INTO `studentbio` (`sid`, `sname`, `slastname`, `address`, `telephone`) VALUES
('110', 'punpichit', 'puapun', 'pathumthani', '0612192740'),
('111', 'chonlatharn', 'inthanaka', 'pathumthani', '0988035274'),
('112', 'kritsanai', 'bunnak', 'saraburi', '0909518382'),
('113', 'pplarry', 'larrylala', 'bangkok', '0998887777'),
('114', 'adam', 'larry', 'bangkok', '0887776666');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentbio`
--
ALTER TABLE `studentbio`
  ADD PRIMARY KEY (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
