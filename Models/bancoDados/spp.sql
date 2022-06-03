-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Abr-2022 às 12:04
-- Versão do servidor: 5.7.36
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

create database scriptSpp;
use scriptSpp;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--
  Create table permissao(
  idpermissao int AUTO_INCREMENT,
  descricao varchar(45),
  primary key(idpermissao)
  );


  Create table usuario(
  idusuario int AUTO_INCREMENT,
  nome varchar(50),
  email varchar(100) ,
  senha varchar(8),
  Primary key(idusuario),
  idpermissao int,
  Foreign key(idpermissao) references permissao(idpermissao)
  );


DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `idalunos` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` int(11) NOT NULL,
  `morada` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  PRIMARY KEY (`idalunos`),
  UNIQUE KEY `alunos_nome_unique` (`nome`),
  UNIQUE KEY `alunos_bi_unique` (`bi`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno_processos`
--

DROP TABLE IF EXISTS `aluno_processos`;
CREATE TABLE IF NOT EXISTS `aluno_processos` (
  `idprocessos` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `aluno_id` bigint(20) UNSIGNED NOT NULL,
  `ciclo_id` bigint(20) UNSIGNED NOT NULL,
  `classe_id` bigint(20) UNSIGNED NOT NULL,
  `curso_id` bigint(20) UNSIGNED NOT NULL,
  `turma_id` bigint(20) UNSIGNED NOT NULL,
  `turno_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`idprocessos`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ciclos`
--

DROP TABLE IF EXISTS `ciclos`;
CREATE TABLE IF NOT EXISTS `ciclos` (
  `idciclos` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idciclos`),
  UNIQUE KEY `ciclos_nome_unique` (`nome`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `idclasses` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciclo_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`idclasses`),
  UNIQUE KEY `classes_nome_unique` (`nome`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `configuracaos`
--

DROP TABLE IF EXISTS `configuracaos`;
CREATE TABLE IF NOT EXISTS `configuracaos` (
  `idconfig` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `chave` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idconfig`),
  UNIQUE KEY `configuracaos_chave_unique` (`chave`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `idcursos` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idcursos`),
  UNIQUE KEY `cursos_nome_unique` (`nome`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- --------------------------------------------------------

--
-- Estrutura da tabela `mensalidades`
--

DROP TABLE IF EXISTS `mensalidades`;
CREATE TABLE IF NOT EXISTS `mensalidades` (
  `idmensalidades` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `classe_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idmensalidades`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `metodo_pagamentos`
--

DROP TABLE IF EXISTS `metodo_pagamentos`;
CREATE TABLE IF NOT EXISTS `metodo_pagamentos` (
  `idmetodo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idmetodo`),
  UNIQUE KEY `metodo_pagamentos_nome_unique` (`nome`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 
--
-- Estrutura da tabela `pagamentos`
--

DROP TABLE IF EXISTS `pagamentos`;
CREATE TABLE IF NOT EXISTS `pagamentos` (
  `idpagamento` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `aluno_id` bigint(20) UNSIGNED NOT NULL,
  `classe_id` bigint(20) UNSIGNED NOT NULL,
  `turma_id` bigint(20) UNSIGNED NOT NULL,
  `curso_id` bigint(20) UNSIGNED NOT NULL,
  `valor_total` int(11) NOT NULL,
  `data_pagamento` datetime NOT NULL,
  PRIMARY KEY (`idpagamento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento_detalhes`
--

DROP TABLE IF EXISTS `pagamento_detalhes`;
CREATE TABLE IF NOT EXISTS `pagamento_detalhes` (
  `iddetalhes` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` int(11) NOT NULL,
  `multa` int(11) NOT NULL,
  `desconto` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`iddetalhes`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

DROP TABLE IF EXISTS `turmas`;
CREATE TABLE IF NOT EXISTS `turmas` (
  `idturmas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idturmas`),
  UNIQUE KEY `turmas_nome_unique` (`nome`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turnos`
--

DROP TABLE IF EXISTS `turnos`;
CREATE TABLE IF NOT EXISTS `turnos` (
  `idturnos` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idturnos`),
  UNIQUE KEY `turnos_nome_unique` (`nome`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
