<br />
<div class="acao">
<a href="arquivos.php">visualizar arquivos</a>
&nbsp;&nbsp;&nbsp;
<a href="arquivosUpload.php">upload arquivos</a>
&nbsp;&nbsp;&nbsp;
<a href="viewCategoria.php">visualizar categoria</a>
<!--
<img src="criar.gif">
<img src="editar.gif">
<img src="deletar.gif">
-->
</div>
<br />
<div class="corpodados">
<form action="controller/update/atualizarCategoria.php?id=<?=$dados["id"]?>" method="post">
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
<label>Nome da Categoria<input type="text" name="categoria" value="<?=$dados['categoria']?>"/></label>
<input type="submit" value="criar categoria">
</form>

</div>