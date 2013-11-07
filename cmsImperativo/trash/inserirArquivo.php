<?php
include("../model/Conecta.php");
include("../model/beans/Biblioteca.php");
include("../model/dao/DaoBiblioteca.php");

$biblioteca = new biblioteca();
$biblioteca->setTitulo($_POST["titulo"]);
$biblioteca->setCaminho($_POST["caminho"]);
$biblioteca->setData("testedata");
//print_r($biblioteca);

$conexao   = new Conecta();
$daoEvento = new DaoBiblioteca($biblioteca,$conexao);

$daoEvento->inserir();
//print_r($daoEvento->visualizarTudo());

header("Location: ../view/cms/home.php");
?>