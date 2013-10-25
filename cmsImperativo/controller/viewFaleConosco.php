<?php

include("model/Conecta.php");
include("model/beans/FaleConosco.php");
include("model/dao/DaoFaleConosco.php");

$faleConosco    = new FaleConosco();
$conexao        = new Conecta();
$daoFaleConosco = new DaoFaleConosco($faleConosco,$conexao);

$dados = $daoFaleConosco->visualizarTudo();


/*
print "<pre>";
print_r($dados);
print "</pre>";
**/	
?>