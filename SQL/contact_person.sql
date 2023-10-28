-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2023 at 07:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_person`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_agama`
--

CREATE TABLE `tb_agama` (
  `id` int(11) NOT NULL,
  `nama_agama` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_person`
--

CREATE TABLE `tb_person` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(32) NOT NULL,
  `gender` enum('Laki-Laki','Perempuan') NOT NULL,
  `id_agama` int(11) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(32) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `sosmed` varchar(32) NOT NULL,
  `foto` varchar(32) NOT NULL,
  `asal_kampus` varchar(32) NOT NULL,
  `quotes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_agama`
--
ALTER TABLE `tb_agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_person`
--
ALTER TABLE `tb_person`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_tb_agama` (`id_agama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_agama`
--
ALTER TABLE `tb_agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_person`
--
ALTER TABLE `tb_person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_person`
--
ALTER TABLE `tb_person`
  ADD CONSTRAINT `tb_person_ibfk_1` FOREIGN KEY (`id_agama`) REFERENCES `tb_agama` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
