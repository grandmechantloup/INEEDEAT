-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2015 at 02:23 AM
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
  `Titre` varchar(30) NOT NULL,
  `Description` text NOT NULL,
  `Quantite` double NOT NULL,
  `Prix` double NOT NULL,
  `Date_publication` date NOT NULL,
  `Date_peremption` date NOT NULL,
  `Extension_upload` varchar(5) NOT NULL,
  `Echange` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_annonce`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `annonces`
--

INSERT INTO `annonces` (`id_annonce`, `id_utilisateur`, `id_categorie`, `id_variete`, `Titre`, `Description`, `Quantite`, `Prix`, `Date_publication`, `Date_peremption`, `Extension_upload`, `Echange`) VALUES
(26, 24, 2, 44, 'Vente ou échange d''amande', 'Produit importé d''Italie.\r\nRecherche légume pour échange.', 12, 4, '2015-06-08', '2015-08-18', 'jpg', 1),
(31, 30, 13, 50, 'Belles cerises', 'Sans pesticide, et riche en potassium', 12, 5, '2015-06-09', '2015-06-09', 'jpg', 1),
(32, 26, 18, 51, 'Citron jaune ', 'Idéal pour une marinade!\r\nPlaisir garanti =)', 4, 15, '2015-06-09', '2015-06-17', 'jpg', 1),
(33, 26, 60, 52, 'Pomme pour compote', 'Idéal pour faire de la compote, peut être également utilisé pour une tarte \r\nParticulièrement acide, n''oubliez pas de sucrer votre présentation ', 10, 4, '2015-06-09', '2015-06-11', 'jpg', 1),
(34, 30, 60, 53, 'Pomme Golden', 'Parfait pour une petite faim à 17h30!', 12, 5, '2015-06-09', '2015-06-24', 'jpg', 1),
(36, 28, 36, 56, 'Magnifique kiwi ', 'Venu tout droit du pays des kiwis, du rugby et des plages de sables fins. Ces kiwis respirent le soleil et la bonne humeur. \r\nLeur chaires vertes symbole de fertilité vous assureront une fertilité sans failles!', 12, 23, '2015-06-09', '2015-06-21', 'jpg', 1),
(37, 30, 52, 57, 'Belles pastèques', 'A la fois grosses, juteuses, et pleines de goût, ces pastèques venus tout droit du pays des aztèques seront idéales après un repas particulièrement copieux.\r\n ', 16, 3, '2015-06-09', '2016-11-23', 'jpg', 1),
(38, 30, 50, 58, 'Orange à jus', 'Orange à jus, particulièrement juteuses!', 5, 3, '2015-06-09', '2015-11-23', 'jpeg', 1),
(39, 30, 66, 59, 'Tomate cerise', 'Contrairement à ce que l''on peut penser, ces tomates ne sont pas des cerises, elles se distinguent des autres tomates par leur taille plus réduites.\r\nDe plus le goût de ses tomates particulièrement charnues est particulièrement agréable pour grignoter entre deux repas', 12, 23, '2015-06-09', '2015-11-12', 'jpg', 1),
(40, 30, 65, 60, 'Lot de salade ', 'Vous recevez des amis ce soir et vous voulez à tout pris réussir votre diner, optez pour ces salades aux goût neutre, mais prononcé.', 6, 1, '2015-06-09', '2016-09-09', 'jpg', 1),
(41, 28, 55, 61, 'Piment rouges top qualité', 'Amateur de sensation de fortes, Un piment de ce type dans un petit plat mijoté le rendra tout de suite beaucoup plus intéressant \r\nInsuffisant cardiaque, s''abstenir!', 34, 23, '2015-06-09', '2020-12-12', 'jpg', 1),
(42, 30, 61, 62, 'Potiron pour soupe', 'Idéal pour une soupe, pour ajouter une pointe de douceur et inhiber le côté acide de celle-ci', 7, 3, '2015-06-09', '2020-04-04', 'jpg', 1),
(43, 30, 17, 63, 'Chou fleur ', 'Parfait en entrée pour le diner.', 6, 2, '2015-06-09', '2020-04-04', 'jpg', 1),
(44, 30, 35, 66, 'haricot en fagot', ' At commodo blandit antiopam usu, vel ad erat invidunt expetenda. Tritani voluptaria vis an, ei lobortis petentium evertitur cum, meliore detraxit pri ut. Alii tale deserunt his no, nam an amet malis perfecto. Viris ceteros fuisset cu mea.\r\n\r\n Cu deleniti sententiae efficiantur vix, sit vocibus ullamcorper ea. Ex munere facilisis per. Eius dicit nostrum cu his. Sea in euismod antiopam adipiscing, has ea oratio instructior conclusionemque, est ne legere phaedrum.\r\n\r\n Eu nec dicit constituam, invidunt theophrastus ea duo, qui tale repudiandae ea. Vix possim suscipit an. Et latine admodum incorrupte mel, brute vitae.', 34, 23, '2015-06-09', '2020-12-12', 'jpg', 1),
(45, 30, 49, 67, 'olive verte pour apéritif', ' At commodo blandit antiopam usu, vel ad erat invidunt expetenda. Tritani voluptaria vis an, ei lobortis petentium evertitur cum, meliore detraxit pri ut. Alii tale deserunt his no, nam an amet malis perfecto. Viris ceteros fuisset cu mea.\r\n\r\n Cu deleniti sententiae efficiantur vix, sit vocibus ullamcorper ea. Ex munere facilisis per. Eius dicit nostrum cu his. Sea in euismod antiopam adipiscing, has ea oratio instructior conclusionemque, est ne legere phaedrum.\r\n\r\n Eu nec dicit constituam, invidunt theophrastus ea duo, qui tale repudiandae ea. Vix possim suscipit an. Et latine admodum incorrupte mel, brute vitae.', 11, 12, '2015-06-09', '2020-12-12', 'jpg', 1),
(46, 29, 49, 68, 'Olive pour quiches', ' At commodo blandit antiopam usu, vel ad erat invidunt expetenda. Tritani voluptaria vis an, ei lobortis petentium evertitur cum, meliore detraxit pri ut. Alii tale deserunt his no, nam an amet malis perfecto. Viris ceteros fuisset cu mea.\r\n\r\n Cu deleniti sententiae efficiantur vix, sit vocibus ullamcorper ea. Ex munere facilisis per. Eius dicit nostrum cu his. Sea in euismod antiopam adipiscing, has ea oratio instructior conclusionemque, est ne legere phaedrum.\r\n\r\n Eu nec dicit constituam, invidunt theophrastus ea duo, qui tale repudiandae ea. Vix possim suscipit an. Et latine admodum incorrupte mel, brute vitae.', 43, 23, '2015-06-09', '2020-12-12', 'jpg', 1),
(47, 29, 63, 69, 'Radis noires pour petite faim', ' At commodo blandit antiopam usu, vel ad erat invidunt expetenda. Tritani voluptaria vis an, ei lobortis petentium evertitur cum, meliore detraxit pri ut. Alii tale deserunt his no, nam an amet malis perfecto. Viris ceteros fuisset cu mea.\r\n\r\n Cu deleniti sententiae efficiantur vix, sit vocibus ullamcorper ea. Ex munere facilisis per. Eius dicit nostrum cu his. Sea in euismod antiopam adipiscing, has ea oratio instructior conclusionemque, est ne legere phaedrum.\r\n\r\n Eu nec dicit constituam, invidunt theophrastus ea duo, qui tale repudiandae ea. Vix possim suscipit an. Et latine admodum incorrupte mel, brute vitae.', 87, 54, '2015-06-09', '2020-12-12', 'jpg', 1),
(49, 30, 16, 71, 'Chou de Bruxelles pour entrée ', ' At commodo blandit antiopam usu, vel ad erat invidunt expetenda. Tritani voluptaria vis an, ei lobortis petentium evertitur cum, meliore detraxit pri ut. Alii tale deserunt his no, nam an amet malis perfecto. Viris ceteros fuisset cu mea.\r\n\r\n Cu deleniti sententiae efficiantur vix, sit vocibus ullamcorper ea. Ex munere facilisis per. Eius dicit nostrum cu his. Sea in euismod antiopam adipiscing, has ea oratio instructior conclusionemque, est ne legere phaedrum.\r\n\r\n Eu nec dicit constituam, invidunt theophrastus ea duo, qui tale repudiandae ea. Vix possim suscipit an. Et latine admodum incorrupte mel, brute vitae.', 32, 12, '2015-06-09', '2020-12-12', 'jpg', 1),
(50, 30, 22, 72, 'Conconbre vert', ' At commodo blandit antiopam usu, vel ad erat invidunt expetenda. Tritani voluptaria vis an, ei lobortis petentium evertitur cum, meliore detraxit pri ut. Alii tale deserunt his no, nam an amet malis perfecto. Viris ceteros fuisset cu mea.\r\n\r\n Cu deleniti sententiae efficiantur vix, sit vocibus ullamcorper ea. Ex munere facilisis per. Eius dicit nostrum cu his. Sea in euismod antiopam adipiscing, has ea oratio instructior conclusionemque, est ne legere phaedrum.\r\n\r\n Eu nec dicit constituam, invidunt theophrastus ea duo, qui tale repudiandae ea. Vix possim suscipit an. Et latine admodum incorrupte mel, brute vitae.', 12, 32, '2015-06-09', '2020-12-12', 'jpg', 1),
(51, 30, 25, 73, 'Courgette verte', ' At commodo blandit antiopam usu, vel ad erat invidunt expetenda. Tritani voluptaria vis an, ei lobortis petentium evertitur cum, meliore detraxit pri ut. Alii tale deserunt his no, nam an amet malis perfecto. Viris ceteros fuisset cu mea.\r\n\r\n Cu deleniti sententiae efficiantur vix, sit vocibus ullamcorper ea. Ex munere facilisis per. Eius dicit nostrum cu his. Sea in euismod antiopam adipiscing, has ea oratio instructior conclusionemque, est ne legere phaedrum.\r\n\r\n Eu nec dicit constituam, invidunt theophrastus ea duo, qui tale repudiandae ea. Vix possim suscipit an. Et latine admodum incorrupte mel, brute vitae.', 12, 23, '2015-06-09', '2020-12-12', 'jpg', 1),
(52, 30, 26, 74, 'Endive verte', ' At commodo blandit antiopam usu, vel ad erat invidunt expetenda. Tritani voluptaria vis an, ei lobortis petentium evertitur cum, meliore detraxit pri ut. Alii tale deserunt his no, nam an amet malis perfecto. Viris ceteros fuisset cu mea.\r\n\r\n Cu deleniti sententiae efficiantur vix, sit vocibus ullamcorper ea. Ex munere facilisis per. Eius dicit nostrum cu his. Sea in euismod antiopam adipiscing, has ea oratio instructior conclusionemque, est ne legere phaedrum.\r\n\r\n Eu nec dicit constituam, invidunt theophrastus ea duo, qui tale repudiandae ea. Vix possim suscipit an. Et latine admodum incorrupte mel, brute vitae.', 123, 12, '2015-06-09', '2020-12-12', 'jpg', 1);

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
(26, 'endive', 1),
(27, 'epinard', 1),
(28, 'figue', 0),
(29, 'fraise', 0),
(30, 'framboise', 0),
(31, 'gland', 1),
(32, 'goyave', 0),
(33, 'grenade', 0),
(34, 'groseille', 0),
(35, 'haricot ', 1),
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
(46, 'noix', 1),
(47, 'noix de coco', 0),
(48, 'noix de cajou', 1),
(49, 'olive', 1),
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
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text NOT NULL,
  `date_publication` date NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_sujet` int(11) NOT NULL,
  PRIMARY KEY (`id_commentaire`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `commentaires`
--

INSERT INTO `commentaires` (`id_commentaire`, `commentaire`, `date_publication`, `id_utilisateur`, `id_sujet`) VALUES
(1, 'excellente !!', '2015-06-10', 26, 4);

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
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `id_sujet` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` text NOT NULL,
  `Pseudo` text NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date_publication` date NOT NULL,
  PRIMARY KEY (`id_sujet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id_sujet`, `categorie`, `Pseudo`, `titre`, `description`, `id_utilisateur`, `date_publication`) VALUES
(2, 'recette_cuisine', 'ARFAZE', 'ARZEAZ', 'ERAZER', 30, '2015-06-17'),
(3, 'recette_cuisine', '', 'ar', 'azer', 30, '2015-06-09'),
(4, 'recette_cuisine', '', 'compote pomme poire', 'voici la recette de la compote pomme poire', 26, '2015-06-10');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `panier`
--

INSERT INTO `panier` (`id`, `id_utilisateur`, `id_annonce`, `Quantite`) VALUES
(2, 18, 19, 0),
(3, 8, 18, 0),
(4, 8, 29, 0),
(5, 8, 27, 0),
(6, 8, 25, 0),
(8, 8, 30, 0),
(9, 24, 31, 0),
(10, 24, 26, 0),
(11, 26, 51, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `Status_cma`, `Email`, `Pseudo`, `Mdp`, `Civilite`, `Nom`, `Prenom`, `Tel`, `Naissance`, `Num_rue`, `Adresse`, `Code_postal`, `Ville`, `Region`) VALUES
(24, NULL, 'math.girardon@hotmail.fr', 'Mathdx', 'b2bc340d8873e3b02a82749de5cf85f8cba28a59', 1, 'girardon', 'mathieu', 660209892, '1994-08-10', 0, '7 place de l''eglise', 92500, 'rueil malmaison', 'Ile-de-France'),
(25, NULL, 'florence.girardon@wanadoo.fr', 'choupe', '7c91bbfc967b2b4e119aa0771ce1902e82eabe6d', 0, 'girardon', 'florence', 663168708, '1965-04-16', 0, '7 place de l''eglise', 92500, 'rueil malmaison', 'Ile-de-France'),
(26, 2, 'admin@gmail.com', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'MARO', 'Marc', 658854455, '1952-05-20', 0, '3 rue du chemin vert', 75015, 'Paris', 'Ile-de-France'),
(27, 1, 'modo1@gmail.com', 'modo1', 'b828c7599e286a4407084dcec654512489e29bda', 1, 'FREDEY', 'Marie', 623353354, '1995-06-24', 0, '32 Boulevard de la plage', 17200, 'ROYAN', 'Charente-Maritime'),
(28, 1, 'modo2@gmail.com', 'modo2', 'b828c7599e286a4407084dcec654512489e29bda', 1, 'GRODE', 'Alexandre', 658877445, '1996-08-21', 0, '312 avenue ingres', 84258, 'Lameneau', 'Provence-Alpes-Côte d''Azur'),
(29, 1, 'modo3@gmail.fr', 'modo3', 'b828c7599e286a4407084dcec654512489e29bda', 1, 'VARNEUR', 'Clement', 658451232, '1985-05-17', 0, '25 rue de l''eglise', 33380, 'MIOS', 'Aquitaine'),
(30, NULL, 'client@hotmail.fr', 'client', 'd2a04d71301a8915217dd5faf81d12cffd6cd958', 1, 'Judi', 'Axel', 665699665, '1994-09-10', 0, '5 rue du général bober', 56190, 'Ambon', 'Bretagne');

-- --------------------------------------------------------

--
-- Table structure for table `varietes`
--

CREATE TABLE IF NOT EXISTS `varietes` (
  `id_variete` int(11) NOT NULL AUTO_INCREMENT,
  `id_categorie` int(11) NOT NULL,
  `variete` varchar(255) NOT NULL,
  PRIMARY KEY (`id_variete`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `varietes`
--

INSERT INTO `varietes` (`id_variete`, `id_categorie`, `variete`) VALUES
(44, 2, 'Ardéchoise'),
(50, 13, '"anglaises"'),
(51, 18, 'jaune'),
(52, 60, 'arianne'),
(53, 60, 'Golden '),
(54, 60, 'D''amour'),
(55, 57, 'Comice'),
(56, 36, 'néo-zélandais'),
(57, 52, 'italienne'),
(58, 50, 'A jus'),
(59, 66, 'cerise'),
(60, 65, 'Batavia'),
(61, 55, 'rouges'),
(62, 61, 'standard'),
(63, 17, 'Standard'),
(64, 23, 'Standartd'),
(65, 27, 'Standard'),
(66, 35, 'vert'),
(67, 49, 'verte'),
(68, 49, 'noire'),
(69, 63, 'noire'),
(70, 63, 'Standard'),
(71, 16, 'Standard'),
(72, 22, 'Vert'),
(73, 25, 'Verte'),
(74, 26, 'Standard'),
(75, 1, 'qfsd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
