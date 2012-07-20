<?php
include("../../model/Conecta.php");
include("../../model/beans/Categoria.php");
include("../../model/dao/DaoCategoria.php");

$categoria    = new Categoria("paiCategoria","Categoria");
$conexao   = new Conecta();
$daoCategoria = new DaoCategoria($categoria,$conexao);

$daoCategoria->deletar($_GET['id']);

header("Location: ../../viewCategoria.php");
?>