<?php
include("model/Conecta.php");
include("model/beans/Categoria.php");
include("model/dao/DaoCategoria.php");

$categoria    = new Categoria("PaiCategoria","Categoria");
$conexao   = new Conecta();
$daoCategoria = new DaoCategoria($categoria,$conexao);
$dados = $daoCategoria->visualizarID($_GET['id']);
?>