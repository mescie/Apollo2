-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Machine: localhost:3306
-- Genereertijd: 02 nov 2015 om 20:54
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
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uID` tinyint(3) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `positie` tinyint(1) NOT NULL,
  PRIMARY KEY (`uID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`uID`, `naam`, `positie`) VALUES
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
