<?php


/*
 * Created on Oct 6, 2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

if (!empty ($_GET)) {
	
	print_r($_GET);
	
	include ("../model/Conecta.php");
	include ("../model/dao/userDao/DaoUserRegister.php");
	include ("../model/beans/UserRegister.php");
	include ("class/UserController.php");
	include ("class/UserControllerOfficial.php");

	$conecta = new Conecta();
	$daoUserRegister = new DaoUserRegister();
	$modelUserRegister = new UserRegister();
	$userService = new UserController($_POST, $conecta, $daoUserRegister, $modelUserRegister);
	if ($_GET["action"] == "insert") {

		$userService->processDataForm();
		$userService->insertUser();

		header("Location:../userRegister.php");
	}

	if ($_GET["action"] == "update") {
		print "deveria cair aqui";
	}

	if ($_GET["action"] == "delete") {
		$userService->deleteUser($_GET["id"]);
		header("Location:../cadastrar.php");
	}
	
	if ($_GET["action"] == "view") {

	}

} else {
	include ("model/Conecta.php");
	include ("model/dao/userDao/DaoUserRegister.php");
	include ("model/beans/UserRegister.php");
	include ("class/UserController.php");
	include ("class/UserControllerOfficial.php");
	$conecta = new Conecta();
	$daoUserRegister = new DaoUserRegister();
	$modelUserRegister = new UserRegister();
	$userService = new UserController($_POST, $conecta, $daoUserRegister, $modelUserRegister);
	$dados = $userService->viewUsers();
}
?>
