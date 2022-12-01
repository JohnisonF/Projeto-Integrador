-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2022 às 21:50
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetointegrador`
--
CREATE DATABASE IF NOT EXISTS `projetointegrador` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `projetointegrador`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade`
--

CREATE TABLE `atividade` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `idMateria` int(11) DEFAULT NULL,
  `dataPostagem` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dataInicio` datetime DEFAULT NULL,
  `dataFim` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `atividade`
--

INSERT INTO `atividade` (`id`, `nome`, `idMateria`, `dataPostagem`, `dataInicio`, `dataFim`) VALUES
(1, 'AEP I', 1, '2022-11-24 06:43:37', '2022-11-24 01:00:00', '2022-11-27 01:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `biblioteca`
--

CREATE TABLE `biblioteca` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `autor` varchar(40) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sigla` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `nome`, `sigla`) VALUES
(1, 'Engenharia de Software', 'ESOFT');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `autor` varchar(40) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `editora` varchar(40) DEFAULT NULL,
  `descricao` longtext DEFAULT NULL,
  `imagelink` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `nome`, `autor`, `ano`, `editora`, `descricao`, `imagelink`) VALUES
(1, 'Desenvolvendo Sites de E-Commerce: como ', 'Sharma', 2017, 'Pearson', 'Desenvolvendo Sites de E-Commerce o conduz passo a passo por meio do processo de criação de um sofisticado site Web de e-commerce. O texto mantém o leitor atualizado sobre as últimas tecnologias e mostra como integrá-las em um site de e-commerce personalizado que atenda às necessidades específicas da sua organização. Os detalhes e instruções são reforçados por exemplos de código cuidadosamente elaborados, incorporando poderosas tecnologias. Os exemplos estão incluídos no CD-ROM que acompanha o livro.', 'https://i.imgur.com/hlk2Xq1.jpg'),
(2, 'C++ XML', 'Fabio Arciniegas', 2015, 'Pearson', 'Este livro é totalmente dedicado à força e complexidades da integração dos padrões XML no C++. C++ XML trata de todos os padrões principais, toolkits e tipos de aplicativos que trabalham com  XML como um formato para representação e intercâmbio de dados, bem como o comportamento XML do ponto de vista C++. Ele explica a implementação dos aplicativos e estruturas de frame reutilizáveis para todos os propósitos XML usando unicamente analisadores sintáticos C/C++ e toolkits como expat, Xerces, Xalan, libxml2 e o MSXML da Microsoft.', 'https://i.imgur.com/s0N9V5B.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro_avaliacao`
--

CREATE TABLE `livro_avaliacao` (
  `id` int(11) NOT NULL,
  `idLivro` int(11) DEFAULT NULL,
  `avaliacao` decimal(2,1) DEFAULT NULL,
  `comentario` varchar(250) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro_avaliacao`
--

INSERT INTO `livro_avaliacao` (`id`, `idLivro`, `avaliacao`, `comentario`, `idUser`) VALUES
(1, 1, '4.5', 'Muito bom', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro_curso`
--

CREATE TABLE `livro_curso` (
  `id` int(11) NOT NULL,
  `idLivro` int(11) DEFAULT NULL,
  `idCurso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro_curso`
--

INSERT INTO `livro_curso` (`id`, `idLivro`, `idCurso`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro_disponibilidade`
--

CREATE TABLE `livro_disponibilidade` (
  `id` int(11) NOT NULL,
  `idLivro` int(11) DEFAULT NULL,
  `disponibilidade` tinyint(4) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro_disponibilidade`
--

INSERT INTO `livro_disponibilidade` (`id`, `idLivro`, `disponibilidade`, `idUser`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `materia`
--

CREATE TABLE `materia` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `periodo` int(11) DEFAULT NULL,
  `idCurso` int(11) DEFAULT NULL,
  `idProfessor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `materia`
--

INSERT INTO `materia` (`id`, `nome`, `periodo`, `idCurso`, `idProfessor`) VALUES
(1, 'Engenharia de Software', 1, 1, NULL),
(2, 'Engenharia de Requisitos', 1, 1, NULL),
(3, 'Qualidade de Software', 1, 1, 2),
(4, 'Algoritmos e Lógica de programação', 1, 1, NULL),
(5, 'Redes de Computadores', 1, 1, NULL),
(6, 'Matemática Para Computação I', 1, 1, NULL),
(7, 'Empreendedorismo', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `materia_nota`
--

CREATE TABLE `materia_nota` (
  `id` int(11) NOT NULL,
  `idAluno` int(11) DEFAULT NULL,
  `idMateria` int(11) DEFAULT NULL,
  `nota` decimal(3,1) DEFAULT NULL,
  `bimestre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `materia_nota`
--

INSERT INTO `materia_nota` (`id`, `idAluno`, `idMateria`, `nota`, `bimestre`) VALUES
(1, 1, 1, '6.5', 1),
(2, 1, 2, '7.0', 2),
(3, 1, 3, '7.0', 1),
(4, 1, 1, '7.0', 2),
(5, 1, 5, '6.0', 1),
(6, 1, 4, '5.0', 2),
(7, 1, 7, '10.0', 1),
(8, 1, 2, '6.1', 1),
(9, 1, 4, '8.2', 1),
(10, 1, 6, '9.3', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(60) DEFAULT NULL,
  `periodo` int(11) DEFAULT NULL,
  `idCurso` int(11) DEFAULT NULL,
  `tipo_usuario` int(11) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `sobrenome`, `email`, `senha`, `periodo`, `idCurso`, `tipo_usuario`, `reg_date`) VALUES
(1, 'Johnison', 'Furman', 'email@teste.com', '$2y$12$EZ9AYTaMzxxWQan704Pdzec0l4XJHfsCILY1M7VuVTain8VheTSiK', 1, 1, 1, '2022-11-26 18:17:58'),
(2, 'ProfessorTeste', 'Teste', 'teste@teste.com', '$2y$12$EZ9AYTaMzxxWQan704Pdzec0l4XJHfsCILY1M7VuVTain8VheTSiK', 0, NULL, 2, '2022-11-28 19:33:08');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atividade`
--
ALTER TABLE `atividade`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `biblioteca`
--
ALTER TABLE `biblioteca`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `livro_avaliacao`
--
ALTER TABLE `livro_avaliacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `livro_curso`
--
ALTER TABLE `livro_curso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `livro_disponibilidade`
--
ALTER TABLE `livro_disponibilidade`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `materia_nota`
--
ALTER TABLE `materia_nota`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atividade`
--
ALTER TABLE `atividade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `biblioteca`
--
ALTER TABLE `biblioteca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `livro_avaliacao`
--
ALTER TABLE `livro_avaliacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `livro_curso`
--
ALTER TABLE `livro_curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `livro_disponibilidade`
--
ALTER TABLE `livro_disponibilidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `materia`
--
ALTER TABLE `materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `materia_nota`
--
ALTER TABLE `materia_nota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
