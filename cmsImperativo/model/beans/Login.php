<?php
class Login{

    private $login;
    private $senha;
    private $uidpessoa;
    
    function __construct($login,$senha){
        $this->setLogin($login);
        $this->setSenha($senha);
    }

    function getLogin(){
        return $this->login;
    }

    function getSenha(){
        return $this->senha;
    }

    function setLogin($login){       
        $this->login = $login;
    }

    function setSenha($senha){
        $senha = $senha ? $senha : "123" ;
        $this->senha = md5($senha);
    }

    public function getUidpessoa() {
        return $this->uidpessoa;
    }

    public function setUidpessoa($uidpessoa) {
        $this->uidpessoa = $uidpessoa;
    }
}
?>