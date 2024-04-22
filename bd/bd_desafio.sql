-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Abr-2024 às 10:18
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_desafio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_designacao`
--

CREATE TABLE `tb_designacao` (
  `cod_designacao` int(11) NOT NULL,
  `nome_designacao` varchar(50) NOT NULL,
  `funcional_designacao` int(10) NOT NULL,
  `Nfuncional_designacao` int(10) NOT NULL,
  `total_designacao` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_designacao`
--

INSERT INTO `tb_designacao` (`cod_designacao`, `nome_designacao`, `funcional_designacao`, `Nfuncional_designacao`, `total_designacao`) VALUES
(1, 'Salas de aulas Teóricas', 0, 0, 0),
(2, 'Salas de informática', 1, 1, 1),
(3, 'Laboratórios de Automação', 1, 1, 1),
(4, 'Laboratórios de Biologia', 1, 1, 1),
(5, 'Laboratórios de CAD', 1, 1, 1),
(6, 'Laboratórios de CNC', 1, 1, 1),
(7, 'Laboratórios de Electrónica', 1, 1, 1),
(8, 'Laboratórios de Energias Renováveis', 1, 1, 1),
(9, 'Laboratórios de física', 1, 1, 1),
(10, 'Laboratórios de Frio e Climatização', 1, 1, 1),
(11, 'Laboratórios de instalações Eléctricas', 1, 1, 1),
(12, 'Laboratórios de Máquinas Eléctricas', 1, 1, 1),
(13, 'Laboratórios de Metalomecânica', 1, 1, 1),
(14, 'Laboratórios de Química', 1, 1, 1),
(15, 'Laboratórios de Telecomunicações', 1, 1, 1),
(16, 'Oficinas de Construções Mecânicas', 1, 1, 1),
(17, 'Oficinas de Máquinas e Motores', 1, 1, 1),
(18, 'Oficinas de Soldadura', 1, 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_designacao`
--
ALTER TABLE `tb_designacao`
  ADD PRIMARY KEY (`cod_designacao`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_designacao`
--
ALTER TABLE `tb_designacao`
  MODIFY `cod_designacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
