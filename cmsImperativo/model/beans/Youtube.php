<?php
class Youtube{

	private $titulo;
	private $url;
	private $descricao;


	function getTitulo(){
	return $this->titulo;
	}

	function getUrl(){
	return $this->url;
	}

	function getDescricao(){
	return $this->descricao;
	}

	function setTitulo($titulo){
	$this->titulo = $titulo;
	}
	
	function setUrl($url){
	$this->url = $url;
	}
	
	function setDescricao($descricao){
	$this->descricao = $descricao;
	}
}
?>