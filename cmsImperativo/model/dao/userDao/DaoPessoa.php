<?php
class DaoPessoa{

    private $conecta;
    private $pessoa;
    private $insert;

    static private $select = "SELECT * FROM userpessoa";

    static private $recuperaId = "SELECT max(id) FROM userpessoa";

    static private $delete = "DELETE FROM userpessoa WHERE id= ?";

    static private $atualizar = "UPDATE userpessoa SET nome = ? ,nacionalidade = ?, naturalidade = ? , nascimento = ? , sexo = ? , cpf = ? , rg = ? , orgaoEmissor = ? , dataExpedicao = ?  where id = ?";


    function __construct(Pessoa $pessoa,Conecta $conecta){
        $this->pessoa  = $pessoa;
        $this->conecta = $conecta;
    }

    function inserir(){
        $this->insert = "INSERT INTO userpessoa VALUES (
        NULL,
        \"".$this->pessoa->getNome()."\",
        \"".$this->pessoa->getNacionalidade()."\",
        \"".$this->pessoa->getNaturalidade()."\",
        \"".$this->pessoa->getDataNascimento()."\",
        \"".$this->pessoa->getSexo()."\",
        \"".$this->pessoa->getCpf()."\",
        \"".$this->pessoa->getRg()."\",
        \"".$this->pessoa->getOrgaoEmissor()."\",
        \"".$this->pessoa->getDataExpedicao()."\"
        );";
        $this->conecta->getConexao()->query($this->insert);

    }

    function visualizarTudo(){
        $stmt = $this->conecta->getConexao()->query(self::$select);
        while($row = $stmt->fetch_row()){
            $dados[] = $row;
        }
        return $dados;
    }

    function atualizar($id){
        $stmt = $this->conecta->getConexao()->prepare(self::$atualizar);
        $stmt->bind_param("sssssssssi",$this->pessoa->getNome(),
            $this->pessoa->getNacionalidade(),
            $this->pessoa->getNaturalidade(),
            $this->pessoa->getDataNascimento(),
            $this->pessoa->getSexo(),
            $this->pessoa->getCpf(),
            $this->pessoa->getRg(),
            $this->pessoa->getOrgaoEmissor(),
            $this->pessoa->getDataExpedicao(),
            $id);
        $stmt->execute();

    }

    function deletar($id){
        $stmt = $this->conecta->getConexao()->prepare(self::$delete);
        $stmt->bind_param("i",$id);
        $stmt->execute();
    }

    function recuperaId(){
        $stmt  = $this->conecta->getConexao()->query(self::$recuperaId);
        $dados = $stmt->fetch_row();
        return $dados;
    }
}
        /* test *//*
        include("../Conecta.php");
        include("../beans/Pessoa.php");
        $pessoa = new Pessoa();
        $conecta = new Conecta();
        print_r($pessoa);
        $dao = new DaoPessoa($pessoa,$conecta);
        $dao->inserir();
        print_r($dao->getConecta());
        print_r($dao->getUser());
        */
?>