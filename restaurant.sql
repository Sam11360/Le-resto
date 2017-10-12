-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 25 Août 2017 à 12:08
-- Version du serveur :  5.5.55-0+deb8u1
-- Version de PHP :  5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id` int(11) NOT NULL,
  `prix` float NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=158 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id`, `prix`, `nom`) VALUES
(148, 0, 'menu enfant'),
(149, 0, 'menu enfant'),
(150, 22, 'menu poisson'),
(151, 22, 'menu poisson'),
(152, 0, 'Les papilles'),
(153, 0, 'Les papilles'),
(154, 8, 'salade chèvre'),
(157, 10, 'menu asiatique');

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

CREATE TABLE IF NOT EXISTS `plat` (
`id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `plat`
--

INSERT INTO `plat` (`id`, `nom`, `prix`, `image`) VALUES
(15, 'nems crevette', 23, 'b671abd0-023e-11e2-8c7d-03d597da66a1-493x328.jpg'),
(16, 'Pâtes aux fruits de mer', 15, 'fruitmer.jpg'),
(30, 'nems crevette', 8, ''),
(31, 'nems poulet', 8, ''),
(32, 'Concombre à la crème', 6, ''),
(33, 'Concombre à la crème', 6, ''),
(34, 'Concombre à la crème', 6, ''),
(35, 'Concombre à la crème', 6, ''),
(38, 'soushis', 12, ''),
(39, 'Tomates Mozza', 3, '');

-- --------------------------------------------------------

--
-- Structure de la table `plat_menu`
--

CREATE TABLE IF NOT EXISTS `plat_menu` (
  `id_plat` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `plat_menu`
--

INSERT INTO `plat_menu` (`id_plat`, `id_menu`) VALUES
(30, 148),
(30, 149),
(31, 150),
(31, 151),
(15, 152),
(15, 153),
(16, 153),
(30, 157),
(31, 157);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Index pour la table `plat`
--
ALTER TABLE `plat`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Index pour la table `plat_menu`
--
ALTER TABLE `plat_menu`
 ADD KEY `I_FK_PLAT_MENU` (`id_plat`), ADD KEY `id_menu` (`id_menu`), ADD KEY `id_plat_2` (`id_plat`), ADD KEY `id_plat_3` (`id_plat`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=158;
--
-- AUTO_INCREMENT pour la table `plat`
--
ALTER TABLE `plat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `plat_menu`
--
ALTER TABLE `plat_menu`
ADD CONSTRAINT `FK_PLAT_MENU` FOREIGN KEY (`id_plat`) REFERENCES `plat` (`id`),
ADD CONSTRAINT `plat_menu_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
