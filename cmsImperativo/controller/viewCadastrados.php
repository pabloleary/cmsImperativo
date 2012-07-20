<?php
include("../../model/Conecta.php");
include("../../model/beans/Pessoa.php");
include("../../model/dao/DaoPessoa.php");

$conexao       = new Conecta();
$beanPessoa    = new Pessoa();
$daoPessoa     = new DaoPessoa($beanPessoa,$conexao);
$dados         = $daoPessoa->visualizarTudo();

?>