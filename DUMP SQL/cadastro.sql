-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Ago-2017 às 05:38
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `cliente_nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente_sexo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente_telefone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DataEntrada` date NOT NULL,
  `DataSaida` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cliente_id`, `cliente_nome`, `cliente_sexo`, `cliente_telefone`, `cliente_email`, `DataEntrada`, `DataSaida`) VALUES
(97, 'Jackson de Souza Iackusch', 'M', 'jacksoniackush@gmail.com', '47991413336', '2017-08-17', '2017-08-17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordem`
--

CREATE TABLE `ordem` (
  `numerodaos` int(10) UNSIGNED NOT NULL,
  `marcamodelo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `acessorios` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `defeito` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `orcamento` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cliente_idordem` int(10) UNSIGNED NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `ordem`
--

INSERT INTO `ordem` (`numerodaos`, `marcamodelo`, `acessorios`, `defeito`, `orcamento`, `status`, `cliente_idordem`, `created_at`, `updated_at`) VALUES
(23, 'Samsung E7', 'Sem Chip', 'Tela Trincada. Display liga. Possui marcars de arranhao na capa', '', 'Em AnÃ¡lise', 97, '2017-08-17', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Indexes for table `ordem`
--
ALTER TABLE `ordem`
  ADD PRIMARY KEY (`numerodaos`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cliente_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `ordem`
--
ALTER TABLE `ordem`
  MODIFY `numerodaos` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
