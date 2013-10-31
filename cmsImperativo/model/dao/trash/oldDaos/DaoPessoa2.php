<?
class DaoPessoa{
	private $conecta;
	private $modelPessoa;

	//static private $insert = "INSERT INTO AprobasPessoa VALUES (
		//				NULL,?,?,?,?,?);";

	//priva   		$insert = "";

	static private $select = "SELECT * FROM AprobasPessoa";

	function __construct(Pessoa $modelPessoa,Conecta $conecta){
		$this->modelPessoa   = $modelPessoa;
		$this->conecta 		 = $conecta;


		$this->insert("ssssssssss",$this->modelPessoa->getNome(),
							  $this->modelPessoa->getFiliacao(),
							  $this->modelPessoa->getNacionalidad(),
							  $this->modelPessoa->getNaturalidade(),
                              $this->modelPessoa->getDataNascimen(),
							  $this->modelPessoa->getSexo(),
							  $this->modelPessoa->getCpf(),
			                  $this->modelPessoa->getRg(),
							  $this->modelPessoa->getOrgaoEmissor(),
						      $this->modelPessoa->getDataExpedicao());
		}

	function inserir(){
//	$stmt = $this->conecta->getConexao()->prepare(self::$insert);
//	);
//							  $stmt->execute();
//	}

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
//include("../Conecta.php");
//include("../beans/Pessoa.php");

//$conecta = new Conecta();
//$dao = new DaoPessoa($pessoa,$conecta);
//$dao->inserir();
/*
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
}

?>