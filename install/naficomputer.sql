-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2016 at 09:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `naficomputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(11) NOT NULL,
  `categoryName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`) VALUES
(1, 'Speakers'),
(2, 'Headphone'),
(3, 'Mobile '),
(5, 'CCTV Camera'),
(6, 'Laptop'),
(7, 'Computer Hardware'),
(8, 'Security Software'),
(9, 'Modem'),
(10, 'Router');

-- --------------------------------------------------------

--
-- Table structure for table `productimage`
--

CREATE TABLE IF NOT EXISTS `productimage` (
`id` int(11) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `productName` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `path` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productimage`
--

INSERT INTO `productimage` (`id`, `category`, `productName`, `name`, `size`, `type`, `path`, `description`, `price`) VALUES
(6, 'Headphone', 'Headphone', 'E0D5C1D4-621B-44B0-8A35-D8FD64B0E0CA.png', '33050', 'image/png', '../public/upload/E0D5C1D4-621B-44B0-8A35-D8FD64B0E', 'hp headphones', '$499'),
(7, 'Mobile', 'Ipad Air and iOS7', 'CCD65659-046E-4C57-822D-AFB40F873FC9.png', '159980', 'image/png', '../public/upload/CCD65659-046E-4C57-822D-AFB40F873', 'Ipad Air and iOS7', '$800.00'),
(8, 'Mobile', 'Ipad Air and iOS7.1', '1EDF8442-4A28-424F-B334-7BFE3FB20E37.png', '111703', 'image/png', '../public/upload/1EDF8442-4A28-424F-B334-7BFE3FB20', 'Ipad Air and iOS7', '$499'),
(9, 'Mobile', 'Ipad Air and iOS7.2', '57FB9F62-3825-4BDF-868E-5E409E5C44E1.png', '148801', 'image/png', '../public/upload/57FB9F62-3825-4BDF-868E-5E409E5C4', 'Ipad Air and iOS7', '$499'),
(10, 'Speakers', 'Speaker', '973D812B-9F26-4271-935E-B92C4FDE6F56.png', '305337', 'image/png', '../public/upload/973D812B-9F26-4271-935E-B92C4FDE6', 'none', '$12'),
(11, 'Mobile', 'Smartphone', 'F784084F-5876-47EA-800A-DA110BBECA91.png', '85119', 'image/png', '../public/upload/F784084F-5876-47EA-800A-DA110BBEC', 'none', '$499'),
(12, 'Security Software', 'e-Scan', '0EFE5B3C-2683-4942-A82A-FB7EF103BE6C.jpg', '9541', 'image/jpeg', '../public/upload/0EFE5B3C-2683-4942-A82A-FB7EF103B', 'Antivirus Software', '877');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
`id` int(11) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `path` varchar(50) DEFAULT NULL,
  `caption` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `category`, `title`, `name`, `size`, `type`, `path`, `caption`) VALUES
(7, 'payment', 'Visa Card', '76D79358-226F-4A81-A79F-29D87554BD20.png', '1978', 'image/png', '../public/upload/76D79358-226F-4A81-A79F-29D87554B', 'payment method'),
(8, 'payment', 'paypal', '872B268C-22F2-4D4B-B3AB-EAFCAE2BA6CA.png', '1762', 'image/png', '../public/upload/872B268C-22F2-4D4B-B3AB-EAFCAE2BA', 'payment method'),
(9, 'payment', 'AMEX', '206D4A84-43DC-4C12-8EC2-9C65B327289B.png', '2946', 'image/png', '../public/upload/206D4A84-43DC-4C12-8EC2-9C65B3272', 'payment method'),
(10, 'payment', 'MasterCard', '50765EA9-D89E-44D4-A299-043CA9EBBC84.png', '2789', 'image/png', '../public/upload/50765EA9-D89E-44D4-A299-043CA9EBB', 'payment method'),
(11, 'brands', 'Sony', '23A71E83-0D3D-4C21-AC0D-B10C136FF367.png', '1974', 'image/png', '../public/upload/23A71E83-0D3D-4C21-AC0D-B10C136FF', 'Flat 5% To 35% Off Best Price Deals On Top Mobiles'),
(12, 'brands', 'Samsung', 'B771AD84-DA23-41B6-A7EF-1656870FA989.png', '6123', 'image/png', '../public/upload/B771AD84-DA23-41B6-A7EF-1656870FA', 'Flat 5% To 35% Off Best Price Deals On Top Mobiles'),
(13, 'brands', 'Cannons', '3F707756-5941-48E1-AC25-8F5298C007A7.png', '4076', 'image/png', '../public/upload/3F707756-5941-48E1-AC25-8F5298C00', 'Flat 5% To 35% Off Best Price Deals On Top Mobiles'),
(14, 'brands', 'Philips', '3A03FED4-65BF-46CD-891A-FC009E7D3B5F.png', '3071', 'image/png', '../public/upload/3A03FED4-65BF-46CD-891A-FC009E7D3', 'Flat 5% To 35% Off Best Price Deals On Top Mobiles'),
(15, 'slide', 'slide1', 'F7167092-1782-4DE0-B795-A87BC67CA3B9.png', '77741', 'image/png', '../public/upload/F7167092-1782-4DE0-B795-A87BC67CA', 'none'),
(16, 'slide', 'slide2', '584E6258-8A59-40A4-BE37-8429B13F7B62.png', '98959', 'image/png', '../public/upload/584E6258-8A59-40A4-BE37-8429B13F7', 'none'),
(17, 'offers', 'mobile1', 'B0CC2F10-C084-4300-B930-1233712299AC.png', '159980', 'image/png', '../public/upload/B0CC2F10-C084-4300-B930-123371229', 'up to 79% off'),
(18, 'offers', 'mobile2', 'A7DF6179-8BA7-4EA4-9E53-9E0C6A6A994A.png', '111703', 'image/png', '../public/upload/A7DF6179-8BA7-4EA4-9E53-9E0C6A6A9', 'up to 80% off'),
(19, 'offers', 'mobile3', '1DE06670-B23D-4140-A4A0-03567637ED8F.png', '107159', 'image/png', '../public/upload/1DE06670-B23D-4140-A4A0-03567637E', 'up to 85% off'),
(20, 'offers', 'mobile4', '8335D096-19BC-4915-96A8-2C383154FF82.png', '98039', 'image/png', '../public/upload/8335D096-19BC-4915-96A8-2C383154F', 'up to 80% off');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`usersID` int(11) NOT NULL,
  `userName` varchar(45) DEFAULT NULL,
  `userPassword` varchar(45) DEFAULT NULL,
  `userType` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersID`, `userName`, `userPassword`, `userType`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productimage`
--
ALTER TABLE `productimage`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`usersID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `productimage`
--
ALTER TABLE `productimage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `usersID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
