<?php
class DaoLogar {

	private $conecta;

	function __construct(Conecta $conecta) {
		$this->conecta = $conecta;
		
	}

	function logar($login, $senha) {
		echo $login;
		echo $senha;

		$stmt = $this->conecta->getConexao()->query("SELECT login,senha FROM aprobaslogin where login like '" . $login . "'");

		if ($stmt->num_rows) {
			//$pass = md5($senha);
			$pass = $senha;
			$stmt = $this->conecta->getConexao()->query("SELECT login,senha FROM aprobaslogin where senha like '" . $pass . "'");
			//return $stmt->fetch_object();
			return true;
		} else
			return false;
	}
}

/*
include("../Conecta.php");

$conecta = new Conecta();
$daoLogar   = new DaoLogar($conecta);
$daoLogar->logarCMS("saulo",123);
*/
?>