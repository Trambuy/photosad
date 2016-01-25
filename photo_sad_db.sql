-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 24, 2016 at 01:56 PM
-- Server version: 5.5.41-log
-- PHP Version: 5.4.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `photo_sad_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hash` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `hash`) VALUES
(1, 'cc5599ca06976d02245f591ffa909b7a');

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu`
--

CREATE TABLE IF NOT EXISTS `admin_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `title`, `link`) VALUES
(1, 'Разделы меню', 'edit_menu'),
(2, 'Фотографы', 'edit_photographs'),
(3, 'Главная страница админки', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`) VALUES
(1, 'Харьков');

-- --------------------------------------------------------

--
-- Table structure for table `errors`
--

CREATE TABLE IF NOT EXISTS `errors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_of_kindergarten` int(11) NOT NULL,
  `number_of_group` varchar(255) NOT NULL,
  `name` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kindergartens`
--

CREATE TABLE IF NOT EXISTS `kindergartens` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `id_of_sity` int(11) NOT NULL,
  `number_of_kindergarten` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `type_of_user` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `link`, `type_of_user`) VALUES
(1, 'Главная', 'main', 'all'),
(2, 'О проекте', 'about', 'all'),
(3, 'Помощь', 'help', 'all'),
(4, 'Авторам', 'authors', 'all'),
(5, 'Личный кабинет', 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `text`, `name`) VALUES
(1, 'Главная', 'текст на главной странице', 'main'),
(2, 'О проекте', ' Текст о проекте', 'about'),
(3, 'Помощь', 'Помощ текст', 'help'),
(4, 'Авторам', 'текст авторам', 'authors'),
(5, 'Фотографии', '', 'photoes');

-- --------------------------------------------------------

--
-- Table structure for table `photoes`
--

CREATE TABLE IF NOT EXISTS `photoes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_of_kindergarten` int(11) NOT NULL,
  `id_of_group` int(11) NOT NULL,
  `full_size_link` varchar(255) NOT NULL,
  `small_size_link` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `photoes`
--

INSERT INTO `photoes` (`id`, `id_of_kindergarten`, `id_of_group`, `full_size_link`, `small_size_link`, `description`, `date`) VALUES
(1, 1, 1, '/file/1.jpg', '/file/1.jpg', '', '2016-01-20 11:15:43'),
(2, 0, 0, '/file/2.jpg', '', '', '2016-01-20 11:15:43'),
(3, 0, 0, '/file/3.jpg', '', '', '2016-01-20 11:16:25'),
(4, 0, 0, '/file/4.jpg', '', '', '2016-01-20 11:16:25'),
(5, 0, 0, '/file/5.jpg', '', '', '2016-01-20 11:16:49'),
(6, 0, 0, '/file/6.jpg', '', '', '2016-01-20 11:16:49');

-- --------------------------------------------------------

--
-- Table structure for table `photographers`
--

CREATE TABLE IF NOT EXISTS `photographers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `bank_card` varchar(255) DEFAULT NULL,
  `date_of_registration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `photographers`
--

INSERT INTO `photographers` (`id`, `login`, `password`, `full_name`, `passport`, `bank_card`, `date_of_registration`) VALUES
(1, 'photograf1', 'qazwsx', 'photograf1', 'photograf1', '55489545523555', '2016-01-23 23:09:51'),
(2, 'photograf2', 'qazwsx', 'photograf2', 'photograf2', '5+55649494', '2016-01-23 23:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `value`) VALUES
(1, 'pages', '2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `full_name`, `email`, `date`) VALUES
(1, 'user', 'user', 'User', 'user@user.com', '2016-01-10 17:05:08'),
(2, 'photo_1', 'qazwsx', 'Full Name', 'full@name.com', '2016-01-23 23:05:21');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
