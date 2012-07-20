<?
include("../model/Conecta.php");
include("../model/beans/Instituicao.php");
include("../model/dao/DaoInstituicao.php");

$conecta = new Conecta();

$instituicao    = new Instituicao(
$_POST["fi"],
$_POST["uf3"],
$_POST["carreira"],
$_POST["ac"],
$_POST["localtrabalho"],
$_POST["endereco"],
$_POST["cidade"],
$_POST["cep"],
$_POST["telres"],
$_POST["celular"],
$_POST["email"]
);
  
$daoInstituicao = new DaoInstituicao($instituicao,$conecta);
$daoInstituicao->inserir();

header('Location: ../cadastrofinal.php')
?>