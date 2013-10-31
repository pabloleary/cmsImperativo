<?php
class UserRegister {

	private $name;
	private $email;
	private $password;
	private $id;

	function __construct($name = null, $email = null, $password = null) {
		$this->setName($name);
		$this->setEmail($email);
		$this->setPassword($password);
		
	}

	public function getEmail() {
		return $this->email;
	}
	
	public function getPassword() {
		return $this->password;
	}
	public function setEmail($email) {
		return $this->email = $email;
	}
	
	public function setPassword($password) {
		return $this->password = $password;
	}

	public function getId() {
		return $this->Id;
	}

	public function get() {
		return $this->Id;
	}

	public function setU($id) {
		$this->id = $id;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
	}
}
/*
$user = new UserRegister(
"endereco",
"cidade",
"uf",
"cep",
"telResidencial",
"telCelular",
"email",
"estadoCivil",
"cref",
"grauInstrucao",
"funcao",
"categoria"
);
*/
?>
