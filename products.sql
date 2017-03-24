-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2017 at 12:50 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amazon_products`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ASIN` varchar(100) NOT NULL,
  `Title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `MPN` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ASIN`, `Title`, `MPN`, `Price`) VALUES
('34435', 'HARRY POTTER', '456', '6.99'),
('34435', 'HARRY POTTER', '456', '6.99'),
('10', 'Hello', '1231', '9'),
('', '', '', ''),
('B01A03HKFE', 'Murder at Merisham Lodge: Miss Hart and Miss Hunter Investigate: Book 1', '', ''),
('', '', '', ''),
('059035342X', 'Harry Potter and the Sorcerers Stone', '9780590353427', '$10.99'),
('059035342X', 'Harry Potter and the Sorcerers Stone', '9780590353427', '$10.99'),
('059035342X', 'Harry Potter and the Sorcerers Stone', '9780590353427', '$10.99'),
('B0170K9UTO', 'Hello', '', '$1.29'),
('', '', '', ''),
('059035342X', 'Harry Potter and the Sorcerers Stone', '9780590353427', '$10.99'),
('059035342X', 'Harry Potter and the Sorcerers Stone', '9780590353427', '$10.99'),
('059035342X', 'Harry Potter and the Sorcerers Stone', '9780590353427', '$10.99'),
('059035342X', 'Harry Potter and the Sorcerers Stone', '9780590353427', '$10.99'),
('059035342X', 'Harry Potter and the Sorcerers Stone', '9780590353427', '$10.99');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
