-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 10:41 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zafaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `fname`, `lname`, `email`, `password`, `phone`) VALUES
(1, 'lubna', 'bsharat', 'lubna@outlook.com', '1234560', '05686985473'),
(2, 'Lana', 'Najm', 'lubnabsharat@outlook.com', '777', '1234567'),
(3, 'lubna', 'sss', 'lubnabsharat@outlook.com', '4456', '8974631'),
(4, 'Lana', 'Najm', 'lubnabsharat@outlook.com', '77788', '123456'),
(5, 'Lana', 'uuu', 'lubnabsharat@outlook.com', '123655', '1234567'),
(6, 'Lana', 'Najm', 'lubnabsharat@outlook.com', '78945', '12345676'),
(7, 'sara', 'Najm', 'lubnabsharat@outlook.com', '4598', '5689487'),
(8, 'Lana', 'Najm', 'lubnabsharat@outlook.com', '5896', '1234567'),
(9, 'Lana', 'Najm', 'lubnabsharat@outlook.com', '7895', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `oorder`
--

CREATE TABLE `oorder` (
  `oid` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `tid` int(10) UNSIGNED NOT NULL,
  `subid` int(10) UNSIGNED NOT NULL,
  `quantity` decimal(10,0) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oorder`
--

INSERT INTO `oorder` (`oid`, `id`, `tid`, `subid`, `quantity`, `total`) VALUES
(8, 1, 1, 1, '1', 10),
(9, 1, 1, 1, '1', 10),
(14, 1, 1, 5, '2', 30),
(15, 1, 1, 1, '1', 10),
(16, 1, 1, 6, '4', 40),
(17, 1, 1, 3, '5', 75),
(18, 1, 2, 10, '2', 16),
(19, 1, 2, 7, '6', 60),
(20, 1, 3, 16, '5', 40),
(21, 1, 3, 18, '1', 0),
(22, 1, 4, 19, '1', 8),
(23, 1, 4, 23, '2', 14),
(24, 1, 4, 22, '1', 5),
(25, 1, 5, 30, '1', 5),
(26, 1, 5, 29, '7', 28),
(27, 1, 5, 28, '1', 5),
(28, 1, 5, 28, '1', 5),
(29, 1, 5, 29, '9', 36),
(30, 1, 6, 31, '9', 27),
(31, 1, 6, 36, '1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `subtype`
--

CREATE TABLE `subtype` (
  `subid` int(10) UNSIGNED NOT NULL,
  `tid` int(10) UNSIGNED NOT NULL,
  `subname` varchar(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subtype`
--

INSERT INTO `subtype` (`subid`, `tid`, `subname`, `price`) VALUES
(1, 1, 'burger', 10),
(2, 1, 'pasta', 8),
(3, 1, 'pizza', 15),
(4, 1, 'roast beef', 17),
(5, 1, 'grilled fis', 15),
(6, 1, 'fried chick', 10),
(7, 2, 'vegetable s', 10),
(8, 2, 'lential sou', 15),
(9, 2, 'turkey soup', 12),
(10, 2, 'chineese co', 8),
(11, 2, 'shrimp soup', 13),
(12, 2, 'red curry s', 10),
(13, 3, 'tabbouleh', 6),
(14, 3, 'fattoush', 5),
(15, 3, 'carrot and ', 7),
(16, 3, 'red apple s', 8),
(17, 3, 'creamy corn', 5),
(18, 3, 'biryani sal', 0),
(19, 4, 'fries', 8),
(20, 4, 'cheese frie', 7),
(21, 4, 'onion rings', 5),
(22, 4, 'avocado', 5),
(23, 4, 'mashed pota', 7),
(24, 4, 'potato chip', 5),
(25, 5, 'ice nescafe', 6),
(26, 5, 'banana and ', 4),
(27, 5, 'caramel fra', 5),
(28, 5, 'ginger with', 5),
(29, 5, 'kiwi and le', 4),
(30, 5, 'fig and ber', 5),
(31, 6, 'doughnuts', 3),
(32, 6, 'pancake', 5),
(33, 6, 'strawberry ', 8),
(34, 6, 'special cak', 7),
(35, 6, 'cupcake', 5),
(36, 6, 'cookies', 3);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `tid` int(10) UNSIGNED NOT NULL,
  `tname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`tid`, `tname`) VALUES
(1, 'main meal'),
(2, 'soup'),
(3, 'salad'),
(4, 'snack'),
(5, 'drink'),
(6, 'dessert');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oorder`
--
ALTER TABLE `oorder`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `memff` (`id`),
  ADD KEY `subff` (`subid`),
  ADD KEY `typeff` (`tid`);

--
-- Indexes for table `subtype`
--
ALTER TABLE `subtype`
  ADD PRIMARY KEY (`subid`),
  ADD KEY `typeforr` (`tid`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `oorder`
--
ALTER TABLE `oorder`
  MODIFY `oid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `subtype`
--
ALTER TABLE `subtype`
  MODIFY `subid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `tid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `oorder`
--
ALTER TABLE `oorder`
  ADD CONSTRAINT `memff` FOREIGN KEY (`id`) REFERENCES `member` (`id`),
  ADD CONSTRAINT `subff` FOREIGN KEY (`subid`) REFERENCES `subtype` (`subid`),
  ADD CONSTRAINT `typeff` FOREIGN KEY (`tid`) REFERENCES `type` (`tid`);

--
-- Constraints for table `subtype`
--
ALTER TABLE `subtype`
  ADD CONSTRAINT `typeforr` FOREIGN KEY (`tid`) REFERENCES `type` (`tid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
