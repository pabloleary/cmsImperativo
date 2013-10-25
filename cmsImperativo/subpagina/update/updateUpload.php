<br />
<div class="acao">
    <a href="arquivos.php">visualizar arquivos</a>&nbsp;&nbsp;&nbsp;
    <a href="criarCategoria.php">Inserir Categoria</a>
</div>
<br />
<div class="corpodados">
    <form method="post" action="controller/RepositoryController.php?id=<?php print $dados['id']?>&action=update" enctype="multipart/form-data" id="myform">
        <label for="filename">Title
            <input id="filename" type="text" name="filename" value="<?php print $dados['nome']?>"/>
        </label><br />

        <label for="arquivo1">Description
            <textarea name="descricao"><?php print $dados["descricao"]?> </textarea>
        </label><br />

        <label for="categoria">Category
            <select name="categoria">

                <option value="<?php print $dados["categoria"]?>"><?php print $dados["categoria"]?></option>

            </select>
        </label><br />
        <label for="status" class="radio">Available
            Public<input type="radio" name="status" value="publico" class="radio" >
            Private<input type="radio" name="status" value="privado" class="radio">
        </label><br />

        <label for="botao">
            <input id="botao" type="submit" name="submit" value="Update File" class="botao"/>
        </label>
    </form>
</div>