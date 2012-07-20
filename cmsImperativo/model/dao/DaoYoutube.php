<?php
class DaoYoutube{

static private $insert = "INSERT INTO youtube VALUES ( NULL , ? , ? ,? )";
static private $delete = "DELETE FROM youtube WHERE id= ?";
static private $select = "SELECT * FROM youtube";

private $conecta;
private $youtube;

function __construct(Youtube $youtube,Conecta $conecta){
$this->conecta   = $conecta;
$this->youtube = $youtube;
}

function inserir(){
$stmt = $this->conecta->getConexao()->prepare(self::$insert);
$stmt->bind_param("sss",$this->youtube->getTitulo(),
						$this->youtube->getUrl(),
						$this->youtube->getDescricao());
$stmt->execute();
}


function visualizarTudo(){
$stmt = $this->conecta->getConexao()->query(self::$select);
while($row = $stmt->fetch_array()){
$dados[] = $row;
}
return $dados;
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