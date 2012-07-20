<?php
class Categoria{

    private $categoria;
    private $paiCategoria;

    function __construct($categoria,$paiCategoria){
        $this->categoria    = $categoria;
        $this->paiCategoria = $paiCategoria;
    }

    function getCategoria(){
        return $this->categoria;
    }

    function setCategoria($categoria){
        $this->categoria=$categoria;
    }

    function getPaiCategoria(){
        return $this->paiCategoria;
    }

    function setPaiCategoria($paiCategoria){
        $this->paiCategoria = $paiCategoria;
    }
}
?>