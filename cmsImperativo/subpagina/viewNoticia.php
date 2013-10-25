<?php 
//include("../../../controller/logando.php");
//include("controller/viewNoticiaUnica.php");
include("controller/NewsController.php");
?>
<br />
<div class="acao">
<a href="home.php">View News</a>
</div>
<br />
<div class="corpodados">
<span>Title</span>
<p><?php print $dados['titulo']?></p>
<span>Resume</span>
<p><?php print $dados['resumo']?></p>
<span>Date</span>
<p><?php print $dados['data']?></p>
<span>Content</span>
<p><?php print $dados['conteudo']?></p>
</div>

