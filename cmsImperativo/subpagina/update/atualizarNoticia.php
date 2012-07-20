<br />
<div class="acao">
<a href="home.php">Visualizar Notícias</a>
<!--
<img src="criar.gif">
<img src="editar.gif">
<img src="deletar.gif">
-->

</div>
<br />
<div class="corpodados">
<form action="controller/update/atualizarNoticia.php?id=<?=$dados['id']?>" method="post">
<label for="status" class="radio">Disponibilidade<br>
		  publico <input type="radio" name="status" value="publico" class="radio" >
		  privado <input type="radio" name="status" value="privado" class="radio">
		  </label><br />
<label for="nome">Título
<input type="text" name="titulo" value="<?=$dados['titulo']?>"/>
</label>
<label for="resumo">Resumo Conteúdo
<textarea name="resumo" rows="2" cols="20">
<?=$dados['resumo']?>
</textarea>
</label>
<label for="descricao">Conteúdo
<textarea name="conteudo" rows="2" cols="20">
<?=$dados['conteudo']?>
</textarea>
</label>
<label for="submit">
<input class ="botaoTamanho" type="submit" name="submit" value="enviar Noticia"/>
</label>
</form>
</div>

