<?php
//include("../cms/model/Conecta.php");
include("../cms/model/beans/Biblioteca.php");
include("../cms/model/dao/DaoBiblioteca.php");

$conexao                = new Conecta();
$biblioteca             = new Biblioteca("","");
$daoBiblioteca          = new DaoBiblioteca($biblioteca,$conexao);
$dadosArquivos          = $daoBiblioteca->visualizarTudo();

?>