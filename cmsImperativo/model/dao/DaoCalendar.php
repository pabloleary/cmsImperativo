<?php
class DaoCalendar{
	
	private $conecta;
	
	static private $select = "select id,dataevento from aprobasevento";

	function __construct(Conecta $conecta){
	$this->conecta 	= $conecta;
	}

	function visualizarTudo(){
	$dados = null;
	$stmt = $this->conecta->getConexao()->query(self::$select);
	while($row = $stmt->fetch_row()){
	$dados[] = $row;
	}
	return $dados;
	}
	
	function filtraDados(){
		$a = $this->visualizarTudo();
			foreach($a as $value){
				$id[] = $value[0];
				$data = split("/",$value[1],3);
				$dados[] = array_merge($id,$data);
				$id = null;				
				}		
			return $dados;
	}
	
	function filtraData(){
		// This year
		$y = date('Y');
		// This month
		$m = date('n');
		// This Day
		$d = date('j');
		
		$a = $this->filtraDados();
			foreach($a as $value){
				if($value[2] == $m && $value[3] == $y)
					$dados[] = $value;	
			}			
			return $dados;		
	}
	
	function buildingEvento(){
		$a = $this->filtraData();
		$desc = "evento";
		$link = "eventoid.php?id=";
		
		//$links[0] = array('day'=>$d, 'month'=>$m, 'year'=>$y,'link'=>$link, 'desc'=>$desc);
        //$links[1] = array('day'=>$d+1, 'month'=>$m, 'year'=>$y,'link'=>$link1, 'desc'=>$desc);
		if($a){
		foreach($a as $value){
			$links['day'] = $value[1];
			$links['month'] = $value[2];
			$links['year'] = $value[3];
			$links['link'] = $link.$value[0];
			$links['desc'] = $desc;
			
			$dados[] = $links;
		}
		return $dados;
		}else{
		return null;
		}
	}
	
	
}
/*
include("../Conecta.php");
$conexao   =   new Conecta();
$daocalendar = new DaoCalendar($conexao);
/*
print "<pre>";
print_r($daocalendar->visualizarTudo());
print "</pre>";


print "<pre>";
print_r($daocalendar->filtraDados());
print "</pre>";

print "<pre>";
print_r($daocalendar->filtraData());
print "</pre>";

print "<pre>";
print_r($daocalendar->buildingEvento());
print "</pre>";
*/
?>