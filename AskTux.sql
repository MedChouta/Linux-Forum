-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 14, 2018 at 03:01 AM
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
(17, 3, 'Admin', 'Bienvenue dans le forum :)', '2018-03-04 22:23:47'),
(20, 10, 'DeMaHoM03', 'DES BARRES', '2018-05-14 00:44:38'),
(21, 10, 'DeMaHoM03', 'je réponds à moi même', '2018-05-14 00:44:57'),
(22, 6, 'DeMaHoM03', 'Je débarque comme un certain spider-man', '2018-05-14 00:46:03'),
(23, 3, 'DeMaHoM03', 'test', '2018-05-14 00:48:21'),
(24, 6, 'DeMaHoM03', 'test\r\ntest\r\nTEST', '2018-05-14 00:52:42'),
(25, 6, 'DeMaHoM03', 'test\\n\r\ntest', '2018-05-14 00:52:54');

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
(7, 'test', 'test', 'test', 'dépanage', '2018-02-28 17:44:31'),
(9, 'DeMaHoM03', 'Test 2', 'test de fonctionnalité', '', '2018-05-14 00:31:31'),
(10, 'DeMaHoM03', 'Encore un test', 'le petit contenu du test', 'dépanage', '2018-05-14 00:42:44');

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
(13, 'Admin', 'Admin@gmail.com', 'df7b26e747517312114a88a9715294c3d6184fe536daff50e7204ec55bf15de7736116fd62bd869fca8a22d3bf82c28fd0510f98473ec55a7b2da3a2e113d6cb', '2018-05-14 00:21:15'),
(12, 'DeMaHoM03', 'mohammedchouta10@gmail.com', '33f9c65bdba110554c83433e07fc65946ef7dbd5298ff1755852e41c22e1cceac9cb2be37e914c3ff3ec795e9be33bf2d1c122c245c2582a1488090f094740c0', '2018-05-13 22:50:43'),
(14, 'test', 'test@gmail.com', 'c58242c3d95fbc29699003f77bee35f3e5f6e2b9cc9e4c9278ec57f73958cb7fa258950674bb3e29306aee29f4679956c2432dd8ca6f02c140b8f5305e358c1a', '2018-05-14 00:22:28'),
(15, 'test1', 'test1@gmail.com', 'c58242c3d95fbc29699003f77bee35f3e5f6e2b9cc9e4c9278ec57f73958cb7fa258950674bb3e29306aee29f4679956c2432dd8ca6f02c140b8f5305e358c1a', '2018-05-14 00:24:08'),
(11, 'test', 'test@gmail.com', 'd0ad892c4b4c3ed68b2e423380c45cfee0f6bb06589de53be2813ba11ea01bf5ddc2bfd2e9b395d78ae3a2c9e0196f92795b720bae7cf25c18590bcff5157606', '2018-05-13 22:24:16'),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
