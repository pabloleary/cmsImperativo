<?php
class DaoViewCadastrado{
	
	static private $sqlInstituicao = "select * from userinstituicao";
	static private $sqlUser        = "select * from useruser";
	static private $sqlPessoa      = "select * from userpessoa";
	static private $sqlLogin       = "select * from userlogin";	
						
	private $conecta;					
	
	function __construct(Conecta $conecta){
		$this->conecta = $conecta;
	}	
		
	function view()	{
	
	$dados1 = null;
	$dados2 = null;
	$dados3 = null;
	$dados4 = null;
	
	
	$stmt1 = $this->conecta->getConexao()->query(self::$sqlPessoa);	
	$stmt2 = $this->conecta->getConexao()->query(self::$sqlUser);
	$stmt3 = $this->conecta->getConexao()->query(self::$sqlInstituicao);
	$stmt4 = $this->conecta->getConexao()->query(self::$sqlLogin);
	
	
	while($row = $stmt1->fetch_array()){
	
		$dados1 = $row;
		
		$dados2 = $stmt2->fetch_array();
		$dados3 = $stmt3->fetch_array();
		$dados4 = $stmt4->fetch_array();
	
		$dados[] = array_merge($dados1,$dados2,$dados3,$dados4);	
	}
		return $dados;
	}	
	
	function visualizarID($id){	
		
	
		$stmt1 = $this->conecta->getConexao()->query("SELECT * FROM userpessoa WHERE id = $id");		
		$stmt2 = $this->conecta->getConexao()->query("SELECT * FROM useruser WHERE id = $id");		
		$stmt3 = $this->conecta->getConexao()->query("SELECT * FROM userinstituicao WHERE id = $id");
		$stmt4 = $this->conecta->getConexao()->query("SELECT * FROM userprofissional WHERE id = $id");
		$stmt5 = $this->conecta->getConexao()->query("SELECT * FROM userlogin WHERE id = $id");
		while($row = $stmt1->fetch_array()){	
		$dados1 = $row;
		
		$dados2 = $stmt2->fetch_array();
		$dados3 = $stmt3->fetch_array();
		$dados4 = $stmt4->fetch_array();
		$dados5 = $stmt5->fetch_array();
        
        $dados1 = $dados1 ? $dados1 : array();
		$dados2 = $dados2 ? $dados2 : array();
		$dados3 = $dados3 ? $dados3 : array();
		$dados4 = $dados4 ? $dados4 : array();
		$dados5 = $dados5 ? $dados5 : array();
		$dados = array_merge($dados1,$dados2,$dados3,$dados4,$dados5);	
	}
		return $dados;
	}	
	
}

?>