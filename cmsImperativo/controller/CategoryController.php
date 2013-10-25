<?php
if (!empty ($_GET)) {

	print_r($_GET);

	if ($_GET["action"] == "insert") {

		include ("../model/Conecta.php");
		include ("../model/beans/Categoria.php");
		include ("../model/dao/DaoCategoria.php");

		//print $_POST["paiCategoria"];

		$categoria = new Categoria($_POST["categoria"], $_POST["paiCategoria"]);
		$conexao = new Conecta();
		$daoCategoria = new DaoCategoria($categoria, $conexao);

		$daoCategoria->inserir();
		//print_r($daoEvento->visualizarTudo());
		header("Location: ../viewCategoria.php");

	}

	if ($_GET["action"] == "update") {
		include ("../model/Conecta.php");
		include ("../model/beans/Categoria.php");
		include ("../model/dao/DaoCategoria.php");

		$categoria = new Categoria($_POST["categoria"], $_POST["paiCategoria"]);
		$conexao = new Conecta();
		$daoCategoria = new DaoCategoria($categoria, $conexao);
		$daoCategoria->atualizar($_GET['id']);

		header("Location: ../viewCategoria.php");
	}

	if ($_GET["action"] == "delete") {
		include ("../model/Conecta.php");
		include ("../model/beans/Categoria.php");
		include ("../model/dao/DaoCategoria.php");

		$categoria = new Categoria("paiCategoria", "Categoria");
		$conexao = new Conecta();
		$daoCategoria = new DaoCategoria($categoria, $conexao);

		$daoCategoria->deletar($_GET['id']);

		header("Location: ../viewCategoria.php");
	}

	if ($_GET["action"] == "view") {
		include ("model/Conecta.php");
		include ("model/beans/Categoria.php");
		include ("model/dao/DaoCategoria.php");

		$categoria = new Categoria("PaiCategoria", "Categoria");
		$conexao = new Conecta();
		$daoCategoria = new DaoCategoria($categoria, $conexao);
		$dados = $daoCategoria->visualizarID($_GET['id']);

	}

} else {

	include ("model/Conecta.php");
	include ("model/beans/Categoria.php");
	include ("model/dao/DaoCategoria.php");

	$conexao = new Conecta();
	$categoria = new Categoria("", "");
	$daoCategoria = new DaoCategoria($categoria, $conexao);
	$dados = $daoCategoria->visualizarTudo();

}
?>
