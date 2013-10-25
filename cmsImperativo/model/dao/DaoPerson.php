<?php
class DaoPerson{

	static private $insert = "INSERT INTO person VALUES (
					NULL , ?, ?, ?);";
	
	static private $delete = "DELETE FROM person WHERE id= ?";
	
	static private $select = "SELECT * FROM person";

    static private $eventosHome    = "SELECT * FROM person ORDER BY id DESC LIMIT 0,3";
	
	static private $atualizar = "UPDATE person SET name = ? , email = ? , login = ? where id = ?";
	
	private $conecta;
	private $person;
	
	function __construct(Person $person,Conecta $conecta){
	$this->person 	= $person;	
	$this->conecta 	= $conecta;
	}
	
	function inserir(){
	
	$stmt = $this->conecta->getConexao()->prepare(self::$insert);
	$stmt->bind_param("sss",$this->person->name,
							$this->evento->email,
							$this->evento->login);
	$stmt->execute();
	}
		
	function deletar($id){
	$stmt = $this->conecta->getConexao()->prepare(self::$delete);
	$stmt->bind_param("i",$id);
	$stmt->execute();
	}
	
	function visualizarTudo(){
	$dados = null;
	$stmt = $this->conecta->getConexao()->query(self::$select);
	while($row = $stmt->fetch_array()){
	$dados[] = $row;
	}
	return $dados;
	}
	
	function visualizarID($id){
	$stmt = $this->conecta->getConexao()->query("SELECT * FROM evento WHERE id= $id");
	$dados = $stmt->fetch_array();
	return $dados;
	}	
}
?>