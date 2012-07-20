<?
class DaoPessoa{
	private $conecta;
	private $modelPessoa;

	static private $insert = "INSERT INTO AprobasPessoa VALUES (
						NULL,?,?,?,?,?);";
	
	static private $select = "SELECT * FROM AprobasPessoa"; 

	function __construct(Pessoa $modelPessoa,Conecta $conecta){
		$this->modelPessoa   = $modelPessoa;	
		$this->conecta 		 = $conecta;
		}

	function inserir(){
	$stmt = $this->conecta->getConexao()->prepare(self::$insert);
	$stmt->bind_param("siiss",$this->modelPessoa->getNome(),
							  $this->modelPessoa->getCpf(),
							  $this->modelPessoa->getIdade(),
							  $this->modelPessoa->getLogin(),
						      $this->modelPessoa->getSenha());
	$stmt->execute();
	}
	
	function visualizarTudo(){
	$stmt = $this->conecta->getConexao()->query(self::$select);
	while($row = $stmt->fetch_row()){
	$dados[] = $row;
	}
	return $dados;
	}

function atualizar(){}
function deletar(){}
}
/*include("conectaClasse.php");
include("PessoaClasse.php");

$conexao    = new ConectaClasse();
$pessoa     = new PessoaClasse();

$pessoa->setNome("saulo");
$pessoa->setCpf(12);
$pessoa->setIdade(25);
$pessoa->setLogin("saulologin");
$pessoa->setSenha("123456");

$daopessoa  = new DaoPessoaClasse($pessoa,$conexao);

$daopessoa->inserir();
print_r($daopessoa->visualizarTudo());
*/

?>