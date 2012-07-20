<?php
include("../cms/model/Conecta.php");
include("../cms/model/beans/Categoria.php");
include("../cms/model/dao/DaoCategoria.php");

$conexao       = new Conecta();
$categoria    = new Categoria("","");

$daoCategoria     = new DaoCategoria($categoria,$conexao);

$dados         = $daoCategoria->visualizarTudo();
?>