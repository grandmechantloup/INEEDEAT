-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 07 Avril 2015 à 14:23
-- Version du serveur :  5.5.38
-- Version de PHP :  5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `I_NEED_EAT`
--

-- --------------------------------------------------------

--
-- Structure de la table `Annonces`
--

CREATE TABLE `Annonces` (
`id_annonce` int(11) NOT NULL,
  `Produit` varchar(100) NOT NULL,
  `Type` tinyint(1) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Auteur` varchar(100) NOT NULL,
  `Quantité` double NOT NULL,
  `Date` date NOT NULL,
  `Nbr_visite` int(11) NOT NULL,
  `Prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Catégories`
--

CREATE TABLE `Catégories` (
`id_categorie` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Nbr_visite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Commentaires`
--

CREATE TABLE `Commentaires` (
`id_comment` int(11) NOT NULL,
  `Nom_comment` varchar(1000) NOT NULL,
  `Commentaire` text NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Contacts`
--

CREATE TABLE `Contacts` (
`id_contact` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Sujet` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Produits`
--

CREATE TABLE `Produits` (
`id_produit` int(11) NOT NULL,
  `Producteur` varchar(100) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Nbr_visite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Transactions`
--

CREATE TABLE `Transactions` (
`id_transaction` int(11) NOT NULL,
  `Statut` tinyint(1) NOT NULL,
  `Acheteur` varchar(100) NOT NULL,
  `Montant` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateurs`
--

CREATE TABLE `Utilisateurs` (
`id_utilisateur` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prénom` varchar(50) NOT NULL,
  `Civilité` tinyint(1) NOT NULL,
  `Identifiant` int(100) NOT NULL,
  `M_d_P` varchar(100) NOT NULL,
  `D_d_N` date NOT NULL,
  `N_d_T` int(10) NOT NULL,
  `Stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Variétés`
--

CREATE TABLE `Variétés` (
`id_variete` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Nbr_visite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Annonces`
--
ALTER TABLE `Annonces`
 ADD PRIMARY KEY (`id_annonce`);

--
-- Index pour la table `Catégories`
--
ALTER TABLE `Catégories`
 ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `Commentaires`
--
ALTER TABLE `Commentaires`
 ADD PRIMARY KEY (`id_comment`);

--
-- Index pour la table `Contacts`
--
ALTER TABLE `Contacts`
 ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `Produits`
--
ALTER TABLE `Produits`
 ADD PRIMARY KEY (`id_produit`);

--
-- Index pour la table `Transactions`
--
ALTER TABLE `Transactions`
 ADD PRIMARY KEY (`id_transaction`);

--
-- Index pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
 ADD PRIMARY KEY (`id_utilisateur`);

--
-- Index pour la table `Variétés`
--
ALTER TABLE `Variétés`
 ADD PRIMARY KEY (`id_variete`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Annonces`
--
ALTER TABLE `Annonces`
MODIFY `id_annonce` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Catégories`
--
ALTER TABLE `Catégories`
MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Commentaires`
--
ALTER TABLE `Commentaires`
MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Contacts`
--
ALTER TABLE `Contacts`
MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Produits`
--
ALTER TABLE `Produits`
MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Transactions`
--
ALTER TABLE `Transactions`
MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Variétés`
--
ALTER TABLE `Variétés`
MODIFY `id_variete` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
