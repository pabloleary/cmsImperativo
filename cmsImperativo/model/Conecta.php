<?php
class Conecta{

		private $servidor   =   "localhost";   
		private $usuario    =   "root";        
		private $senha      =   "123";  
		private $bd         =   "cmssource";       
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