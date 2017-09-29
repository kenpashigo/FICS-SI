
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 16/02/2017 às 17:30:55
-- Versão do Servidor: 10.0.28-MariaDB
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u705781525_si`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `si_posts`
--

CREATE TABLE IF NOT EXISTS `si_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  `data` varchar(200) NOT NULL,
  `hora` varchar(200) NOT NULL,
  `postador` varchar(200) NOT NULL,
  `materia` varchar(200) NOT NULL,
  `download` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Extraindo dados da tabela `si_posts`
--

INSERT INTO `si_posts` (`id`, `titulo`, `descricao`, `imagem`, `arquivo`, `data`, `hora`, `postador`, `materia`, `download`) VALUES
(26, 'Aula do dia 02/02', 'Revisão de algoritmos e C', '', '', '02/02/2017', '20:55:09', 'Wander', 'Estrutura de Dados I', 'www.1drv.ms/w/s!AkNHYcuDndF4jQLSS7oHl1rDnvES'),
(32, 'Apostila de Linguagem de Programação', 'Apostila, Professor Galvez, Coragem, rar', '', '', '08/02/2017', '12:22:14', 'Paulo Marques', 'Linguagem de Programação I', 'sistemas24horas.com.br/aulas/files_lingprog1/linguagem-prog-oo-e-tec-apostila.rar'),
(30, 'Material de Java', 'Livro: Use a cabeça Java', './uploads/IMG-20170207-WA0001.jpg', '', '08/02/2017', '12:07:13', 'Paulo Marques', 'Linguagem de Programação I', 'www.docs.google.com/uc?id=0BwYmbMcHNcSwMFJ0ZTZZbnZuUVU&export=download'),
(31, 'Java - Como programar - 10ª edição', 'Livro: Java como programar', './uploads/IMG-20170207-WA0002.jpg', '', '08/02/2017', '12:18:06', 'Paulo Marques', 'Linguagem de Programação I', 'docs.google.com/uc?id=0BwYmbMcHNcSwMFJ0ZTZZbnZuUVU&export=download'),
(33, 'Elementos de Eletronica Digital - Idoeta e Capuano', 'Livro: Elementos de Eletronica Digital - Idoeta e Capuano, Professor Paulo Marcotti', './uploads/Elementos da eletrônica digital 40ª ED. - Idoeta e Capuano.jpg', './uploads/files/Elementos_de_Eletronica_Digital_-_Idoeta_e_Capuano.pdf', '08/02/2017', '13:49:44', 'Paulo Marques', 'Organização e Arquitetura de Computadores', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `si_reclamacoes`
--

CREATE TABLE IF NOT EXISTS `si_reclamacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `materia` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `duvida` text NOT NULL,
  `data` varchar(200) NOT NULL,
  `hora` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

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

CREATE TABLE IF NOT EXISTS `si_semestres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `semestre` int(11) NOT NULL,
  `materia` varchar(200) NOT NULL,
  `professor` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
