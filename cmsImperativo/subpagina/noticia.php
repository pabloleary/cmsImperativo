<?php
//include("controller/viewNoticia.php");
?>
<br />
<div class="acao">
<a href="homeCriar.php">Insert News</a>
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

<th align="left">Title</th>
<th align="left">Resume</th>
<th align="left">Date</th>
<!--
<th>publicar</th>
<th>despublicar</th>
-->
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
if($dados){

foreach($dados as $value){
?>
				<tr>
				      <td><a href="viewNoticia.php?id=<?php print $value['id']?>&action=view"><?php print substr($value['titulo'],0,20)?></a></td>
				    <td><?php print substr($value['resumo'],0,50)?></td>
					<td align="left"><?php print $value['data']?></td>
				    <!--
					<td align="center"> 
				      <input type="radio" name="radiobutton" value="radiobutton">
				    </td>
				    <td align="center">
				      <input type="radio" name="radiobutton" value="radiobutton">
				    </td>
					-->
					 <td align="center">
				   <a href="homeAtualizar.php?id=<?php print $value['id'];?>&action=view"> <img src="img/editar.gif"/></a>
				    </td>
					<td align="center">
				     <a href="controller/NewsController.php?id=<?php print $value['id'];?>&action=delete"><img src="img/apagar.gif"/></a>
				    </td>
				</tr>
<?php
						}
			}
?>
	</table>
</div>