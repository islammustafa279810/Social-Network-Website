-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 12:40 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `lname` varchar(225) NOT NULL,
  `Birthdate` date NOT NULL,
  `Hometown` varchar(225) NOT NULL,
  `Gender` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `fname`, `lname`, `Birthdate`, `Hometown`, `Gender`, `email`, `username`, `password`, `registration_date`) VALUES
(78, 'f', 'mustafa', '2020-07-29', 'Ismailya', 'Female', 'mina2@gmai.com', 'moe476084728', '9df498d21ff27d6f918e66ac96cc296d', '2020-07-15 00:40:40'),
(79, 'm', 'mustafa', '2020-07-16', 'Auxor', 'Other', 'islam279810@yahoo.com', 'nnn', 'a1931ec126bbad3fa7a3fc64209fd921', '2020-07-15 00:45:17'),
(80, 'mmmmmmm', 'mustafa', '2020-07-18', 'Aswan', 'Other', 'mina3@emial.com', 'moe451866506', '2e936e3e2180d442cfb2c820610e38ae', '2020-07-15 04:07:43'),
(81, 'Islam', 'Mustafa', '1998-09-01', 'Alexandria', 'Male', 'islammustafa279810@gmail.com', '4595', '2f364281f619584f24f63a794a12e354', '2020-07-16 07:56:50'),
(82, 'Mina', 'Shafik', '1889-10-12', 'Cairo', 'Male', 'mina@gmail.com', 'mina', '91b827e257eeae8e5989d961fe3011df', '2020-07-16 21:51:36'),
(83, 'Fatma', 'Mustafa', '2020-07-04', 'Elgiza', 'Female', 'fatma@gmail.com', 'fatma', '38ab93488e52710515c3095a83a92bcf', '2020-07-16 22:23:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
