<br />
<div class="acao">
<a href="arquivos.php">View Files</a>
</div>
<br />
<div class="corpodados">
<form method="post" action="controller/RepositoryController.php?action=insert" enctype="multipart/form-data">
          <label for="filename">Title
		  <input id="filename" type="text" name="filename" />
		  </label><br />
		  
		  <label for="arquivo1">Description
         <textarea name="descricao"> </textarea>
		  </label><br />
		  
		 <label for="categoria">Category
          <select name="categoria">
		  <?php foreach($dados as $value){?>
		  <option value="<?php print $value['category']?>"><?php print $value['category']?></option>
		  <? } ?>
		  </select>
		  </label><br />
		  
		  	 <label for="status" class="radio">Available
         Public<input type="radio" name="status" value="publico" class="radio">
		  Private<input type="radio" name="status" value="privado" class="radio">
		  </label><br />		  
		  
		  <label for="arquivo1">File
          <input id="arquivo1" type="file" name="arquivo1" />
		  </label><br />
          
		  <label for="botao">
		  <input id="botao" type="submit" name="submit" value="cadastrar" class="botao"/>
		  </label>
</form>
</div>