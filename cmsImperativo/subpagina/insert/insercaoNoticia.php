<br />
<div class="acao">
<a href="home.php">Visualizar Not�cias</a>
<!--
<img src="criar.gif">
<img src="editar.gif">
<img src="deletar.gif">
-->
</div>
<br />
<div class="corpodados">
<form action="controller/inserirNoticia.php" method="post">
<table>
<tr>
<td><label for="status">Status</label>
publicar<input type="radio" name="status" value="publicar"></td>
</tr>
<tr>
<td>
rascunho<input type="radio" name="status" value="rascunho"></td>
</tr>
</table>
<label for="nome">T�tulo
<input type="text" name="titulo"/>
</label>
<label for="resumo">Resumo Conte�do
<textarea name="resumo" rows="2" cols="20">
</textarea>
</label>
<label for="descricao">Conte�do
<textarea name="conteudo" rows="2" cols="20">
</textarea>
</label>
<label for="submit">
<input class ="botaoTamanho" type="submit" name="submit" value="enviar Noticia"/>
</label>
</form>
</div>

