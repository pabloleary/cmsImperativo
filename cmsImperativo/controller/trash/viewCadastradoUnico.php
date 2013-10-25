<?php
include("model/Conecta.php");
include("model/dao/userDao/DaoUserRegister.php");
include("model/beans/UserRegister.php");

$conecta           = new Conecta();
$bean 			   = new UserRegister();
$daoViewCadastrado = new DaoUserRegister($bean,$conecta);

$dados             = $daoViewCadastrado->viewByID($_GET["id"]);

//print_r($dados);
?>