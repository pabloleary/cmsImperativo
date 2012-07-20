<?php
class Login{
	
	private $login;
	private $senha;
	private $dao;


function __construct($login,$senha,$dao){
	$this->login = $login;
	$this->senha = $senha;
	$this->dao   = $dao;
	}
	
function logar(){
	$test = $this->dao->logar($this->login,$this->senha);
	if($test){	
	$_SESSION['valida'] = 1;
    return $test;
	}else
	$_SESSION['valida'] = 0;
	
	}

function redirectCMS(){
	
	if($_SESSION['valida'] == 1){
	header("Location: ../home.php");
	}else{
	header("Location: ../erro.php");
		
	}
	/*
	print $this->login;
	print $this->senha;
	print $this->test;
	print_r($_SESSION);*/
}	
	
	
function redirect(){
}
		


function logout(){
	session_destroy();
}
}

//print $login->logar();
//print $_SESSION['validacao'];

/*
print "<pre>";
print_r($login);
print "</pre>";
/*
print $_POST["login"]."<br>";
print $_POST["senha"]."<br>";
print_r($_POST);*/
?>