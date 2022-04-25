-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 30 mars 2022 à 08:56
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bbshop`
--

DELIMITER $$
--
-- Procédures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `res_ready` (IN `res_id` INT(11))  UPDATE `reservation` SET `statue`="PRET" WHERE id = res_id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `infoperso`
--

CREATE TABLE `infoperso` (
  `nom` varchar(50) NOT NULL,
  `adresse` mediumtext DEFAULT NULL,
  `numTel` varchar(15) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `infoperso`
--

INSERT INTO `infoperso` (`nom`, `adresse`, `numTel`, `id`) VALUES
('kouate bryan', '3 A Rue Marc Feve', '0781614176', 11),
('Rose Arlette', '6 Rue du Colonel Paul Paillole, Batiment C2 appartement 12', '+33668866203', 12),
('Rose Arlette', '6 Rue du Colonel Paul Paillole, Batiment C2 appartement 12', '+33668866203', 13);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(5) NOT NULL,
  `refProduit` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `path` mediumtext DEFAULT NULL,
  `path2` mediumtext DEFAULT NULL,
  `path3` mediumtext DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `refProduit`, `description`, `path`, `path2`, `path3`, `prix`) VALUES
(3, 'Maillot Bucks', '', 'images/maillot-milwaukee-bucks-city-edition-swingman.jpg', 'asset/images/', 'asset/images/', '49.99'),
(4, 'Maillot Miami Heat', '', 'images/miamiheat2021.jpg', 'asset/images/', 'asset/images/', '49.99'),
(5, 'Maillot Bulls', 'Maillot n°24 des Chicago Bulls saison 21-22', 'images/MaillotBulls.jfif', 'images/MaillotBulls2.jpg', '', '49.99');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `taille` varchar(3) NOT NULL,
  `statue` varchar(500) DEFAULT NULL,
  `date_order` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `idClient`, `idProduit`, `taille`, `statue`, `date_order`) VALUES
(1, 11, 1, 'L', 'cancel', '2022-03-16'),
(2, 11, 5, 'M', 'bien', NULL),
(3, 6, 5, 'M', NULL, NULL),
(4, 11, 5, 'M', NULL, NULL),
(5, 11, 1, 'L', 'cancel', NULL),
(10, 11, 2, 'S', 'cancel', '2022-03-16');

--
-- Déclencheurs `reservation`
--
DELIMITER $$
CREATE TRIGGER `add_date` BEFORE INSERT ON `reservation` FOR EACH ROW SET new.`date_order`= NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `contact_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tblcontact`
--

INSERT INTO `tblcontact` (`contact_id`, `user_name`, `user_email`, `content`) VALUES
(1, 'kouate bryan', 'kouatebryan38@gmail.com', 'hthdf'),
(2, 'kouate bryan', 'kouatebryan38@gmail.com', 'hthdf'),
(3, 'kouate bryan', 'kouatebryan38@gmail.com', 'Bonjour');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` int(5) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`) VALUES
(11, 'kouatebryan38@gmail.com', 1, '$2y$10$9oGj6EiGb2BLwsWAYZdxk.qzjO7iGWWyUwmUk0e4icvM8XfRIRh2q'),
(12, 'kouatebryan38@gmail.fr', 1, '$2y$10$b3vLI4iN7geF/Aqm8SKMTOP/rr4KCarxmqTDCKVxqWyUfpQ2c1bBe'),
(13, 'kouatebryaffdfqn38@gmail.com', 1, '$2y$10$CEYl5WKWB6jgh79DnwcpnevZneW1GfHuyblcxaRGP95gXq8yHUXny');

--
-- Déclencheurs `user`
--
DELIMITER $$
CREATE TRIGGER `date_sign_in` AFTER INSERT ON `user` FOR EACH ROW INSERT INTO `user_sign_in`( `user_id`, `date`) VALUES (NEW.id,Now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `user_sign_in`
--

CREATE TABLE `user_sign_in` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user_sign_in`
--

INSERT INTO `user_sign_in` (`id`, `user_id`, `date`) VALUES
(1, 1, '2022-03-14'),
(2, 0, '2022-03-14'),
(3, 13, '2022-03-14');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `infoperso`
--
ALTER TABLE `infoperso`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk1` (`idProduit`),
  ADD KEY `fk2` (`idClient`);

--
-- Index pour la table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- Index pour la table `user_sign_in`
--
ALTER TABLE `user_sign_in`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `user_sign_in`
--
ALTER TABLE `user_sign_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
