<?php
include("../../model/Conecta.php");
include("../../model/beans/Biblioteca.php");
include("../../model/dao/DaoBiblioteca.php");

$biblioteca    = new Biblioteca();
$conexao   = new Conecta();
$daoBiblioteca = new DaoBiblioteca($biblioteca,$conexao);

$daoBiblioteca->delete($_GET['id']);

header("Location: ../../arquivos.php");
?>