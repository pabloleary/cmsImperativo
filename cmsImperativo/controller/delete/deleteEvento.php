<?php
include("../../model/Conecta.php");
include("../../model/beans/Evento.php");
include("../../model/dao/DaoEvento.php");

$evento    = new Evento();
$conexao   = new Conecta();
$daoEvento = new DaoEvento($evento,$conexao);

$daoEvento->deletar($_GET['id']);

header("Location: ../../eventos.php");
?>