-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 28 nov. 2021 à 15:40
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `moduleconnexion`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `prenom`, `nom`, `password`) VALUES
(60, 'natfzhhe', 'alain', 'alan', '$2y$10$YkUAKwUsqg0VSH3maCNyluW4EvPVTCtEKoEn89oM6s3omaxVd0Vui'),
(61, 'krjuzuhyuyhfeh', 'alain', 'fr', '$2y$10$qtvnTJhU.XEPlcUkTP0S3uy.QFI/tbUnFIXtOiIMX9So0fa3QwXnS'),
(62, 'zzzzzz', 'zzzzzzz', 'zzzzz', '$2y$10$ZkiGhjDF8xS48irVRe3TouVwz30VKoYwRy5XqDMHzy.6z7nKQ.ivK'),
(63, 'jules', 'frf', 'gyh', '$2y$10$H0J2nMJ8iFCxz.FHxtHHouj8nznKkKtkfGtXi4nG.kU3TFyGaSN32'),
(64, 'ijrzhgtjhgijuzeaj', 'alain', 'alan', '$2y$10$LzrvecbB/NDONwurFyJjYe0NWnPt5vXn/6nZGXz9nZXn.ksQWTZpS'),
(65, 'hjerbfgvhejkhvekjsnh', 'alain', 'alan', '$2y$10$e75xSjWMqqro..fGsMOvZu3/jdDrdaKH4KB2bUGR0D.B/p7s3gQZq'),
(66, 'alexandre', 'frf', 'D', '$2y$10$cE8fqYPQxfVd03b4YI//ouv62mXNnTxZ0/7yGid4wiNi/eMKhAEqu'),
(67, 'marcelle', 'alain', 'dr', '$2y$10$mS6lNQsBSKQhPvoFbL/dyuIfoJ3bEahbD/qRGjMjm1bGpEWTJ5kgy'),
(68, 'anatol', 'ezaaa', 'alan', '$2y$10$/QDB1Qew8FcKLyrq8lZz6uDfOEu05IiN9opWBkjxsl5zzh4FgGp4i'),
(69, 'admin', 'admin', 'admin', '$2y$10$Je83BGJis3f946bmYAjUQOtrqTGvFT4/9MsRf015Feuv4BtQ/0yT2'),
(70, 'mar', 'alain', 't', '$2y$10$P.aXXLTavHS6zeXkgs4E2eKOkTWh19AKpIQL6gpm0sMKm.nsvCxb.'),
(71, 'mon', 'alain', 'alan', '$2y$10$C7dXYl2EMcmLmcBYL/Z9i..mBFwBM1QDfqVWLrJlS.yujE9Uoo5MS'),
(72, 'auchan', 'alain', 'bab', '$2y$10$uS/fadiiyfCINK9Bxot9.udH1iEU7dtm21O9gQ7ZFsghmrOppb8SW'),
(73, 'martine', 'frf', 'gyh', '$2y$10$lhb/W91N9tO7S2vgNnc9MORSjMLN/3QLFL6dnufOvwlO8dF9JS5MS'),
(74, 'r', 'e', 'e', '$2y$10$0UeqVbtAIMD8crgK0/T78e.mY/tpT1i7J6iJXyQHoZbPrDsd2R.Xm'),
(75, 'y', 't', 't', '$2y$10$MDfQayXAuWvEkUyHS8O1M.gOGh58jFUOjCrCdpZSG.Hl7LRd7dNui');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
