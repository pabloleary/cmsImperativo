<?php
include("includes.php");
include("instanciaPessoa.php");
include("instanciaUser.php");
include("instanciaInstituicao.php");
include("instanciaLogin.php");
include("instanciaProfissional.php");
include("instanciaConecta.php");
include("persisteUsuario.php");
/*
print "<pre>";
print_r($pessoa);
print "</pre>";
*//*
print "<pre>";
print_r($user);
print "</pre>";
/*
print "<pre>";
print_r($instituicao);
print "</pre>";

print "<pre>";
print_r($login);
print "</pre>";
/***
print "<pre>";
print_r($profissional);
print "</pre>";
*/

header("Location: ../../cadastrar.php ");


?>