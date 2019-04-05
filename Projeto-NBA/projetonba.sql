-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 05-Abr-2019 às 20:16
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetonba`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `apostas`
--

DROP TABLE IF EXISTS `apostas`;
CREATE TABLE IF NOT EXISTS `apostas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_jogo` int(11) NOT NULL,
  `aposta_time_casa` int(11) NOT NULL,
  `aposta_time_visitante` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_jogo` (`id_jogo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

DROP TABLE IF EXISTS `jogos`;
CREATE TABLE IF NOT EXISTS `jogos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dt_jogo` date NOT NULL,
  `time_casa` varchar(30) NOT NULL,
  `time_visitante` varchar(30) NOT NULL,
  `result_casa` int(11) NOT NULL,
  `result_visitante` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rodada`
--

DROP TABLE IF EXISTS `rodada`;
CREATE TABLE IF NOT EXISTS `rodada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_jogo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_jogo` (`id_jogo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `times`
--

DROP TABLE IF EXISTS `times`;
CREATE TABLE IF NOT EXISTS `times` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `caminho_logo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `times`
--

INSERT INTO `times` (`id`, `nome`, `caminho_logo`) VALUES
(1, 'Atlanta Hawks', 'imagens/atlanta.png'),
(2, 'Boston Celtics', 'imagens/celtics.png'),
(3, 'Brooklyn Nets', 'imagens/nets.png'),
(4, 'Charlotte Hornets', 'imagens/hornets.png'),
(5, 'Chicago Bulls', 'imagens/bulls.png'),
(6, 'Cleveland Cavaliers', 'imagens/cavaliers.png'),
(7, 'Dallas Mavericks', 'imagens/mavericks.png'),
(8, 'Denver Nuggets', 'imagens/nuggets.png'),
(9, 'Detroit Pistons', 'imagens/pistons.png'),
(10, 'Golden State Warriors', 'imagens/warriors.png'),
(11, 'Houston Rockets', 'imagens/rockets.png'),
(12, 'Indiana Pacers', 'imagens/pacers.png'),
(13, 'Los Angeles Clippers', 'imagens/clippers.png'),
(14, 'Los Angeles Lakers', 'imagens/lakers.png'),
(15, 'Memphis Grizzlies', 'imagens/grizzlies.png'),
(16, 'Miami Heat', 'imagens/heat.png'),
(17, 'Milwaukee Bucks', 'imagens/bucks.png'),
(18, 'Minnesota Timberwolves', 'imagens/timberwolves.png'),
(19, 'New York Knicks', 'imagens/knicks.png'),
(20, 'New Orleans Pelicans', 'imagens/pelicans.png'),
(21, 'Oklahoma City Thunder', 'imagens/thunder.png'),
(22, 'Orlando Magic', 'imagens/magic.png'),
(23, 'Philadelphia 76ers', 'imagens/sixers.png'),
(24, 'Phoenix Suns', 'imagens/suns.png'),
(25, 'Portland Trail Blazers', 'imagens/blazers.png'),
(26, 'Sacramento Kings', 'imagens/kings.png'),
(27, 'San Antonio Spurs', 'imagens/spurs.png'),
(28, 'Toronto Raptors', 'imagens/raptors.png'),
(30, 'Washington Wizards', 'imagens/wizards.png'),
(29, 'Utah Jazz', 'imagens/jazz.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `email`, `senha`) VALUES
(5, 'bruno', 'brunoss39@hotmail.com', 'b304f234940a679b3ab3c699f80db849'),
(4, 'Deivid', 'deivid1959@live.com', '202cb962ac59075b964b07152d234b70'),
(6, 'nivia', 'nivia1999@hotmail.com', 'd691dc9fde50ea7aaaa63c75220386df'),
(7, 'admin', 'admin.admin@admin.com', '21232f297a57a5a743894a0e4a801fc3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
