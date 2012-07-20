<?php
class Instituicao{

    private $formatoInstituicao;
    private $uf;
    private $carreira;
    private $anoConclusao;
    private $localTrabalho;
    private $endereco;
    private $cidade;
    private $cep;
    private $residencial;
    private $celular;
    private $email;
    private $uidpessoa;

    function __construct
    (
        $formatoInstituicao,
        $uf,
        $carreira,
        $anoConclusao,
        $localTrabalho,
        $endereco,
        $cidade,
        $cep,
        $residencial,
        $celular,
        $email
    ){

        $this->setFormatoInstituicao($formatoInstituicao);
        $this->setUf($uf);
        $this->setCarreira($carreira);
        $this->setAnoConclusao($anoConclusao);
        $this->setLocalTrabalho($localTrabalho);
        $this->setEndereco($endereco);
        $this->setCidade($cidade);
        $this->setCep($cep);
        $this->setResidencial($residencial);
        $this->setCelular($celular);
        $this->setEmail($email);
    }

    function getFormatoInstituicao(){
        return $this->formatoInstituicao;
    }

    function getUf(){
        return $this->uf;
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

    function getEndereco(){
        return $this->endereco;
    }

    function getCidade(){
        return $this->cidade;
    }

    function getCep(){
        return $this->cep;
    }

    function getResidencial(){
        return $this->residencial;
    }

    function getCelular(){
        return $this->celular;
    }

    function getEmail(){
        return $this->email;
    }




    function setFormatoInstituicao($formatoInstituicao){
        if(empty($formatoInstituicao))
        $this->formatoInstituicao = "não cadastrado";
        else
        $this->formatoInstituicao = $formatoInstituicao;
    }

    function setUf($uf){
        if(empty($uf))
        $this->uf = "não cadastrado";
        else
        $this->uf=$uf;
    }

    function setCarreira($carreira){
        if(empty($carreira))
        $this->carreira = "não cadastrado";
        else
        $this->carreira=$carreira;
    }

    function setAnoConclusao($anoConclusao){
        if(empty($anoConclusao))
        $this->anoConclusao = "não cadastrado";
        else
        $this->anoConclusao=$anoConclusao;
    }

    function setLocalTrabalho($localTrabalho){
        if(empty($localTrabalho))
        $this->localTrabalho = "não cadastrado";
        else
        $this->localTrabalho=$localTrabalho;
    }

    function setEndereco($endereco){
        if(empty($endereco))
        $this->endereco = "não cadastrado";
        else
        $this->endereco=$endereco;
    }

    function setCidade($cidade){
        if(empty($cidade))
        $this->cidade = "não cadastrado";
        else
        $this->cidade=$cidade;
    }

    function setCep($cep){
        if(empty($cep))
        $this->cep = "não cadastrado";
        else
        $this->cep=$cep;
    }

    function setResidencial($residencial){
        if(empty($residencial))
        $this->residencial = "não cadastrado";
        else
        $this->residencial = $residencial;
    }

    function setCelular($celular){
        if(empty($celular))
        $this->celular = "não cadastrado";
        else
        $this->celular = $celular;
    }

    function setEmail($email){
        if(empty($email))
        $this->email = "não cadastrado";
        else
        $this->email=$email;
    }

    public function getUidpessoa() {
        return $this->uidpessoa;
    }

    public function setUidpessoa($uidpessoa) {
        $this->uidpessoa = $uidpessoa;
    }

}

/*$instituicao = new Instituicao(
"formatoInstituicao",
"uf",
"carreira",
"anoConclusao",
"localTrabalho",
"endereco",
"cidade",
"cep",
"residencial",
"celular",
"email"
);
/*
print "<pre>";
print_r($instituicao);
print "</pre>";
*/
?>