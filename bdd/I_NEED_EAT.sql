-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2015 at 11:52 AM
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
  `id_varietes` int(11) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `Fruit_legume` tinyint(1) NOT NULL,
  `Description` text NOT NULL,
  `Quantite` double NOT NULL,
  `Prix` double NOT NULL,
  `Date_publication` date NOT NULL,
  `Code_postal` int(5) NOT NULL,
  `Adresse_image` int(11) NOT NULL,
  `Extention_upload` varchar(5) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id_annonce`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `annonces`
--

INSERT INTO `annonces` (`id_annonce`, `id_utilisateur`, `id_varietes`, `Titre`, `Fruit_legume`, `Description`, `Quantite`, `Prix`, `Date_publication`, `Code_postal`, `Adresse_image`, `Extention_upload`, `id_categorie`) VALUES
(54, 8, 0, 'sdfg', 0, 'sdfg', 2, 10, '0000-00-00', 0, 0, '', 0),
(55, 8, 0, 'sdfg', 0, 'sdfg', 2, 10, '0000-00-00', 0, 0, '', 0),
(56, 8, 0, 'sdfg', 0, 'sdfg', 2, 10, '0000-00-00', 0, 0, '', 0),
(57, 8, 0, 'sdfg', 0, 'sdfg', 2, 10, '0000-00-00', 0, 0, '', 0),
(58, 8, 0, 'sdfg', 0, 'sdfg', 2, 10, '0000-00-00', 0, 0, '', 0),
(59, 8, 0, 'sdfg', 0, 'sdfg', 2, 10, '0000-00-00', 0, 0, '', 0),
(60, 8, 0, 'sdfg', 0, 'sdfg', 2, 10, '0000-00-00', 0, 0, '', 0),
(61, 8, 0, 'sdfg', 0, 'sdfg', 2, 10, '0000-00-00', 0, 0, '', 0),
(62, 8, 0, 'azsazsazs', 0, 'azs', 1, 1, '0000-00-00', 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL,
  `Categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `panier`
--

INSERT INTO `panier` (`id`, `id_utilisateur`, `id_annonce`, `Quantite`) VALUES
(11, 8, 58, 0),
(12, 8, 0, 0),
(13, 8, 0, 0),
(14, 8, 0, 0),
(15, 8, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `id_transaction` int(11) NOT NULL AUTO_INCREMENT,
  `Statut` tinyint(1) NOT NULL,
  `Acheteur` varchar(100) NOT NULL,
  `Montant` double NOT NULL,
  PRIMARY KEY (`id_transaction`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) NOT NULL,
  `Pseudo` varchar(60) NOT NULL,
  `Mdp` varchar(100) NOT NULL,
  `Civilite` tinyint(1) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Tel` int(10) NOT NULL,
  `Naissance` date NOT NULL,
  `Stat` int(11) NOT NULL,
  `Identifiant` int(100) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Region` varchar(255) NOT NULL,
  `Code_postal` int(5) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Num_rue` int(11) NOT NULL,
  PRIMARY KEY (`id_utilisateur`),
  UNIQUE KEY `Pseudo` (`Pseudo`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `Email`, `Pseudo`, `Mdp`, `Civilite`, `Nom`, `Prenom`, `Tel`, `Naissance`, `Stat`, `Identifiant`, `Adresse`, `Region`, `Code_postal`, `Ville`, `Num_rue`) VALUES
(8, 'math.girardon@hotmail.fr', 'Mathdx', 'mamat', 0, 'girardon', 'mathieu', 660209892, '1994-08-10', 0, 0, 'place de l''eglise', 'Ile-de-france', 92500, 'Rueil-Malmaison', 7),
(9, '', 'math', 'azerty', 0, '', '', 0, '0000-00-00', 0, 0, '', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `varietes`
--

CREATE TABLE IF NOT EXISTS `varietes` (
  `id_variete` int(11) NOT NULL AUTO_INCREMENT,
  `id_categorie` int(11) NOT NULL,
  `variete` varchar(255) NOT NULL,
  PRIMARY KEY (`id_variete`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
