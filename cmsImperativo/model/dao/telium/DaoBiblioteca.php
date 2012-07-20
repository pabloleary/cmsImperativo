<?
class DaoBiblioteca{

	static private $insert = "INSERT INTO `sysbyte11`.`AprobasBiblioteca` VALUES (
					NULL , ?, ?);";
					
	static private $insertUpload = "INSERT INTO `sysbyte11`.`AprobasArquivo` VALUES (
					NULL , ?, ?);";				

	static private $delete = "DELETE FROM `sysbyte11`.`AprobasBiblioteca` WHERE id= ?";

	static private $select = "SELECT * FROM `AprobasBiblioteca`";

	private $conecta;
	private $biblioteca;

	function __construct(Biblioteca $biblioteca,Conecta $conecta){
	$this->biblioteca 	= $biblioteca;
	$this->conecta 		= $conecta;
	}

	function inserir(){
	try{
	$stmt = $this->conecta->getConexao()->prepare(self::$insert);
	$stmt->bind_param("ss",$this->biblioteca->getTitulo(),
							$this->biblioteca->getData());
	$stmt->execute();
	
	foreach($this->biblioteca->getUpload() as $value){
	$a = "amor";
	$stmt = $this->conecta->getConexao()->prepare(self::$insertUpload);
	$stmt->bind_param("ss",$value,$a);
	$stmt->execute();
	print $value;
	}
	
	}catch (Exception $e) {
		echo "Exceзгo pega: ",  $e->getMessage(), "\n";
	}
	
	
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
/*
include("conectaClasse.php");
include("Biblioteca.php");

$biblioteca = new Biblioteca();

$biblioteca->setTitulo("titulo");
$biblioteca->setCaminho("caminho");
$biblioteca->setData("data");

print_r($biblioteca);

$conexao    = new ConectaClasse();

$daoBiblioteca = new DaoBiblioteca($biblioteca,$conexao);

$daoBiblioteca->inserir();
print_r($daoBiblioteca->visualizarTudo());
*/
?>