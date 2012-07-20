<?php
include("controller/viewEvento.php");
/*print "<pre>";
print_r($dados);
print "</pre>";*/
?>
<br />
<div class="acao">
<a href="eventoCriar.php">criar evento</a>
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
<th align="left">preçoAvulso</th>
<th align="left">preçoAssociado</th>
<th align="left">data</th>
<!--
<th>publicar</th>
<th>despublicar</th>
-->
<th>editar</th>
<th>apagar</th>
</tr>
<?if($dados){

foreach($dados as $value){?>
<tr>
   
      <td><a href="viewEvento.php?id=<?=$value['id']?>"><?=$value['titulo']?></a></td>
   	 <td><?=$value['precoAvulso']?></td>
	 <td><?=$value['precoAssociado']?></td>
	  <td align="left"><?=$value['dataEvento']?></td>
    
	<!--
	<td align="center">
      <input type="radio" name="radiobutton" value="radiobutton">
    </td>
   <td align="center">
      <input type="radio" name="radiobutton" value="radiobutton">
    </td>
	-->
	 <td align="center">
   <a href="eventosAtualizar.php?id=<?=$value['id']?>"> <img src="img/editar.gif"/></a>
    </td>
	<td align="center">
     <a href="controller/delete/deleteEvento.php?id=<?=$value['id']?>"><img src="img/apagar.gif"/></a>
    </td>
</tr>
<?}}?>
	</table>
</div>