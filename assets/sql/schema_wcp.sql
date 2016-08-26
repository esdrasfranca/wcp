-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26-Ago-2016 às 10:22
-- Versão do servidor: 5.6.24-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `schema_wcp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `ban_id` int(11) NOT NULL AUTO_INCREMENT,
  `ban_image` varchar(255) DEFAULT NULL,
  `ban_position` int(11) NOT NULL,
  PRIMARY KEY (`ban_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(20) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'FÍSICA'),
(2, 'BIOLOGIA'),
(3, 'QUÍMICA'),
(4, 'ENEM'),
(5, 'MEDICINA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_titulo` varchar(100) NOT NULL,
  `post_descricao` varchar(150) NOT NULL,
  `post_post` text NOT NULL,
  `post_slug` varchar(255) NOT NULL,
  `post_image` varchar(255) DEFAULT NULL,
  `post_data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`post_id`, `post_titulo`, `post_descricao`, `post_post`, `post_slug`, `post_image`, `post_data`, `cat_id`) VALUES
(46, 'Novo post', 'Descrição do novo post', '', 'novo-post', 'golfinho-1472217589.jpg', '2016-08-25 17:50:02', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `set_id` int(11) NOT NULL AUTO_INCREMENT,
  `url_site` varchar(255) NOT NULL,
  `db_host` varchar(50) NOT NULL,
  `db_passw` varchar(32) NOT NULL,
  `db_user` varchar(30) NOT NULL,
  `db_drive` varchar(20) NOT NULL,
  `db_name` varchar(20) NOT NULL,
  PRIMARY KEY (`set_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `settings`
--

INSERT INTO `settings` (`set_id`, `url_site`, `db_host`, `db_passw`, `db_user`, `db_drive`, `db_name`) VALUES
(1, 'http://localhost:8080/wcp', 'localhost', 'admin', 'root', 'mysql', 'schema_wcp');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_passw` varchar(32) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
