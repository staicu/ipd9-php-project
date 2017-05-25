-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3333
-- Generation Time: May 25, 2017 at 05:36 PM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`, `email`) VALUES
(1, 'user', 'user', 'user@user.com');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `responseId` int(11) NOT NULL,
  `questionId` int(11) NOT NULL,
  `choice` enum('1','2','3','4') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `ans1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ans2` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ans3` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ans4` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`) VALUES
(3, 'q3', 'a31', 'a32', 'a33', 'a34'),
(4, 'q4', 'a41', 'a42', 'a43', 'a44'),
(5, 'q5', 'ACV', 'AVC', 'a53', 'a45'),
(7, 'q6', 'perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt ex', 'perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt ex', 'a73', 'a74'),
(8, 'q7', 'fdth', 'fdtjh', 'awevgf', 'arvbg'),
(9, 'q8', 'etrjh', 'setrjh', 'aef', 'awsv'),
(14, 'q9', 'awvg', 'awgv', 'awrevbg', 'aerwvbg'),
(15, 'q10', 'god', 'human', 'ant', 'whale');

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `templateid` int(11) NOT NULL,
  `answer` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `name`) VALUES
(1, 'template1'),
(2, 'tempalte2'),
(3, 'afefv'),
(4, 'afefv'),
(5, 'aefew'),
(6, 'aefew'),
(7, 'aefew'),
(8, 'aefew'),
(9, 'aefew'),
(10, 'aefew'),
(11, 'aefew'),
(12, 'aefew'),
(13, 'aefew'),
(14, 'aefew'),
(15, 'aefew'),
(16, 'aefew'),
(17, 'aefew'),
(18, 'aefew'),
(19, 'aefew'),
(20, 'aefew'),
(21, 'aefew'),
(22, 'last one'),
(23, 'on more'),
(24, 'awefrew'),
(25, 'SAFEDa'),
(26, 'asefaew'),
(27, 'total'),
(28, 'total'),
(29, 'total');

-- --------------------------------------------------------

--
-- Table structure for table `templatesquestions`
--

CREATE TABLE `templatesquestions` (
  `id` int(11) NOT NULL,
  `idquestion` int(11) NOT NULL,
  `idtemplate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `templatesquestions`
--

INSERT INTO `templatesquestions` (`id`, `idquestion`, `idtemplate`) VALUES
(5, 3, 16),
(7, 3, 17),
(9, 3, 18),
(11, 3, 19),
(13, 3, 20),
(15, 3, 21),
(17, 3, 22),
(19, 3, 23),
(21, 3, 24),
(23, 3, 25),
(25, 3, 26),
(27, 3, 27),
(29, 3, 28),
(31, 3, 29),
(1, 4, 1),
(6, 4, 16),
(8, 4, 17),
(10, 4, 18),
(12, 4, 19),
(14, 4, 20),
(16, 4, 21),
(18, 4, 22),
(20, 4, 23),
(22, 4, 24),
(24, 4, 25),
(26, 4, 26),
(28, 4, 27),
(30, 4, 28),
(32, 4, 29),
(2, 5, 1);

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
  `position` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `company`, `position`) VALUES
(2, 'test', 'staicu4@gmail.com', '(514)999-7889', 'asefdc', 'awregerg'),
(3, 'aha', 'staicu4@gmail.com', '', '', ''),
(4, 'well ', 'zdfbdfn@gmail.com', '(514)546-1212', 'comp', 'torent'),
(28, 'laurian', 'staicu4@gmail.com', '514 730 0174', '360', 'maketing'),
(29, 'asdfcv', '', '', '', ''),
(30, 'sdzvgsdr', '', '', '', ''),
(32, 'aefwaefw', '', '', '', ''),
(33, 'eresahgtrhbsaetr', '', '', '', ''),
(35, 'wef', 'wergf', 'werg', 'werg', 'wtgf'),
(36, 'waef', 'wef', '', '', ''),
(37, 'waef', 'wef', '', '', ''),
(38, 'snsxz', 'xgfdnhj', 'fgj', 'fgj', 'fgj'),
(39, 'snsxz', 'xgfdnhj', 'fgj', 'fgj', 'fgj'),
(41, 'snsxz', 'xgfdnhj', 'fgj', 'fgj', 'fgj'),
(42, 'laryy', 'sedfg', 'sagred', 'srged', 'srg'),
(43, 'laurian Staicu', 'staicu4@gmail.com', '(514)730-1074', 'tata industries', 'super manager'),
(44, 'laurian', 'staicu4@gmail.com', '(514)730-1971', '360', 'manager'),
(45, 'laurian', 'staicu4@gmail.com', '(514)730-1971', '360', 'manager'),
(46, 'laurian', 'staicu4@gmail.com', '(514)730-1971', '360', 'manager'),
(47, 'laurian', 'staicu4@gmail.com', '(514)730-1971', '360', 'manager'),
(48, 'laurian', 'staicu4@gmail.com', '(514)730-1971', '360', 'manager'),
(49, 'laurian', 'staicu4@gmail.com', '(514)730-1971', '360', 'manager'),
(50, 'laurian', 'staicu4@gmail.com', '(514)730-1971', '360', 'manager'),
(51, 'laurian', 'staicu4@gmail.com', '(514)730-1971', '360', 'manager'),
(52, 'laurian', 'staicu4@gmail.com', '(514)730-1971', '360', 'manager'),
(53, 'larry', 'larrry@gmail.com', '(514)676-7765', 'afC', 'awef'),
(54, 'larry', 'larrry@gmail.com', '(514)676-7765', 'afC', 'awef'),
(55, 'drtb ', 'awery@gamil.com', '(514)555-1212', 'awebry', 'bya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`responseId`),
  ADD KEY `questionId` (`questionId`);

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
  ADD KEY `surveyid` (`templateid`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templatesquestions`
--
ALTER TABLE `templatesquestions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idquestion_2` (`idquestion`,`idtemplate`),
  ADD KEY `idquestion` (`idquestion`),
  ADD KEY `idtemplate` (`idtemplate`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `templatesquestions`
--
ALTER TABLE `templatesquestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`questionId`) REFERENCES `questions` (`id`),
  ADD CONSTRAINT `answers_ibfk_3` FOREIGN KEY (`responseId`) REFERENCES `responses` (`id`);

--
-- Constraints for table `responses`
--
ALTER TABLE `responses`
  ADD CONSTRAINT `responses_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `responses_ibfk_3` FOREIGN KEY (`templateid`) REFERENCES `templates` (`id`);

--
-- Constraints for table `templatesquestions`
--
ALTER TABLE `templatesquestions`
  ADD CONSTRAINT `templatesquestions_ibfk_1` FOREIGN KEY (`idquestion`) REFERENCES `questions` (`id`),
  ADD CONSTRAINT `templatesquestions_ibfk_2` FOREIGN KEY (`idtemplate`) REFERENCES `templates` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
