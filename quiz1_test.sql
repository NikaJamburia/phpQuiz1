-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 02 2020 г., 15:42
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `quiz1_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `answers`
--

CREATE TABLE `answers` (
  `id` int(100) NOT NULL,
  `text` text NOT NULL,
  `question_id` int(100) NOT NULL,
  `isCorrect` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `answers`
--

INSERT INTO `answers` (`id`, `text`, `question_id`, `isCorrect`) VALUES
(1, 'zurabi salomeshvili', 1, 0),
(2, 'salome zurabishvili', 1, 1),
(3, 'israel', 2, 0),
(4, 'Hell', 2, 1),
(5, 'nothing', 3, 0),
(6, 'ravi aba', 3, 1),
(7, 'yes', 4, 0),
(8, 'yes but not really', 4, 1),
(9, 'baby dont hurt meeee', 5, 1),
(10, 'no more', 5, 0),
(11, '4', 6, 1),
(12, '5', 6, 0),
(13, 'ki', 7, 1),
(14, 'ara', 7, 0),
(15, 'ki', 8, 1),
(16, 'ara', 8, 0),
(17, 'nika jamburia', 9, 1),
(18, 'vipi soxumski', 9, 0),
(19, 'konstantine', 10, 1),
(20, 'alexandre', 10, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int(100) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `text`) VALUES
(1, 'Who is president of georgia?'),
(2, 'Where is Giorgi Kratsashvili from?'),
(3, 'What is meaning of life?'),
(4, 'Is php a good language?'),
(5, 'What is love?'),
(6, '2*2 = ?'),
(7, 'sami gochi goria?'),
(8, 'ori xe tyea?'),
(9, 'Who created php?'),
(10, 'Who created gau?');

-- --------------------------------------------------------

--
-- Структура таблицы `scores`
--

CREATE TABLE `scores` (
  `id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `score` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
