-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 20 mai 2020 à 19:09
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `petitionbd`
--

-- --------------------------------------------------------

--
-- Structure de la table `petition`
--

DROP TABLE IF EXISTS `petition`;
CREATE TABLE IF NOT EXISTS `petition` (
  `IDP` int(9) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(30) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `DatePublic` date NOT NULL,
  PRIMARY KEY (`IDP`)
) ENGINE=MyISAM AUTO_INCREMENT=6782 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `petition`
--

INSERT INTO `petition` (`IDP`, `Titre`, `Description`, `DatePublic`) VALUES
(3452, 'petition1', 'reduir les prix des produits ', '2020-05-13'),
(5543, 'petition2', 'reduir  utilisation des sachet en plastic', '2020-05-29'),
(6778, 'petition3', 'ofjpiohfpih ojedpjhp jdpjp', '2020-05-31'),
(6780, 'corona ', 'on veut allanger le confinement', '2020-05-20'),
(6781, 'corona ', 'on veut allanger le confinement', '2020-05-20');

-- --------------------------------------------------------

--
-- Structure de la table `signature`
--

DROP TABLE IF EXISTS `signature`;
CREATE TABLE IF NOT EXISTS `signature` (
  `IDS` int(10) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Pays` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Heure` time(6) NOT NULL,
  `IDP` int(9) NOT NULL,
  PRIMARY KEY (`IDS`),
  KEY `IDP` (`IDP`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `signature`
--

INSERT INTO `signature` (`IDS`, `Nom`, `Prenom`, `Email`, `Pays`, `Date`, `Heure`, `IDP`) VALUES
(1, 'chaimae', 'echchrif', 'chaimae.echchrif@gmail.com', 'gh', '2020-05-06', '06:46:40.000000', 3452),
(2, 'chaimae', 'echchrif', 'chaimae.echchrif@gmail.com', 'maroc', '2020-05-06', '06:46:47.000000', 3452),
(3, 'kljklj', 'klhlh', 'ijhoih@fjf.com', 'france', '2020-05-06', '06:50:27.000000', 3452),
(4, 'chaimae', 'echchrif', 'guigiuguiog@iodjh.com', 'maroc', '2020-05-07', '22:03:58.000000', 3452),
(18, 'chaimae', 'echchrif', 'chaimae.echchrif@gmail.com', 'egypte', '2020-05-07', '22:57:59.000000', 3452),
(29, 'donia', 'dodo', 'chai@gmail.com', 'usa', '2020-05-07', '23:21:46.000000', 3452),
(10, 'abdou', 'amine', 'ijhoih@fjf.com', 'egypte', '2020-05-07', '22:38:11.000000', 5543),
(22, 'kljklj', 'echchrif', 'chaimae.echchrif@gmail.com', 'egypte', '2020-05-07', '23:01:43.000000', 3452),
(23, 'kljklj', 'echchrif', 'chaimae.echchrif@gmail.com', 'egypte', '2020-05-07', '23:02:43.000000', 3452),
(30, 'chaimae', 'echchrif', 'jhiohioh', 'jhiohioh', '2020-05-20', '16:20:27.000000', 3452),
(31, 'abdou', 'klhlh', 'chaimae.echchrif@gmail.com', 'egypte', '2020-05-20', '16:23:34.000000', 6778),
(32, 'chaimae', 'amine', 'ijhoih@fjf.com', 'maroc', '2020-05-20', '18:35:39.000000', 3452),
(33, 'chaimae', 'echchrif', 'guigiuguiog@iodjh.com', '', '2020-05-20', '18:58:25.000000', 3452),
(34, 'chaimae', 'echchrif', 'guigiuguiog@iodjh.com', 'maroc', '2020-05-20', '18:58:33.000000', 3452),
(35, '', '', '', '', '2020-05-20', '19:05:45.000000', 3452),
(36, '', '', '', '', '2020-05-20', '19:05:50.000000', 3452);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
