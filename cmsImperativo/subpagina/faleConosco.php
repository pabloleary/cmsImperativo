<? include("controller/viewFaleConosco.php");?>
<br />
<div class="corpodados">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<th align="left">nome</th>
<th align="left">email</th>
<th align="left">mensagem</th>
<th align="left">data</th>

<th>apagar</th>
</tr>

<? if($dados){
foreach($dados as $value){
?>
<tr>
   <td>
     <?=$value['nome']?>
    </td>
    <td><?=$value['email']?></td>
    <td><?=$value['comentario']?></td>
 <td align="left">
      <?=$value['data']?>
    </td>
 
	<td align="center">
   <a href="controller/deleteFaleConosco.php?id=<?=$value['id']?>">   <img src="img/apagar.gif"/></a>
    </td>
</tr>
<?}}?>
	</table>
</div>