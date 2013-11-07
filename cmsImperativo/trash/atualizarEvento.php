<?php
include("../../model/Conecta.php");
include("../../model/beans/Evento.php");
include("../../model/dao/DaoEvento.php");


$data = $_POST["dia"]."/".$_POST["mes"]."/".$_POST["ano"];

$evento = new Evento();
$evento->setTitulo($_POST["titulo"]);
$evento->setDescricao($_POST["descricao"]);
$evento->setDataEvento($data);
$evento->setPrecoAvulso($_POST["precoAvulso"]);
$evento->setPrecoAssociado($_POST["precoAssociado"]);

$conexao   = new Conecta();
$daoEvento = new DaoEvento($evento,$conexao);

$daoEvento->atualizar($_GET['id']);

header("Location: ../../eventos.php");
?>