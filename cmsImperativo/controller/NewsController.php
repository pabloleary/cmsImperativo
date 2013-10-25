<?php
if (!empty ($_GET)) {

	print_r($_GET);

	if ($_GET["action"] == "insert") {

		include ("../model/Conecta.php");
		include ("../model/beans/Noticia.php");
		include ("../model/dao/DaoNoticia.php");
		$today = date("j/ n/ Y");

		$noticia = new Noticia();
		$noticia->setTitulo($_POST["titulo"]);
		$noticia->setResumo($_POST["resumo"]);
		$noticia->setConteudo($_POST["conteudo"]);
		$noticia->setData($today);
		$noticia->setStatus($_POST["status"]);
		//print_r($noticia);

		$conexao = new Conecta();
		$daoEvento = new DaoNoticia($noticia, $conexao);

		$daoEvento->inserir();
		//print_r($daoEvento->visualizarTudo());

		header("Location: ../home.php");
	}

	if ($_GET["action"] == "update") {
		include ("../model/Conecta.php");
		include ("../model/beans/Noticia.php");
		include ("../model/dao/DaoNoticia.php");

		$noticia = new Noticia();
		$noticia->setTitulo($_POST["titulo"]);
		$noticia->setResumo($_POST["resumo"]);
		$noticia->setConteudo($_POST["conteudo"]);

		$conexao = new Conecta();
		$daoNoticia = new DaoNoticia($noticia, $conexao);

		$daoNoticia->atualizar($_GET['id']);

		header("Location: ../home.php");
	}

	if ($_GET["action"] == "delete") {
		include ("../model/Conecta.php");
		include ("../model/beans/Noticia.php");
		include ("../model/dao/DaoNoticia.php");

		$noticia = new Noticia();
		$conexao = new Conecta();
		$daoEvento = new DaoNoticia($noticia, $conexao);

		$daoEvento->deletar($_GET['id']);

		header("Location: ../home.php");
	}

	if ($_GET["action"] == "view") {

		include ("model/Conecta.php");
		include ("model/beans/Noticia.php");
		include ("model/dao/DaoNoticia.php");

		$noticia = new Noticia();
		$conexao = new Conecta();
		$daoNoticia = new DaoNoticia($noticia, $conexao);
		$dados = $daoNoticia->visualizarID($_GET['id']);

	}

} else {

	include ("model/Conecta.php");
	include ("model/beans/Noticia.php");
	include ("model/dao/DaoNoticia.php");

	$noticia = new Noticia();
	$conexao = new Conecta();
	$daoNoticia = new DaoNoticia($noticia, $conexao);

	$dados = $daoNoticia->visualizarTudo();
}
?>
