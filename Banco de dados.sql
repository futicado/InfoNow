-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/05/2023 às 00:11
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `infonow`
--
CREATE DATABASE IF NOT EXISTS `infonow` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `infonow`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbhistorico`
--

CREATE TABLE `tbhistorico` (
  `codigoh` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `usercad` varchar(60) NOT NULL,
  `codigoItem` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbitens`
--

CREATE TABLE `tbitens` (
  `codigo` int(11) NOT NULL,
  `nome` int(11) NOT NULL,
  `trinca` int(11) NOT NULL,
  `pintura` int(11) NOT NULL,
  `corrosao` int(11) NOT NULL,
  `cabos` int(11) NOT NULL,
  `travas` int(11) NOT NULL,
  `oleo` int(11) NOT NULL,
  `vazamento` int(11) NOT NULL,
  `pressoleo` int(11) NOT NULL,
  `rotacao` int(11) NOT NULL,
  `partesoltas` int(11) NOT NULL,
  `usercad` int(11) NOT NULL,
  `conformidade` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbnome`
--

CREATE TABLE `tbnome` (
  `codigonome` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `Pkcodu` int(11) NOT NULL,
  `Nomeu` varchar(30) NOT NULL,
  `emailu` varchar(30) NOT NULL,
  `senhau` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbhistorico`
--
ALTER TABLE `tbhistorico`
  ADD PRIMARY KEY (`codigoh`);

--
-- Índices de tabela `tbitens`
--
ALTER TABLE `tbitens`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `usercad` (`usercad`),
  ADD KEY `nome` (`nome`);

--
-- Índices de tabela `tbnome`
--
ALTER TABLE `tbnome`
  ADD PRIMARY KEY (`codigonome`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Índices de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`Pkcodu`),
  ADD UNIQUE KEY `emailu` (`emailu`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbitens`
--
ALTER TABLE `tbitens`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `tbnome`
--
ALTER TABLE `tbnome`
  MODIFY `codigonome` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `Pkcodu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbitens`
--
ALTER TABLE `tbitens`
  ADD CONSTRAINT `tbitens_ibfk_1` FOREIGN KEY (`usercad`) REFERENCES `tbusuario` (`Pkcodu`),
  ADD CONSTRAINT `tbitens_ibfk_2` FOREIGN KEY (`nome`) REFERENCES `tbnome` (`codigonome`),
  ADD CONSTRAINT `tbitens_ibfk_3` FOREIGN KEY (`nome`) REFERENCES `tbnome` (`codigonome`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
