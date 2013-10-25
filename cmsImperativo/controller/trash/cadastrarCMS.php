<?
include("../modelCMS/conectaClasse.php");
include("../modelCMS/DaoCadastroClasse.php");
include("../modelCMS/DaoLoginClasse.php");
include("../modelCMS/CadastroClasse.php");
include("../modelCMS/LoginClasse.php");

//conecta ao banco
$conexao   = new ConectaClasse();

//carrega os daos
foreach($_POST as $key => $valor)
$dados[$key] = $valor;

$cadastro     = new CadastroClasse($dados['nome'],$dados['idade'],$dados['cpf']);

//print_r($cadastro);
//print($cadastro->getNome());
$login        = new LoginClasse($dados['login'],$dados['senha']);

//insere no banco
$daoCadastro  = new DaoCadastroClasse($cadastro,$conexao);
$daoLogin     = new DaoLoginClasse($login,$conexao);

$daoCadastro->inserir();
$daoLogin->inserir();

header('Location: ../cadastrar.php');
?>