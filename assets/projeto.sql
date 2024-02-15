CREATE DATABASE /*!32312 IF NOT EXISTS*/ `projeto` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `projeto`;

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `senha` varchar(40) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;