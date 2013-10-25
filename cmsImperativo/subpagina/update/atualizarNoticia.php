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
<form action="controller/NewsController.php?id=<?php print $dados['id']?>&action=update" method="post">
<label for="status" class="radio">Available<br>
		  Public <input type="radio" name="status" value="publico" class="radio" >
		  Private <input type="radio" name="status" value="privado" class="radio">
		  </label><br />
<label for="nome">Title
<input type="text" name="titulo" value="<?php print $dados['titulo']?>"/>
</label>
<label for="resumo">Resume
<textarea name="resumo" rows="2" cols="20">
<?php print $dados['resumo']?>
</textarea>
</label>
<label for="descricao">Content
<textarea name="conteudo" rows="2" cols="20">
<?php print $dados['conteudo']?>
</textarea>
</label>
<label for="submit">
<input class ="botaoTamanho" type="submit" name="submit" value="Update News"/>
</label>
</form>
</div>

