<?php
include("../../model/Conecta.php");
include("../../model/beans/Biblioteca.php");
include("../../model/dao/DaoBiblioteca.php");

$biblioteca = new Biblioteca();
$biblioteca->setNome($_POST["filename"]);
$biblioteca->setDescricao($_POST["descricao"]);
$biblioteca->setCategoria($_POST["categoria"]);
$biblioteca->setStatus($_POST["status"]);

$conexao   = new Conecta();
$daoBiblioteca = new DaoBiblioteca($biblioteca,$conexao);
$daoBiblioteca->atualizar($_GET['id']);

header("Location: ../../arquivos.php");
?>