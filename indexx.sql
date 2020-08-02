-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 02 2020 г., 16:32
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `indexx`
--

-- --------------------------------------------------------

--
-- Структура таблицы `indexx`
--

CREATE TABLE `indexx` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `date` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `indexx`
--

INSERT INTO `indexx` (`id`, `name`, `date`, `comment`) VALUES
(1, 'hello', '15:33:35 2020:08:02', 'world\r\n'),
(2, 'hello', '15:34:36 2020:08:02', 'world\r\n'),
(3, 'hello', '15:34:39 2020:08:02', 'world\r\n');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `indexx`
--
ALTER TABLE `indexx`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `indexx`
--
ALTER TABLE `indexx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
