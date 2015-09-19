-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Machine: localhost:3306
-- Genereertijd: 06 sep 2015 om 15:44
-- Serverversie: 5.1.48-community
-- PHP-versie: 5.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `apollo69`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `punten`
--

CREATE TABLE IF NOT EXISTS `punten` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `naam` varchar(255) NOT NULL,
  `gespeeld` int(3) NOT NULL,
  `cleansheet` int(3) NOT NULL,
  `gescoord` int(3) NOT NULL,
  `assist` int(3) NOT NULL,
  `winst` int(3) NOT NULL,
  `gelijkspel` int(3) NOT NULL,
  `geel` int(3) NOT NULL,
  `rood` int(3) NOT NULL,
  `tegengoal` int(3) NOT NULL,
  `eigengoal` int(3) NOT NULL,
  `jasje` int(3) NOT NULL,
  `positie` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Gegevens worden uitgevoerd voor tabel `punten`
--

INSERT INTO `punten` (`id`, `naam`, `gespeeld`, `cleansheet`, `gescoord`, `assist`, `winst`, `gelijkspel`, `geel`, `rood`, `tegengoal`, `eigengoal`, `jasje`, `positie`) VALUES
(1, 'Kevin Savonije', 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 2),
(2, 'Dennis Nagelkerke', 2, 0, 0, 0, 6, 0, 0, 0, -2, 0, 0, 1),
(3, 'Andy Tazelaar', 2, 0, 0, 0, 6, 0, 0, 0, -2, 0, 0, 1),
(4, 'Sander Nagelkerke', 0, 0, 3, 0, 6, 0, 0, 0, 0, 0, 0, 3),
(5, 'Stefan Wisse', 2, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 2),
(6, 'Edgar Verhage', 3, 0, 10, 0, 3, 0, 0, 0, -2, 0, 0, 0),
(7, 'Bjorn Coldenhoff', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(8, 'Jean-Paul Harthoorn', 0, 0, 0, 2, 3, 0, 0, 0, 0, 0, 0, 3),
(9, 'Richard Bal', 1, 0, 0, 0, 3, 0, 0, 0, -1, 0, 0, 1),
(10, 'Pascal Korsuize', 2, 0, 4, 0, 6, 0, 0, 0, 0, 0, 0, 2),
(11, 'Jochem Groen', 0, 0, 3, 0, 6, 0, 0, 0, 0, 0, 0, 3),
(12, 'Pieter Vos', 2, 0, 0, 0, 6, 0, 0, 0, -2, 0, 0, 1),
(13, 'Rob Westera', 2, 0, 8, 4, 3, 0, 0, 0, 0, 0, 0, 2),
(14, 'Johnny Schouwenaar', 1, 0, 0, 2, 3, 0, 0, 0, -1, 0, 0, 1),
(15, 'Jeffrey Otten', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3),
(16, 'Ramon Schouwenaar', 2, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 2),
(17, 'Robin Vermeulen', 1, 0, 0, 0, 3, 0, 0, 0, -1, 0, 0, 1),
(18, 'Nick van Tilborg', 1, 0, 0, 2, 3, 0, 0, 0, 0, 0, 0, 2),
(19, 'Maico Goedegebure', 6, 0, 0, 0, 6, 0, 0, 0, -4, 0, 0, 0),
(20, 'Tristan Vis', 0, 0, 3, 0, 3, 0, 0, 0, 0, 0, 0, 3),
(21, 'Bas de Kraker', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2),
(22, 'Dennis Tolhoek', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2),
(23, 'Emiel van Dalen', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
