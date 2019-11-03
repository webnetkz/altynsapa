-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 03 2019 г., 04:52
-- Версия сервера: 5.6.41-log
-- Версия PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `elordajastary`
--

-- --------------------------------------------------------

--
-- Структура таблицы `golos`
--

CREATE TABLE `golos` (
  `id` int(12) NOT NULL,
  `g1` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `g2` varchar(255) NOT NULL,
  `g3` varchar(255) NOT NULL,
  `g4` varchar(255) NOT NULL,
  `g5` varchar(255) NOT NULL,
  `g6` varchar(255) NOT NULL,
  `g7` varchar(255) NOT NULL,
  `g8` varchar(255) NOT NULL,
  `g9` varchar(255) NOT NULL,
  `g10` varchar(255) NOT NULL,
  `g11` varchar(255) NOT NULL,
  `g12` varchar(255) NOT NULL,
  `g13` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(8000) NOT NULL,
  `iin` int(12) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `iin`, `ip`) VALUES
(1, '', 'dbqqbq@gmail.com', '$2y$10$MPvUEYLj2tmiwAH0aFgrB.Taf9MJmlCEyC8lTPf4FeHSUqoHrfenC', 2147483647, '127.0.0.1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `golos`
--
ALTER TABLE `golos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `golos`
--
ALTER TABLE `golos`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
