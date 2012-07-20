<? 
//include("../../../controller/logando.php");
include("controller/viewNoticiaUnica.php");
?>
<br />
<div class="acao">
<a href="home.php">Visualizar Notícias</a>
</div>
<br />
<div class="corpodados">
<span>título</span>
<p><?=$dados['titulo']?></p>
<span>resumo</span>
<p><?=$dados['resumo']?></p>
<span>data</span>
<p><?=$dados['data']?></p>
<span>conteúdo</span>
<p><?=$dados['conteudo']?></p>
</div>

