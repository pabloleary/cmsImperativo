<?php
class DaoLogin{
	
	static private $conecta;
	private $modelLogin;

	static private $insert = "INSERT INTO `login` VALUES (
						NULL , ?, ? , ?);";

	static private $select = "SELECT * FROM `login`";
	
	static private $delete = "DELETE FROM `login` WHERE id = ?";

	function __construct(Login $modelLogin,Conecta $conecta){
		$this->modelLogin    = $modelLogin;
		$this->conecta 		 = $conecta;		
		}

	function inserir(){
		$stmt = $this->conecta->getConexao()->prepare(self::$insert);
		$stmt->bind_param("ssi",$this->modelLogin->getLogin(),
							    $this->modelLogin->getSenha(),
                                $this->modelLogin->getUidpessoa());
		$stmt->execute();
	}

	function visualizarTudo(){
		$stmt = $this->conecta->getConexao()->query(self::$select);
		while($row = $stmt->fetch_row()){
		$dados[] = $row;
		}
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