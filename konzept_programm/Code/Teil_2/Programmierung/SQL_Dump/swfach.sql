-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 04. Mai 2014 um 19:26
-- Server Version: 5.6.16
-- PHP-Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `swfach`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `marker`
--

CREATE TABLE IF NOT EXISTS `marker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `kommentar` varchar(200) DEFAULT 'Hier könnte dein Kommentar stehen!',
  `public` tinyint(1) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Daten für Tabelle `marker`
--

INSERT INTO `marker` (`id`, `name`, `kommentar`, `public`, `lat`, `lng`) VALUES
(18, 'Arni', 'Cooles Studio, nette Trainer usw.\nAustattung auch absolut genial!', 1, 50.252, 11.1967),
(21, 'Hans', 'Cooles Studio, nette Trainer usw.\nAustattung auch absolut genial!', 0, 49.652, 11.1067),
(25, 'Phipsi', 'Cooles Studio, nette Trainer usw.\nAustattung auch absolut genial!', 0, 49.852, 11.1367),
(28, 'Hodor', 'Cooles Studio, nette Trainer usw.\nAustattung auch absolut genial!', 1, 50.052, 11.1667),
(31, 'Marco', 'Cooles Studio, nette Trainer usw.\nAustattung auch absolut genial!', 0, 49.452, 11.0767);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
