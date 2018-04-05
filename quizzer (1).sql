-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2018 at 08:19 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizzer`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 0, '35'),
(2, 1, 0, '36'),
(3, 1, 0, '45'),
(4, 1, 1, '54'),
(5, 2, 0, '9'),
(6, 2, 0, '11'),
(7, 2, 0, '13'),
(8, 2, 1, '15'),
(9, 3, 0, '18'),
(10, 3, 1, '24'),
(11, 3, 0, '35'),
(12, 3, 0, '46'),
(13, 4, 0, '0.6'),
(14, 4, 1, '0.06'),
(15, 4, 0, '0.5'),
(16, 4, 0, '0.07'),
(17, 5, 0, '31'),
(18, 5, 1, '25'),
(19, 5, 0, '31'),
(20, 5, 0, '7'),
(21, 6, 1, '2'),
(22, 6, 0, '22'),
(23, 6, 0, '24'),
(24, 6, 0, '25'),
(26, 0, 0, ''),
(27, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `text`) VALUES
(1, '	\r\nIf one-third of one-fourth of a number is 15, then three-tenth of that number is:'),
(2, 'Three times the first of three consecutive odd integers is 3 more than twice the third. The third integer is:'),
(3, '	\r\nA two-digit number is such that the product of the digits is 8. When 18 is added to the number, then the digits are reversed. The number is:'),
(4, 'The cube root of .000216 is:'),
(5, '	\r\nWhich one of the following is not a prime number?'),
(6, 'What least number must be added to 1056, so that the sum is completely divisible by 23 ?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
