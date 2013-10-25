<?php
class DaoFaleConosco{
private $conecta;
private $faleConosco;

static private $insert = "INSERT INTO `faleconosco` VALUES ( NULL , ?, ?, ?,?);";	
	static private $delete = "DELETE FROM faleconosco WHERE id= ?";
	static private $select = "SELECT * FROM `faleconosco`"; 

	function __construct(FaleConosco $faleConosco,Conecta $conecta){
		$this->faleConosco = $faleConosco;
		$this->conecta 	   = $conecta;
		}

	function inserir(){
	$stmt = $this->conecta->getConexao()->prepare(self::$insert);
	$stmt->bind_param("ssss",$this->faleConosco->getNome(),
						    $this->faleConosco->getEmail(),
							$this->faleConosco->getComentario(),
							$this->faleConosco->getData());
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
	
	function deletar($id){
	$stmt = $this->conecta->getConexao()->prepare(self::$delete);
	$stmt->bind_param("i",$id);
	$stmt->execute();
	}
	
}/*
include("../Conecta.php");
include("../beans/FaleConosco.php");

$faleConosco = new FaleConosco();

$faleConosco->setNome("nome");
$faleConosco->setEmail("email");
$faleConosco->setComentario("Comentario");

print_r($faleConosco);

$conexao   = new Conecta();
$daofaleConosco = new DaoFaleConosco($faleConosco,$conexao);

$daofaleConosco->inserir();
print_r($daofaleConosco->visualizarTudo());*/
?>