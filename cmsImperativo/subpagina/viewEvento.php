<?php 
//include("../../../controller/logando.php");
include("controller/viewEventoUnico.php");
?>
<br />
<div class="acao">
<a href="home.php">Visualizar Eventos</a>
</div>
<br />
<div class="corpodados">
<span>t�tulo</span>
<p><?=$dados['titulo']?></p>
<span>pre�o avulso</span>
<p><?=$dados['precoAvulso']?></p>
<span>pre�o associado</span>
<p><?=$dados['precoAssociado']?></p>
<span>data</span>
<p><?=$dados['dataEvento']?></p>
</div>

