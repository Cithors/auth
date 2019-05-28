-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2019 at 01:14 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20190524132850', '2019-05-24 13:28:58'),
('20190524132854', '2019-05-27 08:49:50'),
('20190527084834', '2019-05-27 08:49:50');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `date_creation` date NOT NULL,
  `date_modif` date NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `nom`, `prenom`, `date_naissance`, `date_creation`, `date_modif`, `avatar`) VALUES
(6, 'no@u', '[]', '$2y$13$G4wvNV.189jkcENBoGcwVeLVNllCA9Lw55NOtPRnfoIKuP1nnjNBK', 'no', 'u', '2014-01-01', '2019-05-28', '2019-05-28', 'https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fprecariouspastor.files.wordpress.com%2F2011%2F03%2Fnot-you1.gif&f=1'),
(10, 'test@test', '[]', '$2y$13$ZkvGQynmYJT1UCvUSUuJWOe.4E/ht.hNEgkW1uN7aVpG9yNQucsyC', 'test', 'test', '1998-02-11', '2019-05-28', '2019-05-28', 'https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Ftestcreative.co.uk%2Fwp-content%2Fuploads%2F2017%2F10%2FTest-Logo-Circle-black-transparent.png&f=1'),
(11, 'email@mail', '[]', '$2y$13$ppkhDVu/jYc6AZy4JXz73ua0ozS07GnR8S8CTndfOG32hziysMBxi', 'email', 'mail', '1998-04-15', '2019-05-28', '2019-05-28', 'https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fsendgrid.com%2Fwp-content%2Fuploads%2F2014%2F08%2FHiRes.jpg&f=1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
