-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2017 at 01:08 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `user_ID` varchar(255) NOT NULL,
  `date_of_like` date NOT NULL,
  `post_ID` int(30) NOT NULL,
  `sr_no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`user_ID`, `date_of_like`, `post_ID`, `sr_no`) VALUES
('as@d.com', '2017-07-08', 4, 3),
('fs@d.com', '2017-07-08', 1, 26),
('fs@d.com', '2017-07-08', 4, 27),
('langlen.devi@gaboli.com', '2017-07-10', 4, 30),
('ankit.kharwar@gaboli.com', '2017-07-10', 5, 37),
('ankit.kharwar@gaboli.com', '2017-07-10', 1, 39),
('ankit.kharwar@gaboli.com', '2017-07-10', 6, 40),
('langlen.devi@gaboli.com', '2017-07-10', 3, 41),
('langlen.devi@gaboli.com', '2017-07-10', 1, 42);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_ID` int(30) NOT NULL,
  `user_ID` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `date_of_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `no_of_likes` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_ID`, `user_ID`, `post`, `date_of_post`, `no_of_likes`) VALUES
(1, 'as@d.com', 'df', '2017-07-06 15:22:02', 3),
(2, 'as@d.com', '                  rgreg                 ', '2017-07-06 18:30:00', 0),
(3, 'ankit.kharwar@gaboli.com', 'dadadad', '2017-07-07 06:12:53', 1),
(4, 'ankit.kharwar@gaboli.com', '                            sd                       fdsfs ', '2017-07-06 18:30:00', 3),
(5, 'fs@d.com', 'hello indiaaaaa!!!!!!!!!!!', '2017-07-07 19:41:32', 1),
(6, 'langlen.devi@gaboli.com', '    gfgfdds               ', '2017-07-09 18:30:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `AdmissionNo` int(11) NOT NULL,
  `EmailID` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`AdmissionNo`, `EmailID`, `Password`, `Role`, `created_at`) VALUES
(1, 'A@G.com', '112233', NULL, '2017-07-04 00:00:00'),
(2, 'an@g.com', '1234567', NULL, '0000-00-00 00:00:00'),
(3, 'ankit.@gaboli.com', '12345678', NULL, '2017-07-05 00:00:00'),
(4, 'ankit.kharwar@gaboli.com', '12345678', NULL, '2017-07-04 00:00:00'),
(5, 'as@d.com', '12345678', NULL, '2017-07-05 00:00:00'),
(6, 'fs@d.com', '12345678', NULL, '2017-07-04 00:00:00'),
(7, 's@g.com', '12345678', NULL, '2017-07-04 00:00:00'),
(12, 'nkit@g.com', 'sdfghj', 'student', '1992-03-30 00:00:00'),
(15, 'ad@d.com', '12345678', NULL, '2017-07-06 16:42:58'),
(16, 'langlen.devi@gaboli.com', '$2y$10$M4Bc8.gAMsyittAjyxnxjuKL80.8o4qE17FEAAHNEz5/f6YAgvj2e', NULL, '2017-07-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `AdmissionNo` int(11) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `FatherName` varchar(255) DEFAULT NULL,
  `MotherName` varchar(255) DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Phone` varchar(13) DEFAULT NULL,
  `Category` varchar(10) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `EmailID` varchar(255) NOT NULL,
  `DateOfAdmision` date DEFAULT NULL,
  `Qualification` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`AdmissionNo`, `FirstName`, `LastName`, `FatherName`, `MotherName`, `Gender`, `DOB`, `Phone`, `Category`, `Address`, `City`, `EmailID`, `DateOfAdmision`, `Qualification`, `username`, `Password`) VALUES
(0, 'ankit', 'kharwaar', NULL, NULL, NULL, '1992-12-15', NULL, NULL, NULL, NULL, 'ankit.@gaboli.com', NULL, NULL, 'ankit1', '12345678'),
(0, 'ankit', 'kharwaar', NULL, NULL, NULL, '1992-12-15', NULL, NULL, NULL, NULL, 'ankit.kharwar@gaboli.com', NULL, NULL, 'ankit1', '12345678'),
(0, 'ank', 'kha', NULL, NULL, NULL, '2222-12-21', NULL, NULL, NULL, NULL, 'as@d.com', NULL, NULL, 'ankit1', '12345678'),
(0, 'gaboli', 'ku', NULL, NULL, NULL, '2017-07-10', NULL, NULL, NULL, NULL, 'langlen.devi@gaboli.com', NULL, NULL, 'gaboli', '$2y$10$M4Bc8.gAMsyittAjyxnxjuKL80.8o4qE17FEAAHNEz5/f6YAgvj2e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `fk_user_id` (`user_ID`),
  ADD KEY `fk_post_id` (`post_ID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`AdmissionNo`,`EmailID`),
  ADD UNIQUE KEY `EmailID` (`EmailID`);

--
-- Indexes for table `userdetail`
--
ALTER TABLE `userdetail`
  ADD PRIMARY KEY (`AdmissionNo`,`EmailID`),
  ADD KEY `AdmissionNo` (`AdmissionNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `sr_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `AdmissionNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `fk_post_id` FOREIGN KEY (`post_ID`) REFERENCES `posts` (`post_ID`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_ID`) REFERENCES `user` (`EmailID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
