-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 01 sep. 2019 à 20:05
-- Version du serveur :  10.2.23-MariaDB
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
-- Base de données :  `u791952179_chat`
--

-- --------------------------------------------------------

--
-- Structure de la table `publicite`
--

CREATE TABLE `publicite` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `lien` varchar(150) NOT NULL,
  `url` varchar(45) NOT NULL,
  `modification` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `publicite`
--

INSERT INTO `publicite` (`id`, `name`, `lien`, `url`, `modification`) VALUES
(1, 'publicite1', 'https://www.sheba.fr', 'publicite/9172.mp4', '2019-08-07 21:40:58'),
(2, 'publicite2', 'https://www.whiskas.ca/fr/nos-produits', 'publicite/3510.jpg', '2019-08-04 20:45:18'),
(3, 'publicite3', 'https://www.whiskas.ca/fr/nos-produits', 'publicite/9563.jpg', '2019-07-14 20:00:15'),
(4, 'publicite4', 'https://www.sheba.fr', 'publicite/2698.jpg', '2019-08-04 20:49:14');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `publicite`
--
ALTER TABLE `publicite`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `publicite`
--
ALTER TABLE `publicite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
