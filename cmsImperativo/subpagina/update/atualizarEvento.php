<br />
<div class="acao">
<a href="eventos.php">visualizar Evento</a>
</div>
<br />
<div class="corpodados">
<form action="controller/update/atualizarEvento.php?id=<?=$dados['id']?>" method="post">
<label for="status" class="radio">Disponibilidade<br>
		  publico <input type="radio" name="status" value="publico" class="radio" >
		  privado <input type="radio" name="status" value="privado" class="radio">
		  </label><br />

<label for="nome">Título
<input type="text" name="titulo" value="<?=$dados['titulo']?>"/>
</label>
<label for="descricao">Descrição
<textarea name="descricao" rows="2" cols="20">
<?=$dados['descricao']?>
</textarea>
</label>
<label for="data">Data do Evento
<select name="dia">
<? for($i=1;$i<=31;$i++){?>
<option value="<?=$i?>"><?=$i?></option>
<?}?>
</select>
<select name="mes">
<? for($i=1;$i<=12;$i++){?>
<option value="<?=$i?>"><?=$i?></option>
<?}?>
</select>

<select name="ano">
<? for($i=2008;$i<=2010;$i++){?>
<option value="<?=$i?>"><?=$i?></option>
<?}?>
</select>
</label>

<label for="precoCadastrado">Preço Associado
<input type="text" name="precoAssociado" value="<?=$dados['precoAssociado']?>"/>
</label>
<label for="precoAvulso">Preço Avulso
<input type="text" name="precoAvulso" value="<?=$dados['precoAvulso']?>"/>
</label>
<input class="botaoTamanho" type="submit" name="submit" value="criar Evento"/>
</form>
</div>