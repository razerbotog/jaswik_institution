-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 29, 2023 at 09:10 AM
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
-- Database: `thedigitalgurukul`
--

-- --------------------------------------------------------

--
-- Table structure for table `ngopartnerpage`
--

CREATE TABLE `ngopartnerpage` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `remarks` varchar(500) NOT NULL,
  `datee` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ngopartnerpage`
--

INSERT INTO `ngopartnerpage` (`id`, `fname`, `phone`, `email`, `remarks`, `datee`) VALUES
(1, 'Arif akhtar', '06001fjygygy', 'razerbotog@gmail.com', 'justtesing', '29/08/2023 12:34:56 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ngopartnerpage`
--
ALTER TABLE `ngopartnerpage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ngopartnerpage`
--
ALTER TABLE `ngopartnerpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
