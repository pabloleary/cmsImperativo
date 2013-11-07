<?php
include("../../model/Conecta.php");
include("../../model/beans/Youtube.php");
include("../../model/dao/DaoYoutube.php");

$youtube = new Youtube();
$youtube->setTitulo($_POST["titulo"]);
$youtube->setUrl($_POST["url"]);
$youtube->setDescricao($_POST["descricao"]);


$conexao   = new Conecta();
$daoYoutube = new DaoYoutube($youtube,$conexao);

$daoYoutube->inserir();
//print_r($daoEvento->visualizarTudo());

header("Location: ../../youtube.php");
?>