-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 26 avr. 2020 à 20:54
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `motor`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(254) NOT NULL,
  `nom` varchar(254) NOT NULL,
  `prenom` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom`, `prenom`, `email`, `password`) VALUES
(8, 'Nabaloum', 'Louis', 'louisbertson@gmail.com', 'louis');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `id_marque` int(254) NOT NULL,
  `Nom_de_la_marque_` varchar(254) NOT NULL,
  `logo` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id_marque`, `Nom_de_la_marque_`, `logo`) VALUES
(16, 'APSONIC', '../style/img/APSONIClogo.jpg'),
(18, 'YAMAHA', '../style/img/YAMAHAlogo.jpg'),
(19, 'SUZuki', '../style/img/SUZukilogo.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `moto`
--

CREATE TABLE `moto` (
  `id_moto` int(11) NOT NULL,
  `model` varchar(254) NOT NULL,
  `id_marque` int(254) NOT NULL,
  `prix` int(254) NOT NULL,
  `stock` int(254) NOT NULL,
  `cylindre` int(254) NOT NULL,
  `photo` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `moto`
--

INSERT INTO `moto` (`id_moto`, `model`, `id_marque`, `prix`, `stock`, `cylindre`, `photo`) VALUES
(18, 'I8', 16, 200000, 9, 65, 'style/img/I8logo.jpg'),
(23, 'Vegas RR', 16, 680000, 62, 2547, '../style/img/Vegas RRlogo.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

CREATE TABLE `vente` (
  `id_vente` int(254) NOT NULL,
  `id_moto` int(254) NOT NULL,
  `marque_moto` int(11) NOT NULL,
  `model_moto` int(11) NOT NULL,
  `date_vente` varchar(254) NOT NULL,
  `nom_client` varchar(254) NOT NULL,
  `prenom_client` varchar(254) NOT NULL,
  `cnib_client` varchar(254) NOT NULL,
  `numero_client` int(254) NOT NULL,
  `serie` varchar(254) NOT NULL,
  `somme` int(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vente`
--

INSERT INTO `vente` (`id_vente`, `id_moto`, `marque_moto`, `model_moto`, `date_vente`, `nom_client`, `prenom_client`, `cnib_client`, `numero_client`, `serie`, `somme`) VALUES
(4, 23, 0, 0, '2020-04-08', 'ouedraogo', 'o', 'B7598452', 2147483647, 'C JDJHSNWBS', 2147483647);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id_marque`);

--
-- Index pour la table `moto`
--
ALTER TABLE `moto`
  ADD PRIMARY KEY (`id_moto`);

--
-- Index pour la table `vente`
--
ALTER TABLE `vente`
  ADD PRIMARY KEY (`id_vente`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `id_marque` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `moto`
--
ALTER TABLE `moto`
  MODIFY `id_moto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `vente`
--
ALTER TABLE `vente`
  MODIFY `id_vente` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
