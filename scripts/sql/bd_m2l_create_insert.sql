-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 23 jan. 2018 à 22:08
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `m2l`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(512) DEFAULT NULL,
  `admin_email` varchar(512) DEFAULT NULL,
  `heureOuverture` int(11) DEFAULT NULL,
  `heureOuvertureMinutes` int(11) DEFAULT NULL,
  `heureFermeture` int(11) DEFAULT NULL,
  `heureFermetureMinutes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `admin_email`, `heureOuverture`, `heureOuvertureMinutes`, `heureFermeture`, `heureFermetureMinutes`) VALUES
(1, 'Salle de réception', 'chemin.lorette@lorraine-sport.net', 7, 0, 23, 0),
(2, 'Salle de réunion', 'chemin.lorette@lorraine-sport.net', 7, 0, 19, 0),
(3, 'Informatique - multimédia', 'chemin.lorette@lorraine-sport.net', 7, 0, 19, 0);

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `code` varchar(3) NOT NULL,
  `nom` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`code`, `nom`) VALUES
('54', 'Meurthe-et-Moselle'),
('55', 'Meuse'),
('57', 'Moselle'),
('88', 'Vosges');

-- --------------------------------------------------------

--
-- Structure de la table `ligue`
--

CREATE TABLE `ligue` (
  `id` int(11) NOT NULL,
  `nom` varchar(512) DEFAULT NULL,
  `adresseRue` varchar(512) DEFAULT NULL,
  `cp` varchar(5) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `urlSiteWeb` varchar(50) DEFAULT NULL,
  `emailContact` varchar(50) DEFAULT NULL,
  `codeDep` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ligue`
--

INSERT INTO `ligue` (`id`, `nom`, `adresseRue`, `cp`, `ville`, `tel`, `urlSiteWeb`, `emailContact`, `codeDep`) VALUES
(1, 'Aérostation - Ligue de Lorraine', 'Aérodrome de Chambley Planet’Air  - 11, bd A. de Saint-Exupéry', '54470', 'HAGEVILLE', '382337777', 'www.ffaerostation.org', 'pbp@pilatre-de-rozier.com', '54'),
(2, 'Aïkido F.F.A.A.A.', '21, rue Aspirant Buffet', '55100', 'VERDUN', '0984553765', 'www.aikido-lorraine.fr', 'lorraine@aikido.com.fr', '55');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id` int(11) NOT NULL,
  `nom` varchar(512) DEFAULT NULL,
  `capacite` int(11) DEFAULT NULL,
  `accessiblilite` int(11) DEFAULT NULL,
  `categorie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id`, `nom`, `capacite`, `accessiblilite`, `categorie_id`) VALUES
(1, 'Multimédia', 25, 1, 3),
(4, 'Hall d\'accueil', 80, 1, 1),
(5, 'Amphithéâtre', 200, 1, 1),
(6, 'Salle de convivialité', 80, 1, 1),
(8, 'Gallé', 20, 1, 2),
(9, 'Grüber', 15, 1, 2),
(10, 'Baccarat', 12, 1, 2),
(11, 'Longwy', 12, 1, 2),
(12, 'Daum', 20, 1, 2),
(13, 'Majorelle', 18, 1, 2),
(14, 'Corbin', 35, 1, 2),
(15, 'Lamour', 50, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `login` varchar(128) DEFAULT NULL,
  `motdepasse` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `motdepasse`) VALUES
(1, 'mguesdon', 'dbcb4d41');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`code`);

--
-- Index pour la table `ligue`
--
ALTER TABLE `ligue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codeDep` (`codeDep`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_id` (`categorie_id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ligue`
--
ALTER TABLE `ligue`
  ADD CONSTRAINT `ligue_ibfk_1` FOREIGN KEY (`codeDep`) REFERENCES `departement` (`code`);

--
-- Contraintes pour la table `salle`
--
ALTER TABLE `salle`
  ADD CONSTRAINT `salle_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
