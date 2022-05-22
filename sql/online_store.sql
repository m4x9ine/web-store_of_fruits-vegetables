-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 23 2022 г., 02:04
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `online store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `log` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pas` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `log`, `pas`) VALUES
(1, 'GlavAdmin', '123321');

-- --------------------------------------------------------

--
-- Структура таблицы `exotik`
--

CREATE TABLE `exotik` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `frukt`
--

CREATE TABLE `frukt` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `green`
--

CREATE TABLE `green` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `veg`
--

CREATE TABLE `veg` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz`
--

CREATE TABLE `zakaz` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontragent` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zakaz` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `familia` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesto kontragenta` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `zakaz`
--

INSERT INTO `zakaz` (`id`, `name`, `kontragent`, `number`, `zakaz`, `familia`, `mesto kontragenta`, `post`) VALUES
(1, 'Евгений Дроздов', 'ff', 'ff', 'ff', 'ff', 'ff', 'ff'),
(4, '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', ''),
(6, 'df', 'f', '+241412', 'f', 'f', 'f', 'sdf@gmail.com'),
(7, 'df', 'f', '+241412', 'f', 'f', 'f', 'sdf@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `zakazat_zwonok`
--

CREATE TABLE `zakazat_zwonok` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(17) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otvet` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `zakazat_zwonok`
--

INSERT INTO `zakazat_zwonok` (`id`, `name`, `number`, `text`, `otvet`) VALUES
(1, 'Евгений Дроздов', '+345788', 'kjjk', 0),
(2, '', '', '', 0),
(3, 'fgf', 'gfgf', 'gfgf', 0),
(4, '', '', '', 0),
(5, '', '', '', 0),
(6, '', '', '', 0),
(7, '', '', '', 0),
(8, '', '', '', 0),
(9, 'fgf', 'gfgf', 'dfdf', 0),
(10, '', '', '', 0),
(11, '', '', '', 0),
(12, 'fdd', 'fdfd', 'gdfgdf', 0),
(13, 'fdd', 'fdfd', 'dfd', 0),
(14, '', '', '', 0),
(15, '', '', '', 0),
(16, '', '', '', 0),
(17, '', '', '', 0),
(18, '', '', '', 0),
(19, '', '', '', 0),
(20, '', '', '', 0),
(21, '', '', '', 0),
(22, '', '', '', 0),
(23, '', '', '', 0),
(24, '', '', '', 0),
(25, '', '', '', 0),
(26, '', '', '', 0),
(27, '', '', '', 0),
(28, '', '', '', 0),
(29, '', '', '', 0),
(30, '', '', '', 0),
(31, '', '', '', 0),
(32, '', '', '', 0),
(33, '', '', '', 0),
(34, '', '', '', 0),
(35, '', '', '', 0),
(36, '', '', '', 0),
(37, '', '', '', 0),
(38, '', '', '', 0),
(39, '', '', '', 0),
(40, '', '', '', 0),
(41, '', '', '', 0),
(42, '', '', '', 0),
(43, '', '', '', 0),
(44, '', '', '', 0),
(45, '', '', '', 0),
(46, '', '', '', 0),
(47, '', '', '', 0),
(48, '', '', '', 0),
(49, '', '', '', 0),
(50, '', '', '', 0),
(51, '', '', '', 0),
(52, '', '', '', 0),
(53, '', '', '', 0),
(54, '', '', '', 0),
(55, '', '', '', 0),
(56, '', '', '', 0),
(57, '', '', '', 0),
(58, '', '', '', 0),
(59, '', '', '', 0),
(60, '', '', '', 0),
(61, '', '', '', 0),
(62, '', '', '', 0),
(63, '', '', '', 0),
(64, '', '', '', 0),
(65, '', '', '', 0),
(66, '', '', '', 0),
(67, '', '', '', 0),
(68, '', '', '', 0),
(69, '', '', '', 0),
(70, '', '', '', 0),
(71, '', '', '', 0),
(72, '', '', '', 0),
(73, '', '', '', 0),
(74, '', '', '', 0),
(75, '', '', '', 0),
(76, '', '', '', 0),
(77, '', '', '', 0),
(78, '', '', '', 0),
(79, '', '', '', 0),
(80, '', '', '', 0),
(81, '', '', '', 0),
(82, '', '', '', 0),
(83, '', '', '', 0),
(84, '', '', '', 0),
(85, '', '', '', 0),
(86, '', '', '', 0),
(87, '', '', '', 0),
(88, '', '', '', 0),
(89, '', '', '', 0),
(90, '', '', '', 0),
(91, '', '', '', 0),
(92, '', '', '', 0),
(93, '', '', '', 0),
(94, '', '', '', 0),
(95, '', '', '', 0),
(96, '', '', '', 0),
(97, '', '', '', 0),
(98, '', '', '', 0),
(99, '', '', '', 0),
(100, '', '', '', 0),
(101, '', '', '', 0),
(102, '', '', '', 0),
(103, '', '', '', 0),
(104, '', '', '', 0),
(105, '', '', '', 0),
(106, '', '', '', 0),
(107, '', '', '', 0),
(108, '', '', '', 0),
(109, '', '', '', 0),
(110, '', '', '', 0),
(111, '', '', '', 0),
(112, '', '', '', 0),
(113, '', '', '', 0),
(114, '', '', '', 0),
(115, '', '', '', 0),
(116, '', '', '', 0),
(117, '', '', '', 0),
(118, '', '', '', 0),
(119, '', '', '', 0),
(120, '', '', '', 0),
(121, '', '', '', 0),
(122, '', '', '', 0),
(123, '', '', '', 0),
(124, '', '', '', 0),
(125, '', '', '', 0),
(126, '', '', '', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `exotik`
--
ALTER TABLE `exotik`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `frukt`
--
ALTER TABLE `frukt`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `veg`
--
ALTER TABLE `veg`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zakazat_zwonok`
--
ALTER TABLE `zakazat_zwonok`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `exotik`
--
ALTER TABLE `exotik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `frukt`
--
ALTER TABLE `frukt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `veg`
--
ALTER TABLE `veg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `zakaz`
--
ALTER TABLE `zakaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `zakazat_zwonok`
--
ALTER TABLE `zakazat_zwonok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
