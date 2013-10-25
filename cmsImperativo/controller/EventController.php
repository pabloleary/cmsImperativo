<?php
if (!empty ($_GET)) {

	print_r($_GET);

	if ($_GET["action"] == "insert") {

		include ("../model/Conecta.php");
		include ("../model/beans/Evento.php");
		include ("../model/dao/DaoEvento.php");
		$today = $_POST['dia'] . "/" . $_POST['mes'] . "/" . $_POST['ano'];

		$evento = new Evento();
		$evento->setTitulo($_POST["titulo"]);
		$evento->setDescricao($_POST["descricao"]);
		$evento->setDataEvento($today);
		$evento->setPrecoAssociado($_POST["precoAssociado"]);
		$evento->setPrecoAvulso($_POST["precoAvulso"]);
		$evento->setStatus($_POST["status"]);

		//print_r($evento);

		$conexao = new Conecta();
		$daoEvento = new DaoEvento($evento, $conexao);

		$daoEvento->inserir();
		//print_r($daoEvento->visualizarTudo());

		header("Location: ../eventos.php");

	}

	if ($_GET["action"] == "update") {
		include ("../model/Conecta.php");
		include ("../model/beans/Evento.php");
		include ("../model/dao/DaoEvento.php");

		$data = $_POST["dia"] . "/" . $_POST["mes"] . "/" . $_POST["ano"];

		$evento = new Evento();
		$evento->setTitulo($_POST["titulo"]);
		$evento->setDescricao($_POST["descricao"]);
		$evento->setDataEvento($data);
		$evento->setPrecoAvulso($_POST["precoAvulso"]);
		$evento->setPrecoAssociado($_POST["precoAssociado"]);

		$conexao = new Conecta();
		$daoEvento = new DaoEvento($evento, $conexao);

		$daoEvento->atualizar($_GET['id']);

		header("Location: ../eventos.php");
	}

	if ($_GET["action"] == "delete") {
		include ("../model/Conecta.php");
		include ("../model/beans/Evento.php");
		include ("../model/dao/DaoEvento.php");

		$evento = new Evento();
		$conexao = new Conecta();
		$daoEvento = new DaoEvento($evento, $conexao);

		$daoEvento->deletar($_GET['id']);

		header("Location: ../eventos.php");
	}

	if ($_GET["action"] == "view") {

		include ("model/Conecta.php");
		include ("model/beans/Evento.php");
		include ("model/dao/DaoEvento.php");

		$evento = new Evento();
		$conexao = new Conecta();
		$daoEvento = new DaoEvento($evento, $conexao);

		$dados = $daoEvento->visualizarID($_GET['id']);
	}

} else {

	include ("model/Conecta.php");
	include ("model/beans/Evento.php");
	include ("model/dao/DaoEvento.php");

	$evento = new Evento();
	$conexao = new Conecta();
	$daoEvento = new DaoEvento($evento, $conexao);

	$dados = $daoEvento->visualizarTudo();

}
?>
