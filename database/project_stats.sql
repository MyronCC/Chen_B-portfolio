-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 18, 2019 at 08:46 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_stats`
--

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `type` varchar(20) NOT NULL,
  `description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`id`, `name`, `type`, `description`) VALUES
(1, 'Boot Camp', 'Web Development', 'Create a team-working site, using html, sass and JS function.'),
(2, 'Hackathon', 'Web Development', 'Creating a official site for a thermostat, using html, sass, JS and MySQL.'),
(3, 'Organ donate', 'Graphic Design', 'Design logo and trifold for Organ donation, using illustrator for logo and trifold, then combined with C4d.'),
(4, 'Tesla Champagne', 'Graphic Design', 'Design a Tesla Champagne linkage, build the bottle model with C4d and design the poster with Photoshop.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
