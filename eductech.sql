-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 28 juil. 2023 à 06:08
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `eductech`
--

-- --------------------------------------------------------

--
-- Structure de la table `emploi_du_temps`
--

DROP TABLE IF EXISTS `emploi_du_temps`;
CREATE TABLE IF NOT EXISTS `emploi_du_temps` (
  `id_emploi_du_temps` int NOT NULL AUTO_INCREMENT,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `niveau` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_emploi_du_temps`),
  UNIQUE KEY `start_time` (`start_time`,`end_time`),
  UNIQUE KEY `unique_id_emploi_du_temps` (`id_emploi_du_temps`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `emploi_du_temps`
--

INSERT INTO `emploi_du_temps` (`id_emploi_du_temps`, `start_time`, `end_time`, `niveau`, `date`) VALUES
(2, '07:00:00', '10:00:00', 'L1G1', '2023-07-27'),
(4, '07:00:00', '09:00:00', 'L1G1', '2023-07-24'),
(5, '10:00:00', '14:00:00', 'L1G1', '2023-07-24'),
(6, '09:00:00', '12:53:00', 'L1G2', '2023-07-15'),
(8, '14:00:00', '16:30:00', 'L1G2', '2023-07-22'),
(1, '13:00:00', '17:00:00', 'L1G2', '2023-07-15'),
(9, '14:00:00', '16:00:00', 'L1G1', '2023-07-27'),
(3, '08:30:00', '13:30:00', 'L1G2', '2023-07-29');

-- --------------------------------------------------------

--
-- Structure de la table `emploi_du_temps_des_modules`
--

DROP TABLE IF EXISTS `emploi_du_temps_des_modules`;
CREATE TABLE IF NOT EXISTS `emploi_du_temps_des_modules` (
  `id_module` int NOT NULL,
  `id_emploi_du_temps` int NOT NULL,
  UNIQUE KEY `unique_id_emploi_du_temps` (`id_emploi_du_temps`),
  KEY `edtm_edt1_FK` (`id_emploi_du_temps`),
  KEY `edtm_modules1_FK` (`id_module`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `emploi_du_temps_des_modules`
--

INSERT INTO `emploi_du_temps_des_modules` (`id_module`, `id_emploi_du_temps`) VALUES
(163, 2),
(150, 4),
(261, 5),
(140, 7),
(120, 6),
(160, 8),
(120, 9),
(120, 10),
(140, 1),
(120, 3);

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `id_etudiant` int NOT NULL AUTO_INCREMENT,
  `nom_etudiant` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nomUtilisateur_etudiant` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `motDePasse_etudiant` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `classe_etudiant` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dateDeNaissance_etudiant` date NOT NULL,
  `adresse_etudiant` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sexe_etudiant` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pere_etudiant` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mere_etudiant` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `contactParent_etudiant` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image_etudiant` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email_etudiant` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_etudiant`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id_etudiant`, `nom_etudiant`, `nomUtilisateur_etudiant`, `motDePasse_etudiant`, `classe_etudiant`, `dateDeNaissance_etudiant`, `adresse_etudiant`, `sexe_etudiant`, `pere_etudiant`, `mere_etudiant`, `contactParent_etudiant`, `image_etudiant`, `email_etudiant`) VALUES
(5, 'Christina', 'Christina', '92109e2189cd79072b7df39317d94fa1', 'L1G1', '1997-04-13', 'Ankadifotsy', 'Féminin', 'Roland', 'Matilde', '0334563428', 'téléchargement (5).jpg', 'christina@gmail.com'),
(1, 'Charles', 'Charles', 'a5410ee37744c574ba5790034ea08f79', 'L1G1', '2003-01-31', 'Ampandrana', 'Masculin', 'Romeo', 'Juliette', '0326589', 'abt1.jpg', 'charles@gmail.com'),
(2, 'koto', 'koto', '078d3317e87e55f93d6111d5e3d308b4', 'L1G2', '2002-10-10', 'Antanandrano', 'Masculin', 'Bema', 'Rasoa', '0326547890', 'images (1).jpg', 'koto@gmail.com'),
(3, 'Stella', 'Stella', 'e64a40ce1e9c2e3bd4bea3d33cd4bfb3', 'L1G1', '2000-05-08', 'Andraharo', 'Féminin', 'Georges', 'Celine', '11233344', 'abt3.jpg', 'Stella@gmail.com'),
(4, 'Max', 'Max', '2ffe4e77325d9a7152f7086ea7aa5114', 'L1G1', '1998-07-30', 'Ankorondrano', 'Masculin', 'Justin', 'Marie', '0345678912', 'images (3).jpg', 'max@gmail.com'),
(6, 'Rova', 'Rova', '36ac754026f110e28019e30cfbe7ea20', 'L1G2', '2001-09-10', 'Ivandry', 'Féminin', 'Marc', 'Louise', '0336787643', 'téléchargement (4).jpg', 'rova@gmail.com'),
(7, 'John', 'John', '61409aa1fd47d4a5332de23cbf59a36f', 'L1G2', '2003-06-01', 'Isotry', 'Masculin', 'Luc', 'Rosa', '0345638912', 'adminprofsin7.jpg', 'john@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `meadmin`
--

DROP TABLE IF EXISTS `meadmin`;
CREATE TABLE IF NOT EXISTS `meadmin` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `nom_admin` varchar(200) NOT NULL,
  `email_admin` varchar(200) NOT NULL,
  `nomUtilisateur_admin` varchar(20) NOT NULL,
  `motDePasse_admin` varchar(200) NOT NULL,
  `image_admin` varchar(200) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `meadmin`
--

INSERT INTO `meadmin` (`id_admin`, `nom_admin`, `email_admin`, `nomUtilisateur_admin`, `motDePasse_admin`, `image_admin`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'in10.jpg'),
(2, 'admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'profsadmin.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `id_module` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `coef` int NOT NULL,
  `duree` time NOT NULL,
  `id_prof` int NOT NULL,
  PRIMARY KEY (`id_module`),
  KEY `modules_profs1_FK` (`id_prof`)
) ENGINE=MyISAM AUTO_INCREMENT=264 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `modules`
--

INSERT INTO `modules` (`id_module`, `nom`, `coef`, `duree`, `id_prof`) VALUES
(110, 'Mathématiques', 4, '40:00:00', 3),
(162, 'web statique', 2, '40:00:00', 1),
(163, 'Réseau', 4, '40:00:00', 4),
(150, 'Introduction BDD', 4, '100:00:00', 2),
(261, 'Powershell', 2, '16:00:00', 5),
(120, 'Systemes d\'exploitation', 2, '06:00:00', 6),
(140, 'Langage C', 3, '21:00:00', 7),
(160, 'Algorithme', 4, '40:00:00', 8);

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `id_note` int NOT NULL AUTO_INCREMENT,
  `examen` varchar(50) NOT NULL,
  `valeur_note` float NOT NULL,
  `appreciation` varchar(50) NOT NULL,
  `id_etudiant` int NOT NULL,
  `id_module` int NOT NULL,
  PRIMARY KEY (`id_note`),
  KEY `notes_etudiants0_FK` (`id_etudiant`),
  KEY `notes_modules1_FK` (`id_module`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`id_note`, `examen`, `valeur_note`, `appreciation`, `id_etudiant`, `id_module`) VALUES
(6, 'Deuxième trimestre', 14, 'bien', 3, 261),
(5, 'Première trimestre', 16, 'Tres-bien', 3, 120),
(7, 'Première trimestre', 10, 'Passable', 4, 140),
(8, 'Deuxième trimestre', 12, 'Assez-bien', 4, 110),
(2, 'Deuxième trimestre', 12, 'Assez-bien', 1, 110),
(1, 'Première trimestre', 17, 'Tres-bien', 1, 162),
(3, 'Première trimestre', 10, 'Passable', 2, 261),
(4, 'Deuxième trimestre', 12, 'Assez-bien', 2, 150),
(10, 'Deuxième trimestre', 9, 'Insuffisant', 5, 261),
(9, 'Première trimestre', 13, 'Assez-bien', 5, 163),
(11, 'Première trimestre', 18, 'Tres-bien', 6, 140),
(12, 'Deuxième trimestre', 17, 'Tres-bien', 6, 160),
(14, 'Deuxième trimestre', 12, 'Assez-bien', 7, 140),
(13, 'Première trimestre', 16, 'Tres-bien', 7, 261),
(15, 'Première trimestre', 2, 'Faible', 2, 163),
(16, 'Deuxième trimestre', 10, 'Passable', 6, 150),
(17, 'Première trimestre', 14, 'Bien', 1, 110);

-- --------------------------------------------------------

--
-- Structure de la table `profs`
--

DROP TABLE IF EXISTS `profs`;
CREATE TABLE IF NOT EXISTS `profs` (
  `id_prof` int NOT NULL AUTO_INCREMENT,
  `nomComplet_prof` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `adresse_prof` varchar(100) NOT NULL,
  `email_prof` varchar(100) NOT NULL,
  `qualification_prof` varchar(100) NOT NULL,
  `sexe_prof` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image_prof` varchar(50) NOT NULL,
  `contact_prof` int NOT NULL,
  PRIMARY KEY (`id_prof`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `profs`
--

INSERT INTO `profs` (`id_prof`, `nomComplet_prof`, `adresse_prof`, `email_prof`, `qualification_prof`, `sexe_prof`, `image_prof`, `contact_prof`) VALUES
(1, 'Nirina RAZONARISOA', 'Ivato', 'nirina@gmail.com', 'doctorat', 'masculin', 'images (2).jpg', 349056789),
(2, 'José RAJAOFERA', 'Andoharanofotsy', 'jose@gmail.com', 'Doctorat', 'masculin', 'téléchargement (2).jpg', 324561295),
(3, 'Hasimbola RANDRIAMISY', 'Nanisana', 'hasimbola@gmail.com', 'Doctorat', 'masculin', 'images.jpg', 348965438),
(4, 'Sitraka RAKOTONDRAMANANA', 'Ankadivato', 'sitraka@gmail.com', 'Doctorat', 'masculin', 'in.jpg', 349076903),
(5, 'RANDRIANASOA Iano', 'Mahamasina', 'iano@gmail.com', 'doctorat', 'masculin', 'téléchargement.jpg', 323467123),
(6, 'ANDRIAVELONERA Alexandre Anselme', 'Faravohitra', 'Anselme@gmail.com', 'doctorat', 'masculin', 'in3.jpg', 336759035),
(7, 'SONIARIMAMY Rochel', 'Ampitatafika', 'rochel@gmai.com', 'doctorat', 'masculin', 'in5.jpg', 327009861),
(8, 'ANDRIANARIMBAHY Lalaniony Dina', 'Ankazomanga', 'dinalalaniony.andrianarimbahy@esti.mg', 'professorat', 'masculin', 'téléchargement (3).jpg', 340978641);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
