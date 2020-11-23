-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 07:34 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sundaycandy`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `showHistory` (IN `userID` INT(10))  BEGIN
SELECT orderinfo.m_id, movie.m_id, title, price, date, user_id, order_id FROM orderinfo,movie
            WHERE movie.m_id=orderinfo.m_id AND user_id = userID;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `g_id` int(11) NOT NULL,
  `g_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`g_id`, `g_name`) VALUES
(1, 'Action'),
(2, 'Horror'),
(3, 'Comedy'),
(4, 'Crime'),
(5, 'Drama'),
(6, 'Fantasy');

-- --------------------------------------------------------

--
-- Table structure for table `libary`
--

CREATE TABLE `libary` (
  `libary_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `g_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `libary`
--

INSERT INTO `libary` (`libary_id`, `user_id`, `m_id`, `g_id`) VALUES
(1, 1, 12, 5),
(1, 1, 10, 6),
(2, 2, 2, 1),
(3, 3, 1, 5),
(4, 4, 12, 5),
(4, 4, 8, 2),
(2, 2, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `m_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `time` int(11) NOT NULL,
  `price_rent` int(11) NOT NULL,
  `price_buy` int(11) NOT NULL,
  `g_id` int(11) NOT NULL,
  `m_desc` text DEFAULT NULL,
  `poster` varchar(10000) NOT NULL COMMENT 'src'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`m_id`, `title`, `time`, `price_rent`, `price_buy`, `g_id`, `m_desc`, `poster`) VALUES
(1, 'La La Land', 7, 50, 89, 5, NULL, 'images/Lalaland_480x.progressive.jpg'),
(2, 'Dunkirk', 7, 75, 125, 1, NULL, 'images/Dunkirk.jpg'),
(3, 'Green Book', 7, 50, 89, 5, NULL, 'images/GreenBook.jpg'),
(4, 'Tenet', 7, 75, 125, 1, NULL, 'images/tenet.reg.ar_480x.progressive.jpg'),
(5, 'Spotlight', 7, 50, 89, 4, NULL, 'images/Spotlight_480x.progressive.jpg'),
(8, 'Handmaiden', 10, 50, 89, 2, NULL, 'images/Handmaiden.jpeg'),
(9, 'The God Father', 7, 50, 89, 4, NULL, 'images/Godfather.jpg'),
(10, 'Howl\'s Moving Castle', 10, 50, 89, 6, NULL, 'images/MovingCastle.jpg'),
(11, 'Inception', 7, 50, 89, 1, NULL, 'images/Inception_480x.progressive.jpg'),
(12, 'In The Mood For Love', 10, 75, 125, 5, NULL, 'images/Inthemoodforlove_480x.progressive.jpg'),
(13, 'Pitch Perfect 2', 7, 50, 89, 3, NULL, 'images/PitchPerfect2_480x.progressive.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderinfo`
--

CREATE TABLE `orderinfo` (
  `order_id` int(11) NOT NULL,
  `price` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderinfo`
--

INSERT INTO `orderinfo` (`order_id`, `price`, `date`, `user_id`, `m_id`) VALUES
(6, '75', '0000-00-00', 1, 4),
(7, '75', '0000-00-00', 1, 1),
(8, '75', '0000-00-00', 1, 3),
(17, '50', '0000-00-00', 7, 10),
(18, '89', '2020-11-13', 7, 4),
(19, '50', '2020-11-13', 3, 4),
(20, '50', '2020-11-14', 7, 4),
(21, '89', '2020-11-15', 1, 11),
(22, '50', '2020-11-15', 7, 4),
(23, '89', '2020-11-19', 7, 1),
(24, '50', '2020-11-23', 9, 5),
(25, '89', '2020-11-23', 9, 5),
(26, '89', '2020-11-23', 9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `FName` varchar(45) NOT NULL,
  `LName` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Phone` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `FName`, `LName`, `Email`, `Phone`) VALUES
(1, 'raevire', '8246555m', 'Ravipa', 'Walee', 'notravipaemail@gmail.com', '0908931663'),
(2, 'tmshellby', '123454321', 'Thomas', 'Shellby', 'thepeekyblinders@gmail.com', '0812310061'),
(3, 'mkmmook', '43211234', 'Pichamon', 'Park', 'notarchiemail@gmail.com', '0876543210'),
(4, 'JKinna', '12345678', 'Joel', 'Kinnaman', 'alteredcarbon@gmail.com', '0907966523'),
(5, 'gdrfg', 'fgdfgdfg', 'fioaejf', 'bthdthd', '259595', 'fdghfdg'),
(6, '6122780099', '6ykiull', 'Popo', 'h', '55555', 'g'),
(7, 'admin', '1234', 'mook', 'kie', '55555', 'g'),
(8, 'rosesarerose', '1234', 'Rosanne', 'Park', '1122', 'roanne@eiei'),
(9, 'mk', '1234', 'a', 'b', 'mkmmook@gmail.com', '1122');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `libary`
--
ALTER TABLE `libary`
  ADD KEY `m_id` (`m_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `libary_ibfk_2` (`g_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `movie_ibfk_1` (`g_id`);

--
-- Indexes for table `orderinfo`
--
ALTER TABLE `orderinfo`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `m_id` (`m_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `orderinfo`
--
ALTER TABLE `orderinfo`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `libary`
--
ALTER TABLE `libary`
  ADD CONSTRAINT `libary_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `movie` (`m_id`),
  ADD CONSTRAINT `libary_ibfk_2` FOREIGN KEY (`g_id`) REFERENCES `genres` (`g_id`),
  ADD CONSTRAINT `libary_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `genres` (`g_id`);

--
-- Constraints for table `orderinfo`
--
ALTER TABLE `orderinfo`
  ADD CONSTRAINT `orderinfo_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `orderinfo_ibfk_2` FOREIGN KEY (`m_id`) REFERENCES `movie` (`m_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
