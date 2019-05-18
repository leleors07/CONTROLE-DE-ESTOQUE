-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Maio-2019 às 20:33
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_c`
--

CREATE TABLE `cadastro_c` (
  `id_compra` int(11) NOT NULL,
  `fornecedor` varchar(45) DEFAULT NULL,
  `produto` varchar(45) DEFAULT NULL,
  `valor` double(10,2) DEFAULT NULL,
  `tamanho` char(3) DEFAULT NULL,
  `cor` char(5) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_c`
--

INSERT INTO `cadastro_c` (`id_compra`, `fornecedor`, `produto`, `valor`, `tamanho`, `cor`, `quantidade`) VALUES
(1, 'ATACADAO', 'BLUSA', 20.00, 'P', 'VERDE', 5),
(2, 'ATACADAO', 'BLUSA', NULL, 'P', 'VERDE', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_c`
--
ALTER TABLE `cadastro_c`
  ADD PRIMARY KEY (`id_compra`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_c`
--
ALTER TABLE `cadastro_c`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
