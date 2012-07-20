<?
include("../model/Conecta.php");
include("../model/beans/FaleConosco.php");
include("../model/dao/DaoFaleConosco.php");

$faleConosco    = new FaleConosco();
$conexao        = new Conecta();
$daoFaleConosco = new DaoFaleConosco($faleConosco,$conexao);

$daoFaleConosco->deletar($_GET['id']);
header("Location: ../view/cms/faleConosco.php");

/*
print "<pre>";
print_r($dados);
print "</pre>";
**/	
?>