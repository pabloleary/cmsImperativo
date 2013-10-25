<?php

/*
 * Created on Oct 6, 2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

class NewsController {

	private $dataForm;
	private $daoNoticia;
	private $modelUserController;

	function __construct($dataForm,$conecta,$dao,$model) {
		$this->dataForm = $dataForm;
		$this->conecta = $conecta;
		$this->daoUserRegister = $dao;
		$this->modelUserController = $model;
	}
	
	function processDataForm(){		
		$this->modelUserController->setEmail($this->dataForm["emailuser"]);
		$this->modelUserController->setPassword($this->dataForm["password"]);		
	}

	function insertUser() {		
		$this->daoUserRegister->setConecta($this->conecta);
		$this->daoUserRegister->setModelUserRegister($this->modelUserController);
		$this->daoUserRegister->insert();		
	}
	
	

}
?>
