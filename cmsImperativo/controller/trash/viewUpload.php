<?php
include("model/Conecta.php");
include("model/beans/Biblioteca.php");
include("model/dao/DaoBiblioteca.php");

$conexao        = new Conecta();
$biblioteca     = new Biblioteca();
$daoBiblioteca  = new DaoBiblioteca($biblioteca,$conexao);

$dados         = $daoBiblioteca->visualizarTudo();
/*print "<pre>";
print_r($dados);
print "</pre>";*/
?>