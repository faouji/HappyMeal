-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 10 Juin 2017 à 18:04
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `base`
--

-- --------------------------------------------------------

--
-- Structure de la table `boisson`
--

CREATE TABLE IF NOT EXISTS `boisson` (
  `Id_boisson` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prix` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_boisson`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `boisson`
--

INSERT INTO `boisson` (`Id_boisson`, `nom`, `prix`) VALUES
(1, 'thé moyenne', '10dh'),
(2, 'Lait chaud', '6dh'),
(3, 'Lait au chocolat', '6dh'),
(4, 'café crème', '6dh'),
(5, 'Lait lipton', '6dh'),
(6, 'Lait louiza', '6dh'),
(7, 'jus orange', '10dh'),
(8, 'jus pomme', '12dh'),
(9, 'jus banane', '12dh'),
(10, 'jus avocat', '13dh');

-- --------------------------------------------------------

--
-- Structure de la table `cuisinier`
--

CREATE TABLE IF NOT EXISTS `cuisinier` (
  `id_cuisinier` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_cuisinier`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `cuisinier`
--

INSERT INTO `cuisinier` (`id_cuisinier`, `nom`, `login`, `password`) VALUES
(1, 'sara', 'sara', '2017'),
(2, 'ali', 'ali', '2017'),
(3, 'ahmed', 'ahmed', '2017');

-- --------------------------------------------------------

--
-- Structure de la table `dessert`
--

CREATE TABLE IF NOT EXISTS `dessert` (
  `Id_Dess` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prix` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_Dess`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `dessert`
--

INSERT INTO `dessert` (`Id_Dess`, `nom`, `prix`) VALUES
(1, 'crepe', '30dh'),
(2, 'croissant', '10dh'),
(3, 'eclair', '10dh'),
(4, 'financier', '50dh'),
(5, 'fraisier', '50dh'),
(6, 'gateau de rois', '100dh'),
(7, 'macaron', '78dh'),
(8, 'madeleine', '10dh'),
(9, 'mousse au chocolat', '20dh'),
(10, 'tarte citron', '30dh');

-- --------------------------------------------------------

--
-- Structure de la table `entree`
--

CREATE TABLE IF NOT EXISTS `entree` (
  `Id_entree` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prix` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_entree`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `entree`
--

INSERT INTO `entree` (`Id_entree`, `nom`, `prix`) VALUES
(1, 'salade césar', '30dh'),
(2, 'soupe', '20dh'),
(3, 'petit spaghetti sauce à la viande', '40dh'),
(4, 'soupe à l''oignon', '35dh'),
(5, 'soupe au poulet', '32dh'),
(6, 'salade au jambon', '38dh'),
(7, 'salade au fromage', '35dh'),
(8, 'champignons à l''oil', '40dh');

-- --------------------------------------------------------

--
-- Structure de la table `menup`
--

CREATE TABLE IF NOT EXISTS `menup` (
  `Id_Menu` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prix` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_Menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `menup`
--

INSERT INTO `menup` (`Id_Menu`, `nom`, `prix`) VALUES
(1, 'tagine vegetarian', '150dh'),
(2, 'tagine lamb ', '200dh'),
(3, 'tagine poulet', '180dh'),
(4, 'tajine beef', '220dh'),
(5, 'tajine fish', '160dh'),
(6, 'tajine spicy', '180dh'),
(7, 'couscous', '100dh'),
(8, 'mixed grill', '230dh'),
(9, 'pizza au fromage', '100dh'),
(10, 'pizza au poullet', '120dh');

-- --------------------------------------------------------

--
-- Structure de la table `menu_jour`
--

CREATE TABLE IF NOT EXISTS `menu_jour` (
  `Id_MJ` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `photo` varchar(10000) NOT NULL,
  `prix` varchar(20) NOT NULL,
  `jour` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id_MJ`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `menu_jour`
--

INSERT INTO `menu_jour` (`Id_MJ`, `nom`, `photo`, `prix`, `jour`) VALUES
(1, 'tajine 200g (boeuf au agneau)', '"img/dish/dish5.jpg"', '30dh', 'lmmj'),
(2, 'salade marocaine', '"img/dish/dish6.jpg"', '12dh', 'lmmj'),
(3, 'mousse au chocolat', '"img/dish/dish7.jpg"', '12dh', 'lmmj'),
(4, 'petit déjeuner berbére', '"img/dish/dish8.jpg"', '32dh', 'lmmj'),
(5, 'petit déjeuner continental', '"img/dish/dish111.jpg"', '22dh', 'week'),
(6, 'poulet entier', '"img/dish/dish13.jpg"', '88dh', 'week'),
(7, 'salade de fruit frais', '"img/dish/dish11.jpg"', '12dh', 'week'),
(8, 'salade nicoise', '"img/dish/dish12.jpg"', '15dh', 'week'),
(9, 'couscouse ', '"img/dish/dish10.jpeg"', '45dh', 'friday'),
(10, 'lban', '"img/dish/dish14.jpg"', '2dh', 'friday'),
(11, 'petit déjeuner', '"img/dish/dish15.jpg"', '22dh', 'friday'),
(12, 'salade de  fruits', '"img/dish/dish16.jpeg"', '12dh', 'friday');

-- --------------------------------------------------------

--
-- Structure de la table `repas`
--

CREATE TABLE IF NOT EXISTS `repas` (
  `Id_repas` int(11) NOT NULL AUTO_INCREMENT,
  `menu_prix` varchar(255) NOT NULL,
  `dess_prix` varchar(255) NOT NULL,
  `entree_prix` varchar(255) NOT NULL,
  `boisson_prix` varchar(255) NOT NULL,
  `Id_table` int(11) NOT NULL,
  `affectation` varchar(255) NOT NULL,
  PRIMARY KEY (`Id_repas`),
  KEY `IdMenuP` (`menu_prix`),
  KEY `IdDessert` (`dess_prix`),
  KEY `IdEntree` (`entree_prix`),
  KEY `IdClient` (`boisson_prix`),
  KEY `IdClient_2` (`boisson_prix`),
  KEY `Id_table` (`Id_table`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Structure de la table `repas_j`
--

CREATE TABLE IF NOT EXISTS `repas_j` (
  `id_repasj` int(25) NOT NULL AUTO_INCREMENT,
  `plat` text,
  `total` int(25) DEFAULT NULL,
  `n_table` int(25) DEFAULT NULL,
  `affectation` varchar(255) NOT NULL,
  PRIMARY KEY (`id_repasj`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

-- --------------------------------------------------------

--
-- Structure de la table `serveur`
--

CREATE TABLE IF NOT EXISTS `serveur` (
  `Id_serveur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `adresse` varchar(20) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_serveur`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `serveur`
--

INSERT INTO `serveur` (`Id_serveur`, `nom`, `adresse`, `tel`, `login`, `password`) VALUES
(1, 'ali', 'rabat', '0000', 'menup', '2017'),
(2, 'ahmed', 'tetouan', '0000', 'menuj', '2017');

-- --------------------------------------------------------

--
-- Structure de la table `table`
--

CREATE TABLE IF NOT EXISTS `table` (
  `Id_table` int(11) NOT NULL AUTO_INCREMENT,
  `n_table` int(25) DEFAULT NULL,
  PRIMARY KEY (`Id_table`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `table`
--

INSERT INTO `table` (`Id_table`, `n_table`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `repas`
--
ALTER TABLE `repas`
  ADD CONSTRAINT `repas_ibfk_1` FOREIGN KEY (`Id_table`) REFERENCES `table` (`Id_table`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
