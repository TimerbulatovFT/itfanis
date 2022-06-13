-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2022 at 07:06 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itfanis`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` smallint(2) NOT NULL,
  `city` varchar(80) NOT NULL,
  `city_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`, `city_id`) VALUES
(1, 'Белоярский район', 11),
(2, 'Березовский район', 12),
(3, 'город Когалым', 21),
(4, 'город Лангепас', 28),
(5, 'город Нягань', 22),
(6, 'город Пыть-Ях', 23),
(7, 'город Урай', 24),
(8, 'город Ханты-Мансийск', 25),
(9, 'город Югорск', 26),
(10, 'Кондинский район', 13),
(11, 'Нефтеюганский район', 17),
(12, 'Нижневартовский район', 14),
(13, 'Ханты-Мансийский автономный округ - Югра', 0),
(14, 'Ханты-Мансийский район', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
