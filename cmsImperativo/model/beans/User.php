<?php
class User{

    private $endereco;
    private $cidade;
    private $uf;
    private $cep;
    private $telResidencial;
    private $telCelular;
    private $email;
    private $estadoCivil;
    private $uidpessoa;

    function __construct(
        $endereco,
        $cidade,
        $uf,
        $cep,
        $telResidencial,
        $telCelular,
        $email,
        $estadoCivil
    ){
        $this->setEndereco($endereco);
        $this->setCidade($cidade);
        $this->setUf($uf);
        $this->setCep($cep);
        $this->setTelResidencial($telResidencial);
        $this->setTelCelular($telCelular);
        $this->setEmail($email);
        $this->setEstadoCivil($estadoCivil);
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

    function getEstadoCivil(){
        return $this->estadoCivil;
    }

    function setEndereco($endereco){
        if(empty($endereco))
        $this->endereco="não cadastrado";
        else
        $this->endereco=$endereco;
    }

    function setCidade($cidade){
        if(empty($cidade))
        $this->cidade="não cadastrado";
        else
        $this->cidade=$cidade;
    }

    function setUf($uf){
        if(empty($uf))
        $this->uf="não cadastrado";
        else
        $this->uf=$uf;
    }

    function setCep($cep){
        if(empty($cep))
        $this->cep="não cadastrado";
        else
        $this->cep=$cep;
    }

    function setTelResidencial($telResidencial){
        if(empty($telResidencial))
        $this->telResidencial="não cadastrado";
        else
        $this->telResidencial=$telResidencial;
    }

    function setTelCelular($telCelular){
        if(empty($telCelular))
        $this->telCelular="não cadastrado";
        else
        $this->telCelular=$telCelular;
    }

    function setEmail($email){
        if(empty($email))
        $this->email="não cadastrado";
        else
        $this->email=$email;
    }

    function setEstadoCivil($estadoCivil){
        if(empty($estadoCivil))
        $this->estadoCivil = "não cadastrado";
        else
        $this->estadoCivil=$estadoCivil;
    }

    public function getUidpessoa() {
        return $this->uidpessoa;
    }

    public function setUidpessoa($uidpessoa) {
        $this->uidpessoa = $uidpessoa;
    }
}
/*
$user = new User(
"endereco",
"cidade",
"uf",
"cep",
"telResidencial",
"telCelular",
"email",
"estadoCivil",
"cref",
"grauInstrucao",
"funcao",
"categoria"
);
*/
?>
