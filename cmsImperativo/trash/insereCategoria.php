<?php
include("../../model/Conecta.php");
include("../../model/beans/Categoria.php");
include("../../model/dao/DaoCategoria.php");

//print $_POST["paiCategoria"];

$categoria = new Categoria($_POST["categoria"],$_POST["paiCategoria"]);
$conexao      = new Conecta();
$daoCategoria = new DaoCategoria($categoria,$conexao);

$daoCategoria->inserir();
//print_r($daoEvento->visualizarTudo());
header("Location: ../../viewCategoria.php");
?>