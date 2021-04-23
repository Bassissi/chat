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
-- Structure de la table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(6) NOT NULL,
  `ip` varchar(64) DEFAULT NULL,
  `time` datetime(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `time`) VALUES
(1, '192.168.44.15', '2019-06-04 00:00:00.000000'),
(3, '::1', '2019-06-19 20:24:34.000000'),
(4, '2', '2019-06-19 20:27:16.000000'),
(5, '127.0.0.1', '2019-07-31 10:23:49.000000'),
(6, '78.194.226.222', '2019-08-10 01:20:27.000000'),
(7, '46.229.168.141', '2019-08-10 05:50:48.000000'),
(8, '66.249.64.48', '2019-08-10 08:50:39.000000'),
(9, '31.37.99.185', '2019-08-10 09:25:44.000000'),
(10, '66.249.64.46', '2019-08-10 10:17:24.000000'),
(11, '46.229.168.153', '2019-08-10 14:13:51.000000'),
(12, '46.229.168.129', '2019-08-10 14:13:53.000000'),
(13, '104.144.122.29', '2019-08-10 14:21:08.000000'),
(14, '90.162.219.7', '2019-08-10 16:28:19.000000'),
(15, '66.249.66.64', '2019-08-10 17:57:50.000000'),
(16, '66.249.66.68', '2019-08-10 18:03:58.000000'),
(17, '46.229.168.139', '2019-08-10 18:09:44.000000'),
(18, '46.229.168.140', '2019-08-10 18:09:46.000000'),
(19, '81.185.170.3', '2019-08-10 18:59:55.000000'),
(20, '207.46.13.1', '2019-08-10 21:00:01.000000'),
(21, '207.46.13.54', '2019-08-10 21:56:43.000000'),
(22, '66.249.66.66', '2019-08-10 22:05:15.000000'),
(23, '46.229.168.137', '2019-08-11 02:22:25.000000'),
(24, '46.229.168.154', '2019-08-11 04:12:34.000000'),
(25, '46.229.168.132', '2019-08-11 05:06:49.000000'),
(26, '157.55.39.68', '2019-08-11 05:15:17.000000'),
(27, '40.77.167.57', '2019-08-11 05:30:30.000000'),
(28, '207.46.13.188', '2019-08-11 13:46:22.000000'),
(29, '181.215.50.195', '2019-08-11 13:52:26.000000'),
(30, '66.249.92.131', '2019-08-11 14:43:09.000000'),
(31, '46.229.168.145', '2019-08-11 14:58:10.000000'),
(32, '46.229.168.142', '2019-08-11 14:58:13.000000'),
(33, '90.83.170.74', '2019-08-11 19:21:47.000000'),
(34, '46.229.168.149', '2019-08-11 21:53:40.000000'),
(35, '46.229.168.130', '2019-08-12 00:55:52.000000'),
(36, '157.55.39.42', '2019-08-12 02:01:21.000000'),
(37, '46.229.168.146', '2019-08-12 06:54:17.000000'),
(38, '46.229.168.138', '2019-08-12 06:54:19.000000'),
(39, '46.229.168.133', '2019-08-12 08:34:59.000000'),
(40, '46.229.168.143', '2019-08-12 10:19:14.000000'),
(41, '92.184.101.148', '2019-08-12 11:03:49.000000'),
(42, '3.19.76.245', '2019-08-12 12:06:15.000000'),
(43, '2.15.251.92', '2019-08-12 13:46:51.000000'),
(44, '46.229.168.150', '2019-08-12 14:07:24.000000'),
(45, '35.178.94.139', '2019-08-12 14:49:56.000000'),
(46, '46.229.168.131', '2019-08-12 15:49:21.000000'),
(47, '45.86.247.102', '2019-08-12 16:12:38.000000'),
(48, '37.165.196.98', '2019-08-12 17:22:18.000000'),
(49, '66.249.75.48', '2019-08-12 21:17:22.000000'),
(50, '37.168.106.103', '2019-08-12 21:27:41.000000'),
(51, '66.249.75.46', '2019-08-12 22:47:23.000000'),
(52, '66.249.75.50', '2019-08-13 01:19:19.000000'),
(53, '157.55.39.74', '2019-08-13 11:15:17.000000'),
(54, '46.229.168.147', '2019-08-13 13:13:56.000000'),
(55, '46.229.168.148', '2019-08-13 13:13:58.000000'),
(56, '80.12.63.201', '2019-08-13 14:19:13.000000'),
(57, '92.184.102.57', '2019-08-13 15:46:50.000000'),
(58, '207.46.13.145', '2019-08-13 17:29:28.000000'),
(59, '66.249.87.145', '2019-08-13 21:54:25.000000'),
(60, '40.77.167.96', '2019-08-14 00:35:00.000000'),
(61, '157.55.39.47', '2019-08-14 06:38:03.000000'),
(62, '40.77.167.45', '2019-08-14 06:38:07.000000'),
(63, '40.77.167.71', '2019-08-14 09:26:37.000000'),
(64, '83.201.36.123', '2019-08-14 10:14:43.000000'),
(65, '89.82.139.150', '2019-08-14 13:27:35.000000'),
(66, '37.173.31.32', '2019-08-14 13:53:25.000000'),
(67, '207.46.13.149', '2019-08-14 14:00:28.000000'),
(68, '46.229.168.152', '2019-08-14 14:39:17.000000'),
(69, '40.77.167.108', '2019-08-14 14:46:51.000000'),
(70, '191.96.41.43', '2019-08-14 15:24:34.000000'),
(71, '207.46.13.102', '2019-08-14 17:47:08.000000'),
(72, '207.46.13.197', '2019-08-14 17:59:38.000000'),
(73, '46.229.168.134', '2019-08-14 18:17:52.000000'),
(74, '64.246.165.200', '2019-08-14 19:22:21.000000'),
(75, '185.124.29.187', '2019-08-14 21:35:12.000000'),
(76, '85.48.187.100', '2019-08-14 21:41:10.000000'),
(77, '92.184.100.238', '2019-08-14 21:43:32.000000'),
(78, '157.55.39.51', '2019-08-14 22:23:39.000000'),
(79, '78.216.213.250', '2019-08-15 11:09:46.000000'),
(80, '37.171.145.114', '2019-08-15 11:51:32.000000'),
(81, '41.143.27.43', '2019-08-15 12:43:24.000000'),
(82, '157.55.39.142', '2019-08-15 14:57:35.000000'),
(83, '37.170.111.11', '2019-08-15 18:02:17.000000'),
(84, '37.170.248.68', '2019-08-15 18:42:18.000000'),
(85, '157.55.39.160', '2019-08-15 19:49:59.000000'),
(86, '46.229.168.135', '2019-08-16 05:42:44.000000'),
(87, '207.46.13.176', '2019-08-16 05:57:15.000000'),
(88, '109.11.217.166', '2019-08-16 08:57:14.000000'),
(89, '46.229.168.151', '2019-08-16 11:12:37.000000'),
(90, '66.249.75.210', '2019-08-16 12:00:06.000000'),
(91, '37.169.90.117', '2019-08-16 18:38:25.000000'),
(92, '88.165.140.3', '2019-08-16 20:23:11.000000'),
(93, '37.170.201.34', '2019-08-16 21:19:07.000000'),
(94, '157.55.39.37', '2019-08-16 23:18:00.000000'),
(95, '40.77.167.5', '2019-08-17 06:01:15.000000'),
(96, '207.46.13.110', '2019-08-17 06:01:29.000000'),
(97, '157.55.39.251', '2019-08-17 06:24:58.000000'),
(98, '37.165.225.130', '2019-08-17 13:13:32.000000'),
(99, '52.24.146.34', '2019-08-17 15:09:52.000000'),
(100, '37.170.197.36', '2019-08-17 16:08:29.000000'),
(101, '37.173.247.213', '2019-08-17 16:09:38.000000'),
(102, '37.164.26.142', '2019-08-17 16:11:14.000000'),
(103, '41.107.25.244', '2019-08-18 05:19:46.000000'),
(104, '40.77.167.40', '2019-08-18 17:12:27.000000'),
(105, '157.55.39.201', '2019-08-18 17:12:36.000000'),
(106, '176.137.121.149', '2019-08-18 20:12:36.000000'),
(107, '66.249.75.206', '2019-08-18 22:29:25.000000'),
(108, '157.55.39.49', '2019-08-19 03:32:04.000000'),
(109, '46.229.168.136', '2019-08-19 06:47:07.000000'),
(110, '40.77.167.219', '2019-08-19 06:59:10.000000'),
(111, '185.61.190.198', '2019-08-19 07:49:37.000000'),
(112, '66.249.75.208', '2019-08-19 08:25:09.000000'),
(113, '34.245.104.23', '2019-08-19 13:17:09.000000'),
(114, '81.185.164.156', '2019-08-19 13:38:22.000000'),
(115, '93.9.163.245', '2019-08-19 18:41:27.000000'),
(116, '207.46.13.92', '2019-08-20 01:20:24.000000'),
(117, '207.46.13.222', '2019-08-20 01:20:40.000000'),
(118, '157.55.39.228', '2019-08-20 07:50:21.000000'),
(119, '80.11.178.252', '2019-08-20 08:10:07.000000'),
(120, '185.24.185.195', '2019-08-20 09:57:59.000000'),
(121, '176.158.77.196', '2019-08-20 13:23:30.000000'),
(122, '34.211.179.178', '2019-08-20 14:45:52.000000'),
(123, '77.145.21.227', '2019-08-20 16:24:21.000000'),
(124, '207.46.13.217', '2019-08-20 18:01:26.000000'),
(125, '157.55.39.111', '2019-08-20 21:40:10.000000'),
(126, '40.77.167.61', '2019-08-20 22:49:56.000000'),
(127, '66.249.64.50', '2019-08-21 04:00:50.000000'),
(128, '89.88.165.137', '2019-08-21 04:15:40.000000'),
(129, '157.55.39.21', '2019-08-21 04:38:13.000000'),
(130, '40.77.167.106', '2019-08-21 04:38:15.000000'),
(131, '207.46.13.85', '2019-08-21 07:20:19.000000'),
(132, '37.169.94.41', '2019-08-21 10:10:29.000000'),
(133, '207.46.13.113', '2019-08-21 11:47:17.000000'),
(134, '81.255.5.174', '2019-08-21 13:13:22.000000'),
(135, '34.221.79.124', '2019-08-21 14:24:27.000000'),
(136, '80.214.155.190', '2019-08-21 22:40:56.000000'),
(137, '40.77.167.148', '2019-08-22 00:10:04.000000'),
(138, '40.77.167.196', '2019-08-22 03:46:29.000000'),
(139, '91.242.162.37', '2019-08-22 07:57:22.000000'),
(140, '80.12.67.53', '2019-08-22 09:59:43.000000'),
(141, '109.10.75.12', '2019-08-22 21:06:07.000000'),
(142, '157.55.39.230', '2019-08-22 22:33:23.000000'),
(143, '194.199.7.22', '2019-08-23 03:50:43.000000'),
(144, '157.55.39.184', '2019-08-23 07:15:53.000000'),
(145, '157.55.39.24', '2019-08-23 17:51:29.000000'),
(146, '207.46.13.63', '2019-08-23 17:51:35.000000'),
(147, '157.55.39.48', '2019-08-23 19:15:52.000000'),
(148, '207.46.13.3', '2019-08-24 04:23:03.000000'),
(149, '46.229.168.144', '2019-08-24 05:00:23.000000'),
(150, '40.77.167.134', '2019-08-24 05:58:54.000000'),
(151, '69.171.251.3', '2019-08-24 09:01:52.000000'),
(152, '109.27.231.129', '2019-08-24 09:03:23.000000'),
(153, '66.249.73.220', '2019-08-24 19:31:44.000000'),
(154, '66.249.73.222', '2019-08-24 19:42:30.000000'),
(155, '66.249.73.221', '2019-08-24 20:13:00.000000'),
(156, '91.242.162.84', '2019-08-24 20:44:18.000000'),
(157, '154.73.106.30', '2019-08-24 20:57:28.000000'),
(158, '207.46.13.122', '2019-08-25 00:18:35.000000'),
(159, '157.55.39.76', '2019-08-25 00:37:43.000000'),
(160, '54.202.72.2', '2019-08-25 10:47:43.000000'),
(161, '85.171.42.20', '2019-08-25 18:07:24.000000'),
(162, '34.67.156.68', '2019-08-25 18:17:59.000000'),
(163, '157.55.39.43', '2019-08-25 18:32:03.000000'),
(164, '90.112.59.179', '2019-08-25 18:44:56.000000'),
(165, '207.46.13.253', '2019-08-25 19:56:37.000000'),
(166, '157.55.39.166', '2019-08-25 19:58:38.000000'),
(167, '40.77.167.41', '2019-08-25 22:38:06.000000'),
(168, '207.46.13.203', '2019-08-26 05:43:02.000000'),
(169, '109.24.199.11', '2019-08-26 07:57:16.000000'),
(170, '157.55.39.154', '2019-08-26 20:29:20.000000'),
(171, '40.77.167.159', '2019-08-26 22:56:17.000000'),
(172, '91.242.162.26', '2019-08-27 10:03:39.000000'),
(173, '157.55.39.119', '2019-08-27 11:58:58.000000'),
(174, '34.212.119.53', '2019-08-27 18:12:08.000000'),
(175, '34.66.164.37', '2019-08-27 21:17:59.000000'),
(176, '52.55.189.195', '2019-08-27 22:56:50.000000'),
(177, '157.55.39.15', '2019-08-28 00:03:03.000000'),
(178, '207.46.13.60', '2019-08-28 00:33:58.000000'),
(179, '207.46.13.153', '2019-08-28 02:28:14.000000'),
(180, '88.187.232.247', '2019-08-28 04:17:39.000000'),
(181, '88.125.114.51', '2019-08-28 09:26:15.000000'),
(182, '80.214.113.165', '2019-08-28 09:52:27.000000'),
(183, '90.85.94.49', '2019-08-28 09:58:42.000000'),
(184, '40.77.167.121', '2019-08-28 11:37:03.000000'),
(185, '35.242.138.225', '2019-08-28 15:05:49.000000'),
(186, '35.242.173.1', '2019-08-28 15:55:21.000000'),
(187, '35.246.59.9', '2019-08-28 16:34:02.000000'),
(188, '66.249.75.204', '2019-08-28 16:41:36.000000'),
(189, '89.155.230.169', '2019-08-28 20:05:33.000000'),
(190, '157.55.39.231', '2019-08-29 07:36:47.000000'),
(191, '54.238.171.116', '2019-08-29 09:25:58.000000'),
(192, '207.46.13.201', '2019-08-29 18:10:11.000000'),
(193, '40.77.167.154', '2019-08-29 18:10:23.000000'),
(194, '40.77.167.95', '2019-08-29 21:14:39.000000'),
(195, '66.249.76.80', '2019-08-29 21:30:20.000000'),
(196, '157.55.39.28', '2019-08-30 00:09:55.000000'),
(197, '157.55.39.165', '2019-08-30 00:10:03.000000'),
(198, '66.249.76.82', '2019-08-30 07:15:51.000000'),
(199, '66.249.76.78', '2019-08-30 10:02:21.000000'),
(200, '157.55.39.236', '2019-08-30 11:42:37.000000'),
(201, '66.249.79.80', '2019-08-30 20:12:17.000000'),
(202, '157.55.39.93', '2019-08-30 21:57:45.000000'),
(203, '91.242.162.1', '2019-08-31 04:19:11.000000'),
(204, '66.249.79.78', '2019-08-31 05:18:23.000000'),
(205, '90.73.234.150', '2019-08-31 08:54:04.000000'),
(206, '92.184.100.233', '2019-08-31 08:59:53.000000'),
(207, '92.184.101.106', '2019-08-31 11:15:58.000000'),
(208, '92.184.102.137', '2019-08-31 18:48:06.000000'),
(209, '207.46.13.135', '2019-08-31 20:51:43.000000'),
(210, '157.55.39.135', '2019-08-31 20:59:52.000000'),
(211, '157.55.39.39', '2019-09-01 00:14:28.000000'),
(212, '40.77.167.147', '2019-09-01 00:14:31.000000'),
(213, '40.77.167.174', '2019-09-01 06:07:32.000000'),
(214, '119.237.155.214', '2019-09-01 11:10:09.000000'),
(215, '89.93.111.47', '2019-09-01 11:16:13.000000'),
(216, '157.55.39.85', '2019-09-01 17:25:22.000000');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
