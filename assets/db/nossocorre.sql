-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2023 às 18:36
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
-- Banco de dados: `nossocorre`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE `artigos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autor` varchar(30) NOT NULL,
  `texto` text NOT NULL,
  `path_img` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `artigos`
--

INSERT INTO `artigos` (`id`, `titulo`, `autor`, `texto`, `path_img`, `data`, `usuario_id`) VALUES
(16, 'Brasil conquista 10 medalhas de ouro nas Olimpíadas de Inverno', 'Por João Silva', 'A delegação brasileira de esportes de inverno conquistou 10 medalhas de ouro nas Olimpíadas de Inverno de 2024, realizadas em Pequim. Os atletas brasileiros se destacaram em modalidades como esqui alpino, patinação artística e curling.', '../../assets/media/img_artigos/653682fbdd4a2.jpg', '2024-02-18', 4),
(17, 'Novo álbum de Caetano Veloso é lançado', 'Por Maria Souza', 'O cantor e compositor Caetano Veloso lançou seu mais novo álbum, intitulado \"Tropical\". O álbum apresenta uma mistura de ritmos brasileiros, incluindo samba, bossa nova e MPB, e já está disponível em todas as plataformas de streaming de música.', '../../assets/media/img_artigos/653682fbdd4a2.jpg', '2024-03-01', 4),
(18, 'Museu do Futebol inaugura nova exposição', 'Por José Silva', 'O Museu do Futebol, localizado no Estádio do Pacaembu, em São Paulo, inaugurou sua mais nova exposição, intitulada \"História do Futebol Brasileiro\". A exposição apresenta objetos históricos, fotos e vídeos que contam a história do futebol no Brasil, desde o início do século XX até os dias atuais.', '../../assets/media/img_artigos/generico.jpg', '2024-04-15', 4),
(19, 'Festival de Jazz de São Paulo anuncia programação', 'Por Ana Souza', 'O Festival de Jazz de São Paulo anunciou sua programação para 2024, que contará com a presença de grandes nomes do jazz nacional e internacional. Entre os artistas confirmados estão Herbie Hancock, Chick Corea e Wayne Shorter.', '../../assets/media/img_artigos/653682d4dc2f2.jpg', '2024-06-30', 4),
(20, 'Novo filme de Fernando Meirelles é indicado ao Oscar', 'Por João Silva', 'O novo filme do diretor brasileiro Fernando Meirelles, intitulado \"O Jardim Secreto\", foi indicado a 5 categorias do Oscar, incluindo Melhor Filme e Melhor Diretor. O filme conta a história de uma jovem brasileira que se muda para a Inglaterra e descobre um jardim secreto em sua nova casa.', '../../assets/media/img_artigos/653683707f2b5.jpg', '2024-11-18', 4),
(22, 'TCC do Técnico de Informática são apresentados hoje no Colégio Joseense ', 'Por Davi Soares', 'No dia 29/11/2023, os alunos do 3º ano do Ensino Médio com Técnico de Informática estarão fazendo sua apresentação final do Trabalho de Conclusão de Curso. A aprovação do TCC significa a conclusão do Ensino Técnico dos alunos, portanto é um momento crucial para os estudantes.', '../../assets/media/img_artigos/65368428cb88b.png', '2023-11-18', 4),
(23, 'Em setembro acontece a 41ª Festa de Flores e Morangos de Atibaia', 'Davi', 'Em setembro acontece a Festa de Flores e Morangos de Atibaia, confira as novidades da 41ª do evento mais esperado do interior de São Paulo.<br><br>\r\n\r\nA partir de 01 setembro acontece a 41ª edição da Festa de Flores e Morangos de Atibaia, um dos eventos mais esperados do interior de São Paulo, que tem um cenário cultural intenso com ampla gastronomia, flores, plantas e muitas outras atrações. O evento acontece em Atibaia, ainda no Parque Municipal Edmundo Zanoni, que oferece ampla estrutura para todos os visitantes, mas para 2024 teremos uma grande novidade, o evento passará ser realizado no Parque Ecológico, em local próprio e localizado em Atibaia. ', '../../assets/media/img_artigos/65675f017fa00.jpg', '2023-11-29', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nome_ev` varchar(100) NOT NULL,
  `descricao` varchar(1200) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  `cep` varchar(8) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `path_img` varchar(255) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `nome_ev`, `descricao`, `data_inicio`, `data_fim`, `cep`, `rua`, `bairro`, `cidade`, `estado`, `path_img`, `usuario_id`) VALUES
(19, 'Pedal no Urbanova', 'Encontro no Pq. Ribeirão Vermelho, às 7h.', '2023-10-28', '2023-10-28', '12209-90', 'Rua José de Alencar', 'bairro', 'São José dos Campos', 'SP', '../../assets/media/img_eventos/653c75db7c014.jpg', 4),
(20, 'GP de São Paulo', 'Corrida de Fórmula 1 no Autódromo de Interlagos', '2023-11-03', '2023-11-05', '04801-01', 'Avenida Senador Teotônio Vilela', 'Cidade Dutra', 'São Paulo', 'SP', '../../assets/media/img_eventos/653c76b7f05d4.jpg', 4),
(21, 'Rolê de skate', 'Traz o teu skate pro Vans Skatepark às 15h!', '2023-11-18', '2023-11-18', '03178-20', 'Rua Joá', 'Alto da Mooca', 'São Paulo', 'SP', '../../assets/media/img_eventos/653c77e8525c0.jpg', 4),
(22, 'Encontro de carros', 'Traga o seu carro pro Colinas às 20h!', '2023-11-04', '2023-11-04', '12242-00', 'Avenida São João', 'Jardim das Colinas', 'São José dos Campos', 'SP', '../../assets/media/img_eventos/653c78e89322d.jpg', 4),
(23, 'Basquete no SESI', 'Vem jogar um rachão às 18h30!', '2023-10-28', '2023-10-28', '12232-00', 'Avenida Cidade Jardim', 'Jardim Portugal', 'São José dos Campos', 'SP', '../../assets/media/img_eventos/653c797d9ad8a.jpg', 4),
(24, 'Teste do TCC', 'Apresentação de teste com direcionamento', '2023-11-07', '2023-11-07', '12236-07', 'Rua Yoshikatsu Iida', 'Residencial Sol Nascente', 'São José dos Campos', 'SP', '../../assets/media/img_eventos/654a5084b5aea.png', 4),
(25, 'Festa de Flores e Morangos', 'Evento gastronômico e expositivo com tudo de flores, morangos, e a chegada dos japoneses ao Brasil!', '2023-12-01', '2023-12-24', '12945-01', 'Avenida Horácio Netto', 'bairro', 'Atibaia', 'SP', '../../assets/media/img_eventos/65675c9c7c149.jpg', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `musica`
--

CREATE TABLE `musica` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `artista` varchar(255) NOT NULL,
  `data_lanc` date NOT NULL,
  `genero` varchar(30) NOT NULL,
  `url_arq` varchar(255) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `musica`
--

INSERT INTO `musica` (`id`, `titulo`, `artista`, `data_lanc`, `genero`, `url_arq`, `usuario_id`) VALUES
(2, 'BB', 'Davi', '2023-11-27', 'MPB', '../../assets/media/musica/65654b56557e4.m4a', 4),
(3, 'Por onde anda você', 'Alice', '2023-11-28', 'Bossa Nova', '../../assets/media/musica/6565c0e760610.m4a', 4),
(4, 'Eu sei que vou te amar', 'Matheus', '2023-11-29', 'Bossa Nova', '../../assets/media/musica/6567736abee62.m4a', 4),
(5, 'Tarde demais', 'Matheus', '2023-11-29', 'Forró', '../../assets/media/musica/656773a786cde.m4a', 4),
(6, 'Quando bate aquela saudade', 'Davi', '2023-11-29', 'Alternativa', '../../assets/media/musica/65677409cb4ff.m4a', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `data_nasc` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tel` varchar(14) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `adm_check` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `cpf`, `data_nasc`, `email`, `senha`, `tel`, `cep`, `rua`, `bairro`, `cidade`, `estado`, `adm_check`) VALUES
(4, 'Davi', '123.456.789-10', '2005-10-21', 'davi@email.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '(12)12345-6789', '01001000', 'Praça da Sé', 'Sé', 'São Paulo', 'São Paulo', 0),
(7, 'Matheus', '123.456.789-11', '0000-00-00', 'matheus@email.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '12940080', 'Rua Ênio de Abreu Camargo', 'Bairro Jardim Brasil', 'Atibaia', 'SP', 0),
(8, 'Alice', '123.456.789-12', '0000-00-00', 'alice@email.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '12231675', 'Avenida Cidade Jardim', 'Jardim Satélite', 'São José dos Campos', 'SP', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `artigos`
--
ALTER TABLE `artigos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices para tabela `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `artigos`
--
ALTER TABLE `artigos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `musica`
--
ALTER TABLE `musica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `artigos`
--
ALTER TABLE `artigos`
  ADD CONSTRAINT `artigos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `musica`
--
ALTER TABLE `musica`
  ADD CONSTRAINT `musica_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
