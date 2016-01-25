-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Machine: localhost:3306
-- Genereertijd: 25 jan 2016 om 22:19
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
-- Tabelstructuur voor tabel `sb_punten`
--

CREATE TABLE IF NOT EXISTS `sb_punten` (
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
-- Gegevens worden uitgevoerd voor tabel `sb_punten`
--

INSERT INTO `sb_punten` (`wID`, `uID`, `gespeeld`, `cleansheet`, `gescoord`, `assist`, `winst`, `gelijkspel`, `geel`, `rood`, `tegengoal`, `eigengoal`, `jasje`, `total`) VALUES
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
(1, 16, 1, 3, 0, 0, 3, 0, 0, 0, 0, 0, -2, 0),
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
(7, 21, 1, 0, 0, 0, 3, 0, 0, 0, -2, 0, 2, 0),
(8, 1, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(8, 2, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(8, 4, 1, 0, 4, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(8, 5, 1, 0, 4, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(8, 6, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(8, 8, 3, 0, 0, 0, 3, 0, 0, 0, -6, 0, 2, 0),
(8, 9, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(8, 12, 0, 0, 6, 2, 3, 0, 0, 0, 0, 0, 2, 0),
(8, 13, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(8, 14, 1, 0, 0, 2, 3, 0, 0, 0, -3, 0, 2, 0),
(8, 15, 1, 0, 0, 0, 3, 0, 0, 0, -3, 0, 2, 0),
(8, 16, 1, 0, 0, 2, 3, 0, -1, 0, -3, 0, 2, 0),
(8, 19, 1, 0, 0, 0, 3, 0, 0, 0, -3, 0, 2, 0),
(8, 21, 1, 0, 0, 0, 3, 0, 0, 0, -3, 0, 2, 0),
(8, 24, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(9, 2, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(9, 3, 1, 0, 5, 0, 3, 0, 0, 0, -1, 0, 2, 0),
(9, 4, 1, 0, 4, 4, 3, 0, 0, 0, 0, 0, 2, 0),
(9, 6, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(9, 7, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(9, 8, 3, 0, 0, 0, 3, 0, -1, 0, -2, 0, 2, 0),
(9, 9, 0, 0, 6, 2, 3, 0, 0, 0, 0, 0, 2, 0),
(9, 10, 1, 0, 0, 0, 3, 0, 0, 0, -1, 0, 2, 0),
(9, 11, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(9, 12, 0, 0, 3, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(9, 17, 1, 0, 0, 0, 3, 0, 0, 0, -1, 0, 2, 0),
(9, 18, 1, 0, 0, 4, 3, 0, 0, 0, 0, 0, 2, 0),
(9, 19, 1, 0, 0, 0, 3, 0, 0, 0, -1, 0, 2, 0),
(9, 21, 1, 0, 5, 0, 3, 0, 0, 0, -1, 0, 2, 0),
(9, 24, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(10, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(10, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(10, 3, 1, 0, 0, 0, 0, 0, 0, 0, -5, 0, 2, 0),
(10, 4, 1, 0, 4, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(10, 5, 1, 0, 4, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(10, 6, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(10, 8, 3, 0, 0, 0, 0, 0, 0, 0, -10, 0, 2, 0),
(10, 9, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 2, 0),
(10, 10, 1, 0, 0, 0, 0, 0, 0, 0, -5, 0, 2, 0),
(10, 11, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(10, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(10, 13, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(10, 14, 1, 0, 0, 0, 0, 0, 0, 0, -5, 0, 2, 0),
(10, 15, 1, 0, 0, 0, 0, 0, 0, 0, -5, 0, 2, 0),
(10, 16, 1, 0, 0, 0, 0, 0, 0, 0, -5, 0, 2, 0),
(10, 18, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(10, 21, 1, 0, 0, 0, 0, 0, 0, 0, -5, 0, 2, 0),
(11, 1, 0, 0, 6, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(11, 2, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(11, 3, 1, 3, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(11, 4, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(11, 6, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, -2, 0),
(11, 8, 3, 4, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(11, 9, 0, 0, 3, 2, 3, 0, 0, 0, 0, 0, 2, 0),
(11, 10, 1, 3, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(11, 12, 0, 0, 0, 2, 3, 0, 0, 0, 0, 0, 2, 0),
(11, 13, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(11, 15, 1, 3, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(11, 16, 1, 3, 5, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(11, 17, 1, 3, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(11, 19, 1, 3, 5, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(11, 21, 1, 3, 5, 4, 3, 0, 0, 0, 0, 0, 2, 0),
(12, 2, 1, 0, 4, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(12, 3, 1, 3, 0, 2, 3, 0, 0, 0, 0, 0, 2, 0),
(12, 4, 1, 0, 8, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(12, 6, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(12, 7, 1, 0, 4, 2, 3, 0, 0, 0, 0, 0, 2, 0),
(12, 8, 3, 4, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(12, 9, 0, 0, 15, 2, 3, 0, 0, 0, 0, 0, 2, 0),
(12, 10, 1, 3, 5, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(12, 12, 0, 0, 3, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(12, 13, 1, 0, 0, 2, 3, 0, 0, 0, 0, 0, 2, 0),
(12, 15, 1, 3, 0, 2, 3, 0, 0, 0, 0, 0, 2, 0),
(12, 16, 1, 3, 0, 2, 3, 0, 0, 0, 0, 0, 2, 0),
(12, 17, 1, 3, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(12, 18, 1, 0, 4, 6, 3, 0, 0, 0, 0, 0, 2, 0),
(12, 21, 1, 3, 5, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(12, 24, 1, 0, 0, 4, 3, 0, 0, 0, 0, 0, 2, 0),
(13, 1, 0, 0, 3, 4, 3, 0, 0, 0, 0, 0, 2, 0),
(13, 3, 1, 0, 0, 0, 3, 0, 0, 0, -3, 0, 2, 0),
(13, 4, 1, 0, 0, 2, 3, 0, 0, 0, 0, 0, 2, 0),
(13, 7, 1, 0, 0, 2, 3, 0, 0, 0, 0, 0, 2, 0),
(13, 8, 3, 0, 0, 0, 3, 0, 0, 0, -6, 0, 2, 0),
(13, 9, 0, 0, 6, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(13, 10, 1, 0, 0, 0, 3, 0, 0, 0, -3, 0, 2, 0),
(13, 11, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(13, 12, 0, 0, 3, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(13, 14, 1, 0, 0, 0, 3, 0, 0, 0, -3, 0, 2, 0),
(13, 16, 1, 0, 0, 0, 3, 0, 0, 0, -3, 0, 2, 0),
(13, 17, 1, 0, 0, 2, 3, 0, 0, 0, -3, 0, 2, 0),
(13, 19, 1, 0, 5, 0, 3, 0, 0, 0, -3, 0, 4, 0),
(13, 21, 1, 0, 0, 0, 3, 0, 0, 0, -3, 0, 2, 0),
(13, 24, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(14, 1, 0, 0, 3, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(14, 2, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(14, 3, 1, 0, 0, 0, 3, 0, 0, 0, -2, 0, 2, 0),
(14, 4, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(14, 5, 1, 0, 4, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(14, 6, 1, 0, 4, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(14, 8, 3, 0, 0, 0, 3, 0, 0, 0, -4, 0, 2, 0),
(14, 9, 0, 0, 3, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(14, 11, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(14, 12, 0, 0, 6, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(14, 13, 1, 0, 0, 2, 3, 0, 0, 0, 0, 0, 2, 0),
(14, 14, 1, 0, 0, 0, 3, 0, 0, 0, -2, 0, 2, 0),
(14, 15, 1, 0, 0, 0, 3, 0, 0, 0, -2, 0, 2, 0),
(14, 16, 1, 0, 0, 0, 3, 0, 0, 0, -2, 0, 2, 0),
(14, 18, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0),
(14, 19, 1, 0, 0, 2, 3, 0, 0, 0, -2, 0, 2, 0),
(15, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(15, 3, 1, 0, 0, 0, 0, 0, 0, 0, -2, 0, 2, 0),
(15, 4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(15, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(15, 6, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(15, 7, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(15, 8, 3, 0, 0, 0, 0, 0, 0, 0, -4, 0, 2, 0),
(15, 11, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(15, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(15, 13, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(15, 14, 1, 0, 0, 0, 0, 0, 0, 0, -2, 0, 0, 0),
(15, 15, 1, 0, 0, 0, 0, 0, 0, 0, -2, 0, 2, 0),
(15, 16, 1, 0, 0, 0, 0, 0, 0, 0, -2, 0, 2, 0),
(15, 17, 1, 0, 0, 0, 0, 0, 0, 0, -2, 0, 2, 0),
(15, 19, 1, 0, 0, 0, 0, 0, 0, 0, -2, 0, 2, 0),
(15, 21, 1, 0, 0, 0, 0, 0, 0, 0, -2, 0, 2, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sb_topscoorders`
--

CREATE TABLE IF NOT EXISTS `sb_topscoorders` (
  `uID` int(11) NOT NULL AUTO_INCREMENT,
  `doelpunten` int(11) NOT NULL,
  PRIMARY KEY (`uID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Gegevens worden uitgevoerd voor tabel `sb_topscoorders`
--

INSERT INTO `sb_topscoorders` (`uID`, `doelpunten`) VALUES
(1, 4),
(2, 2),
(3, 1),
(4, 9),
(5, 4),
(6, 1),
(7, 2),
(8, 0),
(9, 15),
(10, 1),
(11, 0),
(12, 9),
(13, 0),
(14, 0),
(15, 0),
(16, 1),
(17, 0),
(18, 1),
(19, 2),
(20, 0),
(21, 3),
(22, 0),
(23, 0),
(24, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sb_users`
--

CREATE TABLE IF NOT EXISTS `sb_users` (
  `uID` tinyint(3) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `positie` tinyint(1) NOT NULL,
  PRIMARY KEY (`uID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden uitgevoerd voor tabel `sb_users`
--

INSERT INTO `sb_users` (`uID`, `naam`, `positie`) VALUES
(1, 'Kevin Savonije', 3),
(2, 'Andy Tazelaar', 2),
(3, 'Dennis Nagelkerke', 1),
(4, 'Sander Nagelkerke', 2),
(5, 'Dennis Tolhoek', 2),
(6, 'Nick van Tilborg', 2),
(7, 'Ramon Schouwenaar', 2),
(8, 'Maico Goedegebure', 0),
(9, 'Jean-Paul Harthoorn', 3),
(10, 'Richard Bal', 1),
(11, 'Rob Westera', 2),
(12, 'Jochem Groen', 3),
(13, 'Emiel van Dalen', 2),
(14, 'Stefan Wisse', 1),
(15, 'Pieter Vos', 1),
(16, 'Robin Vermeulen', 1),
(17, 'Johnny Schouwenaar', 1),
(18, 'Pascal Korsuize', 2),
(19, 'Niels Erwich', 1),
(20, 'Tristan Vis', 3),
(21, 'Bjorn Coldenhoff', 1),
(22, 'Jeffrey Otten', 3),
(23, 'Vincent Olivieri', 1),
(24, 'Jelle Goeree', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sb_wedstrijden`
--

CREATE TABLE IF NOT EXISTS `sb_wedstrijden` (
  `wID` int(4) NOT NULL AUTO_INCREMENT,
  `tegenstander` varchar(255) NOT NULL,
  `winst` tinyint(1) NOT NULL,
  `datum` date NOT NULL,
  `stand` varchar(10) NOT NULL,
  `opmerkingen` varchar(255) NOT NULL,
  PRIMARY KEY (`wID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Gegevens worden uitgevoerd voor tabel `sb_wedstrijden`
--

INSERT INTO `sb_wedstrijden` (`wID`, `tegenstander`, `winst`, `datum`, `stand`, `opmerkingen`) VALUES
(1, 'Kapelle 4', 0, '2015-09-19', '3-0', ''),
(6, 'Kloetinge 5', 0, '2015-09-26', '8-1', ''),
(7, 'Bruse Boys 3', 0, '2015-06-10', '4-2', ''),
(8, 'SSV 3', 0, '2015-10-10', '4-3', ''),
(9, 'Wemeldinge 3', 0, '2015-10-17', '6-1', ''),
(10, 'Mzc 4', 1, '2015-10-24', '2-5', ''),
(11, 'Heinkenszand 4', 0, '2015-10-31', '6-0', ''),
(12, 'Wolfaartsdijk 3', 0, '2015-07-11', '13-0', ''),
(13, 'Brouwershaven 1', 0, '0000-00-00', '5-3', ''),
(14, 'ZSC 2', 0, '0000-00-00', '6-2', ''),
(15, 'Kapelle 3', 1, '2015-06-12', '0-2', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
