-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2015 at 12:03 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `i_need_eat`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonces`
--

CREATE TABLE IF NOT EXISTS `annonces` (
  `id_annonce` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_variete` int(11) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Quantite` double NOT NULL,
  `Prix` double NOT NULL,
  `Date_publication` date NOT NULL,
  `Date_peremption` date NOT NULL,
  `Extension_upload` varchar(5) NOT NULL,
  `Echange` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_annonce`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `Categorie` varchar(255) NOT NULL,
  `Fruit_legume` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `Categorie`, `Fruit_legume`) VALUES
(1, 'abricot', 0),
(2, 'amande', 0),
(3, 'ananas', 0),
(4, 'artichaut', 1),
(5, 'asperge', 1),
(6, 'aubergine', 1),
(7, 'avocat', 1),
(8, 'banane', 0),
(9, 'betterave', 1),
(10, 'brocoli', 1),
(11, 'carotte', 1),
(12, 'cassis', 0),
(13, 'cerise', 0),
(14, 'chataigne', 1),
(15, 'chou', 1),
(16, 'chou de bruxelles', 1),
(17, 'chou fleur', 1),
(18, 'citron', 0),
(19, 'citrouille', 1),
(20, 'clementine', 0),
(21, 'coing', 0),
(22, 'conconbre', 1),
(23, 'cornichon', 1),
(24, 'courge', 1),
(25, 'courgette', 1),
(26, 'endive', 0),
(27, 'epinard', 0),
(28, 'figue', 0),
(29, 'fraise', 0),
(30, 'framboise', 0),
(31, 'gland', 0),
(32, 'goyave', 0),
(33, 'grenade', 0),
(34, 'groseille', 0),
(35, 'haricot ', 0),
(36, 'kiwi', 0),
(37, 'lichi', 0),
(38, 'mandarine', 0),
(39, 'mangue', 0),
(40, 'marron', 0),
(41, 'melon', 0),
(42, 'mirabele', 0),
(43, 'mure', 0),
(44, 'mirtille', 0),
(45, 'noisette', 0),
(46, 'noix', 0),
(47, 'noix de coco', 0),
(48, 'noix de cajou', 0),
(49, 'olive', 0),
(50, 'orange', 0),
(51, 'pamplemous', 0),
(52, 'pasteque', 0),
(53, 'peche', 0),
(54, 'petit poit', 1),
(55, 'piment', 1),
(56, 'pistache', 1),
(57, 'poire', 0),
(58, 'poireau', 1),
(59, 'poivron', 1),
(60, 'pomme', 0),
(61, 'potiron', 1),
(62, 'prune', 0),
(63, 'radis', 1),
(64, 'raisin', 0),
(65, 'salade', 1),
(66, 'tomate', 1);

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_comment` varchar(1000) NOT NULL,
  `Commentaire` text NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`id_comment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  `Sujet` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(11) NOT NULL,
  `id_annonce` int(11) NOT NULL,
  `Quantite` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `id_transaction` int(11) NOT NULL AUTO_INCREMENT,
  `Acheteur` varchar(100) NOT NULL,
  `Montant` double NOT NULL,
  `id_annonce` int(11) NOT NULL,
  `Quantite` int(11) NOT NULL,
  PRIMARY KEY (`id_transaction`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `Status_cma` int(1) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `Pseudo` varchar(60) NOT NULL,
  `Mdp` varchar(100) NOT NULL,
  `Civilite` tinyint(1) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Tel` int(10) NOT NULL,
  `Naissance` date NOT NULL,
  `Num_rue` int(11) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Code_postal` int(5) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Region` varchar(255) NOT NULL,
  PRIMARY KEY (`id_utilisateur`),
  UNIQUE KEY `Pseudo` (`Pseudo`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `Status_cma`, `Email`, `Pseudo`, `Mdp`, `Civilite`, `Nom`, `Prenom`, `Tel`, `Naissance`, `Num_rue`, `Adresse`, `Code_postal`, `Ville`, `Region`) VALUES
(8, 2, 'math.girardon@hotmail.fr', 'Mathdx', 'mamat', 0, 'girardon', 'mathieu', 660209892, '1994-08-10', 7, 'place de l''eglise', 92500, 'rueil-malmaison', 'Ile-de-France');

-- --------------------------------------------------------

--
-- Table structure for table `varietes`
--

CREATE TABLE IF NOT EXISTS `varietes` (
  `id_variete` int(11) NOT NULL AUTO_INCREMENT,
  `id_categorie` int(11) NOT NULL,
  `variete` varchar(255) NOT NULL,
  PRIMARY KEY (`id_variete`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
