<?php
class Conecta{

		/*private $servidor   =   "localhost";   
		private $usuario    =   "root";        
		private $senha      =   "123";  
		private $bd         =   "cms";       
		private $mysqli;

		function __construct(){
			$this->mysqli = new mysqli($this->servidor,$this->usuario,$this->senha,$this->bd);
		}
		
		function  getConexao(){
		return $this->mysqli;
		}*/
		
		private $servidor   =   "mysql2003int.cp.blacknight.com";   
		private $usuario    =   "u1286706_admin";        
		private $senha      =   "1664SaslX";  
		private $bd         =   "db1286706_cms";       
		private $mysqli;

		function __construct(){
			$this->mysqli = new mysqli($this->servidor,$this->usuario,$this->senha,$this->bd);
		}
		
		function  getConexao(){
		return $this->mysqli;
		}		
		
}

/***
 * Teste de conexao
 *
 */
 
#$conecta = new Conecta();
#if($conecta->getConexao())print "ok";
?>