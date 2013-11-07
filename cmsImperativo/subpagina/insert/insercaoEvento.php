<br />
<div class="acao">
<a href="schedule.php">Event View</a>
</div>
<br />
<div class="corpodados">
<form action="controller/inserirEvento.php" method="post">
<label for="nome">Title
<input type="text" name="titulo"/>
</label>
<label for="descricao">Description
<textarea name="descricao" rows="2" cols="20">
</textarea>
</label>
<label for="data">Event Date
<select name="dia">
<?php for($i=1;$i<=31;$i++){?>
<option value="<?php print $i?>"><?php print $i?></option>
<?}?>
</select>
<select name="mes">
<?php for($i=1;$i<=12;$i++){?>
<option value="<?php print $i?>"><?php print $i?></option>
<?php }?>
</select>
<select name="ano">
<?php for($i=2008;$i<=2010;$i++){?>
<option value="<?php print $i?>"><?php print $i?></option>
<?}?>
</select>
</label>
<label for="precoCadastrado">Price Member
<input type="text" name="precoAssociado"/>
</label>
<label for="precoAvulso">Price No Member
<input type="text" name="precoAvulso"/>
</label>
<input class="botaoTamanho" type="submit" name="submit" value="Insert Event"/>
</form>
</div>