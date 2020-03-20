-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2018 at 03:05 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('chirag', 'chirag123'),
('gaurav', 'gaurav123'),
('Mahak', 'giu');

-- --------------------------------------------------------

--
-- Table structure for table `availability_table`
--

CREATE TABLE `availability_table` (
  `date_` varchar(100) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availability_table`
--

INSERT INTO `availability_table` (`date_`, `count`) VALUES
('2018-11-02', 1),
('2018-11-06', 1),
('2018-11-16', 1),
('2019-01-03', 1),
('2019-02-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `earning`
--

CREATE TABLE `earning` (
  `Earning` float NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `earning`
--

INSERT INTO `earning` (`Earning`, `Time`) VALUES
(160, '2018-10-30 13:35:15'),
(155, '2018-10-30 13:46:50'),
(155, '2018-10-30 14:46:21'),
(101, '2018-10-31 00:49:16');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`username`) VALUES
('abc'),
('admin'),
('ballu'),
('charles786'),
('chirag'),
('gaurav'),
('harry'),
('johnathan'),
('mahak'),
('michael'),
('peter'),
('rashmi\r\n'),
('rashmi12'),
('roger000'),
('user321');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `food` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`food`, `price`) VALUES
('BAKED APPLE PIE MCDONALDS', 130),
('BISCUITS POPEYES', 25),
('BLIZZARD DAIRY QUEEN', 90),
('CHEESEBURGER FIVE GUYS', 90),
('CHEESEBURGER IN-N-OUT', 25),
('CHEESY GORDITA CRUNCH TACO BELL', 35),
('CHERRY LIMEADE SONIC', 45),
('CRUNCHY SHELL TACOS TACO BELL', 20),
('CURLY FRIES ARBYS', 30),
('FRIES MCDONALDS', 76),
('FROSTY WENDY', 25),
('HACK BURGER SHAKESHACK', 75),
('MASHED POTATOS AND CAJUN GRAVY POPEYES', 125),
('MCFLURRY MCDONALDS', 20),
('SOFT TACOS CHIPOTLE', 35),
('STEAKBURGER STEAK N SHAKE', 108);

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`name`, `email`, `date`, `msg`) VALUES
('Gaurav Kabra', '2016ucp1471@mnit.ac.in', '2018-11-02', '3 members ,for birthday and at 12 midnight');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`email`) VALUES
('2016ucp1471@mnit.ac.in'),
('gauravkabra12@gmail.com'),
('hazaron@gmail.com'),
('qwe@ghmaj.com');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `food` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `availability_table`
--
ALTER TABLE `availability_table`
  ADD PRIMARY KEY (`date_`);

--
-- Indexes for table `earning`
--
ALTER TABLE `earning`
  ADD PRIMARY KEY (`Time`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`food`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
