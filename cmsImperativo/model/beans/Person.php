<?php


/*
 * Created on 18/04/2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

class Person {

	public $name;
	public $email;
	public $login;

	public function __construct($name = null, $email = null, $login = null) {
		$this->name = $name;
		$this->email = $email;
		$this->login = $login;
	}

}
?>
