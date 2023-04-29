-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 29 avr. 2023 à 22:32
-- Version du serveur : 5.7.36
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecole_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  `naissance` date NOT NULL,
  `filiere` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `matricule` (`matricule`),
  UNIQUE KEY `email` (`email`),
  KEY `filiere` (`filiere`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `matricule`, `nom`, `prenom`, `adresse`, `naissance`, `filiere`, `email`, `password`) VALUES
(7, '123456', 'kaabi', 'yassin', 'tunis', '2023-04-07', 'GÃ©nie informatique', 'yassin@gmail.com', '123'),
(17, '12345', 'hamza', 'kaabi', 'aaa', '2023-02-28', 'biotechnologique', 'hamza@gmail.com', '123');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

DROP TABLE IF EXISTS `filiere`;
CREATE TABLE IF NOT EXISTS `filiere` (
  `nom_fil` varchar(20) NOT NULL,
  `departement` varchar(20) NOT NULL,
  `nb_gr` int(20) NOT NULL,
  PRIMARY KEY (`nom_fil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`nom_fil`, `departement`, `nb_gr`) VALUES
('biotechnologique', 'biotechnologiquee', 2),
('GÃ©nie informatique', 'Informatique', 3);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`filiere`) REFERENCES `filiere` (`nom_fil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
