-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 01-Dez-2021 às 17:09
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `carros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcarros`
--

CREATE TABLE IF NOT EXISTS `tbcarros` (
  `idCarro` int(3) NOT NULL,
  `Fabricante` varchar(30) NOT NULL,
  `Modelo` varchar(20) NOT NULL,
  `Ano` varchar(4) NOT NULL,
  `Placa` varchar(7) NOT NULL,
  `Cor` varchar(20) NOT NULL,
  `Comentarios` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcarros`
--

INSERT INTO `tbcarros` (`idCarro`, `Fabricante`, `Modelo`, `Ano`, `Placa`, `Cor`, `Comentarios`) VALUES
(101, 'Chevrolet', 'Chevrolet Cruze', ' 202', 'GGM7L55', 'Preto', 'Novo'),
(102, 'Ferrari', 'Ferrari 458', '2009', 'ZLG9D35', 'Vermelho', 'Seminovo'),
(103, 'Lamborghini ', 'Lamborghini Gallardo', '2004', 'JHE1S86', 'Branco', 'Novo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
