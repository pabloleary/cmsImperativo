<?
include("../model/Conecta.php");
include("../model/beans/Noticia.php");
include("../model/dao/DaoNoticia.php");
$today = date("j/ n/ Y");

$noticia = new Noticia();
$noticia->setTitulo($_POST["titulo"]);
$noticia->setResumo($_POST["resumo"]);
$noticia->setConteudo($_POST["conteudo"]);
$noticia->setData($today);
$noticia->setStatus($_POST["status"]);
//print_r($noticia);

$conexao   = new Conecta();
$daoEvento = new DaoNoticia($noticia,$conexao);

$daoEvento->inserir();
//print_r($daoEvento->visualizarTudo());

header("Location: ../home.php");
?>