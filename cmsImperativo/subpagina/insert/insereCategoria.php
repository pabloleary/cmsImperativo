<br />
<div class="acao">
<a href="arquivos.php">File View</a>
&nbsp;&nbsp;&nbsp;
<a href="viewCategoria.php">Category View</a>
<!--
<img src="criar.gif">
<img src="editar.gif">
<img src="deletar.gif">
-->
</div>
<br />
<div class="corpodados">
<form action="controller/CategoryController.php?action=insert" method="post">
<?php
/*
<label>Pai da Categoria</label>
<select name="paiCategoria" >
<option value="raiz">raiz</option>
<?php
//if($dados){
//foreach($dados as $valor){
?>
<option value="">
<?php//=$valor['categoria']?>
</option>
<?php
//}}
?>
</select>
*/?>
<input type="hidden" name="paiCategoria" value="raiz"/>
<label>Category<input type="text" name="categoria" /></label>
<input type="submit" value="Insert">
</form>

</div>