<?php
//include("controller/viewEvento.php");
include("controller/EventController.php");
/*print "<pre>";
print_r($dados);
print "</pre>";*/
?>
<br />
<div class="acao">
<a href="eventoCriar.php">Insert Event</a>
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
<th align="left">Price No Member</th>
<th align="left">Price To Member</th>
<th align="left">Date</th>
<!--
<th>publicar</th>
<th>despublicar</th>
-->
<th>Edit</th>
<th>Delete</th>
</tr>
<?php if($dados){

foreach($dados as $value){?>
<tr>
   
      <td><a href="viewEvento.php?id=<?php print $value['id']?>"><?php print $value['titulo']?></a></td>
   	 <td><?php print $value['precoAvulso']?></td>
	 <td><?php print $value['precoAssociado']?></td>
	  <td align="left"><?php print $value['dataEvento']?></td>
    
	<!--
	<td align="center">
      <input type="radio" name="radiobutton" value="radiobutton">
    </td>
   <td align="center">
      <input type="radio" name="radiobutton" value="radiobutton">
    </td>
	-->
	 <td align="center">
   <a href="eventosAtualizar.php?id=<?php print $value['id']?>&action=view"> <img src="img/editar.gif"/></a>
    </td>
	<td align="center">
     <a href="controller/EventController.php?id=<?php print $value['id']?>&action=delete"><img src="img/apagar.gif"/></a>
    </td>
</tr>
<?}}?>
	</table>
</div>