<?
class Upload{
		
		public function upload(){
		return $arquivos = $_FILES;
		}
		
		public function fileTrue(){
		if($this->testeEnvio1() == true && $this->testeEnvio2() == true)	
		print ok;
		else{
		if($this->testeEnvio1())
		$dao->insert2($model);
		else
		$dao->insertTotal($conexao,$model);
		}
		}
		
		public function testeEnvio1(){
		$arquivos = $this->upload();
			if($arquivos["arquivo1"]["error"] != 0)
			return false;
		}
		public function testeEnvio2(){
			$arquivos = $this->upload();
			if($arquivos["arquivo2"]["error"] != 0)
			return false;
		}
}

?>