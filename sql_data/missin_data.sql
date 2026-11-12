SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------
-- Tabela: usuario
-- --------------------------------------------------------
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apelido` varchar(70) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_apelido` (`apelido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Tabela: unidade
-- --------------------------------------------------------
CREATE TABLE `unidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Tabela: missao
-- --------------------------------------------------------
CREATE TABLE `missao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unidade_id` int(11) NOT NULL,
  `titulo` varchar(70) NOT NULL,
  `ordem` int(11) DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `fk_missao_unidade` (`unidade_id`),
  CONSTRAINT `fk_missao_unidade` FOREIGN KEY (`unidade_id`) REFERENCES `unidade` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Tabela: video
-- --------------------------------------------------------
CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `missao_id` int(11) NOT NULL,
  `titulo` varchar(70) NOT NULL,
  `parte` int(11) NOT NULL DEFAULT 1,
  `video_link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_video_missao` (`missao_id`),
  CONSTRAINT `fk_video_missao` FOREIGN KEY (`missao_id`) REFERENCES `missao` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Tabela: dicionario
-- --------------------------------------------------------
CREATE TABLE `dicionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sinal` varchar(50) NOT NULL,
  `definicao` text DEFAULT NULL,
  `categoria` char(1) NOT NULL,
  `midia_link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Tabela: introducao 
-- --------------------------------------------------------
CREATE TABLE `introducao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `missao_id` int(11) NOT NULL,
  `num_parte` int(11) NOT NULL,
  `dicionario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_qi_missao` (`missao_id`),
  KEY `fk_qi_dicionario` (`dicionario_id`),
  CONSTRAINT `fk_qi_missao` FOREIGN KEY (`missao_id`) REFERENCES `missao` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_qi_dicionario` FOREIGN KEY (`dicionario_id`) REFERENCES `dicionario` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Tabela: quiz_historia 
-- --------------------------------------------------------
CREATE TABLE `quiz_historia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `missao_id` int(11) NOT NULL,
  `num_parte` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `fk_qh_missao` (`missao_id`),
  CONSTRAINT `fk_qh_missao` FOREIGN KEY (`missao_id`) REFERENCES `missao` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Tabela: pergunta
-- --------------------------------------------------------
CREATE TABLE `pergunta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_historia_id` int(11) NOT NULL,
  `texto_pergunta` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pergunta_qh` (`quiz_historia_id`),
  CONSTRAINT `fk_pergunta_qh` FOREIGN KEY (`quiz_historia_id`) REFERENCES `quiz_historia` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Tabela: alternativa_historia
-- --------------------------------------------------------
CREATE TABLE `alternativa_historia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta_id` int(11) NOT NULL,
  `letra` char(1) NOT NULL,
  `texto` text NOT NULL,
  `midia_link` varchar(255) DEFAULT NULL,
  `correta` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `fk_alt_pergunta` (`pergunta_id`),
  CONSTRAINT `fk_alt_pergunta` FOREIGN KEY (`pergunta_id`) REFERENCES `pergunta` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Tabela: progresso (Apenas 1 registro por usuário/missão)
-- --------------------------------------------------------
CREATE TABLE `progresso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `missao_id` int(11) NOT NULL,
  `pontuacaoGeral` decimal(4,2) NOT NULL DEFAULT 0.00,
  `desbloqueada` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_usuario_missao` (`usuario_id`,`missao_id`),
  KEY `fk_progresso_missao` (`missao_id`),
  CONSTRAINT `fk_progresso_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_progresso_missao` FOREIGN KEY (`missao_id`) REFERENCES `missao` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

COMMIT;

