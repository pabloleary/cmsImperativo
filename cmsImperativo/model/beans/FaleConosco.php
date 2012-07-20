<?
class FaleConosco{
	
	private $nome;
	private $email;
	private $comentario;
	private $data;

	public function getNome(){
	return $this->nome;
	}
	public function setNome($nome){
	$this->nome = $nome;
	}
	public function getEmail(){
	return $this->email;
	}
	
	public function getData(){
	return $this->data;
	}
	
	public function setEmail($email){
	$this->email = $email;
	}
	
	public function getComentario(){
	return $this->comentario;
	}
	
	public function setComentario($comentario){
	$this->comentario = $comentario;
	}
	
	public function setData($data){
	$this->data = $data;
	}

}
?>