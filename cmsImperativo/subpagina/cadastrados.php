<?php
/*test*/
/*
print "<pre>";
print_r($daoViewCadastrado->view());
print "</pre>"
*/

?>
	<br />
<div class="acao">
<a href="cadastroDeUsuario.php">adicionar Usuário Profissional</a>
&nbsp;&nbsp;&nbsp;
<a href="cadastroDeUsuarioComum.php">adicionar Usuário Comum</a>
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
<th align="left">nome</th>
<th align="left">cpf</th>
<th align="left">data de inscrição</th>
<th align="left">data de expiração</th>
<th align="left">status do usuario</th>
<th align="center">editar</th>
<th align="center">apagar</th>
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
	<td align="left"><?=$value[0]?></td>
    <td align="left"> <a href="cadastroUnico.php?id=<?=$value['idpessoa']?>"><?=$value["nome"]?></a></td>
    <td align="left"><?=$value["cpf"]?></td>
    <td align="left"><?=$value["sexo"]?></td>
    <td> 
     <?=$value['estadocivil']?>
    </td>
    <td>
      <?=$value['email']?>
    </td>
	 <td align="center">
    <a href="cadastrarUserUpdate.php?id=<?=$value['id']?>"> <img src="img/editar.gif"/></a>
    </td>
	<td align="center">
     <a href="controller/userController/delete/deleteUser.php?id=<?=$value['id']?>"><img src="img/apagar.gif"/></a>
    </td>
	</tr>
<?php 
} }
?>	
</table>
	
</div>