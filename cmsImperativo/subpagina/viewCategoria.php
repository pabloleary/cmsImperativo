<br />
<div class="acao">
<a href="arquivosUpload.php">upload de arquivos</a>
&nbsp;&nbsp;&nbsp;
<a href="criarCategoria.php">Inserir Categoria</a>
&nbsp;&nbsp;&nbsp;
<a href="criarCategoria.php">Visualizar Categorias</a>

<!--
<img src="criar.gif">
<img src="editar.gif">
<img src="deletar.gif">
-->
</div>
<br />
<div class="corpodados">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<!--<th align="left">Pai da categoria</th>-->
<th align="left">Categoria</th>
<th>editar</th>
<th>apagar</th>
</tr>
<?php 
if($dados){
///print_r($dados);
foreach($dados as $value){?>
<tr>
   <?php
/*   <td>  <?=$value["paicategoria"]?>
       </td>
	*/   ?>
    <td><?=$value["categoria"]?></td>
 	 
	 <td align="center">
   <a href="viewCategoriaAtualizar.php?id=<?=$value['id']?>"> <img src="img/editar.gif"/></a>
    </td>
	<td align="center">
     <a href="controller/delete/deleteCategoria.php?id=<?=$value['id']?>"><img src="img/apagar.gif"/></a>
    </td>
</tr>
<?}}
?>
	</table>

</div>