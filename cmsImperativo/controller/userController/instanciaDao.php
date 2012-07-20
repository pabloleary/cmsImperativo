<?php
$daoPessoa 		 = new DaoPessoa($pessoa,$conecta);
$daoUser   		 = new DaoUser($user,$conecta);
$daoInstituicao  = new DaoInstituicao($instituicao,$conecta);
$daoLogin        = new DaoLogin($login,$conecta);
$daoProfissional = new DaoProfissional($profissional,$conecta);
?>