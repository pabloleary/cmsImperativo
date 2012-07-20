<?php
class Evento{
	
	private $titulo;
	private $descricao;
	private $dataEvento;
	private $precoAssociado;
	private $precoAvulso;
	private $status;
	
	function getStatus(){
	return $this->status;
	}
	function getTitulo(){
	return $this->titulo;
	}
	
	function getDescricao(){
	return $this->descricao;
	}
	
	function getDataEvento(){
	return $this->dataEvento;
	}
	
	function getPrecoAssociado(){
	return $this->precoAssociado;
	}
	
	function getPrecoAvulso(){
	return $this->precoAvulso;
	}
	
	function setStatus($status){
	$this->status = $status;
	}
	
	function setTitulo($titulo){
	$this->titulo = $titulo;
	}
	
	function setDescricao($descricao){
	$this->descricao = $descricao;
	}
	
	function setDataEvento($dataEvento){
	$this->dataEvento = $dataEvento;
	}
	
	function setPrecoAvulso($precoAvulso){
	$this->precoAvulso = $precoAvulso;
	}
	
	function setPrecoAssociado($precoAssociado){
	$this->precoAssociado = $precoAssociado;
	}

}

/*
$evento = new Evento();
$evento->setTitulo("tituloEvento");
$evento->setDescricao("Descricao");
$evento->setPreco("Preco");
print_r($evento);
*/
?>