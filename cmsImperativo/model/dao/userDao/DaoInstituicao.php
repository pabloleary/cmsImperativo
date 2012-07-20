<?php
class DaoInstituicao{

		private $insert; 

		static private $delete = "DELETE FROM userinstituicao WHERE id= ?";
		static private $select = "SELECT * FROM userinstituicao";		
		static private $atualizar = "UPDATE userinstituicao SET formatoinstituicao = ? , uf = ? , carreira = ? , anoconclusao = ? , localtrabalho = ? , endereco = ? , cidade = ? , cep = ? , residencial = ? , celular = ? , email = ? where id = ?";

		private $conecta;
		private $instituicao;

		function __construct(Instituicao $instituicao,Conecta $conecta){

			$this->conecta = $conecta;
			$this->instituicao = $instituicao;

			$this->insert = "INSERT INTO userinstituicao VALUES (null , 
			\"".$this->instituicao->getFormatoInstituicao()."\",
			\"".$this->instituicao->getUf()."\",
			\"".$this->instituicao->getCarreira()."\",
			\"".$this->instituicao->getAnoConclusao()."\",
			\"".$this->instituicao->getLocalTrabalho()."\",
			\"".$this->instituicao->getEndereco()."\",
			\"".$this->instituicao->getCidade()."\",
			\"".$this->instituicao->getCep()."\",
			\"".$this->instituicao->getResidencial()."\",
			\"".$this->instituicao->getCelular()."\",
			\"".$this->instituicao->getEmail()."\",
            \"".$this->instituicao->getUidpessoa()."\"
			)";
			
		}

		function getConecta(){
		return $this->conecta;
		}

		function getUser(){
		return $this->user;
		}

		function inserir(){
			$this->conecta->getConexao()->query($this->insert);
		}
		function atualizar($id){
		$stmt = $this->conecta->getConexao()->prepare(self::$atualizar);
		$stmt->bind_param("sssssssssssi",
                                        $this->instituicao->getFormatoInstituicao(),
										$this->instituicao->getUf(),
										$this->instituicao->getCarreira(),
										$this->instituicao->getAnoConclusao(),
										$this->instituicao->getLocalTrabalho(),
										$this->instituicao->getEndereco(),
										$this->instituicao->getCidade(),
										$this->instituicao->getCep(),
										$this->instituicao->getResidencial(),
										$this->instituicao->getCelular(),
										$this->instituicao->getEmail(),
										$id);	
										$stmt->execute();
		}
		
		function deletar($id){
			$stmt = $this->conecta->getConexao()->prepare(self::$delete);
			$stmt->bind_param("i",$id);
			$stmt->execute();
		}
}
/*
include("../Conecta.php");
include("../beans/Instituicao.php");

$conecta = new Conecta();
$dao = new DaoInstituicao($instituicao,$conecta);
$dao->inserir();
//print_r($dao->getConecta());
//print_r($dao->getUser());
*/
?>
