<?php
class DaoUser{

	private $insert; 

	static private $delete = "DELETE FROM useruser WHERE id= ?";
	static private $select = "SELECT * FROM useruser";
	static private $atualizar = "UPDATE useruser SET endereco = ? , cidade = ? , uf = ? , cep = ? , telresidencial = ? , telcelular = ? , email = ? , estadocivil = ?  where id = ?";

	private $conecta;
	private $user;

	function __construct(User $user,Conecta $conecta){
		$this->conecta = $conecta;
		$this->user = $user;	
	}

	function getConecta(){
	return $this->conecta;
	}

	function getUser(){
	return $this->user;
	}

	function inserir(){
		$this->insert = "INSERT INTO useruser VALUES (NULL , 
		\"".$this->user->getEndereco()."\",
		\"".$this->user->getCidade()."\",
		\"".$this->user->getUf()."\",
		\"".$this->user->getCep()."\",
		\"".$this->user->getTelResidencial()."\",
		\"".$this->user->getTelCelular()."\",
		\"".$this->user->getEmail()."\",
		\"".$this->user->getEstadoCivil()."\",
        \"".$this->user->getUidpessoa()."\"
		)";
		$this->conecta->getConexao()->query($this->insert);
	}
	
	function atualizar($id){
		$stmt = $this->conecta->getConexao()->prepare(self::$atualizar);
		$stmt->bind_param("ssssssssi",$this->user->getEndereco(),
										$this->user->getCidade(),
										$this->user->getUf(),
										$this->user->getCep(),
										$this->user->getTelResidencial(),
										$this->user->getTelCelular(),
										$this->user->getEmail(),
										$this->user->getEstadoCivil(),
										$id);
										$stmt->execute();
	}
	
	
	
	function deletar($id){
	$stmt = $this->conecta->getConexao()->prepare(self::$delete);
	$stmt->bind_param("i",$id);
	$stmt->execute();
	}
}
	/*test*//*
			include("../Conecta.php");
			include("../beans/User.php");

			$conecta = new Conecta();
			$dao = new DaoAprobasUser($user,$conecta);
			$dao->inserir();
			print_r($dao->getConecta());
			print_r($dao->getUser());
	*/



?>
