-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2017 at 01:14 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db2793304`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `img` varchar(255) NOT NULL,
  `amount` int(4) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `content`, `img`, `amount`, `category`, `price`, `size`) VALUES
(1, 'Juwelry Cards Item', 'Mooi schilderij van de natuur in de westerse polder. Hier ziet u de mooie ijsvogel in zijn natuurlijke habitat. Het lijkt nogal schuw door het bos heen maar dat is alleen om zichzelf te verschuilen van zijn natuurlijke vijanden. Het schilderij bevat mooie kleuren van groen en blauw die uw huis echt tot leven laten komen.', 'ijsvogel.jpg', 4, 'jewelry cards', 25, '24 x 123'),
(5, 'Polder', 'De polder is erg nat tijdens dit seizoen. De polder is erg authentiek aan de nederlandse geschiedenis.Nergens anders in de wereld zal je net zoveel polders zien in dit land als elk ander land in de wereld.', 'polder.jpg', 2, 'cadeaus', 45, '45 bij 20 c1'),
(47, 'beer', 'beer is groot', '20170109165347_chipmunk.jpg', 55, 'dier', 45, '40 bij 30 cm'),
(50, 'Workshop item', '2323', '20170109170156_DSC09811.JPG', 233232, 'workshops', 0, 'sadsda'),
(51, 'Books', '2323', '20170109170413_DSC09811.JPG', 233232, 'books', 0, 'sadsda'),
(52, 'Jewelry item', '2323', '20170111074444_', 233232, 'jewelry', 0, 'sadsda'),
(53, 'Workshop item', '2323', '20170109170413_DSC09811.JPG', 233232, 'workshops', 0, 'sadsda'),
(55, 'Lifestyle item', '0', '20170111101558_binnenzijde def.jpeg', 0, 'lifestyle', 0, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
