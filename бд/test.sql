-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 01 2017 г., 20:54
-- Версия сервера: 5.5.45
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `res_tab`
--

CREATE TABLE IF NOT EXISTS `res_tab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Groups` varchar(50) NOT NULL,
  `Items` varchar(50) NOT NULL,
  `Aud` varchar(50) NOT NULL,
  `Teachers` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `res_tab`
--

INSERT INTO `res_tab` (`id`, `Groups`, `Items`, `Aud`, `Teachers`) VALUES
(1, '2ВК', 'Мдк 03.04', '44', 'Сивилявская Н.П'),
(2, '3эра', 'математика', '11', 'Николай н.н'),
(3, '3эра', 'математика', '11', 'Николай н.н'),
(5, '4вк', 'физика', '14', 'Родовской И.Н'),
(6, '1Нк', 'Икт', '20', 'Васльев В.П'),
(7, '2Ар-нк', 'Физиология', '23', 'Синеева А.А');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `patronymic_name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_status` tinyint(1) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password1` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `patronymic_name`, `email`, `email_status`, `login`, `password`, `password1`) VALUES
(4, 'Лиля', 'Лилявская', 'Киевская', 'tinti@mail.ru', 0, '', 'd0fe23e1627401b12cbce449066bc423', '91cd69fa0103896616314244f7c5e705'),
(5, 'Михаил', 'Гальцов', 'Гальцонович', 'test@mail.ru', 0, '', 'df9cfc170fdbb338586754fa4e766fb4', '37e320df6e35a017e5df82f7424f495b'),
(6, 'Михаил', 'Терьков', 'Гудков', 'testing@mail.ru', 0, '', 'd0fe23e1627401b12cbce449066bc423', '136b5628f0bb637beb5142ccd0efea7f'),
(8, 'Diman', 'Zhurin', 'Badim', 'try@mail.ru', 0, '', '4828140403f6eaee3b5af62a0b09ae61', '4828140403f6eaee3b5af62a0b09ae61'),
(10, 'Михаил', 'Белянчиков', 'Беляй', 'testings@mail.ru', 0, 'test1002test', '4828140403f6eaee3b5af62a0b09ae61', '4828140403f6eaee3b5af62a0b09ae61'),
(11, 'Михаил', 'Иванович', 'Евгеньеd', 'test1@mail.ru', 0, 'ret1234', '4828140403f6eaee3b5af62a0b09ae61', '4828140403f6eaee3b5af62a0b09ae61'),
(17, 'Дементьев', 'Александр', 'Александрович', 'fyra@mail.ru', 0, 'retig', '4828140403f6eaee3b5af62a0b09ae61', '4828140403f6eaee3b5af62a0b09ae61');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
