<?php
if (!empty ($_GET)) {

	print_r($_GET);

	if ($_GET["action"] == "insert") {

	}

	if ($_GET["action"] == "update") {

	}

	if ($_GET["action"] == "delete") {
		include ("../model/Conecta.php");
		include ("../model/beans/FaleConosco.php");
		include ("../model/dao/DaoFaleConosco.php");

		$faleConosco = new FaleConosco();
		$conexao = new Conecta();
		$daoFaleConosco = new DaoFaleConosco($faleConosco, $conexao);

		$daoFaleConosco->deletar($_GET['id']);
		header("Location: ../faleConosco.php");

	}

	if ($_GET["action"] == "view") {

	}

} else {
	include ("model/Conecta.php");
	include ("model/beans/FaleConosco.php");
	include ("model/dao/DaoFaleConosco.php");

	$faleConosco = new FaleConosco();
	$conexao = new Conecta();
	$daoFaleConosco = new DaoFaleConosco($faleConosco, $conexao);

	$dados = $daoFaleConosco->visualizarTudo();

}
?>
