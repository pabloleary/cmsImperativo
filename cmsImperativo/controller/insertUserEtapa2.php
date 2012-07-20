<?
include("../model/Conecta.php");
include("../model/beans/User.php");
include("../model/dao/DaoUser.php");
$conecta = new Conecta();
/*
print "<pre>";
print_r($_POST);
print "</pre>";
*/
$user           = new User(
$_POST["endereco2"],
$_POST["cidade2"],
$_POST["uf2"],
$_POST["cep2"],
$_POST["telres2"],
$_POST["celular2"],
$_POST["email2"],
$_POST["ec"],
$_POST["cref"],
$_POST["gi"],
$_POST["funcao"],
$_POST["categoria"]
);
  
$daoUser   		= new DaoUser($user,$conecta);
$daoUser->inserir();
/*
print "<pre>";
print_r($login);
print "</pre>";
*/

header('Location: ../cadastroEtapa3.php')
?>