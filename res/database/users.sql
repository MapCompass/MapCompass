-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2013 at 11:00 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myf`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `group_id` varchar(25) NOT NULL,
  `group_name` varchar(25) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `admin` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`group_id`, `group_name`, `name`, `email`, `lat`, `lng`, `admin`, `status`) VALUES
('abhi', 'abhi', 'abhi', '', 17.5093635, 78.3083845, 0, 0),
('abhi', 'abhi', 'bharath', '', 13.3242, 72.1234, 0, 0),
('bharath', 'bharath', 'bharath', '', 12.3212, 72.1234, 0, 0),
('asda', 'adaf', 'adfaf', 'afafa', 1000, 1000, 1, 0),
('afaf', 'asdasf', 'adasf', 'asda', 1000, 1000, 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
