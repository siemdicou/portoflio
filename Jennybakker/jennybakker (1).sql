-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 26 jan 2017 om 11:16
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jennybakker`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `products` varchar(25555) NOT NULL,
  `datum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `orders`
--

INSERT INTO `orders` (`id`, `products`, `datum`) VALUES
(1, 'a:2:{i:0;i:32;i:1;i:29;}', '12-01-2017'),
(1, 'a:2:{i:0;i:32;i:1;i:29;}', '12-01-2017');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `img` varchar(255) NOT NULL,
  `images` varchar(1000) NOT NULL,
  `amount` int(4) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `title`, `content`, `img`, `images`, `amount`, `category`, `price`, `size`) VALUES
(98, 'Gaaf', 'g', '20170125142100_London.jpg', 'a:3:{i:0;s:21:"London.1485350460.jpg";i:1;s:22:"newyork.1485350460.jpg";i:2;s:34:"Orange-Wallpaper-HD.1485350460.png";}', 4, 'cards', 4534, '345345'),
(99, 'paard', 'pizza', '20170125142258_franche.jpg', 'a:4:{i:0;s:22:"franche.1485350578.jpg";i:1;s:21:"London.1485350578.jpg";i:2;s:22:"newyork.1485350578.jpg";i:3;s:34:"Orange-Wallpaper-HD.1485350578.png";}', 45, 'cards', 46456456, '567bnv'),
(100, 'nijlaapd', 'dgdfd', '20170125155742_fades.jpg', 'a:5:{i:0;s:20:"fades.1485356262.jpg";i:1;s:22:"franche.1485356262.jpg";i:2;s:21:"London.1485356262.jpg";i:3;s:22:"newyork.1485356262.jpg";i:4;s:34:"Orange-Wallpaper-HD.1485356262.png";}', 45, 'cards', 56, '56 bih'),
(101, 'haard', 'dsfsdf', '20170125160047_Ape.jpg', 'a:8:{i:0;s:18:"Ape.1485356447.jpg";i:1;s:30:"Backgroundgreen.1485356447.jpg";i:2;s:23:"chipmunk.1485356447.jpg";i:3;s:19:"croc.1485356447.jpg";i:4;s:22:"franche.1485356447.jpg";i:5;s:21:"London.1485356447.jpg";i:6;s:22:"newyork.1485356447.jpg";i:7;s:34:"Orange-Wallpaper-HD.1485356447.png";}', 2342, 'cards', 2334, 'adad');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sfeerfotos`
--

CREATE TABLE `sfeerfotos` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT voor een tabel `sfeerfotos`
--
ALTER TABLE `sfeerfotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
