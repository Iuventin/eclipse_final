-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 06 juin 2024 à 23:39
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `main_database_eclipse`
--

-- --------------------------------------------------------

--
-- Structure de la table `adressepostale`
--

CREATE TABLE `adressepostale` (
  `id_ap` int(11) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `codePostale` int(11) NOT NULL,
  `rue` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `adressepostale`
--

INSERT INTO `adressepostale` (`id_ap`, `ville`, `pays`, `codePostale`, `rue`) VALUES
(1, 'Marseille', 'France', 13001, '789 Boulevard des Roses'),
(2, 'New York', 'États-Unis', 10001, '456 5th Avenue'),
(3, 'Paris', 'France', 75001, '123 Rue de la Poste'),
(4, 'Montréal', 'Canada', 10002, '456 Avenue des Fleurs'),
(5, 'Los Angeles', 'États-Unis', 90210, '789 Main Street'),
(6, 'New York', 'États-Unis', 10001, '890 Elm Street'),
(7, 'Houston', 'États-Unis', 77001, '567 Oak Avenue'),
(8, 'Madrid', 'Espagne', 28001, '234 Calle Principal'),
(9, 'Berlin', 'Allemagne', 10115, '901 Hauptstraße'),
(10, 'Rome', 'Italie', 100, '345 Via Roma'),
(11, 'Lyon', 'France', 69001, '456 Rue du Commerce, 69001 Lyon'),
(12, 'Marseille', 'France', 13001, '789 Avenue des Champs, 13001 Marseille'),
(13, 'Bordeaux', 'France', 33000, '1010 Boulevard des Roses, 33000 Bordeaux'),
(14, 'Nancy', 'France', 54000, '222 Rue Principale, 54000 Nancy'),
(15, 'Lyon', 'France', 69002, '333 Avenue du Lac, 69002 Lyon'),
(16, 'vcxbvcxbvcxb', 'gfdxxfd', 77240, 'bvxbvcxvbcx'),
(17, 'vcxbvcxbvcxb', 'gfdxxfd', 77240, 'bvxbvcxvbcx'),
(18, 'vcxbvcxbvcxb', 'gfdxxfd', 77240, 'bvxbvcxvbcx'),
(19, 'vcxbvcxbvcxb', 'gfdxxfd', 77240, 'bvxbvcxvbcx'),
(20, 'vcxbvcxbvcxb', 'gfdxxfd', 77240, 'bvxbvcxvbcx'),
(21, 'vcxbvcxbvcxb', 'gfdxxfd', 77240, 'bvxbvcxvbcx'),
(22, 'vcxbvcxbvcxb', 'gfdxxfd', 77240, 'bvxbvcxvbcx');

-- --------------------------------------------------------

--
-- Structure de la table `biere`
--

CREATE TABLE `biere` (
  `id_biere` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `prix` double NOT NULL,
  `stock` int(11) NOT NULL,
  `chemin_image` varchar(100) NOT NULL,
  `nomPage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `biere`
--

INSERT INTO `biere` (`id_biere`, `nom`, `description`, `prix`, `stock`, `chemin_image`, `nomPage`) VALUES
(1, 'Renaissance Céleste', 'Fruit rouge', 7, 10, 'Bottle_renaissance', 'renaissance_celeste'),
(2, 'Aube Eclipsée', 'Litchi', 5, 10, 'Bottle_aube_eclipsee', 'aube_eclipse'),
(3, 'Coeur de l\'ombre', 'Café', 7, 10, 'Bottle_coeur_de_lombre', 'coeur_de_lombre'),
(4, 'Apogée', 'Cannelle & Clou de Girofle', 4, 10, 'Bottle_apogee', 'apogee'),
(5, 'Créscendo', 'Fruit Exotique', 7, 10, 'Bottle_crescendo', 'crescendo'),
(6, 'Voile Tendre', 'Jasmin', 5, 10, 'Bottle_jasmin', 'voile_tendre');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `DDN` date NOT NULL,
  `adresseMail` varchar(100) NOT NULL,
  `numeroTelephone` varchar(20) DEFAULT NULL,
  `adresse_de_facturation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `DDN`, `adresseMail`, `numeroTelephone`, `adresse_de_facturation`) VALUES
(1, 'Dupont', 'Jean', '1990-05-15', 'jean.dupont@example.com', '1234567890', '123 Rue de la Poste, 75001 Paris'),
(2, 'Tremblay', 'Marie', '1985-10-20', 'marie.tremblay@example.com', '2345678901', '456 Avenue des Fleurs, H2X 3X5 Montréal'),
(3, 'Patel', 'Sanjay', '1978-12-03', 'sanjay.patel@example.com', '3456789012', '789 Main Street, CA 90210 Los Angeles'),
(4, 'Smith', 'Emily', '1993-07-08', 'emily.smith@example.com', '4567890123', '890 Elm Street, NY 10001 New York'),
(5, 'Nguyen', 'Thi', '1980-04-25', 'thi.nguyen@example.com', '5678901234', '567 Oak Avenue, TX 77001 Houston'),
(6, 'García', 'Javier', '1987-09-12', 'javier.garcia@example.com', '6789012345', '234 Calle Principal, 28001 Madrid'),
(7, 'Müller', 'Anna', '1982-02-18', 'anna.muller@example.com', '7890123456', '901 Hauptstraße, 10115 Berlin'),
(8, 'Rossi', 'Giovanni', '1975-06-30', 'giovanni.rossi@example.com', '8901234567', '345 Via Roma, 00100 Roma'),
(9, 'Kim', 'Minji', '1995-11-22', 'minji.kim@example.com', '9012345678', '678 Gwangjang-ro, 100-451 Seoul'),
(10, 'González', 'Carlos', '1988-03-07', 'carlos.gonzalez@example.com', '0123456789', '123 Calle Principal, 28001 Madrid'),
(11, 'Loska', 'bvxbcx', '2024-06-06', 'lola@mona.com', '0641118350', 'gfdsgf'),
(12, 'Loska', 'bvxbcx', '2024-06-06', 'lola@mona.com', '0641118350', 'gfdsgf'),
(13, 'Loska', 'bvxbcx', '2024-06-06', 'lola@mona.com', '0641118350', 'gfdsgf'),
(14, 'Loska', 'bvxbcx', '2024-06-06', 'lola@mona.com', '0641118350', 'gfdsgf'),
(15, 'Loska', 'bvxbcx', '2024-06-06', 'lola@mona.com', '0641118350', 'gfdsgf'),
(16, 'THENARD', 'Logan', '2024-06-13', 'lola@mona.com', '0641118350', 'vcdwbvcxbwvcxb'),
(17, 'THENARD', 'Logan', '2024-06-13', 'lola@mona.com', '0641118350', 'vcdwbvcxbwvcxb'),
(18, 'THENARD', 'Logan', '2024-06-13', 'lola@mona.com', '0641118350', 'vcdwbvcxbwvcxb'),
(19, 'THENARD', 'Logan', '2024-06-13', 'lola@mona.com', '0641118350', 'vcdwbvcxbwvcxb'),
(20, 'THENARD', 'Logan', '2024-06-13', 'lola@mona.com', '0641118350', 'vcdwbvcxbwvcxb'),
(21, 'THENARD', 'Logan', '2024-06-13', 'lola@mona.com', '0641118350', 'vcdwbvcxbwvcxb'),
(22, 'THENARD', 'Logan', '2024-06-13', 'lola@mona.com', '0641118350', 'vcdwbvcxbwvcxb'),
(23, 'THENARD', 'Logan', '2024-06-13', 'lola@mona.com', '0641118350', 'vcdwbvcxbwvcxb');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `montant` decimal(5,2) NOT NULL,
  `date_commande` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `statut` varchar(50) NOT NULL,
  `id_payement` text DEFAULT NULL,
  `id_ap` int(11) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `montant`, `date_commande`, `statut`, `id_payement`, `id_ap`, `id_client`) VALUES
(1, 50.00, '2024-04-04 13:30:00', 'En cours', '1', 1, 1),
(2, 75.00, '2024-04-04 14:45:00', 'En cours', '2', 2, 2),
(3, 100.00, '2024-04-04 15:15:00', 'En cours', '3', 3, 3),
(4, 45.00, '2024-04-04 16:00:00', 'En cours', '4', 4, 4),
(5, 60.00, '2024-04-04 17:30:00', 'En cours', '5', 5, 5),
(6, 55.00, '2024-04-05 08:00:00', 'En cours', '6', 6, 6),
(7, 80.00, '2024-04-05 09:45:00', 'En cours', '7', 7, 7),
(8, 65.00, '2024-04-05 11:20:00', 'En cours', '8', 8, 8),
(9, 90.00, '2024-04-05 12:15:00', 'En cours', '9', 9, 9),
(10, 70.00, '2024-04-05 13:45:00', 'En cours', '10', 10, 10),
(11, 50.00, '2024-04-06 08:49:30', 'En cours', '11', 11, 1),
(12, 75.50, '2024-04-06 08:49:35', 'En cours', '12', 12, 1),
(13, 120.25, '2024-04-06 08:49:40', 'En cours', '13', 13, 1),
(14, 95.75, '2024-04-06 08:49:45', 'En cours', '14', 14, 1),
(15, 200.00, '2024-04-06 08:49:52', 'En cours', '15', 15, 1),
(16, 108.00, '0000-00-00 00:00:00', 'En cours', '150fa2cb6387bb90245d8bb3d08e7c6a', 21, 22),
(17, 108.00, '2024-06-06 21:33:56', 'En cours', '9f7d0633a8c729b47be4f1c307f324be', 22, 23);

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

CREATE TABLE `contenir` (
  `id_commande` int(11) NOT NULL,
  `id_biere` int(11) NOT NULL,
  `quantite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `contenir`
--

INSERT INTO `contenir` (`id_commande`, `id_biere`, `quantite`) VALUES
(1, 1, 2),
(2, 2, 3),
(3, 4, 4),
(4, 2, 2),
(5, 5, 3),
(11, 1, 5),
(12, 4, 2),
(13, 5, 3),
(14, 3, 7),
(15, 2, 6);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adressepostale`
--
ALTER TABLE `adressepostale`
  ADD PRIMARY KEY (`id_ap`);

--
-- Index pour la table `biere`
--
ALTER TABLE `biere`
  ADD PRIMARY KEY (`id_biere`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `id_ap` (`id_ap`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD PRIMARY KEY (`id_commande`,`id_biere`),
  ADD KEY `id_biere` (`id_biere`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adressepostale`
--
ALTER TABLE `adressepostale`
  MODIFY `id_ap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `biere`
--
ALTER TABLE `biere`
  MODIFY `id_biere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
