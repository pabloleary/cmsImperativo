
<form action="controller/inserirEvento.php" method="post">
<label for="nome">T�tulo
<input type="text" name="titulo"/>
</label>
<label for="descricao">Descri��o
<textarea name="descricao" rows="2" cols="20">
</textarea>
</label>
<label for="preco">Pre�o
<input type="text" name="preco"/>
</label>
<input class="botaoTamanho" type="submit" name="submit" value="enviar Noticia"/>
</form>



<form>
<select>
  <?foreach($dados as $value){ ?>
  <option value ="<?=$value['titulo']?>"><?=$value['titulo']?></option>
  <?}?>
  </select>
  <input class="botaoTamanho" type="button" name="submit" value="publicar"/>
  <input class="botaoTamanho" type="button" name="submit" value="despublicar"/>
</form>
