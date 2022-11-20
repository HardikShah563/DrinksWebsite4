-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 01:12 PM
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
-- Database: `drinksify`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(5) NOT NULL,
  `uid` int(5) NOT NULL,
  `pid` int(5) NOT NULL,
  `amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(5) NOT NULL,
  `pdesc` varchar(255) NOT NULL,
  `pcost` int(5) NOT NULL,
  `pimg` varchar(255) NOT NULL,
  `pcategory` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pdesc`, `pcost`, `pimg`, `pcategory`) VALUES
(1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.', 9, './img/drink1.png', 'can'),
(2, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.', 9, './img/drink2.png', 'can'),
(3, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.', 9, './img/drink3.png', 'can'),
(4, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.', 9, './img/drink4.png', 'can'),
(5, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.', 9, './img/drink5.png', 'can'),
(6, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.', 9, './img/drink6.png', 'can'),
(7, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.', 9, './img/drink7.png', 'can');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
