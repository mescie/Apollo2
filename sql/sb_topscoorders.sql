-- phpMyAdmin SQL Dump
-- version 4.4.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 02 nov 2015 om 21:06
-- Serverversie: 5.5.43-MariaDB
-- PHP-versie: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apollo_punten`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sb_topscoorders`
--

CREATE TABLE IF NOT EXISTS `sb_topscoorders` (
  `uID` int(11) NOT NULL,
  `doelpunten` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `sb_topscoorders`
--

INSERT INTO `sb_topscoorders` (`uID`, `doelpunten`) VALUES
(1, 2),
(2, 1),
(3, 1),
(4, 7),
(5, 3),
(6, 0),
(7, 1),
(8, 0),
(9, 7),
(10, 0),
(11, 0),
(12, 5),
(13, 0),
(14, 0),
(15, 0),
(16, 1),
(17, 0),
(18, 0),
(19, 1),
(20, 0),
(21, 2),
(22, 0),
(23, 0),
(24, 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `sb_topscoorders`
--
ALTER TABLE `sb_topscoorders`
  ADD PRIMARY KEY (`uID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `sb_topscoorders`
--
ALTER TABLE `sb_topscoorders`
  MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
