-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Maio-2019 às 20:47
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_f`
--

CREATE TABLE `cadastro_f` (
  `codigo` int(11) NOT NULL,
  `nome_da_empresa` varchar(45) NOT NULL,
  `cnpj` int(14) NOT NULL,
  `email` varchar(45) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `comercial` int(11) NOT NULL,
  `celular` int(11) NOT NULL,
  `telefone_recado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro_f`
--

INSERT INTO `cadastro_f` (`codigo`, `nome_da_empresa`, `cnpj`, `email`, `endereco`, `comercial`, `celular`, `telefone_recado`) VALUES
(6, 'Feira dos importados', 1, 'mauricio@gmail.com', 'rua 50 casa 210 bairro vila nova SÃO SEBASTIÃO DF', 2147483647, 2147483647, 2147483647),
(7, 'Câmara dos deputados ', 2, 'leonardo@gmail.com', 'asa sul', 2147483647, 2147483647, 2147483647),
(8, 'Secretaria de saúde ', 34343465, 'sesdf@gmail.com', 'asa norte', 2147483647, 2147483647, 2147483647),
(9, 'GEAP ', 61616161, 'geap@gmail.com', 'octagonal ', 611110101, 2147483647, 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_c`
--
ALTER TABLE `cadastro_c`
  ADD PRIMARY KEY (`id_compra`);

--
-- Indexes for table `cadastro_f`
--
ALTER TABLE `cadastro_f`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_c`
--
ALTER TABLE `cadastro_c`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cadastro_f`
--
ALTER TABLE `cadastro_f`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
