-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 06. Apr 2019 um 14:27
-- Server-Version: 10.1.38-MariaDB
-- PHP-Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr13_benjamin_schneider_bigevents`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `eventName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eventImage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eventDescription` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `eventType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eventAddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eventStartDate` datetime NOT NULL,
  `eventEndDate` datetime NOT NULL,
  `eventContactEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eventContactNumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eventWebAddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `events`
--

INSERT INTO `events` (`id`, `eventName`, `eventImage`, `eventDescription`, `eventType`, `eventAddress`, `eventStartDate`, `eventEndDate`, `eventContactEmail`, `eventContactNumber`, `eventWebAddress`) VALUES
(1, 'Mark Rothko', 'https://events.wien.info/media/full/Rothko_KHM_20190308_28.jpg', 'The Kunsthistorisches Museum Vienna is preparing an exhibition of the American artist Mark Rothko, the first ever to be mounted in Austria.', 'Museum', 'Maria-Theresien-Platz 1010 Wien', '2019-04-05 10:00:00', '2019-04-05 18:00:00', 'info@khm.at', '+43 1 525 240', 'www.khm.at'),
(3, 'Bob Dylan', 'https://events.wien.info/media/full/Konzerthaus_Fassade_credit_Herbert_Schwingenschl%C3%B6gl_1.jpg', 'Bob Dylan giving a concert', 'Music', 'Vienna Konzerthaus Lothringerstraße 20  1030 Wien', '2019-04-16 20:00:00', '2019-04-17 05:00:00', '/', '+43 1 96096', 'www.konzerthaus.at'),
(4, 'Julian Rachlin / Denis Matsuev', 'https://events.wien.info/media/full/KHGrosserSaalNeu.jpg', 'Julian Rachlin,Violine, Viola\r\nDenis Matsuev,Klavier\r\nDmitri Schostakowitsch\r\nSonate op. 147 für Viola und Klavier (1975)\r\nJohannes Brahms\r\nSonate A-Dur op. 100 für Violine und Klavier (1886)', 'Music', 'Vienna Konzerthaus Lothringerstraße 20  1030 Wien', '2019-04-23 19:30:00', '2019-04-24 00:00:00', 'ticket@konzerthaus.at', '+43 1 242 002', 'www.konzerthaus.at'),
(5, '36th Vienna City Marathon 2019', 'https://www.wien.info/media/images/vienna-city-marathon-vcm-start-reichsbruecke-skyline-vienna-international-centre-sport-laufen-marathon-2015-1to1.jpeg/image_start', 'The Vienna City Marathon – a true \"theater of emotions\" – leads 42,000 runners from 125 nations past Vienna\'s most beautiful sights on April 6 and 7, 2019. A million spectators along the route.', 'Sports', 'Vienna', '2019-04-07 00:00:00', '2019-04-08 00:00:00', '/', '/', 'https://www.wien.info/en/vienna-for/sports/city-marathon'),
(6, 'Wings for Life World Run Vienna', 'https://www.wien.info/media/images/wings-for-life-world-run-1to1-2.jpeg/image_start', 'The starting pistol for the Wings for Life World Run will be fired for the fourth time – this year on May 5, 2019. All fees  for the global charity run go  to spinal cord research projects!', 'Sports', 'Vienna', '2019-05-05 13:00:00', '2019-05-05 20:00:00', '/', '/', 'https://www.wingsforlifeworldrun.com/at/en/vienna/'),
(7, 'Wes Anderson and the Mouse Coffin', 'https://www.wien.info/media/images/wes-anderson-juman-malouf-khm-ausstellungsansicht-sarg-einer-spitzmaus-1to1.jpeg/image_start', 'What happens when the multi-award winning US filmmaker Wes Anderson and his partner Juman Malouf curate an exhibition in the Kunsthistorisches Museum Vienna?', 'Museum', 'Vienna Kunsthistorisches Museum Maria-Theresien-Platz, 1010 Wien', '2018-11-06 00:00:00', '2019-04-28 00:00:00', 'info@khm.at', '+43 1 525 240', 'www.khm.at'),
(9, 'Vienna’s English Theatre', 'https://www.wien.info/media/images/viennas-english-theatre-1to1.jpeg/image_start', 'The English Theater was founded in 1963 and is the oldest English-language theatre in continental Europe.', 'Theater', 'Josefsgasse 12, 1080 Wien', '2019-04-05 00:00:00', '2020-04-05 00:00:00', 'tickets@englishtheatre.at', '+43 1 402 12 60 0', 'www.englishtheatre.at'),
(10, 'Burgtheater', 'https://www.wien.info/media/images/burgtheater-3to2.jpeg/image_gallery', 'The theater was built from 1874 to 1888 according to designs by Gottfried Semper and Karl von Hasenauer.', 'Theater', 'Universitätsring 2, 1010 Wien', '2019-01-01 00:00:00', '2020-01-01 00:00:00', '/', '+43 1 51444 4140', 'www.burgtheater.at'),
(14, 'Vienna Festival 2019', 'https://www.wien.info/media/images/la-vita-nuova-wiener-festwochen-2019-1to1.jpeg/image_start', 'Forty-five productions in 27 performance venues: Once again this year, the internal culture festival places the city of Vienna in the focus of contemporary stage art for five whole weeks.', 'Festival', 'Vienna', '2019-05-11 00:00:00', '2019-06-16 00:00:00', '/', '/', 'www.festwochen.at');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
