<?php
class DaoBiblioteca{

    static private $insertUpload = "INSERT INTO `aprobasarquivo` VALUES (
    NULL , ?, ? , ? , ?, ? , ? , ? , ? );";
    static private $deleteFile = "DELETE FROM `aprobasarquivo` WHERE id= ?";
    static private $select = "SELECT * FROM `aprobasarquivo`";
    static private $selectgroups    = "SELECT * FROM aprobasarquivo GROUP BY categoria";
    static private $atualizar = "UPDATE aprobasarquivo SET nome = ? , descricao = ? , categoria = ? , status = ? where id = ?";
    private $conecta;
    private $biblioteca;

    function __construct(Biblioteca $biblioteca,Conecta $conecta){
        $this->biblioteca 	= $biblioteca;
        $this->conecta 		= $conecta;
    }

    function inserir(){
        try{  
            $stmt = $this->conecta->getConexao()->prepare(self::$insertUpload);
            $stmt->bind_param("sssssssi",$this->biblioteca->getNome(),
                $this->biblioteca->getData(),
                $this->biblioteca->getDescricao(),
                $this->biblioteca->getCategoria(),
                $this->biblioteca->getStatus(),
                $this->biblioteca->getFilename(),                
                $this->biblioteca->getTipo(),
                $this->biblioteca->getSize()
            );
            $stmt->execute();
        }catch (Exception $e) {
            echo "Exceзгo pega: ",  $e->getMessage(), "\n";
        }
    }

    function delete($id){
        $stmt = $this->conecta->getConexao()->prepare(self::$deleteFile);
        $stmt->bind_param("i",$id);
        $stmt->execute();    
    }

    function visualizarTudo(){
        $stmt = $this->conecta->getConexao()->query(self::$select);
        while($row = $stmt->fetch_array()){
            $dados[] = $row;
        }
        return $dados;
    }

    function visualizarTudoGroups(){
        $stmt = $this->conecta->getConexao()->query(self::$selectgroups);
        while($row = $stmt->fetch_array()){
            $dados[] = $row;
        }
        return $dados;
    }



    function visualizarID($id){
        $stmt = $this->conecta->getConexao()->query("SELECT * FROM aprobasarquivo WHERE id= $id");
        $dados = $stmt->fetch_array();
        return $dados;
    }

    function atualizar($id){
        $stmt = $this->conecta->getConexao()->prepare(self::$atualizar);
        $stmt->bind_param("ssssi",$this->biblioteca->getNome(),
            $this->biblioteca->getDescricao(),
            $this->biblioteca->getCategoria(),
            $this->biblioteca->getStatus(),
            $id);
        $stmt->execute();
    }
}
?>