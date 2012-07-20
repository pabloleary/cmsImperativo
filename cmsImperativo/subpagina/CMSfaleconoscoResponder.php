
<form action="controller/inserirEvento.php" method="post">
<label for="nome">Título
<input type="text" name="titulo"/>
</label>
<label for="descricao">Descrição
<textarea name="descricao" rows="2" cols="20">
</textarea>
</label>
<label for="preco">Preço
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
