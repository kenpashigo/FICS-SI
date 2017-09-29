-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Fev-2017 às 09:38
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u705781525_si`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `si_usuarios`
--

CREATE TABLE `si_usuarios` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `login` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `sessao` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `si_usuarios`
--

INSERT INTO `si_usuarios` (`id`, `name`, `login`, `password`, `sessao`) VALUES
(1, 'Paulo Marques', 'paulohsmarques@gmail.com', '96ce6338dfcb3026f59fda4b4772536bde9b19050551df3ff8eaba1d72625eb83f6cc52617f8e2359b1e8695dcb87ecdea7f39cc64a98d429ca2360eb6c3e9fd', '61cc1cbb2da345a9a12194008e4d685a537904fea82815f8174da7c6ee6bc2611daf35b0e883c1161b5fcda2be648e4fa1e2157da5a768fec0c7521f4a903280'),
(2, 'Priscila Marques', 'priscila@gmail.com', '46b9bcba42d8f6dff775c4563eeb78aada3cc819657e4f1137ffdec0f2c02026c5a269ca5e773544aa23d77d0e8f5f5d4d642d57132660ca20b57b829c0e1ce1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `si_usuarios`
--
ALTER TABLE `si_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `si_usuarios`
--
ALTER TABLE `si_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
