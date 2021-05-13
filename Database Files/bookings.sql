-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 05, 2021 at 02:39 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group9_cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `bookID` int(11) NOT NULL AUTO_INCREMENT,
  `bookName` varchar(255) NOT NULL,
  `bookEmail` varchar(255) NOT NULL,
  `bookVehicle` varchar(255) NOT NULL,
  `bookStart` date NOT NULL,
  `bookEnd` date NOT NULL,
  PRIMARY KEY (`bookID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookID`, `bookName`, `bookEmail`, `bookVehicle`, `bookStart`, `bookEnd`) VALUES
(1, 'Maleeku', 'maleeku@gmail.com', 'Bugatti', '2020-01-20', '2020-01-25'),
(2, 'Nwife', 'nwife@gmail.com', 'Bugatti', '2020-02-20', '2020-02-23'),
(3, 'Nwife', 'nwife@gmail.com', 'Toyota', '2021-05-05', '2021-05-09'),
(4, 'Maleeku', 'maleeku@gmail.com', 'Mercedes Benz', '2020-02-18', '2020-02-24'),
(5, 'Dere ', 'dere@gmail.com', 'Rolls Royce', '2021-05-05', '2021-05-12'),
(6, 'Maleeku', 'maleeku@gmail.com', 'Keke Napepe', '2021-05-05', '2021-05-20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
