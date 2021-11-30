-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 30-Nov-2021 às 20:18
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `united_banco` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `united_banco`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prova`
--

DROP TABLE IF EXISTS `prova`;
CREATE TABLE IF NOT EXISTS `prova` (
  `idprova` int(255) NOT NULL AUTO_INCREMENT,
  `iduser` int(255) NOT NULL,
  `nomeuser` varchar(255) NOT NULL,
  `nota` int(10) NOT NULL,
  PRIMARY KEY (`idprova`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `prova`
--

INSERT INTO `prova` (`idprova`, `iduser`, `nomeuser`, `nota`) VALUES
(1, 1, 'JoÃ£o Victor Guedes', 9),
(2, 1, 'JoÃ£o Victor Guedes', 10),
(17, 3, 'Alice P. Phillips', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `usuario`, `senha`) VALUES
(1, 'JoÃ£o Victor Guedes', 'joao@gmail.com', 'Heiterere', '$2y$10$mdI.IOZCZ4TWVZ2d6S6O4.VJLiCUavvvPNsGFM9edI4s/gqbYDRma'),
(3, 'Alice P. Phillips', 'AlicePPhillips@dayrep.com', 'Cunningham', '$2y$10$L9mAfCMxBwi5mv0ASpogr.lTq97hSH4PffsZmcDNfeyt7wOxXNGom');