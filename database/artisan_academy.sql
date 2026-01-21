-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 21 jan. 2026 à 00:38
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
-- Base de données : `artisan_academy`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `formateur_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `description`, `formateur_id`, `created_at`, `photo`) VALUES
(1, 'bois ', '', 2, '2026-01-18 12:56:15', NULL),
(2, 'art', 'jnmoin', 2, '2026-01-18 13:11:55', '1768741915_WhatsApp Image 2026-01-13 at 9.43.38 PM.jpeg'),
(3, 'shaymaa', 'vdd', 2, '2026-01-20 12:04:33', '1768910673_WhatsApp Image 2026-01-19 at 7.46.43 PM.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id` int(11) NOT NULL,
  `titre` varchar(150) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `img_url` varchar(255) DEFAULT 'default-course.jpg',
  `prix` decimal(10,2) DEFAULT 0.00,
  `duree` int(11) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `formateur_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `titre`, `description`, `img_url`, `prix`, `duree`, `ville`, `client_id`, `formateur_id`, `category_id`) VALUES
(8, 'Menuiserie Traditionnelle', 'Apprenez le travail du bois de cèdre.', 'bois.jpg', 450.00, 12, 'Casablanca', NULL, NULL, 1),
(9, 'Art de la Céramique', 'Modelage et tournage de l\'argile.', 'ceramique.jpg', 350.00, 8, 'Casablanca', NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `formateurs`
--

CREATE TABLE `formateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `specialite` varchar(100) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `formateurs`
--

INSERT INTO `formateurs` (`id`, `nom`, `prenom`, `email`, `telephone`, `specialite`, `ville`, `date_naissance`) VALUES
(2, 'a', 'elkhadraoui', 'marwarafik893@gmail.com', '05616986', NULL, 'casa', '2026-01-27');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `formateur_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `date_reservation` date NOT NULL,
  `heure_reservation` time NOT NULL,
  `statut` enum('en_attente','confirmee','annulee') DEFAULT 'en_attente',
  `prix` decimal(10,2) DEFAULT 0.00,
  `commentaire` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `client_id`, `formateur_id`, `category_id`, `date_reservation`, `heure_reservation`, `statut`, `prix`, `commentaire`, `created_at`, `updated_at`) VALUES
(1, 3, 7, 2, '2026-02-10', '14:00:00', 'confirmee', 0.00, 'Besoin cours urgent', '2026-01-19 10:46:38', '2026-01-19 10:46:55'),
(2, 2, 2, 1, '2026-01-20', '12:02:00', 'en_attente', 0.00, 'nminù', '2026-01-19 11:00:39', NULL),
(3, 2, 2, 1, '2026-01-22', '19:07:00', 'en_attente', 0.00, 'qvgevz', '2026-01-19 18:03:36', NULL),
(5, 12, 2, 1, '2026-01-10', '22:17:00', 'en_attente', 0.00, 'd', '2026-01-20 21:13:42', NULL),
(6, 12, 2, 1, '2026-01-11', '01:14:00', 'en_attente', 0.00, 'dd', '2026-01-20 21:14:19', NULL),
(7, 12, 2, 1, '2026-01-15', '22:19:00', 'en_attente', 0.00, 'dd', '2026-01-20 21:16:08', NULL),
(8, 13, 2, 1, '2026-01-24', '23:30:00', 'en_attente', 0.00, '', '2026-01-20 22:24:18', NULL),
(9, 13, 2, 1, '2026-01-30', '03:24:00', 'en_attente', 0.00, 'gbff', '2026-01-20 22:24:39', NULL),
(10, 13, 2, 1, '2026-01-30', '23:29:00', 'en_attente', 0.00, 'hgjkjf', '2026-01-20 22:26:49', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `prenom` varchar(100) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `role` enum('admin','client','formateur') DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `prenom`, `telephone`, `ville`, `date_naissance`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', '1234', '2026-01-17 13:57:57', NULL, NULL, NULL, NULL, 'client'),
(2, 'a', 'client@test.com', '1234', '2026-01-17 16:22:15', NULL, NULL, NULL, NULL, 'client'),
(3, 'dz', 'ss@gmail.com', '$2y$10$vQMbR84qo8aFfmnz7ZG4fu/F.bQbgDGh1lQXNjUBEB1HlA74OBpIy', '2026-01-17 20:08:40', 'elkhadraoui', '05616986', 'casa', '2026-01-29', 'client'),
(5, 'q', 'shima.200e@gmail.com', NULL, '2026-01-17 20:25:37', 'elkhadraoui', '05616986', 'casa', '2026-01-27', 'formateur'),
(7, NULL, 'client@client.com', '$2y$10$dJ4SX1t.qUhT4wkFHjjrNekf91IU7g6NRZh59h7bZSaLmk7iFFin.', '2026-01-18 11:01:29', 'IGA', '05616986', 'casa', '2026-01-27', 'client'),
(9, NULL, 'marwarafik893@gmail.com', '$2y$10$7q1M1F0au2wzzlXLzIg1HO5wdv2v04IGmfWv6f2Le6kEjZRT8hXuO', '2026-01-19 18:20:10', 'shaymaa ', '05616986', 'casa', '2026-01-27', 'client'),
(10, NULL, 'mehdirah31@gmail.com', '$2y$10$0KJtsw6Lnz822f5iZj7FF.wfdwalm4YaurTBmSZPJuUQpV5XfY7n2', '2026-01-20 21:05:09', 'Mehdi', '0680254842', 'kklq', '0000-00-00', 'client'),
(11, 'Rahhali', 'mehdirah311@gmail.com', '$2y$10$ZNwxuBGpdfQiCrZIc2lbCejaTbzVNIxVUuj0cJrKXHxzG9NItGJ0i', '2026-01-20 21:13:00', 'Mehdi', '0680254842', 'kklq', '2026-01-09', 'client'),
(12, 'Rahhali', 'mehdirah312@gmail.com', '$2y$10$ntGihMQI3SpIyEQPCK.nAuLzl4.WEpf4MdRwiwQtw34Lsg4EoCv6a', '2026-01-20 21:13:15', 'Mehdi', '0680254842', 'kklq', '2026-01-09', 'client'),
(13, NULL, 'nab@gmail.com', '$2y$10$e5W/IAyER9TjO9TAX9Vek.nmErC/K4DNgsiDmbPPNCs.tFiT1iFGm', '2026-01-20 22:23:48', NULL, '0680254842', 'kklq', NULL, 'client');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category_formateur` (`formateur_id`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `formateur_id` (`formateur_id`);

--
-- Index pour la table `formateurs`
--
ALTER TABLE `formateurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reservation_client` (`client_id`),
  ADD KEY `fk_reservation_formateur` (`formateur_id`),
  ADD KEY `fk_reservation_category` (`category_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `formateurs`
--
ALTER TABLE `formateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `fk_category_formateur` FOREIGN KEY (`formateur_id`) REFERENCES `formateurs` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cours_ibfk_2` FOREIGN KEY (`formateur_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `fk_reservation_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_reservation_client` FOREIGN KEY (`client_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_reservation_formateur` FOREIGN KEY (`formateur_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
