-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jul-2020 às 23:50
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sos_ajuda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `id` int(10) NOT NULL,
  `paciente` varchar(100) NOT NULL,
  `turno` varchar(10) NOT NULL,
  `especialista` varchar(30) NOT NULL,
  `data` date NOT NULL,
  `motivo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`id`, `paciente`, `turno`, `especialista`, `data`, `motivo`) VALUES
(30, 'Guilherme', 'Matutino', 'Oftalmologista', '2020-07-29', 'Visão embaçada'),
(31, 'Marta', 'Noturno', 'Dermatologista', '2020-07-30', 'Queda de cabelo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(200) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `dataNascimento` date NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `cep` int(10) NOT NULL,
  `numContato` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `dataNascimento`, `email`, `senha`, `endereco`, `cidade`, `estado`, `cep`, `numContato`) VALUES
(3, 'Guilherme Aparecido', 'de Goes', '2000-01-01', 'guilherme@anhembi.com', 'gui123', 'Rua do Guilherme, 010', 'São Paulo', 'SP', 11111, 2147483647),
(6, 'Martha', 'Nielsen', '2020-06-27', 'martha@gmail.com', 'm1234', 'Rua da Marta, 010', 'Winden', 'SP', 15948753, 2147483647),
(7, 'José', 'Sousa', '2020-06-09', 'jose@anhembi.com', 'jose123', 'Rua do José, 010', 'São Paulo', 'SP', 8855644, 2147483647);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
