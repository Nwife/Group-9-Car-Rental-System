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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameUser` varchar(255) NOT NULL,
  `emailUser` varchar(255) NOT NULL,
  `phoneUser` varchar(255) NOT NULL,
  `pwdUser` longtext NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nameUser`, `emailUser`, `phoneUser`, `pwdUser`, `date_created`) VALUES
(10, 'Dere ', 'dere@gmail.com', '09022347653', '$2y$10$cWLifPxkFpTBaxGq8jEhC.kIwczDesbSUfo8/BayUEDq7JztHLiAC', '2021-05-05 12:45:59'),
(6, 'Amaeze Ife', 'ifeeamaeze@gmail.com', '08037226190', '$2y$10$fz9G112P4Ws0ygSa.my6XOafL2rjimlYmnxZhP42NZkf/a9PzNhRm', '2021-05-02 17:28:06'),
(8, 'prince', 'ogbodoprince@gmail.com', '09091730606', '$2y$10$QUIW92HGFKrcHjpEVij/Bec3s3COJknRbStF7xFXGCLRKAiWfyaXa', '2021-05-03 14:28:04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
