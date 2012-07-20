<?php
include("controller/viewNoticia.php");

/*
print "<pre>";
print_r($dados);
print "</pre>";
*/

?>
<br />
<div class="acao">
<a href="homeCriar.php">criar noticia</a>
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

<th align="left">titulo</th>
<th align="left">resumo</th>
<th align="left">data</th>
<!--
<th>publicar</th>
<th>despublicar</th>
-->
<th>editar</th>
<th>apagar</th>
</tr>
<?php
if($dados){

foreach($dados as $value){
?>
				<tr>
				      <td><a href="viewNoticia.php?id=<?=$value['id']?>"><?=substr($value['titulo'],0,20)?></a></td>
				    <td><?=substr($value['resumo'],0,50)?></td>
					<td align="left"><?=$value['data']?></td>
				    <!--
					<td align="center"> 
				      <input type="radio" name="radiobutton" value="radiobutton">
				    </td>
				    <td align="center">
				      <input type="radio" name="radiobutton" value="radiobutton">
				    </td>
					-->
					 <td align="center">
				   <a href="homeAtualizar.php?id=<?=$value['id']?>"> <img src="img/editar.gif"/></a>
				    </td>
					<td align="center">
				     <a href="controller/delete/deleteNoticia.php?id=<?=$value['id']?>"><img src="img/apagar.gif"/></a>
				    </td>
				</tr>
<?
						}
			}
?>
	</table>
</div>