<?php
class Profissional{

    private $filiacao;
    private $cref;
    private $grauinstrucao;
    private $funcao;
    private $categoria;
    private $uidpessoa;

    function __construct(
        $filiacao,
        $cref,
        $grauinstrucao,
        $funcao,
        $categoria
    ){
        $this->setfiliacao($filiacao);
        $this->setcref($cref);
        $this->setGrauinstrucao($grauinstrucao);
        $this->setFuncao($funcao);
        $this->setCategoria($categoria);
    }


    function getFiliacao(){
        return $this->filiacao;
    }

    function getCref(){
        return $this->cref;
    }

    function getGrauinstrucao(){
        return $this->grauinstrucao;
    }

    function getFuncao(){
        return $this->funcao;
    }

    function getCategoria(){
        return $this->categoria;
    }

    function setfiliacao($filiacao){
        if(empty($filiacao))
        $this->filiacao="não cadastrado";
        else
        $this->filiacao = $filiacao;
    }


    function setcref($cref){
        if(empty($cref))
        $this->cref="não cadastrado";
        else
        $this->cref = $cref;
    }

    function setGrauinstrucao($grauinstrucao){
        if(empty($grauinstrucao))
        $this->grauinstrucao="não cadastrado";
        else
        $this->grauinstrucao = $grauinstrucao;
    }
    
    function setFuncao($funcao){
        if(empty($funcao))
        $this->funcao="não cadastrado";
        else
        $this->funcao = $funcao;
    }

    function setCategoria($categoria){
        if(empty($categoria))
        $this->categoria="não cadastrado";
        else
        $this->categoria = $categoria;
    }

    public function getUidpessoa() {
        return $this->uidpessoa;
    }

    public function setUidpessoa($uidpessoa) {
        $this->uidpessoa = $uidpessoa;
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