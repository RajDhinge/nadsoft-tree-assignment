-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 20, 2020 at 05:19 PM
-- Server version: 8.0.21-0ubuntu0.20.04.4
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
-- Database: `Nadsoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `Members`
--

CREATE TABLE `Members` (
  `id` int NOT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Name` varchar(50) NOT NULL,
  `ParentId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Members`
--

INSERT INTO `Members` (`id`, `CreatedDate`, `Name`, `ParentId`) VALUES
(2, '2020-10-20 13:28:05', 'Abhijeet', 1),
(3, '2020-10-20 13:28:47', 'Sanel', 1),
(4, '2020-10-20 13:29:05', 'Kapil', 1),
(5, '2020-10-20 13:29:18', 'Adam', 1),
(6, '2020-10-20 13:29:37', 'Test case 1', 1),
(7, '2020-10-20 13:31:09', 'Albrito', 2),
(8, '2020-10-20 13:31:29', 'Sid', 2),
(9, '2020-10-20 13:31:50', 'Vasim Kudle', 2),
(10, '2020-10-20 13:32:19', 'Bala', 7),
(11, '2020-10-20 13:32:35', 'Sadashiv', 7),
(12, '2020-10-20 13:32:53', 'Raghaven ', 8),
(13, '2020-10-20 13:33:08', 'Arvind ', 12),
(14, '2020-10-20 13:33:25', 'David ', 13),
(15, '2020-10-20 13:33:44', 'Sarvesh', 14),
(16, '2020-10-20 13:34:02', 'Anup', 13),
(17, '2020-10-20 13:34:16', 'Manjiri', 8),
(18, '2020-10-20 15:26:56', 'Mohit', 3),
(48, '2020-10-20 17:14:21', 'testuserone', 15),
(49, '2020-10-20 17:15:10', 'deepak', 48);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Members`
--
ALTER TABLE `Members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Members`
--
ALTER TABLE `Members`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
