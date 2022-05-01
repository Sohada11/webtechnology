-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 09:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `client`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `fName` varchar(1000) NOT NULL,
  `city` varchar(1000) NOT NULL,
  `contactNo` int(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`fName`, `city`, `contactNo`, `date`) VALUES
('ass pass', 'usa', 123456, '2022-04-29'),
('John him', 'Sylhet', 0, '2022-04-29'),
('John him', 'Rajshahi', 0, '2022-04-29'),
('John him', 'Sylhet', 0, '2022-04-27'),
('John him', 'Sylhet', 0, '2022-04-27'),
('John him', 'Rajshahi', 0, '2022-04-29'),
('Sohada gil', 'Dhaka', 0, '2022-05-03'),
('Sohada gil', 'Dhaka', 0, '2022-05-03'),
('ggg tttt', 'Chittagong', 0, '2022-06-10'),
('Taahrima Tasnim', 'Sylhet', 0, '2022-04-19'),
('Taahrima Tasnim', 'Sylhet', 0, '2022-04-19'),
('tash jin', 'Chittagong', 0, '2009-09-09'),
('Sohada gin', 'Sylhet', 0, '2022-04-26'),
('Taahrima Tasnim', 'Chittagong', 1713456789, '2022-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE `photographer` (
  `package` int(100) NOT NULL,
  `Description` text NOT NULL,
  `Amount` int(100) NOT NULL,
  `Action` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`package`, `Description`, `Amount`, `Action`) VALUES
(1, 'This package includes 2 photographers and 1 cinematographers. ', 25000, 'Select '),
(2, 'This package includes 5 photographers and 3 cinematographers. ', 45000, 'Select'),
(3, 'This package includes 7 photographers and 4 cinematographers. ', 70000, 'Select'),
(4, 'This package includes 10 photographers and 8 cinematographers. ', 110000, 'Select');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `vendor` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`vendor`, `type`) VALUES
('Indigo', 'Photography'),
('Vows', 'Photography'),
('Aethetic', 'Wedding planner'),
('Sygmaz', 'Wedding Planner'),
('Salina Amir', 'Makeup Artist'),
('Shunno', 'Music Band'),
('Snapshot', 'Photography'),
('Enchanted', 'Wedding planner'),
('FoodHall', 'Caterer'),
('Zaar', 'Music Band'),
('Glitz', 'Photographer'),
('Warah', 'Bridal Couture '),
('Amanah Rahman', 'Makeup Artistry'),
('Sahar Rahman', 'Bridal Couture'),
('Haya', 'Kids Shopping '),
('Dine In', 'Caterer '),
('Josh', 'Shoe Retailer '),
('Paper Boutique ', 'Wedding Invitations '),
('DalaBari', 'Dala Decorator ');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `ID` int(100) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `email` varchar(400) NOT NULL,
  `uname` varchar(400) NOT NULL,
  `pass` varchar(400) NOT NULL,
  `image` text DEFAULT NULL,
  `cpass` varchar(1000) NOT NULL,
  `gender` varchar(1000) NOT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ID`, `Name`, `email`, `uname`, `pass`, `image`, `cpass`, `gender`, `dob`) VALUES
(11, 'Angel R', 'angel@gmail.com', 'angel11', '#angel11', 'Dummy.png', '#angel11', 'Female', '2002-06-15'),
(13, 'Alina Ahm', 'alina223@gmail.com', '123alin', 'abcdef123#', 'Dummy.png', 'abcdef123#', 'Female', '2022-03-24'),
(14, 'sohada', 'sohada@gmail.com', 'sohada123', 'abc123#$', 'Dummy.png', 'abc123#$', 'Male', '2022-02-02'),
(15, 'Sohada Sohada', 'Sohada@gmail.com', 'Sohada', 'Sa12345678@', 'Dummy.png', 'Sa12345678@', 'Female', '2022-02-28'),
(17, 'kjkjk', 'hjj@jbmbnm', 'eeee34', 'eee45', 'Dummy.png', 'eee45', 'Female', '2022-04-11'),
(18, 'tahrima hasan', 'Tahrima23@gmail.com', 'era123', 'era123', 'Dummy.png', 'era123', 'Female', '2022-04-27'),
(20, '', 'azwa55@gmail.com', 'Azwa11', '#Azwa200', 'Dummy.png', '#Azwa200', 'Female', '2000-07-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
