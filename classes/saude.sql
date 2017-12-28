-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 03:08 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saude`
--

-- --------------------------------------------------------

--
-- Table structure for table `clinica`
--

CREATE TABLE `clinica` (
  `clinica_id` int(5) UNSIGNED NOT NULL,
  `clinica_nome` varchar(250) NOT NULL,
  `clinica_localizacao` varchar(250) NOT NULL,
  `clinica_desc` varchar(250) DEFAULT NULL,
  `clinica_logo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clinica`
--

INSERT INTO `clinica` (`clinica_id`, `clinica_nome`, `clinica_localizacao`, `clinica_desc`, `clinica_logo`) VALUES
(1, 'LAC - Laboratório de Análises Clínicas Lda', 'Maputo cidade', ' A Clínica com sede na Praça de S. Tiago, 31 – 2º, freguesia de Oliveira do Castelo em Guimarães, situa-se em pleno Centro Histórico, classificado como Património Cultural da Humanidade pela UNESCO.', 'logo.jpg'),
(2, 'Acácia Clínica da Mulher', 'Maputo cidade', 'Para a prestação dos cuidados médicos a que se encontra votada no momento, encontra-se apetrechada com todo o equipamento e material que passarei a descrever sucintamente de imediato:', '10402754_258871144237118_7653703228838425884_n.png'),
(3, 'Clínica Cruz Azul', 'Cidade da Matola', 'Para a prestação dos cuidados médicos a que se encontra votada no momento, encontra-se apetrechada com todo o equipamento e material que passarei a descrever sucintamente de imediato:', 'lmlSP54O.jpeg'),
(4, 'Instituto do Coração', 'Cidade de Maputo', '- A higiene e desinfecção geral, que conta com aparelho de aspiração e produtos apropriados para limpeza e desinfecção do chão e superfícies, bem como dos sanitários, de forma diária;', 'instituto-coracao.jpg'),
(5, 'Clinica Pedriatica de Maputo', 'Matola Cidade', ' A Clínica com sede na Praça de S. Tiago, 31 – 2º, freguesia de Oliveira do Castelo em Guimarães, situa-se em pleno Centro Histórico, classificado como Património Cultural da Humanidade pela UNESCO.', 'Clinica.png');

-- --------------------------------------------------------

--
-- Table structure for table `clinica_foto`
--

CREATE TABLE `clinica_foto` (
  `clinica_foto_id` int(5) UNSIGNED NOT NULL,
  `clinica_foto_caminho` varchar(250) NOT NULL,
  `clinica_id` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clinica_medico`
--

CREATE TABLE `clinica_medico` (
  `clinica_medico_id` int(5) UNSIGNED NOT NULL,
  `medico_id` int(5) UNSIGNED NOT NULL,
  `clinica_id` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinica_medico`
--

INSERT INTO `clinica_medico` (`clinica_medico_id`, `medico_id`, `clinica_id`) VALUES
(1, 3, 1),
(2, 2, 2),
(3, 1, 2),
(4, 1, 1),
(5, 3, 2),
(6, 3, 4),
(7, 2, 4),
(8, 2, 3),
(9, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `consulta`
--

CREATE TABLE `consulta` (
  `consulta_id` int(5) UNSIGNED NOT NULL,
  `consulta_dataMarcacao` datetime NOT NULL,
  `consulta_descricao` varchar(250) DEFAULT NULL,
  `medico_id` int(5) UNSIGNED NOT NULL,
  `clinica_id` int(5) UNSIGNED NOT NULL,
  `especialidade_id` int(5) UNSIGNED NOT NULL,
  `paciente_id` int(5) UNSIGNED NOT NULL,
  `consulta_dataRealizacao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `desponibilidade_medico`
--

CREATE TABLE `desponibilidade_medico` (
  `desponibilidade_id` int(5) UNSIGNED NOT NULL,
  `desponibilidade_data` datetime NOT NULL,
  `medico_id` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `especialidade`
--

CREATE TABLE `especialidade` (
  `especialidade_id` int(5) UNSIGNED NOT NULL,
  `especialidade_nome` varchar(250) NOT NULL,
  `especialidade_descricao` varchar(250) DEFAULT NULL,
  `especialidade_foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `especialidade`
--

INSERT INTO `especialidade` (`especialidade_id`, `especialidade_nome`, `especialidade_descricao`, `especialidade_foto`) VALUES
(1, 'Oftalmologia', 'é a parte da medicina que estuda e trata os distúrbios dos olhos.', ''),
(2, 'Patologia', ' é o estudo das doenças em geral sob aspectos determinados. Ela envolve tanto a ciência básica quanto a prática clínica.', ''),
(3, 'Pediatria', 'é a parte da medicina que estuda e trata crianças.', ''),
(4, 'Pneumologia', ' é a parte da medicina que estuda e trata o sistema respiratório.', ''),
(5, 'Urologia', ' é a parte da medicina que estuda e trata cirurgicamente e clinicamente os problemas do sistema urinário e do sistema reprodutor masculino e feminino.', ''),
(6, 'Otorrinolaringologia', 'é a parte da medicina que estuda e trata as doenças da orelha, nariz, seios paranasais, faringe e laringe.', ''),
(7, 'Nefrologia', 'é a parte da medicina que estuda e trata clinicamente as doenças do rim, como insuficiência renal.', '');

-- --------------------------------------------------------

--
-- Table structure for table `especialidade_clinica`
--

CREATE TABLE `especialidade_clinica` (
  `especialidade_clinica_id` int(5) UNSIGNED NOT NULL,
  `clinica_id` int(5) UNSIGNED NOT NULL,
  `especialidade_id` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `especialidade_medico`
--

CREATE TABLE `especialidade_medico` (
  `especialidade_medico_id` int(5) UNSIGNED NOT NULL,
  `medico_id` int(5) UNSIGNED NOT NULL,
  `especialidade_id` int(5) UNSIGNED NOT NULL,
  `data_inicio_actividade` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `especialidade_medico`
--

INSERT INTO `especialidade_medico` (`especialidade_medico_id`, `medico_id`, `especialidade_id`, `data_inicio_actividade`) VALUES
(1, 3, 7, '0000-00-00'),
(2, 2, 7, '0000-00-00'),
(3, 1, 6, '0000-00-00'),
(4, 1, 3, '0000-00-00'),
(5, 3, 3, '0000-00-00'),
(6, 2, 2, '0000-00-00'),
(7, 2, 5, '0000-00-00'),
(8, 2, 4, '0000-00-00'),
(9, 3, 5, '0000-00-00'),
(10, 1, 1, '0000-00-00'),
(11, 2, 1, '0000-00-00'),
(12, 3, 1, '0000-00-00'),
(13, 1, 2, '0000-00-00'),
(14, 1, 7, '0000-00-00'),
(15, 4, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `farmacia`
--

CREATE TABLE `farmacia` (
  `farmacia_id` int(5) UNSIGNED NOT NULL,
  `farmacia_nome` varchar(250) NOT NULL,
  `farmacia_endereco` varchar(250) NOT NULL,
  `clinica_id` int(5) UNSIGNED DEFAULT '0',
  `farmacia_descricao` varchar(250) DEFAULT NULL,
  `farmacia_foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medico`
--

CREATE TABLE `medico` (
  `medico_id` int(5) UNSIGNED NOT NULL,
  `medico_nome` varchar(250) NOT NULL,
  `medico_foto` varchar(250) NOT NULL,
  `medico_bibiografia` varchar(250) DEFAULT NULL,
  `medico_dataNascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medico`
--

INSERT INTO `medico` (`medico_id`, `medico_nome`, `medico_foto`, `medico_bibiografia`, `medico_dataNascimento`) VALUES
(1, 'Fredy Gomes', 'PicsArt_1439930938375-1.jpg', 'medico desde 1990, estudou na faculdade de medicina', '1996-05-21'),
(2, 'Andre Cossa', 'PicsArt_1422987922690.jpg', 'estudou na espanha ha 20 anos', '1995-06-01'),
(3, 'Admilson Bila', 'PicsArt_1422647415293.jpg', 'trabalha em gaza', '1994-06-14'),
(4, 'Adilson Gomes', 'PicsArt_1434985703256.jpg', 'medico formado nos EUA', '1978-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `paciente`
--

CREATE TABLE `paciente` (
  `paciente_id` int(5) UNSIGNED NOT NULL,
  `paciente_nome` varchar(250) CHARACTER SET latin1 NOT NULL,
  `paciente_foto` varchar(250) NOT NULL,
  `paciente_email` varchar(250) DEFAULT NULL,
  `paciente_contacto1` varchar(250) NOT NULL,
  `paciente_contacto2` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clinica`
--
ALTER TABLE `clinica`
  ADD PRIMARY KEY (`clinica_id`),
  ADD UNIQUE KEY `clinica_id` (`clinica_id`);

--
-- Indexes for table `clinica_foto`
--
ALTER TABLE `clinica_foto`
  ADD PRIMARY KEY (`clinica_foto_id`),
  ADD UNIQUE KEY `clinica_foto_id` (`clinica_foto_id`),
  ADD KEY `clinica_id` (`clinica_id`);

--
-- Indexes for table `clinica_medico`
--
ALTER TABLE `clinica_medico`
  ADD PRIMARY KEY (`clinica_medico_id`),
  ADD UNIQUE KEY `clinica_medico_id` (`clinica_medico_id`),
  ADD KEY `medico_id` (`medico_id`),
  ADD KEY `clinica_id` (`clinica_id`);

--
-- Indexes for table `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`consulta_id`),
  ADD UNIQUE KEY `consulta_id` (`consulta_id`),
  ADD KEY `clinica_id` (`clinica_id`),
  ADD KEY `medico_id` (`medico_id`),
  ADD KEY `especialidade_id` (`especialidade_id`),
  ADD KEY `paciente_id` (`paciente_id`);

--
-- Indexes for table `desponibilidade_medico`
--
ALTER TABLE `desponibilidade_medico`
  ADD PRIMARY KEY (`desponibilidade_id`),
  ADD UNIQUE KEY `desponibilidade_id` (`desponibilidade_id`),
  ADD KEY `medico_id` (`medico_id`);

--
-- Indexes for table `especialidade`
--
ALTER TABLE `especialidade`
  ADD PRIMARY KEY (`especialidade_id`),
  ADD UNIQUE KEY `especialidade_id` (`especialidade_id`);

--
-- Indexes for table `especialidade_clinica`
--
ALTER TABLE `especialidade_clinica`
  ADD PRIMARY KEY (`especialidade_clinica_id`),
  ADD UNIQUE KEY `especialidade_clinica_id` (`especialidade_clinica_id`),
  ADD KEY `clinica_id` (`clinica_id`),
  ADD KEY `especialidade_id` (`especialidade_id`);

--
-- Indexes for table `especialidade_medico`
--
ALTER TABLE `especialidade_medico`
  ADD PRIMARY KEY (`especialidade_medico_id`),
  ADD UNIQUE KEY `especialidade_medico_id` (`especialidade_medico_id`),
  ADD KEY `especialidade_id` (`especialidade_id`),
  ADD KEY `medico_id` (`medico_id`);

--
-- Indexes for table `farmacia`
--
ALTER TABLE `farmacia`
  ADD PRIMARY KEY (`farmacia_id`),
  ADD UNIQUE KEY `farmacia_id` (`farmacia_id`),
  ADD KEY `clinica_id` (`clinica_id`);

--
-- Indexes for table `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`medico_id`),
  ADD UNIQUE KEY `medico_id` (`medico_id`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`paciente_id`),
  ADD UNIQUE KEY `paciente_id` (`paciente_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clinica`
--
ALTER TABLE `clinica`
  MODIFY `clinica_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `clinica_foto`
--
ALTER TABLE `clinica_foto`
  MODIFY `clinica_foto_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `clinica_medico`
--
ALTER TABLE `clinica_medico`
  MODIFY `clinica_medico_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `consulta`
--
ALTER TABLE `consulta`
  MODIFY `consulta_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `desponibilidade_medico`
--
ALTER TABLE `desponibilidade_medico`
  MODIFY `desponibilidade_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `especialidade`
--
ALTER TABLE `especialidade`
  MODIFY `especialidade_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `especialidade_clinica`
--
ALTER TABLE `especialidade_clinica`
  MODIFY `especialidade_clinica_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `especialidade_medico`
--
ALTER TABLE `especialidade_medico`
  MODIFY `especialidade_medico_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `farmacia`
--
ALTER TABLE `farmacia`
  MODIFY `farmacia_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medico`
--
ALTER TABLE `medico`
  MODIFY `medico_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `paciente_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `clinica_foto`
--
ALTER TABLE `clinica_foto`
  ADD CONSTRAINT `clinica_foto_ibfk_1` FOREIGN KEY (`clinica_id`) REFERENCES `clinica` (`clinica_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clinica_medico`
--
ALTER TABLE `clinica_medico`
  ADD CONSTRAINT `clinica_medico_ibfk_1` FOREIGN KEY (`medico_id`) REFERENCES `medico` (`medico_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clinica_medico_ibfk_2` FOREIGN KEY (`clinica_id`) REFERENCES `clinica` (`clinica_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`clinica_id`) REFERENCES `clinica` (`clinica_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consulta_ibfk_2` FOREIGN KEY (`medico_id`) REFERENCES `medico` (`medico_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consulta_ibfk_3` FOREIGN KEY (`especialidade_id`) REFERENCES `especialidade` (`especialidade_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consulta_ibfk_4` FOREIGN KEY (`paciente_id`) REFERENCES `paciente` (`paciente_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `desponibilidade_medico`
--
ALTER TABLE `desponibilidade_medico`
  ADD CONSTRAINT `desponibilidade_medico_ibfk_1` FOREIGN KEY (`medico_id`) REFERENCES `medico` (`medico_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `especialidade_clinica`
--
ALTER TABLE `especialidade_clinica`
  ADD CONSTRAINT `especialidade_clinica_ibfk_1` FOREIGN KEY (`especialidade_id`) REFERENCES `especialidade` (`especialidade_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `especialidade_clinica_ibfk_2` FOREIGN KEY (`clinica_id`) REFERENCES `clinica` (`clinica_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `especialidade_medico`
--
ALTER TABLE `especialidade_medico`
  ADD CONSTRAINT `especialidade_medico_ibfk_1` FOREIGN KEY (`medico_id`) REFERENCES `medico` (`medico_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `especialidade_medico_ibfk_2` FOREIGN KEY (`especialidade_id`) REFERENCES `especialidade` (`especialidade_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `farmacia`
--
ALTER TABLE `farmacia`
  ADD CONSTRAINT `farmacia_ibfk_1` FOREIGN KEY (`clinica_id`) REFERENCES `clinica` (`clinica_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
