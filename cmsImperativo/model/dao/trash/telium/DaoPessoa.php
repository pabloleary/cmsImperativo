<?php
class DaoPessoa{
	private $conecta;
	private $modelPessoa;

/*	static  $insert = "INSERT INTO sysbyte11.AprobasPessoa VALUES (
						NULL,".$this->modelPessoa->getNome(),$this->modelPessoa->getCpf().",
						".$this->modelPessoa->getIdade(),$this->modelPessoa->getLogin()",
						".$this->modelPessoa->getSenha()).";";*/
	
	static  $select = "SELECT * FROM AprobasPessoa"; 

	function __construct(Pessoa $modelPessoa,Conecta $conecta){
		$this->modelPessoa   = $modelPessoa;	
		$this->conecta 		 = $conecta;
		}

	function inserir(){
	mysql_query(self::$insert);
	}
	
	function visualizarTudo(){
	mysql_query(self::$select);
	while($row = $stmt->fetch_row()){
	$dados[] = $row;
	}
	return $dados;
	}

//function atualizar(){}
//function deletar(){}
//}
//include("../Conecta.php");
//include("../bean/Pessoa.php");


}

?>