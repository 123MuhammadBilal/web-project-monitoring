-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 04:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `client` varchar(100) NOT NULL,
  `pleader` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `progress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `pname`, `client`, `pleader`, `email`, `sdate`, `edate`, `progress`) VALUES
(1, 'Pembuatan SI Keuangan', 'Bakeuda Prov. Kalsel', 'Indra Setiawan', 'indra.setiawan@gmail.com', '2022-12-01', '2022-12-08', '30'),
(2, 'Learning Management System', 'Ruang Guru', 'Hilman Syaputra', 'hilman.syah@gmail.com', '2022-03-01', '2022-10-03', '80'),
(3, 'SI Pendataan Atlet Daerah', 'Dispora Jawa Timur', 'Febri Gunawan', 'febri.gunawan@gmail.com', '2022-02-02', '2022-03-05', '40'),
(4, 'Employee Monitoring', 'PT. Bina Sarana Sukses', 'Handoko Aji', 'handoko.aji@gmail.com', '2021-02-09', '2022-12-01', '100'),
(5, 'LMS', 'SI Travelling', 'Muhamnmad Bilal', 'bilal@gmail.com', '2002-09-09', '2003-09-09', '38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
