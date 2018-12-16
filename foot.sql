-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 16 Décembre 2018 à 01:58
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `foot`
--
CREATE DATABASE IF NOT EXISTS `foot` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `foot`;

-- --------------------------------------------------------

--
-- Structure de la table `but`
--

CREATE TABLE IF NOT EXISTS `but` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `id_rencontre` int(10) DEFAULT NULL,
  `id_buteur` int(11) DEFAULT NULL,
  `id_passeur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_rencontre` (`id_rencontre`),
  KEY `id_buteur` (`id_buteur`),
  KEY `id_passeur` (`id_passeur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `club`
--

CREATE TABLE IF NOT EXISTS `club` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `annee_creation` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `club`
--

INSERT INTO `club` (`id`, `nom`, `ville`, `annee_creation`) VALUES
(1, 'Manchester City', 'Manchester', 1894),
(2, 'Manchester United', 'Manchester', 1878),
(3, 'Tottenham Hotspur', 'Londres', 1882),
(4, 'Liverpool FC', 'Liverpool', 1892),
(5, 'Chelsea FC', 'Londres', 1905),
(6, 'Arsenal FC', 'Londres', 1886),
(7, 'Burnley FC', 'Burnley', 1882),
(8, 'Everton', 'Liverpool', 1878),
(9, 'Leicester City FC', 'Leicester', 1884),
(10, 'Newcastle United', 'Newcastle', 1892),
(11, 'Crystal Palace FC', 'Londres', 1905),
(12, 'AFC Bournmouth', 'Bournemouth', 1899),
(13, 'West Ham United', 'Londres', 1895),
(14, 'Watford FC', 'Londres', 1881),
(15, 'Brighton & Hove Albion', 'Brighton et Hove', 1901),
(16, 'Huddersfield Town', 'Huddersfield', 1908),
(17, 'Southampton FC', 'Southampton', 1885),
(18, 'Wolverhampton Wanderers', 'Wolverhampton', 1877),
(19, 'Cardiff City FC', 'Cardiff', 1899),
(20, 'Fulham FC', 'Londres', 1879);

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE IF NOT EXISTS `joueur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `age` int(2) NOT NULL,
  `club_id` int(11) NOT NULL,
  `poste` enum('attaquant','milieu','defenseur','gardien') NOT NULL,
  `nationalite` enum('francaise','anglaise','bresilienne','espagnole','allemande','galloise','portugaise','argentine','belge','suisse','autre') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `club_id` (`club_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Contenu de la table `joueur`
--

INSERT INTO `joueur` (`id`, `nom`, `prenom`, `age`, `club_id`, `poste`, `nationalite`) VALUES
(1, 'leno', 'bernd', 26, 6, 'gardien', 'allemande'),
(2, 'cech', 'petr', 36, 6, 'gardien', 'autre'),
(3, 'mustafi', 'shkodran', 26, 6, 'defenseur', 'allemande'),
(4, 'sokratis', ' ', 30, 6, 'defenseur', 'autre'),
(5, 'koscielny', 'laurent', 33, 6, 'defenseur', 'francaise'),
(6, 'holding', 'rob', 23, 6, 'defenseur', 'anglaise'),
(7, 'kolasinac', 'sead', 25, 6, 'defenseur', 'allemande'),
(8, 'monreal', 'nacho', 32, 6, 'defenseur', 'espagnole'),
(9, 'bellerin', 'hector', 23, 6, 'defenseur', 'espagnole'),
(10, 'lichtsteiner', 'stephan', 34, 6, 'milieu', 'suisse'),
(11, 'xhaka', 'granit', 26, 6, 'milieu', 'suisse'),
(12, 'elneny', 'mohamed', 26, 6, 'milieu', 'autre'),
(13, 'torreira', 'lucas', 22, 6, 'milieu', 'autre'),
(14, 'ramsey', 'aaron', 27, 6, 'milieu', 'galloise'),
(15, 'guendouzi', 'matteo', 19, 6, 'milieu', 'francaise'),
(16, 'maitland-niles', 'ainsley', 21, 6, 'milieu', 'anglaise'),
(17, 'ozil', 'mesut', 30, 6, 'milieu', 'allemande'),
(18, 'mkhitaryan', 'henrikh', 29, 6, 'milieu', 'autre'),
(19, 'iwobi', 'alex', 22, 6, 'attaquant', 'autre'),
(20, 'aubameyang', 'pierre-emerick', 29, 6, 'attaquant', 'autre'),
(21, 'lacazette', 'alexandre', 27, 6, 'attaquant', 'francaise'),
(22, 'jenkinson', 'carl', 26, 6, 'defenseur', 'anglaise'),
(23, 'mavropanos', 'konstantinos', 20, 6, 'defenseur', 'autre'),
(24, 'martinez', 'emiliano', 26, 6, 'gardien', 'autre'),
(25, 'welbeck', 'danny', 28, 6, 'attaquant', 'anglaise'),
(26, 'ederson', ' ', 25, 1, 'gardien', 'bresilienne'),
(27, 'bravo', 'claudio', 35, 1, 'gardien', 'autre'),
(28, 'muric', 'arijanet', 20, 1, 'gardien', 'autre'),
(29, 'stones', 'john', 24, 1, 'defenseur', 'anglaise'),
(30, 'laporte', 'aymeric', 24, 1, 'defenseur', 'francaise'),
(31, 'otamendi', '', 0, 1, 'defenseur', 'autre'),
(32, 'mangala', 'eliaquim', 0, 1, 'defenseur', 'francaise'),
(33, 'kompany', 'vincent', 0, 1, 'defenseur', 'belge'),
(34, 'sandler', 'philippe', 0, 1, 'defenseur', 'autre'),
(35, 'mendy', 'benjamin', 0, 1, 'defenseur', 'francaise'),
(36, 'walker', 'kyle', 0, 1, 'defenseur', 'anglaise'),
(37, 'danilo', ' ', 0, 1, 'defenseur', 'bresilienne'),
(38, 'fernandinho', ' ', 0, 1, 'milieu', 'bresilienne'),
(39, 'gundogan', 'ilkay', 0, 1, 'milieu', 'allemande'),
(40, 'delph', 'fabian ', 0, 1, 'milieu', 'anglaise'),
(41, 'zinchenko', 'oleksandr', 0, 1, 'milieu', 'autre'),
(42, 'foden', 'phil', 0, 1, 'milieu', 'anglaise'),
(43, 'de bruyne', 'kevin', 0, 1, 'milieu', 'belge'),
(44, 'silva', 'david', 0, 1, 'milieu', 'espagnole'),
(45, 'diaz', 'brahim', 0, 1, 'milieu', 'espagnole'),
(46, 'sane', 'leroy', 0, 1, 'attaquant', 'allemande'),
(47, 'sterling', 'raheem', 0, 1, 'attaquant', 'anglaise'),
(48, 'silva', 'bernado', 0, 1, 'attaquant', 'portugaise'),
(49, 'aguero', 'sergio', 0, 1, 'attaquant', 'autre'),
(50, 'jesus', 'gabriel', 0, 1, 'attaquant', 'bresilienne'),
(51, 'de gea', 'david', 0, 2, 'gardien', 'espagnole'),
(52, 'romero', 'sergio', 0, 2, 'gardien', 'autre'),
(53, 'grant', 'lee', 0, 2, 'gardien', 'anglaise'),
(54, 'bailly', 'eric', 0, 2, 'defenseur', 'autre'),
(55, 'lindelof', 'victor', 0, 2, 'defenseur', 'autre'),
(56, 'jones', 'phil', 0, 2, 'defenseur', 'anglaise'),
(57, 'smalling', 'chris', 0, 2, 'defenseur', 'anglaise'),
(58, 'rojo', 'marcos', 0, 2, 'defenseur', 'autre'),
(59, 'shaw', 'luke', 0, 2, 'defenseur', 'anglaise'),
(60, 'young', 'ashley', 0, 2, 'defenseur', 'anglaise'),
(61, 'dalot', 'diogo', 0, 2, 'defenseur', 'portugaise'),
(62, 'darmian', 'matteo', 0, 2, 'defenseur', 'autre'),
(63, 'valencia', 'antonio', 0, 2, 'defenseur', 'autre'),
(64, 'matic', 'nemanja', 0, 2, 'milieu', 'autre'),
(65, 'pogba', 'paul', 0, 2, 'milieu', 'francaise'),
(66, 'fred', ' ', 0, 2, 'milieu', 'bresilienne'),
(67, 'herrera', 'ander', 0, 2, 'milieu', 'espagnole'),
(68, 'fellaini', 'marouane', 0, 2, 'milieu', 'belge'),
(69, 'mctominay', 'scott', 0, 2, 'milieu', 'autre'),
(70, 'pereira', 'andreas', 0, 2, 'milieu', 'bresilienne'),
(71, 'sanchez', 'alexis', 0, 2, 'attaquant', 'autre'),
(72, 'lingard', 'jesse', 0, 2, 'attaquant', 'anglaise'),
(73, 'martial', 'anthony', 0, 2, 'attaquant', 'francaise'),
(74, 'lukaku', 'romelu', 0, 2, 'attaquant', 'belge'),
(75, 'rashford', 'marcus', 0, 2, 'attaquant', 'anglaise'),
(76, 'Sigurðsson', 'Gylfi', 0, 8, 'milieu', 'autre'),
(77, 'murray', 'glenn', 0, 15, 'attaquant', 'anglaise'),
(78, 'vardy', 'jamie', 0, 9, 'attaquant', 'anglaise'),
(79, 'salah', 'mohamed', 0, 4, 'attaquant', 'autre'),
(80, 'alexander-arnold', 'trent', 0, 4, 'defenseur', 'anglaise'),
(81, 'firmino', 'roberto', 0, 4, 'attaquant', 'bresilienne');

-- --------------------------------------------------------

--
-- Structure de la table `rencontre`
--

CREATE TABLE IF NOT EXISTS `rencontre` (
  `id` int(10) NOT NULL,
  `date_match` varchar(40) DEFAULT NULL,
  `id_stade` int(2) DEFAULT NULL,
  `equipe1_id` int(11) DEFAULT NULL,
  `equipe2_id` int(11) DEFAULT NULL,
  `score1` int(2) DEFAULT NULL,
  `score2` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `equipe1_id` (`equipe1_id`),
  KEY `equipe2_id` (`equipe2_id`),
  KEY `id_stade` (`id_stade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `rencontre`
--

INSERT INTO `rencontre` (`id`, `date_match`, `id_stade`, `equipe1_id`, `equipe2_id`, `score1`, `score2`) VALUES
(1, '24/11/2018', 13, 13, 1, 0, 4),
(2, '24/11/2018', 8, 8, 19, 1, 0),
(3, '24/11/2018', 15, 15, 9, 1, 1),
(4, '24/11/2018', 2, 2, 11, 0, 0),
(5, '24/11/2018', 14, 14, 4, 0, 3),
(6, '24/11/2018', 20, 20, 17, 3, 2),
(7, '24/11/2018', 3, 3, 5, 3, 1),
(8, '25/11/2018', 12, 12, 6, 1, 2),
(9, '25/11/2018', 18, 18, 16, 0, 2),
(10, '25/11/2018', 7, 7, 10, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `stade`
--

CREATE TABLE IF NOT EXISTS `stade` (
  `id` int(3) NOT NULL,
  `nom` varchar(40) DEFAULT NULL,
  `capacite` int(6) DEFAULT NULL,
  `club_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `club_id` (`club_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `stade`
--

INSERT INTO `stade` (`id`, `nom`, `capacite`, `club_id`) VALUES
(1, 'Etihad Stadium', 55097, 1),
(2, 'Old Trafford', 75787, 2),
(3, 'Wembley', 90000, 3),
(4, 'Anfield', 54000, 4),
(5, 'Stamford Bridge', 42055, 5),
(6, 'Emirates Stadium', 60432, 6),
(7, 'Turf Moor', 22546, 7),
(8, 'Goodison Park', 40569, 8),
(9, 'King Power'' Stadium', 32312, 9),
(10, 'St James Park', 52387, 10),
(11, 'Selhurst Park', 26309, 11),
(12, 'Goldsands Stadium', 11464, 12),
(13, 'Stade Olympique de Londres', 60000, 13),
(14, 'Vicarage Road', 21577, 14),
(15, 'Falmer Stadium', 30750, 15),
(16, 'John Smith Stadium', 24500, 16),
(17, 'St Mary Stadium', 32689, 17),
(18, 'Molineux Stadium', 28525, 18),
(19, 'Cardiff City Stadium', 33280, 19),
(20, 'Craven Cottage', 24600, 20);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `id_club` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_club` (`id_club`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `pseudo`, `mdp`, `id_club`) VALUES
(1, 'abelli', 'mickael', 'mick', '40bd001563085fc35165329ea1ff5c', 4),
(3, 'a', 'a', 'a', '3608a6d1a05aba23ea390e5f3b4820', 5),
(4, 'frenet', 'yandy', 'yondy', '5386c1e7bd9c410d07ffcc88fc2ceb', 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `but`
--
ALTER TABLE `but`
  ADD CONSTRAINT `but_ibfk_1` FOREIGN KEY (`id_rencontre`) REFERENCES `rencontre` (`id`),
  ADD CONSTRAINT `but_ibfk_2` FOREIGN KEY (`id_buteur`) REFERENCES `joueur` (`id`),
  ADD CONSTRAINT `but_ibfk_3` FOREIGN KEY (`id_passeur`) REFERENCES `joueur` (`id`);

--
-- Contraintes pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD CONSTRAINT `joueur_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `club` (`id`);

--
-- Contraintes pour la table `rencontre`
--
ALTER TABLE `rencontre`
  ADD CONSTRAINT `rencontre_ibfk_1` FOREIGN KEY (`equipe1_id`) REFERENCES `club` (`id`),
  ADD CONSTRAINT `rencontre_ibfk_2` FOREIGN KEY (`equipe2_id`) REFERENCES `club` (`id`),
  ADD CONSTRAINT `rencontre_ibfk_3` FOREIGN KEY (`id_stade`) REFERENCES `stade` (`id`);

--
-- Contraintes pour la table `stade`
--
ALTER TABLE `stade`
  ADD CONSTRAINT `stade_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `club` (`id`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`id_club`) REFERENCES `club` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
