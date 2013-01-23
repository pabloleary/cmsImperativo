<?
class Conecta{

		/*
		private $servidor   =   "localhost";   
		private $usuario    =   "root";        
		private $senha      =   "123";  
		private $bd         =   "aprobas";       
		private $mysqli;
		*/
		
		private $servidor   =   "";   
		private $usuario    =   "";        
		private $senha      =   "";  
		private $bd         =   "";       
		private $mysqli;


		function __construct(){
			$this->mysqli = new mysqli($this->servidor,$this->usuario,$this->senha,$this->bd);
		}
		
		function getConexao(){
		return $this->mysqli;
		}		
}
/*$conecta = new Conecta();
if($conecta->getConexao())print "ok";*/
?>
