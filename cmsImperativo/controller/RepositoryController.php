<?php
		class Upload {
			static private $caminho = "../repositorio/";
			private $files;

			public function upload() {
				return $arquivos = $_FILES;
			}

			public function countFiles() {
				foreach ($_FILES as $value) {
					if ($value['error'] == 0 && $value['size'] > 0) {
						move_uploaded_file($value['tmp_name'], self :: $caminho . $value['name']);
						$this->files[] = $value['name'];
					}
				}
			}

			public function getFiles() {
				return self :: $caminho . $this->files[0];
			}
		}


if (!empty ($_GET)) {

	print_r($_GET);

	if ($_GET["action"] == "insert") {

		$upload = new Upload();
		$upload->upload();
		$upload->countFiles();

		function files($arquivos) {
			$arquivo = $arquivos["arquivo1"]["tmp_name"];
			$tamanho = $arquivos["arquivo1"]["size"];
			$tipo = $arquivos["arquivo1"]["type"];
			$nome = $arquivos["arquivo1"]["name"];

			if ($arquivo != "none") {
				$fp = fopen($arquivo, "rb");
				$conteudo = fread($fp, $tamanho);
				//$conteudo = $conteudo;
				fclose($fp);
				$dadosArquivo = array (
					$conteudo,
					$nome,
					$tipo,
					$tamanho
				);
			} else {
				$arquivo = "none";
				$nomearquivo = "none";
				$dadosArquivo = array (
					$arquivo,
					$nomearquivo
				);
			}
			return $dadosArquivo;
		}

		include ("../model/Conecta.php");
		include ("../model/beans/Biblioteca.php");
		include ("../model/dao/DaoBiblioteca.php");

		$conexao = new Conecta();
		$biblioteca = new Biblioteca();
		$biblioteca->setNome($_POST["filename"]);
		$biblioteca->setData(date("j/m/Y"));
		$biblioteca->setDescricao($_POST["descricao"]);
		$biblioteca->setCategoria($_POST["categoria"]);
		$biblioteca->setStatus($_POST["status"]);
		$biblioteca->setFilename($upload->getFiles());
		$biblioteca->setTipo("tipo");
		$biblioteca->setSize(0);
		$daoBiblioteca = new DaoBiblioteca($biblioteca, $conexao);
		$daoBiblioteca->inserir();
		header("Location: ../arquivos.php");
	}

	if ($_GET["action"] == "update") {
		
		
include("../model/Conecta.php");
include("../model/beans/Biblioteca.php");
include("../model/dao/DaoBiblioteca.php");

$biblioteca = new Biblioteca();
$biblioteca->setNome($_POST["filename"]);
$biblioteca->setDescricao($_POST["descricao"]);
$biblioteca->setCategoria($_POST["categoria"]);
$biblioteca->setStatus($_POST["status"]);


$conexao   = new Conecta();
$daoBiblioteca = new DaoBiblioteca($biblioteca,$conexao);
$daoBiblioteca->atualizar($_GET['id']);

header("Location: ../arquivos.php");

	}

	if ($_GET["action"] == "delete") {
		include("../model/Conecta.php");
include("../model/beans/Biblioteca.php");
include("../model/dao/DaoBiblioteca.php");

$biblioteca    = new Biblioteca();
$conexao   = new Conecta();
$daoBiblioteca = new DaoBiblioteca($biblioteca,$conexao);

$daoBiblioteca->delete($_GET['id']);

header("Location: ../arquivos.php");
		
	}

	if ($_GET["action"] == "view") {

include("model/Conecta.php");
include("model/beans/Biblioteca.php");
include("model/dao/DaoBiblioteca.php");

$conexao        = new Conecta();
$biblioteca     = new Biblioteca();
$daoBiblioteca  = new DaoBiblioteca($biblioteca,$conexao);
$dados         = $daoBiblioteca->visualizarID($_GET['id']);
	}

} else {

	include ("model/Conecta.php");
	include ("model/beans/Biblioteca.php");
	include ("model/dao/DaoBiblioteca.php");

	$conexao = new Conecta();
	$biblioteca = new Biblioteca();
	$daoBiblioteca = new DaoBiblioteca($biblioteca, $conexao);

	$dados = $daoBiblioteca->visualizarTudo();
}
?>
