<?
include("../model/Conecta.php");
include("../model/beans/Pessoa.php");
include("../model/beans/Login.php");

include("../model/dao/DaoPessoa.php");
include("../model/dao/DaoLogin.php");

$conecta = new Conecta();
/*
print "<pre>";
print_r($_POST);
print "</pre>";
*/


$pessoa   = new Pessoa(
$_POST["nome"],
$_POST["filiacao"],
$_POST["nascionalidade"],
$_POST["naturalidade"],
$_POST["nascimento"],
$_POST["sexo"],
$_POST["cpf"],
$_POST["rg"],
$_POST["orgaoemissor"],
$_POST["expedicao"],
"",
""
);

  
$login          = new Login($_POST["login"],$_POST["senha"]);

$daoPessoa 		= new DaoPessoa($pessoa,$conecta);
$daoLogin       = new DaoLogin($login,$conecta);

$daoPessoa->inserir();
$daoLogin->inserir();
/*
print "<pre>";
print_r($login);
print "</pre>";
*/

header('Location: ../cadastroEtapas2.php')
?>