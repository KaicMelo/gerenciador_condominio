-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Set-2020 às 17:11
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.7


create database metosltda;
use metosltda;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `metosltda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `loginvalidate`
--

CREATE TABLE `loginvalidate` (
  `id` int(11) NOT NULL,
  `user` varchar(40) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `cod_permissions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `loginvalidate`
--

INSERT INTO `loginvalidate` (`id`, `user`, `senha`, `status`, `cod_permissions`) VALUES
(1, 'user', '@user_', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `morador`
--

CREATE TABLE `morador` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `sobre_nome` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `bloco` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `apartamento` int(11) DEFAULT NULL,
  `proprietarioLocatario` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `rg` int(11) DEFAULT NULL,
  `ddd` int(11) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `email` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `telefoneResidencial` int(11) DEFAULT NULL,
  `telefoneComercial` int(11) DEFAULT NULL,
  `cidade` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `profissao` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `nomeUrgencia` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `parentescoUrgencia` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `celularUrgencia` int(11) DEFAULT NULL,
  `telefoneFixoUrgencia` int(11) DEFAULT NULL,
  `nomeUrgencia1` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `parentescoUrgencia1` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `celularUrgencia1` int(11) DEFAULT NULL,
  `telefoneFixoUrgencia1` int(11) DEFAULT NULL,
  `nomeMoradoresResidencia` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `parentescoMoradoresResidencia` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `nascimentoMoradoresResidencia` date DEFAULT NULL,
  `nomeMoradoresResidencia1` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `parentescoMoradoresResidencia1` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `nascimentoMoradoresResidencia1` date DEFAULT NULL,
  `nomeMoradoresResidencia2` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `parentescoMoradoresResidencia2` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `nascimentoMoradoresResidencia2` date DEFAULT NULL,
  `nomeMoradoresResidencia3` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `parentescoMoradoresResidencia3` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `nascimentoMoradoresResidencia3` date DEFAULT NULL,
  `nomeMoradoresResidencia4` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `parentescoMoradoresResidencia4` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `nascimentoMoradoresResidencia4` date DEFAULT NULL,
  `nomeEmpregada` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `rgEmpregada` int(11) DEFAULT NULL,
  `nomeEmpregada1` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `rgEmpregada1` int(11) DEFAULT NULL,
  `tipoVeiculo` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `marcaModeloVeiculo` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `vagaVeiculo` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `digVeiculo` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `numVeiculo` int(11) DEFAULT NULL,
  `tipoVeiculo1` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `marcaModeloVeiculo1` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `vagaVeiculo1` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `digVeiculo1` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `numVeiculo1` int(11) DEFAULT NULL,
  `tipoVeiculo2` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `marcaModeloVeiculo2` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `vagaVeiculo2` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `digVeiculo2` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `numVeiculo2` int(11) DEFAULT NULL,
  `especieAnimais` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `quantidadeAnimais` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissions`
--

CREATE TABLE `permissions` (
  `id_permissions` int(11) DEFAULT NULL,
  `cod_permissions` int(11) NOT NULL,
  `type_permissions` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `permissions`
--

INSERT INTO `permissions` (`id_permissions`, `cod_permissions`, `type_permissions`) VALUES
(1, 1, 'Administrador'),
(2, 2, 'Supervisor'),
(3, 3, 'Usuário');

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitantes`
--

CREATE TABLE `visitantes` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `sobre_nome` varchar(45) NOT NULL,
  `bloco` varchar(5) NOT NULL,
  `apartamento` int(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  `rg` int(11) NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  `ddd` int(11) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `telefone_residencial` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `loginvalidate`
--
ALTER TABLE `loginvalidate`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `morador`
--
ALTER TABLE `morador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`cod_permissions`);

--
-- Índices para tabela `visitantes`
--
ALTER TABLE `visitantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `loginvalidate`
--
ALTER TABLE `loginvalidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `morador`
--
ALTER TABLE `morador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `visitantes`
--
ALTER TABLE `visitantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
