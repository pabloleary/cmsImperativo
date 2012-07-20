<?php
include("../cms/model/Conecta.php");
include("../cms/model/beans/Evento.php");
include("../cms/model/dao/DaoEvento.php");

$evento    = new Evento();
$conexao   = new Conecta();
$daoEvento = new DaoEvento($evento,$conexao);

$value = $daoEvento->visualizarID($_GET['id']);

/*print "<pre>";
print "</pre>";*/

?>