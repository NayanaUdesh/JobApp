-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2017 at 08:18 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `type` varchar(50) NOT NULL,
  `salary` double NOT NULL,
  `location` varchar(100) NOT NULL,
  `pdate` date NOT NULL,
  `edate` date NOT NULL,
  `cname` varchar(100) NOT NULL,
  `csize` varchar(100) NOT NULL,
  `clogo` varchar(500) NOT NULL,
  `description` mediumtext NOT NULL,
  `jobimage` varchar(500) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `key` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL,
  `subcategory` varchar(500) NOT NULL,
  `nego` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `type`, `salary`, `location`, `pdate`, `edate`, `cname`, `csize`, `clogo`, `description`, `jobimage`, `owner`, `email`, `key`, `category`, `subcategory`, `nego`) VALUES
(1, 'Cleaner', 'Contract', 8222.11, 'Gampaha', '0000-00-00', '2010-10-15', 'Cname1', 'Csize1', 'logo1', 'Hodata hodanna', 'Job Iage here1', 'owner 1', 'email@kj.lk1', '1', 'hospital', 'Washing', 1),
(2, 'title1', 'Full Time', 90000.11, 'Colombo', '0000-00-00', '0000-00-00', 'Cname2', 'Csize2', 'logo2', 'Hodata KAnna', 'Job Iage here2', 'owner 2', 'email@kj.lk2', '2', 'Hotel', 'Eating', 2),
(3, 'title3', 'Full Time', 80000.11, 'Kaluthra', '2011-10-15', '2011-10-15', 'Cname3', 'Csize2', 'logo3', 'Hodata KAnna', 'Job Iage here3', 'owner 3', 'email@kj.lk3', '3', 'Spa', 'massage', 3),
(4, 'title4', 'Freelance', 9999.11, 'Jaffna', '2015-10-15', '2015-10-15', 'Cname4', 'Csize4', 'logo4', 'Penna', 'Job Iage here4', 'owner 4', 'email@kj.lk4', '4', 'Acting', 'Bue', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
