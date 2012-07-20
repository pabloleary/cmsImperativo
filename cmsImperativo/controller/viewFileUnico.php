<?php
include("model/beans/Biblioteca.php");
include("model/dao/DaoBiblioteca.php");

$conexao        = new Conecta();
$biblioteca     = new Biblioteca();
$daoBiblioteca  = new DaoBiblioteca($biblioteca,$conexao);
$dados         = $daoBiblioteca->visualizarID($_GET['id']);
?>