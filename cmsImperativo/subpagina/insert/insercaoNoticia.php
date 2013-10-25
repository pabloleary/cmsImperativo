<br />
<div class="acao">
<a href="home.php">View News</a>
<!--
<img src="criar.gif">
<img src="editar.gif">
<img src="deletar.gif">
-->
</div>
<br />
<div class="corpodados">
<form action="controller/NewsController.php?action=insert" method="post">
<table>
<tr>
<td><label for="status">Status</label>
Publish<input type="radio" name="status" value="publicar"></td>
</tr>
<tr>
<td>
Draft<input type="radio" name="status" value="rascunho"></td>
</tr>
</table>
<label for="nome">Title
<input type="text" name="titulo"/>
</label>
<label for="resumo">Resume
<textarea name="resumo" rows="2" cols="20">
</textarea>
</label>
<label for="conteudo">Content
<textarea name="conteudo" rows="2" cols="20">
</textarea>
</label>
<label for="date">Date
<input type="text" name="date"/>
</label>
<label for="submit">
<input class ="botaoTamanho" type="submit" name="submit" value="Insert News"/>
</label>
</form>
</div>

