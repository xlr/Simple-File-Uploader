-- phpMyAdmin SQL Dump
-- version 3.3.4
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Ноя 17 2010 г., 23:02
-- Версия сервера: 5.1.48
-- Версия PHP: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


-- --------------------------------------------------------

--
-- Структура таблицы `hostf`
--

CREATE TABLE IF NOT EXISTS `hostf` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `nick` varchar(200) NOT NULL,
  `desc` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `file` varchar(200) NOT NULL,
  `count` int(200) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

