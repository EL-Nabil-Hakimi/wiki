-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3307
-- Généré le : ven. 12 jan. 2024 à 17:29
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wikidb`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `actif` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `categoryID` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `date`, `actif`, `userID`, `categoryID`, `image`) VALUES
(26, 'Football. Kylian Mbappé et Karim Benzema parmi les nommés du Globe Soccer Awards', 'Chaque année, pour concurrencer la cérémonie du Ballon d’Or, se tient la cérémonie des Globe Soccer Awards à Dubaï (Émirats arabes unis). Durant la cérémonie, 22 prix sont mis en jeu, dont celui du meilleur joueur de l’année. La 14e édition aura lieu le 19 janvier prochain.\r\n\r\n11 joueurs nommés\r\nTenant du titre, Karim Benzema figure dans la liste des 11 nommés malgré son transfert cet été à Al-Ittihad en Arabie saoudite. Également présent, son compatriote Kylian Mbappé, qui a réalisé une excellente saison 2023 avec l’équipe de France et le Paris Saint-Germain.', '2024-01-12 08:28:49', NULL, 3, 1, 'assets/images/gettyimages-971463110.jpg'),
(27, 'Éclats de Lumière dans l\'Obscurité', 'Description: Plongez dans un voyage visuel et émotionnel à travers notre exposition photographique captivante, où chaque cliché raconte une histoire unique. \"Éclats de Lumière dans l\'Obscurité\" explore la beauté cachée dans les moments simples, capturant la poésie de la vie quotidienne et révélant des détails souvent négligés. Laissez-vous emporter par la magie de la photographie, où la lumière joue le rôle principal, illuminant l\'obscurité et révélant la splendeur qui réside dans chaque coin de notre monde. Une expérience visuelle inoubliable vous attend, mettant en lumière l\'extraordinaire dans l\'ordinaire.', '2024-01-12 09:20:33', NULL, 3, 7, 'assets/images/55e7d2464e57a814f1dc8460962e33791c3ad6e04e5074417c2d78d39545c6_640.jpg'),
(28, 'Les secrets de l\'univers dévoilés : Voyage au cœur de la cosmologie moderne', 'Description : Explorez les mystères infinis de l\'univers dans cette fascinante odyssée cosmologique. Plongez-vous dans les découvertes révolutionnaires de la science moderne, des trous noirs aux ondes gravitationnelles, en passant par l\'énergie sombre qui façonne notre cosmos. Ce voyage captivant vous emmènera à travers les frontières de l\'espace-temps, révélant les énigmes qui ont intrigué les esprits curieux depuis des siècles. Préparez-vous à être émerveillé par les révélations cosmiques qui redéfinissent notre compréhension de l\'univers.', '2024-01-12 09:21:12', NULL, 3, 8, 'assets/images/53e2d3454252a914f1dc8460962e33791c3ad6e04e50744074267bd59e44cd_640.jpg'),
(29, 'Les Mystères de l\'Abyssal', 'Plongez dans un monde océanique fascinant avec \"Les Mystères de l\'Abyssal\". Ce roman captivant vous emmène à la découverte des profondeurs inexplorées de l\'océan, où des créatures énigmatiques, des secrets oubliés et des trésors perdus attendent d\'être révélés. Suivez l\'aventure palpitante d\'une équipe de chercheurs intrépides alors qu\'ils affrontent les mystères les plus sombres de l\'océan, dévoilant des histoires entrelacées de science, d\'aventure et de mysticisme. \"Les Mystères de l\'Abyssal\" vous plongera dans un monde sous-marin mystérieux, où l\'inconnu réserve des surprises inimaginables. Êtes-vous prêt à explorer les profondeurs insondables et à percer les secrets de l\'Abyssal ?', '2024-01-12 09:24:03', NULL, 3, 11, 'assets/images/57e6d6434e55ae14f1dc8460962e33791c3ad6e04e5074417c2f7dd5924dc5_640.jpg'),
(30, 'Les Mystères de l\'Abyssal', 'Plongez dans un monde océanique fascinant avec \"Les Mystères de l\'Abyssal\". Ce roman captivant vous emmène à la découverte des profondeurs inexplorées de l\'océan, où des créatures énigmatiques, des secrets oubliés et des trésors perdus attendent d\'être révélés. Suivez l\'aventure palpitante d\'une équipe de chercheurs intrépides alors qu\'ils affrontent les mystères les plus sombres de l\'océan, dévoilant des histoires entrelacées de science, d\'aventure et de mysticisme. \"Les Mystères de l\'Abyssal\" vous plongera dans un monde sous-marin mystérieux, où l\'inconnu réserve des surprises inimaginables. Êtes-vous prêt à explorer les profondeurs insondables et à percer les secrets de l\'Abyssal ?', '2024-01-12 09:24:33', NULL, 3, 10, 'assets/images/57e4d0444255ae14f1dc8460962e33791c3ad6e04e5074417c2f7cd39044c4_640.jpg'),
(31, 'Les Mystères de l\'Abyssal ', 'Plongez dans un monde océanique fascinant avec \"Les Mystères de l\'Abyssal\". Ce roman captivant vous emmène à la découverte des profondeurs inexplorées de l\'océan, où des créatures énigmatiques, des secrets oubliés et des trésors perdus attendent d\'être révélés. Suivez l\'aventure palpitante d\'une équipe de chercheurs intrépides alors qu\'ils affrontent les mystères les plus sombres de l\'océan, dévoilant des histoires entrelacées de science, d\'aventure et de mysticisme. \"Les Mystères de l\'Abyssal\" vous plongera dans un monde sous-marin mystérieux, où l\'inconnu réserve des surprises inimaginables. Êtes-vous prêt à explorer les profondeurs insondables et à percer les secrets de l\'Abyssal ?\r\nPlongez dans un monde océanique fascinant avec \"Les Mystères de l\'Abyssal\". Ce roman captivant vous emmène à la découverte des profondeurs inexplorées de l\'océan, où des créatures énigmatiques, des secrets oubliés et des trésors perdus attendent d\'être révélés. Suivez l\'aventure palpitante d\'une équipe de chercheurs intrépides alors qu\'ils affrontent les mystères les plus sombres de l\'océan, dévoilant des histoires entrelacées de science, d\'aventure et de mysticisme. \"Les Mystères de l\'Abyssal\" vous plongera dans un monde sous-marin mystérieux, où l\'inconnu réserve des surprises inimaginables. Êtes-vous prêt à explorer les profondeurs insondables et à percer les secrets de l\'Abyssal ?', '2024-01-12 09:25:09', NULL, 3, 7, 'assets/images/57e2d54a4c56ab14f1dc8460962e33791c3ad6e04e5074417c2e7dd29e4dc7_640.jpg'),
(33, 'Éclats de Lumière dans l\'Obscurité', 'Plongez dans un monde océanique fascinant avec \"Les Mystères de l\'Abyssal\". Ce roman captivant vous emmène à la découverte des profondeurs inexplorées de l\'océan, où des créatures énigmatiques, des secrets oubliés et des trésors perdus attendent d\'être révélés. Suivez l\'aventure palpitante d\'une équipe de chercheurs intrépides alors qu\'ils affrontent les mystères les plus sombres de l\'océan, dévoilant des histoires entrelacées de science, d\'aventure et de mysticisme. \"Les Mystères de l\'Abyssal\" vous plongera dans un monde sous-marin mystérieux, où l\'inconnu réserve des surprises inimaginables. Êtes-vous prêt à explorer les profondeurs insondables et à percer les secrets de l\'Abyssal ?Plongez dans un monde océanique fascinant avec \"Les Mystères de l\'Abyssal\". Ce roman captivant vous emmène à la découverte des profondeurs inexplorées de l\'océan, où des créatures énigmatiques, des secrets oubliés et des trésors perdus attendent d\'être révélés. Suivez l\'aventure palpitante d\'une équipe de chercheurs intrépides alors qu\'ils affrontent les mystères les plus sombres de l\'océan, dévoilant des histoires entrelacées de science, d\'aventure et de mysticisme. \"Les Mystères de l\'Abyssal\" vous plongera dans un monde sous-marin mystérieux, où l\'inconnu réserve des surprises inimaginables. Êtes-vous prêt à explorer les profondeurs insondables et à percer les secrets de l\'Abyssal ?Plongez dans un monde océanique fascinant avec \"Les Mystères de l\'Abyssal\". Ce roman captivant vous emmène à la découverte des profondeurs inexplorées de l\'océan, où des créatures énigmatiques, des secrets oubliés et des trésors perdus attendent d\'être révélés. Suivez l\'aventure palpitante d\'une équipe de chercheurs intrépides alors qu\'ils affrontent les mystères les plus sombres de l\'océan, dévoilant des histoires entrelacées de science, d\'aventure et de mysticisme. \"Les Mystères de l\'Abyssal\" vous plongera dans un monde sous-marin mystérieux, où l\'inconnu réserve des surprises inimaginables. Êtes-vous prêt à explorer les profondeurs insondables et à percer les secrets de l\'Abyssal ?Plongez dans un monde océanique fascinant avec \"Les Mystères de l\'Abyssal\". Ce roman captivant vous emmène à la découverte des profondeurs inexplorées de l\'océan, où des créatures énigmatiques, des secrets oubliés et des trésors perdus attendent d\'être révélés. Suivez l\'aventure palpitante d\'une équipe de chercheurs intrépides alors qu\'ils affrontent les mystères les plus sombres de l\'océan, dévoilant des histoires entrelacées de science, d\'aventure et de mysticisme. \"Les Mystères de l\'Abyssal\" vous plongera dans un monde sous-marin mystérieux, où l\'inconnu réserve des surprises inimaginables. Êtes-vous prêt à explorer les profondeurs insondables et à percer les secrets de l\'Abyssal ?Plongez dans un monde océanique fascinant avec \"Les Mystères de l\'Abyssal\". Ce roman captivant vous emmène à la découverte des profondeurs inexplorées de l\'océan, où des créatures énigmatiques, des secrets oubliés et des trésors perdus attendent d\'être révélés. Suivez l\'aventure palpitante d\'une équipe de chercheurs intrépides alors qu\'ils affrontent les mystères les plus sombres de l\'océan, dévoilant des histoires entrelacées de science, d\'aventure et de mysticisme. \"Les Mystères de l\'Abyssal\" vous plongera dans un monde sous-marin mystérieux, où l\'inconnu réserve des surprises inimaginables. Êtes-vous prêt à explorer les profondeurs insondables et à percer les secrets de l\'Abyssal ?Plongez dans un monde océanique fascinant avec \"Les Mystères de l\'Abyssal\". Ce roman captivant vous emmène à la découverte des profondeurs inexplorées de l\'océan, où des créatures énigmatiques, des secrets oubliés et des trésors perdus attendent d\'être révélés. Suivez l\'aventure palpitante d\'une équipe de chercheurs intrépides alors qu\'ils affrontent les mystères les plus sombres de l\'océan, dévoilant des histoires entrelacées de science, d\'aventure et de mysticisme. \"Les Mystères de l\'Abyssal\" vous plongera dans un monde sous-marin mystérieux, où l\'inconnu réserve des surprises inimaginables. Êtes-vous prêt à explorer les profondeurs insondables et à percer les secrets de l\'Abyssal ?Plongez dans un monde océanique fascinant avec \"Les Mystères de l\'Abyssal\". Ce roman captivant vous emmène à la découverte des profondeurs inexplorées de l\'océan, où des créatures énigmatiques, des secrets oubliés et des trésors perdus attendent d\'être révélés. Suivez l\'aventure palpitante d\'une équipe de chercheurs intrépides alors qu\'ils affrontent les mystères les plus sombres de l\'océan, dévoilant des histoires entrelacées de science, d\'aventure et de mysticisme. \"Les Mystères de l\'Abyssal\" vous plongera dans un monde sous-marin mystérieux, où l\'inconnu réserve des surprises inimaginables. Êtes-vous prêt à explorer les profondeurs insondables et à percer les secrets de l\'Abyssal ?', '2024-01-12 09:26:52', NULL, 3, 8, 'assets/images/55e7d2464e57a814f1dc8460962e33791c3ad6e04e5074417c2d78d39545c6_640.jpg'),
(40, 'jdqfbjqdh', 'jdbvsdu', '2024-01-12 16:22:05', NULL, 3, 10, 'assets/images/53e2d3454252a914f1dc8460962e33791c3ad6e04e50744074267bd59e44cd_640.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `cateroies`
--

CREATE TABLE `cateroies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cateroies`
--

INSERT INTO `cateroies` (`id`, `name`) VALUES
(1, 'SPORT'),
(4, 'Music'),
(7, 'Travel and Exploration'),
(8, 'Health and Wellness'),
(9, 'Technology and Innovation'),
(10, 'Arts and Creativity'),
(11, 'Community and Social Impact');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'ADMIN'),
(2, 'USER');

-- --------------------------------------------------------

--
-- Structure de la table `tages`
--

CREATE TABLE `tages` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tages`
--

INSERT INTO `tages` (`id`, `name`) VALUES
(10, 'Adventure'),
(11, 'Innovation'),
(12, 'Inspiration'),
(13, 'Technology'),
(14, 'Creativity'),
(15, 'Wellness'),
(16, 'Exploration'),
(17, 'Mindfulness'),
(18, 'Community'),
(19, 'Harmony');

-- --------------------------------------------------------

--
-- Structure de la table `tages_user`
--

CREATE TABLE `tages_user` (
  `id` int(11) NOT NULL,
  `wikiID` int(11) DEFAULT NULL,
  `tagsID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tages_user`
--

INSERT INTO `tages_user` (`id`, `wikiID`, `tagsID`) VALUES
(240, 34, 12),
(241, 38, 10),
(242, 38, 11),
(243, 39, 10),
(244, 39, 11),
(245, 39, 12),
(246, 39, 13),
(247, 40, 10),
(248, 40, 11),
(249, 40, 12);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'NABIL', 'Nabil@a.a', '123', 1),
(2, 'TAHA', 'nabilelhakimi2023@gmail.com', '$2y$10$w2u/5Ri.YqnYwLDjSkWBmOp1fy1GyFrDp4QN6aLZrypxIuv.0E48W', 1),
(3, 'NIAM', 'Niama@c.c', '$2y$10$vqXKxIhb8l8AJUGcrVrMiOz.oW1c0v5YmrHuD0/D6LRGb6E7zgtQC', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_article` (`userID`),
  ADD KEY `fk_category_article` (`categoryID`);

--
-- Index pour la table `cateroies`
--
ALTER TABLE `cateroies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tages`
--
ALTER TABLE `tages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tages_user`
--
ALTER TABLE `tages_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kf_wiki_tages_user` (`wikiID`),
  ADD KEY `kf_tag_tages_user` (`tagsID`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_role_user` (`role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `cateroies`
--
ALTER TABLE `cateroies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tages`
--
ALTER TABLE `tages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `tages_user`
--
ALTER TABLE `tages_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_category_article` FOREIGN KEY (`categoryID`) REFERENCES `cateroies` (`id`),
  ADD CONSTRAINT `fk_user_article` FOREIGN KEY (`userID`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_role_user` FOREIGN KEY (`role`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
