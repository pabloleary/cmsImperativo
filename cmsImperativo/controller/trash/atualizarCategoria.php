<?php
include("../../model/Conecta.php");
include("../../model/beans/Categoria.php");
include("../../model/dao/DaoCategoria.php");

$categoria = new Categoria($_POST["categoria"],$_POST["paiCategoria"]);
$conexao   = new Conecta();
$daoCategoria = new DaoCategoria($categoria,$conexao);
$daoCategoria->atualizar($_GET['id']);

header("Location: ../../viewCategoria.php");
?>