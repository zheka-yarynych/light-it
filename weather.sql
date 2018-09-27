-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 27 2018 г., 05:39
-- Версия сервера: 5.5.58
-- Версия PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `weather`
--

-- --------------------------------------------------------

--
-- Структура таблицы `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `city` varchar(32) NOT NULL DEFAULT 'Запорожье',
  `cond` varchar(64) NOT NULL,
  `max_t_c` varchar(5) NOT NULL,
  `avg_t_c` varchar(5) NOT NULL,
  `min_t_c` varchar(5) NOT NULL,
  `wind` varchar(8) NOT NULL,
  `sunrise` varchar(5) NOT NULL,
  `sunset` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `history`
--

INSERT INTO `history` (`id`, `date`, `city`, `cond`, `max_t_c`, `avg_t_c`, `min_t_c`, `wind`, `sunrise`, `sunset`) VALUES
(17, '2018-09-23', 'Запорожье', 'Небольшой дождь', '20.1', '17.7', '16.8', '19.8', '06:25', '06:34'),
(18, '2018-09-24', 'Запорожье', 'Облачно', '21.2', '18.7', '14.5', '29.2', '06:27', '06:32'),
(19, '2018-09-21', 'Запорожье', 'Переменная облачность', '29.1', '26.5', '22.4', '10.8', '06:22', '06:38'),
(20, '2018-09-25', 'Запорожье', 'Местами дождь', '15.9', '12.5', '7.5', '27.7', '06:28', '06:30'),
(21, '2018-09-29', 'Запорожье', 'Переменная облачность', '22.3', '17.4', '12.7', '16.9', '06:33', '06:22'),
(23, '2018-09-18', 'Запорожье', 'Переменная облачность', '22', '19.8', '16.4', '13.3', '06:18', '06:44'),
(24, '2018-09-19', 'Запорожье', 'Переменная облачность', '25.8', '23.3', '19.5', '12.2', '06:20', '06:42'),
(25, '2018-09-27', 'Запорожье', 'Переменная облачность', '15.7', '13.7', '10.4', '22.7', '06:31', '06:26'),
(26, '2018-09-26', 'Запорожье', 'Облачно', '14.4', '12.6', '9.7', '19.8', '06:29', '06:28'),
(27, '2018-09-30', 'Запорожье', 'Переменная облачность', '18.2', '14.8', '10.3', '15', '06:35', '06:20'),
(29, '2018-09-27', 'киев', 'Слабая морось', '13.9', '10.8', '9.5', '17.9', '06:51', '06:45'),
(30, '2018-09-27', 'Рим', 'Переменная облачность', '24.2', '20.3', '18.2', '7.6', '06:36', '06:35'),
(32, '2018-09-27', 'Сингапур', 'Умеренный или сильный ливневый дождь', '31.3', '29.2', '27.4', '12.5', '06:53', '06:59');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
