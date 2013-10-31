<?php
/*test*/

/*print "<pre>";
print_r($dados);
print "</pre>";
//exit;*/

?>
<br />
<div class="acao">
<a href="userRegister.php">Add User</a>

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
<th align="left">id</th>
<th align="left">Name</th>
<th align="left">Login</th>
<th align="left">Initial Date</th>
<th align="left">End Date</th>
<th align="left">User Status</th>
<th align="center">Update</th>
<th align="center">Delete</th>
</tr>

<?php

if($dados){
foreach($dados as $value){
/*
print "<pre>";
print_r($value);
print "</pre>";
*/
?>
<tr>
	<td align="left"><?php print $value['id']?></td>
    <td align="left"> <a href="cadastroUnico.php?id=<?php print $value['id']?>">name</a></td>
    <td align="left"><?php print $value["login"]?></td>
    <td align="left">InitialDate</td>
    <td> 
     EndDate
    </td>
    <td>
      UserStatus
    </td>
	 <td align="center">
    <a href="controller/UserRegisterController.php?action=update&id=<?php print $value['id']?>"> <img src="img/editar.gif"/></a>
    </td>
	<td align="center">
     <a href="controller/UserRegisterController.php?action=update&id=<?php print $value['id']?>"><img src="img/apagar.gif"/></a>
    </td>
	</tr>
<?php 
} }
?>	
</table>
	
</div>