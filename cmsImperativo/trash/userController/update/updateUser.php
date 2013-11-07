<?php
include("includes.php");
include("../instanciaPessoa.php");
include("../instanciaUser.php");
include("../instanciaInstituicao.php");
include("../instanciaLogin.php");
include("../instanciaProfissional.php");
include("../instanciaConecta.php");
include("../instanciaDao.php");

$daoPessoa->atualizar($_GET["id"]);
$daoUser->atualizar($_GET["id"]);
$daoInstituicao->atualizar($_GET["id"]);
//$daoLogin->atualizar($_GET["id"]);
$daoProfissional->atualizar($_GET["id"]);

header("Location: ../../../cadastrar.php");

?>