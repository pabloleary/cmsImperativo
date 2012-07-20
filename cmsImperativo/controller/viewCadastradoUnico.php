<?php
include("model/Conecta.php");
include("model/dao/DaoViewCadastrado.php");

$conecta           = new Conecta();
$daoViewCadastrado = new DaoViewCadastrado($conecta);
$dados             = $daoViewCadastrado->visualizarID($_GET["id"]);

//print_r($dados);
?>