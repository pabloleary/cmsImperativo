<br />
<div class="acao">
<a href="eventos.php">View Event</a>
</div>
<br />
<div class="corpodados">
<form action="controller/EventController.php?id=<?=$dados['id']?>&action=update" method="post">
<label for="status" class="radio">Available<br>
		  Public<input type="radio" name="status" value="publico" class="radio" >
		  Private<input type="radio" name="status" value="privado" class="radio">
		  </label><br />

<label for="nome">Title
<input type="text" name="titulo" value="<?php print $dados['titulo']?>"/>
</label>
<label for="descricao">Description
<textarea name="descricao" rows="2" cols="20">
<?php print $dados['descricao']?>
</textarea>
</label>
<label for="data">Date Event
<select name="dia">
<?php for($i=1;$i<=31;$i++){?>
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

<label for="precoCadastrado">Price for Associate
<input type="text" name="precoAssociado" value="<?php print $dados['precoAssociado']?>"/>
</label>
<label for="precoAvulso">Normal Price 
<input type="text" name="precoAvulso" value="<?php print $dados['precoAvulso']?>"/>
</label>
<input class="botaoTamanho" type="submit" name="submit" value="Update Event"/>
</form>
</div>