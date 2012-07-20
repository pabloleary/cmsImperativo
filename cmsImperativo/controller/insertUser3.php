<?
include("../model/Conecta.php");
include("../model/beans/User.php");
include("../model/beans/Pessoa.php");
include("../model/beans/Instituicao.php");
include("../model/beans/Login.php");

include("../model/dao/DaoPessoa.php");
include("../model/dao/DaoUser.php");
include("../model/dao/DaoInstituicao.php");
include("../model/dao/DaoLogin.php");

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
$_POST["expedicao"]
);



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
  
$login          = new Login($_POST["login"],$_POST["senha"]);

$daoPessoa 		= new DaoPessoa($pessoa,$conecta);
$daoUser   		= new DaoUser($user,$conecta);

$daoInstituicao = new DaoInstituicao($instituicao,$conecta);
$daoLogin       = new DaoLogin($login,$conecta);

$daoPessoa->inserir();
$daoUser->inserir();
$daoInstituicao->inserir();
$daoLogin->inserir();
/*
print "<pre>";
print_r($login);
print "</pre>";
*/

header('Location: ../componentes/responseFormCadastro.php')
?>