<?php
include("model/Conecta.php");
include("model/beans/Youtube.php");
include("model/dao/DaoYoutube.php");

$youtube = new Youtube();
$conexao    = new Conecta();
$daoYoutube = new DaoYoutube($youtube,$conexao);

$dados =      $daoYoutube->visualizarTudo();

?>