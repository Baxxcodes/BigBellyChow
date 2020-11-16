-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2019 at 12:57 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bigbelly`
--

-- --------------------------------------------------------

--
-- Table structure for table `coupon_reg`
--

CREATE TABLE `coupon_reg` (
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon_reg`
--

INSERT INTO `coupon_reg` (`name`, `email`, `message`) VALUES
('jane doe', 'jd@blindspot.com', 'i love big belly burger'),
('jane doe', 'jd@blindspot.com', 'i love big belly burger'),
('Clark Kent', 'ck@dailyplanet.org', 'big belly ice cream soothes my sugar cravings'),
('Daenerys Targaryen', 'dt@got.com', 'Mother of Dragons like hot and fiery sizzling steak'),
('Jon Snow', 'js@winterfell.com', 'you know nothing, jon snow');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_details`
--

CREATE TABLE `delivery_details` (
  `name` text NOT NULL,
  `emailAddress` varchar(50) NOT NULL,
  `phone` int(13) NOT NULL,
  `city` varchar(100) NOT NULL,
  `da` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_details`
--

INSERT INTO `delivery_details` (`name`, `emailAddress`, `phone`, `city`, `da`) VALUES
('ade', '', 15267787, 'hdjkj', 'jhxjc'),
('ade', '', 15267787, 'hdjkj', 'jhxjc'),
('dfgfnf', 'fhjkl@fhh', 12344, 'efgfhghg', 'fbgnh'),
('Barry Allen', 'ba@ccpd.org', 999, 'Central city', 'Star Labs'),
('Barry Allen', 'ba@ccpd.org', 999, 'Central city', 'Star Labs'),
('Barry Allen', 'ba@ccpd.org', 999, 'Central city', 'Star Labs'),
('Oliver Queen', 'qq@scpd.org', 888, 'Star city', 'ArrowCave'),
('Oliver Queen', 'qq@scpd.org', 888, 'Star city', 'ArrowCave'),
('Kara Danvers', 'kd@supergirl.com', 777, 'National City', 'CatCo'),
('Bruce Wayne', 'bw@batman.com', 666, 'Gotham City', 'Batcave');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
