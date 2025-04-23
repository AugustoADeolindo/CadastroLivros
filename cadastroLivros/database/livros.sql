-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Out-2022 às 21:37
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `books`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `capa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subtitulo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `editora` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `volume` int(11) DEFAULT NULL,
  `isbn` bigint(13) NOT NULL,
  `valor` float DEFAULT NULL,
  `etal` int(11) DEFAULT NULL,
  `NomeAutor1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SobreNomeAutor1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NomeAutor2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SobreNomeAutor2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NomeAutor3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SobreNomeAutor3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoria` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dados reais de livros
--

INSERT INTO `livros` (`id`, `capa`, `titulo`, `subtitulo`, `ano`, `editora`, `volume`, `isbn`, `valor`, `etal`, `NomeAutor1`, `SobreNomeAutor1`, `NomeAutor2`, `SobreNomeAutor2`, `NomeAutor3`, `SobreNomeAutor3`, `categoria`) VALUES
(1, 'capa1.jpg', '1984', 'A distopia clássica', 1949, 'Companhia das Letras', 1, 9788535914849, 42.9, 0, 'George', 'Orwell', NULL, NULL, NULL, NULL, 'Ficção'),
(2, 'capa2.jpg', 'Dom Casmurro', 'Obra-prima de Machado', 1899, 'Editora Ática', 1, 9788508151882, 29.9, 0, 'Machado', 'de Assis', NULL, NULL, NULL, NULL, 'Romance'),
(3, 'capa3.jpg', 'O Senhor dos Anéis', 'A Sociedade do Anel', 1954, 'Martins Fontes', 1, 9788533613379, 89.9, 1, 'J.R.R.', 'Tolkien', NULL, NULL, NULL, NULL, 'Fantasia'),
(4, 'capa4.jpg', 'Harry Potter e a Pedra Filosofal', NULL, 1997, 'Rocco', 1, 9788532530783, 39.9, 0, 'J.K.', 'Rowling', NULL, NULL, NULL, NULL, 'Fantasia'),
(5, 'capa5.jpg', 'O Código Da Vinci', NULL, 2003, 'Sextante', 1, 9788575421138, 45.0, 0, 'Dan', 'Brown', NULL, NULL, NULL, NULL, 'Suspense'),
(6, 'capa6.jpg', 'O Pequeno Príncipe', NULL, 1943, 'Agir', 1, 9788522005230, 29.9, 0, 'Antoine', 'de Saint-Exupéry', NULL, NULL, NULL, NULL, 'Infantil'),
(7, 'capa7.jpg', 'A Revolução dos Bichos', NULL, 1945, 'Companhia das Letras', 1, 9788535910193, 36.0, 0, 'George', 'Orwell', NULL, NULL, NULL, NULL, 'Fábula'),
(8, 'capa8.jpg', 'Orgulho e Preconceito', NULL, 1813, 'Martin Claret', 1, 9788572328492, 32.0, 0, 'Jane', 'Austen', NULL, NULL, NULL, NULL, 'Romance'),
(9, 'capa9.jpg', 'A Menina que Roubava Livros', NULL, 2005, 'Intrínseca', 1, 9788578070548, 49.9, 0, 'Markus', 'Zusak', NULL, NULL, NULL, NULL, 'Drama'),
(10, 'capa10.jpg', 'O Hobbit', NULL, 1937, 'Martins Fontes', 1, 9788533603141, 44.9, 0, 'J.R.R.', 'Tolkien', NULL, NULL, NULL, NULL, 'Fantasia');

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
