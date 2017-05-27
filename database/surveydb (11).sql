-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2017 at 09:22 AM
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

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `responseId`, `questionId`, `choice`) VALUES
(4, 27, 3, '1'),
(5, 27, 5, '2'),
(6, 27, 7, '3'),
(7, 27, 9, '4'),
(8, 27, 14, '4'),
(9, 28, 3, '1'),
(10, 28, 5, '2'),
(11, 28, 7, '3'),
(12, 28, 9, '4'),
(13, 28, 14, '4'),
(14, 29, 3, '2'),
(15, 29, 5, '1'),
(16, 29, 7, '3'),
(17, 29, 9, '3'),
(18, 29, 14, '4'),
(19, 30, 3, '2'),
(20, 30, 4, '3'),
(21, 30, 5, '3'),
(22, 30, 8, '2'),
(23, 30, 9, '3'),
(24, 31, 3, '2'),
(25, 31, 4, '3'),
(26, 31, 5, '3'),
(27, 31, 8, '2'),
(28, 31, 9, '3'),
(29, 32, 3, '2'),
(30, 32, 4, '3'),
(31, 32, 5, '3'),
(32, 32, 8, '2'),
(33, 32, 9, '3'),
(34, 33, 3, '2'),
(35, 33, 4, '3'),
(36, 33, 5, '3'),
(37, 33, 8, '2'),
(38, 33, 9, '3'),
(39, 34, 3, '2'),
(40, 34, 4, '3'),
(41, 34, 5, '3'),
(42, 34, 8, '2'),
(43, 34, 9, '3'),
(44, 35, 3, '2'),
(45, 35, 4, '3'),
(46, 35, 5, '3'),
(47, 35, 8, '2'),
(48, 35, 9, '3'),
(49, 36, 3, '2'),
(50, 36, 4, '3'),
(51, 36, 5, '3'),
(52, 36, 8, '2'),
(53, 36, 9, '3'),
(54, 37, 3, '4'),
(55, 37, 4, '4'),
(56, 37, 5, '1'),
(57, 37, 8, '1'),
(58, 37, 9, '1'),
(59, 38, 3, '1'),
(60, 38, 4, '2'),
(61, 38, 5, '3'),
(62, 38, 8, '3'),
(63, 38, 9, '4'),
(64, 39, 3, '2'),
(65, 39, 4, '2'),
(66, 39, 5, '1'),
(67, 39, 8, '1'),
(68, 39, 9, '2'),
(69, 40, 4, '1'),
(70, 40, 5, '2'),
(71, 40, 7, '2'),
(72, 40, 15, '1'),
(73, 40, 16, '2'),
(74, 40, 17, '2'),
(75, 40, 18, '1'),
(76, 40, 19, '2');

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
(3, 'best quesiton ever', 'a31', 'a32', 'a33', 'a34'),
(4, 'q4', 'a41', 'a42', 'a43', 'a44'),
(5, 'q5', 'ACV', 'AVC', 'a53', 'a45'),
(7, 'q6', 'perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt ex', 'perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt ex', 'a73', 'a74'),
(8, 'q7', 'fdth', 'fdtjh', 'awevgf', 'arvbg'),
(9, 'q8', 'etrjh', 'setrjh', 'aef', 'awsv'),
(14, 'q9', 'awvg', 'awgv', 'awrevbg', 'aerwvbg'),
(15, 'q10', 'god', 'human', 'ant', 'whale'),
(16, 'ascfv', 'asev', 'asev', 'sav', 'savfg'),
(17, 'questions aha', 'ans 1 efwef', 'ans 2', 'ans 3', 'ans 3'),
(18, 'acd', 'ecvf', 'efcv', 'ewf', 'ewqf'),
(19, 'how r u', 'good', 'very good', 'so and so', 'not so good');

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `templateid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`id`, `userid`, `templateid`) VALUES
(3, 4, 38),
(4, 4, 38),
(5, 4, 38),
(6, 4, 38),
(7, 4, 38),
(8, 4, 38),
(9, 4, 38),
(10, 4, 38),
(11, 4, 38),
(12, 4, 38),
(13, 4, 38),
(14, 4, 38),
(15, 4, 38),
(16, 4, 38),
(17, 4, 38),
(18, 4, 38),
(19, 4, 38),
(20, 4, 38),
(21, 4, 38),
(22, 4, 38),
(23, 4, 38),
(24, 4, 38),
(25, 4, 38),
(26, 4, 38),
(27, 4, 38),
(28, 4, 38),
(29, 4, 38),
(30, 4, 37),
(31, 4, 37),
(32, 4, 37),
(33, 4, 37),
(34, 4, 37),
(35, 4, 37),
(36, 4, 37),
(37, 4, 37),
(38, 4, 37),
(39, 4, 37),
(40, 4, 40);

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
(37, 'larry money'),
(38, 'another one'),
(39, 'weqafdwqe'),
(40, 'many question');

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
(61, 3, 37),
(66, 3, 38),
(71, 3, 39),
(62, 4, 37),
(72, 4, 39),
(74, 4, 40),
(63, 5, 37),
(67, 5, 38),
(73, 5, 39),
(75, 5, 40),
(68, 7, 38),
(76, 7, 40),
(64, 8, 37),
(65, 9, 37),
(69, 9, 38),
(70, 14, 38),
(77, 15, 40),
(78, 16, 40),
(79, 17, 40),
(80, 18, 40),
(81, 19, 40);

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
(4, 'well ', 'zdfbdfn@gmail.com', '(514)546-1212', 'comp', 'torent'),
(28, 'laurian', 'staicu4@gmail.com', '514 730 0174', '360', 'maketing'),
(32, 'aefwaefw', '', '', '', ''),
(33, 'eresahgtrhbsaetr', '', '', '', ''),
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
(55, 'drtb ', 'awery@gamil.com', '(514)555-1212', 'awebry', 'bya'),
(56, 'aw4ehr', 'staicu@gmail.com', '(514)730-1074', 'qw', 'qwcd');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `templatesquestions`
--
ALTER TABLE `templatesquestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
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
