-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 02 okt 2017 om 12:08
-- Serverversie: 5.6.13
-- PHP-versie: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `wbs`
--
CREATE DATABASE IF NOT EXISTS `wbs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wbs`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `added` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `project`
--

INSERT INTO `project` (`id`, `name`, `added`) VALUES
(4, 'het plant watergeven project 2.0', '2017-09-27'),
(5, 'Other project', '2017-09-27');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `project_member`
--

CREATE TABLE IF NOT EXISTS `project_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `projectId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `leader` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `project_member`
--

INSERT INTO `project_member` (`id`, `projectId`, `userId`, `leader`) VALUES
(3, 4, 1, 1),
(4, 4, 2, 0),
(5, 4, 3, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `projectMemberId` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `plan` time NOT NULL,
  `do` time NOT NULL,
  `check` text NOT NULL,
  `act` text NOT NULL,
  `predecessor` int(11) NOT NULL,
  `moscow` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `task`
--

INSERT INTO `task` (`id`, `projectMemberId`, `name`, `plan`, `do`, `check`, `act`, `predecessor`, `moscow`) VALUES
(1, 4, 'Task1', '00:00:00', '00:30:00', '', '', 1, 'must'),
(2, 3, 'Superb task', '00:00:00', '00:00:00', 'nno', 'no', 2, 'should');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`,`username`,`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Gegevens worden uitgevoerd voor tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'j@k3_7h3_h@ck3rm@nn', 'password1231999'),
(2, 'XxD3m0n_m@nn69xX', 'wasmachine95'),
(3, 'k3v1n_x2_3dg3l0rd_4_l1f3', 'ad-ultra-hd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
