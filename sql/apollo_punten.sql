-- phpMyAdmin SQL Dump
-- version 4.3.0
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Gegenereerd op: 20 aug 2015 om 01:23
-- Serverversie: 5.5.43-MariaDB
-- PHP-versie: 5.5.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `apollo_punten`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `punten`
--

CREATE TABLE IF NOT EXISTS `punten` (
`id` tinyint(3) NOT NULL,
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
  `positie` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `punten`
--

INSERT INTO `punten` (`id`, `naam`, `gespeeld`, `cleansheet`, `gescoord`, `assist`, `winst`, `gelijkspel`, `geel`, `rood`, `tegengoal`, `eigengoal`, `jasje`, `positie`) VALUES
(1, 'Kevin Savonije', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2),
(2, 'Dennis Nagelkerke', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(3, 'Andy Tazelaar', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(4, 'Sander Nagelkerke', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3),
(5, 'Stefan Wisse', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2),
(6, 'Edgar Verhage', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'Bjorn Coldenhoff', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(8, 'Jean-Paul Harthoorn', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3),
(9, 'Richard Bal', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(10, 'Pascal Korsuize', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2),
(11, 'Jochem Groen', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3),
(12, 'Pieter Vos', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2),
(13, 'Rob Westera', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2),
(14, 'Johnny Schouwenaar', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(15, 'Jeffrey Otten', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3),
(16, 'Ramon Schouwenaar', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2),
(17, 'Robin Vermeulen', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `wedstrijden`
--

CREATE TABLE IF NOT EXISTS `wedstrijden` (
`id` int(4) NOT NULL,
  `tegenstander` varchar(255) NOT NULL,
  `goals_apollo` int(2) NOT NULL,
  `goals_tegenstander` int(2) NOT NULL,
  `winst` tinyint(1) NOT NULL,
  `soort` tinyint(1) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `wedstrijden`
--

INSERT INTO `wedstrijden` (`id`, `tegenstander`, `goals_apollo`, `goals_tegenstander`, `winst`, `soort`, `datum`) VALUES
(1, 'Colijnsplaat 4', 4, 0, 1, 1, '2015-08-06');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `punten`
--
ALTER TABLE `punten`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `wedstrijden`
--
ALTER TABLE `wedstrijden`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `punten`
--
ALTER TABLE `punten`
MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT voor een tabel `wedstrijden`
--
ALTER TABLE `wedstrijden`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
