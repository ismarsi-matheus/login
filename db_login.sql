-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/03/2025 às 06:16
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_login`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_pessoa`
--

CREATE TABLE `tb_pessoa` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `ano_nascimento` year(4) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `telefone_1` varchar(15) DEFAULT NULL,
  `telefone_2` varchar(15) DEFAULT NULL,
  `logradouro` varchar(150) DEFAULT NULL,
  `n_casa` int(5) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_pessoa`
--

INSERT INTO `tb_pessoa` (`id`, `nome`, `ano_nascimento`, `cpf`, `telefone_1`, `telefone_2`, `logradouro`, `n_casa`, `bairro`, `cidade`) VALUES
(1, 'Tony Stark', '1970', '12345678900', '19875364864', '998877665', 'Malibu Point, FL', 8810, 'Malibu', 'New York'),
(2, 'Peter Parker', '1995', '98765432100', '111222333', '19997599776', 'Rua Ingram, 20', 3, 'Forest Hills', 'Nova York'),
(3, 'Steve Rogers', '1918', '45678912300', '444555666', NULL, 'Rua Leaman, 569', 1, 'Brooklyn', 'Nova York'),
(4, 'Natasha Romanoff', '1984', '65432198700', '777888999', '770077007', 'Rua 48, 4A', 12, 'Brooklyn Heights', 'Nova York'),
(5, 'Thor Odinson', '1972', '11122233344', '555666777', NULL, 'Asgard Palace', 1, 'Asgard', 'Asgard'),
(6, 'Bruce Banner', '1972', '99988877766', '333444555', NULL, '123 Gamma Avenue', 7, 'Culver City', 'Los Angeles'),
(8, 'Cavanha da Silva ', '2007', '535.241.328', '(19) 99759-', '(19) 99895-', 'Park Dr.,115', 1163, 'Vila Pântano', 'Santa Bárbara D\'Oeste'),
(9, 'Arthur Fleck', '1970', '785.648.464', '(19) 99999-000', '(19) 98888-000', 'Rua do Caos', 666, 'Arkhan', 'Gotham City'),
(10, 'Cavanha Ismarsi', '2007', '098.276.524', '(19) 99876-857', '', 'Park Dr.,1163', 1115, 'Jardim Jerivá', 'Santa Bárbara d\'Oeste'),
(11, 'Eu to Louco da Silva', '2000', '545.478.219', '(19) 87363-535', '(19) 83736-535', 'rua do Hospício', 404, 'Da loucura', 'Santa Bárbara d\'Oeste');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `id_pessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `usuario`, `senha`, `id_pessoa`) VALUES
(1, 'homemDeFerro', 'ferro123', 1),
(2, 'homemAranha', 'teia123', 2),
(3, 'capitaoAmerica', 'euvouLutar', 3),
(4, 'viuvaNegra', 'assassinaVermelha', 4),
(5, 'deusDoTrovao', 'mjolnir123', 5),
(6, 'hulk', 'smash123', 6),
(9, 'ismarsi_matheus', 'cavanha123', 8),
(10, 'coringa_', 'HaHaHa123', 9),
(11, 'xCavanhax', 'Teste123', 10),
(12, 'eutolouco123', 'Courtois01', 11);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pessoa` (`id_pessoa`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD CONSTRAINT `id_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `tb_pessoa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
