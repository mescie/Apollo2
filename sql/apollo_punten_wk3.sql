-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Machine: localhost:3306
-- Genereertijd: 07 okt 2015 om 09:18
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
  `wID` tinyint(4) NOT NULL,
  `uID` tinyint(3) NOT NULL,
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
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden uitgevoerd voor tabel `punten`
--

INSERT INTO `punten` (`wID`, `uID`, `gespeeld`, `cleansheet`, `gescoord`, `assist`, `winst`, `gelijkspel`, `geel`, `rood`, `tegengoal`, `eigengoal`, `jasje`, `total`) VALUES
(1, 2, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(1, 3, 1, 3, 0, 2, 3, 0, 0, 0, 0, 0, 2, 0),
(1, 4, 0, 0, 3, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(1, 5, 1, 0, 4, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(1, 8, 3, 4, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(1, 9, 0, 0, 3, 2, 3, 0, 0, 0, 0, 0, 2, 0),
(1, 10, 1, 3, 0, 2, 3, 0, 0, 0, 0, 0, 2, 0),
(1, 11, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(1, 12, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(1, 13, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(1, 14, 1, 3, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(1, 16, 1, 3, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0),
(1, 23, 1, 3, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(1, 24, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(6, 1, 1, 0, 0, 4, 3, 0, 0, 0, 0, 0, 2, 0),
(6, 2, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(6, 3, 1, 0, 0, 2, 3, 0, 0, 0, -1, 0, 2, 0),
(6, 4, 1, 0, 12, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(6, 6, 1, 0, 0, 2, 3, 0, 0, 0, 0, 0, 2, 0),
(6, 7, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(6, 8, 3, 0, 0, 0, 3, 0, 0, 0, -2, 0, 2, 0),
(6, 9, 0, 0, 6, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(6, 10, 1, 0, 0, 0, 3, 0, 0, 0, -1, 0, 2, 0),
(6, 11, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(6, 12, 0, 0, 6, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(6, 14, 1, 0, 0, 0, 3, 0, 0, 0, -1, 0, 2, 0),
(6, 15, 1, 0, 0, 0, 3, 0, 0, 0, -1, 0, 2, 0),
(6, 16, 1, 0, 0, 2, 3, 0, 0, 0, -1, 0, 2, 0),
(6, 24, 1, 0, 0, 2, 3, 0, 0, 0, 0, 0, 2, 0),
(7, 2, 1, 0, 4, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(7, 3, 1, 0, 0, 0, 3, 0, 0, 0, -2, 0, 2, 0),
(7, 4, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(7, 5, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(7, 7, 1, 0, 4, 2, 3, 0, 0, 0, 0, 0, 2, 0),
(7, 8, 3, 0, 0, 0, 3, 0, 0, 0, -4, 0, 2, 0),
(7, 9, 0, 0, 3, 4, 3, 0, 0, 0, 0, 0, 2, 0),
(7, 10, 1, 0, 0, 0, 3, 0, 0, 0, -2, 0, 2, 0),
(7, 12, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(7, 13, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(7, 14, 1, 0, 0, 0, 3, 0, 0, 0, -2, 0, 2, 0),
(7, 15, 1, 0, 0, 0, 3, 0, 0, 0, -2, 0, 2, 0),
(7, 23, 1, 0, 0, 0, 3, 0, 0, 0, -2, 0, 2, 0),
(7, 24, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(7, 21, 1, 0, 0, 0, 3, 0, 0, 0, -2, 0, 2, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
