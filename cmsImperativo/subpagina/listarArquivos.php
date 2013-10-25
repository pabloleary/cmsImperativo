<br />
<div class="acao">
<a href="arquivosUpload.php">Upload File</a>
&nbsp;&nbsp;&nbsp;
<a href="criarCategoria.php">Insert Category</a>
&nbsp;&nbsp;&nbsp;
<a href="viewCategoria.php">View Category</a>
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
<th align="left">File Name</th>
<th align="left">Category</th>
<th align="left">Date</th>
<th align="left">Status</th>
<!--
<th>despublicar</th>
-->
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
if($dados){
foreach($dados as $value){?>
<tr>
   <td> 
   
      <?php print $value['nome']?>
    </td>
    <td><?php print $value['categoria']?></td>
    <td align="left"><?=$value['data']?></td>
    <td align="left"> 
      <?php print$value['status']?>
    </td>
 	 <!--
	 <td align="center">
      <input type="radio" name="radiobutton" value="radiobutton">
    </td>
	-->
	 <td align="center">
  <a href="fileUpdate.php?id=<?php print $value['id']?>&action=view"> <img src="img/editar.gif"/></a>
    </td>
	<td align="center">
		 <a href="controller/RepositoryController.php?id=<?php print $value['id']?>&action=delete">
			<img src="img/apagar.gif"/>
		 </a>
    </td>
</tr>
<?}}
?>
	</table>

</div>