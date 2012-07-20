<?
class Conecta{

		/*
		private $servidor   =   "localhost";   
		private $usuario    =   "root";        
		private $senha      =   "123";  
		private $bd         =   "aprobas";       
		private $mysqli;
		*/
		
		private $servidor   =   "200.234.202.101";   
		private $usuario    =   "sysbyte11";        
		private $senha      =   "aprobr123";  
		private $bd         =   "sysbyte11";       
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