<?php
/*test*/
/*
print "<pre>";
print_r($daoViewCadastrado->view());
print "</pre>"

print "<pre>";
print_r($dados);
print "</pre>";
*/
?>
	<br />
<div class="acao">

<a href="cadastrar.php">visualizar Cadastrados</a>
&nbsp;&nbsp;&nbsp;
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
<th align="left">id</th><td align="left"><?=$dados[0]?></td>
</tr>
<tr>
<th align="left">nome</th><td align="left"><?=$dados["nome"]?></a></td>
</tr>
<tr>
<th align="left">cpf</th> <td align="left"><?=$dados["cpf"]?></td>
</tr>
<tr>
<th align="left">data de inscrição</th> <td align="left"><?=$dados["sexo"]?></td>
</tr>
<tr>
<th align="left">data de expiração</th><td>  <?=$dados['estadocivil']?>    </td>
</tr>
<tr>
<th align="left">status do usuario</th><td>    <?=$dados['email']?>    </td>
</tr>
<!--
<th align="center">editar</th>
<th align="center">apagar</th>
-->


    
	
<!--
	<td align="center">
    <img src="img/editar.gif"/>
    </td>
	<td align="center">
     <a href="controller/userController/delete/deleteUser.php?id=<?=$dados['id']?>"><img src="img/apagar.gif"/></a>
    </td>
	
	-->
	

</table>
	
</div>