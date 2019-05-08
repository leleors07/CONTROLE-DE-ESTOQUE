-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Abr-2019 às 15:53
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

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
(9, 'GEAP ', 61616161, 'geap@gmail.com', 'octagonal ', 611110101, 2147483647, 2147483647),
(10, 'aaaaaaaaaaa', 0, 'aaaaaaaaaaa', 'aaaaaaaa', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_f`
--
ALTER TABLE `cadastro_f`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_f`
--
ALTER TABLE `cadastro_f`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
