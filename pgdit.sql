-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 10:56 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pgdit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `examination` varchar(100) NOT NULL,
  `roll` int(4) NOT NULL,
  `year` int(4) NOT NULL,
  `gpa` varchar(4) NOT NULL,
  `payment` varchar(10) NOT NULL,
  `approve` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`email`, `password`, `name`, `father`, `mother`, `address`, `mobile`, `examination`, `roll`, `year`, `gpa`, `payment`, `approve`) VALUES
('ali@gmail.com', '123', 'Shahar Ali', 'Abdul Wahab Mia', 'Firoja Khalasi', 'Motijheel, Dhaka', '', '', 0, 0, '', '', 1),
('alim@gmail.com', '', 'Shahar Ali', 'Abdul Wahab Mia', 'Firoja Khalasi', 'Motijheel, Dhaka', '', '', 0, 0, '', '', 1),
('momtaz', '', 'Momtaz Uddin', '', '', '', '', '', 0, 0, '', '', 1),
('msalipbl@gmail.com', '', 'Md. Shahar Ali', '', '', '', '', '', 0, 0, '', '', 1),
('sad@gmail.com', '', 'S Ali', 'Abdul Wahab Mia', 'Firoja Khalasi', 'Motijheel, Dhaka', '', '', 0, 0, '', '', 0),
('sali@gmail.com', '', 'Md. Shahar Ali', 'Abdul Wahab Mia', 'Firoja Khalasi', 'Motijheel, Dhaka', '', '', 0, 0, '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
