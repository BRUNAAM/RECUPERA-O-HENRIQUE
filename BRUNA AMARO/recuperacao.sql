CREATE TABLE `pessoas` (
  `idPessoa` int(10) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `dataNascimento` varchar(10) NOT NULL,
  `Sexo` varchar(1) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `usuarios` (
  `idUsuario` int(4) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `senha` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`idPessoa`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

  ALTER TABLE `pessoas`
  MODIFY `idPessoa` int(10) NOT NULL AUTO_INCREMENT;

  ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(4) NOT NULL AUTO_INCREMENT;