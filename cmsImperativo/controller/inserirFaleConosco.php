<?
include("../model/Conecta.php");
include("../model/beans/FaleConosco.php");
include("../model/dao/DaoFaleConosco.php");

$today = date("j/ n/ Y");
$faleConosco = new FaleConosco();
$faleConosco->setNome($_POST["nome"]);
$faleConosco->setEmail($_POST["email"]);
$faleConosco->setComentario($_POST["mensagem"]);
$faleConosco->setData($today);
//include("mailFaleConosco.php");
//print_r($faleConosco);

$conexao        = new Conecta();
$daoFaleConosco = new DaoFaleConosco($faleConosco,$conexao);

$daoFaleConosco->inserir();

//print_r($daoFaleConosco->visualizarTudo());
header("Location: ../../aprobas/faleconosco.php");

?>