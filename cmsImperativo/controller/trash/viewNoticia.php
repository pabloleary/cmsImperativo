<?php
include("model/Conecta.php");
include("model/beans/Noticia.php");
include("model/dao/DaoNoticia.php");

$noticia    = new Noticia();
$conexao    = new Conecta();
$daoNoticia = new DaoNoticia($noticia,$conexao);

$dados =      $daoNoticia->visualizarTudo();

?>