-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Ago-2016 às 17:29
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
  `post_data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`post_id`, `post_titulo`, `post_descricao`, `post_post`, `post_slug`, `post_data`, `cat_id`) VALUES
(1, 'teste', 'teste', '\r\n\r\nLançado para smartphones no começo deste mês, Pokémon Go se tornou rapidamente um fenômeno, e trouxe de volta o universo dos monstrinhos de bolso. Trata-se de um game gratuito de realidade aumentada para Android e iOS. O jogo utiliza o sistema de GPS dos aparelhos para fazer com que os jogadores se desloquem fisicamente para conseguir capturar os monstrinhos da franquia da Nintendo. Realidade aumentada é um tipo de mídia que mistura o mundo real com elementos criados virtualmente. No caso de Pokémon Go, o jogador visualiza seus arredores na tela do celular capturados pela câmera, e o aplicativo insere os pokémons nesses lugares.\r\n', '', '2016-08-10 15:00:18', 0),
(2, 'teste', 'teste', '<p>Lan&ccedil;ado para&nbsp;<em>smartphones</em>&nbsp;no come&ccedil;o deste m&ecirc;s, Pok&eacute;mon Go se tornou rapidamente um fen&ocirc;meno, e trouxe de volta o universo dos monstrinhos de bolso.&nbsp;Trata-se de um&nbsp;<em>game </em>gratuito de realidade aumentada para Android e iOS. O jogo utiliza o sistema de GPS dos aparelhos para fazer com que os jogadores se desloquem fisicamente para conseguir capturar os monstrinhos da franquia da&nbsp;Nintendo. Realidade aumentada &eacute; um tipo de m&iacute;dia que mistura o mundo real com elementos criados virtualmente. No caso de Pok&eacute;mon Go, o jogador visualiza seus arredores na tela do celular capturados pela c&acirc;mera, e o aplicativo insere os pok&eacute;mons nesses lugares.</p>\r\n\r\n<p>Lan&ccedil;ado para&nbsp;<em>smartphones</em>&nbsp;no come&ccedil;o deste m&ecirc;s, Pok&eacute;mon Go se tornou rapidamente um fen&ocirc;meno, e trouxe de volta o universo dos monstrinhos de bolso.&nbsp;Trata-se de um&nbsp;<em>game </em>gratuito de realidade aumentada para Android e iOS. O jogo utiliza o sistema de GPS dos aparelhos para fazer com que os jogadores se desloquem fisicamente para conseguir capturar os monstrinhos da franquia da&nbsp;Nintendo. Realidade aumentada &eacute; um tipo de m&iacute;dia que mistura o mundo real com elementos criados virtualmente. No caso de Pok&eacute;mon Go, o jogador visualiza seus arredores na tela do celular capturados pela c&acirc;mera, e o aplicativo insere os pok&eacute;mons nesses lugares.</p>\r\n\r\n<p>Lan&ccedil;ado para&nbsp;<em>smartphones</em>&nbsp;no come&ccedil;o deste m&ecirc;s, Pok&eacute;mon Go se tornou rapidamente um fen&ocirc;meno, e trouxe de volta o universo dos monstrinhos de bolso.&nbsp;Trata-se de um&nbsp;<em>game </em>gratuito de realidade aumentada para Android e iOS. O jogo utiliza o sistema de GPS dos aparelhos para fazer com que os jogadores se desloquem fisicamente para conseguir capturar os monstrinhos da franquia da&nbsp;Nintendo. Realidade aumentada &eacute; um tipo de m&iacute;dia que mistura o mundo real com elementos criados virtualmente. No caso de Pok&eacute;mon Go, o jogador visualiza seus arredores na tela do celular capturados pela c&acirc;mera, e o aplicativo insere os pok&eacute;mons nesses lugares.</p>\r\n', '', '2016-08-10 15:01:49', 0),
(3, 'teste post', 'desc novo post', '<p>Por que geralmente s&atilde;o utilizadas c&eacute;lulas provenientes do blastocisto, e n&atilde;o de uma g&aacute;strula ou n&ecirc;urula, para produzir novas c&eacute;lulas com fins terap&ecirc;uticos?</p>\r\n\r\n<p>Por que geralmente s&atilde;o utilizadas c&eacute;lulas provenientes do blastocisto, e n&atilde;o de uma g&aacute;strula ou n&ecirc;urula, para produzir novas c&eacute;lulas com fins terap&ecirc;uticos?</p>\r\n\r\n<p>Por que geralmente s&atilde;o utilizadas c&eacute;lulas provenientes do blastocisto, e n&atilde;o de uma g&aacute;strula ou n&ecirc;urula, para produzir novas c&eacute;lulas com fins terap&ecirc;uticos?</p>\r\n', '', '2016-08-10 15:49:44', 0),
(4, 'outro post', 'descrição deste outro post', '<p>As c&eacute;lulas-tronco se caracterizam por sua capacidade de autorrenova&ccedil;&atilde;o e diferencia&ccedil;&atilde;o em m&uacute;ltiplas linhagens celulares. Podem ser classificadas, quanto &agrave; origem, em c&eacute;lulas-tronco embrion&aacute;rias e c&eacute;lulas-tronco adultas. As adultas s&atilde;o encontradas nos tecidos dos organismos ap&oacute;s o nascimento, sendo capazes de promover a diferencia&ccedil;&atilde;o celular espec&iacute;fica apenas do tecido de que fazem parte.</p>\r\n\r\n<p>As c&eacute;lulas-tronco se caracterizam por sua capacidade de autorrenova&ccedil;&atilde;o e diferencia&ccedil;&atilde;o em m&uacute;ltiplas linhagens celulares. Podem ser classificadas, quanto &agrave; origem, em c&eacute;lulas-tronco embrion&aacute;rias e c&eacute;lulas-tronco adultas. As adultas s&atilde;o encontradas nos tecidos dos organismos ap&oacute;s o nascimento, sendo capazes de promover a diferencia&ccedil;&atilde;o celular espec&iacute;fica apenas do tecido de que fazem parte.</p>\r\n\r\n<p>As c&eacute;lulas-tronco se caracterizam por sua capacidade de autorrenova&ccedil;&atilde;o e diferencia&ccedil;&atilde;o em m&uacute;ltiplas linhagens celulares. Podem ser classificadas, quanto &agrave; origem, em c&eacute;lulas-tronco embrion&aacute;rias e c&eacute;lulas-tronco adultas. As adultas s&atilde;o encontradas nos tecidos dos organismos ap&oacute;s o nascimento, sendo capazes de promover a diferencia&ccedil;&atilde;o celular espec&iacute;fica apenas do tecido de que fazem parte.</p>\r\n', '', '2016-08-10 15:52:59', 0),
(5, 'A água', 'Descubra tudo sobre a água ', '<p>As c&eacute;lulas-tronco se caracterizam por sua capacidade de autorrenova&ccedil;&atilde;o e diferencia&ccedil;&atilde;o em m&uacute;ltiplas linhagens celulares. Podem ser classificadas, quanto &agrave; origem, em c&eacute;lulas-tronco embrion&aacute;rias e c&eacute;lulas-tronco adultas. As adultas s&atilde;o encontradas nos tecidos dos organismos ap&oacute;s o nascimento, sendo capazes de promover a diferencia&ccedil;&atilde;o celular espec&iacute;fica apenas do tecido de que fazem parte.</p>\r\n\r\n<p>As c&eacute;lulas-tronco se caracterizam por sua capacidade de autorrenova&ccedil;&atilde;o e diferencia&ccedil;&atilde;o em m&uacute;ltiplas linhagens celulares. Podem ser classificadas, quanto &agrave; origem, em c&eacute;lulas-tronco embrion&aacute;rias e c&eacute;lulas-tronco adultas. As adultas s&atilde;o encontradas nos tecidos dos organismos ap&oacute;s o nascimento, sendo capazes de promover a diferencia&ccedil;&atilde;o celular espec&iacute;fica apenas do tecido de que fazem parte.</p>\r\n\r\n<p>As c&eacute;lulas-tronco se caracterizam por sua capacidade de autorrenova&ccedil;&atilde;o e diferencia&ccedil;&atilde;o em m&uacute;ltiplas linhagens celulares. Podem ser classificadas, quanto &agrave; origem, em c&eacute;lulas-tronco embrion&aacute;rias e c&eacute;lulas-tronco adultas. As adultas s&atilde;o encontradas nos tecidos dos organismos ap&oacute;s o nascimento, sendo capazes de promover a diferencia&ccedil;&atilde;o celular espec&iacute;fica apenas do tecido de que fazem parte.</p>\r\n\r\n<p>As c&eacute;lulas-tronco se caracterizam por sua capacidade de autorrenova&ccedil;&atilde;o e diferencia&ccedil;&atilde;o em m&uacute;ltiplas linhagens celulares. Podem ser classificadas, quanto &agrave; origem, em c&eacute;lulas-tronco embrion&aacute;rias e c&eacute;lulas-tronco adultas. As adultas s&atilde;o encontradas nos tecidos dos organismos ap&oacute;s o nascimento, sendo capazes de promover a diferencia&ccedil;&atilde;o celular espec&iacute;fica apenas do tecido de que fazem parte.</p>\r\n', 'A_agua', '2016-08-10 17:02:46', 0),
(6, 'outro post com acentuação', 'des', '', 'outro_post_com_acentuacao', '2016-08-10 17:06:50', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_passw`) VALUES
(5, 'Teste', 'esdras.franca.85@email.com', '01cb0daf0206e3bfe0cf6e9607b4024b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
