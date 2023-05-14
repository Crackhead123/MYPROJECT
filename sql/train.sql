-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 03:04 AM
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
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `TR_NO` int(10) NOT NULL,
  `TR_NAME` varchar(70) NOT NULL,
  `FROM_STN` varchar(20) NOT NULL,
  `TO_STN` varchar(20) NOT NULL,
  `SEATS` int(4) NOT NULL,
  `FARE` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`TR_NO`, `TR_NAME`, `FROM_STN`, `TO_STN`, `SEATS`, `FARE`) VALUES
(10001, 'Teesta Torsha EXP', 'New Jalpaiguri', 'New Coochbehar', 150, '50.50'),
(10002, 'Uttarbanga EXP', 'New Jalpaiguri', 'Dhupguri', 170, '30.50'),
(10004, 'Kanchanjungha EXP', 'New Jalpaiguri', 'Maldah Town', 166, '40.50'),
(10005, 'Teesta Torsha EXP', 'New Coochbehar', 'New Jalpaiguri', 150, '50.50'),
(10006, 'Padatik EXP', 'New Coochbehar', 'Jalpaiguri Road', 150, '50.50'),
(10007, 'Kanchanjungha EXP', 'New Coochbehar', 'Dhupguri', 150, '50.50'),
(10008, 'Kanchanjungha EXP', 'New Coochbehar', 'Maldah Town', 150, '50.50'),
(10009, 'Padatik EXP', 'Jalpaiguri Road', 'New Coochbehar', 150, '50.50'),
(10010, 'Testa Torsha EXP', 'Jalpaiguri Road', 'Dhupguri', 150, '50.50'),
(10012, 'Padatik EXP', 'Jalpaiguri Road', 'Maldah Town', 150, '50.50'),
(10013, 'Uttarbanga EXP', 'Dhupguri', 'New Jalpaiguri', 170, '30.50'),
(10014, 'Uttarbanga EXP', 'Dhupguri', 'New Coochbehar', 170, '30.50'),
(10015, 'Padatik EXP', 'Dhupguri', 'Maldah Town', 170, '30.50'),
(10016, 'Kanchanjungha EXP', 'Maldah Town', 'New Jalpaiguri', 170, '40.50'),
(10017, 'Kanchanjungha EXP', 'Maldah Town', 'New Coochbehar', 150, '50.50'),
(10018, 'Padatik EXP', 'Maldah Town', 'Dhupguri', 170, '30.50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`TR_NO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
