SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `projetotarefas` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projetotarefas`;



CREATE TABLE `tarefas` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `descricao` text,
  `prazo` date DEFAULT NULL,
  `prioridade` int(1) DEFAULT NULL,
  `concluida` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tarefas`
--

INSERT INTO `tarefas` (`id`, `nome`, `descricao`, `prazo`, `prioridade`, `concluida`) VALUES
(1, 'Teste 9961337', 'Atualizado em 06/Mar/2018 19:04:14', NULL, NULL, 0),
(2, 'Teste 5404673', 'Lorem ipsum ', NULL, 3, 0),
(3, 'Teste 2669573', 'Lorem ipsum ', NULL, 1, 0),
(4, 'Teste 8763686', 'Lorem ipsum ', NULL, 2, 1),
(5, 'Teste 2172585', 'Lorem ipsum ', NULL, 3, 0),
(6, 'Teste 5352030', 'Lorem ipsum ', NULL, 4, 0),
(7, 'Teste 8449235', 'Lorem ipsum ', NULL, 1, 1),
(8, 'Teste 2225338', 'Lorem ipsum ', NULL, 2, 0),
(9, 'Teste 5607887', 'Lorem ipsum ', NULL, 3, 0),
(10, 'Teste 1503164', 'Lorem ipsum ', NULL, 4, 0),
(11, 'Teste 4283573', 'Lorem ipsum ', NULL, 2, 1),
(12, 'Teste 4508184', 'Lorem ipsum ', NULL, 3, 0),
(13, 'Teste 1819907', 'Lorem ipsum ', NULL, 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

