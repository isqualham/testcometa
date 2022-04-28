-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28-Abr-2022 às 00:51
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `test_cometa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `cep` varchar(14) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `ibge` varchar(14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`nome`, `telefone`, `cpf`, `cep`, `rua`, `bairro`, `cidade`, `estado`, `ibge`) VALUES
('manoel', '65-999117323', '02345491140', '78217-000', 'Rua Joaquim Murtinho', 'Cavalhada III', 'CÃ¡ceres', 'MT', '5102504'),
('higor', '65-999117425', '02345491120', '78217-000', 'Rua Joaquim Murtinho', 'Cavalhada III', 'CÃ¡ceres', 'MT', '5102504');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `cnpj` varchar(15) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `ibge` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`nome`, `telefone`, `cnpj`, `cep`, `rua`, `bairro`, `cidade`, `estado`, `ibge`) VALUES
('william freitas', '65-999117323', '999.999/0001-02', '78200000', 'Rua Joaquim Murtinho', 'Cavalhada III', 'CÃCERES', 'Mato Grosso', '5102504'),
('manoel', '65-999127323', '999.999/0001-99', '78217-000', 'Rua Joaquim Murtinho', 'Cavalhada III', 'CÃ¡ceres', 'MT', '5102504');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
