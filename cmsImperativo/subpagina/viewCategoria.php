<br />
<div class="acao">
<a href="arquivosUpload.php">Upload Files</a>
&nbsp;&nbsp;&nbsp;
<a href="criarCategoria.php">Insert Category</a>
&nbsp;&nbsp;&nbsp;
<a href="criarCategoria.php">View Category</a>

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
<th align="left">Category</th>
<th>Edit</th>
<th>Delete</th>
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
    <td><?php print $value["category"]?></td>
 	 
	 <td align="center">
   <a href="viewCategoriaAtualizar.php?id=<?php print $value['id']?>&action=view"> <img src="img/editar.gif"/></a>
    </td>
	<td align="center">
     <a href="controller/CategoryController.php?id=<?php print $value['id']?>&action=delete"><img src="img/apagar.gif"/></a>
    </td>
</tr>
<?}}
?>
	</table>

</div>