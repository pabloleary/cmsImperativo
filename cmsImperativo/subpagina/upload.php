<br />
<div class="acao">
<a href="arquivos.php">visualizar arquivos</a>&nbsp;&nbsp;&nbsp;<a href="criar
Categoria.php">Inserir Categoria</a>
</div>
<br />
<div class="corpodados">
<form method="post" action="controller/UploadTeste.php" enctype="multipart/form-data">
          <label for="filename">Título
		  <input id="filename" type="text" name="filename" />
		  </label><br />
		  
		  <label for="arquivo1">Descrição
         <textarea name="descricao"> </textarea>
		  </label><br />
		  
		 <label for="categoria">Categoria
          <select name="categoria">
		  <? foreach($dados as $value){?>
		  <option value="<?=$value['categoria']?>"><?=$value['categoria']?></option>
		  <? } ?>
		  </select>
		  </label><br />
		  
		  	 <label for="status" class="radio">Disponibilidade
         publico <input type="radio" name="status" value="publico" class="radio">
		  privado <input type="radio" name="status" value="privado" class="radio">
		  </label><br />		  
		  
		  <label for="arquivo1">Arquivo
          <input id="arquivo1" type="file" name="arquivo1" />
		  </label><br />
          
		  <label for="botao">
		  <input id="botao" type="submit" name="submit" value="cadastrar" class="botao"/>
		  </label>
</form>
</div>