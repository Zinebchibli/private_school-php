-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 10 avr. 2023 à 16:48
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `paiements`
--

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `Massar` varchar(10) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `mta` decimal(6,2) NOT NULL,
  PRIMARY KEY (`Massar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`Massar`, `nom`, `prenom`, `class`, `mta`) VALUES
('123456789', 'zineb', 'huerku', '3', '23.00'),
('2930489', 'zineb', 'chibli', '5', '120.00'),
('2577677', 'zineb', 'chibli', '4', '34.00'),
('12345678', 'sdfghj', 'tyuiovc', '7', '33.00'),
('134567892', 'Yourja', 'Zakaria', '2', '120.00');

-- --------------------------------------------------------

--
-- Structure de la table `paie`
--

DROP TABLE IF EXISTS `paie`;
CREATE TABLE IF NOT EXISTS `paie` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ideleve` varchar(10) NOT NULL,
  `mois` varchar(20) NOT NULL,
  `mtp` decimal(6,2) DEFAULT NULL,
  `datep` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ideleve` (`ideleve`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
