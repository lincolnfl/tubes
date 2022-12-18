-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 03:44 PM
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
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `desk` varchar(150) NOT NULL,
  `diskon` int(5) NOT NULL,
  `akhir` int(6) NOT NULL,
  `code` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `rate` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `judul`, `desk`, `diskon`, `akhir`, `code`, `tipe`, `rate`) VALUES
(1, 'Nasi Goreng Ala Rawr', 'Nasi Goreng Specialty Rawr dengan telur dan juga seafood', 5000, 20000, 'nasgor', 'nasi', 100),
(2, 'Mie Goreng Ala Rawr', 'Mie Goreng Specialty Rawr dengan telur dan juga seafood', 2000, 20000, 'miegor', 'mie', 120),
(3, 'Nasi Campur Ala Rawr', 'Nasi Campur Specialty Rawr dengan tumisan khas Rawr', 2000, 23000, 'campur', 'nasi', 170),
(4, 'Nasi Bakar Ala Rawr', 'Nasi Bakar Specialty Rawr dengan bumbu racikan Nusantara', 3000, 22000, 'bakar', 'nasi', 200),
(5, 'Spaghetti Bolognese Ala Rawr', 'Spaghetti Bolognese Specialty Rawr dengan bumbu racikan Italia', 5000, 25000, 'bolognese', 'spaghetti', 120),
(6, 'Spaghetti Carbonara Ala Rawr', 'Spaghetti Carbonara Specialty Rawr dengan bumbu racikan Italia', 2000, 28000, 'carbonara', 'spaghetti', 150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `judul` (`judul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
