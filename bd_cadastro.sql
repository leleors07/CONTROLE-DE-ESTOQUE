-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Maio-2019 às 04:04
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
-- Estrutura da tabela `bd_addprodutos`
--

CREATE TABLE `bd_addprodutos` (
  `codigopd` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `preco custo` double(8,2) DEFAULT NULL,
  `preco venda` double(8,2) DEFAULT NULL,
  `tamanhopd` char(2) DEFAULT NULL,
  `qtd_pd` int(5) DEFAULT NULL,
  `tipo` varchar(25) DEFAULT NULL,
  `cor` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(2, 'ATACADAO', 'BLUSA', NULL, 'P', 'VERDE', 4),
(29, 'alelia', 'short', 22.00, 'p', 'preta', 2),
(30, 'mauricio', 'macacao', 35.00, 'm', 'azul', 6),
(37, 'alelia', '', 22.00, '', '', 0),
(38, 'leonardo ribeiro', 'blusao', 60.00, 'GG', 'verme', 2);

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
-- Indexes for table `bd_addprodutos`
--
ALTER TABLE `bd_addprodutos`
  ADD PRIMARY KEY (`codigopd`),
  ADD KEY `fk_produto_compra` (`nome`);

--
-- Indexes for table `cadastro_c`
--
ALTER TABLE `cadastro_c`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_qunatidade_fk` (`quantidade`);

--
-- Indexes for table `cadastro_f`
--
ALTER TABLE `cadastro_f`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `id_fornecedor_fk` (`nome_da_empresa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bd_addprodutos`
--
ALTER TABLE `bd_addprodutos`
  MODIFY `codigopd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cadastro_c`
--
ALTER TABLE `cadastro_c`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `cadastro_f`
--
ALTER TABLE `cadastro_f`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
