<?php
class DaoProfissional{
	
	static private $delete = "DELETE FROM userprofissional WHERE id= ?";
	
	static private $select = "SELECT * FROM userprofissional"; 
	
	static private $atualizar = "UPDATE userprofissional SET filiacao = ? , cref = ? , grauinstrucao = ? , funcao = ? , categoria = ? where id = ?";
	
	private $conecta;
	private $profissional;
	private $insert;
	
	function __construct(Profissional $profissional,Conecta $conecta){
		$this->profissional = $profissional;	
		$this->conecta 	= $conecta;	
	}
	
	function inserir(){
		$this->insert = "INSERT INTO userprofissional VALUES (null , 
		\"".$this->profissional->getFiliacao()."\",
		\"".$this->profissional->getCref()."\",
		\"". $this->profissional->getGrauinstrucao()."\",
		\"".$this->profissional->getFuncao()."\",
		\"". $this->profissional->getCategoria()."\",
        \"". $this->profissional->getUidpessoa()."\"
		)";		
		$this->conecta->getConexao()->query($this->insert);	
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
		$stmt = $this->conecta->getConexao()->query("SELECT * FROM userprofissional WHERE id= $id");
		$dados = $stmt->fetch_array();
		return $dados;
	}
	
	function atualizar($id){
		$stmt = $this->conecta->getConexao()->prepare(self::$atualizar);
		$stmt->bind_param("sssssi",$this->profissional->getFiliacao(),
							$this->profissional->getCref(),
							$this->profissional->getGrauinstrucao(),
							$this->profissional->getFuncao(),
							$this->profissional->getCategoria(),
							$id);
	$stmt->execute();	
	}	
}
?>