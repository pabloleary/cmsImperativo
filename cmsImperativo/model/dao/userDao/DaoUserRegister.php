<?php
class DaoUserRegister{
	
	static private $conecta;
	private $modelUserRegister;

	static private $insert = "INSERT INTO `user` VALUES (
						NULL , ? , ?);";

	static private $select = "SELECT * FROM `user`";
	
	static private $findById = "SELECT * FROM `user` WHERE id = ?";
	
	static private $delete = "DELETE FROM `user` WHERE id = ?";

	function __construct(UserRegister  $modelRegister = null,Conecta $conecta = null){
		$this->modelUserRegister    = $modelRegister;
		$this->conecta 		 = $conecta;		
		}
		
	function setConecta(Conecta $conecta){
		$this->conecta 		 = $conecta;	
	}	
	
	function setModelUserRegister(UserRegister $modelRegister){
		$this->modelUserRegister    = $modelRegister;
	}

	function insert(){
		$stmt = $this->conecta->getConexao()->prepare(self::$insert);		
		$stmt->bind_param("ss",$this->modelUserRegister->getEmail(),
							   $this->modelUserRegister->getPassword());                             
		$stmt->execute();
	}

	function findAll(){		
		$stmt = $this->conecta->getConexao()->query(self::$select);
		while($row = $stmt->fetch_array()){
		$dados[] = $row;
		}
		return $dados;
	}
	
	function findByID($id){
		
		
		
		$stmt = $this->conecta->getConexao()->query("SELECT * FROM `user` WHERE id = $id");
		
		print $id;
		exit;
		$dados = $stmt->fetch_array();
		return $dados;

	}
	
	function logar($a,$b){
	print a;
	print b;
	}
    
	function atualizar(){}
		
	function deletar($id){
		$stmt = $this->conecta->getConexao()->prepare(self::$delete);
		$stmt->bind_param('i', $id );
		$stmt->execute();
	}
}
?>