<? 
//include("../../../controller/logando.php");
include("controller/viewNoticiaUnica.php");
?>
<br />
<div class="acao">
<a href="home.php">Visualizar Not�cias</a>
</div>
<br />
<div class="corpodados">
<span>t�tulo</span>
<p><?=$dados['titulo']?></p>
<span>resumo</span>
<p><?=$dados['resumo']?></p>
<span>data</span>
<p><?=$dados['data']?></p>
<span>conte�do</span>
<p><?=$dados['conteudo']?></p>
</div>

