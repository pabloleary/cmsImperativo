<?
class DaoCadastro{

	static private $insert = "INSERT INTO `sysbyte11`.`AprobasUsuario` VALUES (
					NULL , ?, ?, ?);";
	
	static private $delete = "DELETE FROM `sysbyte11`.`AprobasUsuario` WHERE id= ?";
	static private $select = "SELECT * FROM `AprobasUsuario`"; 

	
	
	private $conecta;
	private $modelCadastro;
	

	function __construct(CadastroClasse $modelCadastro,ConectaClasse $conecta){
	$this->modelCadastro = $modelCadastro;	
	$this->conecta 		 = $conecta;
	}
	
	function inserir(){
	$stmt = $this->conecta->getConexao()->prepare(self::$insert);
	$stmt->bind_param("sii",$this->modelCadastro->getNome(),
							$this->modelCadastro->getCpf(),
							$this->modelCadastro->getIdade());
	$stmt->execute();
	}
		
	function deletar(){
	$stmt = $this->conecta->getConexao()->prepare(self::$delete);
	$stmt->bind_param("i",$id);
	$id = 3;
	$stmt->execute();
	}
	
	function visualizarTudo(){
	$stmt = $this->conecta->getConexao()->query(self::$select);
	while($row = $stmt->fetch_row()){
	$dados[] = $row;
	}
	return $dados;
	}
	
	function visualizarID(){
	}
}

?>