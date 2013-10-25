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
<span>título</span>
<p><?=$dados['titulo']?></p>
<span>preço avulso</span>
<p><?=$dados['precoAvulso']?></p>
<span>preço associado</span>
<p><?=$dados['precoAssociado']?></p>
<span>data</span>
<p><?=$dados['dataEvento']?></p>
</div>

