<?php

/*
include("../modelCMS/CadastroClasse.php");
include("../modelCMS/DaoCadastroClasse.php");
include("../modelCMS/LoginClasse.php");
include("../modelCMS/DaoLoginClasse.php");

$cadastro    = new Cadastro("nome","idade","cpf");
$login           = new Login("","");
$daoCadastro = new DaoCadastroClasse($cadastro,$conexao);
$daoLogin    = new DaoLoginClasse($login,$conexao);

print "<pre>";
print_r($daoCadastro->visualizarTudo());
print "</pre>";
print "<pre>";
print_r($daoLogin->visualizarTudo());
print "</pre>";

$dados = array_merge($daoCadastro->visualizarTudo(),$daoLogin->visualizarTudo());

print "<pre>";
print_r($dados);
print "</pre>";
*/

include("model/Conecta.php");
include("model/dao/DaoViewCadastrado.php");

$conecta           = new Conecta();
$daoViewCadastrado = new DaoViewCadastrado($conecta);
$dados             = $daoViewCadastrado->view();
/*
print "<pre>";
print_r($dados);
print "</pre>";
*/
?>