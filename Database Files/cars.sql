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
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `carID` int(11) NOT NULL AUTO_INCREMENT,
  `carName` varchar(255) NOT NULL,
  `carPrice` varchar(255) NOT NULL,
  `carFuel` varchar(255) NOT NULL,
  `carSeats` varchar(255) NOT NULL,
  `carYear` varchar(255) NOT NULL,
  `carDesc` varchar(255) NOT NULL,
  `imgFullNameCar` longtext NOT NULL,
  PRIMARY KEY (`carID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carID`, `carName`, `carPrice`, `carFuel`, `carSeats`, `carYear`, `carDesc`, `imgFullNameCar`) VALUES
(7, 'Ifee', '2,000', '12', '1', '2003', 'A biyit ioitit tjkoxitxktojxot jxjtootjoxiok kxpxtoxoix oxoitoxot ixpxtitx oxkxtxikix jxootxkx xototx koxpto', 'ifee.60926d081f6d61.84633773.jpg'),
(8, 'Mercedes Benz', '24,000', '45', '2', '2020', 'Its a nice car built by extra ordinary hands designed to move in the best of terrains and comprises of an exquisite and bespoke set of inner furniture designed just for you', 'mercedes-benz.60926e6dd6eed2.34217895.jpg'),
(4, 'Rolls Royce', '50,000', '45', '2', '2021', 'hj.ffffffffffffffffffffffffffffffffffffffffffffffffffffffccccccccccccccccccccccccccccccccccccccccccccccccccccccccc', 'rolls-royce.60908064d42fd9.84226264.jpeg'),
(5, 'Bugatti', '35,000', '40', '7', '2003', 'dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'bugatti.6090829b5fef80.77297712.jpg'),
(6, 'Toyota', '3,000', '10', '4', '2022', 'jfffffiiidjspiojopskpojcopiwejdpjwpocpowjciejpwodkjpwcojepocencepjcowkdpokwpodkwpokpowpowjpjpijpjpckepicjpepojepojpjoceop', 'toyota.60918444b5ce91.12160124.jpg'),
(9, 'Keke Napepe', '100', '5', '4', '2025', 'A keke napep, color yellow and is fast and gets you to your location on time.', 'keke-napepe.60929525ca7c87.58723450.jpeg'),
(10, 'Kia', '90,000', '20', '7', '1980', 'A new car just created by group 9 members ', 'kia.6092a1f75fca14.89303475.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
