-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 13/12/2023 às 18:56
-- Versão do servidor: 10.1.41-MariaDB-0+deb9u1
-- Versão do PHP: 7.0.33-0+deb9u6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `recuperacao`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `idPessoa` int(10) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `dataNascimento` varchar(10) NOT NULL,
  `Sexo` varchar(1) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(4) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `senha` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`idPessoa`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `idPessoa` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(4) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
