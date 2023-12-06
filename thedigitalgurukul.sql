-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 31, 2023 at 07:36 AM
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
-- Table structure for table `enquiryform`
--

CREATE TABLE `enquiryform` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `study` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `professionalcourse` varchar(200) NOT NULL,
  `vocationalcourse` varchar(200) NOT NULL,
  `skillcourse` varchar(200) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `datee` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiryform`
--

INSERT INTO `enquiryform` (`id`, `fname`, `phone`, `gender`, `study`, `email`, `professionalcourse`, `vocationalcourse`, `skillcourse`, `comments`, `datee`) VALUES
(1, 'TESTING', 'TESTING', 'Male', '10th Pass', 'TESTING@gmail.com', 'WEB DESIGNING & DEVELOPMEN', 'BEAUTY CULTURE', 'COMPUTER HARDWARE', 'TESTING', '17/08/2023 04:08:00 pm'),
(2, 'TESTING2', 'TESTING', 'Male', 'notselected', 'TESTING@gmail.com', 'notselected', 'notselected', 'notselected', '', '17/08/2023 04:08:28 pm'),
(3, 'TESTING3', 'TESTING', 'Male', '10th Pass', 'harry@gmail.com', 'GRAPHIC DESIGNING', 'CUTTING & TAILORING', 'notselected', 'testing', '18/08/2023 02:18:18 pm'),
(4, 'TESTING3', 'TESTING', 'Male', '10th Pass', 'harry@gmail.com', 'GRAPHIC DESIGNING', 'CUTTING & TAILORING', 'notselected', 'testing', '18/08/2023 02:18:53 pm'),
(5, 'Arif akhtar', 'TESTING6', 'Male', '10th Pass', 'arif98@gmail.com', 'GRAPHIC DESIGNING', 'notselected', 'COMPUTER HARDWARE', 'TESTING6', '19/08/2023 02:32:22 pm'),
(6, 'Arif akhtar', 'TESTING', 'Male', 'notselected', 'arif98@gmail.com', 'notselected', 'notselected', 'notselected', 'TESTING7', '21/08/2023 11:45:30 am'),
(7, 'Arif akhtar', '06001052658', 'Male', 'notselected', 'razerbotog@gmail.com', 'notselected', 'notselected', 'notselected', '', '25/08/2023 05:00:25 pm'),
(8, 'Arif akhtar', '06001052658', 'Male', 'notselected', 'razerbotog@gmail.com', 'notselected', 'notselected', 'notselected', '', '25/08/2023 05:00:35 pm'),
(9, 'Arif akhtar', '06001052658', 'Male', 'notselected', 'razerbotog@gmail.com', 'notselected', 'notselected', 'notselected', '', '25/08/2023 05:03:11 pm');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `academicStudy` varchar(500) NOT NULL,
  `professionalStudy` varchar(500) NOT NULL,
  `datee` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `fname`, `phone`, `email`, `academicStudy`, `professionalStudy`, `datee`) VALUES
(1, 'Arif akhtar', 'TESTING', 'harry@gmail.com', '', '', '19/08/2023 01:47:08 pm'),
(2, 'Arif akhtar', 'TESTING6', 'arif98@gmail.com', '', '', '19/08/2023 02:32:32 pm'),
(3, 'Arif akhtar', 'TESTING5', 'arif98@gmail.com', 'TESTING5', 'TESTING5', '21/08/2023 10:45:03 am'),
(4, '', '', 'harry@gmail.com', 'TESTING5', 'TESTING7', '21/08/2023 11:47:01 am'),
(5, 'Arif akhtar', 'testing90', 'testing90@gmail.com', 'testing90', 'testing90', '24/08/2023 04:35:06 pm'),
(6, '', '', '', '', '', '24/08/2023 06:02:25 pm'),
(7, '', '', '', '', '', '25/08/2023 10:34:17 am'),
(8, '', '', '', '', '', '25/08/2023 05:03:18 pm');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `datee` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `datee`) VALUES
(1, '', '17/08/2023 01:16:47 pm'),
(2, 'razerbotog@gmail.com', '17/08/2023 01:20:42 pm'),
(3, 'harry@gmail.com', '17/08/2023 01:33:45 pm'),
(4, 'razerbotog@gmail.com', '17/08/2023 01:37:43 pm'),
(5, 'razerbotog@gmail.com', '17/08/2023 01:57:21 pm'),
(6, 'razerbotog@gmail.com', '17/08/2023 01:58:12 pm'),
(7, 'razerbotog@gmail.com', '17/08/2023 02:00:23 pm'),
(8, 'razerbotog@gmail.com', '17/08/2023 03:19:22 pm'),
(9, 'arif98@gmail.com', '19/08/2023 02:32:47 pm'),
(10, 'razerbotog@gmail.com', '21/08/2023 11:21:28 am'),
(11, 'razerbotog@gmail.com', '21/08/2023 12:48:03 pm'),
(12, 'razerbotog@gmail.com', '25/08/2023 11:38:57 am'),
(13, 'TESTING@gmail.com', '25/08/2023 11:43:44 am'),
(14, 'harry@gmail.com', '25/08/2023 11:46:25 am'),
(15, '', '25/08/2023 12:34:26 pm'),
(16, 'mail2arifakhtar786@gmail.com', '25/08/2023 04:35:48 pm'),
(17, 'razerbotog@gmail.com', '28/08/2023 04:46:32 pm'),
(18, 'harry@gmail.com', '28/08/2023 06:18:00 pm');

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `qualification` varchar(500) NOT NULL,
  `preferred_languages` varchar(200) NOT NULL,
  `nurturefee` varchar(200) NOT NULL,
  `ngo_name` varchar(200) NOT NULL,
  `ngo_address` varchar(500) NOT NULL,
  `ngo_existence` varchar(500) NOT NULL,
  `team_type` varchar(200) NOT NULL,
  `service_sectors` varchar(200) NOT NULL,
  `aadhar_front` varchar(200) NOT NULL,
  `aadhar_back` varchar(200) NOT NULL,
  `pan_card` varchar(200) NOT NULL,
  `datee` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`id`, `first_name`, `last_name`, `gender`, `phone`, `email`, `qualification`, `preferred_languages`, `nurturefee`, `ngo_name`, `ngo_address`, `ngo_existence`, `team_type`, `service_sectors`, `aadhar_front`, `aadhar_back`, `pan_card`, `datee`) VALUES
(1, 'wed', 'we', 'w', 'wef', 'we', 'weq', 'wqef', '', 'we', 'ewq', 'wq', 'q', 'qwe', 'qwe', 'wq', 'weq', 'qw'),
(2, 'Arif', 'akhtar', 'Male', 'serwg', 'razerbotog@gmail.com', '10th Pass', 'Hindi, English', '', 'W Patel Nagar Rd', 'Arif akhtar', 'Arif akhtar', 'Paid', 'Education, Women Empowerment', 'javascript.png', 'bg1.png', 'bootstrap.png', '26/08/2023 03:33:44 pm'),
(3, 'Arif', 'akhtar', 'Male', 'serwg', 'razerbotog@gmail.com', '10th Pass', 'Hindi, English', '', 'W Patel Nagar Rd', 'Arif akhtar', 'Arif akhtar', 'Paid', 'Education, Women Empowerment', 'javascript.png', 'bg1.png', 'bootstrap.png', '26/08/2023 03:37:03 pm'),
(4, 'Arif', 'akhtar', 'Male', '06001052658', 'razerbotog@gmail.com', '10th Pass', 'English, Other', '', 'W Patel Nagar Rd', 'Arif akhtar', 'Arif akhtar', 'Paid', 'Health, Education', 'david.jpg', 'henrique-ferreira-26PDAgBLkQQ-unsplash.jpg', 'pramod-tiwari-pGPKN3Rlbik-unsplash.jpg', '26/08/2023 03:38:04 pm'),
(5, 'Arif', 'akhtar', 'Male', '06001052658', 'razerbotog@gmail.com', '10th Pass', 'English, Other', '', 'W Patel Nagar Rd', 'Arif akhtar', 'Arif akhtar', 'Paid', 'Health, Education', 'david.jpg', 'henrique-ferreira-26PDAgBLkQQ-unsplash.jpg', 'pramod-tiwari-pGPKN3Rlbik-unsplash.jpg', '26/08/2023 03:49:22 pm'),
(6, 'Arif', 'akhtar', 'Male', '06001052658', 'razerbotog@gmail.com', '10th Pass', 'English, Other', '', 'W Patel Nagar Rd', 'Arif akhtar', 'Arif akhtar', 'Paid', 'Health, Education', 'david.jpg', 'henrique-ferreira-26PDAgBLkQQ-unsplash.jpg', 'pramod-tiwari-pGPKN3Rlbik-unsplash.jpg', '26/08/2023 03:50:02 pm'),
(7, 'Arif', 'akhtar', 'Male', '06001052658', 'razerbotog@gmail.com', '10th Pass', 'English, Other', '', 'W Patel Nagar Rd', 'Arif akhtar', 'Arif akhtar', 'Paid', 'Health, Education', 'david.jpg', 'henrique-ferreira-26PDAgBLkQQ-unsplash.jpg', 'pramod-tiwari-pGPKN3Rlbik-unsplash.jpg', '26/08/2023 03:50:43 pm'),
(8, 'Arif', 'akhtar', 'Male', '06001052658', 'harry@gmail.com', '12th pass', '', 'nurturefee98', 'W Patel Nagar Rd', 'Arif akhtar', 'Arif akhtar', 'Paid', 'Child Development, Old Age Home', 'dummy1.jpg', 'robbin-grimm-uO1tb_Cd2yk-unsplash.jpg', 'dummy1.jpg', '28/08/2023 04:27:34 pm'),
(9, 'Arif', 'akhtar', 'Male', '06001052658y354', 'razerbotog@gmail.com', 'Qualification', 'Hindi, English', 'nurturefee9886', 'W Patel Nagar Rd', 'Arif akhtar', 'Arif akhtar', 'Unpaid', 'Women Empowerment, Child Development', 'henrique-ferreira-26PDAgBLkQQ-unsplash.jpg', 'zhou-xian-L32O0EFSvno-unsplash.jpg', 'linus-belanger-MaYlKQYeyoQ-unsplash.jpg', '28/08/2023 04:33:29 pm');

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

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `datee` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `fname`, `email`, `phone`, `comments`, `datee`) VALUES
(1, 'Arif akhtar', 'harry@gmail.com', 'TESTING', 'hiiiii', '22/08/2023 01:31:08 pm'),
(2, 'Arif akhtar', 'razerbotog@gmail.com', '06001052658', 'web dev', '28/08/2023 12:28:15 pm'),
(3, 'Arif akhtar', 'razerbotog@gmail.com', '06001052658', 'networking computer', '28/08/2023 05:29:21 pm'),
(4, 'Arif akhtar', 'harry@gmail.com', '0600869', '29 aug', '29/08/2023 11:10:38 am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiryform`
--
ALTER TABLE `enquiryform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngopartnerpage`
--
ALTER TABLE `ngopartnerpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiryform`
--
ALTER TABLE `enquiryform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ngopartnerpage`
--
ALTER TABLE `ngopartnerpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
