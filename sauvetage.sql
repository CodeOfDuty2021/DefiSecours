-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 06:24 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sauvetage`
--

-- --------------------------------------------------------

--
-- Table structure for table `acte_sauvetage`
--

CREATE TABLE `acte_sauvetage` (
  `id_acte` int(5) NOT NULL,
  `bateau` varchar(50) DEFAULT NULL,
  `date` date NOT NULL,
  `lieu` varchar(50) NOT NULL,
  `capitaine_bateau` int(11) DEFAULT NULL,
  `sauveteurs` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `nombre_sauves` int(11) DEFAULT NULL,
  `nombre_decedes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personnes_sauves`
--

CREATE TABLE `personnes_sauves` (
  `id_p` int(5) NOT NULL,
  `nomSauvee` varchar(50) NOT NULL,
  `id_acte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sauveteurs`
--

CREATE TABLE `sauveteurs` (
  `id_sauveteur` int(5) NOT NULL,
  `nomSauveteur` varchar(50) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `description` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temoignage`
--

CREATE TABLE `temoignage` (
  `text` text NOT NULL,
  `auteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_u` int(11) NOT NULL,
  `nom_prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acte_sauvetage`
--
ALTER TABLE `acte_sauvetage`
  ADD PRIMARY KEY (`id_acte`),
  ADD KEY `const_sauveteur` (`capitaine_bateau`);

--
-- Indexes for table `personnes_sauves`
--
ALTER TABLE `personnes_sauves`
  ADD KEY `const_acte` (`id_acte`);

--
-- Indexes for table `sauveteurs`
--
ALTER TABLE `sauveteurs`
  ADD PRIMARY KEY (`id_sauveteur`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acte_sauvetage`
--
ALTER TABLE `acte_sauvetage`
  MODIFY `id_acte` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sauveteurs`
--
ALTER TABLE `sauveteurs`
  MODIFY `id_sauveteur` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acte_sauvetage`
--
ALTER TABLE `acte_sauvetage`
  ADD CONSTRAINT `const_sauveteur` FOREIGN KEY (`capitaine_bateau`) REFERENCES `sauveteurs` (`id_sauveteur`) ON DELETE CASCADE;

--
-- Constraints for table `personnes_sauves`
--
ALTER TABLE `personnes_sauves`
  ADD CONSTRAINT `const_acte` FOREIGN KEY (`id_acte`) REFERENCES `acte_sauvetage` (`id_acte`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
