-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2022 at 07:07 PM
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
(2, 1, 'Контакты и реквизиты', 'clients'),
(3, 1, 'PHP-3', ''),
(4, 2, 'HTML-1', ''),
(5, 2, 'HTML-2', ''),
(6, 2, 'HTML-3', ''),
(7, 3, 'Свойство display', 'lesson_display'),
(8, 3, 'Свойство @keyframes', 'lesson_keyframes'),
(9, 3, 'Свойство position', 'lesson_position'),
(10, 4, 'Метод forEach', 'lesson_forEach'),
(11, 4, 'Функции в объекте', 'lesson_11clock_01'),
(12, 4, 'JSON-JavaScript Object Notation', 'lesson_11clock_02'),
(13, 5, 'JAVA-1', ''),
(14, 5, 'JAVA-2', ''),
(15, 5, 'JAVA-3', ''),
(16, 3, 'Кастомный чекбокс', 'lesson_checkbox'),
(17, 3, 'Отцентровка блока', 'lesson_center'),
(18, 3, 'Свойство border-box', 'lesson_border-box'),
(19, 4, 'Копия объекта JS', 'lesson_11clock_03'),
(20, 4, 'Функция JS', 'lesson_11clock_04'),
(21, 4, 'Колбэк функция', 'lesson_11clock_05'),
(22, 4, 'Области видимости', 'lesson_11clock_06'),
(23, 4, 'Строгий режим', 'lesson_11clock_07'),
(24, 4, 'Добавление изображения', 'lesson_insert_img'),
(25, 4, 'Операторы', 'lesson_11clock_08'),
(26, 1, 'Echo', 'lesson_echo'),
(27, 4, 'Извлечение вложенного массива', 'lesson_array_flat'),
(28, 4, 'Поиск в массиве', 'lesson_array_find'),
(29, 4, 'Трюк с оператором &&', 'lesson_11clock_09'),
(30, 4, 'Разделение свойств у объекта', 'lesson_11clock_10'),
(31, 4, 'Шаблонные строки', 'lesson_11clock_11'),
(32, 4, 'Анонимные выражения, стрелочные функции', 'lesson_11clock_12'),
(33, 4, 'Присвоение даты посту', 'lesson_11clock_13'),
(34, 4, 'Непойманная ошибка', 'lesson_11clock_14'),
(35, 4, 'Перехват ошибки', 'lesson_11clock_15'),
(36, 4, 'Тернарный оператор', 'lesson_ternar'),
(37, 4, 'Выражения и инструкции', 'lesson_11clock_16'),
(38, 4, 'Массивы', 'lesson_11clock_17'),
(39, 4, 'Методы массивов', 'lesson_11clock_18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
