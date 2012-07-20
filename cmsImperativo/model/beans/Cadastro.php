<?php
class Cadastro{
	
	private $nome;
	private $idade;
	private $cpf;

	function __construct($nome,$idade,$cpf){
	$this->nome  = $nome;
	$this->idade = $idade;
	$this->cpf   = $cpf;
	}
	
	function getNome(){
	return $this->nome;
	}
	
	function getIdade(){
	return $this->idade;
	}
	
	function getCpf(){
	return $this->cpf;
	}

	function setNome($nome){
	$this->nome  = $nome;
	}
	
	function setIdade($idade){
	$this->idade = $idade;
	}
	
	function setCpf($cpf){
	$this->cpf   = $cpf;
	}
}
?>