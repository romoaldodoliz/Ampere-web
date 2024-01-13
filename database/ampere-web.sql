-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 13, 2024 at 02:01 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ampere-web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `created_at`) VALUES
(1, 'rdoliz', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'romoaldodoliz@gmail.com', '2024-01-06 07:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `admin_id`, `title`, `content`, `created_at`) VALUES
(1, 1, 'Blog Title', 'Blog Content', '2024-01-06 08:01:52');

-- --------------------------------------------------------

--
-- Table structure for table `clienteslogo`
--

CREATE TABLE `clienteslogo` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clienteslogo`
--

INSERT INTO `clienteslogo` (`id`, `admin_id`, `image`) VALUES
(1, 1, 'teste.jpg'),
(2, 1, 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `admin_id`, `title`, `description`, `image`) VALUES
(1, 1, 'Transforme a sua casa em um ambiente mais eficiente e\nseguro com a ajuda da AES,SA', 'Economize energia, salve vidas, teste', '');

-- --------------------------------------------------------

--
-- Table structure for table `nossosprojectos`
--

CREATE TABLE `nossosprojectos` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `numero` int(55) NOT NULL,
  `tipo_servico` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nossosprojectos`
--

INSERT INTO `nossosprojectos` (`id`, `admin_id`, `numero`, `tipo_servico`) VALUES
(1, 1, 50, 'Consultoria'),
(5, 1, 5, 'hhhh'),
(6, 1, 27, 'Testando one more');

-- --------------------------------------------------------

--
-- Table structure for table `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `servico` varchar(250) NOT NULL,
  `descricao` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `servicos`
--

INSERT INTO `servicos` (`id`, `admin_id`, `servico`, `descricao`) VALUES
(1, 1, 'Paineis solares', 'testando'),
(5, 1, 'Instalacao electrica', 'morning dear');

-- --------------------------------------------------------

--
-- Table structure for table `sobre`
--

CREATE TABLE `sobre` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `cabecalho` varchar(300) NOT NULL,
  `subtitulo` text NOT NULL,
  `projectos` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sobre`
--

INSERT INTO `sobre` (`id`, `admin_id`, `cabecalho`, `subtitulo`, `projectos`) VALUES
(1, 1, 'Somos especializados em oferecer soluções em energia solar, venda de materiais elétricos, instalação elétrica e automação elétrica para residências e empresas.', 'Estamos comprometidos em ajudá-lo a transformar a sua casa ou empresa em um ambiente mais eficiente, econômico e sustentável.', 'Paineis Solares');

-- --------------------------------------------------------

--
-- Table structure for table `testemunhos`
--

CREATE TABLE `testemunhos` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cargo` text NOT NULL,
  `testemunho` text NOT NULL,
  `image` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testemunhos`
--

INSERT INTO `testemunhos` (`id`, `admin_id`, `name`, `cargo`, `testemunho`, `image`) VALUES
(1, 1, 'Taylor', 'CEO', 'Testemunhos', 'teste2.jpeg'),
(2, 1, 'Junior', 'CEO', 'Testimonial', 'teste2.jpeg'),
(3, 1, 'Romoaldo Doliz', 'CEO', 'Hello happy to code', 'teste2.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `clienteslogo`
--
ALTER TABLE `clienteslogo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `nossosprojectos`
--
ALTER TABLE `nossosprojectos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `sobre`
--
ALTER TABLE `sobre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `testemunhos`
--
ALTER TABLE `testemunhos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clienteslogo`
--
ALTER TABLE `clienteslogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nossosprojectos`
--
ALTER TABLE `nossosprojectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sobre`
--
ALTER TABLE `sobre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testemunhos`
--
ALTER TABLE `testemunhos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `clienteslogo`
--
ALTER TABLE `clienteslogo`
  ADD CONSTRAINT `clienteslogo_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `home`
--
ALTER TABLE `home`
  ADD CONSTRAINT `home_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `nossosprojectos`
--
ALTER TABLE `nossosprojectos`
  ADD CONSTRAINT `nossosprojectos_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `servicos_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `sobre`
--
ALTER TABLE `sobre`
  ADD CONSTRAINT `sobre_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `testemunhos`
--
ALTER TABLE `testemunhos`
  ADD CONSTRAINT `testemunhos_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
