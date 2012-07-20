<?php
class Pessoa{

	private $nome;
	private $nacionalidade;
	private $naturalidade;
	private $dataNascimento;
	private $sexo;
	private $cpf;
	private $rg;
	private $orgaoEmissor;
	private $dataExpedicao;


	function __construct($nome,$nacionalidade,$naturalidade,$dataNascimento,$sexo,
$cpf,$rg,$orgaoEmissor,$dataExpedicao){
	
	$this->setNome($nome);
	$this->setNacionalidade($nacionalidade);
	$this->setNaturalidade($naturalidade);
	$this->setDataNascimento($dataNascimento);
	$this->setSexo($sexo);
	$this->setCpf($cpf);
	$this->setRg($rg);
	$this->setOrgaoEmissor($orgaoEmissor);
	$this->setDataExpedicao($dataExpedicao);
}

		function getNome(){
		return $this->nome;
		}

		function getFiliacao(){
		return $this->filiacao;
		}

		function getNacionalidade(){
		return $this->nacionalidade;
		}

		function getNaturalidade(){
		return $this->naturalidade;
		}

		function getDataNascimento(){
		return $this->dataNascimento;
		}

		function getSexo(){
		return $this->sexo;
		}

		function getCpf(){
		return $this->cpf;
		}

		function getRg(){
		return $this->rg;
		}

		function getOrgaoEmissor(){
		return $this->orgaoEmissor;
		}

		function getDataExpedicao(){
		return $this->dataExpedicao;
		}


		function setNome($nome){
		if(empty($nome))
			$this->nome="n�o cadastrado";
			else
		$this->nome=$nome;
		}

		function setFiliacao($filiacao){
		if(empty($filiacao))
			$this->filiacao="n�o cadastrado";
			else
		$this->filiacao=$filiacao;
		}

		function setNacionalidade($nacionalidade){
		if(empty($nacionalidade))
			$this->nacionalidade="n�o cadastrado";
			else
		$this->nacionalidade=$nacionalidade;
		}

		function setNaturalidade($naturalidade){
		if(empty($naturalidade))
			$this->naturalidade="n�o cadastrado";
			else
		$this->naturalidade=$naturalidade;
		}

		function setDataNascimento($dataNascimento){
		if(empty($dataNascimento))
			$this->dataNascimento="n�o cadastrado";
			else
		$this->dataNascimento=$dataNascimento;
		}

		function setSexo($sexo){
		if(empty($sexo))
			$this->sexo="n�o cadastrado";
			else
		$this->sexo=$sexo;
		}

		function setCpf($cpf){
		if(empty($cpf))
			$this->cpf="n�o cadastrado";
			else
		$this->cpf=$cpf;
		}

		function setRg($rg){
		if(empty($rg))
			$this->rg="n�o cadastrado";
			else
		$this->rg=$rg;
		}

		function setOrgaoEmissor($orgaoEmissor){
		if(empty($orgaoEmissor))
			$this->orgaoEmissor="n�o cadastrado";
			else
		$this->orgaoEmissor = $orgaoEmissor;
		}

		function setDataExpedicao($dataExpedicao){
		if(empty($dataExpedicao))
			$this->dataExpedicao="n�o cadastrado";
			else
		$this->dataExpedicao = $dataExpedicao;
		}
}
/*
$pessoa = new Pessoa(
"nome",
"filiacao",
"nacionalidade",
"naturalidade",
"dataNascimento",
"sexo",
"cpf",
"rg",
"orgaoEmissor",
"dataExpiracao",
"dataExpiracao",
"statusUsuario");

print "<pre>"; 
print_r($pessoa);
print "</pre>";
*/
?>