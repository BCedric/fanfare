-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  fdb6.runhosting.com
-- Généré le :  Jeu 25 Avril 2019 à 18:27
-- Version du serveur :  5.7.20-log
-- Version de PHP :  5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `1425571_fanfare`
--

-- --------------------------------------------------------

--
-- Structure de la table `concerts`
--

CREATE TABLE `concerts` (
  `id` int(11) NOT NULL,
  `lieu` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `spectacle` varchar(50) NOT NULL,
  `info` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `concerts`
--

INSERT INTO `concerts` (`id`, `lieu`, `date`, `heure`, `spectacle`, `info`) VALUES
(100, 'ThiÃ©zac (15)', '2019-05-19', '14:00:00', 'Un grain dans les rouages', 'Festival On Two Tripoux'),
(97, 'ChirÃ© en Montreuil', '2019-07-06', '00:00:00', 'Un grain dans les rouages', 'Le Pressoir - Au ChÃ¢teau'),
(98, 'SenillÃ©', '2019-10-13', '15:00:00', 'Un grain dans les rouages', 'salle des fÃªtes'),
(101, 'QuinÃ§ay', '2019-06-01', '00:00:00', 'Fanfaronnade', ''),
(102, 'Biard', '2019-06-29', '17:30:00', 'Un grain dans les rouages', 'Festival Biard dans les Airs'),
(103, 'Square de la RÃ©publique, Poiters', '2019-09-05', '18:30:00', 'Un grain dans les rouages', 'les jeudis du square'),
(104, 'Le Jardin Vert d\'AngoulÃªme (Jardin public)', '2019-07-11', '21:00:00', 'Un grain dans les rouages', 'Jeudis Jeux de rue'),
(105, 'Parc du Clos de la RibaudiÃ¨re - Chasseneuil du Poitou', '2019-08-16', '21:00:00', 'Un grain dans les rouages', 'Chasseneuil un soir d\'Ã©tÃ©');

-- --------------------------------------------------------

--
-- Structure de la table `presse`
--

CREATE TABLE `presse` (
  `fichier` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `journal` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `presse`
--

INSERT INTO `presse` (`fichier`, `date`, `journal`, `id`) VALUES
('CP 11.12.18.jpg', '2018-12-11', 'Centre Presse', 31),
('25.09.2018 NR .jpg', '2018-09-25', 'Nouvelle RÃ©publique', 30),
('20.10.18.jpg', '2018-10-20', '', 29),
('16.08.18 Centre Presse.jpg', '2018-08-16', 'Centre Presse', 28),
('12.03.12 NR.jpg', '2012-03-12', 'Nouvelle RÃ©publique', 37),
('NR 12.12.18.jpg', '2018-12-12', 'Nouvelle RÃ©publique', 39),
('13.02.19 NR.jpg', '2019-02-13', 'Nouvelle RÃ©publique', 43),
('09.11.11 NR.jpg', '2011-11-09', 'la Nouvelle RÃ©publique', 44);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `username` varchar(32) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `password` varchar(128) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`username`, `salt`, `password`, `id`) VALUES
('admin', 'ccab53e82dc7311c67139ac5a5ba3083', '6ca20bc19e1576e9aee0349dd37e967b', 3);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `concerts`
--
ALTER TABLE `concerts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `presse`
--
ALTER TABLE `presse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `concerts`
--
ALTER TABLE `concerts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT pour la table `presse`
--
ALTER TABLE `presse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
