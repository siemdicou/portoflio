-- phpMyAdmin SQL Dump
-- version 4.2.12
-- http://www.phpmyadmin.net
--
-- Machine: rdbms
-- Gegenereerd op: 25 jan 2017 om 09:23
-- Serverversie: 5.6.35-log
-- PHP-versie: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `DB2793304`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `products` varchar(25555) COLLATE latin1_german1_ci NOT NULL,
  `datum` varchar(255) COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Gegevens worden geëxporteerd voor tabel `orders`
--

INSERT INTO `orders` (`id`, `products`, `datum`) VALUES
(0, 'a:0:{}', '12-01-2017'),
(0, 'a:0:{}', '12-01-2017'),
(0, 'a:0:{}', '12-01-2017'),
(0, 'a:0:{}', '12-01-2017'),
(0, 'a:0:{}', '12-01-2017'),
(0, 'a:0:{}', '12-01-2017'),
(0, 'a:0:{}', '12-01-2017'),
(1, 'a:0:{}', '12-01-2017'),
(1, 'a:0:{}', '12-01-2017'),
(1, 'a:0:{}', '12-01-2017'),
(2, 'a:0:{}', '12-01-2017'),
(3, 'a:0:{}', '12-01-2017'),
(3, 'a:0:{}', '12-01-2017'),
(3, 'a:0:{}', '12-01-2017'),
(3, 'a:0:{}', '12-01-2017'),
(3, 'a:0:{}', '12-01-2017'),
(3, 'a:0:{}', '12-01-2017'),
(3, 'a:0:{}', '12-01-2017'),
(3, 'a:0:{}', '12-01-2017'),
(3, 'a:0:{}', '12-01-2017'),
(4, 'N;', '13-01-2017'),
(4, 'a:0:{}', '13-01-2017'),
(5, 'a:2:{i:0;i:1;i:1;i:5;}', '13-01-2017'),
(0, 'N;', '19-01-2017'),
(6, 'a:3:{i:0;i:58;i:1;i:1;i:2;i:60;}', '21-01-2017');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `img` varchar(255) NOT NULL,
  `amount` int(4) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `title`, `content`, `img`, `amount`, `category`, `price`, `size`) VALUES
(5, 'Polder', 'De polder is erg nat tijdens dit seizoen. De polder is erg authentiek aan de nederlandse geschiedenis.Nergens anders in de wereld zal je net zoveel polders zien in dit land als elk ander land in de wereld.', '20170121034154_Backgroundgreen.jpg', 2, 'books', 45, '45 bij 20 c1'),
(50, 'wolf', '2323', '20170121034219_pictures-1.jpg', 233232, 'jewelry', 6, 'sadsda'),
(51, 'licht', '2323', '20170121034237_Orange-Wallpaper-HD.png', 233232, 'cadeaus', 0, 'sadsda'),
(54, 'lazer', 'testt2', '20170121034253_eab98b6fc67345eaf9df959157308c26.jpg', 2, 'books', 0, '12X12cm'),
(57, '1', '1', '20170121032204_20170121013353_chipmunk.jpg', 1, '1', 1, '1'),
(58, '1', '1', '20170121032204_20170121013353_chipmunk.jpg', 1, 'books', 1, '1'),
(59, '1', '1', '20170121032204_20170121013353_chipmunk.jpg', 1, '1', 1, '1'),
(60, '1', '1', '20170121032204_20170121013353_chipmunk.jpg', 1, 'books', 1, '1'),
(66, '1', '1', '20170121032205_20170121013353_chipmunk.jpg', 1, 'books', 1, '1'),
(67, 'test', 'test', '20170121040946_Backgroundgreen.jpg', 4564, 'jewelry', 54, '56 bij');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sfeerfotos`
--

CREATE TABLE IF NOT EXISTS `sfeerfotos` (
`id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `sfeerfotos`
--

INSERT INTO `sfeerfotos` (`id`, `img`, `content`, `category`) VALUES
(1, 'sfeer.png', 'Het leuke van een boek rechtstreeks bij mij als maker kopen, is dat je er naar wens een persoonlijke boodschap en handtekening in kan laten zetten. Ook is het mogelijk om van een aantal van mijn boeken vertalingen te bestellen, oa in het Engels, Chinees, Spaans, Tjechisch en Deens. Leuk om een bepaalde taal te leren of om cadeau te doen aan iemand in het buitenland.', 'books'),
(2, 'sfeer.png', 'Het leuke van een boek rechtstreeks bij mij als maker kopen, is dat je er naar wens een persoonlijke boodschap en handtekening in kan laten zetten. Ook is het mogelijk om van een aantal van mijn boeken vertalingen te bestellen, oa in het Engels, Chinees, Spaans, Tjechisch en Deens. Leuk om een bepaalde taal te leren of om cadeau te doen aan iemand in het buitenland.', 'cards'),
(3, 'sfeer.png', 'Het leuke van een boek rechtstreeks bij mij als maker kopen, is dat je er naar wens een persoonlijke boodschap en handtekening in kan laten zetten. Ook is het mogelijk om van een aantal van mijn boeken vertalingen te bestellen, oa in het Engels, Chinees, Spaans, Tjechisch en Deens. Leuk om een bepaalde taal te leren of om cadeau te doen aan iemand in het buitenland.', 'jewelry'),
(4, 'sfeer.png', 'Het leuke van een boek rechtstreeks bij mij als maker kopen, is dat je er naar wens een persoonlijke boodschap en handtekening in kan laten zetten. Ook is het mogelijk om van een aantal van mijn boeken vertalingen te bestellen, oa in het Engels, Chinees, Spaans, Tjechisch en Deens. Leuk om een bepaalde taal te leren of om cadeau te doen aan iemand in het buitenland.', 'lifestyle'),
(5, 'sfeer.png', 'Het leuke van een boek rechtstreeks bij mij als maker kopen, is dat je er naar wens een persoonlijke boodschap en handtekening in kan laten zetten. Ook is het mogelijk om van een aantal van mijn boeken vertalingen te bestellen, oa in het Engels, Chinees, Spaans, Tjechisch en Deens. Leuk om een bepaalde taal te leren of om cadeau te doen aan iemand in het buitenland.', 'cadeaus'),
(6, 'sfeer.png', 'Het leuke van een boek rechtstreeks bij mij als maker kopen, is dat je er naar wens een persoonlijke boodschap en handtekening in kan laten zetten. Ook is het mogelijk om van een aantal van mijn boeken vertalingen te bestellen, oa in het Engels, Chinees, Spaans, Tjechisch en Deens. Leuk om een bepaalde taal te leren of om cadeau te doen aan iemand in het buitenland.', 'workshops');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `sfeerfotos`
--
ALTER TABLE `sfeerfotos`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT voor een tabel `sfeerfotos`
--
ALTER TABLE `sfeerfotos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
