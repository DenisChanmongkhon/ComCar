-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 24. Apr 2018 um 14:02
-- Server-Version: 10.1.25-MariaDB
-- PHP-Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `comcar`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `path` VARCHAR(50) NOT NULL,
  `price` int(50) NOT NULL,
  `ps` int(50) NOT NULL,
  `topspeed` int(50) NOT NULL,
  `ztoh` float NOT NULL,
  `fuel` varchar(50) COLLATE utf8_german2_ci NOT NULL,
  `seats` int(10) NOT NULL,
  `brandname` varchar(50) COLLATE utf8_german2_ci NOT NULL,
  `model` varchar(50) COLLATE utf8_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Daten für Tabelle `cars`
--

INSERT INTO `cars` (`id`, `path`, `price`, `ps`, `topspeed`, `ztoh`, `fuel`, `seats`, `brandname`, `model`) VALUES
(1, '', 203295, 631, 325, 2.3, 'Benzin', 2, 'Lamborghini', 'Huracan'),
(2, '', 114875, 605, 305, 3.2, 'Benzin', 5, 'Audi', 'RS7'),
(3, '', 86050, 330, 263, 4.7, 'Benzin', 5, 'Porsche', 'Panamera'),
(4, '', 113395, 503, 310, 3, 'Benzin', 2, 'Mercedes', 'AMG GT'),
(5, '', 148600, 773, 250, 3.1, 'Electro', 7, 'Tesla', 'Model X');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
