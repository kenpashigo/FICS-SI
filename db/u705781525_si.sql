-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Fev-2017 às 07:16
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
-- Estrutura da tabela `si_posts`
--

CREATE TABLE `si_posts` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  `data` varchar(200) NOT NULL,
  `hora` varchar(200) NOT NULL,
  `postador` varchar(200) NOT NULL,
  `materia` varchar(200) NOT NULL,
  `download` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `si_posts`
--

INSERT INTO `si_posts` (`id`, `titulo`, `descricao`, `imagem`, `arquivo`, `data`, `hora`, `postador`, `materia`, `download`) VALUES
(36, 'TESTE DE NAO DOWNLOAD', 'TESTE DE NAO DOWNLOAD', './uploads/1950.png', '', '17/02/2017', '02:14:19', 'Paulo Marques', 'Probabilidade e Estatística', ''),
(30, 'Material de Java', 'Livro: Use a cabeça Java', './uploads/IMG-20170207-WA0001.jpg', '', '08/02/2017', '12:07:13', 'Paulo Marques', 'Linguagem de Programação I', 'www.docs.google.com/uc?id=0BwYmbMcHNcSwMFJ0ZTZZbnZuUVU&export=download'),
(31, 'Java - Como programar - 10ª edição', 'Livro: Java como programar', './uploads/IMG-20170207-WA0002.jpg', '', '08/02/2017', '12:18:06', 'Paulo Marques', 'Linguagem de Programação I', 'docs.google.com/uc?id=0BwYmbMcHNcSwMFJ0ZTZZbnZuUVU&export=download'),
(33, 'Elementos de Eletronica Digital - Idoeta e Capuano', 'Livro: Elementos de Eletronica Digital - Idoeta e Capuano, Professor Paulo Marcotti', './uploads/Elementos da eletrônica digital 40ª ED. - Idoeta e Capuano.jpg', './uploads/files/Elementos_de_Eletronica_Digital_-_Idoeta_e_Capuano.pdf', '08/02/2017', '13:49:44', 'Paulo Marques', 'Organização e Arquitetura de Computadores', ''),
(34, 'Titulo atualizado', 'Descrição atualizada', './uploads/_89758521_pasta_de_dente_thinkstock.jpg', './uploads/files/index.php', '17/02/2017', '01:49:47', 'Paulo Marques', 'Linguagem de Programação I', ''),
(35, 'Elementos de Eletronica Digital - Idoeta e Capuano', 'Livro: Elementos de Eletronica Digital - Idoeta e Capuano, Professor Paulo Marcotti', './uploads/Elementos da eletrônica digital 40ª ED. - Idoeta e Capuano.jpg', './uploads/files/Elementos_de_Eletronica_Digital_-_Idoeta_e_Capuano.pdf', '17/02/2017', '01:40:19', 'Paulo Marques', 'Estrutura de Dados I', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `si_reclamacoes`
--

CREATE TABLE `si_reclamacoes` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `materia` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `duvida` text NOT NULL,
  `data` varchar(200) NOT NULL,
  `hora` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `si_reclamacoes`
--

INSERT INTO `si_reclamacoes` (`id`, `nome`, `materia`, `titulo`, `duvida`, `data`, `hora`) VALUES
(17, 'o', 'Metodologia de Pesquisa', 'sd', 'Oloco', '04/02/2017', '04:53:53'),
(18, 'o', 'Metodologia de Pesquisa', 'sd', 'Oloco', '04/02/2017', '04:54:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `si_semestres`
--

CREATE TABLE `si_semestres` (
  `id` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `materia` varchar(200) NOT NULL,
  `professor` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `si_semestres`
--

INSERT INTO `si_semestres` (`id`, `semestre`, `materia`, `professor`) VALUES
(1, 3, 'Escolha uma matéria', ''),
(2, 3, 'Linguagem de Programação I', 'GALVEZ GONÇALVES'),
(3, 3, 'Metodologia da Pesquisa', 'SANDRA MARA'),
(4, 3, 'Sistemas de Informação Gerenciais I', 'CARLOS OLIVIERO'),
(5, 3, 'Estrutura de Dados I', 'MARIA EMILIA'),
(6, 3, 'Probabilidade e Estatística', 'MARCO LIMA'),
(7, 3, 'Organização e Arquitetura de Computadores', 'PAULO MARCOTTI'),
(15, 1, 'Matemática Básica', 'MARCIA PRADO'),
(9, 1, 'Lógica de Programação I', 'CARLOS OLIVIERO'),
(10, 1, 'Introdução à Ciência da Computação I', 'PAULO MARCOTTI'),
(11, 1, 'Fundamentos de Economia', 'ANA JANSEN'),
(12, 1, 'Introdução à Tecnologia Web I (LABORATÓRIO)', 'GALVEZ GONÇALVES'),
(13, 1, 'Interação Humano-Computador I (IHC)', 'HELOISA HELENA'),
(14, 1, 'Comunicação Empresarial', 'HELOISA HELENA'),
(8, 1, 'Escolha uma matéria', ''),
(23, 2, 'Introdução à Tecnologia Web II', 'CARLOS OLIVIERO'),
(17, 2, 'Matemática Discreta', 'MARCIA PRADO'),
(18, 2, 'Fundamentos de Administração', 'ROBERTO LOUREIRO'),
(19, 2, 'Introdução à Ciência da Computação 2', 'PAULO MARCOTTI'),
(16, 2, 'Escolha uma matéria', ''),
(20, 2, 'Lógica de Programação II', 'MARIA EMILIA'),
(21, 2, 'Interação Humano-Computador II (IHC)', 'HELOISA HELENA'),
(22, 2, 'Prática de Produção de Textos', 'HELOISA HELENA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `si_usuarios`
--

CREATE TABLE `si_usuarios` (
  `id` int(11) NOT NULL,
  `login` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `sessao` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `si_usuarios`
--

INSERT INTO `si_usuarios` (`id`, `login`, `password`, `sessao`) VALUES
(1, 'paulohsmarques@gmail.com', 'f11f4200c89062108636829fa13a4516', ''),
(2, 'priscila@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `si_posts`
--
ALTER TABLE `si_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_reclamacoes`
--
ALTER TABLE `si_reclamacoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_semestres`
--
ALTER TABLE `si_semestres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_usuarios`
--
ALTER TABLE `si_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `si_posts`
--
ALTER TABLE `si_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `si_reclamacoes`
--
ALTER TABLE `si_reclamacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `si_semestres`
--
ALTER TABLE `si_semestres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `si_usuarios`
--
ALTER TABLE `si_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
