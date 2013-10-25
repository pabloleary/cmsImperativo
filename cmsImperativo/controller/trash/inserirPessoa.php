<?
include("../model/Conecta.php");
include("../model/dao/DaoPessoa.php");
include("../model/beans/Pessoa.php");

//conecta ao banco
$conexao      = new Conecta();
$pessoa       = new Pessoa();

$conexao    = new ConectaClasse();
$pessoa     = new PessoaClasse();

$pessoa->setNome($dados['nome']);
$pessoa->setCpf($dados['cpf']);
$pessoa->setIdade($dados['idade']);
$pessoa->setLogin($dados['login']);
$pessoa->setSenha($dados['senha']);
//print_r($cadastro);
//print($cadastro->getNome());

//insere no banco
$daoCadastro  = new DaoCadastroClasse($cadastro,$conexao);
$daoLogin     = new DaoLoginClasse($login,$conexao);

$daoCadastro->inserir();
$daoLogin->inserir();

header('Location: ../cadastrar.php');
?>