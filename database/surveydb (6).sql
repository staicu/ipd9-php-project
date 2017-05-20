-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2017 at 06:29 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surveydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `ans1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ans2` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`) VALUES
(3, 'asgarwe', 'ans1', 'agvrew'),
(4, 'zbfdnd', 'zdnzd', ''),
(5, 'ac', 'ACV', 'AVC'),
(7, 'SADFASFD', 'perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt ex', 'perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt ex');

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `surveyid` int(11) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `idquestion1` int(11) NOT NULL,
  `idquestion2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `name`, `idquestion1`, `idquestion2`) VALUES
(3, 'no,lord', 5, 3),
(4, 'template1', 3, 4),
(6, 'tepm45', 4, 7),
(7, 'test', 3, 4),
(8, 'joker', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `company`, `position`, `password`, `level`) VALUES
(2, 'test', 'staicu4@gmail.com', '514', 'asefdc', 'awregerg', 'test', 1),
(3, 'aha', 'staicu4@gmail.com', '', '', '', '', 0),
(4, 'well ', 'zdfbdfn', '', '', '', '', 0),
(28, 'laurian', 'staicu4@gmail.com', '514 730 0174', '360', 'maketing', '', 0),
(29, 'asdfcv', '', '', '', '', '', 0),
(30, 'sdzvgsdr', '', '', '', '', '', 0),
(32, 'aefwaefw', '', '', '', '', '', 0),
(33, 'eresahgtrhbsaetr', '', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `surveyid` (`surveyid`);

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idquestion1` (`idquestion1`),
  ADD KEY `idquestion1_2` (`idquestion1`),
  ADD KEY `idquestion2` (`idquestion2`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `responses`
--
ALTER TABLE `responses`
  ADD CONSTRAINT `responses_ibfk_1` FOREIGN KEY (`surveyid`) REFERENCES `surveys` (`id`),
  ADD CONSTRAINT `responses_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `surveys`
--
ALTER TABLE `surveys`
  ADD CONSTRAINT `surveys_ibfk_1` FOREIGN KEY (`idquestion1`) REFERENCES `questions` (`id`),
  ADD CONSTRAINT `surveys_ibfk_2` FOREIGN KEY (`idquestion2`) REFERENCES `questions` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
