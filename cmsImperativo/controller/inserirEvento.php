<?
include("../model/Conecta.php");
include("../model/beans/Evento.php");
include("../model/dao/DaoEvento.php");
$today = $_POST['dia']."/".$_POST['mes']."/".$_POST['ano'];


$evento = new Evento();
$evento->setTitulo($_POST["titulo"]);
$evento->setDescricao($_POST["descricao"]);
$evento->setDataEvento($today);
$evento->setPrecoAssociado($_POST["precoAssociado"]);
$evento->setPrecoAvulso($_POST["precoAvulso"]);
$evento->setStatus($_POST["status"]);

//print_r($evento);

$conexao   = new Conecta();
$daoEvento = new DaoEvento($evento,$conexao);

$daoEvento->inserir();
//print_r($daoEvento->visualizarTudo());

header("Location: ../eventos.php");
?>