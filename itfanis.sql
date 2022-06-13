-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2022 at 03:22 AM
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
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `name_header` varchar(200) NOT NULL,
  `name_menu` varchar(50) NOT NULL,
  `name_submenu` varchar(50) NOT NULL,
  `text_article` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `name_header`, `name_menu`, `name_submenu`, `text_article`) VALUES
(1, 'php_head', 'PHP', 'php_head', 'Просто текст'),
(2, '345345', 'HTML', '345345', '345345');

-- --------------------------------------------------------

--
-- Table structure for table `main_menu`
--

CREATE TABLE `main_menu` (
  `id` int(2) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_menu`
--

INSERT INTO `main_menu` (`id`, `name`) VALUES
(1, 'PHP'),
(2, 'HTML'),
(3, 'CSS'),
(4, 'JS'),
(5, 'JAVA');

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id` int(2) NOT NULL,
  `parent_id` int(2) NOT NULL,
  `name` varchar(40) NOT NULL,
  `dir` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id`, `parent_id`, `name`, `dir`) VALUES
(1, 1, 'Интернет-магазин', 'shop'),
(2, 1, 'PHP-2', ''),
(3, 1, 'PHP-3', ''),
(4, 2, 'HTML-1', ''),
(5, 2, 'HTML-2', ''),
(6, 2, 'HTML-3', ''),
(7, 3, 'Свойство display', 'lesson_display'),
(8, 3, 'Свойство @keyframes', 'lesson_keyframes'),
(9, 3, 'Свойство position', 'lesson_position'),
(10, 4, 'Метод forEach', 'lesson_forEach'),
(11, 4, 'JS-2', ''),
(12, 4, 'JS-3', ''),
(13, 5, 'JAVA-1', ''),
(14, 5, 'JAVA-2', ''),
(15, 5, 'JAVA-3', ''),
(16, 3, 'Кастомный чекбокс', 'lesson_checkbox'),
(17, 3, 'Отцентровка блока', 'lesson_center'),
(18, 3, 'Свойство border-box', 'lesson_border-box');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_menu`
--
ALTER TABLE `main_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `main_menu`
--
ALTER TABLE `main_menu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
