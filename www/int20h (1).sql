-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 28 2016 г., 01:36
-- Версия сервера: 5.5.25
-- Версия PHP: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `int20h`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `url`, `description`) VALUES
(1, 'Kitchen', 'kitchen', 'kitchen'),
(2, 'Talent shows', 'talent-shows', 'Talent shows'),
(3, 'Serials', 'serials', 'serials'),
(4, 'News', 'news', 'News');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `likes_count` int(11) NOT NULL,
  `dislikes_count` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=47 ;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `comment`, `likes_count`, `dislikes_count`, `time`) VALUES
(1, 1, 4, 'Very tasty!!', 23, 23, 152),
(2, 1, 5, 'Great and tasty, very easy in cooking)', 23, 12, 433),
(3, 1, 6, 'Great dish for celebrating a birthday))', 34, 32, 456),
(4, 1, 7, 'Fantastic! It is very colorful and unusual  cake, my dother exactly like it!)', 43, 43, 233),
(5, 1, 8, 'Very unusual talant, look''s great!', 5, 4, 434),
(6, 1, 9, 'Very strong voise, i like it', 4, 5, 534),
(7, 1, 10, 'Very unusual and cute girl vith magic voice\r\ni vote for her', 45, 14, 104),
(8, 1, 11, 'even better then original', 45, 45, 110),
(9, 1, 12, 'Great sense of humor, awesome', 4, 14, 125),
(10, 1, 13, 'Bloody, but exiting, you don;t like to look at this, but do it again and again', 45, 45, 111),
(11, 1, 14, 'Very kind and interesting thing, I recomend', 14, 54, 425),
(12, 1, 15, 'Very long, only 5 seasons was good, not 7 and etc.', 11, 45, 245),
(13, 1, 16, 'BBC is the best, my opinion', 4, 10, 425),
(14, 1, 17, 'I think it is very honest ', 11, 45, 124),
(15, 1, 18, 'Bad TV', 14, 58, 457),
(16, 1, 19, 'BBC is better', 78, 75, 452),
(17, 1, 4, 'Try it with mango, tastes good', 14, 11, 411),
(18, 1, 4, 'I burned it, sad', 25, 41, 412),
(19, 1, 5, 'Great present for st. Valentines day', 45, 12, 132),
(20, 1, 5, 'Very romantic, but hard in cooking', 52, 25, 147),
(21, 1, 6, 'Very tasty, my favourute desert', 12, 45, 452),
(22, 1, 6, 'I don''t like milk(', 45, 21, 125),
(23, 1, 7, 'My children liked it on Christmas, I recomend', 24, 42, 584),
(24, 1, 7, 'Very many paints, I don''t believe it is healthy', 78, 45, 254),
(25, 1, 8, 'I don''t think it is usefull...', 17, 78, 457),
(26, 1, 8, 'Smartest man I have ever seen', 45, 14, 458),
(27, 1, 9, 'Very melodic voice, like it', 45, 44, 785),
(28, 1, 9, 'I wanna visit her concert in future, very magnetic', 42, 58, 781),
(29, 1, 10, 'Very exotic, unusual for me, but i wanna hear it again and again', 12, 45, 125),
(30, 1, 10, 'So wild and powerfull, I like national music, It is very original and show all nation', 54, 48, 45),
(31, 1, 11, 'Very strong, I don''t believe she is 14.. ', 14, 41, 141),
(32, 1, 11, 'I love Adelle, and fall in love with this cover, perfect', 14, 41, 414),
(33, 1, 12, 'Very intresting main hero, I like to watch at his behavior', 12, 45, 455),
(34, 1, 12, 'I don''t think that is good to make film about Lucifer', 45, 500, 454),
(35, 1, 13, 'This serial is perfect, with all details, from bloody scenes to slow motions', 13, 31, 313),
(36, 1, 13, 'very cruel, I was scared', 54, 12, 561),
(37, 1, 14, 'Arthur is too much stupid for king', 17, 14, 425),
(38, 1, 14, 'Merlin is soo cuute)', 121, 13, 242),
(39, 1, 15, 'very popular serial, and I don''t understand why..', 42, 24, 424),
(40, 1, 15, 'I like it, good for killing time', 24, 21, 241),
(41, 1, 16, 'BBC is awesome, as always', 16, 11, 121),
(42, 1, 16, 'great thing', 12, 11, 321),
(43, 1, 17, 'boring', 17, 45, 122),
(44, 1, 17, 'useful chanell', 12, 45, 100),
(45, 1, 18, 'so religious, I hate it', 12, 21, 323),
(46, 1, 18, 'I''ll never watch this again', 12, 14, 122);

-- --------------------------------------------------------

--
-- Структура таблицы `comment_likes`
--

CREATE TABLE IF NOT EXISTS `comment_likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `post_likes`
--

CREATE TABLE IF NOT EXISTS `post_likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `post_views`
--

CREATE TABLE IF NOT EXISTS `post_views` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `social_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `social_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `city`, `age`, `social_name`, `social_id`, `image`) VALUES
(1, 'Sergey Postolovskiy', 'male', 'Vinnitsa', 19, 'vk', '33123290', 'http://cs630826.vk.me/v630826290/65/jnULjjAwtgE.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `video` text COLLATE utf8_unicode_ci NOT NULL,
  `likes_count` int(11) NOT NULL,
  `dislikes_count` int(11) NOT NULL,
  `views_count` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `videos`
--

INSERT INTO `videos` (`id`, `name`, `url`, `text`, `video`, `likes_count`, `dislikes_count`, `views_count`, `category`, `time`, `image`) VALUES
(1, 'Motherlover', 'motherlover', 'motherlover motherlover motherlover motherlover motherlover', '<video controls><source src="/web/videos/motherlover.mp4" type="video/mp4"></video>', 15, 1, 32, 0, 0, ''),
(2, 'Jack', 'jack', 'jack jack jack jack jack', '<video controls><source src="/web/videos/jack.mp4" type="video/mp4"></video>', 65, 3, 133, 0, 0, ''),
(3, 'The Tixic Avenger', 'the-toxic-avenger', 'the-toxic-avenger the-toxic-avenger the-toxic-avenger the-toxic-avenger the-toxic-avenger', '<video controls><source src="/web/videos/the-toxic-avenger.mp4" type="video/mp4"></video>', 34, 17, 72, 0, 0, ''),
(4, 'Banana mafin', 'banana-mafin', 'banana_mafin', '<iframe src="https://www.youtube.com/embed/P81VHT606zg" frameborder="0" allowfullscreen></iframe>', 4, 7, 55, 1, 0, '/web/images/thumbnails/4.jpg'),
(5, 'Sand cake', 'sand-cake', 'sand-cake', '<iframe  src="https://www.youtube.com/embed/sbfWGmezk8A" frameborder="0" allowfullscreen></iframe>', 7, 8, 45, 1, 0, '/web/images/thumbnails/5.jpg'),
(6, 'Panna cota', 'panna-cota', 'panna-cota', '<iframe  src="https://www.youtube.com/embed/D7AHeDG90do" frameborder="0" allowfullscreen></iframe>', 8, 8, 10, 1, 0, '/web/images/thumbnails/6.jpg'),
(7, 'Rainbow', 'rainbow', 'rainbow', '<iframe  src="https://www.youtube.com/embed/bhPPJLwoJq8" frameborder="0" allowfullscreen></iframe>', 3, 4, 56, 1, 0, '/web/images/thumbnails/7.jpg'),
(8, 'Barmen', 'barmen', 'barmenbarmenbarmen', '<iframe  src="https://www.youtube.com/embed/ZZMibG1NDcs" frameborder="0" allowfullscreen></iframe>', 4, 5, 23, 2, 0, '/web/images/thumbnails/8.jpg'),
(9, 'Aida', 'aida', 'aidaaida', '<iframe  src="https://www.youtube.com/embed/ViBKEjE1h1I" frameborder="0" allowfullscreen></iframe>', 3, 2, 2, 2, 0, '/web/images/thumbnails/9.jpg'),
(10, 'Aziza', 'aziza', 'azizaazizaaziza', '<iframe  src="https://www.youtube.com/embed/r-ua1Wd_wEU" frameborder="0" allowfullscreen></iframe>', 3, 2, 34, 2, 0, '/web/images/thumbnails/10.jpg'),
(11, 'Valeria', 'valeria', 'valeriavaleriavaleria', '<iframe  src="https://www.youtube.com/embed/I80WFyH7L9Y" frameborder="0" allowfullscreen></iframe>', 3, 3, 12, 2, 0, '/web/images/thumbnails/11.jpg'),
(12, 'Lucifer', 'lucifer', 'luciferluciferlucifer', '<iframe  src="https://www.youtube.com/embed/X4bF_quwNtw" frameborder="0" allowfullscreen></iframe>', 43, 4, 45, 3, 4, '/web/images/thumbnails/12.jpg'),
(13, 'Hannibal', 'hannibal', 'hannibalhannibal', '<iframe width= src="https://www.youtube.com/embed/RspfMI-rZpw" frameborder="0" allowfullscreen></iframe>', 54, 34, 45, 3, 0, '/web/images/thumbnails/13.jpg'),
(14, 'Arthur', 'arthur', 'arthurarthurarthur', '<iframe src="https://www.youtube.com/embed/A1udh_EUdYs" frameborder="0" allowfullscreen></iframe>', 54, 34, 3, 3, 0, '/web/images/thumbnails/14.jpg'),
(15, 'Supernatural', 'supernatural', 'supernaturalsupernaturalsupernatural', '<iframe src="https://www.youtube.com/embed/gojvcC_6pac" frameborder="0" allowfullscreen></iframe>', 32, 34, 2, 3, 0, '/web/images/thumbnails/15.jpg'),
(16, 'BBC', 'bbc', 'bbcbbcbbc', '<iframe  src="https://www.youtube.com/embed/PFGCmAWcUVQ" frameborder="0" allowfullscreen></iframe>', 45, 34, 44, 4, 0, '/web/images/thumbnails/16.jpg'),
(17, 'Espresso', 'espresso', 'espressoespressoespresso', '<iframe src="https://www.youtube.com/embed/Siy69o-rKU4" frameborder="0" allowfullscreen></iframe>', 9, 9, 56, 4, 0, '/web/images/thumbnails/17.jpg'),
(18, 'Sky news', 'sky-news', 'sky-newssky-newssky-news', '', 99, 79, 78, 4, 0, '/web/images/thumbnails/18.jpg'),
(19, 'Vice News', 'vice-news', 'vice-newsvice-newsvice-news', '<iframe src="https://www.youtube.com/embed/2a01Rg2g2Z8" frameborder="0" allowfullscreen></iframe>', 34, 54, 43, 4, 0, '/web/images/thumbnails/19.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
