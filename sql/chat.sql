-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 01 sep. 2019 à 20:02
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
-- Structure de la table `chat`
--

CREATE TABLE `chat` (
  `idchat` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `sex` varchar(45) NOT NULL,
  `url` varchar(45) NOT NULL,
  `race` varchar(45) NOT NULL,
  `couleurs` varchar(45) NOT NULL,
  `poils` varchar(45) NOT NULL,
  `pelage` varchar(45) NOT NULL,
  `castre` varchar(45) NOT NULL,
  `dateAnnonce` datetime DEFAULT NULL,
  `datePT` varchar(45) NOT NULL,
  `rue` varchar(90) NOT NULL,
  `arrondissement` varchar(45) NOT NULL,
  `description` tinytext DEFAULT NULL,
  `phone` varchar(45) NOT NULL,
  `dateNaissance` varchar(45) NOT NULL,
  `dateModifier` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`idchat`, `type`, `name`, `sex`, `url`, `race`, `couleurs`, `poils`, `pelage`, `castre`, `dateAnnonce`, `datePT`, `rue`, `arrondissement`, `description`, `phone`, `dateNaissance`, `dateModifier`) VALUES
(79, 'retrouve', 'Yara', 'femelle', 'img/yara.jpg', 'Aucune', 'noir marron blans ', 'court', 'uni', 'oui', '2018-07-29 19:35:29', '29/07/2018', ' Boulvard Prado', '13008', '', '0000000900', '01/01/1980', '2018-07-29 19:35:54'),
(81, 'perdu', 'Nini', 'femelle', 'img/nini.jpg', 'Aucune', 'blans ', 'long', 'uni', 'oui', '2018-12-16 21:41:25', '11/06/2018', ' Belle de mai ', '13003', '', '0782440117', '01/01/1980', NULL),
(82, 'retrouve', 'Sophie', 'femelle', 'img/sophie.jpg', 'Aucune', 'noir marron gris blans beige ', 'court', 'uni', 'oui', '2018-12-16 21:41:58', '11/06/2018', 'Boulevard Battala', '13003', '', '0782440117', '01/01/1980', '2019-01-16 21:11:56'),
(83, 'retrouve', 'Diana', 'femelle', 'img/diana.jpg', 'Aucune', 'marron blans roux ', 'long', 'uni', 'oui', '2018-12-16 21:42:22', '11/06/2018', ' Rue Borde', '13008', '', '0782440117', '01/01/1980', '2019-04-24 09:31:00'),
(84, 'retrouve', 'Oscar', 'male', 'img/oscar.jpg', 'Bombay', 'noir marron gris blans beige roux ', 'court', 'uni', 'oui', '2018-12-16 21:43:04', '11/06/2018', ' Rue de l\'Abadie', '13002', '', '0782440117', '01/01/1980', '2019-05-27 15:22:43'),
(85, 'trouve', 'Chat27', 'femelle', 'img/chat27t.jpg', 'Cornish rex', 'noir marron gris beige ', 'court', 'uni', 'non', '2018-12-16 21:43:50', '11/06/2018', ' Rue la Bastide', '13011', '', '0782440117', '01/01/1980', NULL),
(86, 'trouve', 'Chat31', 'male', 'img/parDefaut.jpg', 'Aucune', 'marron blans ', 'long', 'uni', 'oui', '2018-12-16 21:44:20', '11/06/2018', 'Impasse de Zamora', '13012', '', '0782440117', '01/01/1980', NULL),
(88, 'retrouve', 'Chat36', 'male', 'img/chat36re.jpg', 'Aucune', 'noir gris blans ', 'long', 'uni', 'non', '2018-12-16 21:45:22', '07/03/2018', 'Lodi', '13006', '', '0782440117', '01/01/1980', '2019-01-16 10:36:51'),
(89, 'perdu', 'Gigi', 'male', 'img/gigi.jpg', 'Chat de gouttière', 'blans ', 'long', 'uni', 'non', '2018-12-23 11:34:04', '23/12/2018', ' bd national', '13003', 'Il s\'agit d\'un jeune mâle, qui n\'ai jamais sorti dehors il doit être effrayé', '0620543883', '07/12/1991', NULL),
(90, 'perdu', 'Winter', 'male', 'img/winter.jpg', 'Européen', 'marron blans ', 'court', 'taché', 'oui', '2019-01-15 19:36:36', '13/01/2019', 'Bd Notre Dame de Santa Cruz', '13014', 'Bonjour,\r\nNotre chat européen Winter a disparu dimanche 13/01 en fin d\'après midi.\r\nIl n\'a pas l\'habitude de disparaître ainsi et nous manque beaucoup. ', '0616927367', '25/07/1975', NULL),
(91, 'perdu', 'Tornade', 'male', 'img/tornade.jpg', 'Européen', 'noir marron blans ', 'court', 'tigré', 'oui', '2019-02-24 00:11:24', '12/02/2019', ' Traverse de la Seigneurie', '13009', 'Tornade est tigré, pattes et torse blanc. Il est castré... Très calin, pas farouche.', '0609269385', '01/01/1980', NULL),
(94, 'perdu', 'Cagole', 'femelle', 'img/cagole.jpg', 'Aucune', 'gris blans ', 'long', 'tigré', 'oui', '2019-04-04 18:52:05', '02/04/2019', 'Avenue Belle Vue', '13003', '', '0768877189', '07/03/1988', NULL),
(95, 'perdu', 'Blanchette ', 'femelle', 'img/blanchette.jpg', 'Chat de gouttière', 'noir blans roux ', 'long', 'taché', 'oui', '2019-04-23 21:10:25', '20/04/2019', 'Rue Horace Bertin', '13005', 'Elle répond aussi quand on l\'appelle \"le minou\" ', '0662187999', '17/04/1972', NULL),
(96, 'perdu', 'Zéphyrette', 'femelle', 'img/zephyrette.jpg', 'Aucune', 'noir gris blans beige ', 'court', 'tigré', 'non', '2019-05-31 19:11:31', '28/05/2019', 'Chemin des Jonquilles', '13013', 'chatte de 6 / 7 mois, potentiellement en chaleur\r\ntigrée gris noir blanc, virant sur le beige, avec ventre beige clair tâcheté\r\na une petite plaie sur haut du dos\r\ncraintive\r\nse roule par terre\r\n', '0681261404', '08/12/1973', NULL),
(97, 'retrouve', 'DUCHESSE', 'femelle', 'img/duchesse.jpg', 'Angora Turc', 'blans ', 'long', 'uni', 'oui', '2019-06-22 22:05:33', '22/06/2019', 'PARDIGON', '13005', '', '0618794030', '01/01/1993', '2019-07-15 16:02:22'),
(99, 'perdu', 'Tiggy', 'femelle', 'img/tiggy.jpg', 'Aucune', 'gris blans beige ', 'court', 'tigré', 'oui', '2019-07-25 17:08:13', '25/07/2019', 'Bd Grawitz ', '13016', '', '0651965628', '01/01/1980', NULL),
(100, 'perdu', 'Nala', 'femelle', 'img/nala.jpg', 'Persan', 'gris ', 'long', 'tigré', 'non', '2019-07-25 20:50:30', '23/07/2019', 'rue guy de maupassant, le corbusier', '13008', '#chatperdu #marseille #quartiersaintanne Nous avons perdu notre persane depuis mardi. Elle a 9 ans elle est grise Avec de très long poil. Elle est toute petite et elle repond au prénom de Nala. ', '0761486755', '19/09/1976', NULL),
(102, 'trouve', 'Chat30', 'femelle', 'img/4586.jpg', 'Aucune', 'gris blans ', 'court', 'uni', 'oui', '2019-07-28 21:51:40', '11/01/2019', 'Square Albert Camus', '13011', '', '0782440117', '01/01/1980', NULL),
(103, 'trouve', 'Chat98', 'male', 'img/parDefaut.jpg', 'Commun', 'roux ', 'court', 'uni', 'non', '2019-07-28 21:57:05', '01/07/2019', 'Turcat Mery', '13009', 'Trouvé chat mâle adulte, roux avec un collier vert et un petit coeur\r\nRue Turcat Mery dans le 8e arrondissement....', '0699693856', '04/06/1964', NULL),
(104, 'perdu', 'Chou', 'male', 'img/5826.jpg', 'Aucune', 'beige ', 'long', 'tigré', 'oui', '2019-08-07 22:10:12', '07/08/2019', 'Rue Pierre Laurent', '13006', 'Chat persan chinchilla de 6 ans, les yeux verts, Beige et Blanc\r\n', '0731561314', '07/07/1977', NULL),
(105, 'retrouve', 'Paloma', 'femelle', 'img/9025.jpg', 'Aucune', 'noir blans ', 'long', 'taché', 'oui', '2019-08-07 22:20:09', '06/08/2019', 'Rue du Rouet', '13008', 'Chat American long hair, blanc et noir, 4ans', '0665234117', '01/01/1980', '2019-08-10 01:15:22'),
(106, 'perdu', 'Annabelle ', 'femelle', 'img/5791.jpg', 'Commun', 'noir ', 'court', 'uni', 'oui', '2019-08-08 18:08:35', '15/07/2019', 'St henri bd d anam la monjarde', '13016', 'Annabelle 3 ans.Chatte noire cravate blanche et pointe parte blanche,yeux marron.\r\nStérilisé et tatouée.\r\nCollier rose.\r\nTrès craintive. ', '0760601022', '29/06/1982', NULL),
(107, 'perdu', 'Gato', 'male', 'img/7262.jpg', 'British Shorthair', 'gris ', 'court', 'uni', 'oui', '2019-08-09 13:55:52', '09/08/2019', 'Rue du Rouet', '13008', 'Tres beau chat, gris les yeux verts, 5 ans\r\n', '0613524439', '01/01/1981', NULL),
(109, 'perdu', 'PRALINE ', 'femelle', 'img/8532.jpg', 'Européen', 'marron ', 'long', 'tigré', 'non', '2019-08-20 13:31:56', '17/08/2019', '78 Boulevard Françoise Duparc', '13004', 'Praline dite Mounette, 1 an, petite taille, couleur marron titré, queue gris foncé.', '0644254465', '24/03/1969', NULL),
(110, 'perdu', 'MAX', 'male', 'img/9513.jpg', 'Chat de gouttière', 'noir gris blans ', 'court', 'tigré', 'oui', '2019-08-25 18:14:31', '25/08/2019', 'Boulevard Barry', '13001', 'BLANC DESSOUS EN MAJORITE ET TIGRE SUR LE DOS YEUX VETS ET COLLIER ANTI PÜCES', '0659440328', '01/01/1980', NULL),
(111, 'retrouve', 'Chat111', 'femelle', 'img/5793.jpg', 'Aucune', 'gris blans beige ', 'court', 'tigré', 'oui', '2019-08-28 13:03:29', '24/08/2019', 'Prom. Georges Pompidou', '13008', 'Chatte d\'environ 1an. (vu avec le vétérinaire)\r\nCâline, elle n\'est pas peureuse mais a son caractère.\r\nPuce NON, Tatouage OUI. (mais pas de correspondance chez le vétérinaire)', '0688674637', '17/12/1961', '2019-08-29 07:41:30');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`idchat`),
  ADD UNIQUE KEY `idchat_UNIQUE` (`idchat`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chat`
--
ALTER TABLE `chat`
  MODIFY `idchat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
