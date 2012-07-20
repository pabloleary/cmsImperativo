<?
switch ($_GET[a]) {
    case 0:
        $link = "../view/cms/home.php";
		$textLink = "criar nova noticia";
        break;
    case 1:
        $link = "eventos.php";
		$textLink = "criar novo evento";
        break;
    case 2:
        $link = "arquivos.php";
		$textLink = "inserir novo arquivo";
        break;
	case 3:
        $link = "cadastrar.php";
		$textLink = "cadastrar um Usuario";
        break;
	case 4:
        $link = "faleconosco.php";
		$textLink = "contactar usuário";
        break;	
}
?>
<fieldset>
<a href="<?=$link?>"><?=$textLink?></a>
<!--
<img src="criar.gif">
<img src="editar.gif">
<img src="deletar.gif">
-->
</fieldset>