<?
include("../model/Conecta.php");
//conecta ao banco
$conexao   = new Conecta();

print_r($_POST);


$dados = 2;

$sql = 'INSERT INTO `AprobasCadastro` 
VALUES (
NULL,
	'.$dados.', 
    '.$_POST["filiacao"].', 
    '.$_POST["nascionalidade"].', 
    '.$_POST["naturalidade"].', 
    '.$_POST["nascimento"].', 
    '.$_POST["sexo"].', 
	'.$_POST["endereco2"].', 
    '.$_POST["cidade2"].', 
    '.$_POST["uf2"].', 
    '.$_POST["cep2"].', 
    '.$_POST["telres2"].', 
    '.$_POST["celular2"].', 
    '.$_POST["email2"].', 
    '.$_POST["rg"].', 
    '.$_POST["orgaoemissor"].', 
    '.$_POST["expedicao"].', 
    '.$_POST["cpf"].', 
    '.$_POST["ec"].', 
    '.$_POST["cref"].', 
    '.$_POST["gi"].', 
    '.$_POST["fi"].', 
    '.$_POST["uf3"].', 
    '.$_POST["carreira"].', 
    '.$_POST["ac"].', 
    '.$_POST["localtrabalho"].', 
    '.$_POST["endereco"].', 
    '.$_POST["cidade"].', 
    '.$_POST["uf"].', 
    '.$_POST["cep"].', 
    '.$_POST["telres"].', 
    '.$_POST["celular"].', 
    '.$_POST["email"].', 
    '.$_POST["idade"].', 
    '.$_POST["funcao"].', 
    '.$_POST["categoria"].', 
    '.$_POST["login"].', 
    '.$_POST["senha"].'
)';

$conexao->getConexao()->query($sql);

?>