<?php


/*
 * Created on Oct 6, 2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
class UserControllerOfficial {

	private $action = null;
	private $service = null;

	function __construct($action = null, $service = null, $actionRegister = array ()) {
		$this->action = $action;
		$this->service = $service;
	}

	function dispatch() {
		$method = $this->actionRegister[$this->action];
		
		
		//$service->$method;
	}
}
?>
