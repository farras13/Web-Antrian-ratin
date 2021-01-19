-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 02:22 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imigrasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `no_antri` varchar(15) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`no_antri`, `tanggal`) VALUES
('A-001', '2021-01-18 06:30:50'),
('A-002', '2021-01-18 07:11:59'),
('A-003', '2021-01-18 07:49:17'),
('A-004', '2021-01-18 07:49:20'),
('A-005', '2021-01-18 07:49:24'),
('A-006', '2021-01-18 07:49:26'),
('A-007', '2021-01-18 07:49:29'),
('A-008', '2021-01-18 07:49:31'),
('A-009', '2021-01-18 07:49:32'),
('A-010', '2021-01-18 07:49:35'),
('A-011', '2021-01-18 07:49:38'),
('A-012', '2021-01-18 07:49:40'),
('A-013', '2021-01-18 07:49:42'),
('A-014', '2021-01-18 07:49:43'),
('A-015', '2021-01-18 07:49:45'),
('A-016', '2021-01-18 07:49:46'),
('A-017', '2021-01-18 07:49:47'),
('A-018', '2021-01-18 07:49:47'),
('A-019', '2021-01-18 07:49:48'),
('A-020', '2021-01-18 07:49:49'),
('A-021', '2021-01-18 07:49:50'),
('A-022', '2021-01-18 07:49:51'),
('A-023', '2021-01-18 07:49:54'),
('A-024', '2021-01-18 07:49:54'),
('A-025', '2021-01-18 07:49:55'),
('A-026', '2021-01-18 07:49:56'),
('A-027', '2021-01-18 07:49:58'),
('A-028', '2021-01-18 07:49:59'),
('A-029', '2021-01-18 07:50:00'),
('A-030', '2021-01-18 07:50:00'),
('A-031', '2021-01-18 07:50:01'),
('A-032', '2021-01-18 07:50:02'),
('A-033', '2021-01-18 07:50:03'),
('A-034', '2021-01-18 07:50:21');

-- --------------------------------------------------------

--
-- Table structure for table `antrianb`
--

CREATE TABLE `antrianb` (
  `no_antrib` varchar(15) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `antrianc`
--

CREATE TABLE `antrianc` (
  `no_antric` varchar(15) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `antriand`
--

CREATE TABLE `antriand` (
  `no_antrid` varchar(15) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`no_antri`);

--
-- Indexes for table `antrianb`
--
ALTER TABLE `antrianb`
  ADD PRIMARY KEY (`no_antrib`);

--
-- Indexes for table `antrianc`
--
ALTER TABLE `antrianc`
  ADD PRIMARY KEY (`no_antric`);

--
-- Indexes for table `antriand`
--
ALTER TABLE `antriand`
  ADD PRIMARY KEY (`no_antrid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
