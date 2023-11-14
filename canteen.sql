-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 06:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('admin', 'admin123'),
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `bakery`
--

CREATE TABLE `bakery` (
  `item` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bakery`
--

INSERT INTO `bakery` (`item`, `price`, `quantity`) VALUES
('Eggpuff', 'Rs20', 640);

-- --------------------------------------------------------

--
-- Table structure for table `breakfast`
--

CREATE TABLE `breakfast` (
  `item` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `breakfast`
--

INSERT INTO `breakfast` (`item`, `price`, `quantity`) VALUES
('idly', 'Rs.18', 400),
('chappathi', 'Rs.22', 400),
('Parotta', 'Rs.15', 350),
('curd rice', 'Rs.25', 200),
('poori', 'Rs.30', 100);

-- --------------------------------------------------------

--
-- Table structure for table `choclateice`
--

CREATE TABLE `choclateice` (
  `item` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `choclateice`
--

INSERT INTO `choclateice` (`item`, `price`, `quantity`) VALUES
('cone60', 'Rs.60', 150),
('arun cup', 'Rs.10', 30);

-- --------------------------------------------------------

--
-- Table structure for table `colddrinks`
--

CREATE TABLE `colddrinks` (
  `item` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colddrinks`
--

INSERT INTO `colddrinks` (`item`, `price`, `quantity`) VALUES
('coca cola', 'Rs.15', 20);

-- --------------------------------------------------------

--
-- Table structure for table `hotdrinks`
--

CREATE TABLE `hotdrinks` (
  `item` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `litesnacks`
--

CREATE TABLE `litesnacks` (
  `item` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE `lunch` (
  `item` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lunch`
--

INSERT INTO `lunch` (`item`, `price`, `quantity`) VALUES
('chicken biriyani', 'Rs.80', 300),
('veg biriyani', 'Rs.50', 200),
('coffee', 'Rs.20', 200),
('noodles', 'Rs.60', 100),
('rice', 'Rs.70', 60);

-- --------------------------------------------------------

--
-- Table structure for table `stafflogin`
--

CREATE TABLE `stafflogin` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stafflogin`
--

INSERT INTO `stafflogin` (`id`, `username`, `password`) VALUES
(1, 'count_de_dracula', 'teenwolf12'),
(2, 'Ajay', 'teenwolf12');

-- --------------------------------------------------------

--
-- Table structure for table `stafforder`
--

CREATE TABLE `stafforder` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `idnumber` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `item1` varchar(20) NOT NULL,
  `item1qty` int(11) NOT NULL,
  `item2` varchar(20) NOT NULL,
  `item2qty` int(11) NOT NULL,
  `item3` varchar(20) NOT NULL,
  `item3qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stafflogin`
--
ALTER TABLE `stafflogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stafforder`
--
ALTER TABLE `stafforder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stafflogin`
--
ALTER TABLE `stafflogin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stafforder`
--
ALTER TABLE `stafforder`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
