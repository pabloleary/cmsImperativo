<?
include("../../model/Conecta.php");
include("../../model/beans/Noticia.php");
include("../../model/dao/DaoNoticia.php");

$noticia   = new Noticia();
$conexao   = new Conecta();
$daoEvento = new DaoNoticia($noticia,$conexao);


$daoEvento->deletar($_GET['id']);

header("Location: ../../home.php");
?>