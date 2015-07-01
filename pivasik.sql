-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 01 2015 г., 10:32
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `pivasik`
--

-- --------------------------------------------------------

--
-- Структура таблицы `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `place` varchar(200) NOT NULL,
  `latitude` varchar(120) NOT NULL,
  `longitude` varchar(120) NOT NULL,
  `time_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `shop_id` (`shop_id`),
  KEY `time_id` (`time_id`),
  KEY `image_id` (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `address`
--

INSERT INTO `address` (`id`, `image_id`, `shop_id`, `place`, `latitude`, `longitude`, `time_id`) VALUES
(1, 1, 1, 'ул Строителей ', '', '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `mark_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `mark_id` (`mark_id`),
  KEY `image_id` (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`id`, `image_id`, `name`, `mark_id`) VALUES
(1, 1, 'Аливария', 1),
(2, 1, 'Туборг', 1),
(3, 1, 'Балтика', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `image`
--

INSERT INTO `image` (`id`, `name`) VALUES
(1, 'upload/beer.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `mark`
--

CREATE TABLE IF NOT EXISTS `mark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `degree` varchar(120) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `image_id` (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `mark`
--

INSERT INTO `mark` (`id`, `image_id`, `name`, `degree`) VALUES
(1, 1, 'Десятка', '4,6 %');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `mark_id` int(11) NOT NULL,
  `typebeer_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `price` int(10) NOT NULL,
  `date` date NOT NULL,
  `created` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `shop_id` (`shop_id`),
  KEY `brand_id` (`brand_id`),
  KEY `size_id` (`size_id`),
  KEY `brand_id_2` (`brand_id`),
  KEY `typebeer_id` (`typebeer_id`),
  KEY `image_id` (`image_id`),
  KEY `mark_id` (`mark_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `image_id`, `brand_id`, `mark_id`, `typebeer_id`, `size_id`, `shop_id`, `price`, `date`, `created`) VALUES
(1, 1, 1, 1, 1, 1, 1, 10900, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Структура таблицы `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `address_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `address_id` (`address_id`),
  KEY `image_id` (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `shop`
--

INSERT INTO `shop` (`id`, `image_id`, `name`, `address_id`) VALUES
(1, 1, 'Евроопт', 1),
(2, 1, 'Витебские продукты', 1),
(3, 1, 'Веста', 1),
(4, 1, 'Соседи', 1),
(5, 1, 'Родная сторона', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `size`
--

CREATE TABLE IF NOT EXISTS `size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `volume` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `size`
--

INSERT INTO `size` (`id`, `volume`) VALUES
(1, '0,5');

-- --------------------------------------------------------

--
-- Структура таблицы `typebeer`
--

CREATE TABLE IF NOT EXISTS `typebeer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `typebeer`
--

INSERT INTO `typebeer` (`id`, `name`) VALUES
(1, 'светлое'),
(2, 'темное');

-- --------------------------------------------------------

--
-- Структура таблицы `worktime`
--

CREATE TABLE IF NOT EXISTS `worktime` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestart` varchar(120) NOT NULL,
  `timeend` varchar(120) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `worktime`
--

INSERT INTO `worktime` (`id`, `timestart`, `timeend`) VALUES
(1, '8:00', '23:00');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`time_id`) REFERENCES `worktime` (`id`),
  ADD CONSTRAINT `address_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `address_ibfk_3` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`);

--
-- Ограничения внешнего ключа таблицы `brand`
--
ALTER TABLE `brand`
  ADD CONSTRAINT `brand_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `brand_ibfk_1` FOREIGN KEY (`mark_id`) REFERENCES `mark` (`id`);

--
-- Ограничения внешнего ключа таблицы `mark`
--
ALTER TABLE `mark`
  ADD CONSTRAINT `mark_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`);

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_6` FOREIGN KEY (`mark_id`) REFERENCES `mark` (`id`),
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`size_id`) REFERENCES `size` (`id`),
  ADD CONSTRAINT `product_ibfk_4` FOREIGN KEY (`typebeer_id`) REFERENCES `typebeer` (`id`),
  ADD CONSTRAINT `product_ibfk_5` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`);

--
-- Ограничения внешнего ключа таблицы `shop`
--
ALTER TABLE `shop`
  ADD CONSTRAINT `shop_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `shop_ibfk_1` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
