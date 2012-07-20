<?
include("../../model/Conecta.php");
include("../../model/beans/Noticia.php");
include("../../model/dao/DaoNoticia.php");

$noticia = new Noticia();
$noticia->setTitulo($_POST["titulo"]);
$noticia->setResumo($_POST["resumo"]);
$noticia->setConteudo($_POST["conteudo"]);

$conexao   = new Conecta();
$daoNoticia = new DaoNoticia($noticia,$conexao);

$daoNoticia->atualizar($_GET['id']);

header("Location: ../../home.php");
?>