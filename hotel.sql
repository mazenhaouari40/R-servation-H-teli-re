-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 24 avr. 2022 à 10:41
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
-- Base de données : `hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_ad` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ad`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_ad`, `nom`, `prenom`, `email`, `mdp`) VALUES
(1, 'Derbal', 'Mahmoud', 'admin@admin.com', '123'),
(2, 'Ben mimoun', 'assil', 'root@root.com', '123');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_cat` int(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) DEFAULT NULL,
  `prix` int(10) DEFAULT NULL,
  `cat_img` varchar(50) DEFAULT NULL,
  `nbchambre` int(10) NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `nom`, `prix`, `cat_img`, `nbchambre`) VALUES
(4, 'chambre de luxe', 200, 'image/chambre/4.jpg', 0),
(10, 'chambre simple', 100, 'image/chambre/1.jpg', 11),
(11, 'chambre speciale', 120, 'image/chambre/room-4.jpg', 23);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_c` int(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_c`, `nom`, `prenom`, `email`, `mdp`) VALUES
(10, 'ben mimoun', 'assil', 'Assil@gmail.com', '123'),
(12, 'folan', 'ben faltana', 'folan.benfaltana@gmail.com', '123'),
(13, 'Derbal', 'Mahmoud', 'mahmoud@gmail.com', '123');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id_r` int(20) NOT NULL AUTO_INCREMENT,
  `id_cl` int(20) NOT NULL,
  `id_cat` int(20) NOT NULL,
  `arrivee` date NOT NULL,
  `sortie` date NOT NULL,
  PRIMARY KEY (`id_r`),
  KEY `id_cl` (`id_cl`),
  KEY `id_ch` (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_r`, `id_cl`, `id_cat`, `arrivee`, `sortie`) VALUES
(1, 10, 11, '2022-04-24', '2022-04-28'),
(2, 10, 11, '2022-04-24', '2022-04-28'),
(3, 10, 10, '2022-04-21', '2022-04-24'),
(4, 10, 10, '2022-04-20', '2022-04-24'),
(5, 10, 10, '2022-04-13', '2022-04-30'),
(6, 13, 10, '2022-04-20', '2022-04-30');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_cl`) REFERENCES `client` (`id_c`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_cat`) REFERENCES `categorie` (`id_cat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
