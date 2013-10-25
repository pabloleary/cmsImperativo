<?php include("controller/ContactController.php");?>
<br />
<div class="corpodados">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<th align="left">Name</th>
<th align="left">E-mail</th>
<th align="left">Message</th>
<th align="left">Date</th>

<th>Delete</th>
</tr>

<?php if($dados){
foreach($dados as $value){
?>
<tr>
   <td>
     <?php print $value['nome']?>
    </td>
    <td><?php print $value['email']?></td>
    <td><?php print $value['comentario']?></td>
 <td align="left">
      <?php print $value['data']?>
    </td>
 
	<td align="center">
   <a href="controller/ContactController.php?id=<?php print $value['id']?>&action=delete">   <img src="img/apagar.gif"/></a>
    </td>
</tr>
<?}}?>
	</table>
</div>