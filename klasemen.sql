-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2024 at 09:54 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klasemen`
--

-- --------------------------------------------------------

--
-- Table structure for table `bola`
--

CREATE TABLE `bola` (
  `id` int(11) NOT NULL,
  `nama_tim` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `jml_bermain` int(11) NOT NULL,
  `menang` int(11) NOT NULL,
  `seri` int(11) NOT NULL,
  `kalah` int(11) NOT NULL,
  `gol_menang` int(11) NOT NULL,
  `gol_kalah` int(11) NOT NULL,
  `poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bola`
--

INSERT INTO `bola` (`id`, `nama_tim`, `kota`, `jml_bermain`, `menang`, `seri`, `kalah`, `gol_menang`, `gol_kalah`, `poin`) VALUES
(1, 'Arema FC', 'Malang', 7, 4, 0, 3, 9, 7, 12),
(2, 'Persipura', 'Jayapurra', 7, 3, 0, 4, 7, 10, 9),
(4, 'Persija', 'Jakarta', 8, 1, 2, 5, 4, 8, 5),
(5, 'Persib', 'Bandung', 7, 5, 1, 1, 7, 1, 16),
(6, 'PSM', 'Makassar', 7, 3, 1, 3, 3, 4, 10),
(7, 'PSGC', 'Ciamis', 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bola`
--
ALTER TABLE `bola`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bola`
--
ALTER TABLE `bola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
