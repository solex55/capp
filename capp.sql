-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2022 at 02:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capp`
--

-- --------------------------------------------------------

--
-- Table structure for table `imgs`
--

CREATE TABLE `imgs` (
  `id` int(11) NOT NULL,
  `profile_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imgs`
--

INSERT INTO `imgs` (`id`, `profile_image`) VALUES
(1, '1600280437_IMG-20200812-WA0057.jpg'),
(2, '1600281654_IMG-20200812-WA0057.jpg'),
(3, '1600340958_IMG-20200812-WA0059.jpg'),
(4, '1600341001_IMG-20200812-WA0056.jpg'),
(5, '1600344262_IMG-20200812-WA0056.jpg'),
(6, '1600344698_IMG-20200812-WA0057.jpg'),
(7, '1600788316_IMG-20200812-WA0052.jpg'),
(8, '1601392720_IMG-20200812-WA0062.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`t_id`, `t_name`, `t_date`) VALUES
(1, 'Add a new Todo done that', 'tuesday 8 august, 2020'),
(3, 'done with the signin', 'Wednesday 09th September, 2020'),
(4, 'Add a new Todo ok', 'Wednesday 09th September, 2020'),
(5, 'pool party by 11am not 12noon sharp', 'Thursday 10th September, 2020'),
(6, 'i think am done so true', 'Thursday 10th September, 2020'),
(7, 'error needs to be worked on though', 'Thursday 10th September, 2020'),
(8, 'pool party by 11am not 12noon', 'Tuesday 29th September, 2020'),
(10, 'try editing this', 'Wednesday 30th September, 2020'),
(12, 'added image but photo isnt displaying', 'Saturday 03rd October, 2020'),
(13, 'just figured out everything ', 'Saturday 03rd October, 2020'),
(14, 'the last problem was the result of image and result of todo was conflicting', 'Saturday 03rd October, 2020'),
(15, 'so this project is finally done... we are moving to blog now', 'Saturday 03rd October, 2020');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `image`) VALUES
(1, 'test1', 'test1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'images/consultant.jpg'),
(2, 'test2', 'test2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'images/IMG-20200812-WA0060.jpg'),
(3, 'test3', 'test3@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'images/black image.jpg'),
(4, 'test4', 'test4@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(5, 'test5', 'test5@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imgs`
--
ALTER TABLE `imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imgs`
--
ALTER TABLE `imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
