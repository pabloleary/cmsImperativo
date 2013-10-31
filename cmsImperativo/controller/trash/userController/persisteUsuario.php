<?php
$conecta->getConexao()->commit();

$daoPessoa 		 = new DaoPessoa($pessoa,$conecta);
$daoPessoa->inserir();

$uidpessoa = $daoPessoa->recuperaId();

$uidpessoa = $uidpessoa[0];

$user->setUidpessoa($uidpessoa);
$daoUser   		 = new DaoUser($user,$conecta);
$daoUser->inserir();

$instituicao->setUidpessoa($uidpessoa);
$daoInstituicao  = new DaoInstituicao($instituicao,$conecta);
$daoInstituicao->inserir();

$login->setUidpessoa($uidpessoa);
$daoLogin        = new DaoLogin($login,$conecta);
$daoLogin->inserir();

$profissional->setUidpessoa($uidpessoa);
$daoProfissional = new DaoProfissional($profissional,$conecta);
$daoProfissional->inserir();

$conecta->getConexao()->rollback();

?>