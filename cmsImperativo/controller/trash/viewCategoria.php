<?php
include("model/Conecta.php");
include("model/beans/Categoria.php");
include("model/dao/DaoCategoria.php");

$conexao       = new Conecta();
$categoria    = new Categoria("","");

$daoCategoria     = new DaoCategoria($categoria,$conexao);

$dados         = $daoCategoria->visualizarTudo();
?>