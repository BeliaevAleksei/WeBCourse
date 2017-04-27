-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 27 2017 г., 08:47
-- Версия сервера: 5.5.54-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `Lineage`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Message`
--

CREATE TABLE IF NOT EXISTS `Message` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(400) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `Message`
--

INSERT INTO `Message` (`ID`, `login`, `password`, `email`, `message`) VALUES
(7, 'zxc', 'qwe', 'asd@mail.ri', 'asd'),
(8, '123321', '123', 'kasjd@mail.ru', 'qweqwe'),
(9, 'qweqwe', '123123', 'asd@mail.ru', 'asdasdasd'),
(10, 'asd', '2323', 'asdasd@mail.ru', '123123123'),
(11, 'dislexsu', '123455', 'sdgjsfg@mail.ru', 'qwefgrg'),
(12, 'asdasd', 'asdasd', 'asda@mail.ru', 'asdasd');

-- --------------------------------------------------------

--
-- Структура таблицы `News`
--

CREATE TABLE IF NOT EXISTS `News` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `About` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fullnews` varchar(400) CHARACTER SET utf8 NOT NULL,
  `site` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `News`
--

INSERT INTO `News` (`id`, `Name`, `About`, `fullnews`, `site`) VALUES
(1, 'Переход на новый клиент', 'Сообщаем, что 15 декабря весь комплекс серверов будет переведен на новый клиент игры.\r\n					Для предзакачки клиента вы можете воспользоваться этой инструкцией: http://forum.asterios.tm/topic/402615-%D0%BE%D0%B1%D1%82/\r\n					Тестовый сервер по-прежнему доступен, сообщайте о любых найденных проблемах. Всем принявшим участие в тестировании обещаем бонусы.\r\n					Добавлено: 2015-12-05 02:25:24', 'тут фул ньюс', 'news2.php'),
(2, 'Обновление', 'Список изменений: http://forum.asterios.tm/topic/405067-29084-29235/\r\n						Добавлено: 2015-12-02 03:37:17', 'тут фул ньюс', 'news3.php'),
(4, 'Обновление клиента', 'Сообщаем, что сегодня утром было произведено обновление клиента игры до новой версии.\r\n					В общем случае, для обновления вам не потребуется ничего делать, программа обновления сама предложит скачать новые файлы, соглашайтесь.\r\n					Если у вас была старая программа обновления, то скачайте новую http://files.asterios.tm/Asterios.zip\r\n					Если программа обновления выдает ошибки, или просто отказывается работать - добавьте папку с игрой в исключения антивируса.\r\n					Если у вас уже был наш ОБТ кл', 'тут фул ньюс', 'news1.php');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
