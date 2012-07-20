<?php
include("includes.php");
include("../instanciaPessoa.php");
include("../instanciaUser.php");
include("../instanciaInstituicao.php");
include("../instanciaLogin.php");
include("../instanciaProfissional.php");
include("../instanciaConecta.php");
include("../instanciaDao.php");

$daoPessoa->deletar($_GET["id"]);
$daoUser->deletar($_GET["id"]);
$daoInstituicao->deletar($_GET["id"]);
$daoLogin->deletar($_GET["id"]);
$daoProfissional->deletar($_GET["id"]);


header("Location: ../../../cadastrar.php ");
?>