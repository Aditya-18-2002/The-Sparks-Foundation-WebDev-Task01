-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 03:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `mini_statement`
--

CREATE TABLE `mini_statement` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mini_statement`
--

INSERT INTO `mini_statement` (`sender`, `receiver`, `amount`) VALUES
('Natasha', 'Sam', 100),
('Bruce', 'Tim', 100),
('Jimmy', 'Steve', 100),
('Lizz', 'Jimmy', 100),
('Steve', 'Jimmy', 200),
('Lizz', 'Steve', 300),
('Tim', 'Richard', 150),
('Natasha', 'Steve', 800),
('Natasha', 'Steve', 200),
('Steve', 'Natasha', 200),
('Steve', 'Kate', 250),
('Kate', 'Steve', 250),
('Sam', 'Jimmy', 200),
('Jimmy', 'Sam', 200),
('Natasha', 'Bruce', 400);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `amount`) VALUES
('Natasha', 'natasha@gmail.com', 600),
('Sam', 'sam@gmail.com', 1000),
('Steve', 'steve@gmail.com', 1000),
('Bruce', 'bruce@gmail.com', 1400),
('Kate', 'kate@gmail.com', 1000),
('Lizz', 'Lizz@gmail.com', 1000),
('Richard', 'richard@gmail.com', 1000),
('Tim', 'tim@gmail.com', 1000),
('Jimmy', 'jimmy@gmail.com', 1000),
('Ryan', 'ryan@gmail.com', 1000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
