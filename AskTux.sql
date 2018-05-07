-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2018 at 08:22 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `AskTux`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `id_post`, `author`, `content`, `creation_date`) VALUES
(1, 5, 'Mateo', 'Merci pour cette astuce', '2018-02-26 21:49:24'),
(2, 5, 'Mohammed', 'Je t\'en pris ;)', '2018-02-27 22:58:33'),
(3, 5, 'Mateo', 't\'as vu ? on peut ajouter des commentaires maintenant', '2018-02-27 22:59:15'),
(4, 5, 'Admin', 'Oui, je viens d\'ajouter cette fonctionnalité', '2018-02-27 22:59:46'),
(13, 5, 'Mohammed', 'merci l\'admin ;)', '2018-02-27 23:14:28'),
(14, 5, 'Admin', 'Je t\'en pris', '2018-02-28 16:33:12'),
(15, 6, 'mohammed', 'trop cool ce post', '2018-02-28 17:52:47'),
(16, 6, 'Admin', 'Merci à toi', '2018-03-03 15:03:45'),
(17, 3, 'Admin', 'Bienvenue dans le forum :)', '2018-03-04 22:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author`, `title`, `content`, `category`, `creation_date`) VALUES
(3, 'Mohammed Chouta', 'Mon premier post', 'Voici mon premier post comme l\'indique le titre, soyez indulgent avec moi SVP', 'discution générale', '2018-02-26 16:13:00'),
(6, 'Admin', 'Nouvelle fonctionnalité', 'Vous pouvez désormais ajouter des posts ', 'annonce', '2018-02-28 17:08:15'),
(7, 'test', 'test', 'test', 'dépanage', '2018-02-28 17:44:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(256) NOT NULL,
  `signUpDate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `UserName`, `email`, `password`, `signUpDate`) VALUES
(3, 'DeMaHoM03', 'mohammedchouta10@gmail.com', 'd696bbebaca17c69f8a479e12d5f935445e12b58322853f20b2e8817dbabf304', '2018-04-17 23:58:52'),
(10, 'mohammed', 'd@dlkfjslkdf.com', 'e9b57e40e09b9b7e756dc8f3b34ea7d7f25e20104f322268b8e2c6ae92f970d77f272a9ce957b9a95d3fe63f0b762538492bce607076683443afd6baa9945bdb', '2018-04-28 20:05:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
