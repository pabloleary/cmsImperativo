<?php
class DaoEvento{

	static private $insert = "INSERT INTO evento VALUES (
					NULL , ?, ?, ?, ?, ?);";
	
	static private $delete = "DELETE FROM evento WHERE id= ?";
	
	static private $select = "SELECT * FROM evento";

    static private $eventosHome    = "SELECT * FROM evento ORDER BY id DESC LIMIT 0,3";
	
	static private $atualizar = "UPDATE evento SET titulo = ? , descricao = ? , dataEvento = ? , precoAssociado = ? , precoAvulso = ? where id = ?";
	
	private $conecta;
	private $evento;
	
	function __construct(Evento $evento,Conecta $conecta){
	$this->evento 	= $evento;	
	$this->conecta 	= $conecta;
	}
	
	function inserir(){
	//print_r($this->evento);
	//exit;	
	$stmt = $this->conecta->getConexao()->prepare(self::$insert);
	
	$stmt->bind_param("sssss",$this->evento->getTitulo(),
							   $this->evento->getDescricao(),
							   $this->evento->getDataEvento(),
							   $this->evento->getPrecoAssociado(),
							   $this->evento->getPrecoAvulso());							   
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
	
	function atualizar($id){
	
	$stmt = $this->conecta->getConexao()->prepare(self::$atualizar);
	$stmt->bind_param("sssssi",$this->evento->getTitulo(),
							   $this->evento->getDescricao(),	
							   $this->evento->getDataEvento(),
							   $this->evento->getPrecoAssociado(),
							   $this->evento->getPrecoAvulso(),
							   $id);
	$stmt->execute();
	
	}
    function visualizarEventos(){
	$dados = null;
	$stmt = $this->conecta->getConexao()->query(self::$eventosHome);
	while($row = $stmt->fetch_array()){
	$dados[] = $row;
	}
	return $dados;
	}

	
}
/*
include("conectaClasse.php");
include("Evento.php");

$evento = new Evento();

$evento->setTitulo("tituloEvento");
$evento->setDescricao("Descricao");
$evento->setPreco(1500);


$conexao   = new ConectaClasse();
$daoEvento = new DaoEvento($evento,$conexao);

$daoEvento->inserir();
print_r($daoEvento->visualizarTudo());
*/
?>