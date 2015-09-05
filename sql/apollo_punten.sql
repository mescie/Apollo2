-- phpMyAdmin SQL Dump
-- version 4.3.0
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Gegenereerd op: 05 sep 2015 om 09:45
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
-- Gegevens worden geëxporteerd voor tabel `punten`
--

INSERT INTO `punten` (`wID`, `uID`, `gespeeld`, `cleansheet`, `gescoord`, `assist`, `winst`, `gelijkspel`, `geel`, `rood`, `tegengoal`, `eigengoal`, `jasje`, `total`) VALUES
(1, 1, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 10),
(1, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, -20, 5),
(2, 1, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`uID` tinyint(3) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `positie` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`uID`, `naam`, `positie`) VALUES
(1, 'Kevin Savonije', 2),
(2, 'Andy Tazelaar', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `wedstrijden`
--

CREATE TABLE IF NOT EXISTS `wedstrijden` (
`wID` int(4) NOT NULL,
  `tegenstander` varchar(255) NOT NULL,
  `winst` tinyint(1) NOT NULL,
  `datum` date NOT NULL,
  `stand` varchar(10) NOT NULL,
  `opmerkingen` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `wedstrijden`
--

INSERT INTO `wedstrijden` (`wID`, `tegenstander`, `winst`, `datum`, `stand`, `opmerkingen`) VALUES
(1, 'Arnemuiden 5', 1, '2015-08-22', '1-3', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `punten`
--
ALTER TABLE `punten`
 ADD PRIMARY KEY (`wID`,`uID`), ADD KEY `wID` (`wID`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`uID`);

--
-- Indexen voor tabel `wedstrijden`
--
ALTER TABLE `wedstrijden`
 ADD PRIMARY KEY (`wID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
MODIFY `uID` tinyint(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `wedstrijden`
--
ALTER TABLE `wedstrijden`
MODIFY `wID` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
