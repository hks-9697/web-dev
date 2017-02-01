-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2016 at 03:02 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(30) NOT NULL DEFAULT 'somename',
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(12) NOT NULL,
  `college` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `user`, `password`, `address`, `phone`, `college`, `created`) VALUES
('harsh', '', '', '', '', '', '2016-05-31 09:42:27'),
('harsh', 'asa', 'asd', '', '', '', '2016-05-31 09:00:56'),
('charizard', 'charizard', 'mew', 'pallet town', '0123456789', 'Charrific valley', '2016-05-31 12:50:34'),
('admin', 'harsh', 'harsh', 'srinivasnagar', '+989898932', 'NITK', '2016-05-31 09:00:56'),
('harsh', 'harshs', 'asdasd', '', '', '', '2016-05-31 09:00:56'),
('namer', 'test', 'test', '', '', '', '2016-05-31 09:00:56'),
('admin', 'user', 'password', '', '', '', '2016-05-31 09:00:56'),
('admin', 'users', 'password', '', '', '', '2016-05-31 09:00:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `user` (`user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
