<?php
session_start();
include ("../model/Conecta.php");
include ("../model/dao/DaoLogar.php");
include ("Login.php");

$conecta = new Conecta();
$dao = new DaoLogar($conecta);
$login = new Login($_POST["login"], $_POST["senha"], $dao);

$test = $dao->logar($_POST["login"], $_POST["senha"]);

if ($test) {
	$_SESSION['valida'] = 1;
} else {
	$_SESSION['valida'] = 0;
}


if ($_SESSION['valida'] == 1) {
	header("Location: ../home.php");
} else {
	header("Location: ../erro.php");
}

?>