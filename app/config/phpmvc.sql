-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 23, 2025 at 02:55 AM
-- Server version: 11.6.2-MariaDB
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nrp` varchar(25) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`) VALUES
(1, 'Rizky Cahyono', '14141231', 'rizkycahyono@mail', 'Teknik Informatka'),
(2, 'Intan Sukma Mahsuni', '23423423', 'intanmahsuni@mail', 'Teknik Kehutanan'),
(5, 'Imel Cahya', '2342', 'imel@mail.com', 'Teknik Informatika'),
(6, 'Aura Azzahra', '234234234', 'aura@mail.com', 'Teknik Mesin'),
(8, 'Naza Rahma', '234234234', 'rizkycahyonoputra2004@gmail.com', 'Teknik Industri Pertanian'),
(10, 'willy arya', '32423432', 'willy@mail.com', 'Teknik Kehutanan'),
(12, 'Asa', '3432424', 'asa@mail.com', 'Teknik Kehutanan'),
(15, 'Melanie Salwa', '321321', 'melaniesalwa12@mail.com', 'Teknik Industri Pertanian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
