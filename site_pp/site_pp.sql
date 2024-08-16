-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/06/2024 às 14:42
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `site_pp`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_clientes`
--

CREATE TABLE `cadastro_clientes` (
  `codigo` int(11) NOT NULL,
  `nome_cliente` varchar(45) NOT NULL,
  `email_cliente` varchar(45) NOT NULL,
  `senha_cliente` varchar(255) NOT NULL,
  `sexo_cliente` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro_clientes`
--

INSERT INTO `cadastro_clientes` (`codigo`, `nome_cliente`, `email_cliente`, `senha_cliente`, `sexo_cliente`) VALUES
(41, 'jacques', 'jacquespz@gmail.com', '2151', 'M'),
(57, 'Rodrigo Pereira', 'rodrigopereira@gmail.com', '$2y$10$o70i0COltxnvL/H6Wjius.gmya6u0R7BQfPK1soEalrxRAIb5xuHO', 'M'),
(58, 'Gerson', 'gerson@gmail.com', '$2y$10$91ePz97gBuvBTcIoTxEKXu4mZBAK37IHWBXZ2IvokRdqATtOKRe0.', 'M'),
(60, 'Raul  Silva', 'raul@gmail.com', '$2y$10$wmE5jXuDaSCknlQl4Bfmzen2bYINE3AKXguYrgnw44vXkWpIcA8zG', 'M'),
(61, 'Gustavo', 'gustavo@gmail.com', '$2y$10$/cai4hSx39v87B9BMUthqOjkTjnbBSfE7jRuVla0R4Xki/8FWCFOy', 'M');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro_clientes`
--
ALTER TABLE `cadastro_clientes`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_clientes`
--
ALTER TABLE `cadastro_clientes`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
