<?php
class DaoCategoria{
    
    static private $insert          = "INSERT INTO category VALUES ( NULL , ?)";
    static private $delete          = "DELETE FROM category WHERE id= ?";
    static private $select          = "SELECT * FROM category";
    static private $selectgroups    = "SELECT * FROM category GROUP BY categoria  ORDER BY categoria asc";
    static private $atualizar       = "UPDATE category SET category = ? where id = ?";

    private $conecta;
    private $categoria;

    function __construct(Categoria $categoria,Conecta $conecta){
        $this->conecta   = $conecta;
        $this->categoria = $categoria;
    }

    function inserir(){
        $stmt = $this->conecta->getConexao()->prepare(self::$insert);
        $stmt->bind_param("s",$this->categoria->getCategoria());
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

    function visualizarTudoGroups(){
        $stmt = $this->conecta->getConexao()->query(self::$selectgroups);
        while($row = $stmt->fetch_array()){
            $dados[] = $row;
        }
        return $dados;
    }

    
    function visualizarID($id){
	$stmt = $this->conecta->getConexao()->query("SELECT * FROM category WHERE id= $id" );
	$dados = $stmt->fetch_array();
	return $dados;
	}
    
    function deletar($id){
        $stmt = $this->conecta->getConexao()->prepare(self::$delete);
        $stmt->bind_param("i",$id);
        $stmt->execute();
    }

     function atualizar($id){
		print_r($id);
		//exit;
        $stmt = $this->conecta->getConexao()->prepare(self::$atualizar);
        $stmt->bind_param("si",$this->categoria->getCategoria(),                                
                                $id);
        $stmt->execute();
    }
}
/*
include("../beans/Categoria.php");
include("../Conecta.php");
$conecta      = new Conecta();
print $categoria->getCategoria();
$daoCategoria = new DaoCategoria($categoria,$conecta);
$daoCategoria->inserir();
*/
?>