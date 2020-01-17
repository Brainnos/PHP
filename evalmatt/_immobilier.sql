-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  jeu. 09 jan. 2020 à 12:07
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  ` immobilier`
--

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

CREATE TABLE `logement` (
  `id_logement` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `cp` int(5) NOT NULL,
  `surface` int(5) NOT NULL,
  `prix` int(7) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `type` enum('location','vente') NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `logement`
--

INSERT INTO `logement` (`id_logement`, `titre`, `adresse`, `ville`, `cp`, `surface`, `prix`, `photo`, `type`, `description`) VALUES
(8, 'Maison', '17, rue de la charmentiere', 'Strasbourg', 67000, 1200, 2000000, 'images/cofee.jpg', 'location', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ut repellat ipsa aliquam culpa neque ratione labore corrupti! Optio, cum laboriosam incidunt quis neque distinctio vitae quidem magnam molestiae vero.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ut repellat ipsa aliquam culpa neque ratione labore corrupti! Optio, cum laboriosam incidunt quis neque distinctio vitae quidem magnam molestiae vero.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ut repellat ipsa aliquam culpa neque ratione labore corrupti! Optio, cum laboriosam incidunt quis neque distinctio vitae quidem magnam molestiae vero.'),
(9, 'Appartement côtier', '1 avenue foch', 'Ostwald', 67540, 15, 20, '', 'vente', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ut repellat ipsa aliquam culpa neque ratione labore corrupti! Optio, cum laboriosam incidunt quis neque distinctio vitae quidem magnam molestiae vero.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ut repellat ipsa aliquam culpa neque ratione labore corrupti! Optio, cum laboriosam incidunt quis neque distinctio vitae quidem magnam molestiae vero.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ut repellat ipsa aliquam culpa neque ratione labore corrupti! Optio, cum laboriosam incidunt quis neque distinctio vitae quidem magnam molestiae vero.'),
(33, 'zefez', 'fezez', 'ffzeze', 51555, 444, 444, 'images/cofee.jpg', 'vente', 'grregrrggr'),
(34, 'zefez', 'fezez', 'ffzeze', 51555, 444, 444, 'images/santosh-verma-qtbCV80n1ts-unsplash.jpg', 'vente', 'grregrrggr');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `logement`
--
ALTER TABLE `logement`
  ADD PRIMARY KEY (`id_logement`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `logement`
--
ALTER TABLE `logement`
  MODIFY `id_logement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
