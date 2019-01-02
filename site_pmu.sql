-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 04 Décembre 2018 à 13:44
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site_pmu`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Nom` varchar(35) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`ID`, `Nom`) VALUES
(1, 'Equerre'),
(2, 'Poulie'),
(3, 'Bande'),
(4, 'Plaque');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Nom` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `Sexe` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `Adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`ID`, `Nom`, `Prenom`, `Sexe`, `Adresse`, `Tel`, `Mail`, `Pass`) VALUES
(5, 'Bizet', 'RÃ©mi', 'Homme', '118 bis rue de Voves', '0659759670', 'remi.bizet@gmail.com', '$2y$10$RBhn1jHv16Tp9bw9Af6v2.tXwCXIindYhj.XEagSJpjIeGoU96jc6'),
(7, 'Duco', 'Pancake', 'Femme', '435 rue du Chemin Vert, 53900 AULNOY', '0600000000', 'pancake.duco@gmail.com', '$2y$10$qRzf3WXP6CZRs/c6Ynqt9eXg.G25mri91pSk5wZUz4cndON6pPYV2'),
(9, 'Pontu', 'Jean-Mi', 'Homme', '31452', '0707070707', 'jean.mimi@yahoo.fr', '$2y$10$KRFcDUWnYWudlo7Emn4r6Oa1lXdKc9MUxv8u.se0fbwKAstCXjLn.');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Client` int(10) UNSIGNED NOT NULL,
  `ComDate` datetime NOT NULL,
  `ListProd` text COLLATE utf8_unicode_ci NOT NULL,
  `FtTTC` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Client` int(10) UNSIGNED NOT NULL,
  `Produit` int(10) UNSIGNED NOT NULL,
  `PuTTC` decimal(10,2) NOT NULL,
  `Qte` int(11) NOT NULL,
  `ToTTC` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Nom` varchar(32) CHARACTER SET utf8 NOT NULL,
  `Ht` decimal(10,2) NOT NULL,
  `Tva` int(11) NOT NULL DEFAULT '20',
  `Stock` int(11) NOT NULL,
  `Categorie` int(11) UNSIGNED NOT NULL,
  `Image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`ID`, `Nom`, `Ht`, `Tva`, `Stock`, `Categorie`, `Image`) VALUES
(1, 'Poulie Simple', '5.99', 20, 200, 2, '/img/cata/poulie/poulie.jpg'),
(2, 'Bande Coudée', '8.99', 20, 136, 3, '/img/cata/bande/bndCoudee.jpg'),
(3, 'Equerre Renversée', '3.49', 20, 746, 1, '/img/cata/equerre/equerreRenv.jpg'),
(4, 'Plaque Cintrée', '10.99', 20, 50, 4, '/img/cata/plaque/plqCintree.jpg'),
(5, 'Plaque Plastique Bleu', '10.99', 20, 158, 4, '/img/cata/plaque/plqPlstiqBleu.jpg'),
(6, 'Plaque Plastique Clair', '10.99', 20, 254, 4, '/img/cata/plaque/plqPlstiqClair.jpg'),
(7, 'Equerre 90', '3.99', 20, 698, 1, '/img/cata/equerre/Equerre90.jpg'),
(8, 'Poulie Moyeu', '6.99', 20, 482, 2, '/img/cata/poulie/poulieMoyeu.jpg'),
(9, 'Bande Curvé', '1.99', 20, 12698, 3, '/img/cata/bande/bndCurve.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `client` (`Client`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `client` (`Client`),
  ADD KEY `produit` (`Produit`) USING BTREE;

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `category` (`Categorie`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`Client`) REFERENCES `client` (`ID`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`Client`) REFERENCES `client` (`ID`),
  ADD CONSTRAINT `panier_ibfk_2` FOREIGN KEY (`Produit`) REFERENCES `produit` (`ID`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`Categorie`) REFERENCES `categorie` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
