-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 11:24 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bandwidth`
--

CREATE TABLE `bandwidth` (
  `id` int(11) NOT NULL,
  `bandwidth` int(11) NOT NULL,
  `price` float NOT NULL,
  `bandwidthtype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bandwidth`
--

INSERT INTO `bandwidth` (`id`, `bandwidth`, `price`, `bandwidthtype`) VALUES
(8, 25, 1700, 'Home'),
(17, 6, 550, 'Home'),
(63, 10, 1500, 'Business'),
(64, 45, 2200, 'Home'),
(66, 7, 1300, 'Home');

-- --------------------------------------------------------

--
-- Table structure for table `customerorder`
--

CREATE TABLE `customerorder` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `month` int(11) NOT NULL,
  `subscribedate` date NOT NULL,
  `expirydate` date NOT NULL,
  `paymentmade` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerorder`
--

INSERT INTO `customerorder` (`id`, `username`, `month`, `subscribedate`, `expirydate`, `paymentmade`) VALUES
(7, 'ss', 1, '2018-07-14', '2018-08-13', 1300),
(7, '9817091757', 6, '2018-07-15', '2019-01-11', 7800),
(8, '9817091758', 6, '2018-07-15', '2019-01-11', 10200),
(7, '9842650585', 1, '2018-07-17', '2018-08-16', 1300),
(64, '9816099828', 3, '2018-07-21', '2018-10-19', 6600),
(8, '6789078978', 12, '2018-12-05', '2020-01-29', 20400),
(8, '1234', 1, '2018-12-05', '2019-01-04', 1700);

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `user` varchar(30) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`user`, `image_path`) VALUES
('sujan', '5c078bc86c1f5.jpg'),
('samir', '5b4f527b28159.jpg'),
('9817091757', '5b4afb79c7821.jpg'),
('9816099828', '5b52c5a2418a6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `number` varchar(35) NOT NULL,
  `citizen` varchar(35) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `fullname`, `gender`, `dob`, `address`, `number`, `citizen`, `type`) VALUES
('123', '5c078c663933b', 'Spiker', 'male', '2014-10-05', 'ss@gmaul.com', '123', '98-09889-09', 'staff'),
('1234', '5c078d064a1fc', '111', 'male', '2018-11-05', 'aaaaa', '1234', '98-09889-09', 'user'),
('6789078978', '5c078b81ea776', 'new', 'male', '2010-12-05', 'ss@gmaul.com', '6789078978', '98-09889-09', 'user'),
('9816099828', 'mango123', 'karun siwakoti', 'male', '2055-06-27', 'jhapa', '9816099828', '0854-98-999', 'user'),
('9817091757', '5b4af7fe472fe', 'Sujan Odari', 'male', '2014-04-12', 'Gatthaghar', '9817091757', '080-09-098987', 'user'),
('9817091758', '5b4afa57d9b91', 'yograj sharma', 'male', '2016-07-15', 'Gatthaghar', '9817091758', '0-9988-987', 'user'),
('9842650585', '5b4d979481491', 'aa', 'male', '2018-07-18', 'annamnager', '9842650585', 'ssss', 'user'),
('sujan', 'sujan1', '1', 'male', '2015-07-03', 'aa', '212', '04-04-789', 'manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bandwidth`
--
ALTER TABLE `bandwidth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bandwidth`
--
ALTER TABLE `bandwidth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
