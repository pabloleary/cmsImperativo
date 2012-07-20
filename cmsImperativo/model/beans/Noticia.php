<?php
class Noticia{
	
	private $titulo;
	private $resumo;
	private $conteudo;
	private $data;
	private $status;
	
	function getStatus(){
	return $this->status;
	}
	
	function getTitulo(){
	return $this->titulo;
	}
	
	function getResumo(){
	return $this->resumo;
	}
	
	function getConteudo(){
	return $this->conteudo;
	}
	
	function getData(){
	return $this->data;
	}
	
	function setStatus($status){
	$this->status = $status;
	}
	
	function setTitulo($titulo){
	$this->titulo = $titulo;
	}
	
	function setResumo($resumo){
	$this->resumo = $resumo;
	}
	
	function setConteudo($conteudo){
	$this->conteudo = $conteudo;
	}
	
	function setData($data){
	$this->data = $data;
	}

}

/*
$noticia = new Noticia();

$noticia->setTitulo("tituloNoticia");
$noticia->setConteudo("Descricao");
$noticia->setData("data");

print_r($noticia);
*/
?>