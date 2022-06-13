-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  lun. 11 mai 2020 à 07:15
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cda03-bd1`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

DROP TABLE IF EXISTS `activite`;
CREATE TABLE IF NOT EXISTS `activite` (
  `IdActivite` int(11) NOT NULL,
  `IntituleActivite` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `DDebut` date DEFAULT NULL,
  `DFin` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Description` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `TarifAdherent` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `TarifInvite` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `DLimite` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `IdAdherent` int(11) NOT NULL,
  `IdType` int(11) NOT NULL,
  PRIMARY KEY (`IdActivite`),
  KEY `IdAdherent` (`IdAdherent`),
  KEY `IdType` (`IdType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

DROP TABLE IF EXISTS `adherent`;
CREATE TABLE IF NOT EXISTS `adherent` (
  `IdAdherent` int(11) NOT NULL,
  `Nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `Prenom` varchar(50) COLLATE utf8_bin NOT NULL,
  `DNaiss` date NOT NULL,
  `Adresse1` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `Adresse2` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `CdPost` varchar(5) COLLATE utf8_bin NOT NULL,
  `Ville` varchar(30) COLLATE utf8_bin NOT NULL,
  `Email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Tel` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `DAdhesion` date NOT NULL,
  `Organisateur` tinyint(1) DEFAULT NULL,
  `Login` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `Password` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`IdAdherent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `IdInscription` int(11) NOT NULL,
  `DInscription` date DEFAULT NULL,
  `NbInvités` int(11) DEFAULT NULL,
  `IdAdherent` int(11) NOT NULL,
  `IdActivite` int(11) NOT NULL,
  PRIMARY KEY (`IdInscription`),
  KEY `IdAdherent` (`IdAdherent`),
  KEY `IdActivite` (`IdActivite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `nouvelle`
--

DROP TABLE IF EXISTS `nouvelle`;
CREATE TABLE IF NOT EXISTS `nouvelle` (
  `IdNouvelle` int(11) NOT NULL,
  `Titre` varchar(50) COLLATE utf8_bin NOT NULL,
  `Texte` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `DPubli` date NOT NULL,
  `Diffusion` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `Fichier` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`IdNouvelle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

DROP TABLE IF EXISTS `photo`;
CREATE TABLE IF NOT EXISTS `photo` (
  `IdPhoto` int(11) NOT NULL,
  `Titre` varchar(50) COLLATE utf8_bin NOT NULL,
  `DPhoto` date DEFAULT NULL,
  `Fichier` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `IdAdherent` int(11) NOT NULL,
  `IdActivite` int(11) NOT NULL,
  PRIMARY KEY (`IdPhoto`),
  KEY `IdAdherent` (`IdAdherent`),
  KEY `IdActivite` (`IdActivite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `type_activite`
--

DROP TABLE IF EXISTS `type_activite`;
CREATE TABLE IF NOT EXISTS `type_activite` (
  `IdType` int(11) NOT NULL,
  `IntituleType` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`IdType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activite`
--
ALTER TABLE `activite`
  ADD CONSTRAINT `activite_ibfk_1` FOREIGN KEY (`IdAdherent`) REFERENCES `adherent` (`IdAdherent`),
  ADD CONSTRAINT `activite_ibfk_2` FOREIGN KEY (`IdType`) REFERENCES `type_activite` (`IdType`);

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `inscription_ibfk_1` FOREIGN KEY (`IdAdherent`) REFERENCES `adherent` (`IdAdherent`),
  ADD CONSTRAINT `inscription_ibfk_2` FOREIGN KEY (`IdActivite`) REFERENCES `activite` (`IdActivite`);

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`IdAdherent`) REFERENCES `adherent` (`IdAdherent`),
  ADD CONSTRAINT `photo_ibfk_2` FOREIGN KEY (`IdActivite`) REFERENCES `activite` (`IdActivite`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
