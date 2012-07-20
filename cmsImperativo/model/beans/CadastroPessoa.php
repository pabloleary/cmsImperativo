<?php

class CadastroPessoa{
		
		private $id;
		private $nome;
		private $filiacao;
		private $nacionalidade;
		private $naturalidade;
		private $dataNascimento;
		private $sexo;
		private $endereco;
		private $cidade;
		private $uf;
		private $cep;
		private $telResidencial;
		private $telCelular;
		private $email;
		private $rg;
		private $orgaoEmissor;
		private $dataExpedicao;
		private $cpf;
		private $estadoCivil;
		private $cref;
		private $grauInstrucao;
		private $formatoInstituicao;
		private $ufIns1;
		private $carreira;
		private $anoConclusao;
		private $localTrabalho;
		private $enderecoIns;
		private $cidadeIns;
		private $ufIns2;
		private $cepIns;
		private $residencial;
		private $celular;
		private $emailIns;
		private $idadeIns;
		private $funcao;
		private $categoria;
		private $login;
		private $senha;
		
		function __construct(
		 $id,
		 $nome,
		 $filiacao,
		 $nacionalidade,
		 $naturalidade,
		 $dataNascimento,
		 $sexo,
		 $endereco,
		 $cidade,
		 $uf,
		 $cep,
		 $telResidencial,
		 $telCelular,
		 $email,
		 $rg,
		 $orgaoEmissor,
		 $dataExpedicao,
		 $cpf,
		 $estadoCivil,
		 $cref,
		 $grauInstrucao,
		 $formatoInstituicao,
		 $ufIns1,
		 $carreira,
		 $anoConclusao,
		 $localTrabalho,
		 $enderecoIns,
		 $cidadeIns,
		 $ufIns2,
		 $cepIns,
		 $residencial,
		 $celular,
		 $emailIns,
		 $idadeIns,
		 $funcao,
		 $categoria,
		 $login,
		 $senha	
		){
		 $this->id =  $id;
		 $this->nome =  $nome;
		 $this->filiacao = $filiacao;
		 $this->nacionalidade = $nacionalidade;
		 $this->naturalidade =  $naturalidade;
		 $this->dataNascimento =  $dataNascimento;
		 $this->sexo =  $sexo;
		 $this->endereco =  $endereco;
		 $this->cidade =  $cidade;
		 $this->uf =  $uf;
		 $this->cep =  $cep;
		 $this->telResidencial =  $telResidencial;
		 $this->telCelular =  $telCelular;
		 $this->email =  $email;
		 $this->rg =  $rg;
		 $this->orgaoEmissor =  $orgaoEmissor;
		 $this->dataExpedicao =  $dataExpedicao;
		 $this->cpf =  $cpf;
		 $this->estadoCivil =  $estadoCivil;
		 $this->cref =  $cref;
		 $this->grauInstrucao =  $grauInstrucao;
		 $this->formatoInstituicao =  $formatoInstituicao;
		 $this->ufIns1 =  $ufIns1;
		 $this->carreira =  $carreira;
		 $this->anoConclusao =  $anoConclusao;
		 $this->localTrabalho =  $localTrabalho;
		 $this->enderecoIns =  $enderecoIns;
		 $this->cidadeIns = 	 $cidadeIns;
		 $this->ufIns2 = 	 $ufIns2;
		 $this->cepIns =  $cepIns;
		 $this->residencial = 	 $residencial;
		 $this->celular =  $celular;
		 $this->emailIns = 	 $emailIns;
		 $this->idadeIns =  $idadeIns;
		 $this->funcao = 	 $funcao;
		 $this->categoria =  $categoria;
		 $this->login =  $login;
		 $this->senha = $senha;
		}
		
		function getId(){
		return $this->id;
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

		function getEndereco(){
		return $this->endereco;
		}

		function getCidade(){
		return $this->cidade;
		}

		function getUf(){
		return $this->uf;
		}

		function getCep(){
		return $this->cep;
		}

		function getTelResidencial(){
		return $this->telResidencial;
		}

		function getTelCelular(){
		return $this->telCelular;
		}

		function getEmail(){
		return $this->email;
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

		function getCpf(){
		return $this->cpf;
		}

		function getEstadoCivil(){
		return $this->estadoCivil;
		}

		function getCref(){
		return $this->cref;
		}

		function getGrauInstrucao(){
		return $this->grauInstrucao;
		}

		function getFormatoInstituicao(){
		return $this->formatoInstituicao;
		}

		function getUfIns1(){
		return $this->ufIns1;
		}

		function getCarreira(){
		return $this->carreira;
		}

		function getAnoConclusao(){
		return $this->anoConclusao;
		}

		function getLocalTrabalho(){
		return $this->localTrabalho;
		}

		function getEnderecoIns(){
		return $this->enderecoIns;
		}

		function getCidadeIns(){
		return $this->cidadeIns;
		}

		function getUfIns2(){
		return $this->ufIns2;
		}

		function getCepIns(){
		return $this->cepIns;
		}

		function getResidencial(){
		return $this->residencial;
		}

		function getCelular(){
		return $this->celular;
		}

		function getEmailIns(){
		return $this->emailIns;
		}

		function getIdadeIns(){
		return $this->idadeIns;
		}

		function getFuncao(){
		return $this->funcao;
		}

		function getCategoria(){
		return $this->categoria;
		}

		function getLogin(){
		return $this->login;
		}

		function getSenha(){
		return $this->senha;
		}

		function setId($id){
		$this->id=$id;
		}

		function setNome($nome){
		$this->nome=$nome;
		}

		function setFiliacao($filiacao){
		$this->filiacao=$filiacao;
		}

		function setNacionalidade($nacionalidade){
		$this->nacionalidade=$nacionalidade;
		}

		function setNaturalidade($naturalidade){
		$this->naturalidade=$naturalidade;
		}

		function setDataNascimento($dataNascimento){
		$this->dataNascimento=$dataNascimento;
		}

		function setSexo($sexo){
		$this->sexo=$sexo;
		}

		function setEndereco($endereco){
		$this->endereco=$endereco;
		}

		function setCidade($cidade){
		$this->cidade=$cidade;
		}

		function setUf($uf){
		$this->uf=$uf;
		}

		function setCep($cep){
		$this->cep=$cep;
		}

		function setTelResidencial($telResidencial){
		$this->telResidencial=$telResidencial;
		}

		function setTelCelular($telCelular){
		$this->telCelular=$telCelular;
		}

		function setEmail($email){
		$this->email=$email;
		}

		function setRg($rg){
		$this->rg=$rg;
		}

		function setOrgaoEmissor($orgaoEmissor){
		$this->orgaoEmissor=$orgaoEmissor;
		}

		function setDataExpedicao($dataExpedicao){
		$this->dataExpedicao=$dataExpedicao;
		}

		function setCpf($cpf){
		$this->cpf=$cpf;
		}

		function setEstadoCivil($estadoCivil){
		$this->estadoCivil=$estadoCivil;
		}

		function setCref($cref){
		$this->cref=$cref;
		}

		function setGrauInstrucao($grauInstrucao){
		$this->grauInstrucao=$grauInstrucao;
		}

		function setFormatoInstituicao($formatoInstituicao){
		$this->formatoInstituicao=$formatoInstituicao;
		}

		function setUfIns1($ufIns1){
		$this->ufIns1=$ufIns1;
		}

		function setCarreira($carreira){
		$this->carreira=$carreira;
		}

		function setAnoConclusao($anoConclusao){
		$this->anoConclusao=$anoConclusao;
		}

		function setLocalTrabalho($localTrabalho){
		$this->localTrabalho=$localTrabalho;
		}

		function setEnderecoIns($enderecoIns){
		$this->enderecoIns=$enderecoIns;
		}

		function setCidadeIns($cidadeIns){
		$this->cidadeIns=$cidadeIns;
		}

		function setUfIns2($ufIns2){
		$this->ufIns2=$ufIns2;
		}

		function setCepIns($cepIns){
		$this->cepIns=$cepIns;
		}

		function setResidencial($residencial){
		$this->residencial=$residencial;
		}

		function setCelular($celular){
		$this->celular=$celular;
		}

		function setEmailIns($emailIns){
		$this->emailIns=$emailIns;
		}

		function setIdadeIns($idadeIns){
		$this->idadeIns=$idadeIns;
		}

		function setFuncao($funcao){
		$this->funcao=$funcao;
		}

		function setCategoria($categoria){
		$this->categoria=$categoria;
		}

		function setLogin($login){
		$this->login=$login;
		}

		function setSenha($senha){
		$this->senha=$senha;
		}

		}
		
		
		$pessoa = new CadastroPessoa(
"id",		
		"nome", 
    "filiacao", 
    "nascionalidade", 
    "naturalidade", 
    "nascimento", 
	"sexo",
    "endereco2", 
    "cidade2", 
    "uf2", 
    "cep2", 
    "telres2", 
    "celular2", 
    "email2", 
    "rg", 
    "orgaoemissor", 
    "expedicao", 
    "cpf", 
    "ec", 
    "cref", 
    "gi", 
    "fi", 
    "uf3", 
    "carreira", 
    "ac", 
    "localtrabalho", 
    "endereco", 
    "cidade", 
    "uf", 
    "cep", 
    "telres", 
    "celular", 
    "email", 
    "idade", 
    "funcao", 
    "categoria", 
    "login", 
    "senha"
		
		);
print "<pre>";
print_r($pessoa);
print "</pre>";

?>