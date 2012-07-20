<?php
class DaoNoticia{

	static private $insert = "INSERT INTO aprobasnoticia VALUES (
					NULL , ?, ?, ?, ?, ?);";
					
	
	static private $delete     = "DELETE FROM aprobasnoticia WHERE id= ?";
	
	static private $select    = "SELECT * FROM aprobasnoticia"; 

    static private $noticiasHome    = "SELECT * FROM aprobasnoticia ORDER BY id DESC LIMIT 0,3";

	static private $select2   = "SELECT * FROM aprobasnoticia WHERE id= ?"; 
	
	static private $atualizar = "UPDATE aprobasnoticia SET titulo = ? , resumo = ? , conteudo = ? where id = ?";
					
	private $conecta;
	private $noticia;
	
	function __construct(Noticia $noticia,Conecta $conecta){
	$this->noticia 	= $noticia;	
	$this->conecta 	= $conecta;
	}
	
	function inserir(){
	$stmt = $this->conecta->getConexao()->prepare(self::$insert);
	$stmt->bind_param("sssss",$this->noticia->getTitulo(),
							  $this->noticia->getResumo(),	
							  $this->noticia->getConteudo(),
							  $this->noticia->getData(),
							  $this->noticia->getStatus());
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
    
    function visualizarNoticias(){  
	$dados = null;
	$stmt = $this->conecta->getConexao()->query(self::$noticiasHome);
	while($row = $stmt->fetch_array()){
	$dados[] = $row;
	}
	return $dados;
	}


	
	function visualizarID($id){
	$stmt = $this->conecta->getConexao()->query("SELECT * FROM aprobasnoticia WHERE id= $id");
	$dados = $stmt->fetch_array();
	return $dados;
	}
	
	function atualizar($id){
	
	$stmt = $this->conecta->getConexao()->prepare(self::$atualizar);
	$stmt->bind_param("sssi",$this->noticia->getTitulo(),
							 $this->noticia->getResumo(),	
							 $this->noticia->getConteudo(),
							 $id);
	$stmt->execute();
	/*
	print(self::$atualizar);
	print_r($noticia);
	*/
	}
}

/*include("../Conecta.php");
/*include("../Beans/Noticia.php");

$noticia = new Noticia();

$noticia->setTitulo("tituloNoticia");
$noticia->setConteudo("Conteudo");
$noticia->setData("data");

print_r($noticia);
*//*
$conexao    = new Conecta();

$daoNoticia = new DaoNoticia($noticia,$conexao);

//$daoNoticia->inserir();
print_r($daoNoticia->visualizarID(2));
*/
?>