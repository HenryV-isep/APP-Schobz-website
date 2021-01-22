-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 22, 2021 at 02:27 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: schobz_data_demo
--

-- --------------------------------------------------------

--
-- Table structure for table personne_inscription
--

CREATE TABLE personne_inscription (
  id_personne int(11) NOT NULL,
  genre varchar(255) DEFAULT NULL,
  nom varchar(255) DEFAULT NULL,
  prenom varchar(255) DEFAULT NULL,
  datedenaissance date DEFAULT NULL,
  mail varchar(255) DEFAULT NULL,
  motdepasse text NOT NULL,
  numerodepermis text,
  numeroautoecole text,
  nomautoecole varchar(255) DEFAULT NULL,
  nouveaumotdepasse text,
  numerodetelephone varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table personne_inscription
--

INSERT INTO personne_inscription (id_personne, genre, nom, prenom, datedenaissance, mail, motdepasse, numerodepermis, numeroautoecole, nomautoecole, nouveaumotdepasse, numerodetelephone) VALUES
(13, 'Homme', 'test', 'test', '1111-11-11', 'test@test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1234', NULL, NULL, NULL),
(15, 'Homme', 'Bossard', 'Gabin', '1999-10-05', 'gabinbossard@laposte.net', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '123456789', NULL, NULL, NULL),
(16, 'Homme', 'Bossard', 'nathalie', '1111-11-11', 'agagspotify19@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '23', NULL, NULL, NULL),
(17, 'Homme', 'gabinou', 'bobo', '1999-10-05', 'gabinou@laposte.net', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '123456789', '123456', NULL, NULL, NULL),
(18, 'Femme', 'sebillotte', 'juliette', '2000-11-20', 'juliette.sebillotte@gmail.com', 'c623efc3946f3d4d7b8dd68587b96aff8372f92d', '76496597456', '465', NULL, NULL, NULL),
(19, 'Homme', 'leroy', 'jb', '2000-09-14', 'jb.leroy@ftr.bn', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1234567', '1234567', NULL, NULL, NULL),
(20, 'Homme', 'mimi', 'Ambrosio', '2000-03-20', 'zizi@php.fr', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '&é\"\'(§', '12345', NULL, NULL, NULL),
(21, 'Homme', 'Bossard', 'Gabin', '1111-11-11', 'agagspotify16@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'sdfg', '123456', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table personne_inscription
--
ALTER TABLE personne_inscription
  ADD PRIMARY KEY (id_personne);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table personne_inscription
--
ALTER TABLE personne_inscription
  MODIFY id_personne int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;