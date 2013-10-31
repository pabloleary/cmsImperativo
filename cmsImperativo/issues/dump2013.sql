--
-- Estrutura da tabela `Login`
--

CREATE TABLE `Login` (
  `id` int(11) NOT NULL auto_increment,
  `login` varchar(200) collate latin1_general_ci NOT NULL,
  `senha` varchar(200) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=0 ;

INSERT INTO `login` VALUES (NULL , 'saulo', '202cb962ac59075b964b07152d234b70');



CREATE TABLE `Noticia` (
  `id` int(11) NOT NULL auto_increment,
  `titulo` varchar(200) collate latin1_general_ci NOT NULL,
  `resumo` varchar(300) collate latin1_general_ci NOT NULL,
  `conteudo` varchar(200) collate latin1_general_ci NOT NULL,
  `data` varchar(200) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=0 ;

--
-- Extraindo dados da tabela `AprobasNoticia`
--

INSERT INTO `Noticia` VALUES(NULL, 'titulo', 'resumo', 'conteudo', '15/ 7/ 2008');
INSERT INTO `Noticia` VALUES(NULL, 'titulo noticia', 'resumo noticia atualizada', 'conteudo noticia atualizad', '26/ 8/ 2008');
INSERT INTO `Noticia` VALUES(NULL, '', '', '', '26/ 8/ 2008');
INSERT INTO `Noticia` VALUES(NULL, '', '', '', '27/ 8/ 2008');
INSERT INTO `Noticia` VALUES(NULL, 'asa', 'asa', 'sasa', '27/ 8/ 2008');


CREATE TABLE `Evento` (
  `id` int(11) NOT NULL auto_increment,
  `titulo` varchar(200) collate latin1_general_ci NOT NULL,
  `descricao` varchar(200) collate latin1_general_ci NOT NULL,
  `dataEvento` varchar(300) collate latin1_general_ci NOT NULL,
  `precoAssociado` varchar(300) collate latin1_general_ci NOT NULL,
  `precoAvulso` varchar(300) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=0 ;

--
-- Extraindo dados da tabela `AprobasEvento`
--

INSERT INTO `Evento` VALUES(NULL, '', '', '1/1/2008', '', '');
INSERT INTO `Evento` VALUES(NULL, 'titulo', 'descricao', '', 'preco associado', 'preco Avulso');

--
-- Estrutura da tabela `Arquivo`
--

CREATE TABLE `Arquivo` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(100) collate latin1_general_ci NOT NULL,
  `data` varchar(200) collate latin1_general_ci NOT NULL,
  `descricao` varchar(200) collate latin1_general_ci NOT NULL,
  `categoria` varchar(200) collate latin1_general_ci NOT NULL,
  `status` varchar(200) collate latin1_general_ci NOT NULL,
  `fileName` varchar(200) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=0 ;

--
-- Extraindo dados da tabela `Arquivo`
--

INSERT INTO `Arquivo` VALUES(NULL, 'aa', '', '', '', '', '');
INSERT INTO `Arquivo` VALUES(NULL, 'aprobas 20080127 0015.sql', '', '', '', '', '');
INSERT INTO `Arquivo` VALUES(NULL, 'DSC00467.JPG', '', '', '', '', '');
INSERT INTO `Arquivo` VALUES(NULL, 'nome arquivo', '17/07/2008', 'descricao', 'categoria1', '', '');
INSERT INTO `Arquivo` VALUES(NULL, 'nome do arquivo', '17/07/2008', ' descricao', 'categoria1', '', '');
INSERT INTO `Arquivo` VALUES(NULL, 'testeMonday', '21/07/2008', 'testeMonday', 'categoria1', '', '');
INSERT INTO `Arquivo` VALUES(NULL, 'testeMonday', '21/07/2008', 'testeMonday', 'categoria1', '', 'DSC00467.JPG');
INSERT INTO `Arquivo` VALUES(NULL, 'titulo', '25/07/2008', 'descricao', 'saulo_teste_banco', 'publico', 'httpd.conf');
INSERT INTO `Arquivo` VALUES(NULL, 'sds', '25/08/2008', ' sdsd', 'categoria', 'publico', 'phpinfo.php');
INSERT INTO `Arquivo` VALUES(NULL, 'sds', '25/08/2008', ' sdsd', 'categoria', 'publico', 'phpinfo.php');
INSERT INTO `Arquivo` VALUES(NULL, 'sauloteste', '25/08/2008', ' descricao teste', 'saulo_teste_banco', 'privado', 'template-4721226394322632398.xml');


--
-- Estrutura da tabela `AprobasCadastro`
--

CREATE TABLE `Cadastro` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

--
-- Extraindo dados da tabela `AprobasCadastro`
--

INSERT INTO `Cadastro` VALUES(NULL, '$_POST[nome]', '$_POST[filiacao]', '$_POST[nascionalidade]', '$_POST[naturalidade]', '$_POST[nascimento]', '$_POST[sexo]', '$_POST[endereco2]', '$_POST[cidade2]', '$_POST[uf2]', '$_POST[cep2]', '$_POST[telres2]', '$_POST[celular2]', '$_POST[email2]', '$_POST[rg]', '$_POST[orgaoemissor]', '$_POST[expedicao]', '$_POST[cpf]', '$_POST[ec]', '$_POST[cref]', '$_POST[gi]', '$_POST[fi]', '$_POST[uf3]', '$_POST[carreira]', '$_POST[ac]', '$_POST[localtrabalho]', '$_POST[endereco]', '$_POST[cidade]', '$_POST[uf]', '$_POST[cep]', '$_POST[telres]', '$_POST[celular]', '$_POST[email]', '$_POST[idade]', '$_POST[funcao]', '$_POST[categoria]', '$_POST[login]', '$_POST[senha]');
INSERT INTO `Cadastro` VALUES(NULL, 'saulo', '$_POST[filiacao]', '$_POST[nascionalidade]', '$_POST[naturalidade]', '$_POST[nascimento]', '$_POST[sexo]', '$_POST[endereco2]', '$_POST[cidade2]', '$_POST[uf2]', '$_POST[cep2]', '$_POST[telres2]', '$_POST[celular2]', '$_POST[email2]', '$_POST[rg]', '$_POST[orgaoemissor]', '$_POST[expedicao]', '$_POST[cpf]', '$_POST[ec]', '$_POST[cref]', '$_POST[gi]', '$_POST[fi]', '$_POST[uf3]', '$_POST[carreira]', '$_POST[ac]', '$_POST[localtrabalho]', '$_POST[endereco]', '$_POST[cidade]', '$_POST[uf]', '$_POST[cep]', '$_POST[telres]', '$_POST[celular]', '$_POST[email]', '$_POST[idade]', '$_POST[funcao]', '$_POST[categoria]', '$_POST[login]', '$_POST[senha]');
INSERT INTO `Cadastro` VALUES(NULL, '$dados', '$_POST[filiacao]', '$_POST[nascionalidade]', '$_POST[naturalidade]', '$_POST[nascimento]', '$_POST[sexo]', '$_POST[endereco2]', '$_POST[cidade2]', '$_POST[uf2]', '$_POST[cep2]', '$_POST[telres2]', '$_POST[celular2]', '$_POST[email2]', '$_POST[rg]', '$_POST[orgaoemissor]', '$_POST[expedicao]', '$_POST[cpf]', '$_POST[ec]', '$_POST[cref]', '$_POST[gi]', '$_POST[fi]', '$_POST[uf3]', '$_POST[carreira]', '$_POST[ac]', '$_POST[localtrabalho]', '$_POST[endereco]', '$_POST[cidade]', '$_POST[uf]', '$_POST[cep]', '$_POST[telres]', '$_POST[celular]', '$_POST[email]', '$_POST[idade]', '$_POST[funcao]', '$_POST[categoria]', '$_POST[login]', '$_POST[senha]');
INSERT INTO `Cadastro` VALUES(NULL, 'SDSD', 'SDS', 'DSDS', 'DSDSD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `Cadastro` VALUES(NULL, '$dados', '$_POST[filiacao]', '$_POST[nascionalidade]', '$_POST[naturalidade]', '$_POST[nascimento]', '$_POST[sexo]', '$_POST[endereco2]', '$_POST[cidade2]', '$_POST[uf2]', '$_POST[cep2]', '$_POST[telres2]', '$_POST[celular2]', '$_POST[email2]', '$_POST[rg]', '$_POST[orgaoemissor]', '$_POST[expedicao]', '$_POST[cpf]', '$_POST[ec]', '$_POST[cref]', '$_POST[gi]', '$_POST[fi]', '$_POST[uf3]', '$_POST[carreira]', '$_POST[ac]', '$_POST[localtrabalho]', '$_POST[endereco]', '$_POST[cidade]', '$_POST[uf]', '$_POST[cep]', '$_POST[telres]', '$_POST[celular]', '$_POST[email]', '$_POST[idade]', '$_POST[funcao]', '$_POST[categoria]', '$_POST[login]', '$_POST[senha]');
INSERT INTO `Cadastro` VALUES(NULL, '2', '$_POST[filiacao]', '$_POST[nascionalidade]', '$_POST[naturalidade]', '$_POST[nascimento]', '$_POST[sexo]', '$_POST[endereco2]', '$_POST[cidade2]', '$_POST[uf2]', '$_POST[cep2]', '$_POST[telres2]', '$_POST[celular2]', '$_POST[email2]', '$_POST[rg]', '$_POST[orgaoemissor]', '$_POST[expedicao]', '$_POST[cpf]', '$_POST[ec]', '$_POST[cref]', '$_POST[gi]', '$_POST[fi]', '$_POST[uf3]', '$_POST[carreira]', '$_POST[ac]', '$_POST[localtrabalho]', '$_POST[endereco]', '$_POST[cidade]', '$_POST[uf]', '$_POST[cep]', '$_POST[telres]', '$_POST[celular]', '$_POST[email]', '$_POST[idade]', '$_POST[funcao]', '$_POST[categoria]', '$_POST[login]', '$_POST[senha]');


--
-- Estrutura da tabela `AprobasFaleConosco`
--

CREATE TABLE `FaleConosco` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(100) collate latin1_general_ci NOT NULL,
  `email` varchar(100) collate latin1_general_ci NOT NULL,
  `comentario` varchar(100) collate latin1_general_ci NOT NULL,
  `data` varchar(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=0 ;

--
-- Extraindo dados da tabela `AprobasFaleConosco`
--

INSERT INTO `FaleConosco` VALUES(NULL, 'nome', 'email', 'mensagem', '15/ 7/ 2008');
INSERT INTO `FaleConosco` VALUES(NULL, 'nome', 'email', 'mensagem', '30/ 7/ 2008');

DROP TABLE IF EXISTS `cms`.`address`;
CREATE TABLE  `cms`.`address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,    
  `address` varchar(300) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postalcode` int(100) NOT NULL,  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;







