-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 02:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040091`
--

-- --------------------------------------------------------

--
-- Table structure for table `elektronika`
--

CREATE TABLE `elektronika` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `pabrikan` varchar(100) NOT NULL,
  `bran` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elektronika`
--

INSERT INTO `elektronika` (`id`, `nama`, `gambar`, `pabrikan`, `bran`, `harga`) VALUES
(1, 'Televisi', '1.jpg', 'Indonesia', 'Polytron', 'Rp 1.348.000'),
(2, 'Laptop', '2.jpg', 'Tiongkok', 'Lenovo', 'Rp 5.000.000'),
(3, 'AC', '3.jpg', 'Korea', 'LG', 'Rp 3.200.000'),
(4, 'HandPhone', '4.jpg', 'China', 'Vivo', 'Rp 2.999.000'),
(5, 'Strika', '5.jpg', 'Indonesia', 'Maspion', 'Rp 199.000'),
(6, 'Blender', '6.jpg', 'Indonesia', 'Cosmos', 'Rp 299.000'),
(7, 'Lampu', '7.jpg', 'Belanda', 'Philips', 'Rp 90.000'),
(8, 'Mesin Cuci', '8.jpg', 'Thailand', 'Sharp', 'Rp 3.820.000'),
(9, 'Hairdryer', '9.jpg', 'China', 'Wigo', 'Rp 122.000'),
(10, 'Kulkas', '10.jpg', 'China', 'Toshiba', 'Rp 5.899.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elektronika`
--
ALTER TABLE `elektronika`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elektronika`
--
ALTER TABLE `elektronika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
