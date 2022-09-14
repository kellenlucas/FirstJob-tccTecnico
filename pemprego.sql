-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 21-Fev-2021 às 21:26
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemprego`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

DROP TABLE IF EXISTS `candidato`;
CREATE TABLE IF NOT EXISTS `candidato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `data` varchar(10) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `candidato`
--

INSERT INTO `candidato` (`id`, `nome`, `data`, `cpf`, `sexo`, `email`, `senha`, `foto`) VALUES
(1, 'Fulano da Silva', '30/12/2005', '025.698.741-30', 'Masculino', 'fulano@gmail.com', '00000000', '1613487023.'),
(4, 'Kellen Rodrigues Lucas', '08/07/2002', '048.919.120-73', 'Feminino', 'kellenlucas2002@gmail.com', '00000000', '1613588908.jpeg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `candvaga`
--

DROP TABLE IF EXISTS `candvaga`;
CREATE TABLE IF NOT EXISTS `candvaga` (
  `idcandi` int(11) NOT NULL,
  `idvaga` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `candvaga`
--

INSERT INTO `candvaga` (`idcandi`, `idvaga`) VALUES
(1, 1),
(1, 4),
(1, 3),
(2, 4),
(2, 3),
(3, 4),
(4, 7),
(4, 7),
(4, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curriculum`
--

DROP TABLE IF EXISTS `curriculum`;
CREATE TABLE IF NOT EXISTS `curriculum` (
  `id` int(11) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numcasa` int(11) NOT NULL,
  `complemento` varchar(20) NOT NULL,
  `escolaridade` varchar(50) NOT NULL,
  `forcomplem` varchar(100) NOT NULL,
  `idioma` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curriculum`
--

INSERT INTO `curriculum` (`id`, `telefone`, `bairro`, `rua`, `numcasa`, `complemento`, `escolaridade`, `forcomplem`, `idioma`) VALUES
(1, '(55) 86493-2555', 'Cidade Nova', 'Nove', 503, 'Casa', 'Ensino MÃ©dio', 'TÃ©cnico em InformÃ¡tica', 'InglÃªs '),
(3, '(55) 99903-0944', 'Cibrazem', 'Um', 15, 'Casa', 'Ensino mÃ©dio', 'tecnico informatica', 'nÃ£o'),
(4, '(55) 99903-0944', 'Cibrazem', 'Um', 15, 'Casa', 'Ensino mÃ©dio', 'tÃ©cnico informÃ¡tica', 'nÃ£o');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empregador`
--

DROP TABLE IF EXISTS `empregador`;
CREATE TABLE IF NOT EXISTS `empregador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empregador`
--

INSERT INTO `empregador` (`id`, `nome`, `cnpj`, `email`, `senha`, `endereco`) VALUES
(1, 'Vivo', '00.000.000/0000-00', 'vivo@gmail.com', '00000000', 'Flores da cunha, 5432'),
(2, 'Rispoli', '11.111.111/1111-11', 'rispoli@gmail.com', '00000000', 'Bento Martins, 9865 '),
(4, 'Baklizi', '66.666.666/6666-66', 'baklizi@gmail.com', '00000000', 'Flores da cunha,2134');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagaemp`
--

DROP TABLE IF EXISTS `vagaemp`;
CREATE TABLE IF NOT EXISTS `vagaemp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(50) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `salario` varchar(45) NOT NULL,
  `requisitos` varchar(500) NOT NULL,
  `idemp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vagaemp`
--

INSERT INTO `vagaemp` (`id`, `area`, `cargo`, `salario`, `requisitos`, `idemp`) VALUES
(7, 'InformÃ¡tica', 'tÃ©cnico em informÃ¡tica', '1500', 'curso tÃ©cnico em informÃ¡tica', 3),
(4, 'Atendimento', 'Caixa', '1500', 'Ensino MÃ©dio', 2),
(3, 'Atendimento', 'Atendente', '1500', 'Ensino MÃ©dio', 1),
(5, 'InformÃ¡tica', 'Analista de Sistema', '2000', 'GraduaÃ§Ã£o', 2),
(8, 'InformÃ¡tica', 'tÃ©cnico em informÃ¡tica', 'A combinar', 'curso tÃ©cnico em informÃ¡tica', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
