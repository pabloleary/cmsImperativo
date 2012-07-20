<?php
include("../cms/model/Conecta.php");
include("../cms/model/beans/Noticia.php");
include("../cms/model/dao/DaoNoticia.php");

$noticia    = new Noticia();
$conexao    = new Conecta();
$daoNoticia = new DaoNoticia($noticia,$conexao);
$dados = $daoNoticia->visualizarNoticias();

?>