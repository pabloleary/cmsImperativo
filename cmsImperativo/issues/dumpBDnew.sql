-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Jan 07, 2009 as 07:07 PM
-- Versão do Servidor: 5.0.51
-- Versão do PHP: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Banco de Dados: `sysbyte11`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `AprobasArquivo`
--

CREATE TABLE `AprobasArquivo` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(100) collate latin1_general_ci NOT NULL,
  `data` varchar(200) collate latin1_general_ci NOT NULL,
  `descricao` varchar(200) collate latin1_general_ci NOT NULL,
  `categoria` varchar(200) collate latin1_general_ci NOT NULL,
  `status` varchar(200) collate latin1_general_ci NOT NULL,
  `fileName` varchar(200) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `AprobasArquivo`
--

INSERT INTO `AprobasArquivo` VALUES(1, 'aa', '', '', '', '', '');
INSERT INTO `AprobasArquivo` VALUES(2, 'aprobas 20080127 0015.sql', '', '', '', '', '');
INSERT INTO `AprobasArquivo` VALUES(3, 'DSC00467.JPG', '', '', '', '', '');
INSERT INTO `AprobasArquivo` VALUES(4, 'nome arquivo', '17/07/2008', 'descricao', 'categoria1', '', '');
INSERT INTO `AprobasArquivo` VALUES(5, 'nome do arquivo', '17/07/2008', ' descricao', 'categoria1', '', '');
INSERT INTO `AprobasArquivo` VALUES(6, 'testeMonday', '21/07/2008', 'testeMonday', 'categoria1', '', '');
INSERT INTO `AprobasArquivo` VALUES(7, 'testeMonday', '21/07/2008', 'testeMonday', 'categoria1', '', 'DSC00467.JPG');
INSERT INTO `AprobasArquivo` VALUES(8, 'titulo', '25/07/2008', 'descricao', 'saulo_teste_banco', 'publico', 'httpd.conf');
INSERT INTO `AprobasArquivo` VALUES(9, 'sds', '25/08/2008', ' sdsd', 'categoria', 'publico', 'phpinfo.php');
INSERT INTO `AprobasArquivo` VALUES(10, 'sds', '25/08/2008', ' sdsd', 'categoria', 'publico', 'phpinfo.php');
INSERT INTO `AprobasArquivo` VALUES(11, 'sauloteste', '25/08/2008', ' descricao teste', 'saulo_teste_banco', 'privado', 'template-4721226394322632398.xml');

-- --------------------------------------------------------

--
-- Estrutura da tabela `AprobasBiblioteca`
--

CREATE TABLE `AprobasBiblioteca` (
  `id` int(11) NOT NULL auto_increment,
  `fileName` varchar(200) collate latin1_general_ci NOT NULL,
  `id_AprobasArquivo` varchar(200) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `AprobasBiblioteca`
--

INSERT INTO `AprobasBiblioteca` VALUES(1, 'titulo', 'aaa');
INSERT INTO `AprobasBiblioteca` VALUES(2, 'titulo', 'aaa');
INSERT INTO `AprobasBiblioteca` VALUES(3, 'titulo', 'aaa');
INSERT INTO `AprobasBiblioteca` VALUES(4, 'titulo', 'aaa');
INSERT INTO `AprobasBiblioteca` VALUES(5, 'titulo', 'aaa');
INSERT INTO `AprobasBiblioteca` VALUES(6, 'titulo', 'aaa');
INSERT INTO `AprobasBiblioteca` VALUES(7, 'saulo', 'aaa');
INSERT INTO `AprobasBiblioteca` VALUES(8, 'saulo', '17/07/2008');

-- --------------------------------------------------------

--
-- Estrutura da tabela `AprobasCadastro`
--

CREATE TABLE `AprobasCadastro` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(300) NOT NULL,
  `filiacao` varchar(300) NOT NULL,
  `nacionalidade` varchar(300) NOT NULL,
  `naturalidade` varchar(300) NOT NULL,
  `dataNascimento` varchar(100) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `cidade` varchar(300) NOT NULL,
  `uf` varchar(100) NOT NULL,
  `cep` varchar(100) NOT NULL,
  `telResidencial` varchar(100) NOT NULL,
  `telCelular` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `rg` varchar(100) NOT NULL,
  `orgaoEmissor` varchar(100) NOT NULL,
  `dataExpedicao` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `estadoCivil` varchar(100) NOT NULL,
  `cref` varchar(200) NOT NULL,
  `grauInstrucao` varchar(200) NOT NULL,
  `formatoInstituicao` varchar(200) NOT NULL,
  `ufIns1` varchar(200) NOT NULL,
  `carreira` varchar(200) NOT NULL,
  `anoConclusao` varchar(200) NOT NULL,
  `localTrabalho` varchar(200) NOT NULL,
  `enderecoIns` varchar(200) NOT NULL,
  `cidadeIns` varchar(200) NOT NULL,
  `ufIns2` varchar(200) NOT NULL,
  `cepIns` varchar(200) NOT NULL,
  `residencial` varchar(200) NOT NULL,
  `celular` varchar(200) NOT NULL,
  `emailIns` varchar(200) NOT NULL,
  `idadeIns` varchar(200) NOT NULL,
  `funcao` varchar(200) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `login` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `AprobasCadastro`
--

INSERT INTO `AprobasCadastro` VALUES(3, '$_POST[nome]', '$_POST[filiacao]', '$_POST[nascionalidade]', '$_POST[naturalidade]', '$_POST[nascimento]', '$_POST[sexo]', '$_POST[endereco2]', '$_POST[cidade2]', '$_POST[uf2]', '$_POST[cep2]', '$_POST[telres2]', '$_POST[celular2]', '$_POST[email2]', '$_POST[rg]', '$_POST[orgaoemissor]', '$_POST[expedicao]', '$_POST[cpf]', '$_POST[ec]', '$_POST[cref]', '$_POST[gi]', '$_POST[fi]', '$_POST[uf3]', '$_POST[carreira]', '$_POST[ac]', '$_POST[localtrabalho]', '$_POST[endereco]', '$_POST[cidade]', '$_POST[uf]', '$_POST[cep]', '$_POST[telres]', '$_POST[celular]', '$_POST[email]', '$_POST[idade]', '$_POST[funcao]', '$_POST[categoria]', '$_POST[login]', '$_POST[senha]');
INSERT INTO `AprobasCadastro` VALUES(4, 'saulo', '$_POST[filiacao]', '$_POST[nascionalidade]', '$_POST[naturalidade]', '$_POST[nascimento]', '$_POST[sexo]', '$_POST[endereco2]', '$_POST[cidade2]', '$_POST[uf2]', '$_POST[cep2]', '$_POST[telres2]', '$_POST[celular2]', '$_POST[email2]', '$_POST[rg]', '$_POST[orgaoemissor]', '$_POST[expedicao]', '$_POST[cpf]', '$_POST[ec]', '$_POST[cref]', '$_POST[gi]', '$_POST[fi]', '$_POST[uf3]', '$_POST[carreira]', '$_POST[ac]', '$_POST[localtrabalho]', '$_POST[endereco]', '$_POST[cidade]', '$_POST[uf]', '$_POST[cep]', '$_POST[telres]', '$_POST[celular]', '$_POST[email]', '$_POST[idade]', '$_POST[funcao]', '$_POST[categoria]', '$_POST[login]', '$_POST[senha]');
INSERT INTO `AprobasCadastro` VALUES(5, '$dados', '$_POST[filiacao]', '$_POST[nascionalidade]', '$_POST[naturalidade]', '$_POST[nascimento]', '$_POST[sexo]', '$_POST[endereco2]', '$_POST[cidade2]', '$_POST[uf2]', '$_POST[cep2]', '$_POST[telres2]', '$_POST[celular2]', '$_POST[email2]', '$_POST[rg]', '$_POST[orgaoemissor]', '$_POST[expedicao]', '$_POST[cpf]', '$_POST[ec]', '$_POST[cref]', '$_POST[gi]', '$_POST[fi]', '$_POST[uf3]', '$_POST[carreira]', '$_POST[ac]', '$_POST[localtrabalho]', '$_POST[endereco]', '$_POST[cidade]', '$_POST[uf]', '$_POST[cep]', '$_POST[telres]', '$_POST[celular]', '$_POST[email]', '$_POST[idade]', '$_POST[funcao]', '$_POST[categoria]', '$_POST[login]', '$_POST[senha]');
INSERT INTO `AprobasCadastro` VALUES(6, 'SDSD', 'SDS', 'DSDS', 'DSDSD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `AprobasCadastro` VALUES(7, '$dados', '$_POST[filiacao]', '$_POST[nascionalidade]', '$_POST[naturalidade]', '$_POST[nascimento]', '$_POST[sexo]', '$_POST[endereco2]', '$_POST[cidade2]', '$_POST[uf2]', '$_POST[cep2]', '$_POST[telres2]', '$_POST[celular2]', '$_POST[email2]', '$_POST[rg]', '$_POST[orgaoemissor]', '$_POST[expedicao]', '$_POST[cpf]', '$_POST[ec]', '$_POST[cref]', '$_POST[gi]', '$_POST[fi]', '$_POST[uf3]', '$_POST[carreira]', '$_POST[ac]', '$_POST[localtrabalho]', '$_POST[endereco]', '$_POST[cidade]', '$_POST[uf]', '$_POST[cep]', '$_POST[telres]', '$_POST[celular]', '$_POST[email]', '$_POST[idade]', '$_POST[funcao]', '$_POST[categoria]', '$_POST[login]', '$_POST[senha]');
INSERT INTO `AprobasCadastro` VALUES(8, '2', '$_POST[filiacao]', '$_POST[nascionalidade]', '$_POST[naturalidade]', '$_POST[nascimento]', '$_POST[sexo]', '$_POST[endereco2]', '$_POST[cidade2]', '$_POST[uf2]', '$_POST[cep2]', '$_POST[telres2]', '$_POST[celular2]', '$_POST[email2]', '$_POST[rg]', '$_POST[orgaoemissor]', '$_POST[expedicao]', '$_POST[cpf]', '$_POST[ec]', '$_POST[cref]', '$_POST[gi]', '$_POST[fi]', '$_POST[uf3]', '$_POST[carreira]', '$_POST[ac]', '$_POST[localtrabalho]', '$_POST[endereco]', '$_POST[cidade]', '$_POST[uf]', '$_POST[cep]', '$_POST[telres]', '$_POST[celular]', '$_POST[email]', '$_POST[idade]', '$_POST[funcao]', '$_POST[categoria]', '$_POST[login]', '$_POST[senha]');

-- --------------------------------------------------------

--
-- Estrutura da tabela `AprobasCategoria`
--

CREATE TABLE `AprobasCategoria` (
  `id` int(11) NOT NULL auto_increment,
  `categoria` varchar(200) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `AprobasCategoria`
--

INSERT INTO `AprobasCategoria` VALUES(1, 'categoria');
INSERT INTO `AprobasCategoria` VALUES(2, 'categoria');
INSERT INTO `AprobasCategoria` VALUES(3, 'categoria');
INSERT INTO `AprobasCategoria` VALUES(4, 'saulo');
INSERT INTO `AprobasCategoria` VALUES(5, '');
INSERT INTO `AprobasCategoria` VALUES(6, 'saulo_teste_banco');
INSERT INTO `AprobasCategoria` VALUES(7, '');
INSERT INTO `AprobasCategoria` VALUES(8, 'saulo');
INSERT INTO `AprobasCategoria` VALUES(9, 'saulo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `AprobasEnderecoUsuario`
--

CREATE TABLE `AprobasEnderecoUsuario` (
  `id` int(11) NOT NULL auto_increment,
  `endereco` varchar(300) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` varchar(100) NOT NULL,
  `cep` int(100) NOT NULL,
  `telResidencial` int(100) NOT NULL,
  `telCelular` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `AprobasEnderecoUsuario`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `AprobasEvento`
--

CREATE TABLE `AprobasEvento` (
  `id` int(11) NOT NULL auto_increment,
  `titulo` varchar(200) collate latin1_general_ci NOT NULL,
  `descricao` varchar(200) collate latin1_general_ci NOT NULL,
  `dataEvento` varchar(300) collate latin1_general_ci NOT NULL,
  `precoAssociado` varchar(300) collate latin1_general_ci NOT NULL,
  `precoAvulso` varchar(300) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=25 ;

--
-- Extraindo dados da tabela `AprobasEvento`
--

INSERT INTO `AprobasEvento` VALUES(12, '', '', '1/1/2008', '', '');
INSERT INTO `AprobasEvento` VALUES(24, 'titulo', 'descricao', '', 'preco associado', 'preco Avulso');

-- --------------------------------------------------------

--
-- Estrutura da tabela `AprobasFaleConosco`
--

CREATE TABLE `AprobasFaleConosco` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(100) collate latin1_general_ci NOT NULL,
  `email` varchar(100) collate latin1_general_ci NOT NULL,
  `comentario` varchar(100) collate latin1_general_ci NOT NULL,
  `data` varchar(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `AprobasFaleConosco`
--

INSERT INTO `AprobasFaleConosco` VALUES(1, 'nome', 'email', 'mensagem', '15/ 7/ 2008');
INSERT INTO `AprobasFaleConosco` VALUES(2, 'nome', 'email', 'mensagem', '30/ 7/ 2008');

-- --------------------------------------------------------

--
-- Estrutura da tabela `AprobasInstituicao`
--

CREATE TABLE `AprobasInstituicao` (
  `id` int(11) NOT NULL auto_increment,
  `formatoInstituicao` varchar(300) NOT NULL,
  `uf` varchar(100) NOT NULL,
  `carreira` varchar(300) NOT NULL,
  `anoConclusao` varchar(100) NOT NULL,
  `localTrabalho` varchar(300) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `cep` int(100) NOT NULL,
  `residencial` int(100) NOT NULL,
  `celular` int(100) NOT NULL,
  `email` int(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `AprobasInstituicao`
--

INSERT INTO `AprobasInstituicao` VALUES(1, 'formato da instituicao', 'uf', 'carreira', 'ano de conclusao', 'local de trabalho', 'endereco', 'cidade', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `AprobasLogin`
--

CREATE TABLE `AprobasLogin` (
  `id` int(11) NOT NULL auto_increment,
  `login` varchar(200) collate latin1_general_ci NOT NULL,
  `senha` varchar(200) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `AprobasLogin`
--

INSERT INTO `AprobasLogin` VALUES(1, 'saulo', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `AprobasNoticia`
--

CREATE TABLE `AprobasNoticia` (
  `id` int(11) NOT NULL auto_increment,
  `titulo` varchar(200) collate latin1_general_ci NOT NULL,
  `resumo` varchar(300) collate latin1_general_ci NOT NULL,
  `conteudo` varchar(200) collate latin1_general_ci NOT NULL,
  `data` varchar(200) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=29 ;

--
-- Extraindo dados da tabela `AprobasNoticia`
--

INSERT INTO `AprobasNoticia` VALUES(2, 'titulo', 'resumo', 'conteudo', '15/ 7/ 2008');
INSERT INTO `AprobasNoticia` VALUES(17, 'titulo noticia', 'resumo noticia atualizada', 'conteudo noticia atualizad', '26/ 8/ 2008');
INSERT INTO `AprobasNoticia` VALUES(20, '', '', '', '26/ 8/ 2008');
INSERT INTO `AprobasNoticia` VALUES(27, '', '', '', '27/ 8/ 2008');
INSERT INTO `AprobasNoticia` VALUES(28, 'asa', 'asa', 'sasa', '27/ 8/ 2008');

-- --------------------------------------------------------

--
-- Estrutura da tabela `AprobasPessoa`
--

CREATE TABLE `AprobasPessoa` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(200) collate latin1_general_ci NOT NULL,
  `filiacao` varchar(300) collate latin1_general_ci NOT NULL,
  `nacionalidade` varchar(100) collate latin1_general_ci NOT NULL,
  `naturalidade` varchar(100) collate latin1_general_ci NOT NULL,
  `dataNascimento` varchar(100) collate latin1_general_ci NOT NULL,
  `sexo` varchar(100) collate latin1_general_ci NOT NULL,
  `cpf` varchar(20) collate latin1_general_ci NOT NULL,
  `rg` varchar(100) collate latin1_general_ci NOT NULL,
  `orgaoEmissor` varchar(100) collate latin1_general_ci NOT NULL,
  `dataExpedicao` varchar(100) collate latin1_general_ci NOT NULL,
  `dataExpiracao` varchar(200) collate latin1_general_ci NOT NULL,
  `statusUsuario` varchar(200) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `AprobasPessoa`
--

INSERT INTO `AprobasPessoa` VALUES(1, 'saulo user1', 'filiacao user1', 'nacionalidade user 1', 'brasileira', '25/03/1983', 'masculino', 'cpf', 'rg nao validado', 'orgao emissor', 'data expedicao', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `AprobasUser`
--

CREATE TABLE `AprobasUser` (
  `id` int(11) NOT NULL auto_increment,
  `endereco` varchar(300) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` varchar(100) NOT NULL,
  `cep` varchar(100) NOT NULL,
  `telResidencial` varchar(100) NOT NULL,
  `telCelular` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `estadoCivil` varchar(100) NOT NULL,
  `cref` varchar(100) NOT NULL,
  `grauInstrucao` varchar(100) NOT NULL,
  `funcao` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `AprobasUser`
--

INSERT INTO `AprobasUser` VALUES(1, '', '', '', '', '', '', '', 'estado civil', 'cref', 'grau de instrucao', 'funcao', 'categoria');

-- --------------------------------------------------------

--
-- Estrutura da tabela `AprobasUsuario`
--

CREATE TABLE `AprobasUsuario` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(200) collate latin1_general_ci NOT NULL,
  `cpf` int(11) NOT NULL,
  `idade` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `AprobasUsuario`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL auto_increment,
  `titulo` varchar(200) collate latin1_general_ci NOT NULL,
  `descricao` varchar(200) collate latin1_general_ci NOT NULL,
  `dataEvento` varchar(300) collate latin1_general_ci NOT NULL,
  `precoAssociado` varchar(300) collate latin1_general_ci NOT NULL,
  `precoAvulso` varchar(300) collate latin1_general_ci NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` VALUES(1, 'titulo', 'descricao', 'data', 'preco', 'preco', '2008-08-10 20:56:01', '2008-08-10 20:56:01');
INSERT INTO `eventos` VALUES(2, 'lkjhlkj', 'lkjlk', 'jlk', 'j', 'lkj', '2008-08-10 23:18:08', '2008-08-10 23:18:08');
INSERT INTO `eventos` VALUES(3, 'lkjhlkj', 'lkjlk', 'jlk', 'j', 'lkj', '2008-08-10 23:18:14', '2008-08-10 23:18:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL auto_increment,
  `titulo` varchar(200) collate latin1_general_ci NOT NULL,
  `resumo` varchar(300) collate latin1_general_ci NOT NULL,
  `conteudo` varchar(200) collate latin1_general_ci NOT NULL,
  `data` varchar(200) collate latin1_general_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` VALUES(1, 'sdsd', 'sdsds', 'sdsds', 'sds', '2008-08-10 21:00:49', '2008-08-10 21:00:49');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usercp`
--

CREATE TABLE `usercp` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `nascimento` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `complemento` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `uf` varchar(45) NOT NULL,
  `curso` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `ip` varchar(45) NOT NULL,
  `create` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `usercp`
--

