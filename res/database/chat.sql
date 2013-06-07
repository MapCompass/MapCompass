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
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `Msg_ID` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` varchar(25) NOT NULL,
  `Sender` text NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`Msg_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`Msg_ID`, `group_id`, `Sender`, `Message`) VALUES
(1, '', 'abhi', 'abhsbda'),
(2, '', 'abhi', 'asdaf'),
(3, '', 'abhi', 'asdafasf'),
(4, '', 'abhi', 'ada'),
(5, '', 'abhi', 'hey'),
(6, '', 'heya', 'sda'),
(7, '', 'sabdh', 'sdbfsd\n'),
(8, '', 'abhd', 'ahbdasjfbda'),
(9, '', 'hello', 'abhiram\n'),
(10, '', 'abhi', 'is it working'),
(11, 'abhi', 'abhi', 'abhi'),
(12, 'bharath', 'bharath', 'hey'),
(13, 'abhi', 'abhi', 'nice working'),
(14, 'abhi', 'abhi ', 'hey lets see'),
(15, 'abhi', 'abhi ', 'cool'),
(16, 'abhi', 'abhi ', 'wow'),
(17, 'abhi', 'abhi', 'nice naa'),
(18, 'abhi', 'abhi', 'abhdsabda'),
(19, 'abhi', 'bharath', 'hey'),
(20, 'abhi', 'abhi', 'adsad'),
(21, 'bharath', 'bharath', 'hey'),
(22, 'abhi', 'abhi', 'hey'),
(23, 'abhi', 'abhi', 'hello'),
(24, 'abhi', 'abhi', 'gud'),
(25, 'abhi', 'abhi', 'hi abhi'),
(26, 'abhi', 'abhi', 'nice dude'),
(27, 'abhi', 'abhi', 'wow '),
(28, 'abhi', 'abhi', 'sdnfgvsd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
